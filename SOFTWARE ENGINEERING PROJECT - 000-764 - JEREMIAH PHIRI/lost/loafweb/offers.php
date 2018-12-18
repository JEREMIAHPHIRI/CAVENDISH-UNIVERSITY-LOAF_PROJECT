
                           <center>                           
						   <div class="single_abouts_text">
							<h3><U title="sponsored">OFFERS</U></h3>
							  <h3>


							  <?php
							  if (isset($_GET['ID'])) {
                                    $id=$_GET['ID'];
                                       
								      $selectadforname="select advertentity from advert";
                                      $selectadfornamequery=mysqli_query($connection,$selectadforname);
									       while($fetch=mysqli_fetch_array($selectadfornamequery))
										   { $_name=$fetch['advertentity'];
									         $_name;
											 
											 
  								 $selectsong="select * from generalitems where ID=$id AND entity='$_name'";
								      $selectsongquery=mysqli_query($connection,$selectsong);
									       while($fetch=mysqli_fetch_array($selectsongquery)){
										     $fetch['ID'];
											 
										   
								$selectad="select * from advert where status='on' AND advertentity='$_name'";
								      $selectadquery=mysqli_query($connection,$selectad);
									       while($fetch=mysqli_fetch_array($selectadquery)){
										 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                                                 $text =$fetch['message'];
						if(preg_match($reg_exUrl, $text, $url))
							{	 echo "<h3>", nl2br( preg_replace($reg_exUrl, '<a href="'.$url[0].'" rel="nofollow">'.$url[0].'</a>',
							   $text));
							   echo   "</h3>";
  
							           echo  "<center><sup> <h3>",
										"</sup> </h3>",
										"<img src='assets/images/".$fetch['imagename']."' height=200px/>",
										" ",
										"<BR />",												  " " ,
										 $fetch['entity'],
										"</sup> </h3>",
									    " ",
										" <hr class='formid'>";
										} 
							
							else 
							 {
							    echo 
							    "<center><sup class='adsection'> <h3>",
								$text,
								"</sup> <BR /> </h3>",
							   "<img src='assets/images/".$fetch['imagename']."' height=200px/>",
								" ",
								"<h6>",
								" ",
								$fetch['entity'],
								"</h6>",
								 " ",
                                " <hr />";
								   }
										   
										  }
										   
									 }
								  }
							   }
								
						
									?>	   
										   
											  