<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("admin/inc/header.php")?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/inc/nav.php');?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/dist/js/jquery.validate.js"></script>

   <script type="text/javascript">

  $(document).ready(function () {
// alert(1);
   $("#submit").on("click",function(){
    // alert(2);

   if (($("input[name*='villa_id']:checked").length)<=0) {
        alert("You must check at least 1 box");
        return false;
    }
    
    

  });

});</script>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
<div class="box-body">
  <form method="post" action="<?php echo base_url('real/edit_empdata')?>">
     <?php foreach($emp_edit as $fetch){?>
          <div class="row">
            
            <div class="col-md-6">
               
            
              <!-- /.form-group -->
             <!--  <div class="form-group d-flex">
                 <label>Select Viila Name</label>
                    <select class="form-control" name="villa_id" id="villa_id">
                    <option value="0">Select villa</option>
                       <?php
                          //$result=mysqli_query($con,"select * from mst_category where category_status='active' ");
                          foreach($fetchs as $row)
                          {?>
                            <option value="<?php echo $row->id?>"><?php echo $row->add_vill?></option>
                          <?php } 
                        ?> 
                    </select>
              </div> -->
             
                 <input type="hidden" name="sk_employee_id" value="<?php echo $fetch->sk_employee_id?>">
              <div class="form-group">
                <label>Employee Name:</label>
                <input type="text" class="form-control" name="employee_name" value="<?php echo $fetch->employee_name?>" required/>
              </div>
               <div class="form-group">
                <label>Employee email:</label>
                <input type="email" class="form-control" name="e_email" id="e_email" value="<?php echo $fetch->e_email?>" required>
                <span id="email_result"></span>
              </div>
               
             <div class="form-group">
                <label>Employee  User Id:</label>
                <input type="text" class="form-control" name="user_id" id="user_id"  value="<?php echo $fetch->user_id;?>">
                 <span id="user_result"></span>
              </div>
               <div class="form-group">
                <label>Employee  Phone Number:</label>
                <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?php echo $fetch->phone_number;?>">
                 <span id="phonenumber_result"></span>
              </div>
               <div class="form-group">
                <label>Password:</label>
                <input type="text" class="form-control" name="password" value="<?php echo $fetch->password?>" required>
              </div>
                <!-- <div class="form-group">
                <label>Employee Email:</label>
                <input type="text" class="form-control" name="emp_email" value="<?php echo $fetch->emp_email?>" required>
              </div> -->
               <div class="form-group">
                <label>Ventures Select:</label>
                <?php
                $villa_Checked="";
                 foreach($fetchs as $row)
                  // echo json_encode($row);
                {
               $vvid=trim($fetch->villa_id,',');

                $vid = array(); 

                $temp=explode(",", $vvid);
                for ($i=0; $i <sizeof($temp) ; $i++) { 
                  $vid[]=$temp[$i];
                  # code...
                }
                
                           


                         ?>
                <input type="checkbox"   <?php    if (in_array($row->id, $vid)) { echo $villa_Checked="checked"; }else{$villa_Checked="";} ?> id="villa_id" name="villa_id[]"  value="<?php echo $row->id?>"><?php echo $row->add_vill?>


                <?php
              }?>
              </div>
            
             
              <!-- /.form-group -->
            </div>
       
           
            <!-- /.col -->
          
              <!-- /.form-group -->
              
              <!-- /.form-group -->
           
            <!-- /.col -->
          </div>
            <div class="box-footer">
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
              </div>
                   <?php }?>
              </form>
          <!-- /.row -->
        </div>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('admin/inc/footer.php');?>
  
</body>
</html>
