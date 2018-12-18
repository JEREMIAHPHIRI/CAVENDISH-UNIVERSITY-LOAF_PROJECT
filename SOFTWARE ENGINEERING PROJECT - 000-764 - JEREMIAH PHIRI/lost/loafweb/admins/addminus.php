<?php 
      include("head.php");
      include ("header.php");
	 
?>


 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                  
                        <div class="col-md-12 col-lg-12 col-xs-12">
 
                                <h5>

                           
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data">
								
                                                       <HR /><CENTER>SIGNUP</CENTER><HR />
				                       <div class="form-group">
                                            <input type="text" class="form-control" name="username"  placeholder="YOUR FULL NAMES" required="1">

                                            <input type="text" class="form-control" name="address"  placeholder="what province are you from " required="1">
                                       
									
                                            <input type="email" class="form-control" name="email"  placeholder="please enter your email(optional)">
											
                                            <input type="text" class="form-control" name="phoneNumber"  placeholder="please enter your phone number correctly here(required) " required="1">
                                           <input type="password" class="form-control" name="pass"  placeholder="create Password">
											
										
                                          YOUR PHOTO: <input type="file" class="form-control" name="image"  placeholder="your user image" required="1">
                                        
								
										    <input type="text"  value="user" name="user" hidden>
                                       
                                            <textarea class="form-control" name="bio" rows="5" placeholder="tell us about you" required="1"></textarea>
											
                                        
							 </div>
							 
                               	<div class="form-group">
                                     <h5>WHERE IS YOUR LOCATION</h5><sub>click arrow to choose your work location</sub><br />
										 <select name="location" required='1'>
										        <option><sup>select</sup></option>
										        <option> MANDA-HILL POLICE</option> 
												<option> KABWATA POLICE </option> 
												<option> CHELSTON POLICE</option> 
												<option> MUSANGA POLICE </option> 
												<option> MULUNGUSHI POLICE</option> 
												<option>EMMASDALE POLICE</option> 
												<option>HELLEN KAUNDA POLICE </option> 
										</select>
									</div>	

                                       <center> <input type="submit" value="signup" name="upload" class="btn btn-primary"></center>
									   
									     <?php          

                                              if($_POST["upload"])
											  {
												
											  
												  $address=mysqli_real_escape_string($connection,$_POST["address"]);
							     				 $username=mysqli_real_escape_string($connection,$_POST["username"]);
							                    $privilege=mysqli_real_escape_string($connection,$_POST["pass"]);
												$email=mysqli_real_escape_string($connection,$_POST["email"]);
								                $phoneNumber=mysqli_real_escape_string($connection,$_POST["phoneNumber"]);
												$bio=mysqli_real_escape_string($connection,$_POST["bio"]);
											  $location=mysqli_real_escape_string($connection,$_POST["location"]);
												//$user=mysqli_real_escape_string($connection,$_POST["user"]);
												$target="admins/".basename($_FILES['image']['name']);
												$image=$_FILES['image']['name'];
											
												if(!empty($username))
												{mysqli_query($connection,"INSERT INTO mainadmin
													  (username,email,PhoneNumber,address,imagename,Bio,time,privilege,location)
											    values('$username','$email','$phoneNumber','$address','$image','$bio','$time','$privilege','$location')");
														
													   if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
													   {echo "it has uploaded image";"<script> window.open('adminbar.php','self') </script>";}
												          else{echo "image has not been uploaded".mysqli_error($connection);}
													           
																
											  
											   echo "<script> window.open('adminbar.php') </script>";
																
																
												}
												else{echo "UNSUCCSEFULL UPLOAD PLEASE TRY AGAIN".mysqli_error($connection);}
										            
											  }
                                           //form processiing form

                                        
											   

										 ?>
									   
									   
									   
                                    </form>	
                                </div>
                            </div>
                        </div>			
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
<img src="assets/images/footerbg.jpg" alt="artist photo"  />





<hr />
<a href="assets/images/footerbg.jpg" download>
  <img border="0" src="assets/images/footerbg.jpg" alt="W3Schools" width="104" height="142">
  download PHOTOS
</a>
<hr />
								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
				
                    </div>
                </div>  
				</section>
			
			
		
		
			