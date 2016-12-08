<?php
require "check.php";
// continue the session on this page 
session_start();
// code from this link helped
//http://stackoverflow.com/questions/2542427/how-do-i-continue-a-session-from-one-page-to-another-with-php
if(isset($_SESSION['username'])) {
  // if the sesssion is running output this
echo "Your session is running " . $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewpoint" content="width=device-width, intial-scale=1">

    <title> Welcome! </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="mainpage.css" rel="stylesheet">

</head>

  <body>

   
      <!-- on landing page we have three buttons in center of page -->
      <!-- colour gradient purple-->
      <!-- button will be images
      logout button at top
      button 1 = Learn html!
      button 2 = Learn css!
      button 3 = take the quiz!
      buttons in a jumbotrom
      footer = web app made by blah blah-->
      <!-- nav bar coming from http://codepen.io/davidcochran/pen/rcHae -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <ul class="nav nav-pills pull-right"> 
            <li role="presentation" class="active" onclick="return confirm('Are you sure you want to logout?')"><a href="#">Logout</a></li>
          </ul> 
        </div>
   </nav>
   <!-- figured out that bootstrap has text-center in class css -->
     
      <div id="container">
          <div class ="jumbotron">
              <h1 class="text-center">Welcome!</h1>
              <p> 
				This page is setup to help people learn about how pages are put together using HTML and CSS.
              </p>
			  <p>
			  We decide to put a quiz into the website to reinforce what you learned
			  </p>
              <hr>
          </div>
      </div>
      <div id="container">
            <div class="jumbotron">
            <h1 class="text-center"><a href>Learn HTML!</a></h1>      
            <p>Want to learn about HTML? Click the text to proceed to our HTML resource page!</p>
                <hr>
			<h3 class="text-center"><a href="htmlQuiz.php">Take The Quiz Now</a></h1>
            </div>
      </div>
      <div id="container">
          <div class = "jumbotron">
              <h1 class="text-center"><a href="CSS Resource Page 2.0/index.html">Learn CSS!</a></h1>
              <p>
                  Want to learn some CSS? Follow the image to learn about the history and see some examples of CSS in action!

              </p>
			  <hr>
          <h3 class="text-center"><a href="cssQuiz.php">Take The Quiz Now</a></h1>
          </div>
      </div>
      
      <footer>
          <hr>
          <p> A Web App made by : Jordan | Emma | Chris | Keith </p>
          <hr>
      </footer>
      

    
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>