 
<div class="main">
	
	<div class="main-inner">

	    <div id="tailor-form" class="container">
	
	      <div class="row">	      	
	      	<div class="span12">
	      		<div class="widget">
	      			<h1><u><?php echo $customer_info[0]->customer_name; ?></u></h1>
	      			<h3><?php echo $customer_info[0]->phone; ?></h3>
	      		</div>
	      	</div>
	      </div> <!-- /row -->

	      <div class="row">
	      	<?php foreach ($naap as $n) {
	      		# code...
	      	} ?>
	      	<form id="form-edit" action="<?php echo base_url('admin/edit_naap/'.$this->uri->segment(3).'/'.$this->uri->segment(4).''); ?>" class="form-horizontal" method="post">
	      		<fieldset>

	      			<div class="row">
	      				<div class="span12">
	      					<div class="control">
	      					<select id="naap_type" name="naap_type" style="float: right;" disabled="">
							  <option value="" selected>Select Type</option>
							  <option value="Suit" <?php if($n->naap_type == '1'){ echo 'selected = "selected"';} ?>>Suit</option>
							  <option value="Coat" <?php if($n->naap_type == '2'){ echo 'selected = "selected"';} ?>>Coat</option>
							  <option value="Waist Coat" <?php if($n->naap_type == '3'){ echo 'selected = "selected"';} ?>>Waist Coat</option>
							  <option value="Paint" <?php if($n->naap_type == '4'){ echo 'selected = "selected"';} ?>>Paint</option>
							</select>
							</div>
	      				</div>
	      			</div>
	      			<br>

	      			

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
				            </div>
				            <!-- /widget-content --> 
				          </div>
				          </div>
	      			</div>


	      			<div id="image_section" class="row">
	      				<div class="span10" style="text-align: center;">
	      					<div class="row">
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/side-pocket.png">
	      							<hr>
	      							<h4>سایڈ پاکٹ <input type="checkbox" name="side_pocket" value="Yes" <?php if($n->side_pocket == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      							
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-pocket.png">
	      							<hr>
	      							<h4>جیب گول <input type="checkbox" name="pocket_gool" value="Yes" <?php if($n->pocket_gool == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square-pocket.png">
	      							<hr>
	      							<h4>جیب چورس<input type="checkbox" name="pocket_choras" value="Yes" <?php if($n->pocket_choras == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle.png">
	      							<hr>
	      							<h4>دامن گول <input type="checkbox" name="damn_gool" value="Yes" <?php if($n->damn_gool == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square.png">
	      							<hr>
	      							<h4>دامن چورس  <input type="checkbox" name="damn_choras" value="Yes" <?php if($n->damn_choras == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>

	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/colar.png">
	      							<hr>
	      							<h4>کالر <input type="checkbox" name="kolar_design" value="Yes" <?php if($n->kolar_design == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>	      						
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-ban.png">
	      							<hr>
	      							<h4>گول بین <input type="checkbox" name="gool_bain" value="Yes" <?php if($n->gool_bain == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/half-ban.png">
	      							<hr>
	      							<h4>ہاف بین <input type="checkbox" name="half_bain" value="Yes" <?php if($n->half_bain == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square-kuff.png">
	      							<hr>
	      							<h4>چورس کف  <input type="checkbox" name="choras_kuff" value="Yes" <?php if($n->choras_kuff == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-kuff.png">
	      							<hr>
	      							<h4>گول کف <input type="checkbox" name="gool_kuff" value="Yes" <?php if($n->gool_kuff == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>

	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square-cutting.png">
	      							<hr>
	      							<h4>بازو  <input type="checkbox" name="bazo_design" value="Yes" <?php if($n->bazo_design == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-arm.png">
	      							<hr>
	      							<h4>گول بازو <input type="checkbox" name="gool_bazo" value="Yes" <?php if($n->gool_bazo == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/cutting-arm.png">
	      							<hr>
	      							<h4>کنی بازو <input type="checkbox" name="koni_bazo" value="Yes" <?php if($n->koni_bazo == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/upper-pati.png">
	      							<hr>
	      							<h4>اوپر پٹی  <input type="checkbox" name="upar_pati" value="Yes" <?php if($n->upar_pati == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/simple-pati.png">
	      							<hr>
	      							<h4>سادہ پٹی <input type="checkbox" name="sada_pati" value="Yes" <?php if($n->sada_pati == 'Yes'){echo 'checked="checked"';} ?>></h4>
	      						</div>
	      					</div>	
	      				</div>
	      				<div id="stitching" class="span2">
	      					<div class="widget widget-table action-table">
					            <!-- /widget-header -->
					            <div class="widget-content">
					              <table class="table table-striped table-bordered">
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
					            </div>
					            <!-- /widget-content --> 
					          </div>
	      				</div>
	      				
	      			</div>


	      			<div id="bottom-options" class="row">
	      				<div class="span12">
	      					<div class="control-group" style="float: right;">											
			      				<div class="controls">
			      					<label class="span2 checkbox inline">
			      						گول کف <input type="checkbox" value="Yes" <?php if($n->gool_kuff_1 == 'Yes'){echo 'checked="checked"';} ?> name="gool_kuff_1">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						سیدھا کف <input type="checkbox" value="Yes" <?php if($n->sidha_kuff == 'Yes'){echo 'checked="checked"';} ?> name="sidha_kuff">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						فٹ استین <input type="checkbox" value="Yes" <?php if($n->fit_asteen == 'Yes'){echo 'checked="checked"';} ?> name="fit_asteen">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						اسٹڈ کاج <input type="checkbox" value="Yes" <?php if($n->stud_kaaj == 'Yes'){echo 'checked="checked"';} ?> name="stud_kaaj">
			      					</label>
			      					<label class="checkbox inline">
			      						فولڈ کف <input type="checkbox" value="Yes" <?php if($n->fold_kuff == 'Yes'){echo 'checked="checked"';} ?> name="fold_kuff">
			      					</label>
			      				</div>			
			      			</div> 
	      				</div>
	      			</div>
	      			<textarea style="width:97%;height: 50px;margin-top: 20px;" class="form-control" rows="6" cols="6" name="comment" placeholder="Additional Comment"><?php echo $n->comment; ?></textarea>


	      			<div class="row">
	      				<div class="span12">
	      					<div style="margin:0 auto;text-align:center;margin-top: 40px;">
			      				<button type="submit" name="add_naap" value="Update Naap" class="btn btn-success"><i class="fa icon-save"></i><br>Update</button>
            <button type="button" class="btn btn-danger"><i class="fa icon-print"></i><br>Print</button>
<!--             <button type="button" class="btn btn-warning"><i class="fa icon-trash"></i><br>Delete</button> -->
            <button type="button" class="btn btn-info"><i class="fa icon-remove"></i><br>Close</button>
			      			</div>
	      				</div>
	      			</div>
	      			

	      		</fieldset>
	      	</form>
	      </div>
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
</div> <!-- /main -->
    

<?php include('includes/footer.php'); ?>  
    
