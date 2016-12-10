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
            <li role="presentation" class="active"><a href="index.php">Back</a></li>
          </ul> 
        </div>
   </nav>
   <!-- figured out that bootstrap has text-center in class css -->
     
      <div id="container">
          <div class ="jumbotron">
              <h1>Welcome to HTML Resource Page!</h1>
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
          <h1>Information</h1> 
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
                
<p>HTML markup consists of several key components, including those called tags (and their attributes), character-based data types, character references and entity references. HTML tags most commonly come in pairs like &lt;h1&gt; and &lt;/h1&gt;, although some represent empty elements and so are unpaired, for example &lt;img&gt;. The first tag in such a pair is the start tag, and the second is the end tag (they are also called opening tags and closing tags).
<br>The CSS specification describes a priority scheme to determine which style rules apply if more than one rule matches against a particular element. In this so-called cascade, priorities are calculated and assigned to rules, so that the results are predictable.
<br>The CSS specifications are maintained by the World Wide Web Consortium. Internet media type text is registered for use with CSS by RFC 2318. The W3C operates a free CSS validation service for CSS documents.</p>
            </div>
      </div>
      <div id="container">
          <h1>History</h1>
          <div class = "jumbotron1">
              <p>In 1980, physicist Tim Berners-Lee, a contractor at CERN, proposed and prototyped ENQUIRE, a system for CERN researchers to use and share documents. In 1989, Berners-Lee wrote a memo proposing an Internet-based hypertext system.[3] Berners-Lee specified HTML and wrote the browser and server software in late 1990. That year, Berners-Lee and CERN data systems engineer Robert Cailliau collaborated on a joint request for funding, but the project was not formally adopted by CERN. In his personal notes from 1990 he listed "some of the many areas in which hypertext is used" and put an encyclopedia first.</p>
          </div>
      </div>
   
      <div id="container">
          <h1>Elements</h1>
          <div class="jumbotron1">
							<h2>Tags</h2>
						<p>
							
						
						<code>&lt;h1&gt;</code> <font size="7">Header</font> <code>&lt;/h1&gt;</code><br><br> 
						<code>&lt;h2&gt;</code> <font size="6">Header</font> <code>&lt;/h2&gt;</code><br><br> 
						<code>&lt;h3&gt;</code> <font size="5">Header</font> <code>&lt;/h3&gt;</code><br><br> 
						<code>&lt;h4&gt;</code> <font size="4">Header</font> <code>&lt;/h3&gt;</code><br><br> 
						<code>&lt;img&gt;</code> Image tag<br><br> 
						
              <h2>Text manipulation</h2><br> 
              <code>&lt;br&gt;</code> Carriage return<br><br> 
							<code>&lt;p&gt;</code> paragraph<br><br> 
							<code>&lt;hr&gt;</code> Line break<br><br> 
             
						<h2>Decoration</h2><br> 
						<code>&lt;body style="background-color:magenta;"&gt;</code> Changing background colour <br> <br> </p>
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