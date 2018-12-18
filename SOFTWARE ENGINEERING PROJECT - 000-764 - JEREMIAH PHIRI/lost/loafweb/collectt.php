<?php include("head.php");
      include ("header.php");
	  
?>
<BR><br><br><br><br><br>
<section id="abouts" class="abouts">
            <div class="container">
               
                        
                            <div class="single_abouts_text text-left">
                                
                          		
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
									
									 "<sup class='entitytitles'></sup>"," ", "<u>",$fetch['itemtype'],"</u>",
									 " ",
									"<img class='imgenetity' src='assets/images/".$fetch['image']."' height='400px' width='370px'>",//just changed th eclass from imgenetity to iagenetity
									  " ",
									  
									 " "," ",
									   
									  "<sup class='entitytitles'> </sup>"," ","<u>",$fetch['entity'],"</u>",
									"<hr />
									 <div class='read'>",
									 "<br>",
									 nl2br($fetch['body']),
									  "
									 </div>
									 </center>";
									  }
								 }
								  else {
									  echo "<a href=''>please choose an item to view".mysqli_error($connection);
									  
									    
									
                                       $call= mysqli_query($connection,"SELECT * from generalitems WHERE category='aproved'");
										while($fetch=mysqli_fetch_array($call))
										
										{
											echo "<center>",
											           "<a href='lyric.php?ID={$fetch['ID']}'>"
													  . $fetch['entity'],
													  " ",
													    $fetch['title'],
														 " ",
														$fetch['genre'],
													       "<hr />",
													        "</a>",
											    "</center>";
											
										
										}
                               }
								 
								
							
								?>
								
								<!----------------------------------->
								 <form action=" " id="formid" method="post" enctype="multipart/form-data" class="admineditor">
								
                                   <div class="form-group">
										<p>YOUR NAME</p>
                                            <input type="text" class="form-control" name="claimer"  value=<?php  echo nl2br($fetch['entity']);?>>
                                        </div> 
										
										
										<div class="form-group">
										<p>YOUR CONTACTS</p>
                                            <input type="text" class="form-control" name="claimercontacts"  value=<?php  echo nl2br($fetch['year']);?>>
                                        </div>
										
										
										
                                        </div>
								
                                       <center> <input type="submit" value="CLAIM POST" name="upload" class="btn btn-primary"></center>
									   
									     <?php       
								
							
							
                                              if($_POST["upload"] AND $_GET['ID']) {
                                                     $id = $_GET['ID'];
											  {
												
											    $collected=1;
											    $giver=mysqli_real_escape_string($connection,$_POST["claimer"]);
											    $givercontacts=mysqli_real_escape_string($connection,$_POST["claimercontacts"]);
												if(!empty($givercontacts && $giver)) //title not necessary
												{mysqli_query($connection,"
												
												                  UPDATE generalitems SET 
											                       collected='$collected',
																  giver='$giver',
																  givercontacts='$givercontacts'
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