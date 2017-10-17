<?php

// temp
session_start();


// $_SESSION["session1"] = "senthu16";

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">


    <title>MedPhil | Smart Pill Holder</title>
    <!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
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

    </script>

    <!-- Theme Page Title -->
    <?php
    echo "<input type=hidden name=hiddenSession id=hiddenSession  value=".$_GET['popupUser'].">";
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
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        //Save session variable in the javascript variable


        ////////////////////// HAVE TO DO//////////////////////////////////////////

        // Senthu did some parts ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
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
                        <a class="logo" href="index.php"><img src="images/logo.png" alt="Logo" title="Medical"></a>
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
                                    <!-- <ul class="dropdown">-->


                                </li>
                                <li><a href="#patient">My Patients</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="doctors-style1.html">Doctors Style One</a></li>
                                        <li><a href="doctors-style2.html">Doctors Style Two</a></li>
                                        <li><a href="doctor-details.html">Doctor Details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#schedules">Schedule</a>

                                </li>


                            </ul>

                            <div class="appoint-inner">
                                <div class="appoint-btn text-right">
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
                <img src="images/doctorPatient.png">
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

            var userRef = database.ref().child("patients");

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
        <center><h1><b>Medical <span style="color:#19baaa">Details</span></b></h1></center>
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
                                 
                                   // var br9=document.createElement("BR");
                                   //Lastname text
                                   var lastnametxt=document.createTextNode("Dosage Time:");
                                   var lastname=document.createTextNode(snapshot.val().dosagegap);

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
            <input type="button" class="commonButton" value="Back To My Profile"
                   onclick="document.location.href='doctorHomePage.php'" style="margin-left:210px">

    </div>
    </div>
    <div class="right" id="schedules">

        <center><h1><b>Medical <span style="color:#19baaa">Stats</span></b></h1></center>

        <div id="piechart" style="width: 900px; height: 500px;"></div>


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
<!--Client Divider End-->
<Section>

    <!-- Footer Start-->
    <footer class="footer-section">
        <div class="container">
            <div class="row go_pt fo_pb">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget" style="margin-left:-70px">
                        <a href="#" class="footer-logo"><img src="images/logo.png" alt=""></a>
                        <p>We value your feedback and it will help us to improve our service in futere. Please contact
                            us</p>
                        <div class="widget-contact">
                            <p><img src="images/footer/house.png">&nbsp; &nbsp;&nbsp;32,Madangawatte Road,Colombo</p>
                            <p><img src="images/footer/gmail.png">&nbsp; &nbsp;&nbsp;teammedphil@gmail.com</p>
                            <p><img src="images/footer/mobile.png">&nbsp; &nbsp;&nbsp;(+94) 757 875887</p>
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
                                    <p class="title"><a href="#blog">Improving Adherence With Artifical Intelligence</a>
                                    </p>
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
                                    <p class="title"><a href="#blog">Don't Forget To Care For The Family Caregiver</a>
                                    </p>
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
                        <p class="copy-right">© Copyright 2017 - <a
                                    href="https://themeforest.net/user/icute_theme/portfolio" target="_blank">MEDPHIL
                                TEAM </a>| all right reserved <a
                                    href="https://themeforest.net/checkout/25548483/create_account" class="tf-buy-now"
                                    target="_blank"> Buy now </a></p>
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