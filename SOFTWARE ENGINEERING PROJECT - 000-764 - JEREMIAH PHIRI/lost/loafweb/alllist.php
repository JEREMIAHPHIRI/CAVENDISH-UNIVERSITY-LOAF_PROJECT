<?php include("head.php");
      include ("header.php");
	  
?>

<section id="abouts" class="abouts">
            <div class="container">
               
                        
                            <div class="single_abouts_text text-left">
                                
                          		
                            </div>
                        </div> 
<br><br><br><br><br><br><br>
                        <div class="col-md-8  col-lg-8 col-xs-12">
                            <div class="single_abouts_text">
                                   <H5> <B><STRONG><CENTER><U>ITEM LISTING</U></CENTER></STRONG></B><a href=" " target="_blank"> 
										</a>
										<center> </center>
										</H5>
						
                                    </div>

                                    <ul>
									<?php 
									
                                       $call= mysqli_query($connection,"SELECT * from generalitems WHERE category='aproved' AND itemtype!='NRC' AND itemtype!='unclaimedBody' AND collected=0");
										while($fetch=mysqli_fetch_array($call))
										
										{
											echo "<center>",
											"posted By:",
											           "<a href='details.php?ID={$fetch['ID']}'>" 
													  . $fetch['entity'],
													  " ","<br />",
													  " type of an Item:", " ",
													    $fetch['itemtype'],
														 "<br />"," ","THIS ITEM WAS FOUND IN: "," ",
														$fetch['body'],
													       "<hr />",
													        "</a>",
											    "</center>";
											
										
										}

									?>
                                    </ul>

								</h5>
                            </div>
                        </div>
						
						
						<div class="col-md-6  col-lg-4 col-xs-12">
                            <h5>	<?php
							  
										include("footer.php");		   
											//include("footer.php");
												    if(isset($_POST['commentform']))
											{ $comment=mysqli_real_escape_string($connection,$_POST['comment']);
 												   $emailornumber=mysqli_real_escape_string($connection,$_POST['emailornumber']);
												    	
													if(!empty($comment && $emailornumber))
													{
														$commentcommand="UPDATE generalitems SET commenter='$emailornumber', comments='$comment' WHERE ID=$id";
													   $commandquery=mysqli_query($connection,$commentcommand);
													     if($commandquery)
														 {
															 
															  echo "commented";
														 } else{echo "not commented".mysqli_error($connection);}
														 
													
												}
														else{echo " not sent!".mysqli_error($connection);}
														
													}														
												
										?>
										
										
                                    </form>	
								 
								</h5>
                            </div>
                        </div>
						
					<?php

					?>	
						
						
						
                    </div>
                </div>
            </div>
        </section>
		