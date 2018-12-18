 <?PHP
   $password="susan1";
   $connection=mysqli_connect("localhost","root","")
   
   or die("it hasnt connected to database");
     if($connection){/*echo "DB STATUS: CONNECTED";*/}
	    mysqli_select_db($connection,"lost") or die("DB STATUS: NOT CONNECTED");
	
	
   ?>