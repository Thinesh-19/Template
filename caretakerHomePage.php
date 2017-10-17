
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
    document.location=("userStats.php?popupUser="+userName);
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
#popupNotification{
            background-image: url("images/grey.jpg");
            padding: 20px;
            background-repeat: repeat;
            border-radius: 25px;
            width: 450px;
            margin-left: 60px
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
                              <!--   <li class="active"><a href="index.php">Home</a>
                                     <ul class="dropdown">
                                    
                               
                                </li> -->
                                <li><a href="#student">My Students</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="doctors-style1.html">Doctors Style One</a></li>
                                        <li><a href="doctors-style2.html">Doctors Style Two</a></li>
                                        <li><a href="doctor-details.html">Doctor Details</a></li>
                                    </ul> -->
                                </li>
                               <!--  <li><a href="#schedules">Schedule</a>
                                   
                                </li> -->
                                
                               
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
  <img src="images/caretaker1.png">
  </div>
  <div style="margin-left:700px;margin-top:-255px;width:800px">
    <img src="images/useredit.png" style="float:left">
     <h1 class="formText" name="firstname" id=firstname></h1>
<img src="images/footer/mobile.png" style="float:left">
       <h2 class="formText" name="mobileNo" id=mobileNo></h2>
       <img src="images/patient/email.png" style="float:left">
     <i> <h3 class="formText" name="emailId" id="emailId"></h3></i>
     <img src="images/patient/home.png" style="float:left">
     <h2 class="formText" name="address" id="address"></h2>
     <img src="images/patient/home.png" style="float:left">
     <h2 class="formText" name="degree" id="degree"></h2>
  </div>
</div>

    </Section>
    
     <script type="text/javascript">
          //Save current logged in user's username in to the javascript function
          var username=document.getElementById("hiddenSession").value;
          //caonnect with database
          var database=firebase.database();
          //Refer caretakers table
          var userRef=database.ref().child("Lecturer");
  
           userRef
              //Check the key with the current loggedin user's username
             .orderByKey()
             .startAt(username).endAt(username)
             .on("child_added", function(snapshot) {
                   var loginUser = snapshot.val();
                   //Write the fetched value into the browser
                   //Firstname
                   document.getElementById("firstname").innerHTML= snapshot.val().firstname+" "+ snapshot.val().lastname;
                   //Lastname
                  // document.getElementById("lastname").innerHTML=snapshot.val().lastname;
                   //Email
                   document.getElementById("emailId").innerHTML=snapshot.val().email;
                   
                    document.getElementById("mobileNo").innerHTML=snapshot.val().subject;
                     document.getElementById("address").innerHTML=snapshot.val().uniName;
                      document.getElementById("degree").innerHTML=snapshot.val().degree;
                                            
               
             }, function (errorObject) {
                //window.location.href = "loginError.php";
                alert("The read failed: " + errorObject.code);
            });


      </script>

  </div>


  <Section>
<div class="left">
  <center><h1><b>My <span style="color:#19baaa">Students</span></b></h1></center>
  <div id="patientDetails" style="margin-left:50px; margin-top:5px">
      
       
     </div>
     
     
     </div>

     </Section>

   <script type="text/javascript">


