<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

  .product, .product1, .product2, .product3, .product4{
            float: left;
            background-color: white;
            margin: 10px 10px 0 0;
			height:400px;
            width: 234px;
	border: 2px solid grey;

        }
        
        .description {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            padding-top: 10px;
            height: 150px;
            position: relative;
        }
        
        .price {
            color: #0655C7    ;
            position: absolute;
            bottom: -30px;
            width: 234px;
        }
        
        .container1 {
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
	position:relative;
	left:-190px;

        }
	.button1{
position:relative;
top:-20px;

}

#f1{
display:none;
width:500px;

}

#prSel{
position:absolute;
left:55%;
top:10%;
}

</style>
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
<?php
echo"<input type=hidden class=form-control name=user id=user value=$_SESSION[session1]  />";
?>

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

 function submitDoctorData() {

                // doctor data
                var d_username = document.getElementById('user').value;

                // doctor hospital data
                var h_amount = document.getElementById('amount').value;
                var h_card = document.getElementById('card').value;
                var h_cardNo = document.getElementById('t').value;
                var h_contact=document.getElementById('m').value;


                addHospitalAndSignup(d_username, h_amount,h_card,h_cardNo,h_contact);

   }

   function addHospitalAndSignup(d_username, d_amount,d_card,d_cardNo,d_contact) {

                // a doctor object
            

                var UserDonationObj = {
                

                    amount: d_amount,
                    cardType: d_card,
                    card_No: d_cardNo,
                    contactNo: d_contact

                }

                // write to database
                var dbUpdates = {};
               
                dbUpdates['/Donation/' + d_username + "_" + "donation"] = UserDonationObj;

                firebase.database().ref().update(dbUpdates);

                // redirect
                window.location = "doctorHomePage.php";

            }
</script>
							<!-- <script type="text/javascript">
							var username=document.getElementById("user").value;
							var database=firebase.database();
							var userRef=database.ref().child("Common_User");
							userRef
								 .orderByKey()
            					 .startAt(username).endAt(username)
           						  .on("child_added", function(snapshot) {
                 	
                   				//document.getElementById("mail").innerHTML=snapshot.val().email;
                   				//document.getElementById("mail").innerHTML="ttttt";
                   
                   
                                            
               
             			}, function (errorObject) {
                //window.location.href = "loginError.php";
               					 alert("The read failed: " + errorObject.code);
           				 });

								
							</script> -->


<script type="text/javascript">

function donate(prd){
document.getElementById("h11").innerHTML="Donation";
var hide=document.getElementById("c"); 
var popup=document.getElementById("f1");         
popup.style.display="block"; // the divison becomes visible
hide.style.display="none";

if(prd=="product1"){
document.getElementById("prSel").src="images/projector.png"
var ini=parseInt(document.getElementById("price1").innerHTML)
var fin=document.getElementById("money").value;
var rem=eval(ini-fin)
document.getElementById("price01").innerHTML="Due: "+rem+" LKR";
}
else if(prd=="product2"){
document.getElementById("prSel").src="images/comp.png"
var fin=f1.money.value;
var rem=ini-fin
document.getElementById("price02").innerHTML="Due: "+rem+" LKR";
}
else if(prd=="product3"){
document.getElementById("prSel").src="images/sp.png"
var fin=f1.money.value;
var rem=ini-fin
document.getElementById("price03").innerHTML="Due: "+rem+" LKR";
}
else if(prd=="product4"){
document.getElementById("prSel").src="images/mic.png"
var fin=f1.money.value;
var rem=ini-fin
document.getElementById("price04").innerHTML="Due: "+rem+" LKR";
}
}

function maa(){


var name=f1.userName.value;
alert("Thankyou "+name+". Your donation has been successfully credited!");
document.getElementById("h11").innerHTML="Equipments";
var hide=document.getElementById("c"); 
var popup=document.getElementById("f1");         
popup.style.display="none"; // the divison becomes invisible
hide.style.display="block";

}

// function validate(){
// var name=f1.userName.value;
// var m=f1.mail.value;
// var amt=f1.amount.value;
// var crd=f1.card.value;
// var num=f1.t.value;
// if((name=="")||(m=="")||(amt=="")||(crd=="")||(num=="")){
// 	alert("Please fill in the details")
// 	if((name=="")&&(m=="")&&(amt=="")&&(crd=="")&&(num=="")){
// 		document.getElementById("1").style.color="red";
// 		document.getElementById("2").style.color="red";
// 		document.getElementById("3").style.color="red";
// 		document.getElementById("4").style.color="red";
// 		document.getElementById("5").style.color="red";
// 	}
// 	 if (name==""){
// 		document.getElementById("1").style.color="red";
// 	}
// 	 if (m==""){
// 		document.getElementById("2").style.color="red";
// 	}
// 	 if (amt==""){
// 		document.getElementById("3").style.color="red";
// 	}
// 	 if (crd==""){
// 		document.getElementById("4").style.color="red";
// 	}
// 	 if (num==""){
// 		document.getElementById("5").style.color="red";
// 	}				
// }
// else{ maa();
// document.getElementById("f1").reset();
// document.getElementById("1").style.color="black"; 
// document.getElementById("2").style.color="black";
// document.getElementById("3").style.color="black"; 
// document.getElementById("4").style.color="black";
// document.getElementById("5").style.color="black"; 
		

