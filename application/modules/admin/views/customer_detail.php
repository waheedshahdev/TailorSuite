
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
        <!-- <button type="button" class="btn btn-info btn-lg" style="float: right;" data-toggle="modal" data-target="#myModal">Add New Customer</button> -->
         <div class="row">	      	
	      	<div class="span12">
	      		<div class="widget">
	      			<h1 style="color: darkblue;text-align: center;"><u><?php echo $customer_info[0]->customer_name; ?></u></h1>
	      			<h3 style="color: darkblue;border: 1px solid darkblue;border-radius: 5px;width:12%;text-align: center;margin:15px auto;"><?php echo $customer_info[0]->phone; ?></h3>
	      		</div>
	      	</div>
	      </div> <!-- /row -->
	      <div id="footer_button">
          	<a href="<?php echo base_url('admin/customer_naap/'.$this->uri->segment(3).''); ?>" class="btn btn-primary"><i class="fa icon-folder-open"></i><br>Add Customer Measure</a>
            <a href="<?php echo base_url('admin/posInvoice'); ?>" class="btn btn-secondary"><i class="fa icon-file
            "></i><br>New Order</a>
          </div>
      <div class="row" style="margin-left: 0;">

        <div class="widget widget-table action-table" style="margin-top: 10px;border: 1px solid #ccc !important;">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Customer Naap</h3>
            </div>
            <!-- /widget-header -->
         
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Naap Type</th>
                    <th style="font-size: 16px;">لمبائی </th>
				                    <th style="font-size: 16px;">تیرہ </th>
				                    <th style="font-size: 16px;">بازو </th>
				                    <th style="font-size: 16px;">کالر </th>
				                    <th style="font-size: 16px;">چھاتی </th>
				                    <th style="font-size: 16px;">کمر </th>
				                    <th style="font-size: 16px;">دامن </th>
				                    <th style="font-size: 16px;">شلوار</th>
				                    <th style="font-size: 16px;">پانچے </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php 
                	$count = 1;
                	foreach ($naap as $value):?>
                	<tr>
                		<td><?php echo $count++; ?></td>
                		<td><?php echo $value->type_name; ?></td>
                		<td><?php echo $value->lambai; ?></td>
                		<td><?php echo $value->teera; ?></td>
                		<td><?php echo $value->bazo; ?></td>
                		<td><?php echo $value->kolar; ?></td>
                		<td><?php echo $value->chati; ?></td>
                		<td><?php echo $value->kamar; ?></td>
                		<td><?php echo $value->damn; ?></td>
                		<td><?php echo $value->shalwar; ?></td>
                		<td><?php echo $value->panche; ?></td>
                		<td><a style="margin-right: 5px;" href="<?php echo base_url('admin/print_customer_naap/'.$this->uri->segment(3).'/'.$value->id.''); ?>" class="btn btn-danger"><i class="fa icon-print"></i></a> <a href="<?php echo base_url('admin/edit_naap/'.$this->uri->segment(3).'/'.$value->id.''); ?>" class="btn btn-info"><i class="fa icon-edit"></i></a></td>
                	</tr>
                <?php endforeach; ?>
    

                </tbody>
              </table>
            
            <!-- /widget-content --> 
          </div>


          <div class="widget widget-table action-table" style="margin-top: 10px;">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Customer Invoices</h3>
            </div>
            <!-- /widget-header -->
         
              <table id="customer_invoice_table" class="table table-striped table-bordered">
                <input type="hidden" name="customer_id" id="get_customer_id" value="<?php echo $this->uri->segment('3'); ?>">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Invoice ID</th>
                    <th>Grand Total</th>
                    <th>Paid</th>
                    <th>Due</th>
                    <th>Return on</th>
                    <th>Invoice Status</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th style="width: 100px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
    

                </tbody>
              </table>
            
            <!-- /widget-content --> 
          </div>


           <div class="widget widget-table action-table" style="margin-top: 10px;">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Customer Orders</h3>
            </div>
            <!-- /widget-header -->
         
              <table id="customer_orders_table" class="table table-striped table-bordered">
              
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Invoice ID</th>
                    <th>Order ID</th>
                    <th>Naap</th>
                    <th>Amount</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Return on</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th style="width:150px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                	
    

                </tbody>
              </table>
            
            <!-- /widget-content --> 
          </div>

          

      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
<!-- Add new customer Modal -->
<div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new Customer</h4>
        </div>
        <div class="modal-body">
          



        <form action="<?php echo base_url('admin/add_customer'); ?>" method="post">
        <center>
                
                <h3><b>Add New Customer</b></h3>
                
                <div class="field">
                    <label for="firstname">Customer Name:</label>
                    <input type="text" id="customer_name" name="customer_name" value="" placeholder="Customer Name" class="login" />
                </div> <!-- /field -->
                
                <div class="field">
                    <label for="Phone Number">Phone Number:</label>    
                    <input type="number" id="phone" name="phone" value="" placeholder="Phone Number" class="login" />
                </div> <!-- /field -->
                </center>

            
            <div class="login-actions">
                                    
                <button class="button btn btn-primary btn-large" name="submit" value="Add" type="submit" style="float: right;">Add</button>
                
            </div> <!-- .actions -->
            
        </form>
        





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!-- END new customer Modal -->





</div>
