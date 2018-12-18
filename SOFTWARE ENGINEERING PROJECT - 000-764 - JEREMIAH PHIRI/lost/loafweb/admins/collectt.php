<?php   
session_start();

	    if(isset($_SESSION['phoneNumber'])){
			$admincontact=$_SESSION['phoneNumber'];
	  /*echo "<br/>it is set";*/ }
	  else{  die ("<a href='adminbar.php'><h1>PLEASE LOGIN</h1></a>"); }
include("head.php");
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
									"<BR />",
									
									 " ",
									"<img class='imgenetity' src='../assets/images/".$fetch['image']."' height='400px' width='370px'>",//just changed th eclass from imgenetity to iagenetity
									  " ",
								   
									"<hr />
									 <div class='read'>", 
									 "<sup class='entitytitles'>POSTED BY: </sup>","<u>",""," ",$fetch['entity'],"</u>",
									   
									  "<BR />",
									 "<sup class='entitytitles'>ITEM TYPE:</sup>"," ", "<u>",$fetch['itemtype'],"</u>",
									  "<br>",
									  "<hr />",
									 "<h5>LOCATION WHERE THIS PRODUCT WAS FOUND:</h5>",
									 nl2br($fetch['body']),
									 "<br />",
									 "<hr/>",
									 "<h5>DESCRIPTION OF THE ITEM:</h5>" ,
									 nl2br($fetch['feature']),
									 
									 "<br />", "<hr />",
									  "<h5>ITEM LOCATION:</h5>",
									 nl2br($fetch['itemlocation']),
									 "
									 
									 
									 </div>
									 </center>";
									  }
								 }
								  else {
									  echo "<a href=''>please choose an item".mysqli_error($connection);
									  
									    
									
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
							
								
                                       <center> 
									     
									     <?php
                                             if (isset($_GET['ID'])){
												    $id = $_GET['ID'];
												     echo  $call1= mysqli_query($connection,"SELECT entity FROM mainadmin where ID='$id' "); 
											         while($fetch=mysqli_fetch_array($call1)){echo $fetch['entity']; }
											 
											 }
									      
										 ?>
									   
                                             <input type="submit" value="GIVE OUT" name="upload" class="btn btn-primary">
									   </center>
								
								
									     <?php 
                                               {
												  ///////////////////////////////ACTION EVENT/  FETCH THE THE MAIN ADMINS DETAILS/////////////////////////////////////////////////
												  
										   $call= mysqli_query($connection,"SELECT * FROM mainadmin where phoneNumber='$admincontact'");
											 while($fetch=mysqli_fetch_array($call))
											    { 
												  $giver=$fetch['username'];
												  $givercontacts=$fetch['phoneNumber'];
												  
												 } /////////////////////////////////////////////////////////////////////////////////										 
                                                       if($_POST["upload"] AND $_GET['ID']) {
                                                     $id = $_GET['ID'];
											
											           $collected=1;
											   
												if(!empty($givercontacts && $giver)) //title not necessary
												{mysqli_query($connection,"
												
												                  UPDATE generalitems SET 
											                       collected='$collected',
																  giver='$giver',
																  givercontacts='$givercontacts'
																   WHERE ID='$id'
																   
																   ");
																	echo "<CENTER><h2>Hi mr.$giver you can give out the item now<br /></h2>"."<a href='collectionlist.php'> BACK</a></CENTER>".mysqli_error($connection)
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
										
									<?php// include("itemcomments.php");?>	
                                    	
								 
								</h5>
                            </div>
                        </div>
						
						
						
						
						
                    </div>
                </div>
            </div>
        </section>
			<?php include("footer.php");?>