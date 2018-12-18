   <header id="home" class="navbar-fixed-top">
   
   <?PHP
  include('dbconfig.php');
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
                                
                                </div>

                               
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="index.php">HOME</a></li>
                                        <li><a href="alllist.php">RECOVERED ITEMS</a></li>
                                        <li><a href="bodies.php">UNCLAIMED CORPSE</a></li>
                                        <li><a href="nrcs.php">NRCS</a></li>
                                        <li><a href="linked.php">LINKED ITEMS</a></li>
                                      
                                        <li><a href="report.php" class="verified">REPORT</a></li>
									
										 <li><a href="offeruploads.php" class="verified">MAKE OFFERS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>	
        </header>
		<?php error_reporting(1)  ?>
		
