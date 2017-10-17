
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
                        			<h5 class="title"><a href="#">Sign In</a></h5>
                        			<p class="sub-title"><a href="#">If you have account</a></p>
                        		</div>
                        	</div>
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        		<img src="images/login.png">
                        			<!-- <i class="flaticon-medical-1"></i> -->
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="#">Sign Up</a></h5>
                        			<p class="sub-title"><a href="#">If you don't have account</a></p>
                        		</div>
                        	</div>
                        	<div class="iconbox-widget">
                        		<div class="icon">
                        			<img src="images/phone.png">
                        		</div>
                        		<div class="box-contenet">
                        			<h5 class="title"><a href="#">Call Us Today</a></h5>
                        			<p class="sub-title"><a href="#">(0)123 456 7890</a></p>
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
                                <li><a href="about.html">About</a></li>
                                <li><a href="#service">Services</a>
                                                                   </li>
                                <li><a href="#doctors">Doctors</a>
                                    
                                </li>
                                <li><a href="#gallery">Gallery</a>
                                   
                                </li>
                                <li><a href="#blog">Blog</a>
                                    
                                </li>
                                <li><a href="#testimonials">Testimonials</a></li>
							</ul>

		                    <div class="appoint-inner">
		                        <div class="appoint-btn text-right">
		                            <a href="appointment-style1.html">Contact Us</a>
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
 <script src="https://www.gstatic.com/firebasejs/4.4.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAVSbIWyaD6EoPUjXrk5tLz8qlXo5ZmIxw",
    authDomain: "online-education-b4348.firebaseapp.com",
    databaseURL: "https://online-education-b4348.firebaseio.com",
    projectId: "online-education-b4348",
    storageBucket: "online-education-b4348.appspot.com",
    messagingSenderId: "524726254199"
  };
  firebase.initializeApp(config);
        // load db
        var mydb = firebase.database();

        //var obj = mydb.ref().child("patients").child("senthu16").child("address");

        // progress bar length
        function progress(i,value) {
            var elem = document.getElementById("myBar");
            var width = i;
            var id = setInterval(frame, 10);

            function frame() {
                if (width >= value) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                }
            }


        }


    </script>



<section class="picture" style="height:250px">
			<div class="container">
			
				<div class="row">
					<div class="col-md-12 text-center">
					<br><br>
						<h1 class="whiteColor"><b>Signup</b></h1><h2 class="title"><b>Be a part of our community</b></h2>
						<h3 class="title"> <span class="whiteColor"><b></b></span><b></b> </h3>
					</div>
				</div>
			</div>
		</section>
<br>
<section>
 
<?php

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<form>";
echo"<center>";
echo"<h1 class=color-theme fz-32 ttu ao_mt bo_mb><b>Welcome Web_Ex community</b></h1>";
echo "<br/>";
echo "<h1> Successfully Added Your Details </h1>";
echo "<br/>";
echo "<center><input type=button class= commonButton value =Back onclick=document.location.href='index.php'></center>";
echo"<br>";
echo "</form>";

?>

    
	 
