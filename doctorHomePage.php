
<!DOCTYPE html>
<html lang="en">
<head>
<?php

// temp
session_start();

// $_SESSION["session1"] = "senthu16";

?>
<!-- Meta Tags -->
<meta charset="UTF-8">

<!-- Theme Page Title -->
<title>Web Edu | Online Education System</title>
<?php
  echo"<script src=https://cdn.firebase.com/js/client/2.2.1/firebase.js></script>";
 echo"<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>";
 ?>

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

<script>
//Fuction to display pop up
function myFuntion(userName){
    var c;

    // pass as a get request
    document.location=("patientStats.php?popupUser="+userName);
    //document.location=("index.php");
}

function editSchedule(userName,hospitalName){
    //var c;

    // pass as a get request
    document.location=("editSchedule.php?hospitalName="+hospitalName);
    //document.location=("index.php");
}



</script>

<style type="text/css">
	#rcorners3 {
/*   border-radius: 25px;*/
    /*background-color: grey;*/
    background-image: url("images/glass.jpg");
    background-position: left top;
    background-repeat: repeat;
    padding: 20px; 
    width: 1500px;
    height: 350px;
/*    margin-left: 250px;*/  
     
}
.right{
 width:50%;
 float:right;
 background:white;

}
.left{
 width:50%;
 float: left;
 background:white;
 overflow:hidden;
}
</style>
</head>

<body>
 <?php
		

    // creating for getting the current username for popup
    $popupUser;
    //session_start();
	?>

  <?php
  echo"<input type=hidden name=hiddenSession id=hiddenSession  value=$_SESSION[session1]>";
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
</script>

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
	                    <a class="logo" href="index.php"><img src="images/capture.PNG" alt="Logo" title="Medical"></a>
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-12 header-top-widget headerwidget-style2">
                        <div class="header-widget">
                        	<div class="iconbox-widget">
                          
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
                                    <!-- <ul class="dropdown">
                                        <li>
                                        	<a href="javascript:void(0)">Home Multipage</a>
                                        	<ul class="dropdown">
		                                        <li><a href="index.html">Home Style One</a></li>
		                                        <li><a href="index-2.html">Home Style Two</a></li>
		                                    </ul>
                                        </li>
                                        <li>
                                        	<a href="javascript:void(0)">Home Singlepage</a>
                                        	<ul class="dropdown">
		                                        <li><a href="index-sp1.html">Home Style One</a></li>
		                                        <li><a href="index-sp2.html">Home Style Two</a></li>
		                                    </ul>
                                        </li>
                                        <li>
                                        	<a href="javascript:void(0)">Home Boxed</a>
                                        	<ul class="dropdown">
		                                        <li><a href="index-bx-mp1.html">Multipage One</a></li>
		                                        <li><a href="index-bx-mp2.html">Multipage Two</a></li>
		                                        <li><a href="index-bx-sp1.html">Singlepage One</a></li>
		                                        <li><a href="index-bx-sp2.html">Singlepage Two</a></li>
		                                    </ul>
                                        </li>
                                    </ul> -->
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
                                <li><a href="equip.php">Equipments</a></li>
                                <li><a href="#about-us">About Us</a></li>
							</ul>

		                    <div class="appoint-inner">
		                        <div class="appoint-btn text-right"> 
                              <ul>

                          <!-- <li>  <img src="images/useredit.png" style="float:left;margin-left:750px;margin-top:2px"></li> -->
                            <?php
                          echo"<li> <h4 style='color:white;margin-top:10px'>$_SESSION[session1]</h4></li>";
                            ?>
                            <li> <a href="logout.php" style="float:right; margin-top:-40px;margin-right:-105px"><img src="images/30.png"  ></a></li>
                            </ul>
		                           
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


				<!--Feature Section End-->

		<Section>			
