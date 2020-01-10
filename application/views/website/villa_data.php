<!doctype html>
<html lan g="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL()?>assets_website/layout/css/main.css">

    <title>Details</title>
  </head>
  <body class="clr">
    <div class="container mt-4">
      <h3 class="text-center">Ventures List</h3>
     
      
        <div class="row mt-3">
           <?php 


         foreach ($showviilaDetails as $row) {
          
          ?>
           
            <div class="col-md-6">
              <div class="box">
              	<a href="<?php echo BASE_URL()?>deatils/<?php echo $row->id;?>"> <?php echo $row->add_vill;?> </a>
             <!-- <a  href="<?php echo base_url('website/deatils/'.$row->id);?>"> <?php echo $row->add_vill;?></a>  -->
              </div>
            </div>
            <?php   }
      ?>
            
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
  </body>
</html>
