<!DOCTYPE html>

<head>
  <title>My Profile</title>
  <?php
  echo"<script src=https://cdn.firebase.com/js/client/2.2.1/firebase.js></script>";
 echo"<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>";
 ?>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  table, th, td {
    border: 1px solid black;
    width: 900px;
  }
  </style>
</head>

</head>
<body>

 <?php

    include("headerUser.php");
  //session_start();
    
  ?>
  <?php
  echo"<input type=hidden name=hiddenSession id=hiddenSession  value=$_SESSION[session1]>";
  ?>


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


 
 
  <div class="container" style="width:70%;float:left">
    <br/>
    <center>
      <h1>
        My Medical Details
      </h1>
    </center>
    <table id=myTable >
      <tr>
        <th class="formText" >MedicineName</th>
        <th class="formText" >dosageGap</th>
        
        
        <th class="formText" >Bottle Id</th>

      </tr>

      
       <tr>
        <td class="formText"  id="MedicineName"></td>
        <td class="formText"  id="dosageGap"></td>
        
       
        <td class="formText"  id="bottleId"></td>

      </tr>
      

      <script type="text/javascript">
     //Save session variable in the javascript variable
      var username=document.getElementById("hiddenSession").value;
      
      
      var database=firebase.database();

     var userRef=database.ref().child("bottles");
  
     userRef
       .orderByChild("patient")
       .startAt(username).endAt(username)
       .on("child_added", function(snapshot) {
             var loginUser = snapshot.val();
              console.log(snapshot.val().caretaker);

              document.getElementById("MedicineName").innerHTML=snapshot.val().medicine;
              document.getElementById("dosageGap").innerHTML=snapshot.val().dosagegap;
              document.getElementById("bottleId").innerHTML=snapshot.key;
            
              // var medicineName=document.getElementById("MedicineName").value;
              // var userDosageRef=database.ref().child("dosages");

              //      userDosageRef
              //          .orderByChild("patient")
              //          .startAt(username).endAt(username)
              //          .on("child_added", function(snapshot) {
              //          var loginUser = snapshot.val();
              //     // if(snapshot.val().medicine==medicineName){

              //         document.getElementById("notifyIteration").innerHTML=snapshot.val().time;

         
              //      }, function (errorObject) {
              //        //window.location.href = "loginError.php";
              //     alert("The read failed: " + errorObject.code);
              //    });



         
       }, function (errorObject) {
          //window.location.href = "loginError.php";
          alert("The read failed: " + errorObject.code);
      });

     

    </script>


    </table>
    <br/>
    <!-- <input type="button" class="commonButton" value="Add Medicine" onclick="location.href='addMedicine.php'" style="margin-left:380px;margin-top:-5px">
    <input type="button" class="commonButton" value="Delete Medical data" onclick="location.href='deleteMedicalDetails.php'" style="margin-left:75px; margin-top:-40px" > -->
    <input type="button" class="commonButton" value="Modify Medical data" onclick="location.href='modifyMedicalData.php'" style="margin-left:380px;margin-top:-10px">

    <div class="container" id="get data" style="width:70%; margin-top:125px; margin-left:120px">
      <center>
        <h1> My Stats</h1>
      </center>
      <table style="margin-left:-120px" >
        <tr>
          <th class="formText" name="MedicineName" id="MedicineName">MedicineName</th>
          <th class="formText" name="MedicineName" id="MedicineName">dosageTime</th>
          <th class="formText" name="MedicineName" id="MedicineName">doseageStatus</th>
         </tr>
		 
		 <tr>
        <td class="formText"  id="MedicineName"></td>
        <td class="formText"  id="dosageTime"></td>
        <td class="formText"  id="doseageStatus"></td>

      </tr>
        <script type="text/javascript">
     //Save session variable in the javascript variable
      var username=document.getElementById("hiddenSession").value;
      
      
      var database=firebase.database();

     var userRef=database.ref().child("dosages");
  
     userRef
       .orderByChild("patient")
       .startAt(username).endAt(username)
       .on("child_added", function(snapshot) {
             var loginUser = snapshot.val();
              console.log(snapshot.val().caretaker);

              document.getElementById("MedicineName").innerHTML=snapshot.val().medicine;
              document.getElementById("dosageTime").innerHTML=snapshot.val().dosagegap;
			   
            }, 
			
			function (errorObject) {
          //window.location.href = "loginError.php";
          alert("The read failed: " + errorObject.code);
      });

     

    </script>


    </table>
    <br/>
      
  
  <div class="container" style="width:30%; float :right">

    <center>
      <br/>
      <h1>My Profile </h1>
      <br/>
      <img src=images/frame.png  class=photo >
    </center>
    <br/>
    <a class="formText">First Name </a>
    <a class="formText" id="firstname"></a>
   
    <br/><br/>
    <a class="formText">Last Name </a>
    <a class="formText" id="lastname"> </a>
   

   
   
   
    <br/><br/>
    <a class="formText" >Email Id </a>
    <a class="formText" id="emailId"></a>
  
    <br/><br/>
    <a class="formText">Address</a>
    <a class="formText" id="address"></a>
  
    
    <br/><br/>
    <a class="formText">CareTaker</a>
    <a class="formText" id="careTakerName" ></a>
     
   
    <br/><br/>
    <a class="formText">Doctors</a>
    <a class="formText" id="doctorName"></a>
   
   <!-- MAKE DATABASE CONNECTION WITH FIREBASE -->


     <script type="text/javascript">
     //Save session variable in the javascript variable
      var username=document.getElementById("hiddenSession").value;
      
      var ref = new Firebase("https://docs-examples.firebaseio.com/web/saving-data/fireblog/posts");
      var database=firebase.database();
      
     var userRef=database.ref().child("patients");
  
     userRef
       .orderByKey()
       .startAt(username).endAt(username)
       .on("child_added", function(snapshot) {
             var loginUser = snapshot.val();
             console.log(snapshot.val().caretaker);
             document.getElementById("firstname").innerHTML=snapshot.val().firstname;
             document.getElementById("lastname").innerHTML=snapshot.val().lastname;
             document.getElementById("emailId").innerHTML=snapshot.val().email;
             document.getElementById("address").innerHTML=snapshot.val().address;
             document.getElementById("careTakerName").innerHTML=snapshot.val().caretaker;
             document.getElementById("doctorName").innerHTML=snapshot.val().doctor;
         
       }, function (errorObject) {
          //window.location.href = "loginError.php";
          alert("The read failed: " + errorObject.code);
      });
    </script>

  </br></br>
  <?php
  echo"<input type=button class=commonButton name=updateCaretaker  value=updateCaretaker style='margin-left:75px' onclick=window.location='updateCaretaker.php';>";
  ?>

<!-- black overlay when popup notification is shown -->
<div id="black_overlay" class="black_overlay"></div>

</div>
 
<div style="margin-top:700px">
  <?php
  include("websiteFooter.php");
  ?>
</div>

</body>
</html>