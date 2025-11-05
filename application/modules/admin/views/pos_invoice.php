
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
      <div class="breadcrumbs">
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
              <div class="panel-heading">
                <div class="panel-title">
                  <h4>Add New POS Invoice </h4>
                </div>
              </div>
              <hr>

              <div class="panel-body">
                <span id="error"></span>


                <form action="<?php echo base_url('admin/create_invoice'); ?>" method="post" class="form-vertical addinvoice" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="content clearfix">
                  <div class="row">

                    <div class="span12">

                      <div class="info-box">
                       <div class="row-fluid stats-box">
                        <div class="span4">
                         <div class="field">
                          <label for="firstname">Customer Name:</label>
                          
                          <select required="" name="invoice_for_customer_id" id="invoice_for_customer_id">
                            <?php foreach ($fetch_customers as $customer):?>
                              <option value="<?php echo $customer->customer_id; ?>"><?php echo $customer->customer_name.' ('.$customer->phone.')'; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>

                      </div>

                      <div class="span4">
                        <div class="field">
                          <label for="email">Date:</label>
                          <input class="form-control" type="date" size="50" id="return_date" name="return_date" required="">
                        </div>
                      </div>

                      <div class="span4">
                        
                        <div class="field">
                          <label for="lastname">Invoice No:</label>  
                          <input type="text" name="invoice_id" class="form-control" placeholder="Batch No" id="invoice_id" autocomplete="off" readonly="" value="<?php echo rand(000000,999999); ?>">
                        </div>
                       <!--  <div class="login-actions">          
                          <button class="button btn btn-success">New Customer</button>

                        </div> -->
                      </div>
                    </div>


                  </div>


                </div>
              </div> 
              


              




                <div class="table-responsive" style="margin-top: 10px">
                  <table class="table table-bordered table-hover" id="item_table">
                    <thead>
                      <tr>
                        <th class="text-center">Customer</th>
                        <th class="text-center">Naap</th>
                        <th class="text-center">Rate</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody id="addinvoiceItem">
                      <tr></tr>
              
                    </tbody>
                    <tfoot>
                      <tr>
                        <td align="center">
                          <input type="button" id="" class="btn btn-info text-center add" name="add-invoice-item" value="Add New Item">
                        </td>
                        <td style="text-align:right;" colspan="4"><b>Grand Total:</b></td>
                        <td class="text-right">
                          <input type="text" id="grandTotal" name="grandTotal" tabindex="-1" class="form-control text-right" value="0.00" min="1" readonly="readonly">
                        </td>
                      </tr>
                      <tr>
                        <td align="center">
                          <select name="invoice_status">
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                            <option value="Process">Process</option>
                            <option value="Cancelled">Cancelled</option>
                          </select>

                        </td>
                        <td style="text-align:right;" colspan="4"><b>Paid Ammount:</b></td>
                        <td class="text-right">
                          <input type="text" id="paidAmount" onkeyup="invoice_paidamount();" tabindex="-1" class="form-control text-right" name="paidAmount" value="0.00">
                        </td>
                      </tr>
                      <tr>
                      <td>
                        <input type="submit" id="add-invoice" class="btn btn-success" name="submit" value="Save And Paid">
                      </td>

                        <td style="text-align:right;" colspan="4"><b>Due:</b></td>
                        <td class="text-right">
                          <input type="text" id="dueAmmount" class="form-control text-right" name="dueAmmount" value="0.00" readonly="readonly">
                        </td>
                      </tr>

                    </tfoot>
                  </table>
                </div>
                                

            </div>
          </form>  

          </div>
        </div>
      </div>
    </div>



  </div>
  <!-- /row --> 
</div>
<!-- /container --> 
</div>



</div>



