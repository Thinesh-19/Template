<?php
    //include db connection
    include("dbConnect.php");
    //grab care taker choice using post method
    $selectedCareTaker=$_POST['caretakerChoices'];
    //grab username from hidden field using post method
    $userName=$_POST["hiddenUserName"];


    $selectCaretakerQuery="SELECT userName,password FROM caretakers WHERE userName='$selectedCareTaker'";
    $executePatientQuery = mysqli_query($con,$selectCaretakerQuery);
    $caretakerRow = mysqli_fetch_array($executePatientQuery);

    if($caretakerRow['userName']==$selectedCareTaker){
        // insert patient's username and selectescaretaker's username into patient caretaker
    $query="INSERT INTO patientcaretaker(patientUserName,caretakerUserName)values('$userName','$selectedCareTaker')";
    //if the connection is not made
    $result=mysqli_query($con,$query);
            if(!$result){
                die(mysqli_error($con));
            }else{
                //if the insertion query is Successfully executed  this page will show
    ?>



<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta Tags -->
<meta charset="UTF-8">

<!-- Theme Page Title -->
<title>MedPhil | Smart Pill Holder</title>

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

    
<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
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

        // caretakers table
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

          </script>
</head>

<body onload=progress(1,20)>
<?php
//include("dbConnect.php");

// PATIENT 

// select the caretaker and write to database
@$username = $_POST["hiddenUserName"];
@$email = $_POST["hiddenEmail"];
@$firstname = $_POST["hiddenFirstName"];
@$lastname = $_POST["hiddenLastName"];
@$password = $_POST["hiddenPassword"];
@$schoolName = $_POST["hiddenSchoolName"];
@$schoolSAddress=$_POST["hiddenSchoolAddress"]; 
@$telephoneNo=$_POST["hiddenTelNo"];
@$grade=$_POST["hiddenGrade"];
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
	                    <a class="logo" href="index.html"><img src="images/logo.png" alt="Logo" title="Medical"></a>
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
                                <li class="active"><a href="home.html">Home</a>
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
 


<section class="picture" style="height:250px">
			<div class="container">
			
				<div class="row">
					<div class="col-md-12 text-center">
					<br><br>
						<h1 class="whiteColor"><b>Signup</b></h1><h2 class="title"><b>Be a part of our community</b></h2>
						<h3 class="title"> <span class="whiteColor"><b>Step 5 : </b></span><b>Please Configure your medicine details</b> </h3>
					</div>
				</div>
			</div>
		</section>
<br>
<section>
 
    
    
	<!--<div class="sub-page-content">
		<div class="container">
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<!-- <div class="panel panel-info"> -->

				<!--	<div style="padding-top:30px" class="panel-body">

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

						 
                         <form method="POST" name="step1" action="connectionAction.php">

                        
                            <label for="medicineName" class="input-label">Medicine Name</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="medicineName" id="medicineName" value="" placeholder="Enter Medicine Name" required />
                            </div>

                            <label for="dosageGap" class="input-label">Dosage Gap</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" name="medicineHourDoseageGap" id="medicineHourDoseageGap" value="" placeholder="Enter Dosage Gap in Milli Seconds" required />
                            </div>
                            
                            <label for="notification" class="input-label">How many times to give bottle notification </label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input  type="text" class="form-control" name="notifyItreration" id="notifyItreration" value="" placeholder="Eg : 2" required />
                                <a class="formText" id="txtGram" name="txtGram">Times</a><br/><br/>
                            </div>

                            <label for="warnDosage" class="input-label">Warn Dosage</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="email" class="form-control" name="warnDosage" id="warnDosage" size="30" value="" placeholder="Eg: 20" required />
                            </div>

                            <label for="bottleId" class="input-label">Bottle Id</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="password" class="form-control" name="bottleId" id="bottleId" placeholder="Password" required />
                            </div>-->
                             <?php

                                // hidden fields to carry POST data
                                echo "<input type=hidden id=hiddenUsername name=hiddenUsername value=$username>";
                                echo "<input type=hidden id=hiddenAddress name=hiddenAddress value=$address>";
                                echo "<input type=hidden id=hiddenEmail name=hiddenEmail value=$email>";
                                echo "<input type=hidden id=hiddenFirstName name=hiddenFirstName value=$firstname>";
                                echo "<input type=hidden id=hiddenLastName name=hiddenLastName value=$lastname>";
                                echo "<input type=hidden id=hiddenPassword name=hiddenPassword value=$password>";

                         ?>
                         <?php
            echo"<input type=hidden name=hiddenUserName value=$userName>";
    ?>
                        
<input type="submit" style="margin-left:250px" class="commonButton" name="nextStep" id="nextStep" value="Next">

    </form>
                         

						
 </div>
    </div>
    
	 
</section>
	
		<!--Client Divider Start-->
		<section class="bgcolor-theme do_pt do_pb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="client-slider owlnav-true owl-nav3">
							<a href="#"><img src="images/client/1.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/2.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/3.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/4.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/5.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/6.png" alt="client-logo"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Client Divider End-->

	</div>
	<!--Main Content end-->

	<!-- Footer Start-->
	<footer class="footer-section">
		<div class="container">
			<div class="row go_pt fo_pb">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="footer-widget">
						<a href="#" class="footer-logo"><img src="images/logo-white.png" alt=""></a>
						<p>Eius sed culpa quidem magni facilis diaiores ullam! Cum dicta nulla emit</p>
						<div class="widget-contact">
							<p><i class="fa fa-map"></i>121, Melbourne, Australia</p>
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
						<p class="copy-right">© Copyright 2017 - <a href="https://themeforest.net/user/icute_theme/portfolio" target="_blank">MEDPHIL TEAM </a>| all right reserved <a href="https://themeforest.net/checkout/25548483/create_account" class="tf-buy-now" target="_blank"> Buy now </a></p>
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