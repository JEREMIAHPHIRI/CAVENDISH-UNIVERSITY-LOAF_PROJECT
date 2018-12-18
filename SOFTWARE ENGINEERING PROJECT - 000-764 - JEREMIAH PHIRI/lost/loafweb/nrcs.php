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
                                <h5 class='trending'>LOST National Registration Cards(NRC) </h5>
                           
                  </div> 
				  
				  </div>       
								
								
                                    </div>
                                </div>

							
                          <?php  
                                      $choose='SELECT * FROM generalitems WHERE CATEGORY="aproved" AND itemtype="NRC"';
									    $chooseexecute=mysqli_query($connection,$choose);
										  // if($chooseexecute){ echo "done";} else{echo "dint query".mysqli_error($connection);}
                                          while($fetch=mysqli_fetch_array($chooseexecute))
										  {
                                           ?>
										   
									 <div class="col-md-3 col-sm-4 col-xs-12 ">
								     <figcaption class="">
									 <div class="text-center proverbs">
									 
									  
            								 
											 <?php echo "<h4>","<h4>WHERE THIS IS NRC WAS FOUND:</h4>", nl2br($fetch['body']),"</h4><br /><HR />" ;?>	
											  <?php echo "<h4>","<h4>WHERE YOUR NRC IS CURRENTLY LOCATED:</h4>", nl2br($fetch['itemlocation']),"</h4><br /><HR />" ;?>	
									 		 <?php echo "<img src='assets/images/".$fetch['image']."' height='300px' width='300px'>" ?> 
											 <?php echo " ","THIS NRC WAS REPORTED BY :", $fetch['entity'],"<br />" ;?>	
                                             <?php $idnum=$fetch['ID'];?>	
											 
											 <?php $idnum."<br />" ; echo "<a href='claims.php?ID={$fetch['ID']}'>",
													  "CLICK HERE TO CLAIM<hr />"," ",
													    $fetch['itemtype'],
														
														"</a>";?> 
														
									</figcaption>
							
							 <?php echo "<br />" ;?>  
									 
                                </div>

								<?php
										  }//do not close this
								?>
							 </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		 <div class="card-footer">
								<hr />
								  <center><a href="reportupload.php" class="btn btn-primary">REPORT </a></center>
								  <hr />
								</div>
	<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
		

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                   
                      <div class="single_abouts_text">
					  
                               
		<div class="col-lg-12 col-md-4">					   	
        <h3>DISCLAIMER</h3>
              <p class="card-text">
               <ul>			  
			      Images on this web page maybe subject to copyrights.
				 </ul>
         
          </div>
      </div>
		
		

                             
                         
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
