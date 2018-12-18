   <header id="home" class="navbar-fixed-top">
   
   <?PHP
   $connection=mysqli_connect("localhost","root","") or die("it hasnt connected to database");
     if($connection){/*echo "Bantu";*/}
	    mysqli_select_db($connection,"lost") or die("DB: not connected");
	
		
   
   
   ?>
           

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!--a class="navbar-brand our_logo" href="index.php"><img src="assets/images/logo.png" alt="" /></a--->
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="index.php">HOME</a></li>
                                        <li><a href="addminus.php">ADD ADMINS</a></li>
                                        <li><a href="al.php">POST APPROVALS</a></li>
										<li><a href="collectionlist.php">COLLECTION LIST</a></li>
										<li><a href="offers.php">OFFER APPROVALS</a></li>
                                       <li><a href="claimed.php">CLAIMS</a></li>
									   <li><a href="logout.php" class="verified">LOGOUT</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header>