</section>
	
		
		<!--Client Divider End-->

	</div>
	<!--Main Content end-->

	<!-- Footer Start-->
	<footer class="footer-section" id="footer">
		<div class="container >
			<div class="row go_pt fo_pb">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="footer-widget" style="margin-left:-70px">
						<a href="#" class="footer-logo"><img src="images/capture.png" alt="" ></a>
						<p>We value your feedback and it will help us to improve our service in futere. Please contact us</p>
						<div class="widget-contact" >
							<p><img src="images/footer/house.png">&nbsp; &nbsp;&nbsp;23,Arethusa lane,Colombo</p>
							<p><img src="images/footer/gmail.png">&nbsp; &nbsp;&nbsp;teamweb_ex@gmail.com</p>
							<p><img src="images/footer/mobile.png">&nbsp; &nbsp;&nbsp;(+94) 75 401 4629</p>
						</div>
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/template/index.php"><img src="images/footer/fb.png"></a></li>
							<li><a href="https://twitter.com/home?status=http%3A//localhost/template/index.php"><img src="images/footer/twitter.png"></a></li>
							
							<li><a href="#"><img src="images/footer/youtube.png"></a></li>
							<li><a href="#"><img src="images/footer/email.png"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="footer-widget">
						<div class="footer-widget-title">
							<h4 class="widget-title">Useful Links</h4>
						</div>
						<ul class="widget-links">
							<li><img src="images/footer/arrow.png"><a href="#">Choosing a Lecturer</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Ask Question</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">About Us</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">User Account</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Our Support Forum</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Our Help Center</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-6">
					<div class="footer-widget">
						<div class="footer-widget-title">
							<h4 class="widget-title">services</h4>
						</div>
						<ul class="widget-links">
							<li><img src="images/footer/arrow.png"><a href="#">Online videos</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Online exams</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Q & A services</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Donation</a></li>
							<li><img src="images/footer/arrow.png"><a href="#">Help</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="footer-widget">
						<div class="footer-widget-title">
							<h4 class="widget-title">Latest Videos</h4>
						</div>
						<div class="widget-news">
							<div class="widget-news-post">
								<div class="thumb">
									<img src="images/blog/p.jpg" alt="">
								</div>
								<div class="content">
									<p class="title"><a href="#blog">Learn about food making process in plants</a></p>
									<div class="meta-date">29 Feb 2017</div>
								</div>
							</div>
							<div class="widget-news-post">
								<div class="thumb">
									<img src="images/blog/m.jpg" alt="">
								</div>
								<div class="content">
									<p class="title"><a href="#blog">Have an idea about forces and motion of objects</a></p>
									<div class="meta-date">04 Apr 2017</div>
								</div>
							</div>
							<div class="widget-news-post">
								<div class="thumb">
									<img src="images/blog/o.png" alt="">
								</div>
								<div class="content">
									<p class="title"><a href="#blog">Formation of organic compounds</a></p>
									<div class="meta-date">19 Feb 2017</div>
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
						<p class="copy-right">© Copyright 2017 - <a href="https://themeforest.net/user/icute_theme/portfolio" target="_blank">Web_Ex TEAM </a>| all right reserved 
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--Footer end-->

    <!-- Start Menu Switcher -->
	<!-- <div class="menu-switcher">
		<a class="switcher-btn" id="switcher-toggle" href="#"><i class="fa fa-cog"></i></a>
		<h5 class="switcher-title">Reset Theme Style</h5>
		<h6 class="title">Chose theme color</h6>
        <ul class="switcher-color">
            <li>
                <a class="scr-color1" onclick="swapStyleSheet('themecolor.css')"></a>
            </li>
            <li>
                <a class="scr-color2" onclick="swapStyleSheet('css/color/themecolor2.css')"></a>
            </li>
            <li>
                <a class="scr-color3" onclick="swapStyleSheet('css/color/themecolor3.css')"></a>
            </li>
            <li>
                <a class="scr-color4" onclick="swapStyleSheet('css/color/themecolor4.css')"></a>
            </li>
            <li>
                <a class="scr-color5" onclick="swapStyleSheet('css/color/themecolor5.css')"></a>
            </li>
            <li>
                <a class="scr-color6" onclick="swapStyleSheet('css/color/themecolor6.css')"></a>
            </li>
            <li>
                <a class="scr-color7" onclick="swapStyleSheet('css/color/themecolor7.css')"></a>
            </li>
            <li>
                <a class="scr-color8" onclick="swapStyleSheet('css/color/themecolor8.css')"></a>
            </li>
        </ul>
		<h6 class="title">Chose layout wide</h6>
        <ul class="switcher-laout-boxed-wide">
            <li>
				<a class="btn-widelayout" href="#btn-widelayout">Wide</a>
            </li>
            <li>
				<a class="btn-boxedlayout" href="#btn-boxedlayout">Boxed</a>
            </li>
        </ul>
		<h6 class="title">Chose Background Image <span>(Boxed Wide)</span></h6>
        <ul class="switcher-layout-bgimg">
            <li><a class="switcher-bgi-pattern">rs</a></li>
            <li><a><img class="switcher-bgi-pattern" src="images/resource/w01.jpg"></a></li>
            <li><a><img class="switcher-bgi-pattern" src="images/resource/w02.jpg"></a></li>
            <li><a><img class="switcher-bgi-pattern" src="images/resource/w03.jpg"></a></li>
            <li><a><img class="switcher-bgi-pattern" src="images/resource/w04.jpg"></a></li>
            <li><a><img class="switcher-bgi-pattern" src="images/resource/w05.jpg"></a></li>

            <li><a><img class="switcher-bgi-solid" src="images/resource/1.jpg"></a></li>
            <li><a><img class="switcher-bgi-solid" src="images/resource/2.jpg"></a></li>
            <li><a><img class="switcher-bgi-solid" src="images/resource/3.jpg"></a></li>
            <li><a><img class="switcher-bgi-solid" src="images/resource/4.jpg"></a></li>
            <li><a><img class="switcher-bgi-solid" src="images/resource/5.jpg"></a></li>
            <li><a><img class="switcher-bgi-solid" src="images/resource/6.jpg"></a></li>
        </ul>
    </div>

 -->	<!-- Side Menu-->
	<!-- <div class="side-toggle-menu">
		<a class="side-menu-btn toggle-menu menu-right"><i class="fa fa-bars"></i></a>
	    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
	    <a class="side-menu-btn-close pull-right"><i class="fa fa-close"></i></a>
			<a class="logo" href="index.html"><img src="images/logo-white.png" alt="Logo" title="CuteGarden"></a>
			<ul class="nav-stacked">
				<li><a href="index.html">Home</a></li>
				<li><a href="services-style1.html">Services</a></li>
				<li class="sidemenu-dropdown">
					<a>Pages <span class="caret"></span></a>
					<ul class="sidemenu-dropdown-active">
						<li><a href="about.html">About</a></li>
						<li><a href="pricing-style1.html">Pricing</a></li>
						<li><a href="testimonials-style1.html">Testimonials</a></li>
						<li><a href="faq.html">Faq</a></li>
						<li><a href="404.html">404 Page</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>

	<!--Scroll to top-->
	<!-- <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

</div> -->
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