<div id=rcorners3>
	<div>
	<img src="images/doctors/doctor.png">
	</div>
	<div style="margin-left:700px;margin-top:-255px;width:800px">
		 <h1 class="formText" name="firstname" id=firstname></h1>
		  <h2 >Donar</h2>
		 <i> <h3 class="formText" name="emailId" id="emailId"></h3></i>
	</div>
</div>

		</Section>
		
		 <script type="text/javascript">
          //Save current logged in user's username in to the javascript function
          var username=document.getElementById("hiddenSession").value;
          //caonnect with database
          var database=firebase.database();
          //Refer caretakers table
          var userRef=database.ref().child("doctors");
  
           userRef
              //Check the key with the current loggedin user's username
             .orderByKey()
             .startAt(username).endAt(username)
             .on("child_added", function(snapshot) {
                   var loginUser = snapshot.val();
                   //Write the fetched value into the browser
                   //Firstname
                   document.getElementById("firstname").innerHTML="Dr."+ snapshot.val().firstname+" "+ snapshot.val().lastname;
                   //Lastname
                  // document.getElementById("lastname").innerHTML=snapshot.val().lastname;
                   //Email
                   document.getElementById("emailId").innerHTML=snapshot.val().email;
                   
                   
                                            
               
             }, function (errorObject) {
                //window.location.href = "loginError.php";
                alert("The read failed: " + errorObject.code);
            });


      </script>

	</div>


	<Section>
