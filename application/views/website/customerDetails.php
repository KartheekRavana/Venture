<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL?>layout/css/main.css">

    <title>Details</title>
  </head>
  <body class="clr">
    <div class="body_clr">
        <div class="row m-0">
            <div class="col-md-5 mx-auto box-border">
                <div class=" d-flex mt-2">
                   <img class="logo text-center mx-auto mr-auto img-fluid" src="<?php echo BASEURL?>layout/images/logo.png">
                    <a href="javascript:void(0)"><img class="exit " src="<?php echo BASEURL?>layout/images/exit.png"></a>
                </div>
                <?php  
                if($customerData!=false) { 
                	foreach ($customerData as $row){

                	}
                
                }
                if($plotData!=false) {
                	foreach ($plotData as $row){
                
                	}
                
                }
                ?>
                <form method="post">
                <div class="row details mt-5">
                    <div class="col-md-6">
                        <h6>Plot No </h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                            <h6> <?php echo $row->plot_no?></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Area <span class="feet">in Sq.yards</span></h6>    
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                            <h6> <?php echo $row->area?></h6>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <h6>Dimensions <span class="feet">in Feet</span></h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                            <h6> <?php echo $row->dimensions?></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Customer name </h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                             <?php if($row->customer_name){$customer_name= $row->customer_name; }else{ $customer_name='';} ?>
 
                            <h6><?php echo $customer_name; ?> </h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Contact no</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span> 
                            <?php if($row->c_content_no){$c_content_no= $row->c_content_no; }else{ $c_content_no='';} ?>
                            <h6><?php echo $c_content_no; ?> </h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Details</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                            <?php if($row->details){$details= $row->details; }else{ $details='';} ?> 
                            <h6><?php echo $details?></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>User Id</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Updated On</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span>
                            <h6> <?php echo $row->date?></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>No.of Days</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                            <span class="mr-2">:</span> 
                            <h6><?php echo $row->no_of_days?></h6>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h6>Current Status</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex">
                        
                            <span class="mr-2">:</span>
                             <?php if($row->current_status){$status=$row->current_status; }else{ $status='vacant';} ?>
                            
                            <?php if ($status =='vacant'){ $class="green_bg";}
                        else if ($status =='registered'){ $class="yellow_bg"; } 
                        else if ($status =='blocked'){$class="red_bg"; } 
                        else if ($status =='reserved'){ $class="blue_bg"; }?>
                            <h6 class="<?php echo 'red_bg'?>"> <?php echo $status?></h6>
                        </div>
                    </div>
                </div>
                <p class="plot mb-0">This Plot is Registered by abhi</p>
                <form class="sclect_option">
                    <div class="form-group ">
                      <label for="exampleFormControlSelect1">Change Details</label>
                      <select class="form-control change-details" name="current_status"  id="exampleFormControlSelect1">
                      
                        <option>------Select-------</option>
                        <option value="vacent" >Vacant</option>
                        <option value="blocked" >Blocked</option>
                        <option value="reserv" >Reserved</option>
                        <option value="regester" >registered</option>
                      </select>
                    </div>
                  </form>

                 <!-- vacent form -->
                  <form id="vacent" method="post" action="<?php echo BASE_URL?>vacant">
                  <?php if($row->ci_customer_id){$ci_customer_id= $row->ci_customer_id; }else{ $ci_customer_id='';} ?>
                             <input type="hidden" class="form-control" name="customer_id_v" placeholder="Enter customer number" value="<?php echo $ci_customer_id; ?>" >
                             <input type="hidden" class="form-control" name="current_status_v"  value="vacant" >
                              <input type="hidden" class="form-control" name="plot_id_v"  value="<?php echo $row->plot_id?>" >
                    <div class="form-group sclect_option">
                        <textarea class="form-control vacant" id="exampleFormControlTextarea1" placeholder="PB No 6359 Document NO 3127/2018 DATED 28.02.2018" name="text_area" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-center mb-2 vacnt_btns">
                        <button type="submit" class="mr-2">Update Changes</button>
                        <button type="submit">Exit</button>
                    </div>
                  </form>

                  <!-- Booked form -->
                  <form id="booked" method="post" action="<?php echo BASE_URL?>update_plots">
                  <?php if($row->ci_customer_id){$ci_customer_id= $row->ci_customer_id; }else{ $ci_customer_id='';} ?>
                             <input type="hidden" class="form-control" name="customer_id_b" placeholder="Enter customer number" value="<?php echo $ci_customer_id; ?>" >
                             <input type="hidden" class="form-control" name="current_status_b"  value="blocked" >
                              <input type="hidden" class="form-control" name="plot_id_b"  value="<?php echo $row->plot_id?>" >
                    <div class="form-group sclect_option">
                        <label class="dys" for="exampleFormControlSelect1">No of Days</label>
                        <select class="form-control" name='no_of_days' id="exampleFormControlSelect1">
                            <option>------Select-------</option>
                            <option>Vacant</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group sclect_option mb-0">
                            
                             <?php if($row->customer_name){$customer_name= $row->customer_name; }else{ $customer_name='';} ?>
                                <label class="dys" for="exampleInputEmail1">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name_b" placeholder="Customer Name" value="<?php echo $customer_name; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group sclect_option mb-0">
                                <label class="dys" for="exampleInputEmail1">Contact no</label>
                                 <?php if($row->c_content_no){$c_content_no= $row->c_content_no; }else{ $c_content_no='';} ?>
                                <input type="text" class="form-control" name="c_contect_no_b" placeholder="Enter customer number" value="<?php echo $c_content_no; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group sclect_option">
                                <label class="dys" for="exampleInputEmail1">Marketer Name</label>
                                <?php if($row->marketer_name){$marketer_name= $row->marketer_name; }else{ $marketer_name='';} ?>
                                <input type="text" class="form-control" name="marketer_name_b" placeholder="Ch Venkateswarlu" value="<?php echo $marketer_name; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group sclect_option">
                                <label class="dys" for="exampleInputEmail1">Contact no</label>
                                <?php if($row->m_content_no){$m_content_no= $row->m_content_no; }else{ $m_content_no='';} ?>
                                <input type="text" class="form-control" name="m_content_no_b" placeholder="Enter marketer number" value="<?php echo $m_content_no ; ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group sclect_option">
                        <textarea class="form-control vacant" id="exampleFormControlTextarea1" placeholder="PB No 6359 Document NO 3127/2018 DATED 28.02.2018" name="details" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-center mb-2 vacnt_btns">
                        <button type="submit" class="mr-2">Update Changes</button>
                        <button type="submit">Exit</button>
                    </div>
                  </form>

                  <!-- Reserved form -->
                  <form id="reserved" method='post' action="<?php echo BASE_URL?>update_reserved">
                        <?php if($row->ci_customer_id){$ci_customer_id= $row->ci_customer_id; }else{ $ci_customer_id='';} ?>
                             <input type="hidden" class="form-control" name="customer_id_r" placeholder="Enter customer number" value="<?php echo $ci_customer_id ?>" >
                             <input type="hidden" class="form-control" name="current_status_r"  value="reserved" >
                              <input type="hidden" class="form-control" name="plot_id_r"  value="<?php echo $row->plot_id?>" >
                        <div class="row">
                            <div class="col-md-6">
                            
                                <div class="form-group sclect_option mb-0">
                                 
                                <?php if($row->customer_name){$customer_name= $row->customer_name; }else{ $customer_name='';} ?>
                                    <label class="dys" for="exampleInputEmail1">Customer Name</label>
                                    <input type="text" class="form-control" name="customer_name_r" placeholder="Customer Name" value="<?php echo $customer_name; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                 <?php if($row->c_content_no){$c_content_no= $row->c_content_no; }else{ $c_content_no='';} ?>
  									<label class="dys" for="exampleInputEmail1">Contact no</label>
                                    <input type="text" class="form-control" name="contact_no_r" placeholder="Enter customer number" value="<?php echo $c_content_no; ?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                <?php if($row->marketer_name){$marketer_name= $row->marketer_name; }else{ $marketer_name='';} ?>
  							<label class="dys" for="exampleInputEmail1">Marketer Name</label>
                                    <input type="text" class="form-control" name="marketer_name_r" placeholder="Ch Venkateswarlu" value="<?php echo $marketer_name; ?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                    <label class="dys" for="exampleInputEmail1">Contact no</label>
                                     <?php if($row->m_content_no){$m_content_no= $row->m_content_no; }else{ $m_content_no='';} ?>
  						<input type="text" class="form-control" name="m_content_no_r" placeholder="Enter marketer number"  value="<?php echo $m_content_no ; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group sclect_option">
                            <label class="dys" for="exampleInputEmail1">PB No</label>
                            <?php if($row->pb_no){$pb_no= $row->pb_no; }else{ $pb_no='';} ?>
                            <input type="text" class="form-control" name="pb_no_r" placeholder="6359" value="<?php echo $pb_no ?>">
                        </div>
                        <div class="form-group sclect_option">
                            <textarea class="form-control vacant" id="exampleFormControlTextarea1" placeholder="PB No 6359 Document NO 3127/2018 DATED 28.02.2018" name="details_r" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-center mb-2 vacnt_btns">
                            <button type="submit" class="mr-2">Update Changes</button>
                            <button type="submit">Exit</button>
                        </div>
                      </form>

                      <!-- Registered form -->
                    <form id="registered" method='post' action="<?php echo BASE_URL?>registered">
                    <?php if($row->ci_customer_id){$ci_customer_id= $row->ci_customer_id; }else{ $ci_customer_id='';} ?>
                             <input type="hidden" class="form-control" name="customer_id_reg" placeholder="Enter customer number" value="<?php echo $ci_customer_id ?>" >
                             <input type="hidden" class="form-control" name="current_status_reg"  value="registered" >
                              <input type="hidden" class="form-control" name="plot_id_reg"  value="<?php echo $row->plot_id?>" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                    <label class="dys" for="exampleInputEmail1">Customer Name</label>
                                    <?php if($row->customer_name){$customer_name= $row->customer_name; }else{ $customer_name='';} ?>
 
 
                                    <input type="text" class="form-control" name="customer_name_reg"  placeholder="Customer Name" value="<?php echo $customer_name; ?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                    <label class="dys" for="exampleInputEmail1">Contact no</label>
                                    <?php if($row->c_content_no){$c_content_no= $row->c_content_no; }else{ $c_content_no='';} ?>
  
  
                                    <input type="text" class="form-control" name="c_contect_no_reg" placeholder="Enter customer number" value="<?php echo $c_content_no; ?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                    <label class="dys" for="exampleInputEmail1">Marketer Name</label>
                                    <?php if($row->marketer_name){$marketer_name= $row->marketer_name; }else{ $marketer_name='';} ?>
  
 
                                    <input type="text" class="form-control" name="marketer_name_reg" placeholder="Marketer Name" value="<?php echo $marketer_name; ?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group sclect_option mb-0">
                                    <label class="dys" for="exampleInputEmail1">Contact no</label>
                                     <?php if($row->m_content_no){$m_content_no= $row->m_content_no; }else{ $m_content_no='';} ?>
  
  
                                    <input type="text" class="form-control" name="m_content_no_reg"  placeholder="Enter marketer number" value="<?php echo $m_content_no ; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group sclect_option mb-0">
                            <label class="dys" for="exampleInputEmail1">PB No</label>
                            <?php if($row->pb_no){$pb_no= $row->pb_no; }else{ $pb_no='';} ?>
                            <input type="text" class="form-control" name="pb_no_reg" placeholder="PB No" value="<?php echo $pb_no; ?>" >
                        </div>
                        <div class="form-group sclect_option ">
                            <label class="dys" for="exampleInputEmail1">Document No</label>
                            <?php if($row->document_no){$document_no= $row->document_no; }else{ $document_no='';} ?>
                            <input type="text" class="form-control" name="document_no_reg" placeholder="Enter Document number" value="<?php echo $document_no; ?>" >
                        </div>
                        <div class="form-group sclect_option">
                            <textarea class="form-control vacant" id="exampleFormControlTextarea1" placeholder="PB No 6359 Document NO 3127/2018 DATED 28.02.2018" name="details_reg" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-center mb-2 vacnt_btns">
                            <button type="submit" class="mr-2">Update Changes</button>
                            <button type="submit">Exit</button>
                        </div>
                      </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
       $(document).ready(function(){
            $(".change-details").on('change', function() {
               var value=$(this).val();
                if(value=="vacent"){
                    $("#booked").hide();
                    $("#reserved").hide();
                    $("#registered").hide();
                    $("#vacent").show();
                    
                }
                else if(value=="blocked"){
                    $("#reserved").hide();
                    $("#registered").hide();
                    $("#vacent").hide();
                    $("#booked").show();
                }
                else if(value=="reserv"){
                    $("#registered").hide();
                    $("#vacent").hide();
                    $("#booked").hide();
                    $("#reserved").show();
                }               
                else if(value=="regester"){
                    $("#vacent").hide();
                    $("#booked").hide();
                    $("#reserved").hide();
                    $("#registered").show();
                }
            });
        });
       
    </script>
  </body>
</html>
