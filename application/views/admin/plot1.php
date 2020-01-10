<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/inc/header.php")?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/inc/nav.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
<div class="box-body">
  <form method="post" action="<?php echo base_url('real/add_plot')?>">
          <div class="row">
            <div class="col-md-6">
               
            
              <!-- /.form-group -->
              <div class="form-group d-flex">
                 <label>Select Visitors Name</label>
                    <select class="form-control" name="villa_id" id="villa_id">
                    <option value="0">Select visitors</option>
                       <?php
                          //$result=mysqli_query($con,"select * from mst_category where category_status='active' ");
                          foreach($fetchs as $row)
                          {?>
                            <option value="<?php echo $row->id?>"><?php echo $row->add_vill?></option>
                          <?php } 
                        ?> 
                    </select>
              </div>

              <div class="form-group">
                <label>Plot No:</label>
                <input type="text" class="form-control" name="plot_no" required/>
              </div>
               <div class="form-group">
                <label>Area:</label>
                <input type="text" class="form-control" name="area" required>
              </div>
                <div class="form-group">
                <label>Dimensions:</label>
                <input type="text" class="form-control" name="dimensions">
              </div>
                <!-- <div class="form-group">
                <label>Customer Name:</label>
                <input type="text" class="form-control" name="customer_name" required>
              </div>
                <div class="form-group">
                <label>Contact No:</label>
                <input type="text" class="form-control" name="content_no" required>
              </div>
              <div class="form-group">
                <label>Details:</label>
               <textarea name="details" class="form-control"  required></textarea>
              </div>
              <div class="form-group">
                <label>User id:</label>
                <input type="text" class="form-control" name="user_id" required>
              </div>
              <div class="form-group">
                <label>Update NO:</label>
                <input type="date" class="form-control" name="update_no" required>
              </div>
              <div class="form-group">
                <label>No.Of Days:</label>
                <input type="text" class="form-control" name="noof_days" required>
              </div>
               <div class="form-group">
                <label>Current Status:</label>
                <select class="form-control select2" name="current_status" style="width: 100%;">
                  <option selected="selected">.....Select....</option>
                  <option>Vecat</option>
                  <option>Blocked</option>
                  <option>Reserved</option>
                  <option>Registered</option>
                </select>
              </div> -->
             
              <!-- /.form-group -->
            </div>
           
            <!-- /.col -->
          
              <!-- /.form-group -->
              
              <!-- /.form-group -->
           
            <!-- /.col -->
          </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
          <!-- /.row -->
        </div>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('admin/inc/footer.php');?>
  
</body>
</html>
