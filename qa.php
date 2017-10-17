<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>simplestyle_5</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
    <script type="text/javascript">
      function check(){
    document.getElementById("site_content").style.display="none";
    document.getElementById("popup1").style.display="block";
    document.getElementById("footer").style.display="none";
    }
    </script>
    <?php
  echo"<input type=hidden name=hiddenSession id=hiddenSession  value=$_SESSION[session1]>";
  ?>
</head>

  <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
  <script type="text/javascript">
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
                var d_username = document.getElementById('hiddenSession').value;

                // doctor hospital data
                var h_question = document.getElementById('question').value;
                


                addHospitalAndSignup(d_username, h_question);

   }

   function addHospitalAndSignup(d_username, d_question) {

                // a doctor object
            

                var UserQuestionObj = {
                

                    question: d_question,
                    username:d_username
                  

                }

                // write to database
                var dbUpdates = {};
               
                dbUpdates['/Questions/' + d_username + "_" + "question"] = UserQuestionObj;

                firebase.database().ref().update(dbUpdates);

                // redirect
                window.location = "patientHomePage.php";

            }
</script>

</script>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">simple<span class="logo_colour">style_5</span></a></h1>
          
        </div>
      </div>
     
    </div>
    <div id="site_content">
        <h2>LEARN TO ASK QUESTIONS</h2>
        <input type="button" class="addbtn" value="Add a question" onclick="check()">
        
        
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
     
      </div>
    </div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simplestyle_5 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Simple web templates by HTML5</a></p>
    </div>
  </div>
    
    <div class="popup" id="popup1">
            <br>
        <div id="inner">
        <h3>Type your Question below:</h3>
            <textarea name="question" id="question"  rows="4" cols="50"></textarea>
            <input type="button" class="addbtn1" value="submit" onclick="submitDoctorData();">
            </div>
        </div>
</body>
</html>
