
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
      <div class="row" style="margin-left: 0;">

        <div class="widget widget-table action-table" style="margin-top: 10px;">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>All Customer</h3>
            </div>
            <!-- /widget-header -->
         
              <table id="customer_table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>customer ID</th>
                    <th>Customer Name</th>
                    <th>Contact No</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
    

                </tbody>
              </table>
            
            <!-- /widget-content --> 
          </div>

          <div id="footer_button">
            <button type="button" class="btn btn-primary"><i class="fa icon-folder-open"></i><br>Open</button>
            <button type="button" class="btn btn-secondary"><i class="fa icon-file
            "></i><br>New</button>
            <button type="button" class="btn btn-success"><i class="fa icon-save"></i><br>Save</button>
            <button type="button" class="btn btn-danger"><i class="fa icon-print"></i><br>Print</button>
            <button type="button" class="btn btn-warning"><i class="fa icon-trash"></i><br>Delete</button>
            <button type="button" class="btn btn-info"><i class="fa icon-remove"></i><br>Close</button>
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
