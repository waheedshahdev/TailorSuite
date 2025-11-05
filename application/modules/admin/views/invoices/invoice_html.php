
<!-- Printable area start -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
	// document.body.style.marginTop="-45px";
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<!-- Printable area end -->

<style type="text/css">
	
table{
	width: 100%;
}
ul{
	margin:0;
}
ul li{
	list-style: none !important;
}
td input{
	width: auto !important;
}
</style>


<div class="main">

  <div class="main-inner">
    <div class="container">
      <?php 
      if($this->session->flashdata("error_msg") != ''){?>
       <div class="alert alert-danger">
         <button class="close" data-dismiss="alert"></button>
         <?php echo $this->session->flashdata("error_msg");?>
       </div>
       <?php
     }
     ?>
     <?php 
     if($this->session->flashdata("success") != ''){?>
       <div class="alert alert-success">
         <button class="close" data-dismiss="alert"></button>
         <?php echo $this->session->flashdata("success");?>
       </div>
       <?php
     }
     ?>


     <div class="row" style="margin-left: 0;">
      <div class="breadcrumbs">
<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
	                <div id="printableArea">
	                    <div class="panel-body">
	                       
								<!-- end model for return  -->


	                        
	                            <!-- <div class="col-sm-8" style="display: inline-block;width: 64%">
	                                <address style="margin-top:10px">
	                                    <strong>Shafi Jan Tailor</strong><br>
	                                  
	                                </address>
	                            </div>
	                            <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">
	                                <h2 class="m-t-0">Invoice</h2>
	                                <div>Invoice No: <?php echo $all_invoice_data[0]->invoice_id; ?></div>
	                                <div>Payment Status: <?php echo $all_invoice_data[0]->status; ?></div>
	                                <div>Invoice Status: <?php echo $all_invoice_data[0]->invoice_status; ?></div>

	                                <div class="m-b-15">Invoice Date: <?php echo $all_invoice_data[0]->created_at; ?></div>

	                            </div> -->
	                        </div> 
<table style="width: 100%;">
 	<tr>
 		<td style="vertical-align: top;text-align: left !important;">
 			<h2><img src="<?php echo base_url('adminfiles/img/icon.png'); ?>">Shafi Jan Tailor</h2>
 		</td>
 		<td style="text-align:left !important;padding-left: 25%;">
 			<h2>Invoice</h2>
 			<ul style="margin:0;">
 				<li style="list-style: none !important;">Invoice No: <strong><?php echo $all_invoice_data[0]->invoice_id; ?></strong></li>
 				<li style="list-style: none !important;">Order No: <strong><?php echo $all_invoice_data[0]->status; ?></strong></li>
 				<li style="list-style: none !important;">Invoice Status: <strong><?php echo $all_invoice_data[0]->invoice_status; ?></strong></li>
 				<li style="list-style: none !important;">Invoice Date: <strong><?php echo $all_invoice_data[0]->created_at; ?></strong></li>
 			</ul>
 		</td>
 	</tr>
</table>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Customer</th>
			<th>Naap</th>
			<th>Rate</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($order_data as $value):?>
			<tr>

				<td style="text-align: left !important;"><div><strong><?php echo $value->customer_name; ?></strong></div></td>
				<td style="text-align: left !important;"><?php echo $value->type_name; ?></td>
				<td style="text-align: left !important;"><?php echo $value->amount; ?></td>
				<td style="text-align: left !important;"><?php echo $value->total; ?></td>

			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<table style="width:100%;">
	<tr>
		<td style="text-align:left !important;padding-left: 72%;" class="grand_total" style="font-size:15px;"><strong>Grand Total</strong> : <b><?php echo $all_invoice_data[0]->grand_total; ?></b>
		</td>
	</tr>
	<tr>
		<td style="text-align:left !important;padding-left: 72%;" style="border-top: 0; border-bottom: 0; font-size:15px;"><strong>Paid Amount: <?php echo $all_invoice_data[0]->paid_amount; ?></strong>
		</td>
	</tr>				 
	<?php
	if ($all_invoice_data[0]->due_amount != 0) {
		?>
		<tr>
			<td style="text-align:left !important;padding-left: 72%;"><strong>Due : <?php echo $all_invoice_data[0]->due_amount; ?></strong></td>
		</tr>
		<?php
	}
	?>
</table>

<table>
	<tr style="float: left;text-align: left;">
		<td style="text-align: left !important;">
			<p>Description</p>
			<p><?php //echo display('invoice_description')?></p>
		    <p>Thanks For Shopping Here</p>
		    <h3><b>نوٹ:  واپسی کے لئے بل کا ہونا لازمی ہے</b> </h3>
		</td>
	</tr>
</table>

<div class="panel-footer text-left" style="margin: 10px 0;">
	<a  class="btn btn-danger" href="<?php echo base_url('admin/invoices');?>">Cancel</a>
	<a  class="btn btn-info" href="#" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>
</div>
	                        
	                    </div>
	                </div>

                     
                </div>
            </div>
        <!-- </div> -->
</div> <!-- /.content-wrapper -->


  </div>
  <!-- /row --> 
</div>
<!-- /container --> 
</div>



</div>
