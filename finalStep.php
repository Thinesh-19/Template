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
        var db = firebase.database();

        // lecturer table
        var caretakersTable = db.ref('Lecturer/');

        // to display selection box options
        var selectBox = "";

        // sync caretakers table once
        caretakersTable.once("value").then(
            function (snapshot) {

                // add to availabe caretakers selectBox
                addToCaretakersList(snapshot.toJSON());

                // show available caretakers
                showCaretakers(selectBox);

            }
        );

        // FUNCTIONS /////////////////////////////////////////////////////////////////////////////

        // iterates through each caretaker object and adds each caretaker's username to selectBox
        function addToCaretakersList(jsonCaretakers) {

            // for each caretaker object
            for (var username in jsonCaretakers) {

                // if object has this key (username)
                if (jsonCaretakers.hasOwnProperty(username)) {
                    // add key(username) to list
                    addCaretakers(username);
                }
            }
        }

        // adds caretaker with given username, to the list
        function addCaretakers(username) {

            // add as a select option
            selectBox = selectBox.concat("<option value=" + username + ">" + username + "</option>");

        }

        // displays all the caretakers within a select element in the HTML body
        function showCaretakers(options) {

            // if no caretakers are available
            if (selectBox == "") {

                document.getElementById("caretakerSelection").innerHTML = "No Lecturer available. Please try again later<br/>";

            } else {

                // at least one caretaker is available
                document.getElementById("caretakerSelection").innerHTML = "<select class=inputs id=caretakerSelection_selected name=caretakerSelection >" + options + "</select>";
            }
        }

        // gets patient data after submission for writing into database
        function submitPatientData() {

            var pt_username = document.getElementById('hiddenUsername').value;
            var pt_schoolName = document.getElementById('hiddenSchoolName').value;
             var pt_schoolAddress = document.getElementById('hiddenSchoolAddress').value;
              var pt_TelephoneNo = document.getElementById('hiddenTelNo').value;
               var pt_grade = document.getElementById('hiddenGrade').value;

          //  var pt_doctor = "";
            var pt_email = document.getElementById('hiddenEmail').value;
            var pt_firstname = document.getElementById('hiddenFirstName').value;
            var pt_lastname = document.getElementById('hiddenLastName').value;
            var pt_password = document.getElementById('hiddenPassword').value;

            if (!(selectBox == "")) {
                // select caretaker
                var pt_caretaker = document.getElementById('caretakerSelection_selected').value;

                // write data to database
                writePatientData(pt_username, pt_schoolName,pt_schoolAddress,pt_TelephoneNo,pt_grade, pt_caretaker, pt_email, pt_firstname, pt_lastname, pt_password);

            }else{
                // write to database
                writePatientData(pt_username, pt_schoolName,pt_schoolAddress,pt_TelephoneNo,pt_grade, "", pt_email, pt_firstname, pt_lastname, pt_password);

            }



        }

        // writes patient data to database and redirect to choose medicine details page
        // p_ stands for parameter, otherwise json object will have the keys in the same name
        function writePatientData(p_username, p_schoolName,p_schoolAddress,p_telNo,p_grade, p_caretaker, p_email, p_firstname, p_lastname, p_password) {

            // a patient object
            var patientObj = {

                
                Lecturer: p_caretaker,
                schoolName:p_schoolName,
                schoolAddress:p_schoolAddress,
                schoolTelNo:p_telNo,
                Grade:p_grade,
                //doctor: p_doctor,
                email: p_email,
                username:p_username,
                firstname: p_firstname,
                lastname: p_lastname,
                password: p_password

            };

//            // a patient dosage object (to create the patient dosage table for the first time
//            var patientDosageObj = {
//
//                created: "welcome"
//
//            };

            // write to database
            var updates = {};
            updates['/Student/' + p_username] = patientObj;
            //updates['/dosages/' + p_username + '_dosage'] = patientDosageObj;

            firebase.database().ref().update(updates);

            // redirect to choose medicine details
            // username is passed as GET request
           window.location = "medicalConfig.php?username=";

        }

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
</head>

<body onload=progress(1,20)>
<?php
//include("dbConnect.php");

// PATIENT 

// select the caretaker and write to database
@$username = $_POST["hiddenUserName"];
@$schoolName = $_POST["schoolName"];
@$schoolSAddress=$_POST["schoolAddress"]; 
@$telephoneNo=$_POST["telephoneNumber"];
@$grade=$_POST["grade"];
@$email = $_POST["hiddenEmail"];
@$firstname = $_POST["hiddenFirstName"];
@$lastname = $_POST["hiddenLastName"];
@$password = $_POST["hiddenPassword"];

?>


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
 


<section class="picture" style="height:250px">
            <div class="container">
            
                <div class="row">
                    <div class="col-md-12 text-center">
                    <br><br>
                        <h1 class="whiteColor"><b>Signup</b></h1><h2 class="title"><b>Be a part of our community</b></h2>
                        <h3 class="title"> <span class="whiteColor"><b>Step 4 : </b></span><b>Please Choose your Lecturer</b> </h3>
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

                         <form method="POST" name="careTakerSelectForm" action="assignCareTaker.php">
                          <?php

                                // hidden fields to carry POST data
                                echo "<input type=hidden id=hiddenUsername name=hiddenUsername value=$username>";
                                echo "<input type=hidden id=hiddenSchoolName name=hiddenSchoolName value=$schoolName>";
                                echo "<input type=hidden id=hiddenSchoolAddress name=hiddenSchoolAddress value=$schoolSAddress>";
                                echo "<input type=hidden id=hiddenTelNo name=hiddenTelNo value=$telephoneNo>";
                                echo "<input type=hidden id=hiddenGrade name=hiddenGrade value=$grade>";
                                echo "<input type=hidden id=hiddenEmail name=hiddenEmail value=$email>";
                                echo "<input type=hidden id=hiddenFirstName name=hiddenFirstName value=$firstname>";
                                echo "<input type=hidden id=hiddenLastName name=hiddenLastName value=$lastname>";
                                echo "<input type=hidden id=hiddenPassword name=hiddenPassword value=$password>";

                         ?>
                          <img src="images/caretaker-icon.png" alt="caretaker" style="margin-left:150px;margin-top:-100px">
        <br/><br/>
                         <label for="caretaker" class="input-label" style="margin-left:150px">Choose your Lecturer</label><br/>
 <!--to display caretaker selection box-->
        <div id="caretakerSelection" style="margin-left:150px"></div>
        <br>

        <!--///////////////////////-->

        <div>

            <?php
            echo "<input type=hidden name=hiddenUserName value=$username>";
            ?>

            <!-- <input type="submit" name="submitBtn" id="submitBtn" value="Next" class="commonButton"> -->
            <input type="button" name="submitBtn" id="submitBtn" value="Next" class="commonButton"
                   onclick="submitPatientData()" style="margin-left:200px">
    </form>

                        
 </div>
    </div>
    
     
</section>
    
        <!--Client Divider Start-->
        
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