
<?php include("head.php");
      include ("header.php");  
	 session_start(); 
?>
 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                  
                        <div class="col-md-12 col-lg-12 col-xs-12">
 
                                <h5> <?php          
                                              $display=true;
											  
                                              if($_POST["upload"])
											  {
							     				//$username=mysqli_real_escape_string($connection,$_POST["username"]);
												 $phoneNumber=mysqli_real_escape_string($connection,$_POST["phoneNumber"]);
							                     $pass=mysqli_real_escape_string($connection,$_POST["pass"]);
											   
											        $command="select * from contributeadmin where pass='$pass' AND $phoneNumber='$phoneNumber'";
												    $query=mysqli_query($connection,$command);
													
												   $checkquery=mysqli_num_rows($query);
												  if($checkquery==0){
													 echo " <div class='error'><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>YOU ENTER EMAIL OR PASSWORD NOT CORRECT PLEASE TRY AGAIN</div>";
												    
												 }
												 else
												
												 {$display=false;
												 include('contentupload.php');}
												 
									
											  }
                                           //form processiing form
										  
										    if($display)
											{
											?>	
										  <form action=" " id="formid" method="post" enctype="multipart/form-data">
									
								
                                                      <br /><br /> <HR /><CENTER>LOGIN OR SIGNUP TO REPORT ITEMS <br/> 
													  
													  <h6>
													 <a href="signup.php">
													  <H5> CLICK HERE TO SIGNUP</H4>
														</a></CENTER>
				                                       </h6>
                                                  <fieldset>
												       <legend><H6><CENTER>FILL IN DETAILS TO LOGIN</CENTER></H6></legend>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phoneNumber"  placeholder="phone number" required="1">
											<br>
										    <input type="password" class="form-control" name="pass"  placeholder="enter password" required="1">

										</div>
   

                                       <center> <input type="submit" value="LOG IN" name="upload" class="btn btn-primary"></center>		
                                                  
												  </fieldset>									   
                                          </form>	
                                           <?php										  
											}
											$_SESSION["phoneNumber"]=$phoneNumber;
											
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
			
			
		
		
			