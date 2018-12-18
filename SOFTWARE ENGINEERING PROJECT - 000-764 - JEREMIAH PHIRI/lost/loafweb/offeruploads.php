<?php include("head.php");
      include ("header.php");
	  
?>
<div id="contribute">

 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-12 col-lg-12 col-xs-12">
                         
						  <div class="col-md-12   col-lg-12">
                            <div class="single_widget">
                                <h3><u><CENTER><H6> FOR UNREGULATED POST OF ANY ITEM YOU LOST </H6></CENTER></u></h3>
						 
						 
                                <h5>

                        

                                <div class="single_widget_form text-left">
                                    <form action=" " id="formid" method="post" enctype="multipart/form-data">
								
                                                       <HR /><CENTER><SUP>FILL IN THE DETAILS BELOW </SUP></CENTER><HR />


                                        <div class="form-group">
										WHATS YOUR NAME?
                                            <input type="text" class="form-control" name="entity"  placeholder="YOUR NAME">
                                        </div> 
										
										<div class="form-group">
										  WHAT DID YOU LOSE?
                                            <input type="text" class="form-control" name="title"  placeholder="WHAT ITEM DID YOU LOSE?">
                                        </div> 

										<div class="form-group">
                                           image: <input type="file" class="form-control" name="image"  placeholder="AD PHOTO(200 X 300 MAXIMUM)">
                                        </div>
										
										
										<div class="form-group">
                                           WHICH PAGE DO YOU WANT TO ADVERTISE WITH 
										   
										   <select name='advertentity'>
										   <?php    
										      
								      $selectadforname="select entity from generalitems where category='aproved'";
                                      $selectadfornamequery=mysqli_query($connection,$selectadforname);
									       while($fetch=mysqli_fetch_array($selectadfornamequery))
										   { echo " <option>" ,$fetch['entity'], "</option> ";}
									          ?>
											
											  </select>
										   
                                        </div>
										
										
										
										<!-- end of form-group -->

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="20" placeholder="DISPLAY MESSAGE  "></textarea>
                                        </div>
										
                                        <div class="form-group">
                                            <textarea class="form-control" name="details" rows="10" placeholder="COMPANY DETAILS INCLDING PHONE NUMBER AND EMAIL AND LOCATION"></textarea>
                                        </div>
										
                                       <center> <input type="submit" value="UPLOADAD" name="uploadad" class="btn btn-primary"></center>
									   
									     <?php          

                                              if($_POST["uploadad"])
											  { $time=date("Y-M-D");
										        $status="off";
											  $entity=mysqli_real_escape_string($connection,$_POST["entity"]);
												$title=mysqli_real_escape_string($connection,$_POST["title"]);
												$message=mysqli_real_escape_string($connection,$_POST["message"]);
												$companydetails=mysqli_real_escape_string($connection,$_POST["details"]);
											   $advertentity=mysqli_real_escape_string($connection,$_POST["advertentity"]);
												$target="assets/images/".basename($_FILES['image']['name']);
												$image=$_FILES['image']['name'];
												 if(empty($image))
												 {
													echo  "no image to upload?";
													$image="defaultadimage.jpg";
													 }	 
												 
												 
												if(!empty($entity && $title))
												{mysqli_query($connection,"INSERT INTO advert 
													  (entity,title,imagename,message,time,companydetails,status,advertentity)
													   values('$entity','$title','$image','$message','$time','$companydetails','$status','$advertentity')");
														
													   if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
													   {echo "it has uploaded image";}
												          else{echo "image has not been uploaded".mysqli_error($connection);}
														  
														  
							
													
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






								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
						
			
                    </div>
                </div>  
				</section>
				</div>
            
      
			<?php include("footer.php");?>
		
			