// }
// } 


</script>

<script type="text/javascript">

</script>

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
						<h1 id="h11" class="whiteColor"><b>Equipments</b></h1>
						<!-- <h3 class="title"> <span class="whiteColor"><b></b></span><b>Please insert your username and password</b> </h3> -->
						
					</div>
				</div>
			</div>
		</section>
<br>
<section>
 
 
	<div class="sub-page-content">
		<div class="container">
			<div id="loginbox" style="margin-top:-20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<!-- <div class="panel panel-info"> -->

					<div style="padding-top:-10px" class="panel-body">

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						<div class="container1" >


<div id="c">
        <div class="product" id="product1">
            <img  id="img1" alt=" Projector - 8000 LKR" src="images/projector.png" width="230px" height="230px"onclick="modalimg(this.id)">
            <div class="description">
                Projector </br>St. Xavier's Boys' College
                <div class="price" id="price1">
                   8000 LKR  
	<div id="price01">Due: 8000 LKR</div>
	</br><input type="button" class="button1" onclick="donate('product1')"  value="Donate"/ >
			
                </div>
            </div>
        </div>

        <div class="product" id="product2" >
            <img  id="img2" alt=" Computer Desk - 16000 LKR" src="images/comp.png"  width="225px" height="230px"onclick="modalimg(this.id)">
            <div class="description">
                Computer Desk</br>Velanai Central College
                <div class="price" id="price2">
                   16000 LKR 
	<div id="price02">Due: 16000 LKR</div>
	</br><input type="button" class="button1" onclick="donate('product2')" value="Donate" />
                </div>

            </div>
        </div>

	<div class="product" id="product4" >
            <img  id="img3"  alt=" Speakers - 3000 LKR" src="images/sp.png"  width="275px" height="230px" onclick="modalimg(this.id)">
            <div class="description">
                Speakers</br>Ilakady A.M.T.M.V.
                <div class="price" id="price3">
                   3000 LKR  
	<div id="price03">Due: 3000 LKR</div>
	</br><input type="button" class="button1" onclick="donate('product3')" value="Donate"/>
                </div>
            </div>
        </div>

        <div  class="product" id="product3" >
            <img id="img4" alt=" Microphone - 5000 LKR" src="images/mic.png" width="200px" height="230px" onclick="modalimg(this.id)">
            <div class="description">
               Microphone</br>Hartley College
                <div class="price" id="price4">
                    5000 LKR  
	<div id="price01">Due: 5000 LKR</div>
	</br><input type="button" class="button1" onclick="donate('product4')" value="Donate"/>
                </div>
            </div>
</div>
        </div>

	<div id="myModal" class="modal">
  		<span class="close" onclick="closemodal()">&times;</span>
  		<img class="modal-content" id="img01">
  		
	<div id="caption"></div>

	</div>


<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						<form method="POST" id="f1">
							<img id="prSel" src="projector.png" width="300px" / >
										
							<label id="1">Name</label>
							
							<?php	
							echo "<input type=text class=form-control name=userName id=userName value=$_SESSION[session1] readonly />";
							?>
							<!-- <label id="2">E-mail</label>
								<input id="mail" type="email" class="form-control" name="mail" id="mail" required /> -->


						
							
						<label id="3" >Amount to donate</label>
							
								<input id="amount" type="number" class="form-control" name="amount" id="amount" value="" placeholder="LKR" required />
							
						<label id="4">Select your Card</label>
						<br/>
						<input id="card" type="radio"  name="card" id="card" value="Visa"  required />&nbsp &nbsp<label for="visa"><img src="images/visa.png" width="50px" /></label>&nbsp &nbsp &nbsp &nbsp
						<input id="card" type="radio"  name="card" id="card" value="American"  required />&nbsp &nbsp<label for="master"><img src="images/master.png" width="70px" /></label>&nbsp &nbsp &nbsp &nbsp
						<input id="card" type="radio"  name="card" id="card" value="Master"  required />&nbsp &nbsp<label for="am"><img src="images/american.png" width="70px" /></label>&nbsp &nbsp &nbsp &nbsp
						<br/>	
						<label id="5" >Credit Card No</label>
								<input id="t" type="number" class="form-control" name="t" id="t" value="" placeholder="" required />
						
							
						<label >Contact No</label>
							
								<input id="m" type="number" class="form-control" name="m" id="m" value="" placeholder="" required />
    							<br/>
			<input type="button" class="commonButton" onclick="submitDoctorData();" value="Donate" style="margin-left:150px">
		<input type="reset" class="commonButton" value="Reset" style="margin-left:300px;margin-top:-45px" ><br/><br/>
			
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