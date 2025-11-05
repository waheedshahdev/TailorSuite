<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_admin extends CI_Model
{



function __construct() {
parent::__construct();
}	
		var $invoices_table = "tbl_invoice";  
    	var $invoices_select_column = array("tbl_invoice.invoice_id", "tbl_invoice.customer_id", "grand_total", "paid_amount", "due_amount", "return_date", "tbl_invoice.status", "invoice_status", "tbl_invoice.created_at","tbl_customers.customer_name");  
      	var $invoices_order_column = array(null, "tbl_customers.customer_name", "tbl_invoice.invoice_id", null, null);

        //orders
        var $orders_table = "tbl_order";  
        var $orders_select_column = array("tbl_order.invoice_id", "tbl_order.order_id","tbl_order.customer_id", "tbl_order.naap_type","amount", "total", "discount", "return_date", "tbl_order.status",  "tbl_order.created_at","tbl_customers.customer_name","tbl_naap_type.type_name");  
        var $orders_order_column = array(null, "tbl_customers.customer_name", "tbl_order.invoice_id", null, null); 

      	
      // user Table code
        var $customers_table = "tbl_customers";  
        var $customers_select_column = array("id", "customer_id", "customer_name", "phone", "status", "created_at");  
        var $customers_order_column = array(null, "phone", "customer_name", null, null); 




public function validate_credentials($email, $password){
        $sql = "SELECT * FROM tbl_users WHERE email='".$email."' AND password='".md5($password)."' AND status = 'Active'";
          if($query=$this->db->query($sql))
          {
              return $query->row_array();
          }
          else{
            return false;
          }
    
    }

    // Invoice list 
    function invoices_make_query()  
      {  
            $this->db->select($this->invoices_select_column);  
            $this->db->from($this->invoices_table);
            $this->db->join('tbl_customers','tbl_customers.customer_id = tbl_invoice.customer_id');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("customer_name", $_POST["search"]["value"]);  
                $this->db->or_like("invoice_id", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->invoices_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('tbl_invoice.id', 'DESC');  
           }  
      }  
      function invoices_make_datatables(){  
           $this->invoices_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function invoices_get_filtered_data(){  
           $this->invoices_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function invoices_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->invoices_table); 

           return $this->db->count_all_results();  
      }

      // end invoice list 


      // Orders list 
    function orders_make_query()  
      {  
            $this->db->select($this->orders_select_column);  
            $this->db->from($this->orders_table);
            $this->db->join('tbl_customers','tbl_customers.customer_id = tbl_order.customer_id');
            $this->db->join('tbl_naap_type','tbl_naap_type.id = tbl_order.naap_type');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("customer_name", $_POST["search"]["value"]);  
                $this->db->or_like("invoice_id", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->orders_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('tbl_order.id', 'DESC');  
           }  
      }  
      function orders_make_datatables(){  
           $this->orders_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function orders_get_filtered_data(){  
           $this->orders_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function orders_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->orders_table); 

           return $this->db->count_all_results();  
      }

      // orders invoice list




      // user list
       function customers_make_query()  
      {  
           $this->db->select($this->customers_select_column);  
           $this->db->from('tbl_customers');
          
           if(isset($_POST["search"]["value"]))  
           {   
                $this->db->like("customer_name", $_POST["search"]["value"]);  
                $this->db->or_like("phone", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->customers_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function customers_make_datatables(){  
           $this->customers_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function customers_get_filtered_data(){  
           $this->customers_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function customers_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->customers_table); 
            return $this->db->count_all_results(); 

      }

      // end user list

      // Customer Orders List
          function customer_orders_make_query($customer_id)  
      {  
            $this->db->select($this->orders_select_column);  
            $this->db->from($this->orders_table);
            $where = "tbl_order.customer_id = '".$customer_id."'";
            $this->db->where($where);
            $this->db->join('tbl_customers','tbl_customers.customer_id = tbl_order.customer_id');
            $this->db->join('tbl_naap_type','tbl_naap_type.id = tbl_order.naap_type');

           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("order_id", $_POST["search"]["value"]);  
                // $this->db->or_like("invoice_id", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->orders_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('tbl_order.id', 'DESC');  
           }  
      }  
      function customer_orders_make_datatables($customer_id){  
           $this->customer_orders_make_query($customer_id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function customer_orders_get_filtered_data($customer_id){  
           $this->customer_orders_make_query($customer_id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function customer_orders_get_all_data($customer_id)  
      {  
           $this->db->select("*");  
           $this->db->from($this->orders_table); 

           return $this->db->count_all_results();  
      }
      // END cutomer Order List


            // Customer Invoice List
          function customer_invoice_make_query($customer_id)  
      {  
            $this->db->select($this->invoices_select_column);  
            $this->db->from($this->invoices_table);
            $where = "tbl_invoice.customer_id = '".$customer_id."'";
            $this->db->where($where);
            $this->db->join('tbl_customers','tbl_customers.customer_id = tbl_invoice.customer_id');

           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("invoice_id", $_POST["search"]["value"]);  
                // $this->db->or_like("invoice_id", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->invoices_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('tbl_invoice.id', 'DESC');  
           }  
      }  
      function customer_invoice_make_datatables($customer_id){  
           $this->customer_invoice_make_query($customer_id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function customer_invoice_get_filtered_data($customer_id){  
           $this->customer_invoice_make_query($customer_id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function customer_invoice_get_all_data($customer_id)  
      {  
           $this->db->select("*");  
           $this->db->from($this->invoices_table); 

           return $this->db->count_all_results();  
      }
      // END Invoice Order List


      




}