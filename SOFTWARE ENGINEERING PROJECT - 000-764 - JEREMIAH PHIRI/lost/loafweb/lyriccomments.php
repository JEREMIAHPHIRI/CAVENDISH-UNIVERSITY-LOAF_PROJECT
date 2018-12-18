
                           <center>                           
						   <div class="single_abouts_text comments">
							<h6><U title="you dont have to login">OPEN COMMENTS<br /><sub>(you dont have to log in to comment)</sub></U></h6>
							  <H6>
                              <form action="" id="formid" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="comment" placeholder="comment" required="">
                                       </div>
								     <input type="submit" value="comment" name="submitcomment" class="btn btn-primary">
								</form>

							  <?php
							  
							   if (isset($_GET['ID'])) {
                                    $id=$_GET['ID'];
                                       
								      $selectforcomments="select * from generalitems WHERE ID=$id";
									  
                                      $selectforcommentsquery=mysqli_query($connection,$selectforcomments);
									       while($fetch=mysqli_fetch_array($selectforcommentsquery))
										   { $_id=$fetch['ID'];
									        $_body=$fetch['body'];
											$_title=$fetch['itemtype'];
											$_entity=$fetch['entity'];
											$_id;
											mysqli_real_escape_string($connection,$_body);
											$_entity;
										    $_title;
											
											  if(isset($_POST['submitcomment']))
											  {
												  
											$comment=mysqli_real_escape_string($connection,$_POST["comment"]);
											   if(empty($comment)){echo "seems like an empty comment";}
											   else{
											//here am gonna check if the comment about to be weneterd is alreasdy inserted and it looks the same
											   $selectionforcheck="select * FROM comments where ID=$_id AND comment='$comment'";
												  $selectionforcheckquery=mysqli_query($connection,$selectionforcheck);
												     $actualcheck=mysqli_num_rows($selectionforcheckquery);
													    if($actualcheck==0){
											$insert="INSERT INTO comments(ID,title,entity,comment) VALUES('$_id','$_title', '$_entity','$comment')";
											     $insertquery=mysqli_query($connection , $insert);
												  if($insertquery){echo '<br>';} else{echo 'DIDNT COMMENT<br/>'.mysqli_error($connection);}
											     
												
														
														
														} else{echo "it seems like you rloaded your page <br />
														or you are about to comment the same thing twice <br />";}
                                                     
													 											 
											 
											 } 
											  }
											 
											  else
											    {echo " ".mysqli_error($connection);} 
											  
											
											
											
											        
											// fetch comment	-------------------------------------------------------------------------------------------------------------
											 $selectforfetch="select * from comments WHERE ID=$id";
										
											 $selectforfetchquery=mysqli_query($connection,$selectforfetch);	
										//--------------	 if($selectforfetchquery){echo "success";} else {echo "it dindnt query".mysqli_error($connection);}
									        while($fetch=mysqli_fetch_array($selectforfetchquery))
										   {
										      echo "<br/>" , $fetch["comment"],'<hr />';   
 										   
										   
										   }											   
											       
									
											
											
											
											
							
										   }
							   }
							   ECHO "<br /> <hr />";
								//include("footer.php");			   
									?>	   
										  </H6> 
											  