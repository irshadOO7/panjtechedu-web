<?php include("apprise/temp/function.php"); ?>
<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?= $inst_name ?> | <?= $inst_about ?></title> 
        <meta name="description" content="<?= $inst_fullabout ?>">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="assets">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Offcanvas CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
		<!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/fonts2/flaticon.css">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/rsmenu-transitions.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
        <!--[if lt IE 9]>
            <script src="assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home1">
        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--Preloader area end here-->
		
        <!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->
			<div class="rs-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="rs-toolbar-left">
								<div class="welcome-message">
									<i class="fa fa-bank"></i><span>Welcome to <?= $inst_name ?></span> 
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="rs-toolbar-right">
								<div class="toolbar-share-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<a href="https://panjtechedu.com/apprise/login.php" target="_blank" class="btn btn-sm text-light"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Toolbar End -->
			
			<!--Header Start-->
			<header id="rs-header" class="rs-header">
				
				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12 maincontn">
						        <div class="header-contact">
						            <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
						                <div class="info-text">
						                    <a href="mailto:<?= $inst_email ?>">
						                    	<span>Mail Us</span>
												<?= $inst_email ?>
											</a>
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="logo-area text-center">
									<a href="index"><img class="mainlogo" src="assets/img/logo.png" alt="logo"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 maincontn">
						        <div class="header-contact pull-right">
						            <div id="phone-details" class="widget-text">
						                <i class="glyph-icon flaticon-phone-call"></i>
						                <div class="info-text">
						                    <a href="tel:<?= $inst_contact ?>">
						                    	<span>Call Us</span>
												<?= $inst_contact ?>
											</a>
						                </div>
						            </div>
						        </div>
							</div>
						</div>				
					</div>
				</div>
				<!-- Header Top End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row relative">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="assets/index.html"><img src="assets/img/logo.jpg" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!-- Home -->
											<li> <a href="index" class="home">Home</a>
											</li>
											<!-- End Home --> 
                                            
                                            <!--About Menu Start-->
                                            <li > <a href="about">About Us</a>
                                            </li>
                                            <!--About Menu End--> 
                                            
											<!--Courses Menu Start-->
		                                    <li > <a href="course">Courses</a>
		                                    </li>
		                                    <!--Courses Menu End-->
                                            
											<!--Events Menu Start-->
											<li > <a href="gallery">Gallery</a>
											</li>
											<!--Events Menu End-->
											
											<!--Contact Menu Start-->
											<li> <a href="contact">Contact</a></li>
								            <!--Contact Menu End-->
										</ul>
									</nav>
                                   
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->

		</div>
        <!--Full width header End-->