
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
              <h3>All Invoices</h3>
            </div>
            <!-- /widget-header -->
         
              <table id="invoices_table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Invoice ID</th>
                    <th>Customer Name</th>
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

      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 





</div>
