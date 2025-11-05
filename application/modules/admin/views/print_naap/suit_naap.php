
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


<div class="main" style="padding-bottom: 0;">

  <div class="main-inner">
    <div class="container">

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
<style type="text/css">
	
table{
	width: 100%;
}
ul{
	margin:0;
}
ul li{
	list-style: none;
}
#naap th{
	text-align: right;
	font-size: 16px !important;
}
#image_section img {
    width: 50% !important;
}
#image_section hr{
	width: 50%;
}
#side-size th{
	text-align: right;
	font-size: 12px !important;
}
#bottom-size label{
	font-size: 22px;
	float: right;
}
#bottom-size input{
	float: right !important;
}
td input{
	width: auto !important;
}
#naap input{
	width: 100% !important;
}
</style>


<table>
 	<tr>
 		<td style="vertical-align: top;text-align: left !important;">
 			<h2><img src="<?php echo base_url('adminfiles/img/icon.png'); ?>">Shafi Jan Tailor</h2>
 		</td>
 		<td style="text-align:left !important;padding-left: 10%;">
 			<h2>Suit Naap</h2>
 			<ul  style="text-decoration: none;" >
 				<li>Customer No: <strong><?php echo $n->customer_id; ?></strong></li>
 				<li>Custoamer Name:  <strong><?php echo $n->customer_name; ?></strong></li>
 				<li>Print Date:  <strong><?php echo date('d/m/Y')?></strong></li>
 			</ul>
 		</td>
 	</tr>
</table>

<hr>
<?php foreach ($naap_data as $n) {
	# code...
} ?>
<table id="naap" class="table table-striped table-bordered" style="border: 2px solid #dddddd;">
 	<thead style="text-align: right !important;">
 		<tr>
 			<th>لمبائی </th>
 			<th>تیرہ </th>
 			<th>بازو </th>
 			<th>کالر </th>
 			<th>چھاتی </th>
 			<th>کمر </th>
 			<th>دامن </th>
 			<th>شلوار</th>
 			<th>پانچے </th>
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
 						<input type="text" id="firstname" value="<?php echo $n->bazo; ?>" name="bazo" >
 					</div>
 				</div> 
 			</td>
 			<td>
 				<div class="control-group">											
 					<div class="controls">
 						<input type="text" id="firstname" value="<?php echo $n->kolar; ?>" name="kolar" >
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
 			<td>
 				<div class="control-group">											
 					<div class="controls">
 						<input type="text" id="firstname" value="<?php echo $n->kamar; ?>" name="kamar" >
 					</div>
 				</div> 
 			</td>
 			<td>
 				<div class="control-group">											
 					<div class="controls">
 						<input type="text" id="firstname" value="<?php echo $n->damn; ?>" name="damn" >
 					</div>
 				</div> 
 			</td>
 			<td>
 				<div class="control-group">											
 					<div class="controls">
 						<input type="text" id="firstname" value="<?php echo $n->shalwar; ?>" name="shalwar" >
 					</div>
 				</div> 
 			</td>
 			<td>
 				<div class="control-group">											
 					<div class="controls">
 						<input type="text" id="firstname" value="<?php echo $n->panche; ?>" name="panche" >
 					</div>
 				</div> 
 			</td>
 		</tr>
 	</tbody>
</table>


