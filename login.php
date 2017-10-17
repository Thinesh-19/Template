<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta Tags -->
<meta charset="UTF-8">

<!-- Theme Page Title -->
<title>Web Edu | Online Education System</title>

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--css link-->
<link href="menuzord.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="revolution-slider.css" rel="stylesheet">
<link href="reset-style.css" rel="stylesheet">
<link href="responsive.css" rel="stylesheet">
<link href="themecolor.css" rel="stylesheet" id="colorswitcher">

</head>

<body onload=progress(1,20)>

<!--wrapper start-->
<div class="wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Start Main Header -->
    <header class="mega-header">
        <div class="header-top">
        
            <div class="container">
                <div class="row clearfix">                
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	                    <a class="logo" href="index.html"><img src="images/capture.PNG" alt="Logo" title="Medical"></a>
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-12 header-top-widget headerwidget-style2">
                        <div class="header-widget">
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        		<img src="images/signup.png">
                        			<!-- <i class="flaticon-square"></i> -->
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="login.php">Sign In</a></h5>
                        			<p class="sub-title"><a href="#">If you have account</a></p>
                        		</div>
                        	</div>
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        		<img src="images/login.png">
                        			<!-- <i class="flaticon-medical-1"></i> -->
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="signup.php">Sign Up</a></h5>
                        			<p class="sub-title"><a href="#">If you don't have account</a></p>
                        		</div>
                        	</div>
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        			<img src="images/phone.png">
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="#">Call Us Today</a></h5>
                        			<p class="sub-title"><a href="#">(+94) 754 014 629</a></p>
                        		</div>
                        	</div>
                        </div>
                    </div>                    
                </div>
            </div>
            
        </div>
        
        <!--Header Main-->
        <div class="header-main">
            <div class="container">
                <div class="row clearfix">
                    <!--Main Menu-->
                    <div class="mega-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav id="menuzord" class="menuzord menuzord-responsive">
							<ul class="menuzord-menu">
                                <li class="active"><a href="index.php">Home</a>
                                                                   </li>
                                 <li><a href="#sessions">Donations</a></li>
                                   
                                <li><a href="#service">Sessions</a>
                                     <ul class="dropdown">
                                        <li><a href="services-style1.html">Upload</a></li>
                                        <li><a href="services-style2.html">Engilsh</a></li>
                                        <li><a href="services-style3.html">Tamil</a></li>
                                        <li><a href="service-details.html">Sinhala</a></li>
                                        
                                    </ul> 
                                </li>
                                
                                
                                <li><a href="#discussions">Discussions</a>
                                     <ul class="dropdown">
                                        <li><a href="blog-style1.html">Ask Questions</a></li>
                                        <li><a href="blog-style2.html">Answer Questions</a></li>
                                        
                                    </ul> 
                                </li>
                                <li><a href="#equipments">Equipments</a></li>
                                <li><a href="#about-us">About Us</a></li>
							</ul>

		                    <div class="appoint-inner">
		                        <div class="appoint-btn text-right">
		                            <a href="#footer">Contact Us</a>
		                        </div>
		                    </div>
						</nav>
                    </div>
                    <!--Main Menu End-->
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
 
<section class="picture" style="height:200px">
			<div class="container">
			
				<div class="row">
					<div class="col-md-12 text-center">
					<br><br>
						<h1 class="whiteColor"><b>Login</b></h1><h2 class="title"><b>Welcome Back To Our Site</b></h2>
						<!-- <h3 class="title"> <span class="whiteColor"><b></b></span><b>Please insert your username and password</b> </h3> -->
						
					</div>
				</div>
			</div>
		</section>
