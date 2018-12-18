<?php 
session_start();
include("head.php");
include ("header2.php");
	  
?>

 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                  
                        <div class="col-md-12 col-lg-12 col-xs-12">
 
                                <h5>
<br><br><br><br><br>
                           
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data">
								
                                                       <HR /><CENTER>ADMIN LOGIN</CENTER><HR />
				

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phoneNumber"  placeholder="PHONE NUMBER" required="1">
											<br>
										    <input type="password" class="form-control" name="pass"  placeholder="enter password" required="1">

										</div>
   

                                       <center> <input type="submit" value="LOGIN" name="upload" class="btn btn-primary"></center>
									   
									     <?php  
										 if($_POST["upload"])
											  {
							     				 $phoneNumber=mysqli_real_escape_string($connection,$_POST["phoneNumber"]);
							                     $pass=mysqli_real_escape_string($connection,$_POST["pass"]);
											   
											        $command="select * from mainadmin where privilege='$pass' AND phoneNumber='$phoneNumber'";
												    $query=mysqli_query($connection,$command);
													
													$checkquery=mysqli_num_rows($query);
												    if($checkquery==0){
													 echo "ACCOUNT NOT FOUND";
													
													  }
													  else{  
													       
													         echo "<a href='al.php'>click here to continue</a>";
                                                                 $_SESSION['phoneNumber']=$phoneNumber;
														}
													 }
												 
												 else
												
												 {echo " ";}
									      ?>
                                </div>
                            </div>
                        </div>			
													
								
								
								
<img src="assets/images/footerbg.jpg" alt="artist photo"  />






								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
				
                    </div>
                </div>  
				</section>
			
			
		
		
			