<?php include("head.php");
      include ("header.php");
	  
?>


 <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                    <div class="abouts_content">
                        <div class="col-md-12 col-lg-8 col-lg-pull-0 col-xs-12">
                            <div class="single_abouts_text text-left">
                             <!----------------for sponser-  <img src="assets/images/footerbg.jpg" alt="artist photo"  /> -------------> 

                            </div>
                        </div>

                        <div class="col-md-8  col-lg-8 col-xs-12">
                            <div class="single_abouts_text">
                         	
                                <h5>
								<?php
								 if(isset($_GET["ID"])){							
								 $id=$_GET["ID"];
								   $command="SELECT * FROM words WHERE ID=$id ";
								    $commandquery=mysqli_query($connection,$command);
								     while($fetch=mysqli_fetch_array($commandquery)){
										 
										 echo "<br /> <br /><center>",
										 "<sup>speech by</sup>"," ","<u>",$fetch['entity'],"</u>","<img src='assets/images/".$fetch['image']."' height='90px' class='imgborder'>"
										 ,"<sup>title</sup>"," " ,"<u>",$fetch['title'],"</u><hr /></center>",
										 nl2br($fetch['words']),
										 
										 " ",
										"<h6> <font color='red'>", $fetch['details'],"</font></h6>";
										
										 
									 }
								 }else {
									   echo "<br /> <br /> <br /> <font color='green'><h5> COLLECTED items</h5></font>";
						$command=mysqli_query($connection,"SELECT * FROM generalitems WHERE collected=1");
						   while($fetch=mysqli_fetch_array($command)){
							    echo 
								"<h6><ol><li><br /><a href='detailscollected.php?ID={$fetch['ID']}'>".$fetch['itemtype']," ",$fetch['entity'],"</a></li></ol><hr /> </h6>";
							
						   }
						 	  } 
								?>








<HR CLASS="ruleradmin">
- Listed items are listed with concern from the item owners at point of collection of the item. this is also serves to show proof of concept


<hr />

<hr />
								</h5>
                            </div>
                        </div>
						
						
						
						
						
						
						
						<div class="col-md-6  col-lg-4 col-xs-12">
                            <div class="single_abouts_text">
							<h5><U><BR /><BR /><center>UNCOLLECTED ITEMS</center></U></h5>
                               
                           
								
                                <h5>
						<?php
						$command=mysqli_query($connection,"SELECT * FROM generalitems where category='aproved'");
						   while($fetch=mysqli_fetch_array($command)){
							    echo 
								"<h6><ol><li><br /><center>
								<a href='details.php?ID={$fetch['ID']}'>".$fetch['itemtype'],"</a></li></ol><hr /> 
								</center>
								</h6>";
								
							   
							   
							   
						   }
						 
						
						
						?>
								</h5>
                            </div>
                        </div>
				
                    </div>
                </div>
            </div>
        </section>
			<?php include("footer.php");?>