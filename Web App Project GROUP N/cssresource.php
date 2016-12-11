<?php
require "check.php";
// continue the session on this page 
if(!isset($_SESSION)){
session_start();
}
// code from this link helped
//http://stackoverflow.com/questions/2542427/how-do-i-continue-a-session-from-one-page-to-another-with-php
if(isset($_SESSION['username'])) {
  // if the sesssion is running output this
//echo "Your session is running " . $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewpoint" content="width=device-width, intial-scale=1">

    <title> CSS Resource Page </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="cssresource.css" rel="stylesheet">

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
            <ul class="nav nav-pills pull-left"> 
            <li role="presentation" class="active"><a href="javascript:history.go(-1)">Back</a></li>
          </ul> 
        </div>
   </nav>
   <!-- figured out that bootstrap has text-center in class css -->
     
      <div id="container">
          <div class ="jumbotron">
              <h1 class="text-center">Welcome to CSS Resource Page!</h1>
              <img src="./images/CSS%20Icon.png" align="middle">
              <p> 
				This page is setup to help people learn everything about CSS.
              </p>
			  <p>
			  After going through this page and understnding CSS, you are ready to take on the Web Design quiz.
			  </p>
          </div>
      </div>
      <div id="container">
          <h1 class="text-center">Information</h1> 
            <div class="jumbotron1">
                 
            <p>CSS is a style sheet language used for describing the presentation of a document written in a markup language.</p>
                <p>Most CSS is used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, and is applicable to rendering in speech or media. CSS is used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces for many mobile applications.</p>

<p>CSS is designed to enable the separation of document content from document presentation. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, enable multiple HTML pages to share formatting by specifying the relevant CSS in a separate .css file, and reduce complexity.</p>

                
<p>Separation of formatting and content makes it possible to present the same markup page in different styles for different rendering methods, such as on-screen, in print and by voice. It can also display the web page differently depending on the screen size or viewing device. Readers can also specify a different style sheet, such as a CSS file stored on their own computer, to override the one the author specified.</p>

                
<p>Changes to the graphic design of a document can be applied quickly and easily, by editing a few lines in the CSS file they use, rather than by changing markup in the documents.</p>

                
<p>The CSS specification describes a priority scheme to determine which style rules apply if more than one rule matches against a particular element. In this so-called cascade, priorities are calculated and assigned to rules, so that the results are predictable.</p>

                
<p>The CSS specifications are maintained by the World Wide Web Consortium. Internet media type text is registered for use with CSS by RFC 2318. The W3C operates a free CSS validation service for CSS documents.</p>
            </div>
      </div>
      <div id="container">
          <h1 class="text-center">History</h1>
          <div class = "jumbotron2">
              <p>CSS was first proposed by Håkon Wium Lie on October 10, 1994. At the time, Lie was working with Tim Berners-Lee at CERN. Several other style sheet languages for the web were proposed around the same time, and discussions on public mailing lists and inside World Wide Web Consortium resulted in the first W3C CSS Recommendation being released in 1996. In particular, Bert Bos' proposal was influential; he became co-author of CSS1 and is regarded as co-creator of CSS.</p>

<p>Style sheets have existed in one form or another since the beginnings of Standard Generalized Markup Language in the 1980s, and CSS was developed to provide style sheets for the web. One requirement for a web style sheet language was for style sheets to come from different sources on the web. Therefore, existing style sheet languages like DSSSL and FOSI were not suitable. CSS, on the other hand, let a document's style be influenced by multiple style sheets by way of "cascading" styles.</p>

<p>As HTML grew, it came to encompass a wider variety of stylistic capabilities to meet the demands of web developers. This evolution gave the designer more control over site appearance, at the cost of more complex HTML. Variations in web browser implementations, such as ViolaWWW and WorldWideWeb, made consistent site appearance difficult, and users had less control over how web content was displayed. The browser/editor developed by Tim Berners-Lee had style sheets that were hard-coded into the program. The style sheets could therefore not be linked to documents on the web. Robert Cailliau, also of CERN, wanted to separate the structure from the presentation so that different style sheets could describe different presentation for printing, screen-based presentations, and editors.</p>
          
          </div>
      </div>
   
      <div id="container">
          <h1 class="text-center">Examples</h1>
          <div class="jumbotron">
              <h2>CSS Colors</h2>
              <img src="./images/css-syntax.gif" alt="CSS Syntax" height="400" width="33%">
              <h2>CSS Backgorund</h2>
              <img src="./images/CSS%20Background.gif" alt="CSS Background" height="400" width="33%">
              <h2>CSS Borders</h2>
              <img src="./images/CSS%20Borders.gif" alt="CSS Borders" height="400" width="33%">
                <hr>
						<h2><a href="cssQuiz.php">Take The Quiz Now</a></h2>
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