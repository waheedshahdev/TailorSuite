
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Today's Stats</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
           <!--        <h6 class="bigstats">A fully responsive premium quality admin template built on Twitter Bootstrap by <a href="http://www.egrappler.com" target="_blank">EGrappler.com</a>.  These are some dummy lines to fill the area.</h6> -->
                  <div id="big_stats" class="cf">
                    <div class="stat"> <i class="icon-user"></i><label>Total Customers</label> <span class="value" style="font-size: 25px;"><?php echo $total_Customers; ?></span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-list"></i><label>Orders</label> <span class="value" style="font-size: 25px;"><?php echo $total_orders; ?></span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-list-alt"></i><label>Pending Orders</label> <span class="value" style="font-size: 25px;"><?php if($pending_orders != ''){ echo $pending_orders;}else{ echo 0;} ?></span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-th-list"></i><label>Invoices</label> <span class="value" style="font-size: 25px;"><?php if($total_invoices != ''){ echo $total_invoices;}else{ echo 0;}?></span> </div>
                    <!-- .stat --> 
                  </div>

                  <div id="big_stats" class="cf">
                    <div class="stat"> <i class="icon-th-list"></i><label>Pending Invoices</label> <span class="value" style="font-size: 25px;"><?php if($pending_invoices != ''){ echo $pending_invoices;}else{ echo 0;}?></span> </div>

                    <div class="stat"> <i class="icon-money"></i><label>Today Income</label> <span class="value" style="font-size: 25px;"><?php if($today_income != ''){ echo $today_income;}else{ echo 0;} ?></span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-list"></i><label>Due's</label> <span class="value" style="font-size: 25px;"><?php if($total_dues != ''){ echo $total_dues;}else{ echo 0;}?></span> </div>
                    <!-- .stat -->
                    
                    <!-- <div class="stat"> <i class="icon-list-alt"></i><label>Pending Orders</label> <span class="value" style="font-size: 25px;"><?php if($pending_orders != ''){ echo $pending_orders;}else{ echo 0;} ?></span> </div> -->
                    <!-- .stat -->
                    
                    
                    <!-- .stat --> 
                  </div>

                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          <!-- /widget -->
          
          <!-- /widget -->
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3> New Invoices</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="messages_layout">
                <?php if(isset($new_invoices)){
                  foreach ($new_invoices as $invoice):
                    $time=strtotime($invoice->creation_date);
                    $month=date("F",$time);
                    $day=date("d",$time);
                 ?>
                <li class="from_user left"> <a href="#" class="avatar"><div class="news-item-date"> <span class="news-item-day"><?php echo $day; ?></span> <span class="news-item-month" style="font-size: 20px;"><?php echo $month; ?></span> </div></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name"><?php echo $invoice->customer_name;?></a> <span class="time"> <?php echo $invoice->phone; ?></span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                            <li><a href="<?php echo base_url('admin/view_invoice/'.$invoice->invoice_id.''); ?>"><i class=" icon-share-alt icon-large"></i> view</a></li>
                            <li><a href="<?php echo base_url('admin/edit_posInvoice/'.$invoice->invoice_id.''); ?>"><i class=" icon-share icon-large"></i> Edit</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="text"><p style="font-size: 16px;"> <b>Grand Total:</b> <?php echo $invoice->grand_total; ?>,<b>Paid Amount:</b> <?php echo $invoice->paid_amount; ?>, <b>Due Amount:</b> <?php echo $invoice->due_amount; ?>, <b>Return Date:</b> <?php echo $invoice->return_date; ?>, <b>Payment Status:</b> <?php echo $invoice->status; ?>, <b>Invoice Status:</b> <?php echo $invoice->invoice_status; ?>.</p> </div>
                  </div>
                </li>
              <?php endforeach; } ?>
               
                
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          
          <div class="widget" style="display: none;">
            
            <!-- /widget-header -->
            <div class="widget-content">
              <canvas id="area-chart"  class="chart-holder" height="250" width="538"> </canvas>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>


        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 

                <a href="<?php echo base_url('admin/invoices'); ?>" class="shortcut"><i class="shortcut-icon icon-list"></i><span class="shortcut-label">Invoices</span> </a>
                <a href="<?php echo base_url('admin/posInvoice'); ?>" class="shortcut"><i class="shortcut-icon icon-list"></i><span class="shortcut-label">POS Invoice</span> </a>
                <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Orders</span> </a>
                <a href="<?php echo base_url('admin/customers'); ?>" class="shortcut"><i class="shortcut-icon icon-group"></i><span class="shortcut-label">Customers</span> </a>
                <a href="javascript:;" class="shortcut" data-toggle="modal" data-target="#myModal"><i class="shortcut-icon icon-th-list"></i><span class="shortcut-label">Add Customer</span> </a>
                <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span class="shortcut-label">Users</span> </a>
                <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Apps</span> </a>
                </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Top 10 Pending Orders</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Customer</th>
                    <th>Naap</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th class="td-actions">Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($top_orders)){
                    foreach ($top_orders as $orders):

                   ?>
                  <tr>
                    <td> <?php echo $orders->customer_name.' '.$orders->phone; ?> </td>
                    <td> <?php echo $orders->type_name; ?></td>
                    <td> <?php echo $orders->order_status; ?></td>
                    <td style="font-size: 16px;"> <?php echo $orders->creation_date; ?></td>
                    <td class="td-actions" id="action-css">

                      <div class="btn-group">
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" class="change_order_status" id="<?php echo $orders->order_id ?>" data-button_value="Process"> Process</a></li>
                          <li><a href="#" class="change_order_status" id="<?php echo $orders->order_id ?>" data-button_value="Complete">Complete</a></li>
                          <li><a href="#" class="change_order_status" id="<?php echo $orders->order_id ?>" data-button_value="Cancel"> Cancel</a></li>
                        </ul>
                      </div> 

                    </td>
                  </tr>
                <?php endforeach;
                } ?>
                  
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>





          <!-- <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Recent News</h3>
            </div>
            <div class="widget-content">
              <ul class="news-items">

                <li>
                  <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank">Thursday Roundup # 40</a>
                    <p class="news-item-preview"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                  </div>
                  
                </li>
              
                
              </ul>
            </div>
          </div>
           -->

          <!-- /widget -->
           <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Recent News</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div id='calendar'>
              </div>
            </div>
            <!-- /widget-content --> 
          </div>






        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>




<!-- /main -->
<div class="extra">
  <!-- /extra-inner --> 
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

