<?php
include("head.php");
?>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
<?php include("header.php");?>   
  
	 <!-- End Header Section -->

        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    
                        <div class="main_slider text-center">
                            <div class="col-md-12 col-sm-8 col-xs-11">
		                  
							
                            </div>	
                        </div>

                    </div>
                    
                </div>
            </div>
        </section>
		<?php error_reporting(0)?>
		<!-----------------------------------------------------------------------------------------------------------------------------------------
		<section id="portfolio" class="portfolio">
            <div class="container">
                        <div class="col-lg-12 ">
                            <div class="head_title text-center">
                             
		------------------------>
        <section id="abouts" class="abouts">
          <div class="container">
                     
                        <div class="col-lg-12 col-md-8 col-xs-12 ">
                                                       
														 <div class="head_title text-center">
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
							 
							  <form action="index.php"  method="post" class="slider_search">
							      <center>
                                        <div class="form-group">
										
										<textarea type="text" class="form-control bar"    name="searchinput" 	required=" "  col="12"     <?php $searchvalue=$_POST["searchinput"];?>  
											
										          <?php if ($searchvalue){echo $searchvalue;}?>> </textarea>
										
                                      
									    </div>
									     <input type="submit" name="search" value="SEARCH LOST ITEM" class="btn btn-primary">
									       <H6>YOUR LOST AND FOUND ZAMBIAN LIBRARY</H6>
                                    </center>
									<?php
									
									  if(isset($_POST['search']))
									  {
										
										$searchvalue=mysqli_real_escape_string($connection, $_POST['searchinput']);
										
										 $select= "SELECT * FROM generalitems WHERE(
(body LIKE '%$searchvalue%') OR 
(body LIKE '$searchvalue%') OR
(body LIKE '%$searchvalue') OR
(entity LIKE '%$searchvalue%') OR
(itemtype LIKE '%$searchvalue%') 
)";
										
										
										
										
										
										
										
										  $query=mysqli_query($connection,$select);
										    if($query){
												
												
										       echo "showing results for: <font color='green' size='5px'>$searchvalue</u></font> <hr />" ;
										        
										        
											
										      while($fetch=mysqli_fetch_array($query))
											   { 
										          if($fetch['category']=="aproved")
												  {
												  echo 
												  " ",												  
												 "<a href='details.php?ID={$fetch['ID']}'>"
												 
												 . $fetch['entity'],
												  ' ', 
												  $fetch['itemtype'],
												    " ",
												  $fetch['title'],
												    " ",
												  nl2br($fetch['feature']),
												  " ",
												   ($fetch['year']),
												  " ",
												   nl2br($fetch['feature']),
												
												 

												 "</a>",
												   nl2br($fetch['itemtype'])," <hr /> ";
												  }
			
                                       		   
											   }
										       
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   
										   $searchvaluewords=$_POST['searchinput'];
										 $selectwords= "SELECT * FROM generalitems where itemtype='NRC' AND
										 (
( itemtype LIKE '%$searchvalue%') OR
(itemtype LIKE '$searchvalue%') OR
(itemtype LIKE '%$searchvalue') OR
(itemtype LIKE '%$searchvalue%')
)";
										 
										 
										 
										 
										 
										  $querywords=mysqli_query($connection,$selectwords);
										      while($fetch=mysqli_fetch_array($querywords))
											   {
												  echo
												 
												 
												 "<a href='speeches.php?ID={$fetch['ID']}'>",
												 " ",
												  $fetch['entity'],
												   " ",
												  nl2br($fetch['feature']),
												  " ",
												  nl2br($fetch['genre']),
												  "</a>",
												  
												 ($fetch['year']),
												  " ",
												  "(",
												 $fetch['category'],
												 ")",
												  "<hr /> ";
				//--------------------------------------------------------------everutyhing else is -------------------------------------------------------------------------
                                       		   
											   }
											   
											   
										 $searchvaluewords=$_POST['searchinput'];
										 $selectwords= "SELECT * FROM poetry where
										 (
(body LIKE '%$searchvalue%') OR
(body LIKE '$searchvalue%') OR
(body LIKE '%$searchvalue') OR
(entity LIKE '%$searchvalue%')
 
)"; 
										  $querywords=mysqli_query($connection,$selectwords);
										      while($fetch=mysqli_fetch_array($querywords))
											   {
												  echo
												 
												 
												 "<a href='poetrydisplay.php?ID={$fetch['ID']}'>",
												 " ",
												  $fetch['entity'],
												   " ",
												  nl2br($fetch['feature']),
												  " ",
												  nl2br($fetch['genre']),
												  "</a>",
												  
												 ($fetch['year']),
												  " ",
												  "(",
												 "poetry",
												 ")",
												  "<hr /> ";
				//--------------------------------------------------------------everutyhing else is -------------------------------------------------------------------------
                                       		   
											   }
										   
										   
										   
										   
										   
										    $searchvaluewords=$_POST['searchinput'];
										 $selectwords= "SELECT * FROM words where category='proverb' AND
										 (
(words LIKE '%$searchvalue%') OR
(words LIKE '$searchvalue%') OR
(words LIKE '%$searchvalue') OR
(entity LIKE '%$searchvalue%')
 
)"; 
										  $querywords=mysqli_query($connection,$selectwords);
										      while($fetch=mysqli_fetch_array($querywords))
											   {
												  echo
												 
												 
												 "<a href='proverbs.php?ID={$fetch['ID']}'>",
												 " ",
												  $fetch['entity'],
												   " ",
												  nl2br($fetch['feature']),
												  " ",
												  nl2br($fetch['genre']),
												  "</a>",
												  
												 ($fetch['year']),
												  " ",
												  "(",
												 "proverb",
												 ")",
												  "<hr /> ";
				
                                       		   
											   } 
										   
										   
										   
										   }
										    else{echo "$searchvalue ?...WE COULDNT FIND IT.<BR> WOULD YOU LOVE US TO FIND FOR YOU FROM OTHER SOURCES?".mysqli_error($connection);}
									//--------------------------------------------------------------everutyhing else is -------------------------------------------------------------------------			  
									 
                                                 										   
										     
										 
										  
										  
										  
										  
									
										}
										// search ends here
									  
										  
										
										  
										  
									  
									  else{ echo " ";}
									
									
									
									?>
									
									</form>	

								
								
								
                            </div>
                        </div>
                    </div>
                </div>
            
        </section>
	<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
		

        <section id="abouts" class="abouts">
            <div class="container">
                <div class="row">
                   
                      <div class="single_abouts_text">
					  
                               
		<div class="col-lg-12 col-md-4">					   	
        <h3>DISCLAIMER</h3>
              <p class="card-text">
               <ul>			  
			      content on this website is POSTED WITH the AS-IS CYBER-LAW OF ZAMBIA.
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
