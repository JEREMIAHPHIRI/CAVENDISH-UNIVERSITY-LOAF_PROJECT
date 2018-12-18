<?php 
 session_start(); 
include("head.php");
      include ("header.php");
	  $display=true;
	 
?>


 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                  
                        <div class="col-md-12 col-lg-12 col-xs-12">
 
                                <h5>

                                   <?php if($display)
								   {
								   
								   ?>
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data">
								
                                                       <HR /><CENTER>SIGNUP</CENTER><HR />
				<?PHP ERROR_REPORTING(0);?>

                                        <div class="form-group">
										    <h3> NAMES</h3>
                                            <input type="text" class="form-control" name="username"  placeholder="YOUR FULL NAME(S)" value='<?php $username=$_POST["username"];if($username)echo $username;?>' required="1">
                                             <br>
											<h3>ADDRESS</h3>
                                            <input type="text" class="form-control" name="address"  placeholder="what province are you from " value='<?php $address=$_POST["address"];if($address)echo $address;?>' required="1">
                                              <br />
                                               <h3>EMAIL</h3>									
                                            <input type="email" class="form-control" name="email"  placeholder="please enter your email(optional)"  value='<?php $email=$_POST["email"];if($email)echo $email;?>' >
											 <BR />
											<h3>PHONE NUMBER<sub>(PLEASE NOTE THAT THIS NUMBER WILL BE USED FOR MOBILE MONEY PAYMENTS)</sub></h3>
                                            <input type="text" class="form-control" name="phoneNumber"  placeholder="phone number (required) " value='<?php $phoneNumber=$_POST["phoneNumber"];if($phoneNumber)echo $phoneNumber;?>'required="1">
                                             <BR />
											<h3>PASSWORD</h3>
										  <input type="password" class="form-control" name="pass"  placeholder="create Password">
											
										
                                          YOUR PHOTO: <input type="file" class="form-control" name="image"  placeholder="your user image" required="1">
                                        
								
										    <input type="text"  value="user" name="user" hidden>
                                       <br>
									  <h3> ABOUT YOU</h3>
                                             <textarea class="form-control" name="bio" rows="5" placeholder="tell us about you"  required="1">
											<?php $bio=$_POST["bio"];if($bio)echo $bio;?>
											</textarea>
                                        
										</div>
   

                                       <center> <input type="submit" value="signup" name="upload" class="btn btn-primary"></center>
									   
									   
									                                       </form>
																		   
								   <?php 
								   } 
								   
								   ?>
									     <?php          

                                              if($_POST["upload"])
											  {
												 
												//chcek for the number
											  
												  $address=mysqli_real_escape_string($connection,$_POST["address"]);
							     				 $username=mysqli_real_escape_string($connection,$_POST["username"]);
							                    $pass=mysqli_real_escape_string($connection,$_POST["pass"]);
												$email=mysqli_real_escape_string($connection,$_POST["email"]);
								                $phoneNumber=mysqli_real_escape_string($connection,$_POST["phoneNumber"]);
												$bio=mysqli_real_escape_string($connection,$_POST["bio"]);
												   $user=mysqli_real_escape_string($connection,$_POST["user"]);
												$target="admins/".basename($_FILES['image']['name']);
												$image=$_FILES['image']['name'];
											
											
											  $numbercheck="select * from contributeadmin where phoneNumber=$phoneNumber";
												   $numcheckquery=mysqli_query($connection,$numbercheck);
												     $actuacheck=mysqli_num_rows($numcheckquery);
													    if($actuacheck==0){
													
												if(!empty($phoneNumber))
												{mysqli_query($connection,"INSERT INTO contributeadmin
													  (username,phoneNumber,bio,email,imagename,pass,address,privilege)
											    values('$username','$phoneNumber','$bio','$email','$image','$pass','$address','$user')");
														
													   if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
													   {echo " ";  $display=false;}
												          else{echo "image has not been uploaded".mysqli_error($connection);}
													           
																
											    $session=$_SESSION['phoneNumber']=$phoneNumber;
											   echo "signed up";
																
																
												}
												else{echo "UNSUCCSEFULL UPLOAD PLEASE TRY AGAIN".mysqli_error($connection);}
										            
											  } 
											  else{ echo
											  "someone else is using $phoneNumber another number";
															 
															
														}
											  }
											  
                                           //form processiing form

                                        
											   

										 ?>
									   
									   
									   

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
			
			
		
		
			