<div  class="left" id="patient">
	<center><h1><b>My <span style="color:#19baaa">Donation Details</span></b></h1></center>
	<div id="patientDetails" style="margin-left:50px; margin-top:5px">
      
       
     </div>
     </div>
     <div  class="right" id="schedules">
	<center><h1><b>My <span style="color:#19baaa">Schedule</span></b></h1></center><br><br>
	<div id="schedule" style="margin-left:250px;margin-top:-25px">
	</div>
     </div>

     </Section>
	 <script type="text/javascript">
       //Save current logged in user's username in to the javascript function
          var username=document.getElementById("hiddenSession").value;
      //caonnect with database
          var database=firebase.database();
          //Refer Patient table to fetch assigned patient's table
                       var patientRef=database.ref().child("patients");

                       patientRef
                       //Grab the patients username where caretaker name is current loggedin user
                       .orderByChild("doctor")
                       .startAt(username) .endAt(username)
                       .on("value",function(snapshot){
                        //Count No of patients who assigned for the particular caretaker
                        var count=0;
                        //Iterate snapshot elements and increase count
                         snapshot.forEach(function() {
                          count++;

                        });
                         
                              //To print patients
                              var patientRef2=database.ref().child("patients");

                               patientRef2
                               //Grab the patients username where caretaker name is current loggedin user
                               .orderByChild("doctor")
                               .startAt(username) .endAt(username)
                               .on("child_added",function(snapshot){
                                  

                                 //Iterates until no of assigned patients
                                  for(var i=0;i<count;i++){
                                    //Create div
                                   var v = document.createElement("DIV");
                                   //creata a space elemet
                                   var space=document.createElement("nbsp");
                                   //append it into the patientDetails div
                                   document.getElementById("patientDetails").appendChild(space);
                                   //Append div V into patient details div
                                   document.getElementById("patientDetails").appendChild(v);
                                  
                                  //Create breakpoint
                                   var breakpoint=document.createElement("BR");
                                                                     //create image tag
                                   var image=document.createElement("IMG");
                                    //Set attributes for images
                                    image.setAttribute("src", "images/patient-icon.png");
                                   // image.setAttribute("class", "photo");
                                    image.setAttribute("width","130px");

                                    image.setAttribute("alt", "Frame");
                                    //append breakpoint into patientdetails div
                                    document.getElementById("patientDetails").appendChild(breakpoint);

                                   
                                  }
                                  //Display assigned patient's username in the <a> tag
                                   var t=document.createTextNode(snapshot.key);

                                   v.appendChild(t);
                                  v.appendChild(image);

                                  


                                    for(var i=0;i<count;i++){
                                     var v1 = document.createElement("DIV");

                                       //Append div v into div details
                                      // document.getElementById("details").appendChild(v1);
                                      v.appendChild(v1);
                                       v1.setAttribute("name","patient");
                                       
                                       var btn=document.createElement("button");
                                       //give class name
                                       btn.setAttribute("class","commonButton");
                                       //give name
                                       btn.setAttribute("name",snapshot.key);

                                        
                                  }     

                                  //Give onclick function as myFunction()
                                       btn.onclick=function(){
                                          myFuntion(snapshot.key);
                                       }
                                       //Firstname text                                 
                                  var firstnametxt=document.createTextNode("Firstname:");
                                  
                                  //Patients firstname
                                  var firstname=document.createTextNode(snapshot.val().firstname);
                                  //Create break tags
                                  var br=document.createElement("BR");
                                  var br1=document.createElement("BR");
                                  var br2=document.createElement("BR");
                                  var br3=document.createElement("BR");
                                  var br4=document.createElement("BR");
                                  var br5=document.createElement("BR");
                                  var br6=document.createElement("BR");
                                  var br7=document.createElement("BR");
                                 
                                   // var br9=document.createElement("BR");
                                   //Lastname text
                                   var lastnametxt=document.createTextNode("Lastname:");
                                   var lastname=document.createTextNode(snapshot.val().lastname);

                                   var emailtxt=document.createTextNode("Email Id:");
                                   var email=document.createTextNode(snapshot.val().email);
                                   //Set text for button
                                   var btnTxt=document.createTextNode("CheckProfile");
                                   //Append the txt into button
                                   btn.appendChild(btnTxt);

            7                      //APPEND HTML TAGS INTO v DIV
                                   v1.appendChild(firstnametxt);
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   // v.appendChild(space1);
                                   // v.appendChild(space2);
                                   v1.appendChild(firstname);
                                   v1.appendChild(br);
                                   v1.appendChild(lastnametxt);
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.appendChild(lastname);
                                   v1.appendChild(br1);
                                   v1.appendChild(emailtxt);
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';

                                   v1.appendChild(email);
                                   v1.appendChild(br6);
                                   v1.appendChild(br7);
                                
                                    v1.appendChild(btn);
                                    v1.appendChild(br2);
                                    


                                  v1.style.marginLeft="250px";
                                  v1.style.marginTop="-10px";
                                    
                                   v.style.backgroundImage="url('images/grey.jpg')";
                                 
                              		v.style.width="500px";
                              		v.style.borderRadius="25px";
                              		v.style.padding="20px";

                                   v.style.fontFamily="Montserrat";
                                   v.style.letterSpacing="0.4px";
                                   v.style.padding="auto";
                                   image.style.marginTop="-280px";
                                  // v.style.marginLeft="90px";
                                  // image.style.marginLeft="60px";
                                   
                                  document.getElementById("patientDetails").appendChild(image);

                                 
                               },function(errorObject){
                                alert("The read failed: " + errorObject.code);
                               });

                       },function(errorObject){
                        alert("The read failed: " + errorObject.code);
                       });
                     

      </script>
     



       <script type="text/javascript">
          //Save current logged in user's username in to the javascript function
          var username=document.getElementById("hiddenSession").value;
          //caonnect with database
          var database=firebase.database();
                    //Refer Patient table to fetch assigned patient's table
                       var hospitalRef=database.ref().child("doctorHospitals");

                       hospitalRef
                       //Grab the patients username where caretaker name is current loggedin user
                       .orderByChild("username")
                       .startAt(username) .endAt(username)
                       .on("value",function(snapshot){
                        //Count No of patients who assigned for the particular caretaker
                        var hospitalCount=0;
                        //Iterate snapshot elements and increase count
                         snapshot.forEach(function() {
                          hospitalCount++;

                        });

                         var hospitalDetailsRef=database.ref().child("doctorHospitals");
                         hospitalDetailsRef
                         .orderByChild("username")
                         .startAt(username).endAt(username)
                         .on("child_added",function(snapshot){

                          for(var i=0;i<hospitalCount;i++){
                            var hospitalName=document.createElement("A");
                            var breakpoint=document.createElement("BR");
                            var hospitalAddress=document.createElement("A");
                            var breakpoint1=document.createElement("BR");
                            var hospitalTelNo=document.createElement("A");
                            var breakpoint2=document.createElement("BR");
                            var visitingTime=document.createElement("A");
                            var breakpoint3=document.createElement("BR");
                           var breakpoint4=document.createElement("BR");
                            var breakpoint5=document.createElement("BR");
                            var div=document.createElement("DIV");
                          //  var editLink=document.createElement("A");
                           // editLink.link("index.php");
                            //var time=document.createElement("A");
                            var editLink=document.createElement("A");
                            editLink.setAttribute('id','edit');
                            editLink.setAttribute('class','navBarUpperText');
                            editLink.innerHTML="edit";
                            div.appendChild(editLink);
                            // editLink.onclick=function(){
                            //               editSchedule(userName,document.getElementById('hospitalName').value);
                            //            }
                            //var hosName=document.getElementById('hospitalName').value;
                            var url="editSchedule.php?hospitalName="+snapshot.val().hospitalName;
                            editLink.setAttribute("href",url);

                            // <a class="navBarUpperText"  style="text-decoration:none;color: #19baaa;" href="addMoreSchedule.php">Edit</a>

                          }
                          //Give onclick function as myFunction()
                                       


                          schedule.appendChild(div);
                          schedule.appendChild(visitingTime);

                          schedule.appendChild(hospitalName);
                          schedule.appendChild(breakpoint);
                          schedule.appendChild(hospitalAddress);
                          schedule.appendChild(breakpoint1);
                          schedule.appendChild(hospitalTelNo);
                          schedule.appendChild(breakpoint2);
                          
                          //div.appendChild(editLink);
                          schedule.appendChild(breakpoint3);
                          //schedule.appendChild(time);
                          schedule.appendChild(breakpoint4);
                          schedule.appendChild(breakpoint5);
                          hospitalName.innerHTML=snapshot.val().hospitalName;
                          hospitalAddress.innerHTML=snapshot.val().hospitalAddress;
                          hospitalTelNo.innerHTML=snapshot.val().hospitalTelNo;
                          visitingTime.innerHTML=snapshot.val().visitingTime;

                          hospitalName.style.fontSize="25px";

                          visitingTime.style.marginTop="10px";
                          visitingTime.style.marginLeft="-170px";
                          hospitalName.style.marginLeft="100px";
                         // schedule.style.marginTop="50px";
                          //visitingTime.style.marginLeft="450px";
                          visitingTime.style.fontSize="25px";
                          visitingTime.style.color="#19baaa";
                          editLink.style.marginLeft="360px";
                          editLink.style.color="#19baaa";
                         // editLink.style.marginTop="7890px";







                         },function(errorObject){
                        alert("The read failed: " + errorObject.code);
                       });


                          },function(errorObject){
                        alert("The read failed: " + errorObject.code);
                       });
      
      </script>

      
     
  
   <br>

    
    <a class="navBarUpperText"  style="text-decoration:none;color: #19baaa;margin-left:100px" href="addMoreSchedule.php">AddMore</a>
    <!-- <a class="navBarUpperText"  style="text-decoration:none;color: #19baaa;" href="addMoreSchedule.php">Edit</a> -->
    
     
   </div>

	









	<!--Main Content end-->
	<!--Client Divider Start-->
		<section style="color:white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <div class="client-slider owlnav-true owl-nav3">
							<a href="#"><img src="images/client/1.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/2.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/3.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/4.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/5.png" alt="client-logo"></a>
							<a href="#"><img src="images/client/6.png" alt="client-logo"></a>
						</div>
 -->					</div>
				</div>
			</div>
		</section>
		<!--Client Divider End-->
		<Section>

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