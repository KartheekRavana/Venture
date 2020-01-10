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

     $('#e_email').change(function(){  
           var email = $('#e_email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>real/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){ 
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  

        $('#user_id').change(function(){  
           var user_id = $('#user_id').val();  
           if(user_id != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>real/check_userid_avalibility",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data){ 
                          $('#user_result').html(data);  
                     }  
                });  
           }  
      });  

          $('#user_id').change(function(){  
           var user_id = $('#user_id').val();  
           if(user_id != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>real/check_userid_avalibility",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data){ 
                          $('#user_result').html(data);  
                     }  
                });  
           }  
      });  
             $('#phone_number').change(function(){  
           var phone_number = $('#phone_number').val();  
           if(phone_number != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>real/check_phonenumber_avalibility",  
                     method:"POST",  
                     data:{phone_number:phone_number},  
                     success:function(data){ 
                          $('#phonenumber_result').html(data);  
                     }  
                });  
           }  
      });  

});</script>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
<div class="box-body">
  <form method="post" id="myform" action="<?php echo base_url('real/add_empsave')?>">

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

              <div class="form-group">
                <label>Employee Name:</label>
                <input type="text" class="form-control" name="employee_name" required/>
              </div>
                <div class="form-group">
                <label>Employee email:</label>
                <input type="email" class="form-control" name="e_email" id="e_email" required>
                <span id="email_result"></span>
              </div>
                <div class="form-group">
                <label>Employee  User Id:</label>
                <input type="text" class="form-control" name="user_id" id="user_id" required>
                 <span id="user_result"></span>
              </div>
                <div class="form-group">
                <label>Employee  Phone Number:</label>
                <input type="text" class="form-control" name="phone_number" id="phone_number" required>
                 <span id="phonenumber_result"></span>
              </div>
               <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password"  value="123456" required>
              </div>
               <!--  <div class="form-group">
                <label>Employee Email:</label>
                <input type="text" class="form-control" name="emp_email" required>
              </div> -->
               <div class="form-group">
                <label>Ventures Select:</label>
                <?php
                 foreach($fetchs as $row)
                  // echo json_encode($row);
                          {?>
                <input type="checkbox" id="villa_id" name="villa_id[]"  value="<?php echo $row->id?>"><?php echo $row->add_vill?>


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
              </form>
          <!-- /.row -->
        </div>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('admin/inc/footer.php');?>


  
</body>
</html>
