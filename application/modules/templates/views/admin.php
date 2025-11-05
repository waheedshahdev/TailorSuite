<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tailor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>adminfiles/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>adminfiles/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo base_url(); ?>adminfiles/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>adminfiles/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>adminfiles/css/pages/dashboard.css" rel="stylesheet">
<!-- <link href="<?php echo base_url(); ?>adminfiles/css/pages/signin.css" rel="stylesheet" type="text/css"> -->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
      
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
      <a style="padding-right: 5px;" class="brand" href="index.php">Tailor 
      <img src="<?php echo base_url('adminfiles/img/logo.png'); ?>"> Admin Dashboard</a>

      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form> -->
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="<?php echo base_url('admin'); ?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="<?php echo base_url('admin/customers'); ?>"><i class="icon-user"></i><span>Customers</span> </a> </li>
        <li><a href="<?php echo base_url('admin/orders'); ?>"><i class="icon-table"></i><span>Orders</span> </a></li>
        <li><a href="<?php echo base_url('admin/invoices'); ?>"><i class="icon-bar-chart"></i><span>Invoices</span> </a> </li>
        <li><a href="<?php echo base_url('admin/reports'); ?>"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
            <!--ND NAVBAR-->

            <?php if(isset($view_files))

            $this->load->view($view_module.'/'.$view_files);

            ?>


 <div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12" style="color: #000;"> &copy; 2020 <a href="#">Shafi Tailor</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url(); ?>adminfiles/js/jquery-1.7.2.min.js"></script> 
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   -->
<script src="<?php echo base_url(); ?>adminfiles/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>adminfiles/js/chart.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>adminfiles/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>adminfiles/js/full-calendar/fullcalendar.min.js"></script>

<script src="<?php echo base_url(); ?>adminfiles/js/base.js"></script> 

