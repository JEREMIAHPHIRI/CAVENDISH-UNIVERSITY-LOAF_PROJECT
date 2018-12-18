<?php include("head.php");
      include ("header.php");
	  
?>
<BR><br><br><br><br><br>
<section id="abouts" class="abouts">
            <div class="container">
               
                        
                            <div class="single_abouts_text text-left">
                                 <FONT COLOR="RED" SIZE="25"> NOTE</FONT> <h2><CENTER><marquee behavior="alternate" direction="left" scrollamount="4">FILL IN THE FORM BELOW THE DESCRIPTION BOX TO CLAIM YOUR ITEM </marquee></h2>
								  <hr class="hrtitle" />
                          		
                            </div>
                        </div> 

                        <div class="col-md-8  col-lg-8 col-xs-12">
                            <div class="single_abouts_text">
                               <h5>
								<?php    
								//fetch
								 if (isset($_GET['ID'])) {
                                 $id = $_GET['ID'];
                                $call= mysqli_query($connection,"SELECT * FROM generalitems where ID= '$id'");
								 while($fetch=mysqli_fetch_array($call)){
									 echo  
									 "<center >", 
									
									 "<sup class='entitytitles'></sup>"," ", "<sup>TYPE OF ITEM:</sup>
									 <u><h4>",$fetch['itemtype'],"</h4></u>",
									 " ",
									"<img class='imgenetity' src='assets/images/".$fetch['image']."' height='400px' width='370px'>",//just changed th eclass from imgenetity to iagenetity
									  " ",
									  
									 " "," ",
									   
									  "<sup class='entitytitles'> </sup>","<BR /> ","POSTED BY:","<h3>",$fetch['entity'],"</h3>",
									"<hr />
									 <div class='read'>",
								
									 "<h5>LOCATION WHERE THIS PRODUCT WAS FOUND:</h5>",
									 nl2br($fetch['body']),
									 "<br />",
									 "<hr/>",
									 "<h5>DESCRIPTION OF THE ITEM:</h5>" ,
									 nl2br($fetch['feature']),
									 
									  "<hr />",
									  "<h5>CURRENT ITEM LOCATION:</h5>",
									 nl2br($fetch['itemlocation']),
									 "
									 
									 </div>
									 </center>";
									  }
								 }
								  else {
									  echo "<a href=''>please choose an item".mysqli_error($connection);
									  
									    
									
                                       $call= mysqli_query($connection,"SELECT * from generalitems WHERE category='aproved' AND collected=1");
										while($fetch=mysqli_fetch_array($call))
										
										{
											echo "<center>",
											           "<a href='details.php?ID={$fetch['ID']}'>"
													  . $fetch['entity'],
													 " ",
														$fetch['itemtype'],
													       "<hr />",
													        "</a>",
											    "</center>";
											
										
										}
                               }
								 
								
							
								?>
								
								<!----------------------------------->
								<BR /><BR />
								<fieldset>
								<CENTER>
								 <form action=" " id="formid" method="post" enctype="multipart/form-data" class="admineditor">
								   <legend>FILL IN THE FORM TO CLAIM </legend>
                                   <div class="form-group">
										<p>YOUR NAME</p>
                                            <input type="text" class="form-control" name="claimer"  value=<?php  echo nl2br($fetch['entity']);?>>
                                        </div> 
										
										
										<div class="form-group">
										<p>YOUR CONTACTS</p>
                                            <input type="text" class="form-control" name="claimercontacts"  value=<?php  echo nl2br($fetch['year']);?>>
                                        </div>
										
										
										
                                        </div>
								       <center>
									   <input type="submit" value="CLAIM" name="upload" class="btn btn-primary">
									     <br />  <br />
									   </center>
									   
									   </fieldset>
									     <?php       
								
							
							
                                              if($_POST["upload"] AND $_GET['ID']) {
                                                     $id = $_GET['ID'];
											  {
												
											    $claims="yes";
											    $claimer=mysqli_real_escape_string($connection,$_POST["claimer"]);
											    $claimercontacts=mysqli_real_escape_string($connection,$_POST["claimercontacts"]);
												if(!empty($claimercontacts && $claimer)) //title not necessary
												{mysqli_query($connection,"
												
												                  UPDATE generalitems SET 
											                       claims='$claims',
																  claimer='$claimer',
																  claimercontacts='$claimercontacts'
																   WHERE ID='$id'
																   
																   ");
																	echo "<CENTER>CLAIM HAS BEEN MADE. YOU WILL BE NOTIFIED ON YOUR CONTACT: $claimercontacts<br />"."<a href='nrcs.php'> BACK</a></CENTER>".mysqli_error($connection)
																	;
																	    
																	}
																	else{
																		
																		echo "culdnt CLAIM".mysqli_error($connection);
																           
																		}
											                            }																	
												 
													  
													 
                                           //form processiing form

										 
											  }

											  ?>
									 
                                    </form>	
								
								
								
								
								
								<!--------------------------------------------------------------------------------------------------------------------------->

								</h5>
                            </div>
                        </div>
						
						
						<div>
						<div class="col-md-6  col-lg-4 col-xs-12">
                                <h5>	
								<BR /><BR />
										
									<?php include("itemcomments.php");?>	
                                    	
								 
								</h5>
                            </div>
                        </div>
						
						
						
						
						
                    </div>
                </div>
            </div>
        </section>
			<?php include("footer.php");?>