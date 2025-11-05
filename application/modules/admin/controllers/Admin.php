<?php
class Admin extends MX_Controller 
{

function __construct() {
parent::__construct();

$this->load->model('mdl_admin');
}

public function index()
{
    $user_type = $this->session->userdata('user_type');
    if($user_type == 'Admin')
    {
        $customer_where = 'status = "Active"';
        $data = array(
                'customers' => select_columns('customer_id,customer_name,phone','tbl_customers', $customer_where),
                'top_orders' => get_query_data('SELECT *,tbl_order.status as order_status,date(tbl_order.created_at) as creation_date FROM tbl_order 
                                            JOIN tbl_customers on tbl_customers.customer_id = tbl_order.customer_id
                                            JOIN tbl_naap_type on tbl_naap_type.id = tbl_order.naap_type 
                                            WHERE tbl_order.status = "Pending" ORDER BY tbl_order.created_at ASC LIMIT 10 '),
                'new_invoices'  => get_query_data('SELECT *, date(I.created_at) as creation_date FROM tbl_invoice as I
                                                 JOIN tbl_customers as C on C.customer_id = I.customer_id
                                                 JOIN tbl_order as O on O.invoice_id = I.invoice_id
                                                 WHERE I.invoice_status ="Pending" ORDER BY I.created_at DESC LIMIT 8'),
                'total_Customers'   => get_total('id', 'tbl_customers', $where=''),
                'total_orders'   => get_total('id', 'tbl_order', $where=''),

                'pending_orders'   => get_total('id', 'tbl_order', 'status = "Pending"'),
                'pending_invoices'   => get_total('id', 'tbl_invoice', 'invoice_status = "Pending"'),
                'total_invoices'   => get_total('id', 'tbl_invoice', $where=''),
                'today_income'   => get_sum('paid_amount', 'tbl_invoice', '(date(created_at) = date(NOW()) or date(updated_at = date(NOW())))'),
                'total_dues'   => get_sum('due_amount', 'tbl_invoice', ''),
        );

    $data['title'] = "Dashboard";
    $data['view_module'] = "admin";
    $data['view_files'] = "index";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    elseif ($user_type == '') {
        redirect('admin/login');
    }
    elseif ($user_type != 'Admin') {
        redirect('admin/page_not_found');
    }
}

public function page_not_found()
{

    $data['title'] = "404";
    $data['view_module'] = "admin";
    $data['view_files'] = "page_not_found";
    $this->load->module("templates");
    $this->templates->admin($data);

}

public function login()
{


    $this->load->view('admin/login');

}

public function check_auth()
{
    if($this->session->userdata('user_type') !='')
    {
        $user_type = $this->session->userdata('user_type');

            if ($user_type == 'Admin') {
               $this->session->set_flashdata('error_msg', 'You Are already Logged In.');
               redirect('admin/agent_list','refresh'); 
               // $this->load->view('admin/user_dashbaord');
            }
            

    }
    $submit = $this->input->post('submit');
    if($submit == 'Log In')
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if($email=="" || $password=="" ){   
            $this->session->set_flashdata('error_msg', 'Username or Password is empty. Please try again!');
            redirect(base_url().'admin/login');    
        }
        
        $user_login = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->load->model('mdl_admin');
        $data = $this->mdl_admin->validate_credentials($user_login['email'],$user_login['password']);
        if($data)
        {
            $this->session->set_userdata('id',$data['id']);
            $this->session->set_userdata('user_id',$data['user_id']);
            $this->session->set_userdata('email',$data['email']);
            $this->session->set_userdata('username',$data['username']);
            $this->session->set_userdata('user_type',$data['user_type']);
             //redirect('admin','refresh');
            // $this->load->view('admin/user_dashbaord');
            // echo ' i m here';
            $user_type = $this->session->userdata('user_type');

            if ($user_type == 'Admin') {
               redirect('admin','refresh'); 
               // $this->load->view('admin/user_dashbaord');
            }
            // elseif ($user_type == 'Software Manager' || $user_type == 'CEO' || $user_type == 'Admin'){
            //    redirect('admin','refresh'); 
            // }   

        }
        else
        {
            $this->session->set_flashdata('error_msg', 'You are Not Authorized Person, Contact to Admin.');
            redirect('admin/login');
        }   
    }
    else{
        redirect('admin/login');
    }
}

public function add_customer()
{
    $user_type = $this->session->userdata('user_type');
    if($user_type == 'Admin')
    {
        $submit = $this->input->post('submit');
        if($submit == 'Add')
        {
            $phone = $this->input->post('phone');
            $where = 'phone = '.$phone.'';
            $search_phone = select_columns('phone','tbl_customers', $where);
            if($search_phone[0]->phone == $phone)
            {
                $this->session->set_flashdata('error_msg', 'Customer Is Already Registerd. Please Search Customer');
                redirect('admin/customers');
            }else{

            $data = array(
                    'customer_id'   => date('dmy').'-'.date('His'),
                    'customer_name' => $this->input->post('customer_name'),
                    'phone'         => $phone
            );
            $result = save_data('tbl_customers',$data);
            if($result)
            {
                $id = 'id = '.$result.'';
                $customer_id = select_columns('customer_id','tbl_customers', $id);
                $this->session->set_flashdata('success', 'Customer Add Successfully.');
                redirect('admin/customer_detail/'.$customer_id[0]->customer_id.'');
            }
            else{
                $this->session->set_flashdata('error_msg', 'Customer Not Registerd Due to Error.');
                redirect('admin/customers');
            }
        }
        }
    }

}

public function customers()
{

    $data['title'] = "Custoemrs";
    $data['view_module'] = "admin";
    $data['view_files'] = "customers";
    $this->load->module("templates");
    $this->templates->admin($data);

}

public function customers_list()
{
     if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->customers_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $buttons = '<button type="button" class="btn btn-danger"><i class="fa icon-print"></i></button> <button type="button" class="btn btn-warning"><i class="fa icon-trash"></i></button> <a href="'.base_url('admin/customer_detail/'.$row->customer_id.'').'" class="btn btn-info"><i class="fa icon-edit"></i></a>';
            
                $sub_array = array();   
                $sub_array[] = $row->id;  
                $sub_array[] = $row->customer_name;     
                $sub_array[] = $row->phone;             
                $sub_array[] = $row->status;              
                $sub_array[] = $row->created_at;  
                $sub_array[] = $buttons;   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->customers_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->customers_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }

}

public function customer_detail($customer_id)
{
    $where = 'customer_id = "'.$customer_id.'"';
    $data = array(
            'customer_info' => select_columns('customer_name,phone','tbl_customers', $where),
            'naap'          => get_query_data('SELECT * FROM tbl_naap JOIN tbl_naap_type as T on T.id = tbl_naap.naap_type WHERE '.$where.'')

    );

    $data['title'] = "Customer Detail";
    $data['view_module'] = "admin";
    $data['view_files'] = "customer_detail";
    $this->load->module("templates");
    $this->templates->admin($data);

}

// checn naap first
public function check_customer_naap($naap_id,$customer_id)
{
    $data = get_query_data('SELECT id FROM tbl_naap WHERE naap_type = "'.$naap_id.'" AND customer_id = "'.$customer_id.'"');

    $output = $data[0]->id;
    if($output != '' || $output !=0)
    {
        echo 'naap found';
    }
    else if($output == '' || $output == 0){
        echo 'naap not found';
    }
}
// end check naap

public function customer_naap($customer_id)
{

    $submit = $this->input->post('add_naap');
    if($submit == 'Add Naap')
    {
        $naap_type = $this->input->post('naap_type');
        if($naap_type == 1){
            $data = array(
                    'customer_id'           => $customer_id,
                    'naap_type'             => $naap_type,
                    'lambai'                => $this->input->post('lambai'),
                    'teera'                 => $this->input->post('teera'),
                    'bazo'                  => $this->input->post('bazo'),
                    'kolar'                 => $this->input->post('kolar'),
                    'chati'                 => $this->input->post('chati'),
                    'kamar'                 => $this->input->post('kamar'),
                    'damn'                  => $this->input->post('damn'),
                    'shalwar'               => $this->input->post('shalwar'),
                    'panche'                => $this->input->post('panche'),
                    'side_pocket'           => $this->input->post('side_pocket'),
                    'pocket_gool'           => $this->input->post('pocket_gool'),
                    'pocket_choras'         => $this->input->post('pocket_choras'),
                    'damn_gool'             => $this->input->post('damn_gool'),
                    'damn_choras'           => $this->input->post('damn_choras'),
                    'kolar_design'          => $this->input->post('kolar_design'),
                    'gool_bain'             => $this->input->post('gool_bain'),
                    'half_bain'             => $this->input->post('half_bain'),
                    'choras_kuff'           => $this->input->post('choras_kuff'),
                    'gool_kuff'             => $this->input->post('gool_kuff'),
                    'bazo_design'           => $this->input->post('bazo_design'),
                    'gool_bazo'             => $this->input->post('gool_bazo'),
                    'koni_bazo'             => $this->input->post('koni_bazo'),
                    'upar_pati'             => $this->input->post('upar_pati'),
                    'sada_pati'             => $this->input->post('sada_pati'),
                    'choka_silai'           => $this->input->post('choka_silai'),
                    'double_silai'          => $this->input->post('double_silai'),
                    'chamak_taar_single_silai'         => $this->input->post('chamak_taar_single_silai'),
                    'chamak_tar_double_silai'         => $this->input->post('chamak_tar_double_silai'),
                    'zanjeer_silai'         => $this->input->post('zanjeer_silai'),
                    'single_choka'          => $this->input->post('single_choka'),
                    'shalwar_pocket'        => $this->input->post('shalwar_pocket'),
                    'gool_kuff_1'           => $this->input->post('gool_kuff_1'),
                    'sidha_kuff'            => $this->input->post('sidha_kuff'),
                    'fit_asteen'            => $this->input->post('fit_asteen'),
                    'stud_kaaj'             => $this->input->post('stud_kaaj'),
                    'fold_kuff'             => $this->input->post('fold_kuff'),
                    'comment'             => $this->input->post('comment')

        );

        }
        elseif ($naap_type == 2) {
            $data = array(
                    'customer_id'           => $customer_id,
                    'naap_type'             => $naap_type,
                    'lambai'                => $this->input->post('lambai'),
                    'teera'                 => $this->input->post('teera'),
                    'chati'                 => $this->input->post('chati'),
                    'kamar'                 => $this->input->post('kamar'),
                    'hip'                  => $this->input->post('hip'),
                    'asteen'               => $this->input->post('asteen'),
                    'coat_1_button'         => $this->input->post('coat_1_button'),
                    'coat_2_button'          => $this->input->post('coat_2_button'),
                    'coat_3_button'        => $this->input->post('coat_3_button'),
                    'coat_4_button'           => $this->input->post('coat_4_button'),
                    'coat_chaak_naho'            => $this->input->post('coat_chaak_naho'),
                    'coat_single_chaak'            => $this->input->post('coat_single_chaak'),
                    'coat_double_chaak'             => $this->input->post('coat_double_chaak'),
                    'comment'             => $this->input->post('comment')

        );
        }
        elseif ($naap_type == 3) {
            // waist code data here
            $data = array(
                    'customer_id'           => $customer_id,
                    'naap_type'             => $naap_type,
                    'lambai'                => $this->input->post('lambai'),
                    'teera'                 => $this->input->post('teera'),
                    'chati'                 => $this->input->post('chati'),
                    'kamar'                 => $this->input->post('kamar'),
                    'hip'                  => $this->input->post('hip'),
                    'waist_gool_gala'         => $this->input->post('waist_gool_gala'),
                    'waist_v_gala'          => $this->input->post('waist_v_gala'),
                    'waist_gala_bna'        => $this->input->post('waist_gala_bna'),
                    'waist_gool_ghera'           => $this->input->post('waist_gool_ghera'),
                    'waist_sedha_ghera'            => $this->input->post('waist_sedha_ghera'),
                    'comment'             => $this->input->post('comment')

        );

        }
        elseif ($naap_type == 4) {
            // waist code data here
            $data = array(
                    'customer_id'           => $customer_id,
                    'naap_type'             => $naap_type,
                    'lambai'                => $this->input->post('lambai'),
                    'kamar'                 => $this->input->post('kamar'),
                    'panche'                 => $this->input->post('panche'),
                    'hip'                  => $this->input->post('hip'),
                    'thaiz'                  => $this->input->post('thaiz'),
                    'paint_plat_ho'         => $this->input->post('paint_plat_ho'),
                    'paint_plat_naho'          => $this->input->post('paint_plat_naho'),
                    'paint_turn_pancha'        => $this->input->post('paint_turn_pancha'),
                    'paint_plain_pancha'           => $this->input->post('paint_plain_pancha'),
                    'comment'             => $this->input->post('comment')

        );

        }
        
        $result = save_data('tbl_naap',$data);
        if($result)
        {
            $this->session->set_flashdata('success', 'Customer Naap Added Successfully.');
                redirect('admin/customer_detail/'.$customer_id.'');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Customer Not Added Due to Error. Please Try Again');
                redirect('admin/customers');
        }

    }

    $where = 'customer_id = "'.$customer_id.'"';
    $where1 = 'status = "Active"';
    $data = array(
            'customer_info' => select_columns('customer_name,phone','tbl_customers', $where),
            'naap_type'     => select_data('tbl_naap_type',$where1)
    );

    $data['title'] = "Customer Detail";
    $data['view_module'] = "admin";
    $data['view_files'] = "customer_naap";
    $this->load->module("templates");
    $this->templates->admin($data);

}

public function edit_naap($customer_id,$naap_id)
{



    $submit = $this->input->post('add_naap');
    if($submit == 'Update Naap')
    {
        if($naap_id == 1){
            $data = array(
                    'lambai'                => $this->input->post('lambai'),
                    'teera'                 => $this->input->post('teera'),
                    'bazo'                  => $this->input->post('bazo'),
                    'kolar'                 => $this->input->post('kolar'),
                    'chati'                 => $this->input->post('chati'),
                    'kamar'                 => $this->input->post('kamar'),
                    'damn'                  => $this->input->post('damn'),
                    'shalwar'               => $this->input->post('shalwar'),
                    'panche'                => $this->input->post('panche'),
                    'side_pocket'           => $this->input->post('side_pocket'),
                    'pocket_gool'           => $this->input->post('pocket_gool'),
                    'pocket_choras'         => $this->input->post('pocket_choras'),
                    'damn_gool'             => $this->input->post('damn_gool'),
                    'damn_choras'           => $this->input->post('damn_choras'),
                    'kolar_design'          => $this->input->post('kolar_design'),
                    'gool_bain'             => $this->input->post('gool_bain'),
                    'half_bain'             => $this->input->post('half_bain'),
                    'choras_kuff'           => $this->input->post('choras_kuff'),
                    'gool_kuff'             => $this->input->post('gool_kuff'),
                    'bazo_design'           => $this->input->post('bazo_design'),
                    'gool_bazo'             => $this->input->post('gool_bazo'),
                    'koni_bazo'             => $this->input->post('koni_bazo'),
                    'upar_pati'             => $this->input->post('upar_pati'),
                    'sada_pati'             => $this->input->post('sada_pati'),
                    'choka_silai'           => $this->input->post('choka_silai'),
                    'double_silai'          => $this->input->post('double_silai'),
                    'chamak_taar_single_silai'         => $this->input->post('chamak_taar_single_silai'),
                    'chamak_tar_double_silai'         => $this->input->post('chamak_tar_double_silai'),
                    'zanjeer_silai'         => $this->input->post('zanjeer_silai'),
                    'single_choka'          => $this->input->post('single_choka'),
                    'shalwar_pocket'        => $this->input->post('shalwar_pocket'),
                    'gool_kuff_1'           => $this->input->post('gool_kuff_1'),
                    'sidha_kuff'            => $this->input->post('sidha_kuff'),
                    'fit_asteen'            => $this->input->post('fit_asteen'),
                    'stud_kaaj'             => $this->input->post('stud_kaaj'),
                    'fold_kuff'             => $this->input->post('fold_kuff'),
                    'comment'             => $this->input->post('comment')

        );

        }
        elseif ($naap_id == 2) {
            $data = array(
                    'lambai'                => $this->input->post('lambai'),
                    'teera'                 => $this->input->post('teera'),
                    'chati'                 => $this->input->post('chati'),
                    'kamar'                 => $this->input->post('kamar'),
                    'hip'                  => $this->input->post('hip'),
                    'asteen'               => $this->input->post('asteen'),
                    'coat_1_button'         => $this->input->post('coat_1_button'),
                    'coat_2_button'          => $this->input->post('coat_2_button'),
                    'coat_3_button'        => $this->input->post('coat_3_button'),
                    'coat_4_button'           => $this->input->post('coat_4_button'),
                    'coat_chaak_naho'            => $this->input->post('coat_chaak_naho'),
                    'coat_single_chaak'            => $this->input->post('coat_single_chaak'),
                    'coat_double_chaak'             => $this->input->post('coat_double_chaak'),
                    'comment'             => $this->input->post('comment')

        );
        }
        elseif ($naap_id == 3) {
            // waist code data here
            $data = array(
                    'lambai'                => $this->input->post('lambai'),
                    'teera'                 => $this->input->post('teera'),
                    'chati'                 => $this->input->post('chati'),
                    'kamar'                 => $this->input->post('kamar'),
                    'hip'                  => $this->input->post('hip'),
                    'waist_gool_gala'         => $this->input->post('waist_gool_gala'),
                    'waist_v_gala'          => $this->input->post('waist_v_gala'),
                    'waist_gala_bna'        => $this->input->post('waist_gala_bna'),
                    'waist_gool_ghera'           => $this->input->post('waist_gool_ghera'),
                    'waist_sedha_ghera'            => $this->input->post('waist_sedha_ghera'),
                    'comment'             => $this->input->post('comment')

        );

        }
        elseif ($naap_id == 4) {
            // waist code data here
            $data = array(
                    'lambai'                => $this->input->post('lambai'),
                    'kamar'                 => $this->input->post('kamar'),
                    'panche'                 => $this->input->post('panche'),
                    'hip'                  => $this->input->post('hip'),
                    'thaiz'                  => $this->input->post('thaiz'),
                    'paint_plat_ho'         => $this->input->post('paint_plat_ho'),
                    'paint_plat_naho'          => $this->input->post('paint_plat_naho'),
                    'paint_turn_pancha'        => $this->input->post('paint_turn_pancha'),
                    'paint_plain_pancha'           => $this->input->post('paint_plain_pancha'),
                    'comment'             => $this->input->post('comment')

        );

        }
        $update_naap_where = 'naap_type ='.$naap_id.' AND customer_id = "'.$customer_id.'"';
        $result = update_data_by_where('tbl_naap',$data,$update_naap_where);
        if($result)
        {
             
                
                $this->session->set_flashdata('error_msg', 'Customer Not Added Due to Error. Please Try Again');
                redirect('admin/customers'); 
        }
        else{
            $this->session->set_flashdata('success', 'Customer Naap Added Successfully.');
                redirect('admin/customer_detail/'.$customer_id.''); 
                
        }
    }


    $where = 'naap_type = "'.$naap_id.'" AND customer_id = "'.$customer_id.'"';
    $where1 = 'customer_id = "'.$customer_id.'"';
    $data = array(
            'customer_info' => select_columns('customer_name,phone','tbl_customers', $where1),
            'naap' => select_data('tbl_naap', $where),

    );
    if($naap_id == 1)
    {
        $page_path = "edit_suit_naap";
    }
    elseif ($naap_id == 2) {
        $page_path = "edit_coat_naap";
    }
    elseif ($naap_id == 3) {
        $page_path = "edit_waistcoat_naap";
    }
    elseif ($naap_id == 4) {
        $page_path = "edit_paint_naap";
    }


    $data['title'] = "Edit Customer Naap";
    $data['view_module'] = "admin";
    $data['view_files'] = $page_path;
    $this->load->module("templates");
    $this->templates->admin($data);

}

public function fetch_customer_naap($customer)
{
    //$customer = $this->input->post('customer');

    // $data = get_query_data("SELECT * FROM tbl_menu_category WHERE type = '".$cat."'");
    $data = get_query_data('SELECT naap_type,type_name,T.id as naap_type_id FROM tbl_naap JOIN tbl_naap_type as T on T.id = tbl_naap.naap_type WHERE customer_id = "'.$customer.'"');

    $output = '<option value="">Please Select Naap</option>';

    foreach ($data as $values) {

        $output .= '<option value="'.$values->naap_type_id.'">'.$values->type_name.'</option>';
    }
    echo $output;
}

public function fetch_customer_naap_price($customer_naap)
{
    //$customer = $this->input->post('customer');

    // $data = get_query_data("SELECT * FROM tbl_menu_category WHERE type = '".$cat."'");
    $data = get_query_data('SELECT price FROM tbl_naap_type WHERE id = "'.$customer_naap.'"');

    $output = $data[0]->price;
    // print_r($output);
    // exit();
    echo $output;
}


public function logout()
{
    $this->session->sess_destroy();
      redirect('admin/login', 'refresh');
}

// Invoice

public function invoices()
{

    $data['title'] = "Invoice";
    $data['view_module'] = "admin";
    $data['view_files'] = "invoices";
    $this->load->module("templates");
    $this->templates->admin($data);

}
public function invoices_list()
{
     if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->invoices_make_datatables();  
           $data = array();  
           $count = 1;
           foreach($fetch_data as $row)  
           {  
                $buttons = ' <div class="control-group" style="float:right;">
                                            <div class="controls">
                                            <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i></a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu" style="left: -50px;">
                                                <li  style="float:left;"><a href="'.base_url('admin/edit_posInvoice/'.$row->invoice_id.'').'"><i class="icon-pencil"></i> Edit</a></li>
                                                <li  style="float:left;"><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                <li  style="float:left;"><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                                <li  style="float:left;" class="divider"></li>
                                                <li  style="float:left;"><a href="#"><i class="i"></i> Make admin</a></li>
                                              </ul>
                                            </div> </div> </div> <a href="'.base_url('admin/view_invoice/'.$row->invoice_id.'').'" class="btn btn-success"><i class="fa icon-print"></i></a>';

                $status = $row->status;
                if($status == 'Partial Paid')
                {
                    $stats = '<label class="label label-warning">Partial Paid</label>';
                }
                elseif ($status == 'Unpaid') {
                    $stats = '<label class="label label-danger" style="background-color:red;">Unpaid</label>';
                }

                elseif ($status == 'Paid') {
                    $stats = '<label class="label label-success">Paid</label>';
                }

                $date_color = $row->return_date;
                if($date_color == date("Y-m-d"))
                {
                    $date = '<label style="color:red;font-size: 17px;">'.$date_color.'</label>';
                }
                else{
                    $date = $date_color;
                }
                
                $sub_array = array();   
                $sub_array[] = $count++;  
                $sub_array[] = $row->invoice_id;  
                $sub_array[] = $row->customer_name;     
                $sub_array[] = $row->grand_total;             
                $sub_array[] = $row->paid_amount;             
                $sub_array[] = $row->due_amount;             
                $sub_array[] = $date;             
                $sub_array[] = $row->invoice_status;             
                $sub_array[] = $stats;              
                $sub_array[] = $row->created_at;  
                $sub_array[] = $buttons;   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->invoices_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->invoices_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }

}

public function posInvoice()
{
    $customer_where = 'status = "Active"';
    $data = array(
                'fetch_customers'   => select_columns('customer_id,customer_name,phone','tbl_customers',$customer_where)
    );
    $data['title'] = "Invoice";
    $data['view_module'] = "admin";
    $data['view_files'] = "pos_invoice";
    $this->load->module("templates");
    $this->templates->admin($data);

}
public function view_invoice($invoice_id)
{
    $data['order_data'] = get_query_data('SELECT O.amount,O.discount,O.total,C.customer_name,N.type_name FROM tbl_order as O 
                                            JOIN tbl_customers as C on C.customer_id = O.customer_id 
                                            JOIN tbl_naap_type as N on N.id = O.naap_type 
                                            WHERE invoice_id = '.$invoice_id.'');
    $data['all_invoice_data'] = get_query_data('SELECT * FROM tbl_invoice WHERE invoice_id = '.$invoice_id.'');
    $data['title'] = "Invoice";
    $data['view_module'] = "admin/invoices";
    $data['view_files'] = "invoice_html";
    $this->load->module("templates");
    $this->templates->admin($data);

}


public function create_invoice()
{
     $submit = $this->input->post('submit');
     if($submit == 'Save And Paid')
    {
        $invoice_for_customer_id = $this->input->post('invoice_for_customer_id');
        $return_date  = $this->input->post('return_date');
        $invoice_id  = $this->input->post('invoice_id');
        $grand_total  = $this->input->post('grandTotal');
        $paid_amount  = $this->input->post('paidAmount');
        $due_amount  = $this->input->post('dueAmmount');
        $customer_id  = $this->input->post('customer_id');
        $invoice_status  = $this->input->post('invoice_status');


        $data1 = array(
                'customer_id'   => $invoice_for_customer_id,
                'invoice_id'   => $invoice_id,
                'return_date'   => $return_date,
                'grand_total'   => $grand_total,
                'paid_amount'   => $paid_amount,
                'due_amount'   => $due_amount,
                'invoice_status'   => $invoice_status,
        );

        if($paid_amount != 0 && $due_amount == 0)
        {
            $data1['status'] = 'Paid';
        }
        elseif ($paid_amount != 0 && $due_amount != 0) {
            $data1['status'] = 'Partial Paid';
        }
        else{
            $data1['status'] = 'Unpaid';
        }

        $result = save_data('tbl_invoice', $data1);
       
        if($result)
        {
            for ($i=0; $i < count($customer_id) ; $i++) { 

                $naap = $this->input->post('customer_naap');
                $discount_1 = $this->input->post('discount_1');
                $price = $this->input->post('price');
                $total = $this->input->post('total_amount');
                $data = array();
                $data = array(
                        'invoice_id'    => $invoice_id,
                        'order_id'      => rand(0000000,9999999),
                        'customer_id'   => $customer_id[$i],
                        'naap_type'     => $naap[$i],
                        'return_date'   => $return_date,
                        'amount'         => $price[$i],
                        'discount'         => $discount_1[$i],
                        'total'         => $total[$i]
                );

                $res = save_data('tbl_order', $data);
            
            }
            if($res)
            {
                    $this->session->set_flashdata('success', 'Invoice Generated.');
                    redirect('admin/view_invoice/'.$invoice_id.''); 
            }
            else{
                 $this->session->set_flashdata('error_msg', 'Customer Not Added Due to Error. Please Try Again');
                redirect('admin/invoices'); 
            }
        }


    }


}

public function edit_posInvoice($invoice_id)
{
    $customer_where = 'status = "Active"';
    $data = array(
                'fetch_customers'   => select_columns('customer_id,customer_name,phone','tbl_customers',$customer_where),
                'get_invoice'       => get_query_data('SELECT * FROM tbl_invoice as I JOIN tbl_customers as C on C.customer_id = I.customer_id where invoice_id = '.$invoice_id.''),
                'get_orders'        => get_query_data('SELECT * FROM tbl_order as O 
                                                    JOIN tbl_customers as C on C.customer_id = O.customer_id 
                                                    JOIN tbl_naap_type as N on N.id = O.naap_type
                                                    where invoice_id = '.$invoice_id.'')
    );
    $data['title'] = "Edit Invoice";
    $data['view_module'] = "admin";
    $data['view_files'] = "edit_invoice";
    $this->load->module("templates");
    $this->templates->admin($data);

}

public function edit_invoice($invoice_id)
{
     $submit = $this->input->post('submit');
     if($submit == 'Save And Paid')
    {
        $return_date  = $this->input->post('return_date');
        $grand_total  = $this->input->post('grandTotal');
        $paid_amount  = $this->input->post('paidAmount');
        $due_amount  = $this->input->post('dueAmmount');
        $customer_id  = $this->input->post('customer_id');
        $order_id  = $this->input->post('order_id');
        $invoice_status  = $this->input->post('invoice_status');

        $data1 = array(
                'return_date'   => $return_date,
                'grand_total'   => $grand_total,
                'paid_amount'   => $paid_amount,
                'due_amount'   => $due_amount,
                'invoice_status'   => $invoice_status,
        );

        if($paid_amount != 0 && $due_amount == 0)
        {
            $data1['status'] = 'Paid';
        }
        elseif ($paid_amount != 0 && $due_amount != 0) {
            $data1['status'] = 'Partial Paid';
        }
        else{
            $data1['status'] = 'Unpaid';
        }

        $where_invoice = 'invoice_id = '.$invoice_id.'';
        $result = update_data_by_where('tbl_invoice', $data1,$where_invoice);
        if($customer_id == '')
        {
            $this->session->set_flashdata('success', 'Invoice Updated Successfully!');
            redirect('admin/view_invoice/'.$invoice_id.''); 
        }
       
        else
        {

            for ($i=0; $i < count($customer_id) ; $i++) { 

                $naap = $this->input->post('customer_naap');
                $discount_1 = $this->input->post('discount_1');
                $price = $this->input->post('price');
                $total = $this->input->post('total_amount');
                $data = array();
                $data = array(
                        'invoice_id'    => $invoice_id,
                        'order_id'      => $order_id,
                        'customer_id'   => $customer_id[$i],
                        'naap_type'     => $naap[$i],
                        'return_date'   => $return_date,
                        'amount'         => $price[$i],
                        'discount'         => $discount_1[$i],
                        'total'         => $total[$i]
                );

                $res = save_data('tbl_order', $data);
            
            }
            if($res)
            {
                    $this->session->set_flashdata('success', 'Invoice Generated.');
                    redirect('admin/view_invoice/'.$invoice_id.''); 
            }
            else{
                 $this->session->set_flashdata('error_msg', 'Customer Not Added Due to Error. Please Try Again');
                redirect('admin/invoices'); 
            }
        }


    }


}

// END Invoice

// orders section
public function orders()
{

    $data['title'] = "Invoice";
    $data['view_module'] = "admin";
    $data['view_files'] = "orders";
    $this->load->module("templates");
    $this->templates->admin($data);

}
public function orders_list()
{
     if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->orders_make_datatables();  
           $data = array();  
           $count = 1;
           foreach($fetch_data as $row)  
           {  
                $buttons = '<button type="button" class="btn btn-danger"><i class="fa icon-print"></i></button> <a href="'.base_url('admin/customer_detail/'.$row->customer_id.'').'" class="btn btn-info"><i class="fa icon-edit"></i></a> 
                                           
                                            <div class="btn-group" style="float:right;">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i></a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu" style="left: -30px;min-width: 140px;">
                                              <li style="float:left;"><a href="#" class="change_order_status" id="'.$row->order_id.'" data-button_value="Process"> Process</a></li>
                                              <li style="float:left;"><a href="#" class="change_order_status" id="'.$row->order_id.'" data-button_value="Complete">Complete</a></li>
                                                <li style="float:left;"><a href="#" class="change_order_status" id="'.$row->order_id.'" data-button_value="Cancel"> Cancel</a></li>
                                                <li style="float:left;"><a href="#" >Edit <i class="icon-pencil"></i> </a></li>
                                                <li style="float:left;"><a href="#">Delete <i class="icon-trash"></i> </a></li>
                                              </ul>
                                            </div>';

                $stats = $row->status;
                if($stats == 'Pending')
                {
                    $status = '<span class="badge badge-pill badge-danger" style="font-size: 17px; background-color:red;">'.$stats.'</span>';
                }
                elseif ($stats == 'Complete') {
                    $status = '<label class="badge badge-pill badge-success" style="font-size: 17px;">'.$stats.'</label>';
                }
                elseif ($stats == 'Process') {
                    $status = '<label class="badge badge-pill badge-info" style="font-size: 17px;">'.$stats.'</label>';
                }

                $date_color = $row->return_date;
                if($date_color == date("Y-m-d"))
                {
                    $date = '<label style="color:red;font-size: 17px;">'.$date_color.'</label>';
                }
                elseif ($date_color < date("Y-m-d")) {
                    $date = '<label class="badge badge-pill badge-warning" style="font-size: 17px;">'.$date_color.'</label>';
                }
                else{
                    $date = $date_color;
                }
            
                $sub_array = array();   
                $sub_array[] = $count++;  
                $sub_array[] = $row->invoice_id;  
                $sub_array[] = $row->order_id;  
                $sub_array[] = $row->customer_name;     
                $sub_array[] = $row->type_name;     
                $sub_array[] = $row->amount;             
                $sub_array[] = $row->discount;             
                $sub_array[] = $row->total;             
                $sub_array[] = $date;             
                $sub_array[] = $status;              
                $sub_array[] = $row->created_at;  
                $sub_array[] = $buttons;   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->orders_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->orders_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }

}


public function change_order_status($order_id,$button_value)
{
     if( $this->session->userdata('user_type') == 'Admin')
    {

    $where = 'order_id = '.$order_id.'';
    $data = array(
                'status'    => $button_value
    );
    update_data_by_where('tbl_order',$data,$where);
    echo 'Status Changed';
    }
       else{
        redirect('admin/login');
    }
}
// END orders Section

//////////////// Customer Section //////////////////

public function customer_orders_list($customer_id)
{
     if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->customer_orders_make_datatables($customer_id);  
           $data = array();  
           $count = 1;
           foreach($fetch_data as $row)  
           {  
                $buttons = '<button type="button" class="btn btn-danger"><i class="fa icon-print"></i></button> <a href="'.base_url('admin/customer_detail/'.$row->customer_id.'').'" class="btn btn-info"><i class="fa icon-edit"></i></a> 
                                           
                                            <div style="float:right;" class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i></a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu" style="left:-27px;">
                                              <li style="float:left;"><a href="#" class="change_order_status" id="'.$row->order_id.'" data-button_value="Process"> Process</a></li>
                                              <li style="float:left;"><a href="#" class="change_order_status" id="'.$row->order_id.'" data-button_value="Complete">Complete</a></li>
                                                <li style="float:left;"><a href="#" class="change_order_status" id="'.$row->order_id.'" data-button_value="Cancel"> Cancel</a></li>
                                                <li style="float:left;"><a href="#" ><i class="icon-pencil"></i> Edit</a></li>
                                                <li class="divider" style="margin:0;"></li>
                                                <li style="float:left;"><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                              </ul>
                                            </div>';

                $stats = $row->status;
                if($stats == 'Pending')
                {
                    $status = '<span class="badge badge-pill badge-danger" style="font-size: 17px; background-color:red;">'.$stats.'</span>';
                }
                elseif ($stats == 'Complete') {
                    $status = '<label class="badge badge-pill badge-success" style="font-size: 17px;">'.$stats.'</label>';
                }
                elseif ($stats == 'Process') {
                    $status = '<label class="badge badge-pill badge-info" style="font-size: 17px;">'.$stats.'</label>';
                }

                $date_color = $row->return_date;
                if($date_color == date("Y-m-d"))
                {
                    $date = '<label style="color:red;font-size: 17px;">'.$date_color.'</label>';
                }
                elseif ($date_color < date("Y-m-d")) {
                    $date = '<label class="badge badge-pill badge-warning" style="font-size: 17px;">'.$date_color.'</label>';
                }
                else{
                    $date = $date_color;
                }
            
                $sub_array = array();   
                $sub_array[] = $count++;  
                $sub_array[] = $row->invoice_id;  
                $sub_array[] = $row->order_id;     
                $sub_array[] = $row->type_name;     
                $sub_array[] = $row->amount;             
                $sub_array[] = $row->discount;             
                $sub_array[] = $row->total;             
                $sub_array[] = $date;             
                $sub_array[] = $status;              
                $sub_array[] = $row->created_at;  
                $sub_array[] = $buttons;   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->customer_orders_get_all_data($customer_id),  
                "recordsFiltered"     =>     $this->mdl_admin->customer_orders_get_filtered_data($customer_id),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }

}


public function customer_invoice_list($customer_id)
{
     if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->customer_invoice_make_datatables($customer_id);  
           $data = array();  
           $count = 1;
           foreach($fetch_data as $row)  
           {  
                $buttons = ' <div class="control-group" style="float:right;">
                                            <div class="controls">
                                            <div class="btn-group">
                                              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i></a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu" style="left: -48px;">
                                                <li style="float:left;"><a href="'.base_url('admin/edit_posInvoice/'.$row->invoice_id.'').'"><i class="icon-pencil"></i> Edit</a></li>
                                                <li  style="float:left;"><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                                <li  style="float:left;"><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                                                <li  style="float:left;" class="divider" style="margin:0;"></li>
                                                <li  style="float:left;"><a href="#"><i class="i"></i> Make admin</a></li>
                                              </ul>
                                            </div> </div> </div> <a href="'.base_url('admin/view_invoice/'.$row->invoice_id.'').'" class="btn btn-success"><i class="fa icon-print"></i></a>';

                $status = $row->status;
                if($status == 'Partial Paid')
                {
                    $stats = '<label class="label label-warning">Partial Paid</label>';
                }
                elseif ($status == 'Unpaid') {
                    $stats = '<label class="label label-danger" style="background-color:red;">Unpaid</label>';
                }

                elseif ($status == 'Paid') {
                    $stats = '<label class="label label-success">Paid</label>';
                }

                $date_color = $row->return_date;
                if($date_color == date("Y-m-d"))
                {
                    $date = '<label style="color:red;font-size: 17px;">'.$date_color.'</label>';
                }
                else{
                    $date = $date_color;
                }
                
                $sub_array = array();   
                $sub_array[] = $count++;  
                $sub_array[] = $row->invoice_id;    
                $sub_array[] = $row->grand_total;             
                $sub_array[] = $row->paid_amount;             
                $sub_array[] = $row->due_amount;             
                $sub_array[] = $date;             
                $sub_array[] = $row->invoice_status;             
                $sub_array[] = $stats;              
                $sub_array[] = $row->created_at;  
                $sub_array[] = $buttons;   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->customer_invoice_get_all_data($customer_id),  
                "recordsFiltered"     =>     $this->mdl_admin->customer_invoice_get_filtered_data($customer_id),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }

}



//////////////// END customer Section//////////////

/////////////// Naap Printing section ////////////
public function print_customer_naap($customer_id, $naap_id)
{
    $data['naap_data'] = get_query_data('SELECT * FROM tbl_naap as n JOIN tbl_naap_type as t on t.id = n.naap_type
                                        JOIN tbl_customers as c on c.customer_id = n.customer_id
                                        WHERE n.customer_id = "'.$customer_id.'" AND n.naap_type ='.$naap_id.'');

    if($naap_id == 1)
    {
        $page_path = "suit_naap";
    }
    elseif ($naap_id == 2) {
        $page_path = "coat_naap";
    }
    elseif ($naap_id == 3) {
        $page_path = "waistcoat_naap";
    }
    elseif ($naap_id == 4) {
        $page_path = "paint_naap";
    }



    $data['title'] = "Print Customer Naap";
    $data['view_module'] = "admin/print_naap";
    $data['view_files'] = $page_path;
    $this->load->module("templates");
    $this->templates->admin($data);
}
/////////////// Naap Printing section ////////////














}