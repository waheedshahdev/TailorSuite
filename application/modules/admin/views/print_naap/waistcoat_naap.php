
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


<div class="main">

  <div class="main-inner">
    <div class="container">


     <div class="row" style="margin-left: 0;">
      <div class="breadcrumbs">
<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
        <div class="row">
        	<div id="printableArea">
            <?php foreach ($naap_data as $n) {
	      		# code...
	      	} ?>

	      		<fieldset>
<style type="text/css">

table{
	width: 100%;
}
label{
	font-size: 20px;
    margin-top: 20px;
}
th{
	font-size: 17px !important;
}
.checkbox input[type="checkbox"] {
    float: none;
    margin-left: 5px;
    width: 25px;
    height: 25px;
}
.radio input[type="radio"], .checkbox input[type="checkbox"]{
	margin-top: -3px;
    margin-left: 10px;
    float: right;
}
	
</style>	      			

<table>
 	<tr>
 		<td style="vertical-align: top;text-align: left !important;">
 			<h2><img src="<?php echo base_url('adminfiles/img/icon.png'); ?>">Shafi Jan Tailor</h2>
 		</td>
 		<td style="text-align:left !important;padding-left: 10%;">
 			<h2>Waist Coat Naap</h2>
 			<ul style="text-decoration: none;" >
 				<li>Customer No: <strong><?php echo $n->customer_id; ?></strong></li>
 				<li>Custoamer Name:  <strong><?php echo $n->customer_name; ?></strong></li>
 				<li>Print Date:  <strong><?php echo date('d/m/Y')?></strong></li>
 			</ul>
 		</td>
 	</tr>
</table>

<hr>

<table class="table table-striped table-bordered" style="margin-bottom: 5px;border: 2px solid #dddddd;">
	<thead>
		<tr>

			<th>لمبائی </th>
			<th>تیرہ </th>
			<th>چھاتی </th>
			<th>کمر </th>
			<th>HIP </th>

		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<div class="control-group">											
					<div class="controls">
						<input type="text" id="firstname" name="lambai" value="<?php echo $n->lambai; ?>">
					</div>
				</div> 
			</td>

			<td>
				<div class="control-group">											
					<div class="controls">
						<input type="text" id="firstname" value="<?php echo $n->teera; ?>" name="teera" >
					</div>
				</div> 
			</td>
			<td>
				<div class="control-group">											
					<div class="controls">
						<input type="text" id="firstname" value="<?php echo $n->chati; ?>" name="chati" >
					</div>
				</div> 
			</td>

			<td id="coat_hip_column_1">
				<div class="control-group">											
					<div class="controls">
						<input type="text" id="firstname" value="<?php echo $n->kamar; ?>" name="kamar" >
					</div>
				</div> 
			</td>
			<td id="coat_thaiz_column_1">
				<div class="control-group">											
					<div class="controls">
						<input type="text" placeholder="hip" id="firstname" value="<?php echo $n->hip; ?>" name="hip" >
					</div>
				</div> 
			</td>
		</tr>
	</tbody>
</table>




	      			<div id="bottom-options" class="row paint_checboxes">
	      				<div class="">
	      					<div class="control-group" style="float: right;">											
			      				<div class="controls">
			      					<label class="checkbox inline">
			      						سیدھا گھرا<input type="checkbox" value="Yes" <?php if($n->waist_sedha_ghera == 'Yes'){echo 'checked="checked"';} ?> name="waist_sedha_ghera">
			      					</label>
			      					<label class="checkbox inline">
			      						گول گھرا <input type="checkbox" value="Yes" <?php if($n->waist_gool_ghera == 'Yes'){echo 'checked="checked"';} ?> name="waist_gool_ghera">
			      					</label>
			      					<label class="checkbox inline">
			      						گلہ بنہ<input type="checkbox" value="Yes" <?php if($n->waist_gala_bna == 'Yes'){echo 'checked="checked"';} ?> name="waist_gala_bna">
			      					</label>
			      					<label class="checkbox inline">
			      						وی گلہ <input type="checkbox" value="Yes" <?php if($n->waist_v_gala == 'Yes'){echo 'checked="checked"';} ?> name="waist_v_gala">
			      					</label>
			      					<label class="checkbox inline">
			      						گول گلہ <input type="checkbox" value="Yes" <?php if($n->waist_gool_gala == 'Yes'){echo 'checked="checked"';} ?> name="waist_gool_gala">
			      					</label>
			      				</div>		
			      			</div> 
	      				</div>
	      			</div>
	      			<textarea style="width:99%;height: 50px;margin-top: 20px;" class="form-control" rows="6" cols="6" name="comment" placeholder="Additional Comment"><?php echo $n->comment; ?></textarea>


	      			<div class="panel-footer text-left">
                     	<a  class="btn btn-danger" href="<?php echo base_url('admin/invoices');?>">Cancel</a>
						<a  class="btn btn-info" href="" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>
						
                    </div>
	      			

	      		</fieldset>
	      	
            </div>
        </div>
</div> <!-- /.content-wrapper -->


  </div>
  <!-- /row --> 
</div>
<!-- /container --> 
</div>



</div>
