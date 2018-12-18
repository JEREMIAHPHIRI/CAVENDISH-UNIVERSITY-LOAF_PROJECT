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
                                <h3><u><center>collections</center></u></h3>
                                <h5> <div class="single_widget_form text-left">
								
								<?PHP 
								//FETCHING DAT FOR APPROVAL
							   $command="SELECT * FROM generalitems WHERE collected=0 ";
							   $execute=mysqli_query($connection,$command);
							     // if($execute){echo "successful";} else{echo "coldnt succeed".mysqli_error($connection);}   for TESTING PURPOSES ONLY
							    $check=mysqli_num_rows($execute);
								 if($check==0){
									ECHO "NO APPROVALS LIST CURRENTLY PLEASE CHECK IN AGAIN LATER";}
								
								while($fetch=mysqli_fetch_array($execute))
								{   $id=$fetch['ID'];
								   echo "<hr class='ruleradmin'>",
								                        "<center>",
														
														"<strong> <H2>",
											           "<a href='collectt.php?ID={$fetch['ID']}'>"
													  . $fetch['itemtype'],
													  " ","</H2> ",
													 
													  "</strong>",
													   "<h4>",
													  	" ENTITY:<br />",
													    $fetch['entity'],
														"<br />CLAIMER NAMES: <br /> ",
														  $fetch['claimer'],
														  "<br />CONTACT:<br />",
														    $fetch['claimercontacts'],
														  	"<br />",
													
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
		
			