<?php 
session_start();  
 if(isset($_SESSION['phoneNumber'])){
	  /*echo "<br/>it is set";*/
	  
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
								<center>APPROVAL PANEL <BR /></u></h3>
								<a href="al.php">BACK TO APPROVAL LIST</a>
								          </center>
								                   
								
                                <h5> <div class="single_widget_form text-left">
								
								<?PHP 
								
							 if (isset($_GET['ID'])) {
                                 $id = $_GET['ID'];
							   $command="SELECT * FROM generalitems WHERE ID=$id AND category='unaproved'";
							   $execute=mysqli_query($connection,$command);
								while($fetch=mysqli_fetch_array($execute))
								{  echo "ID NUMBER:", $id=$fetch['ID'];
								   echo "<hr class='ruleradmin'>",
											           "<a href='lost.php?ID={$fetch['ID']}'>"
													  . $fetch['itemtype'],
													  " ",
													    $fetch['entity'],
														 " ",
														$fetch['body'],
													        "</a>";
													      
									
								
								
								
								?>
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data" class="admineditor">
								
                                   <div class="form-group">
										<p>ENTITY</p>
                                            <input type="text" class="form-control" name="entity"  value=<?php  echo $fetch['entity'];?>>
                                        </div> 
										
										
										<div class="form-group">
                                            <input type="text" class="form-control" name="album"  value=<?php  echo nl2br($fetch['album']);?>>
                                        </div> 
										<div class="form-group">
                                            <input type="text" class="form-control" name="year"  value=<?php  echo nl2br($fetch['year']);?>>
                                        </div>
										
										
										<div class="form-group">
										   image: <input type="text"
											class="form-control" name="imagename" 
											value=<?php echo $fetch['image'];?> >
											
											<?php 
											echo
									        "<img src='../assets/images/".$fetch['image']."' height='90px' class='imgborder'>";
											 ?>
											 
                                          </div>
										  
										
										<div class="form-group">
                                            <H6>itemtype</H6>
											  <textarea class="form-control" name="itemtype" rows="1" cols="1" ><?php  echo ($fetch["itemtype"]);?></textarea>
										 </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="body" rows="10" ><?php  echo ($fetch["body"]);?></textarea>
                                        </div>
									
										
										<div class="form-group">
                                            <type="file" class="form-control" name="audio"  value="audio file">
                                        </div>
								
                                       <center> <input type="submit" value="APPROVE POST" name="upload" class="btn btn-primary">
									                  
									    <input type="submit" value="DELETE" name="delete" class="btn btn-primary"></center>
									   
									     <?php          
								}
							}
                                              if($_POST["upload"])
											  {
												
											    $category='aproved';
											    $entity=mysqli_real_escape_string($connection,$_POST["entity"]);
											
											
												$body=mysqli_real_escape_string($connection,$_POST["body"]);
												$itemtype=mysqli_real_escape_string($connection,$_POST["itemtype"]);
												$album=mysqli_real_escape_string($connection,$_POST["album"]);
												$year=mysqli_real_escape_string($connection,$_POST["year"]);
												
												//$target="assets/images/".basename($_FILES['image']['name']);
												$imagenameforapprovalonly=mysqli_real_escape_string($connection,$_POST["imagename"]);
												//$image=$_FILES['image']['name'];
												$audiossize="";
												$audiofomat="";
												//audoin sholud have aspecci de sound 
											  $audiotarget="audios/songs".basename($_FILES['audio']['name']);
	                                          $audio=$_FILES["audio"];
												
												
												if(!empty($entity && $itemtype)) //title not necessary
												{mysqli_query($connection,"UPDATE generalitems  SET 
											                      category='$category',
																  entity='$entity',
															
																
																  body='$body',
																  itemtype='$itemtype',
																  album='$album',
																  image='$imagenameforapprovalonly',
																  year='$year',
																 audio='audio' 
																  WHERE
																    ID='$id'");
																	echo "<CENTER>it has updated $id<br />"."<a href='al.php'> BACK</a></CENTER>"
																	;
																	    
																	}
																	
																	else{
																		
																		echo "cuoldn't upload to the system".mysqli_error($connection);
																           
																		}
											  }
											  
											  if($_POST["delete"])
											  {
												      $deletecommand="DELETE FROM generalitems WHERE ID=$id";
												    $execute=mysqli_query($connection,$deletecommand);
											     if($execute)
												 {echo "it has deleted";}
											  else{echo "it couldnt delete".mysqli_error($connection);}
											  }
											  
											  
												 
													  
													 
                                           //form processiing form

										 
										 ?>
									 
                                    </form>	
                                </div>
                            </div>
                        </div>			
								
							
								
<img src="assets/images/footerbg.jpg" alt="artist photo"  />



---------------------------------------------------------------------------------------------------------------------------------------------------------

<hr />

<hr />
								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
						<div class="col-md-6  col-lg-4 col-xs-12">
                            <div class="single_abouts_text">
							<h5><U> </U></h5>
                               
                           
								
                                <h5>
								
								------------------------------------------------------------

								</h5>
                            </div>
                        </div>
			
                    </div>
                </div>  
				</section>
				</div>
            
      
	  <?php 
	 
	  
	//  include("footer.php");?>
		
			