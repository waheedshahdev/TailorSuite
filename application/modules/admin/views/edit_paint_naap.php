 
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
				                    <th>کمر </th>
				                    <th>پانچے </th>
				                    <th>HIP </th>
				                    <th>Thaiz </th>
				                    
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
						      					<input type="text" id="firstname" value="<?php echo $n->kamar; ?>" name="kamar" >
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

				                    <td id="coat_hip_column_1">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="hip" id="firstname" value="<?php echo $n->hip; ?>" name="hip" >
						      				</div>
						      			</div> 
				                    </td>
				                    <td id="coat_thaiz_column_1">
				                    	<div class="control-group">											
						      				<div class="controls">
						      					<input type="text" placeholder="thaiz" id="firstname" name="thaiz" value="<?php echo $n->thaiz; ?>" >
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


	      			<div id="bottom-options" class="row paint_checboxes">
	      				<div class="span12">
	      					<div class="control-group" style="float: right;">											
			      				<div class="controls">
			      				
			      					<label class="span2 checkbox inline">
			      						پلین پانچہ <input type="checkbox" value="Yes" <?php if($n->paint_plain_pancha == 'Yes'){echo 'checked="checked"';} ?> name="paint_plain_pancha">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						ٹرن پانچہ<input type="checkbox" value="Yes" <?php if($n->paint_turn_pancha == 'Yes'){echo 'checked="checked"';} ?> name="paint_turn_pancha">
			      					</label>
			      					<label class="span2 checkbox inline">
			      						پلیٹ نہ ہو <input type="checkbox" value="Yes" <?php if($n->paint_plat_naho == 'Yes'){echo 'checked="checked"';} ?> name="paint_plat_naho">
			      					</label>
			      					<label class="checkbox inline">
			      						پلیٹ ہو <input type="checkbox" value="Yes" <?php if($n->paint_plat_ho == 'Yes'){echo 'checked="checked"';} ?> name="paint_plat_ho">
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
            <a href="<?php echo base_url('admin/print_customer_naap/'.$this->uri->segment(3).'/'.$this->uri->segment(4).''); ?>" class="btn btn-danger"><i class="fa icon-print"></i><br>Print</a>
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
