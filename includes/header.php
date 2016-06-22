    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +31 6 38 34 64 68</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <li <?php if($current == 'index') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
                        <li <?php if($current == 'airport') {echo 'class="active"';} ?>><a href="airport.php">Airport taxi</a></li>
                        <li <?php if($current == 'limousine') {echo 'class="active"';} ?>><a href="limousine.php">Limousine</a></li>
                        <li <?php if($current == 'groepsvervoer') {echo 'class=active';} ?>><a href="groepsvervoer.php">Groepsvervoer</a></li>
                        <li <?php if($current == 'contact') {echo 'class="active"';} ?>><a href="contact.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->