<table id="image_section" style="width:80%;float: left;">
	<tr>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/side-pocket.png">
	      	<hr>
	      	<h4>سایڈ پاکٹ <input type="checkbox" name="side_pocket" value="Yes" <?php if($n->side_pocket == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/circle-pocket.png">
	      	<hr>
	      	<h4>جیب گول <input type="checkbox" name="pocket_gool" value="Yes" <?php if($n->pocket_gool == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/square-pocket.png">
	      	<hr>
	      	<h4>جیب چورس<input type="checkbox" name="pocket_choras" value="Yes" <?php if($n->pocket_choras == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/circle.png">
	      	<hr>
	      	<h4>دامن گول <input type="checkbox" name="damn_gool" value="Yes" <?php if($n->damn_gool == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/square.png">
	      	<hr>
	      	<h4>دامن چورس  <input type="checkbox" name="damn_choras" value="Yes" <?php if($n->damn_choras == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
	</tr>

	<tr>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/colar.png">
	      	<hr>
	      	<h4>کالر <input type="checkbox" name="kolar_design" value="Yes" <?php if($n->kolar_design == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/circle-ban.png">
	      	<hr>
	      	<h4>گول بین <input type="checkbox" name="gool_bain" value="Yes" <?php if($n->gool_bain == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/half-ban.png">
	      	<hr>
	      	<h4>ہاف بین <input type="checkbox" name="half_bain" value="Yes" <?php if($n->half_bain == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/square-kuff.png">
	      	<hr>
	      	<h4>چورس کف  <input type="checkbox" name="choras_kuff" value="Yes" <?php if($n->choras_kuff == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/circle-kuff.png">
	      	<hr>
	      	<h4>گول کف <input type="checkbox" name="gool_kuff" value="Yes" <?php if($n->gool_kuff == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
	</tr>

	<tr>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/square-cutting.png">
	      	<hr>
	      	<h4>بازو  <input type="checkbox" name="bazo_design" value="Yes" <?php if($n->bazo_design == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/circle-arm.png">
	      	<hr>
	      	<h4>گول بازو <input type="checkbox" name="gool_bazo" value="Yes" <?php if($n->gool_bazo == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/cutting-arm.png">
	      	<hr>
	      	<h4>کنی بازو <input type="checkbox" name="koni_bazo" value="Yes" <?php if($n->koni_bazo == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/upper-pati.png">
	      	<hr>
	      	<h4>اوپر پٹی  <input type="checkbox" name="upar_pati" value="Yes" <?php if($n->upar_pati == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
		<td>
			<img src="<?php echo base_url(); ?>adminfiles/img/simple-pati.png">
	      	<hr>
	      	<h4>سادہ پٹی <input type="checkbox" name="sada_pati" value="Yes" <?php if($n->sada_pati == 'Yes'){echo 'checked="checked"';} ?>></h4>
		</td>
	</tr>
</table>


<table id="side-size" class="table table-striped table-bordered" style="width:20%;float: right;border: 2px solid #dddddd;">
	<thead>
		<tr>
			<th>چوکہ سلائی <input type="checkbox" value="Yes" <?php if($n->choka_silai == 'Yes'){echo 'checked="checked"';} ?> name="choka_silai"></th>
		</tr>
		<tr>
			<th>ڈبل سلائی <input type="checkbox" value="Yes" <?php if($n->double_silai == 'Yes'){echo 'checked="checked"';} ?> name="double_silai"></th>
		</tr>
		<tr>
			<th>چمک تار سنگل سلائی <input type="checkbox" value="Yes" <?php if($n->chamak_taar_single_silai == 'Yes'){echo 'checked="checked"';} ?> name="chamak_taar_single_silai"></th>
		</tr>
		<tr>
			<th>چمک تار ڈبل سلائی<input type="checkbox" value="Yes" <?php if($n->chamak_tar_double_silai == 'Yes'){echo 'checked="checked"';} ?> name="chamak_tar_double_silai"></th>
		</tr>
		<tr>
			<th>زبجیر سلائی <input type="checkbox" value="Yes" <?php if($n->zanjeer_silai == 'Yes'){echo 'checked="checked"';} ?> name="zanjeer_silai"></th>
		</tr>
		<tr>
			<th>سنگل چوکہ<input type="checkbox" value="Yes" <?php if($n->single_choka == 'Yes'){echo 'checked="checked"';} ?> name="single_choka"></th>
		</tr>
		<tr>
			<th>شلوار پاکٹ <input type="checkbox" value="Yes" <?php if($n->shalwar_pocket == 'Yes'){echo 'checked="checked"';} ?> name="shalwar_pocket"></th>
		</tr>
	</thead>
</table>


<table id="bottom-size" style="float: right !important;">
	<tr>
		<td>
			<label>
			گول کف <input type="checkbox" value="Yes" <?php if($n->gool_kuff_1 == 'Yes'){echo 'checked="checked"';} ?> name="gool_kuff_1"></label>
		</td>
		<td>
			<label>
			سیدھا کف <input type="checkbox" value="Yes" <?php if($n->sidha_kuff == 'Yes'){echo 'checked="checked"';} ?> name="sidha_kuff"></label>
		</td>
		<td>
			<label>
			فٹ استین <input type="checkbox" value="Yes" <?php if($n->fit_asteen == 'Yes'){echo 'checked="checked"';} ?> name="fit_asteen"></label>
		</td>
		<td>
			<label>
				اسٹڈ کاج <input type="checkbox" value="Yes" <?php if($n->stud_kaaj == 'Yes'){echo 'checked="checked"';} ?> name="stud_kaaj"></label>
		</td>
		<td>
			<label>
			فولڈ کف <input type="checkbox" value="Yes" <?php if($n->fold_kuff == 'Yes'){echo 'checked="checked"';} ?> name="fold_kuff"></label>
		</td>
	</tr>
</table>

<table>
	<tr>
		<td style="text-align: left !important;">
	      	<textarea style="width:99%;height: 50px;margin-top: 20px;" class="form-control" rows="6" cols="6" name="comment" placeholder="Additional Comment"><?php echo $n->comment; ?></textarea>
		</td>
	</tr>
</table>

<table>
	<tr style="float: left;text-align: left;">
		<td style="text-align: left !important;">
			<!--<p>Description</p>-->
			<p><?php //echo display('invoice_description')?></p>
		    <p>Thanks For Shopping Here</p>
		    <h3><b>نوٹ:  واپسی کے لئے بل کا ہونا لازمی ہے</b> </h3>
		</td>
	</tr>
</table>

	      		</fieldset>

	                        
	                        
	                    </div>
	                </div>


<div class="panel-footer text-left" style="margin: 10px 0;">
    <a  class="btn btn-danger" href="<?php echo base_url('admin/invoices');?>">Cancel</a>
	<a  class="btn btn-info" href="" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>
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
