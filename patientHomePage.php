<?php

// temp
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">


    <title>Web Edu | Online Education System</title>
    <!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    
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
</script>

    <!-- Theme Page Title -->
     <?php
     echo "<input type=hidden name=hiddenSession id=hiddenSession  value=$_SESSION[session1]>";
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

        .right {
            width: 50%;
            float: right;
            background: white;

        }

        .left {
            width: 50%;
            float: left;
            background: white;
            overflow: hidden;
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        //Save session variable in the javascript variable


        ////////////////////// HAVE TO DO//////////////////////////////////////////

        
                // username of the user
        var user = document.getElementById('hiddenSession').value;

         // used to count taken / not taken dosages
        var takenCount = 0;
        var notTakenCount = 0;


        
        // load db
        var db = firebase.database();

        // dosages tables
        var dosagesTable = db.ref('dosages/');

        // user's dosage table will be stored here
        var userDosages = dosagesTable.child(user + '_dosage');

        //RETRIEVE STATUS FOR THE PATICULAR PATIENT

        // sync user_dosages table
        userDosages.on('value', function (snapshot) {

            // update all dosage statuses

            // assign for re-usability
            var jsonUserDosages = snapshot.toJSON();

            // for each user_dosage object
            for (var id in jsonUserDosages) {

                // if object has key
                if (jsonUserDosages.hasOwnProperty(id)) {

                    // if key is not "created"
                    // ("created" key is just used when creating the user_dosage table)
                    // (otherwise the table cannot be created without no values inside)
                    if (!(id == "created")) {

                        // id is a primary key

                        // compare the status
                        if (jsonUserDosages[id]['status'] == "TAKEN") {
                            takenCount++;
                        } else {
                            notTakenCount++;
                        }

        

                    }


                }

            }

 //alert(notTakenCount);
         google.charts.load('current', {'packages': ['corechart']});
         google.charts.setOnLoadCallback(drawChart);
         function drawChart() {
   



            var data = google.visualization.arrayToDataTable([

                ['Task', 'Hours per Day'],

                ['Not Taken', notTakenCount], //NotTakenCount
                ['Taken', takenCount] //Taken Count


            ]);

            var options = {
                title: 'Panadol'
            };

           var chart = new google.visualization.PieChart(document.getElementById('piechart'));
           chart.draw(data, options);
        }
  

            

  });

       
        //IF status==taken then var takenCount++; // DONE
        //else if status ==not taken then not-taken count++ // DONE


       
       
       
      
    </script>
     
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


      //   var username= document.getElementById('hiddenSession').value;

        // load db
        var db = firebase.database();

        // username of patient
        var user =document.getElementById('hiddenSession').value;
         // get this from session -> hidden field

        // notifications tables
        var notificationsTable = db.ref('notifications/');

        // given notifications
        // dosage reminder (notification or notification + refill warning) to the Patient

        // user's notification table will be stored here
        var userNotifications = notificationsTable.child(user + '_notifications');

        // most recent notification is stored here
        var recentNotification;

        // most recent notification key is stored here
        var recentKey;

        // on notifications table update
        userNotifications.on('value', function (snapshot) {

            // convert user notifications as json object
            jsonUserNotifications = snapshot.toJSON();

            // for each object under user_notifications
            for (var id in jsonUserNotifications) {

                // if object has key
                if (jsonUserNotifications.hasOwnProperty(id)) {

                    // if key is not "created"
                    // ("created" key is just used when creating the user_dosage table)
                    // (otherwise the table cannot be created without no values inside)
                    if (!(id == "created")) {

                        // id is a primary key (auto generated by Firebase)

                        // assign this object, as the most recent notification
                        recentNotification = jsonUserNotifications[id];

                        // most recent key
                        recentKey = id;

                    }
                }
            }

            // if recent notification is not seen
            if (!(recentNotification.hasOwnProperty('p_seen'))) {

                // this is a new notification

                // show this notification to user
                notify(recentNotification['alert'], recentNotification['amount'], recentNotification['bottleId'], recentNotification['medicine']);

            }


        });

        // notifies the user
        function notify(alert, amount, bottleId, medicine) {

            var notificationText =
             
                "Take Pills!<br><b>" + amount + " " + medicine + "</b> from Bottle ID : " + bottleId + "";

            // if this is a refill alert
            if (alert == "Refill") {
                notificationText = notificationText + "<br><b>Please make sure to refill!</b>";
            }



            // set notification text
            document.getElementById('popupNotification').innerHTML = "<p>" + notificationText +
                "</p><button class=commonButton onclick=dismiss('" + user + "')>Dismiss</button>";

        }

        // mark the latest notification as seen (dismiss)
        function dismiss(username) {

            // get old notification object (old = before updating as seen)
            var oldNotification = recentNotification;

            // new object will have old object's values as well
            var newalert = oldNotification['alert'];
            var newamount = oldNotification['amount'];
            var newbottleId = oldNotification['bottleId'];
            var newmedicine = oldNotification['medicine'];

            // new object to be overwritten with p_seen field in addition
            var newNotification = {
                alert: newalert,
                amount: newamount,
                bottleId: newbottleId,
                medicine: newmedicine,
                p_seen: 'true'
            };


            var updates = {};
            updates['/notifications/' + username + '_notifications/' + recentKey] = newNotification;

            // update with p_seen field
            firebase.database().ref().update(updates);

            // clear notification text
            document.getElementById('popupNotification').innerHTML = "<p>No Notifications Available</p>";

        }

    </script>

</head>



    
    

</head>

<body>


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
                        <a class="logo" href="index.php"><img src="images/capture.PNG" alt="Logo" title="Education"></a>
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
                                        <li><a href="qa.php">Ask Questions</a></li>
                                        <li><a href="blog-style2.html">Answer Questions</a></li>
                                        
                                    </ul> 
                                </li>
                                <li><a href="equip.php">Equipments</a></li>
                                <li><a href="#about-us">About Us</a></li>
                                    <li><a href="#premium">Premium Services</a>
                                     <ul class="dropdown">
                                        <li><a href="1 2 1">one to one session</a></li>
                                        <li><a href="lec videos">Premium Lecture videos</a></li>
                                        <li><a href="1 2 1">International exam notes</a></li>
                                    
                                
                            </ul>

                            <div class="appoint-inner">
                                <div class="appoint-btn text-right"> 
                              <ul>
		                    <!-- <div class="appoint-inner">
		                        <div class="appoint-btn text-right">
		                            <a href="#footer">Contact Us</a>
		                        </div>
		                    </div> -->
						</nav>
                    </div>
                    <div class="mega-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav id="menuzord" class="menuzord menuzord-responsive">
                            <ul class="menuzord-menu">
                                <!-- <li class="active"><a href="index.php">Home</a>
                                     <ul class="dropdown">


                                </li>
                                <li><a href="#patient">My Patients</a> -->
                                    <!-- <ul class="dropdown">
                                        <li><a href="doctors-style1.html">Doctors Style One</a></li>
                                        <li><a href="doctors-style2.html">Doctors Style Two</a></li>
                                        <li><a href="doctor-details.html">Doctor Details</a></li>
                                    </ul> -->
                               <!--  </li>
                                <li><a href="#schedules">Schedule</a>

                                </li> -->


                            </ul>

                            <div class="appoint-inner">
                                <div class="appoint-btn text-right" style="margin-top:-60px">
                                    <ul>

                                        <!-- <li>  <img src="images/useredit.png" style="float:left;margin-left:750px;margin-top:2px"></li> -->
                                        <?php
                                        echo "<li> <h3 style='color:white;margin-top:10px'>$_SESSION[session1]</h3></li>";
                                        ?>
                                        <li><a href="logout.php"
                                               style="float:right; margin-top:-45px;margin-right:-125px"><img
                                                        src="images/35log.png"></a></li>
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
                <img src="images/teacherstudent.jpg" style="height:330px">
            </div>

            <div style="margin-left:650px;margin-top:-255px;width:800px">
                <img src="images/patient/patients.png" style="float:left">

                <h1 class="formText" name="firstname" id=firstname></h1>
                <img src="images/patient/email.png" style="float:left">
                <i><h3 class="formText" name="emailId" id="emailId"></h3></i>
                <img src="images/patient/home.png" style="float:left">
                <h3 class="formText" name="address" id="address"></h3>
                <img src="images/patient/caretaker.png" style="float:left">
                <h3 class="formText" name="careTakerName" id="careTakerName"></h3>

            </div>
        </div>
        <!-- MAKE DATABASE CONNECTION WITH FIREBASE -->


        <script type="text/javascript">
            //Save session variable in the javascript variable
            var username = document.getElementById("hiddenSession").value;


            var database = firebase.database();
            //Refer patient node

            var userRef = database.ref().child("Student");

            userRef
                .orderByKey()
                .startAt(username).endAt(username)
                .on("child_added", function (snapshot) {
                    var loginUser = snapshot.val();
                    console.log(snapshot.val().caretaker);
                    document.getElementById("firstname").innerHTML = snapshot.val().firstname + " " + snapshot.val().lastname;
                    //document.getElementById("lastname").innerHTML=snapshot.val().lastname;
                    document.getElementById("emailId").innerHTML = snapshot.val().email;
                    document.getElementById("address").innerHTML = snapshot.val().address;
                    document.getElementById("careTakerName").innerHTML = snapshot.val().caretaker;
                    // document.getElementById("doctorName").innerHTML=snapshot.val().doctor;

                }, function (errorObject) {
                    //window.location.href = "loginError.php";
                    alert("The read failed: " + errorObject.code);
                });
        </script>

    </Section>


</div>


<Section>
    <div class="left" id="patient">
        <center><h1><b>Student <span style="color:#19baaa">Details</span></b></h1></center>
        <div id="patientDetails" style="margin-left:50px; margin-top:5px">


            <br/>

          <!--   <table id=myTable>
                <tr>
                    <!-- MEDICINE NAME -->
                    <!-- <th class="formText">MedicineName</th> -->
                    <!-- DOSAGE GAP -->
                    <!-- <th class="formText">dosageGap</th> -->

                    <!-- BOTTLE ID -->
                    <!-- <th class="formText">Bottle Id</th>

                </tr>


                <tr>
                    <td class="formText" id="MedicineName"></td>
                    <td class="formText" id="dosageGap"></td>


                    <td class="formText" id="bottleId"></td>
 -->
                <!-- </tr> --> 


                <!-- <script type="text/javascript">
                    //Save session variable in the javascript variable
                    var username = document.getElementById("hiddenSession").value;


                    var database = firebase.database();

                    var userRef = database.ref().child("bottles");

                    userRef
                    //Select patient node
                        .orderByChild("patient")
                        //WHERE username==selected user's username
                        .startAt(username).endAt(username)
                        .on("child_added", function (snapshot) {
                            var loginUser = snapshot.val();
                            console.log(snapshot.val().caretaker);
                            //Write Medicine name in the a specific row
                            document.getElementById("MedicineName").innerHTML = snapshot.val().medicine;
                            //Write Dosage gap in the a specific row
                            document.getElementById("dosageGap").innerHTML = snapshot.val().dosagegap;
                            //Write Bottle Id in the a specific row
                            document.getElementById("bottleId").innerHTML = snapshot.key;


                        }, function (errorObject) {
                            //window.location.href = "loginError.php";
                            alert("The read failed: " + errorObject.code);
                        });


                </script>
 -->
                <script type="text/javascript">
        //Save session variable in the javascript variable
                    var username = document.getElementById("hiddenSession").value;

      //caonnect with database
          var database=firebase.database();
          //Refer Patient table to fetch assigned patient's table
                        var userRef = database.ref().child("bottles");


                       userRef
                       //Grab the patients username where caretaker name is current loggedin user
                       .orderByChild("patient")
                       .startAt(username) .endAt(username)
                       .on("value",function(snapshot){
                        //Count No of patients who assigned for the particular caretaker
                        var count=0;
                        //Iterate snapshot elements and increase count
                         snapshot.forEach(function() {
                          count++;

                        });
                         
                              //To print patients
                              var patientRef2=database.ref().child("bottles");

                               patientRef2
                               //Grab the patients username where caretaker name is current loggedin user
                               .orderByChild("patient")
                               .startAt(username) .endAt(username)
                               .on("child_added",function(snapshot){
                                  

                                 //Iterates until no of assigned patients
                                  for(var i=0;i<count;i++){
                                    //Create div
                                   var v = document.createElement("DIV");
                                   //creata a space elemet
                                   
                                   //Append div V into patient details div
                                   document.getElementById("patientDetails").appendChild(v);
                                  
                                  //Create breakpoint
                                   var breakpoint=document.createElement("BR");
                                                                     //create image tag
                                   var image=document.createElement("IMG");
                                    //Set attributes for images
                                    image.setAttribute("src", "images/pills.png");
                                   // image.setAttribute("class", "photo");
                                    image.setAttribute("width","150px");

                                    image.setAttribute("alt", "Frame");
                                    //append breakpoint into patientdetails div
                                    document.getElementById("patientDetails").appendChild(breakpoint);

                                   
                                  }
                                  //Display assigned patient's username in the <a> tag
                                  // var t=document.createTextNode(snapshot.key);

                                 //  v.appendChild(t);
                                  v.appendChild(image);

                                  


                                    for(var i=0;i<count;i++){
                                     var v1 = document.createElement("DIV");

                                       //Append div v into div details
                                      // document.getElementById("details").appendChild(v1);
                                      v.appendChild(v1);
                                       v1.setAttribute("name","patient");
                                       
                                       // var btn=document.createElement("button");
                                       // //give class name
                                       // btn.setAttribute("class","commonButton");
                                       // //give name
                                       // btn.setAttribute("name",snapshot.key);

                                        
                                  }     

                                  //Give onclick function as myFunction()
                                       // btn.onclick=function(){
                                       //    myFuntion(snapshot.key);
                                       // }
                                       //Firstname text                                 
                                  var firstnametxt=document.createTextNode("Medicine Name:");
                                  
                                  //Patients firstname
                                  var firstname=document.createTextNode(snapshot.val().medicine);
                                  //Create break tags
                                  var br=document.createElement("BR");
                                  var br1=document.createElement("BR");
                                  var br2=document.createElement("BR");
                                  var br3=document.createElement("BR");
                                  var br4=document.createElement("BR");
                                  var br5=document.createElement("BR");
                                  var br6=document.createElement("BR");
                                  var br7=document.createElement("BR");
                                  var am=document.createElement("BR");
                                 
                                   // var br9=document.createElement("BR");
                                   //Lastname text
                                   var lastnametxt=document.createTextNode("Dosage Time:");
                                   var lastname=document.createTextNode(snapshot.val().dosagegap);
                                   var amounttxt=document.createTextNode("Pill amount:");

                                   var amount=document.createTextNode(snapshot.val().amount);

                                   var emailtxt=document.createTextNode("bottle Id:");
                                   var email=document.createTextNode(snapshot.key);
                                   //Set text for button
                                   //var btnTxt=document.createTextNode("CheckProfile");
                                   //Append the txt into button
                                  // btn.appendChild(btnTxt);

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
                                   v1.appendChild(am);
                                   v1.appendChild(amounttxt);
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.innerHTML+=' ';
                                   v1.appendChild(amount);
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
                                
                                   // v1.appendChild(btn);
                                    v1.appendChild(br2);
                                    


                                  v1.style.marginLeft="200px";
                                  v1.style.marginTop="30px";
                                    
                                   v.style.backgroundImage="url('images/grey.jpg')";
                                 
                                  v.style.width="450px";
                                  v.style.borderRadius="25px";
                                  v.style.padding="20px";

                                   v.style.fontFamily="Montserrat";
                                   v.style.letterSpacing="0.4px";
                                   v.style.padding="auto";
                                   image.style.marginTop="-290px";
                                   image.style.marginLeft="5px";
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
     


            
            <br/>

            <!-- Create button to return caretaker page -->
           <!--  <input type="button" class="commonButton" value="Back To My Profile"
                   onclick="document.location.href='doctorHomePage.php'"> -->
        </div>
 <!-- Create button to return caretaker page -->
            <!-- <input type="button" class="commonButton" value="Back To My Profile"
                   onclick="document.location.href='doctorHomePage.php'" style="margin-left:210px"> -->
    


    </div>
    </div>
    <div class="right" id="schedules">

        <center><h1><b>Students <span style="color:#19baaa">Stats</span></b></h1></center>

       


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
-->                    </div>
        </div>
    </div>
</section>

<center><h1><b> <span style="color:#19baaa;margin-left:-800px">Notifications</span></b></h1></center>
<div id="popupNotification">
    <p>No Notifications Available</p>
</div>
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