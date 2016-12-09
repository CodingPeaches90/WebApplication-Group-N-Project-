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

    <title> HTML Resource Page </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="htmlresource.css" rel="stylesheet">

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
              <h1 class="text-center">Welcome to HTML Resource Page!</h1>
              <img src="./images/html.png" align="middle">
              <p> 
				This page is setup to help people learn about HTML.
              </p>
			  <p>
			  After going through this page and understanding HTML, you are ready to take on the Web Design quiz.
			  </p>
          </div>
      </div>
      <div id="container">
          <h1 class="text-center">Information</h1> 
            <div class="jumbotron1">
                 
							<h3>What is HTML?</h3>
							<li>HTML stands for Hyper Text Markup Language</li>
							<li>HTML describes the structure of Web pages using markup</li>
							<li>HTML elements are the building blocks of HTML pages</li>
							<li>HTML elements are represented by tags</li>
							<li>HTML tags label pieces of content such as "heading", "paragraph", "table", and so on</li>
							<li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
							<br><br>

					<p>HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects, such as interactive forms may be embedded into the rendered page. It provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as <code>&lt;img&gt; </code> &lt;and&gt; <code> &lt;span&gt; </code> introduce content into the page directly. Others such as <code>&lt;p&gt;</code> surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page.

					HTML can embed programs written in a scripting language such as JavaScript which affect the behavior and content of web pages. Inclusion of CSS defines the look and layout of content. The World Wide Web Consortium (W3C), maintainer of both the HTML and the CSS standards, has encouraged the use of CSS over explicit presentational HTML since 1997</p>
            <hr>
                
<p>Changes to the graphic design of a document can be applied quickly and easily, by editing a few lines in the CSS file they use, rather than by changing markup in the documents.</p>

                
<p>The CSS specification describes a priority scheme to determine which style rules apply if more than one rule matches against a particular element. In this so-called cascade, priorities are calculated and assigned to rules, so that the results are predictable.</p>

                
<p>The CSS specifications are maintained by the World Wide Web Consortium. Internet media type text is registered for use with CSS by RFC 2318. The W3C operates a free CSS validation service for CSS documents.</p>
            </div>
      </div>
      <div id="container">
          <h1 class="text-center">History</h1>
          <div class = "jumbotron2">
              <p>CSS was first proposed by Håkon Wium Lie on October 10, 1994. At the time, Lie was working with Tim Berners-Lee at CERN. Several other style sheet languages for the web were proposed around the same time, and discussions on public mailing lists and inside World Wide Web Consortium resulted in the first W3C CSS Recommendation being released in 1996. In particular, Bert Bos' proposal was influential; he became co-author of CSS1 and is regarded as co-creator of CSS.</p>

          
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