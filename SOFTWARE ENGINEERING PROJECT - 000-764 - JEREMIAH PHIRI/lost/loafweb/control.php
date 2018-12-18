<?php include("head.php");
      include ("header2.php");
	  
?>


 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                  
                        <div class="col-md-12 col-lg-12 col-xs-12">
 
                                <h5>

                           
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data">
								
                                                       <HR /><CENTER>LOGIN</CENTER><HR />
				

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username"  placeholder="YOUR FULL NAMES" required="1">
											<br>
										    <input type="password" class="form-control" name="pass"  placeholder="enter password" required="1">

										</div>
   

                                       <center> <input type="submit" value="signup" name="upload" class="btn btn-primary"></center>
									   
									     <?php          

                                              if($_POST["upload"])
											  {
							     				 $username=mysqli_real_escape_string($connection,$_POST["username"]);
							                     $pass=mysqli_real_escape_string($connection,$_POST["pass"]);
											   
											        $command="select * from contributeadmin where pass='$pass' AND username='$username'";
												    $query=mysqli_query($connection,$command);
													
												   $checkquery=mysqli_num_rows($query);
												  if($checkquery==0){
													 echo " YOU ENTER EMAIL OR PASSWORD NOT CORRECT PLEASE TRY AGAIN";
												 }
												 else
												
												 {echo "<script> window.open('uploadlyric.php');</script> ";}
									
											  }
                                           //form processiing form



										 ?>
									   
									   
									   
                                    </form>	
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
			
			
		
		
			