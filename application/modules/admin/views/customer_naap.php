 
<div class="main">
	
	<div class="main-inner">

	    <div id="tailor-form" class="container">
	
	      <div class="row">	      	
	      	<div class="span12">
	      		<div class="widget">
	      			<h1><?php echo $customer_info[0]->customer_name; ?></h1>
	      			<h3><?php echo $customer_info[0]->phone; ?></h3>
	      		</div>
	      	</div>
	      </div> <!-- /row -->

	      <div class="row">
	      	<span id="alert_message"></span>
	      	<form id="form-edit" action="<?php echo base_url('admin/customer_naap/'.$this->uri->segment(3).''); ?>" class="form-horizontal" method="post">
	      		<fieldset>

	      			<div class="row">
	      				<div class="span12">
	      					<div class="control">
	      					<select id="naap_type" name="naap_type" required="" class="naap_type" data-customer_id = "<?php echo $this->uri->segment(3); ?>" style="float: right;">
							  <option value="">Select Type</option>
							  <?php foreach ($naap_type as $type):?>
							  <option value="<?php echo $type->id; ?>"><?php echo $type->type_name; ?></option>
							<?php endforeach; ?>
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
				                    <th id="teera_column" style="display: none;">تیرہ </th>
				                    <th id="bazo_column" style="display: none;">بازو </th>
				                    <th id="kolar_column" style="display: none;">کالر </th>
				                    <th id="chati_column" style="display: none;">چھاتی </th>
				                    <th>کمر </th>
				                    <th id="damn_column" style="display: none;">دامن </th>
				                    <th id="shalwar_column" style="display: none;">شلوار</th>
				                    <th id="panche_column" style="display: none;">پانچے </th>
				                    <th id="coat_hip_column" style="display: none;">Hip </th>
				                    <th id="coat_asteen_column" style="display: none;">Asteen </th>
				                    <th id="coat_thaiz_column" style="display: none;">Thaiz </th>
				                  </tr>
				                </thead>
				                <tbody>
				                  <tr>
				                    <td>
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="lambai" >
						      				</div>
						      			</div> 
				                    </td>

				                    <td id="teera_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="teera" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="bazo_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="bazo" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="kolar_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="kolar" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="chati_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="chati" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td>
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="kamar" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="damn_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="damn" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="shalwar_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="shalwar" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="panche_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" id="firstname" name="panche" >
						      				</div>
						      			</div> 
				                    </td>


				                    <!-- coat code -->
				                    <td id="coat_hip_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="hip" id="firstname" name="hip" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="coat_asteen_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="asteen" id="firstname" name="asteen" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="coat_thaiz_column_1" style="display: none;">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="thaiz" id="firstname" name="thaiz" >
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




	      			<div id="image_section" style="display: none;" class="row">
	      				<div class="span10" style="text-align: center;">
	      					<div class="row">
	      						
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/side-pocket.png">
	      							<hr>
	      							<h4>سایڈ پاکٹ <input type="checkbox" name="side_pocket" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-pocket.png">
	      							<hr>
	      							<h4>جیب گول <input type="checkbox" name="pocket_gool" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square-pocket.png">
	      							<hr>
	      							<h4>جیب چورس<input type="checkbox" name="pocket_choras" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle.png">
	      							<hr>
	      							<h4>دامن گول <input type="checkbox" name="damn_gool" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square.png">
	      							<hr>
	      							<h4>دامن چورس  <input type="checkbox" name="damn_choras" value="Yes"></h4>
	      						</div>

	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/colar.png">
	      							<hr>
	      							<h4>کالر <input type="checkbox" name="kolar_design" value="Yes"></h4>
	      						</div>	      						
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-ban.png">
	      							<hr>
	      							<h4>گول بین <input type="checkbox" name="gool_bain" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/half-ban.png">
	      							<hr>
	      							<h4>ہاف بین <input type="checkbox" name="half_bain" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square-kuff.png">
	      							<hr>
	      							<h4>چورس کف  <input type="checkbox" name="choras_kuff" value="Yes"></h4>
	      						</div>
	      						<div class="span2">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-kuff.png">
	      							<hr>
	      							<h4>گول کف <input type="checkbox" name="gool_kuff" value="Yes"></h4>
	      						</div>

	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/square-cutting.png">
	      							<hr>
	      							<h4>بازو  <input type="checkbox" name="bazo_design" value="Yes"></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/circle-arm.png">
	      							<hr>
	      							<h4>گول بازو <input type="checkbox" name="gool_bazo" value="Yes"></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/cutting-arm.png">
	      							<hr>
	      							<h4>کنی بازو <input type="checkbox" name="koni_bazo" value="Yes"></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/upper-pati.png">
	      							<hr>
	      							<h4>اوپر پٹی  <input type="checkbox" name="upar_pati" value="Yes"></h4>
	      						</div>
	      						<div class="span2 mt-15">
	      							<img src="<?php echo base_url(); ?>adminfiles/img/simple-pati.png">
	      							<hr>
	      							<h4>سادہ پٹی <input type="checkbox" name="sada_pati" value="Yes"></h4>
	      						</div>
	      					</div>	
	      				</div>
	      				<div id="stitching" class="span2" style="display: none;">
	      					<div class="widget widget-table action-table">
					            <!-- /widget-header -->
					            <div class="widget-content">
					              <table class="table table-striped table-bordered">
					                <thead>
					                  <tr>
					                    <th>چوکہ سلائی <input type="checkbox" value="Yes" name="choka_silai"></th>
					                  </tr>
					                  <tr>
					                  	<th>ڈبل سلائی <input type="checkbox" value="Yes" name="double_silai"></th>
					                  </tr>
					                  <tr>
					                  	<th>چمک تار سنگل سلائی <input type="checkbox" value="Yes" name="chamak_taar_single_silai"></th>
					                  </tr>
					                  <tr>
					                  	<th>چمک تار ڈبل سلائی<input type="checkbox" value="Yes" name="chamak_tar_double_silai"></th>
					                  </tr>
					                  <tr>
					                  	<th>زبجیر سلائی <input type="checkbox" value="Yes" name="zanjeer_silai"></th>
					                  </tr>
					                  <tr>
					                  	<th>سنگل چوکہ<input type="checkbox" value="Yes" name="single_choka"></th>
					                  </tr>
					                  <tr>
					                  	<th>شلوار پاکٹ <input type="checkbox" value="Yes" name="shalwar_pocket"></th>
					                  </tr>
					                </thead>
					              </table>
					            </div>
					            <!-- /widget-content --> 
					          </div>
	      				</div>
	      				
	      			</div>


	      			<div id="bottom-options" class="row bottom_checkboxes" style="display: none;">
	      				<div class="span12">
	      					<div class="control-group" style="float: right;">											
			      				<div class="controls">
			      					<label class="span2 checkbox inline">
			      						گول کف <input type="checkbox" value="Yes" name="gool_kuff_1">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						سیدھا کف <input type="checkbox" value="Yes" name="sidha_kuff">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						فٹ استین <input type="checkbox" value="Yes" name="fit_asteen">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						اسٹڈ کاج <input type="checkbox" value="Yes" name="stud_kaaj">
			      					</label>
			      					<label class="checkbox inline">
			      						فولڈ کف <input type="checkbox" value="Yes" name="fold_kuff">
			      					</label>
			      				</div>			
			      			</div> 
	      				</div>
	      			</div>
	      			<div id="bottom-options" class="row waistcoat_checboxes" style="display: none;">
	      				<div class="span12">
	      					<div class="control-group" style="float: right;">											
			      				<div class="controls">
			      					<label class="span2 checkbox inline">
			      						سیدھا گھرا<input type="checkbox" value="Yes" name="waist_sedha_ghera">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						گول گھرا <input type="checkbox" value="Yes" name="waist_gool_ghera">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						گلہ بنہ<input type="checkbox" value="Yes" name="waist_gala_bna">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						وی گلہ <input type="checkbox" value="Yes" name="waist_v_gala">
			      					</label>
			      					<label class="checkbox inline">
			      						گول گلہ <input type="checkbox" value="Yes" name="waist_gool_gala">
			      					</label>
			      				</div>			
			      			</div> 
	      				</div>
	      			</div>
	      			<div id="bottom-options" class="row paint_checboxes" style="display: none;">
	      				<div class="span12">
	      					<div class="control-group" style="float: right;">											
			      				<div class="controls">
			      				
			      					<label class="span2 checkbox inline">
			      						پلین پانچہ <input type="checkbox" value="Yes" name="paint_plain_pancha">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						ٹرن پانچہ<input type="checkbox" value="Yes" name="paint_turn_pancha">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						پلیٹ نہ ہو <input type="checkbox" value="Yes" name="paint_plat_naho">
			      					</label>
			      					<label class="checkbox inline">
			      						پلیٹ ہو <input type="checkbox" value="Yes" name="paint_plat_ho">
			      					</label>
			      				</div>			
			      			</div> 
	      				</div>
	      			</div>
	      			<div id="bottom-options" class="row coat_checboxes" style="display: none;">
	      				<div class="span12">
	      					<div class="control-group">											
			      				
			      				<div class="controls text-set" style="float: right;">
			      					<label class="span2 checkbox inline">
			      						4 بٹن<input type="checkbox" value="Yes" name="coat_4_button">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						3 بٹن<input type="checkbox" value="Yes" name="coat_3_button">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						2 بٹن<input type="checkbox" value="Yes" name="coat_2_button">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						1 بٹن<input type="checkbox" value="Yes" name="coat_1_button">
			      					</label>
			      				</div>	

			      				<br><br>

			      				<div class="controls text-set" style="float: right;">
			      					
			      					<label class="span2 checkbox inline">
			      						چاک نہ ہو<input type="checkbox" value="Yes" name="coat_chaak_naho">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						سنگل چاک <input type="checkbox" value="Yes" name="coat_single_chaak">
			      					</label>
			      					<label class="checkbox inline">
			      						ڈبل چاک <input type="checkbox" value="Yes" name="coat_double_chaak">
			      					</label>
			      				</div>			
			      			</div> 
	      				</div>
	      			</div>
	      			
	      			<textarea style="width:97%;height: 50px;margin-top: 20px;" class="form-control" rows="6" cols="6" name="comment" placeholder="Additional Comment"></textarea>


	      			<div class="row">
	      				<div class="span12">
	      					<div style="margin:0 auto;text-align:center;margin-top: 40px;">
			      				<button class="btn btn-large" style="margin-right:20px;">Cancel</button>
			      				<button type="submit" name="add_naap" value="Add Naap" class="btn btn-large btn-primary add_naap_button" style="margin-left:20px;">Save</button> 
			      			</div>
	      				</div>
	      			</div>
	      			

	      		</fieldset>
	      	</form>
	      </div>
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
</div> <!-- /main -->
<script type="text/javascript">
		$(document).on('change','.naap_type',function(){
			var naap_id = $('#naap_type').val();

			if(naap_id == 1)
			{
				// side bar for suit
				// $("form")[0].reset();
				$('#stitching').show();
				$('#image_section').show();
				$('.bottom_checkboxes').show();
				$('.waistcoat_checboxes').hide();
				$('.coat_checboxes').hide();
				$('.paint_checboxes').hide();
				//end side bar


				$('#coat_hip_column').hide();
				$('#coat_hip_column_1').hide();
				$('#coat_asteen_column_1').hide();
				$('#coat_asteen_column').hide();
				$('#coat_thaiz_column').hide();
				$('#coat_thaiz_column_1').hide();
				
				//heading tags
				$('#teera_column').show();
                $('#bazo_column').show();
                $('#kolar_column').show();
                $('#chati_column').show();
                $('#damn_column').show();
                $('#shalwar_column').show();
                $('#panche_column').show();
                // input tags
	            $('#teera_column_1').show();
	            $('#bazo_column_1').show();
	            $('#kolar_column_1').show();
	            $('#chati_column_1').show();
	            $('#damn_column_1').show();
	            $('#shalwar_column_1').show();
	            $('#panche_column_1').show();

			}
			else if(naap_id == 2){
			$('#hip_column').show();

			// side bar for suit
				// $("form")[0].reset();
				$('#stitching').hide();
				$('#image_section').hide();
				$('.bottom_checkboxes').hide();
				$('.waistcoat_checboxes').hide();
				$('.paint_checboxes').hide();
				$('.coat_checboxes').show();
				//end side bar

			// headings tags
			$('#coat_hip_column').show();
			$('#coat_thaiz_column').hide();
			$('#coat_asteen_column').show();
			$('#teera_column').show();
            $('#bazo_column').hide();
            $('#kolar_column').hide();
            $('#chati_column').show();
            $('#damn_column').hide();
            $('#shalwar_column').hide();
            $('#panche_column').hide();

            // input tags
            $('#coat_hip_column_1').show();
            $('#coat_thaiz_column_1').hide();
            $('#coat_asteen_column_1').show();
            $('#teera_column_1').show();
            $('#bazo_column_1').hide();
            $('#kolar_column_1').hide();
            $('#chati_column_1').show();
            $('#damn_column_1').hide();
            $('#shalwar_column_1').hide();
            $('#panche_column_1').hide();

			}
			else if(naap_id == 3){
				// side bar for suit
				// $("form")[0].reset();
				$('#stitching').hide();
				$('#image_section').hide();
				$('.bottom_checkboxes').hide();
				$('.waistcoat_checboxes').show();
				$('.coat_checboxes').hide();
				$('.paint_checboxes').hide();
				//end side bar


			$('#coat_hip_column').show();
			$('#coat_thaiz_column').hide();
			$('#coat_asteen_column').hide();
			$('#teera_column').show();
            $('#bazo_column').hide();
            $('#kolar_column').hide();
            $('#chati_column').show();
            $('#damn_column').hide();
            $('#shalwar_column').hide();
            $('#panche_column').hide();

            // input tags
            $('#coat_hip_column_1').show();
            $('#coat_thaiz_column_1').hide();
            $('#coat_asteen_column_1').hide();
            $('#teera_column_1').show();
            $('#bazo_column_1').hide();
            $('#kolar_column_1').hide();
            $('#chati_column_1').show();
            $('#damn_column_1').hide();
            $('#shalwar_column_1').hide();
            $('#panche_column_1').hide();
			}
			else if(naap_id == 4){

				// side bar for suit
				// $("form")[0].reset();
				$('#stitching').hide();
				$('#image_section').hide();
				$('.bottom_checkboxes').hide();
				$('.waistcoat_checboxes').hide();
				$('.coat_checboxes').hide();
				$('.paint_checboxes').show();
				//end side bar

			$('#coat_thaiz_column').show();
			$('#coat_hip_column').show();
			$('#coat_asteen_column').hide();
			$('#teera_column').hide();
            $('#bazo_column').hide();
            $('#kolar_column').hide();
            $('#chati_column').hide();
            $('#damn_column').hide();
            $('#shalwar_column').hide();
            $('#panche_column').show();

            // input tags
            $('#coat_thaiz_column_1').show();
            $('#coat_hip_column_1').show();
            $('#coat_asteen_column_1').hide();
            $('#teera_column_1').hide();
            $('#bazo_column_1').hide();
            $('#kolar_column_1').hide();
            $('#chati_column_1').hide();
            $('#damn_column_1').hide();
            $('#shalwar_column_1').hide();
            $('#panche_column_1').show();
			}
		});



</script>
    
 
