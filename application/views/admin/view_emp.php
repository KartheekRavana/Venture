
<!DOCTYPE html>
<html>
<head>
 
  <?php $this->load->view("admin/inc/header.php")?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/inc/nav.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    
  <section class="content">
      <div class="row">
        <!-- left column -->
        
          
          <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">View Employee</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               <tr>
                 <th>#</th>
                 <th>Employee Name</th>
                 <th>User ID
                 <th>Password</th>
                 <th>Email</th> 
                 <th>Mobile No</th>
                 <th>Ventures</th>
                 <th>Action</th>                            
               </tr>
                </thead>
                <tbody>
                 
                <?php 
                $i=1;         
          foreach($fetchs as $row)                         
          {
            
             $venture = '';
             $allVenture = explode(',', rtrim($row->villa_id, ','));
            
              for($k=0 ;$k<sizeof($allVenture);$k++){
        $ventureName=$this->admin_model->getVenture($allVenture[$k]);
          foreach ($ventureName as $name){
          $venture .= "<category>" . $name->add_vill . "</category>".",";
                    }
            }
            
            
          ?>
          
                  <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row->employee_name?></td>
            <td><?php echo $row->user_id ?></td>
            <td><?php echo$row->password?></td>
            <td><?php echo$row->e_email?></td>
            <td><?php echo$row->phone_number?></td>
            <td><?php  echo rtrim($venture, ',')?></td>
            <td>
             
             <?php if($row->employee_status=='active'){?>

              <a href="<?php echo BASE_URL()?>emp_delete/<?php echo $row->sk_employee_id;?>" onclick="return confirm('Are you sure delete this project?')" class="fa fa-check-circle" ></a> &nbsp;|&nbsp;
              

             <a href="<?php echo BASE_URL()?>emp_edit/<?php echo $row->sk_employee_id;?>" class="fa fa-edit"></a> <?php } else {?> 

             <a href="<?php echo BASE_URL()?>emp_deactive/<?php echo $row->sk_employee_id;?>" onclick="return confirm('Are you sure, Activate this project?')" class="fa fa-check-circle" style="color:red"></a><?php } ?>
           
           </td>

           </tr>
                <?php  }?>
                                   
                </tbody> 
                
              </table>
            </div>
            
          </div>
         
        </div>
        
      </div>
    
    </section>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('admin/inc/footer.php');?>
  
</body>
</html>
