<?php
include("head.php");
?>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
<?php include("header.php");?>   
  
	   
        <section id="portfolio" class="portfolio">
          <div class="container">
                     
                        <div class="col-lg-12 col-md-8 col-xs-12 ">
                        <div class="head_title text-center">
                                 <br />  
                                <h5 class='trending'>UNCLAIMED BODIES</h5>
                           
                  </div> 
				  
				  </div>       
								
								
                                    </div>
                                </div>

							
                          <?php  
                                      $choose='SELECT * FROM generalitems WHERE CATEGORY="aproved" AND itemtype="unclaimedBody"';
									    $chooseexecute=mysqli_query($connection,$choose);
										  // if($chooseexecute){ echo "done";} else{echo "dint query".mysqli_error($connection);}
                                          while($fetch=mysqli_fetch_array($chooseexecute))
										  {
                                           ?>
										   
									 <div class="col-md-3 col-sm-4 col-xs-12 ">
								     <figcaption class="">
									 <div class="text-center proverbs">
									 
									  
            								 <?php echo " <u>"," " ,$fetch['album'],"</u>","<br />" ;?>
											 <?php echo "<h4>","WHERE THIS CORPSE/MISSING PERSON WAS FOUND:"," ","<BR />", nl2br($fetch['body']),"</h4><br />" ;?>	
											 <?php echo "<h4>","THIS CORPSE/MISSING CURRENT LOCATION:"," ","<BR />", nl2br($fetch['itemlocation']),"</h4><br />" ;?>	
									 		 <?php echo "<img src='assets/images/".$fetch['image']."' height='300px' width='300px'>" ?> 
											 				
											    <?php echo "<br />" ;?>  
												
												
												
												
												
												   <?php $idnum=$fetch['ID'];?>	
												 <?php $idnum."<br />" ; echo "<a href='claims.php?ID={$fetch['ID']}'>",
													  "CLICK HERE TO CLAIM<hr />"," ",
													   "UNCLAIMED BODY ",
														 " CURRENTLY AT:",
														$fetch['body'],
														"</a>";?>
												
									 </figcaption>
							
							 <?php echo "<br />" ;?>  
									 
                                </div>

								<?php
										  }
								?>
							 </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		 <div class="card-footer">
								<hr />
								  <center><a href="reportuploadbodies.php" class="btn btn-primary">REPORT </a></center>
								  <hr />
								</div>
	<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
		

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                   
          
		
		

                             
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
	
                           
  

       <?php
	   include("footer.php")
	   ?>
    </body>
</html>
