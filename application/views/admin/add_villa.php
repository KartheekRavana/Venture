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
      <h1>
     Add Venture
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Add Venture</li>
      </ol>
    </section>

     

       <section class="content">
       <div class="row">
            <div class="col-md-4">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">ADD Venture </h3>          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         
            <form action="<?php echo base_url('real/add_vill')?>" method="post">
              <div class="form-group">
                <label>Add Venture</label>
                  <input type="text"  class="form-control" name="add_vill" id="add_vill" >
              </div>
             
           
             
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
             
             
          
            </div>          
          </div>
          </div>   
          <div class="col-md-8">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">View Venture</h3>          
        </div> 
        <!-- /.box-header -->
         <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   
                <th>#</th>
                <th>Venture</th>
               
                <th>Action</th>
              
                </tr>
                </thead>
                 <tbody id="product_info">
              <tr>
              <?php 
              $b=1;
                $ShowAmenities=$this->admin_model->getvill();
                foreach($ShowAmenities as $amt_info ) {
              ?>
                <td><?php echo $b++;?></td>               
                <td><?php echo $amt_info->add_vill?></td>      
                <td>

                <a href="<?php echo base_url('real/vill_delete/'.$amt_info->id);?>" class="fa fa-trash" onclick="return confirm('Are you sure trash this value?')"></a>
                <a href="<?php echo base_url('real/vill_edit/'.$amt_info->id);?>" class="fa fa-edit"></a>
                </td>             
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
