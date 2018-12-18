<center>
<?php   
session_start();

	    if(isset($_SESSION['phoneNumber'])){
	  /*echo "<br/>it is set";*/ }
	  else{  die ("<a href='adminbar.php'><h1>PLEASE LOGIN</h1></a>"); }
include("head.php");
include ("header.php");
?>
<div id="contribute">

 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-12 col-lg-12 col-xs-12">
                          <div class="col-md-12   col-lg-12">
                            <div class="single_widget ">
                                <h3><u><center>APPROVAL PANEL</center></u></h3>
                                <h5> <div class="single_widget_form text-left">
								
								<?PHP 
								
								//FETCHING DAT FOR APPROVAL
							   $command="SELECT * FROM generalitems WHERE category='unaproved'";
							   $execute=mysqli_query($connection,$command);
							     // if($execute){echo "successful";} else{echo "coldnt succeed".mysqli_error($connection);}   for TESTING PURPOSES ONLY
							    $check=mysqli_num_rows($execute);
								 if($check==0){
									ECHO "NO APPROVALS LIST CURRENTLY PELASE CHECK IN AGAIN LATER";}
								 
								 
								 
								
							 
								while($fetch=mysqli_fetch_array($execute))
								{  ECHO $id=$fetch['ID'];
								   echo "<hr class='ruleradmin'>",
								                        "<center>",
														
														"<strong> <H2>",
											           "<a href='control.php?ID={$fetch['ID']}'>"
													  . $fetch['itemtype'],
													  " ","</H2> ",
													 
													  "</strong>",
													  
													  
													    $fetch['entity'],
													
														 " ",
														$fetch['body'],
													        "</a>",
															"<br />";
													      
									
								
								}
							   
								
								?>
                                   
                                </div>
                            </div>
                        </div>			
								
							
								
<img src="assets/images/footerbg.jpg" alt="artist photo"  />





<hr />

<hr />
								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
			
                    </div>
                </div>  
				</section>
				</div>
            
      
	  <?php 
	 
	  
	  include("footer.php");?>
		
			