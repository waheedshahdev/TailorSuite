
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

        <div class="widget widget-table action-table" style="margin-top: 10px;">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>All Orders</h3>
            </div>
            <!-- /widget-header -->
         
              <table id="orders_table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Invoice ID</th>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Naap</th>
                    <th>Amount</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Return on</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th style="width: 145px;">Action</th>
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
