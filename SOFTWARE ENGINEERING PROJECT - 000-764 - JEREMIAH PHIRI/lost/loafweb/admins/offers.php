<?php   
session_start();

	  if(isset($_SESSION['phoneNumber'])){
	 // echo "<br/>it is set";
	 include("head.php");
include ("header.php");
	  }
	  else{  die ("<a href='adminbar.php'><center><h3><hr><br><br>PLEASE LOGIN</h3></center></a>"); }

?>
<div id="contribute">

 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-12 col-lg-12 col-xs-12">
                          <div class="col-md-12   col-lg-12">
                            <div class="single_widget ">
                                <h3><u><center>EDITORIAL ADVERTS PANEL</center></u></h3>
                                <h5> <div class="single_widget_form text-left">
								
								<?PHP 
								
								//FETCHING DAT FOR APPROVAL
							   $command="SELECT * FROM advert WHERE status='off'";
							   $execute=mysqli_query($connection,$command);
							    $check=mysqli_num_rows($execute);
								 if($check==0){
									ECHO "NO ADVERTS APPROVALS LIST CURRENTLY PELASE CHECK IN AGAIN LATER";}
								 
								 
								 
								
							 
								while($fetch=mysqli_fetch_array($execute))
								{  ECHO $id=$fetch['ID'];
								   echo "<hr class='ruleradmin'>",
											           "<a href='advertsapprovals.php?ID={$fetch['ID']}'>"
													  . $fetch['entity'],
													  " ",
													    $fetch['title'],
														 " ",
														$fetch['message'],
														" ",
														$fetch['companydetails'],
													        "</a>",
															"<hr />";
													      
									
								
								}
							   
								
								?>
                                   
                                </div>
                            </div>
                        </div>			
								
							
								
<img src="assets/images/footerbg.jpg" alt="artist photo"  />



<hr />
-----------------------------------------------------------------------------------------------------------------

<hr />
								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
						<div class="col-md-6  col-lg-4 col-xs-12">
                            <div class="single_abouts_text">
							<h5><U></U></h5>
                               
                           
								
                                <h5>
								
								</h5>
                            </div>
                        </div>
			
                    </div>
                </div>  
				</section>
				</div>
            
      
	  <?php 
	 
	  
	  include("footer.php");?>
		
			