<?php 
session_start();  
 if(isset($_SESSION['phoneNumber'])){
	  echo "<br/>it is set";
	  
	  include("head.php");
      include ("header.php");
 }
  else { echo ("<center class='error'>
          HI IT SEEMS YOU ARE NOT LOGGED IN TO BE ADMIN
	                            <br />
	               <a href='adminbar.php'> TRY AGAIN</a>
	  </center>"); }
	
?>
<div id="contribute">

 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-12 col-lg-12 col-xs-12">
                          <div class="col-md-12   col-lg-12">
                            <div class="single_widget ">
                                <h3><u>
								<center>EDITORIAL PANEL <BR /></u></h3>
								<a href="advertiselisting.php">BACK TO APPROVAL LIST</a>
								          </center>
								                   
								
                                <h5> <div class="single_widget_form text-left">
								
								<?PHP 
								
							 if (isset($_GET['ID'])) {
                                 $id = $_GET['ID'];
							   $command="SELECT * FROM advert WHERE ID=$id AND status='off'";
							   $execute=mysqli_query($connection,$command);
								while($fetch=mysqli_fetch_array($execute))
								{  echo "ID NUMBER:", $id=$fetch['ID'];
								   echo "<hr class='ruleradmin'>",
											           "<a href='lost.php?ID={$fetch['ID']}'>"
													  . $fetch['entity'],
													  " ",
													    $fetch['title'],
														   "</a>";
													      
									
								
								
								
								?>
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data" class="admineditor">
								
                                   <div class="form-group">
										<p>ENTITY</p>
                                            <input type="text" class="form-control" name="entity"  value=<?php  echo nl2br($fetch['entity']);?>>
                                        </div> 
										
										<div class="form-group">
                                            <input type="text" class="form-control" name="title"  value=<?php  echo nl2br($fetch['title']);?>>
                                        </div> 
									
										<div class="form-group">
										   image: <input type="text"
											class="form-control" name="imagename" 
											value=<?php echo $fetch['imagename'];?> >
											
											<?php 
											echo
									        "<img src='../assets/images/".$fetch['imagename']."' height='90px' class='imgborder'>";
											 ?>
											 
                                          </div>
								 
								      <div class="form-group">
                                            <textarea class="form-control" name="message" rows="10" ><?php  echo ($fetch["message"]);?></textarea>
                                        </div>
										 <div class="form-group">
                                            <textarea class="form-control" name="companydetails" rows="5"value=<?php  echo nl2br($fetch['companydetails']);?>></textarea>
                                        </div>
										 <center> <input type="submit" value="UPLOAD" name="upload" class="btn btn-primary"></center>
									   
									     <?php          
								}
							}
                                              if($_POST["upload"])
											  {
												
											    $status='on';
											    $entity=mysqli_real_escape_string($connection,$_POST["entity"]);
											    $title=mysqli_real_escape_string($connection,$_POST["title"]);
												$body=mysqli_real_escape_string($connection,$_POST["message"]);
											
												$otherdetails=mysqli_real_escape_string($connection,$_POST["companydetails"]);
												
												//$target="assets/images/".basename($_FILES['image']['name']);
												$imagenameforapprovalonly=mysqli_real_escape_string($connection,$_POST["imagename"]);
												//$image=$_FILES['image']['name'];
												$audiossize="";
												$audiofomat="";
											
												
												
												if(!empty($entity && $title && $body))
												{mysqli_query($connection,"UPDATE advert SET 
											                      status='$status',
																  entity='$entity',
																  title='$title',
																  message='$body',
																  imagename='$imagenameforapprovalonly',
																  
															     WHERE
																    ID='$id'");
																	echo "<CENTER>it has updated $id<br />"."<a href='al.php'> BACK</a></CENTER>".mysqli_error($connection);
																	;
																	    
																	}
																	else{
																		
																		echo "it didnt update".mysqli_error($connection);
																           
																				}
											  }																	
												 
													  
													 
                                           //form processiing form

										 
										 ?>
									 
                                    </form>	
                                </div>
                            </div>
                        </div>			
								
							
								
<img src="assets/images/footerbg.jpg" alt="artist photo"  />

<!----------


- The 2G network includes data services, fax, and email. Almost every wireless,
device sold in 2002 uses one of the second-generation air interfaces. early 1990s.
- The 2G network includes data services, fax, and email. Almost every wireless,
device sold in 2002 uses one of the second-generation air interfaces.
- The 2G networks have digital cellular air interfaces.
- They were all brought to market in the early 1990s.
- The 2G network includes data services, fax, and email. Almost every wireless,
device sold in 2002 uses one of the second-generation air interfaces.
------>
			
			</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
						<div class="col-md-6  col-lg-4 col-xs-12">
                            <div class="single_abouts_text">
							<h5><U>COMMENTS</U></h5>
                               
                           
								
                                <h5>
								actual lost
								- The 2G networks have digital cellular air interfaces.

								</h5>
                            </div>
                        </div>
			
                    </div>
                </div>  
				</section>
				</div>
            
      
	  <?php 
	 
	  
	  include("footer.php");?>
		
			