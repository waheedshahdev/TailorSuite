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


<div class="main">
	
	<div class="main-inner">

	    <div id="tailor-form" class="container">

	      <div class="row">
	      	<?php foreach ($naap_data as $n) {
	      		# code...
	      	} ?>
	      		<div id="printableArea">
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
 			<h2>Coat Naap</h2>
 			<ul style="text-decoration: none;" >
 				<li>Customer No: <strong><?php echo $n->customer_id; ?></strong></li>
 				<li>Custoamer Name:  <strong><?php echo $n->customer_name; ?></strong></li>
 				<li>Print Date:  <strong><?php echo date('d/m/Y')?></strong></li>
 			</ul>
 		</td>
 	</tr>
</table>

<hr>

	      			

	      			<div class="row">
	      				<div class="span12">
	      				<div class="widget widget-table action-table">
				            <!-- /widget-header -->
				            <div class="widget-content" style="border-radius: 0;">
				              <table class="table table-striped table-bordered">
				                <thead>
				                  <tr>
				                    
				                    <th>لمبائی </th>
				                    <th>تیرہ </th>
				                    <th>چھاتی </th>
				                    <th>کمر </th>
				                    <th>بHip</th>
				                    <th>Asteen</th>
				                    
				                    
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
				                    <td>
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" value="<?php echo $n->kamar; ?>" name="kamar" >
						      				</div>
						      			</div> 
				                    </td>

				                    <td id="coat_hip_column_1">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="hip" id="firstname" value="<?php echo $n->hip; ?>" name="hip" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="coat_asteen_column_1">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="asteen" id="firstname" value="<?php echo $n->asteen; ?>" name="asteen" >
						      				</div>
						      			</div> 
				                    </td>
				                  </tr>

				                
				                </tbody>
				              </table>
				            </div>
				            <!-- /widget-content --> 
				          </div>
				          </div>
	      			</div>


	      			<div id="bottom-options" class="row coat_checboxes">
	      				<div class="span12">
	      					<div class="control-group" style="float: right;">											
			      				
			      				<div class="controls text-set">
			      					<label class="span2 checkbox inline">
			      						4 بٹن<input type="checkbox" value="Yes" <?php if($n->coat_4_button == 'Yes'){echo 'checked="checked"';} ?> name="coat_4_button">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						3 بٹن<input type="checkbox" value="Yes" <?php if($n->coat_3_button == 'Yes'){echo 'checked="checked"';} ?> name="coat_3_button">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						2 بٹن<input type="checkbox" value="Yes" <?php if($n->coat_2_button == 'Yes'){echo 'checked="checked"';} ?> name="coat_2_button">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						1 بٹن<input type="checkbox" value="Yes" <?php if($n->coat_1_button == 'Yes'){echo 'checked="checked"';} ?> name="coat_1_button">
			      					</label>
			      				
			      				</div>	

			      				<br><br>

			      				<div class="controls text-set" style="float: right;">
			      					
			      					<label class="span2 checkbox inline">
			      						چاک نہ ہو<input type="checkbox" value="Yes" name="coat_chaak_naho" <?php if($n->coat_chaak_naho == 'Yes'){echo 'checked="checked"';} ?>>
			      					</label>
			      					<label class="span2 checkbox inline">
			      						سنگل چاک <input type="checkbox" value="Yes" name="coat_single_chaak" <?php if($n->coat_single_chaak == 'Yes'){echo 'checked="checked"';} ?>>
			      					</label>
			      					<label class="checkbox inline">
			      						ڈبل چاک <input type="checkbox" value="Yes" name="coat_double_chaak" <?php if($n->coat_double_chaak == 'Yes'){echo 'checked="checked"';} ?>>
			      					</label>
			      				</div>			
			      			</div> 
	      				</div>
	      			</div>
	      			<textarea style="width:97%;height: 50px;margin-top: 20px;" class="form-control" rows="6" cols="6" name="comment" placeholder="Additional Comment"><?php echo $n->comment; ?></textarea>


	      			<div class="panel-footer text-left" style="margin: 10px 0;">
                     	<a  class="btn btn-danger" href="<?php echo base_url('admin/invoices');?>">Cancel</a>
						<a  class="btn btn-info" href="" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>
						
                    </div>
	      			

	      		</fieldset>
	      	</div>
	      </div>
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
</div> <!-- /main -->