<br>
<section>
 
 
	<div class="sub-page-content">
		<div class="container">
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<!-- <div class="panel panel-info"> -->

					<div style="padding-top:30px" class="panel-body">

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						<form method="POST" name="login" action="loginValidationAction.php">
										<label for="username" class="input-label">Username</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="signup_username" type="text" class="form-control" name="userName" id="userName" value="" placeholder="Eg : Jane" required />
							</div>
						<label for="username" class="input-label">Password</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="signup_username" type="password" class="form-control" name="password" id="password" value="" placeholder="password" required />
							</div>

    <input type="submit" class="commonButton" id="loginBtn" value="Login" style="margin-left:150px">
		<input type="reset" class="commonButton" value="Reset" style="margin-left:300px;margin-top:-45px" ><br/><br/>
			<a style="color:#19baaa; margin-left:150px">Don't you have an account?</a>
			<a class="navBarUpperText" style="color: #216bbd" href=signup.php> Signup </a>
</form>
						
    </div>
    </div>
   
   </div>
   </section>

	

	</div>
	<!--Main Content end-->

	<!-- Footer Start-->
	<footer class="footer-section" id="footer">
		<div class="container">
			<div class="row go_pt fo_pb">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="footer-widget">
						<a href="#" class="footer-logo"><img src="images/logo-white.png" alt=""></a>
						<p>Eius sed culpa quidem magni facilis diaiores ullam! Cum dicta nulla emit</p>
						<div class="widget-contact">
							<p><i class="fa fa-map"></i>23, Melbourne, Australia</p>
							<p><i class="fa fa-envelope"></i>support@medical.com</p>
							<p><i class="flaticon-telephone-symbol-button"></i>(+991) 234 567 8901</p>
						</div>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter icon"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest icon"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play icon"></i></a></li>
							<li><a href="#"><i class="fa fa-envelope icon"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="footer-widget">
						<div class="footer-widget-title">
							<h4 class="widget-title">Useful Links</h4>
						</div>
						<ul class="widget-links">
							<li><a href="#">Choosing a doctor</a></li>
							<li><a href="#">Primary medical care</a></li>
							<li><a href="#">Discuss your doctor</a></li>
							<li><a href="#">Client User Account</a></li>
							<li><a href="#">Our Support Forum</a></li>
							<li><a href="#">Our Help Center</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<div class="footer-widget">
						<div class="footer-widget-title">
							<h4 class="widget-title">services</h4>
						</div>
						<ul class="widget-links">
							<li><a href="#">Emergency Care</a></li>
							<li><a href="#">Operation Theater</a></li>
							<li><a href="#">Medical Checkup</a></li>
							<li><a href="#">Ddiagnostic center</a></li>
							<li><a href="#">Outdoor Checkup</a></li>
							<li><a href="#">Pharmacy Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-widget">
						<div class="footer-widget-title">
							<h4 class="widget-title">Latest News</h4>
						</div>
						<div class="widget-news">
							<div class="widget-news-post">
								<div class="thumb">
									<img src="images/blog/s1.jpg" alt="">
								</div>
								<div class="content">
									<p class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></p>
									<div class="meta-date">25 Feb 2017</div>
								</div>
							</div>
							<div class="widget-news-post">
								<div class="thumb">
									<img src="images/blog/s2.jpg" alt="">
								</div>
								<div class="content">
									<p class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></p>
									<div class="meta-date">25 Feb 2017</div>
								</div>
							</div>
							<div class="widget-news-post">
								<div class="thumb">
									<img src="images/blog/s3.jpg" alt="">
								</div>
								<div class="content">
									<p class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></p>
									<div class="meta-date">25 Feb 2017</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="copy-right">© Copyright 2017 - <a href="https://themeforest.net/user/icute_theme/portfolio" target="_blank">WebEx TEAM </a>| all right reserved <a href="https://themeforest.net/checkout/25548483/create_account" class="tf-buy-now" target="_blank"> Buy now </a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
 --><!--wrapper end-->

<!--Jquery Script-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/menuzord.js"></script>
<script src="js/jPushMenu.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/owl.js"></script>
<!-- validate -->
<script src="js/validate.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- appear js -->
<script src="js/jquery.appear.js"></script>
<!-- isotope -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- fancybox -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/rev-custom.js"></script>
<script src="js/customcollection.js"></script>
<script src="js/custom.js"></script>

</body>
</html>