<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            
          ]
        });
      });
    </script><!-- /Calendar -->
    <script type="text/javascript">
        
            // start promo code list
    var tb_customer;
    $(document).ready(function(){  
      tb_customer = $('#customer_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/customers_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });

    var tbl_invoice;
    $(document).ready(function(){  
      tbl_invoice = $('#invoices_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/invoices_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });

        var tbl_orders;
    $(document).ready(function(){  
      tbl_orders = $('#orders_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/orders_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });


    // customer order List
            var tbl_orders;
    $(document).ready(function(){  
      var customer_id = $('#get_customer_id').val();
      tbl_orders = $('#customer_orders_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/customer_orders_list/'; ?>"+customer_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });

                var tbl_invoice;
    $(document).ready(function(){  
      var customer_id = $('#get_customer_id').val();
      tbl_invoice = $('#customer_invoice_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/customer_invoice_list/'; ?>"+customer_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end customer order list

// New Order Dependent Dropdown
$(document).on('change','#customer', function(){

  var customer = $('#customer').val();

  if(customer !=''){
    $.ajax({
      url: '<?php echo base_url();?>admin/fetch_customer_naap/'+customer,
      method: 'post',
      success:function(data){
        
       $('#select_naap').html(data);

      }

    })  

  }


});
// END order Dropdown

// change order status
$(document).on('click','.change_order_status', function(){

           var order_id = $(this).attr('id');
           var button_value = $(this).data('button_value');
           if(confirm('Are you sure you want to Change status to '+button_value+''))
           {
                $.ajax({
                    url: '<?php echo base_url();?>admin/change_order_status/'+order_id+'/'+button_value,
                    method: 'POST',
                    // data:{order_id:order_id, button_value:button_value},
                    success:function(data){

                        alert(data);
                        
                        // $('#cart_detail').html(data);
                       // top.location.href="<?php echo base_url();?>home";//redirection
                        window.location.reload();
                    }

                });
           }
           else{

            return false;
           }


        });

// end change order status 

// check naap already inserted or not

$(document).on('change','.naap_type', function(){

           var naap_id = $(this).val();
           var customer_id = $(this).data('customer_id');
           
                $.ajax({
                    url: '<?php echo base_url();?>admin/check_customer_naap/'+naap_id+'/'+customer_id,
                    method: 'POST',
                    // data:{order_id:order_id, button_value:button_value},
                    success:function(data){

                        if(data == 'naap found'){
                            $('#alert_message').html('<div class="alert alert-danger">Naap Already Found! Please Update the Old Naap.</div>');
                            $('.add_naap_button').prop('disabled',true);
                        }
                        if(data == 'naap not found'){
                          $('#alert_message').html('<div class="alert alert-success">You can add this Naap! Its not added before.</div>');
                            $('.add_naap_button').prop('disabled',false);
                        }
                        
                        // $('#cart_detail').html(data);
                       // top.location.href="<?php echo base_url();?>home";//redirection
                    }

                });
          


        });
// end check naap




// invoice Dependent Dropdown

function get_customer(t){
$(document).on('change','#customer_id_'+t+'', function(){

  var customer = $('#customer_id_'+t+'').val();



  if(customer !=''){
    $.ajax({
      url: '<?php echo base_url();?>admin/fetch_customer_naap/'+customer,
      method: 'post',
      success:function(data){
        
       $('#customer_naap_'+t+'').html(data);

      }

    })  

  }


});
}
function customer_naa(t){
$(document).on('change','#customer_naap_'+t+'', function(){

  var customer_naap = $('#customer_naap_'+t+'').val();

  if(customer_naap !=''){
    $.ajax({
      url: '<?php echo base_url();?>admin/fetch_customer_naap_price/'+customer_naap,
      method: 'post',
      success:function(data){
        
       $('#price_'+t+'').val(data);
       $('#total_amount_'+t+'').val(data);

      }

    })  

  }


});
}
// END invoice Dependent Dropdown
function discount_count(t){
$(document).on('keyup','#discount_1_'+t+'', function(){

  var price = $('#price_'+t+'').val();
  var discount = $('#discount_1_'+t+'').val();

    $("#total_amount_"+t+"").val(price - discount);



    calculateSum(), invoice_paidamount()
  

});
}

  function calculateSum() {
    var t = 0,
    a = 0,
    e = 0,
    o = 0;
    $(".total_price").each(function() {
      isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
    }), o = a.toFixed(0), e = t.toFixed(0), $("#grandTotal").val(+o + +e)
  }

  function invoice_paidamount() {
    var t = $("#grandTotal").val(),
    a = $("#paidAmount").val(),
    e = t - a;
    $("#dueAmmount").val(e)
  }


//INVOICE CODE END

$(document).on('change','#payment_type', function(){

  var payment = $('#payment_type').val();

  if(payment == 'Paid'){
     
    $("#display_Test").show();
  }
  if (payment == 'Unpaid') 
  {
    $("#display_Test").hide(); 
  }

});

$(document).on('keyup','#amount', function(){

  var amount = $('#amount').val();

    $("#total").val(amount);
  

});

$(document).on('keyup','#discount', function(){

  var amount = $('#amount').val();
  var discount = $('#discount').val();


     
    $("#total").val(amount-discount);
  

});

// Invoice
  var count = 1; 
var limits = 300;
$(document).ready(function(){
 $(document).on('click', '.add', function(){
  var html = '';

  
  if (count == limits) alert("You have reached the limit of adding " + +count+1 + " inputs");
    else {
      count++;
        
      
  html += '<tr>';
  html += '<td><select name="customer_id[]" id="customer_id_'+ count +'" onchange="get_customer('+ count +');" class="form-control customer_id"><option value="">Please Select Customer</option><?php foreach ($fetch_customers as $value):?><option value="<?php echo $value->customer_id; ?>"><?php echo $value->customer_name.' ('.$value->phone.')'; ?></option><?php endforeach; ?></select></td>';
  html += '<td><select name="customer_naap[]" id="customer_naap_'+ count +'" onchange="customer_naa('+ count +')" class="customer_naap"></select></td>';

  html += '<td><input class="form-control text-right price" type="text" name="price[]" id="price_'+ count +'" value="0.00" readonly="readonly"></td>';
   html += '<td><input type="number" name="discount_1[]" id="discount_1_'+ count +'" onkeyup="discount_count('+count+')" class="form-control text-right" placeholder="Discount"></td>';
   html += '<td><input type="number" name="total_amount[]" id="total_amount_'+ count +'" class="total_price form-control text-right" placeholder="Total"></td>';
  html += '<td><button style="text-align: right;" class="btn btn-danger remove" type="button" name="remove" value="Delete">Delete</button></td></tr>';
  $('#item_table').append(html);
  }


 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#addinvoice').on('submit', function(event){
  event.preventDefault();
  var error = '';
  
  $('.customer_id').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Customer Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.customer_naap').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Customer Naap at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  // var form_data = $(this).serialize();
  // if(error == '')
  // {
  //   var invoice_for_customer_id = $('#invoice_for_customer_id').val();
  //   var return_date = $('#return_date').val();
  //   var invoice_id = $('#invoice_id').val();
  //   var grandTotal = $('#grandTotal').val();
  //   var paidAmount = $('#paidAmount').val();
  //   var dueAmmount = $('#dueAmmount').val();
  //   // alert(return_date);
  //  $.ajax({
  //   url:"<?php echo base_url(); ?>admin/create_invoice",
  //   method:'post',
  //   data:{return_date:return_date},
  //   dataType: 'text',
  //   success:function(data)
  //   {
  //    // if(data == 'ok')
  //    // {
  //    //  $('#item_table').find("tr:gt(0)").remove();
  //    //  $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
  //    // }
  //    alert(data);
  //   }
  //  });
  // }
  // else
  // {
  //  $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  // }
 });
 
});

// END invoice




    </script>
</body>
</html>
