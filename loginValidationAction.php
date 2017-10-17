<?php
session_start();
echo"<script src=https://cdn.firebase.com/js/client/2.2.1/firebase.js></script>";
 echo"<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>";

/*Get Firebase Connection*/
?>

<?php
/* Getting data from form*/
$userName=$_POST["userName"];
$password=$_POST["password"];

echo"<input type=hidden name=hiddenUserName id=username value=$userName>";
echo"<input type=hidden name=hiddenPassword id=password value=$password>";
?>

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
<script>

	var username=document.getElementById("username").value;
	var password=document.getElementById("password").value;
	
	var database=firebase.database();



	//CARETAKERS
  	var userRef=database.ref().child("Lecturer");
  
	userRef
  	.orderByKey()
    .startAt(username).endAt(username)
	.on("child_added", function(snapshot) {
  	 var loginUser = snapshot.val();
  	 	if(snapshot.val().password==password){
  	 		window.location.href = "caretakerHomePage.php";
  	 		console.log(loginUser);
  	 	}else{
  	 		window.location.href = "loginError.php";
  	 		console.log("No User");
  	 	}
     
	}, function (errorObject) {
		//window.location.href = "loginError.php";
 	 alert("The read failed: " + errorObject.code);
});



	//PATIENTS

	var patientUserRef=database.ref().child("Student");
	patientUserRef
  	.orderByKey()
    .startAt(username).endAt(username)
	.on("child_added", function(snapshot) {
  	 var loginPatientUser = snapshot.val();
  	 	if(snapshot.val().password==password){
  	 		<?php
  	 		$_SESSION["session1"] = $userName;
  	 		?>
  	 		window.location.href = "patientHomePage.php";
  	 		console.log(loginPatientUser);
  	 	}else{
  	 		window.location.href = "loginError.php";
  	 		console.log("No User");
  	 	}
     
	}, function (errorObject) {
 	 alert("The read failed: " + errorObject.code);
});



	//DOCTORS

	var doctorUserRef=database.ref().child("Common_User");
	doctorUserRef
  	.orderByKey()
    .startAt(username).endAt(username)
	.on("child_added", function(snapshot) {
  	 var loginDoctorUser = snapshot.val();
  	 	if(snapshot.val().password==password){
  	 		window.location.href = "doctorHomePage.php";
  	 		console.log(loginDoctorUser);
  	 	}else{
  	 		window.location.href = "loginError.php";
  	 		console.log("No User");
  	 	}
     
	}, function (errorObject) {
 	 alert("The read failed: " + errorObject.code);
});






</script>

