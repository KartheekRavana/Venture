<!DOCTYPE html>
<html>
<head>
  <?php 
  $this->load->view("admin/inc/header.php")
  //include_once 'inc/header.php';
  ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/inc/nav.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

      <section class="content-header">
            <h1> Edit Vill</h1>
            <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             
            <li class="active">Edit vill</li>
            </ol>
      </section>

     

       <section class="content">
          <div class="row">
            <div class="col-md-4">
               <div class="box box-default">
                 <div class="box-header with-border">
        <h3 class="box-title">Edit Vill </h3>          
                 </div>
        <!-- /.box-header -->

        <div class="box-body">
          <form action="<?php echo base_url('real/update_vill')?>" method="post">
          <?php
          foreach ($vill_edit as $amt_info) {
          ?>
            <input type="hidden" name="id" value="<?php echo $amt_info->id?>">
              <div class="form-group">
                <label>Edit Vill</label>
                  <input type="text"  class="form-control" name="add_vill" id="add_vill" value="<?php echo $amt_info->add_vill?>" >
               </div>
            
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
              <?php
              }
              ?>
             
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
