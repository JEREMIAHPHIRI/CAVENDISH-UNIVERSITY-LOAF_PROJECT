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
                                <h5 class='trending'>REGISTERED USERS </h5>
                           
                  </div> 
				  
				  </div>       
								
								
                                    </div>
                                </div>

							
                          <?php  
                                 
                        $statement= "SELECT * FROM admin WHERE id=34";
						        $statementexecute=mysqli_query($connection , $statement);
								   if($statementexecute)
								   {
									printf("connected");   
									   
									   
								   };
								 
								  $choose='SELECT * FROM contributeadmin';
									    $chooseexecute=mysqli_query($connection,$choose);
                                          while($fetch=mysqli_fetch_array($chooseexecute))
										  {

										?>
										
								       <div class="col-md-3 col-sm-4 col-xs-12 ">
								     <figcaption class="">
									 <div class="text-center proverbs">
									   
									  
            								<?php $user=$fetch['username'];?>
											 <?php echo "<h4>", nl2br($fetch['username']),"</h4><br />" ;?>	
									 		 <?php echo "<img src='assets/images/".$fetch['imagename']."' alt='$user' height='195px' width='200px'>" ?> 
											 
											<?php echo "<br />",$fetch['Bio'],"<br />",$fetch['address'],"<br />" ;?>				
											    <?php echo "<br />" ;?>  
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
								  <center><a href="signup.php" class="btn btn-primary">SIGNUP </a></center>
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
			      content on this website is/are/maybe subject to copyrights.
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
