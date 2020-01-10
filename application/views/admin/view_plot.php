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
              <h3 class="box-title">View Plots</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               <tr>
                 <th>#</th>
                 <th>Villa</th>
                 <th>plot no</th>
                 <th>area</th>
                 <th>Dimensions</th>
                <!--  <th>Customer_name</th>
                 <th>Content No</th>
                 <th>Details</th>
                 <th>User Id</th>
                 <th>Update No</th>
                 <th>No.Of Days</th>
                 <th>Current Status</th> -->
                 <th>Action</th>                            
               </tr>
                </thead>
                <tbody>
                 
                 <?php 
              $i=1;         
          foreach($showplotDetails as $row)                         
          {
          	// echo json_encode($row);
            
            
          ?>
          
                  <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row->add_vill?></td>
            <td><?php echo$row->plot_no?></td>
            <td><?php echo$row->area?></td>
            <td><?php echo$row->dimensions?></td>
           <!--  <td><?php echo$row->customer_name?></td>
            <td><?php echo$row->content_no?></td>
            <td><?php echo$row->details?></td>
            <td><?php echo$row->user_id?></td>
            <td><?php echo$row->update_no?></td>
            <td><?php echo$row->noof_days?></td>
            <td><?php echo $row->current_status?></td> -->
            <td><a href="<?php echo base_url('real/plot_delete/'.$row->plot_id);?>" onclick="return confirm('Are you sure trash this project?')" class="fa fa-trash"></a>
             <a href="<?php echo base_url('real/plot_edit/'.$row->plot_id);?>" class="fa fa-edit"></a></td> 
           
           </tr>
              <?php } ?>
                                   
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
