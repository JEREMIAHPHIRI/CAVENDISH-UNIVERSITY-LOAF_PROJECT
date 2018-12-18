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
									 $idnum=$fetch['ID'];
									  $idnum."<br />" ;
									  
									 echo  
									 "<center >", 
									
									 "<sup class='entitytitles'></sup>"," ", "<u> <h3>",$fetch['itemtype'],"</h3></u> <br />",
									 " ",
									  "<sup class='entitytitles'> </sup>"," ","<u><h4>",$fetch['entity'],"</h4></u>",
									"<img class='imgenetity' src='assets/images/".$fetch['image']."' height='400px' width='370px'>",//just changed th eclass from imgenetity to iagenetity
									  " ",
									  
									 " "," ",
									"<hr />
									 <div class='read'>",
									  " ",
									 
									 "<br>",
									 nl2br($fetch['body']),
									 "
									 
									 </div>
									 </center>"
									 
									 ;
									  }
								 }
								  
								  
								  
								  else {
									  echo "<a href=''>please choose an item ".mysqli_error($connection);
									  
									    
									
                                       $call= mysqli_query($connection,"SELECT * from generalitems WHERE category='aproved'");
										while($fetch=mysqli_fetch_array($call))
										
										{
											echo "<center>",
											           "<a href='lyric.php?ID={$fetch['ID']}'>"
													  . $fetch['entity'],
													  " ",
													    $fetch['itemtype'],
														  "<hr />",
													        "</a>",
											    "</center>";
											
										
										}
                               }
								 
								
							
								?>

								</h5>
                            </div>
                        </div>
						
						
						<div class="col-md-6  col-lg-4 col-xs-12">
                            <h5>	<?php
							  
											include("offers.php");		   
											include("itemcomments.php");
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
			<?php include("footer.php");?>