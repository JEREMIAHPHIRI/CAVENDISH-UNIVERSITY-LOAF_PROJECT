<?php
session_start();
session_destroy();
include("head.php");
?>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
<?php include("header2.php");?>   
  
	 <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
		
							
                            </div>	
                        </div>

                    </div>
                </div>
            </div>
        </section>
		
		<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio_content text-center">
                        <div class="col-lg-12">
                            <div class="head_title text-center">
                             
							                               
							  <form action="index.php"  method="post" class="slider_search">
							      <center>
                                        <div class="form-group">
                                            <input type="text" class="form-control bar" name="searchinput" placeholder="SEARCH USERNAME" required="">
										    
                                     
									   </div>
									     <input type="submit" name="search" value="SEARCH" class="btn btn-primary">
										     <p>
											    <hr />
											        WELCOME TO ADMINISTRATION PLEASE LOGIN TO CONTINUE OR SEARCH YOUR USERNAME TO CHECK IF YOU HAVE BEEN ADDED AS ADMIN BY INVITATION.
												<hr />	
											      <br />
												 <a href="adminbar.php"><h2 class="ruleradmin">LOG IN</h2></a>
												 <br />
												   <a href="../index.php"><h2 class="ruleradmin">BACK</h2></a>
												
												 
												 </p>  
											 <br />
											
                                    </center>
									<?php
									
									  if(isset($_POST['search']))
									  {
										 $searchvalue=$_POST['searchinput'];
										 $select= "SELECT * FROM contributeadmin where username LIKE '%$searchvalue%'";
										  $query=mysqli_query($connection,$select);
										    if($query){echo "showing results for $searchvalue <hr />" ;
										      while($fetch=mysqli_fetch_array($query))
											   {
												  echo
												  $fetch['title'],
												  '<br /> ',
												  $fetch['entity'],
												  
												   "<hr /> ";
			
                                       		   
											   }
										       
										   
										   
										   
										   
										   }
										    else{echo "$searchvalue ?...WE COULDNT FIND SUCH DETAILS IN THE DATABASE.<BR>".mysqli_error($connection);}
									//--------------------------------------------------------------everutyhing else is -------------------------------------------------------------------------			  
									 		  
										     
										  
									
										}
									  
										  
										
									 else{ echo "NB: blank Page means no Record Found";}
									
									
								
									?>
									
									</form>	
									</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
		

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                      <div class="single_abouts_text">
	 
		  
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