///////////////////////////////////////THIS IS THE CODE////////////////////////////////////////////////////////////////////////////////////////////


       //Save current logged in user's username in to the javascript function
          var username=document.getElementById("hiddenSession").value;
      //caonnect with database
          var database=firebase.database();
          //Refer Patient table to fetch assigned patient's table
                       var patientRef=database.ref().child("Student");

                       patientRef
                       //Grab the patients username where caretaker name is current loggedin user
                       .orderByChild("Lecturer")
                       .startAt(username) .endAt(username)
                       .on("value",function(snapshot){
                        //Count No of patients who assigned for the particular caretaker
                        var count=0;
                        //Iterate snapshot elements and increase count
                         snapshot.forEach(function() {
                          count++;

                        });
                         
                              //To print patients
                              var patientRef2=database.ref().child("Student");

                               patientRef2
                               //Grab the patients username where caretaker name is current loggedin user
                               .orderByChild("Lecturer")
                               .startAt(username) .endAt(username)
                               .on("child_added",function(snapshot){

                                   // senthu created the big div ~~~~~~~~~~~~~~~~
                                   // place this in the appropriate place
                                   var s = document.createElement("DIV");
                                   
                                  document.getElementById("patientDetails").appendChild(s);


                                 //Iterates until no of assigned patients
                                  for(var i=0;i<count;i++){
                                    //Create div
                                   var v = document.createElement("DIV");
                                   
                                   //creata a space elemet
                                   var space=document.createElement("nbsp");

                                   //append it into the patientDetails div
                                   document.getElementById("patientDetails").appendChild(space);
                                   s.appendChild(v);
                                   //Append div V into patient details div
                                   
                                  
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
                                 //document.getElementById("patientDetails").appendChild(s);
                                 

                                  


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

                                  //APPEND HTML TAGS INTO v DIV
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
                                   // v1.appendChild(br2);
                                    


                                  v1.style.marginLeft="250px";
                                  v1.style.marginTop="-10px";

                                   // s.style.display="inline-block";
                                   v.style.backgroundImage="url('images/grey.jpg')";
                                 
                                  v.style.width="500px";
                                  v.style.borderRadius="25px";
                                  v.style.padding="20px";
                                //  s.style.display="block";

                                   v.style.fontFamily="Montserrat";
                                   v.style.letterSpacing="0.4px";
                                   v.style.padding="auto";
                                   image.style.marginTop="-330px";
                                  // v.style.display="inline-block";
                                   //v.style.display="flex";
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
      <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
    <script>

        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCmvzi-bgRE_gsPxwKc2iHiMCuRxtCliYg",
            authDomain: "medphil-ffa76.firebaseapp.com",
            databaseURL: "https://medphil-ffa76.firebaseio.com",
            projectId: "medphil-ffa76",
            storageBucket: "medphil-ffa76.appspot.com",
            messagingSenderId: "706075479090"
        };
        firebase.initializeApp(config);

        // load db
        var db = firebase.database();

        // username of caretaker
        var user = "thinesh19" // get this from session -> hidden field

        // dosages tables
        var dosagesTable = db.ref('dosages/');

        // given notifications
        // feedback to the CareTaker

        // user's notification table will be stored here
        var userDosages = dosagesTable.child(user + '_dosage');

        // most recent notification is stored here
        var recentDosage;

        // most recent notification key is stored here
        var recentKey;

        // most recent dosage key is stored here

        // on notifications table update
        userDosages.on('value', function (snapshot) {

            // convert user notifications as json object
            jsonUserDosages = snapshot.toJSON();

            // for each object under user_notifications
            for (var id in jsonUserDosages) {

                // if object has key
                if (jsonUserDosages.hasOwnProperty(id)) {

                    // if key is not "created"
                    // ("created" key is just used when creating the user_dosage table)
                    // (otherwise the table cannot be created without no values inside)
                    if (!(id == "created")) {

                        // id is a primary key (auto generated by Firebase)

                        // assign this object, as the most recent notification
                        recentDosage = jsonUserDosages[id];

                        // assign the most recent key
                        recentKey = id;

                    }
                }
            }

            // if recent feedback is not seen
            if (!(recentDosage.hasOwnProperty('ct_seen'))) {

                // this is a new notification

                // show this notification to user
                notify(recentDosage['medicine'], recentDosage['name'], recentDosage['status'], recentDosage['time']);

            }


        });

        // notifies the user
        function notify(medicine, name, status, time) {

            var notificationText =
                "<b>" + medicine + " " + status + "</b> by " + name + "<br>" + time;


            // set notification text
            document.getElementById('popupNotification').innerHTML = "<p>" + notificationText +
                "</p><button class=commonButton onclick=dismiss('" + user + "')>Dismiss</button>";

        }

        // mark the latest notification as seen (dismiss)
        function dismiss(username) {

            // get old dosage object (old = before updating as seen)
            var oldDosage = recentDosage;

            // new object will have old object's values as well
            var newmedicine = oldDosage['medicine'];
            var newname = oldDosage['name'];
            var newstatus = oldDosage['status'];
            var newtime = oldDosage['time'];

            // new object to be overwritten with p_seen field in addition
            var newDosage = {
                medicine: newmedicine,
                name: newname,
                status: newstatus,
                time: newtime,
                ct_seen: 'true'
            };


            var updates = {};
            updates['/dosages/' + username + '_dosage/' + recentKey] = newDosage;

            // update with ct_seen field
            firebase.database().ref().update(updates);

            // clear notification text
            document.getElementById('popupNotification').innerHTML = "<p>No Notifications Available</p>";

        }


    </script>


     
<Section>
<div class="right">


<center><h1><b> <span style="color:#19baaa">Notification</span></b></h1></center>
<div id="popupNotification">
    <p>No Notifications Available</p>
</div>

</div>
</Section>


      
  









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
 -->          </div>
        </div>
      </div>
    </section>
    <!--Client Divider End-->
    <Section>

  <!-- Footer Start-->
  <footer class="footer-section">
    <div class="container">
      <div class="row go_pt fo_pb">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="footer-widget" style="margin-left:-70px">
            <a href="#" class="footer-logo"><img src="images/capture.PNG" alt="" ></a>
            <p>We value your feedback and it will help us to improve our service in futere. Please contact us</p>
            <div class="widget-contact" >
              <p><img src="images/footer/house.png">&nbsp; &nbsp;&nbsp;23,Arethusa Lane,Colombo</p>
              <p><img src="images/footer/gmail.png">&nbsp; &nbsp;&nbsp;Web_Ex@gmail.com</p>
              <p><img src="images/footer/mobile.png">&nbsp; &nbsp;&nbsp;(+94) 754 014629</p>
            </div>
            <ul class="social-icons">
              <li><a href="#"><img src="images/footer/fb.png"></a></li>
              <li><a href="#"><img src="images/footer/twitter.png"></i></a></li>
              
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
              <li><img src="images/footer/arrow.png"><a href="#">Choosing a doctor</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Primary medical care</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Discuss your doctor</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Client User Account</a></li>
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
              <li><img src="images/footer/arrow.png"><a href="#">Emergency Care</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Operation Theater</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Medical Checkup</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Ddiagnostic center</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Outdoor Checkup</a></li>
              <li><img src="images/footer/arrow.png"><a href="#">Pharmacy Service</a></li>
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
                  <p class="title"><a href="#blog">Improving Adherence With Artifical Intelligence</a></p>
                  <div class="meta-date">29 Feb 2017</div>
                </div>
              </div>
              <div class="widget-news-post">
                <div class="thumb">
                  <img src="images/blog/s2.jpg" alt="">
                </div>
                <div class="content">
                  <p class="title"><a href="#blog">World Health Day-Diabetes</a></p>
                  <div class="meta-date">04 Apr 2017</div>
                </div>
              </div>
              <div class="widget-news-post">
                <div class="thumb">
                  <img src="images/blog/s3.jpg" alt="">
                </div>
                <div class="content">
                  <p class="title"><a href="#blog">Don't Forget To Care For The Family Caregiver</a></p>
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
            <p class="copy-right">� Copyright 2017 - <a href="https://themeforest.net/user/icute_theme/portfolio" target="_blank">Web_Ex </a>| all right reserved <a href="https://themeforest.net/checkout/25548483/create_account" class="tf-buy-now" target="_blank"> Buy now </a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer end-->

    <!--wrapper end-->

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