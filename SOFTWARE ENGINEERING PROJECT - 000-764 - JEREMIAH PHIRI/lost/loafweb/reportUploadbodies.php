<?php  
      session_start();
      if(isset($_SESSION['phoneNumber'])){
	  include("head.php");
      include ("header.php");
	  }
	  else{  die("<a href='contribute.php'><H1 class='error'>please login</h1></a>"); }

?>
 <section id="abouts" class="abouts">
            <div class="container">
                  <div class="col-lg-12 col-md-12 col-xs-12">
                            <h5> 
							<br /><br /><br />
					<?php
						$user=$_SESSION['phoneNumber'];
						$selectuser="select * from contributeadmin where phoneNumber='$user'";
						$execution=mysqli_query($connection,$selectuser);
						   while($fetch=mysqli_fetch_array($execution))
						{echo  "<BR /><br />", " ","<div class='uppercase'>",$uploaderid=$fetch['username']," ","</div> ";
					     echo " ","<img class='imgentity' src='assets/images/".$fetch['imagename']."' height='90px' alt='$uploaderid'>";
						 }
					   ?>
						
						
							 <?php 
								 $display=true;		 
                                      if($_POST["upload"])
											  {
                    //-----------------------------------------------------upload user details into the generalitems latble
						 $user=$_SESSION['phoneNumber'];
						$selectuser="select * from contributeadmin where phoneNumber='$user'";
						$execution=mysqli_query($connection,$selectuser);
						   while($fetch=mysqli_fetch_array($execution))
						 {
							$uploaderid=$fetch['ID'];
						}
											    $category="unaproved";
											    $entity=mysqli_real_escape_string($connection,$_POST["entity"]);
												$feature=mysqli_real_escape_string($connection,$_POST["feature"]);
												//$title=mysqli_real_escape_string($connection,$_POST["title"]);
												$body=mysqli_real_escape_string($connection,$_POST["body"]);
												//$genre=mysqli_real_escape_string($connection,$_POST["genre"]);
												$album=mysqli_real_escape_string($connection,$_POST["album"]);
												$year=mysqli_real_escape_string($connection,$_POST["year"]);
												$itemtype="unclaimedBody";
												//$otherdetails=mysqli_real_escape_string($connection,$_POST["otherdetails"]);
												//$links=mysqli_real_escape_string($connection,$_POST["links"]);
												$target="assets/images/".basename($_FILES['image']['name']);
												$image=$_FILES['image']['name'];
												
											$selectimg="SELECT image from generalitems where image='$image'";
											    $selectimgquery=mysqli_query($connection,$selectimg);
												   $checkforimage=mysqli_num_rows($selectimgquery);
												    if($checkforimage==0)
													{echo   
												
													$image=$_FILES['image']['name'];
												}
												else{echo "we already have that image" ;}
								
												
												if(empty($image))
												 {$image="defaultlyricimage.jpg";}
												
										 if(!empty($entity  && $itemtype && $body))
												{ $numbercheck="select * from generalitems where body='$body' AND entity='$entity'";
												   $numcheckquery=mysqli_query($connection,$numbercheck);
												     $actuacheck=mysqli_num_rows($numcheckquery);
													    if($actuacheck==0){
													
													mysqli_query($connection,"INSERT INTO generalitems
													  (category,     entity,  feature,  body,  itemtype,   album,   image,   year,   audio,   comment,   uploader)
											    values('$category','$entity','$body','$feature','$itemtype','$album','$image','$year','$audio','$comment','$uploaderid')");
						  
					                             //------------------------------------------------------------------------------upload image below   -------------------------------		
												   
													   if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
													   {echo 
												   "<BR /> <BR /> <BR ><br /><br /><br />SUCCESFULLY UPLOADED PLEASE IT WILL DISPLAY AS SOON AS ITS APPROVED BY ADMIN <hr >"; 
   												         $display=false;
														 }
														 
														 else{echo "<br /><br /><br /> Bantu note : image has not been uploaded <hr />".mysqli_error($connection);}
														  
														  
											  
												} else
													
													{echo " <br /><br /><br /><br /><br /><br /><br /><br /><br />it looks like somehow we already have this lyric<hr /> upload another one below<br>.";}
												}
												
												else
												   {echo " <br /><br /><br /><br /><br /><br />UNSUCCSEFULL UPLOAD PLEASE TRY AGAIN".mysqli_error($connection);}
											   
											  }
								 
										 ?>
								                          
														  <center>
															 <?php
												     			 if($display)
																 {			 
															 
															 ?>
                                    <form action=" " class="formid" method="post" enctype="multipart/form-data">
								                                         <br /><br />
                                                       <H1 /><sub>fill in Details of the Corpse <title>A corpse is a dead body, especially the body of a human being.</title></sub></H1><HR />
				<?php error_reporting(0);?>

                                        <div class="form-group">
										     <h4>NAMES OF CORPSE<sub>(if known available)</sub></h4>
                                            <input type="text" class="form-control" name="entity" required='1' placeholder='NAME'  value='<?php $entity=$_POST["entity"];if($entity)echo $entity;?>' >
                                        </div> 
										
									 
										<div class="form-group">
										<h4>WHERE WAS THE CORPSE WAS FOUND?</h4>
                                            <input type="text" class="form-control" name="feature" placeholder="LOCATION OF PICK"  value='<?php $feature=$_POST["feature"];if($feature)echo $feature;?>'>
                                        </div>
										<div class="form-group">
                                          <h4>IMAGE/PHOTO OF CORPSE</h4><input type="file" class="form-control" name="image"  placeholder="image">
                                        </div>
										<div class="form-group">
										<h4>CORPSE DESCRIPTION</h4>
                                            <textarea class="form-control" name="body" rows="15" placeholder="LYRIC BODY"> <?php $body=$_POST["body"];if($body)echo $body;?> </textarea>
                                        </div>
										
										<center> <input type="submit" value="CLICK HERE TO FINISH PROCESS" name="upload" class="btn btn-primary"></center>
									   <br/><br/><br />
									  </div><!-- end of form-group -->   
									 
                                    </form>	
									<?php
																 }
												
									?>
                                </div>
                            </div>
                        </div>			

<hr />
								</h5>
								</div>
                     
								</section>

	  <?php 
	 

	  
	  include("footer.php");?>
	  
	  
		
			