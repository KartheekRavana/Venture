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
  <form method="post" action="<?php echo base_url('real/update_plot')?>">

          <div class="row">
            <div class="col-md-6">
               <?php  foreach($plot_edit as $row){?>
            
              <!-- /.form-group -->
              <div class="form-group d-flex">
                 <label>Select Viila Name</label>
                    <select class="form-control" name="villa_id" id="villa_id">
                   
                       <?php
                        $selected="";
                          foreach($fetchs as $row1)
                          { 
                        if($row->villa_id==$row1->id){$selected="selected";}else{$selected="";} 
                           ?>
                            <option value="<?php echo $row1->id?>" <?php  echo $selected;?> ><?php echo $row1->add_vill?></option>
                         <?php }?>

                    </select>
              </div>
              <input type="hidden" name="plot_id" value="<?php echo $row->plot_id?>">
            
              <div class="form-group">
                <label>Plot No:</label>
                <input type="text" class="form-control" name="plot_no" value="<?php echo $row->plot_no?>" required/>
              </div>
               <div class="form-group">
                <label>Area:</label>
                <input type="text" class="form-control" name="area" value="<?php echo $row->area?>" required>
              </div>
                <div class="form-group">
                <label>Dimensions:</label>
                <input type="text" class="form-control" name="dimensions" value="<?php echo $row->dimensions?>" required>
              </div>
              <!--   <div class="form-group">
                <label>Customer Name:</label>
                <input type="text" class="form-control" name="customer_name" value="<?php echo $row->customer_name?>" required>
              </div>
                <div class="form-group">
                <label>Contact No:</label>
                <input type="text" class="form-control" name="content_no" value="<?php echo $row->content_no
                ?>" required>
              </div>
              <div class="form-group">
                <label>Details:</label>
               <textarea name="details" class="form-control"   required><?php echo $row->details;?></textarea>
              </div>
              <div class="form-group">
                <label>User id:</label>
                <input type="text" class="form-control" name="user_id" value="<?php echo $row->user_id;?>" required>
              </div>
              <div class="form-group">
                <label>Update NO:</label>
                <input type="date" class="form-control" name="update_no" value="<?php echo $row->update_no;?>" required>
              </div>
              <div class="form-group">
                <label>No.Of Days:</label>
                <input type="text" class="form-control" name="noof_days" value="<?php echo $row->noof_days;?>" required>
              </div>
                <div class="form-group">
                <label>Current Status:</label>
                <select class="form-control select2" name="current_status" style="width: 100%;">
                  <option value="<?php echo $row->current_status?>"><?php echo $row->current_status?></option>
                  <option>Vecat</option>
                  <option>Blocked</option>
                  <option>Reserved</option>
                  <option>Registered</option>
                </select>
              </div> -->
            <?php  }?>
               
           
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
