

<?php
//database setup
$connection=mysqli_connect("localhost","root","");
  if($connection){echo"it has connected to localhost";}
    else{echo "it hasnt connected to the database".mysqli_error($connection);}
 	
$cds="CREATE DATABASE lyric";
 $cdq=mysqli_query($connection,$cds);
   if($cdq){echo"<br />it has created database:LYRIC";}
     else{echo "<br />it hasnt created database".mysqli_error($connection);}
	 
	 
mysqli_select_db($connection , "lyric");
//CWE ARE GOIN TO CREAT A DATABASE FOR THE FOLLOWING '''''''''''''''''''''''''''
   $cts="CREATE TABLE words(
       ID int(233) not null primary key auto_increment,
	   category VARCHAR(200) NOT NULL, 
	   genre VARCHAR(200) NOT NULL, 
	   entity VARCHAR(90) NOT NULL,
	   feature VARCHAR(255) NOT NULL,
	   title VARCHAR(500) NOT NULL,
	   image VARCHAR(255) NULL,
	   words VARCHAR(1000) NOT NULL,
	   year VARCHAR(255) NOT NULL,
	   period VARCHAR(255) NOT NULL,
	   record VARCHAR(255) NOT NULL,
	   date int(255) NOT NULL,
	   details VARCHAR(255) NOT NULL,
	   uploader VARCHAR(100) NOT NULL,
	   comments VARCHAR(300) NOT NULL,
	   audio VARCHAR(300) NOT NULL,
	  
	   sponsor VARCHAR(100) NOT NULL
	  
  )";  

$ctq=mysqli_query($connection,$cts);
   if($ctq){echo "<br />it has created table WORDS";}
        else{echo"<br />it hasnt created table :WORDS ".mysqli_error($connection);} 


//CWE ARE GOIN TO CREAT A DATABASE FOR THE FOLLOWING '''''''''''''''''''''''''''
   $cts="CREATE TABLE generalitems(
       ID int(233) not null primary key auto_increment,
	   category VARCHAR(200) NOT NULL, 
	    
	   entity VARCHAR(90) NOT NULL,
	   feature VARCHAR(200) NOT NULL,
	   title VARCHAR(500) NOT NULL,
	   body VARCHAR(8000) NOT NULL,
	  
	   genre VARCHAR(255) NULL,
	   album VARCHAR(1000) NOT NULL,
	   image VARCHAR(255) NOT NULL,
	   year VARCHAR(255) NOT NULL,
	   otherdetails VARCHAR(255) NOT NULL,
	   links INT(255) NOT NULL,
	   audio INT(255) NOT NULL,
	   comment INT(100) NOT NULL
	   
  )";  

$ctq=mysqli_query($connection,$cts);
   if($ctq){echo "<br />it has created table generalitems";}
        else{echo"<br />it hasnt created table :lyrix ".mysqli_error($connection);} 




//CWE ARE GOIN TO CREAT A DATABASE FOR poem '''''''''''''''''''''''''''
   $cts="CREATE TABLE poetry(
       ID int(233) not null primary key auto_increment,
	   category VARCHAR(200) NOT NULL, 
	    
	   entity VARCHAR(90) NOT NULL,
	   feature VARCHAR(200) NOT NULL,
	   title VARCHAR(500) NOT NULL,
	   body VARCHAR(8000) NOT NULL,
	  
	   genre VARCHAR(255) NULL,
	   album VARCHAR(1000) NOT NULL,
	   image VARCHAR(255) NOT NULL,
	   year VARCHAR(255) NOT NULL,
	   otherdetails VARCHAR(255) NOT NULL,
	 
	   audio INT(255) NOT NULL
  )";  

$ctq=mysqli_query($connection,$cts);
   if($ctq){echo "<br />it has created table poetry";}
        else{echo"<br />it hasnt created table :poets ".mysqli_error($connection);} 


  		
	$createsponsortablestatement="CREATE TABLE advert(
	ID int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	entity VARCHAR(255) NULL,
	title VARCHAR(255) NULL,
	imagename VARCHAR(255) NOT NULL,
	message VARCHAR(255) NULL,
	time VARCHAR(600) NOT NULL,
	companydetails VARCHAR(600) NOT NULL
	
	)";
$createsponsortablestatementquery=mysqli_query($connection,$createsponsortablestatement);
  if( $createsponsortablestatementquery){echo "<br />it has created table ADVERT";}
  ELSE{echo "<br />it hasnt created table ADVERT".mysqli_error($connection);}  
  
  
  $createuser="CREATE TABLE user(
	ID int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NULL,
	phoneNumber VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	imagename VARCHAR(255) NOT NULL,
	Bio VARCHAR(255) NULL,
	time VARCHAR(255) NOT NULL)";
$createuserquery=mysqli_query($connection,$createuser);
  if( $createuserquery){echo "<br />it has created table user";}
  ELSE{echo "<br />it hasnt created table user".mysqli_error($connection);}  
  
  
  
   $createmainadmin="CREATE TABLE mainadmin(
	ID int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NULL,
	phoneNumber VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	imagename VARCHAR(255) NOT NULL,
	Bio VARCHAR(255) NULL,
	time VARCHAR(255) NULL,
	privilege VARCHAR(255) NOT NULL)";
$createmainadminquery=mysqli_query($connection,$createmainadmin);
  if( $createmainadminquery){echo "<br />it has created table mainadmin";}
  ELSE{echo "<br />it hasnt created table mainadmin".mysqli_error($connection);} 
  
  
     $createcontributoradmin="CREATE TABLE contributeadmin(
	ID int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NULL,
	phoneNumber VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	imagename VARCHAR(255) NOT NULL,
	pass VARCHAR(255) NOT NULL,
	Bio VARCHAR(255) NULL,
	time VARCHAR(255) NULL,
	privilege VARCHAR(255) NOT NULL)";
$createcontributoradminquery=mysqli_query($connection,$createcontributoradmin);
  if( $createcontributoradminquery){echo "<br />it has created table contributeadmin";}
  ELSE{echo "<br />it hasn't created table contributeadmin".mysqli_error($connection);} 
 
?>