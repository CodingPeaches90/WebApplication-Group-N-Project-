<?php
require "check.php";

?>
<html>
  <head>
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css" type="text/css">
	
  </head>
  <form action="html_results.php" method="post" id="quiz">
      <h3 id="title">Learn By Quiz: HTML</h3>
<div id="wrapper">

 <!-- Question 1-->
<div id="jumbotron">
  
<h3>What does HTML stand for?</h3>

<div id="options">

<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />

<label for="question-1-answers-A">A) Hypertext Markup Language </label>

</div>

<div id="options">

<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />

<label for="question-1-answers-B">B) Hypertext Markup</label>

</div>

<div id="options">

<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />

<label for="question-1-answers-C">C) Hypertext Programming</label>

</div>

<div id="options">

<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />

<label for="question-1-answers-D">D) None of the above</label>

</div>
  
</div>
   <!-- Question 2-->
<div id="jumbotron">
  
<h3>What is the largest header tag for HTML?</h3>

<div id="options">

<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />

<label for="question-2-answers-A">A) Header </label>

</div>

<div id="options">

<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />

<label for="question-2-answers-B">B) H1</label>

</div>

<div id="options">

<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />

<label for="question-2-answers-C">C) H3</label>

</div>

<div id="options">

<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />

<label for="question-2-answers-D">D) None of the above</label>

</div>
</div>
    
    <!-- Question 3 -->
<div id="jumbotron">
 
<h3>What is the correct tag for a line break?</h3>

<div id="options">

<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />

<label for="question-3-answers-A">A) Line break </label>

</div>

<div id="options">

<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />

<label for="question-3-answers-B">B) Lb</label>

</div>

<div id="options">

<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />

<label for="question-3-answers-C">C) Br</label>

</div>

<div id="options">

<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />

<label for="question-3-answers-D">D) None of the above</label>

</div>
</div>
    
   <!-- Question 4 -->
<div id="jumbotron">

<h3>What is the correct HTML tag for adding a background colour?</h3>

<div id="options">

<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />

<label for="question-4-answers-A">A) Body="yellow"</label>

</div>

<div id="options">

<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />

<label for="question-4-answers-B">B) Background="yellow"</label>

</div>

<div id="options">
  
<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />

<label for="question-4-answers-C">C) Body style="background-color:yellow;</label>

</div>

<div id="options">

<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />

<label for="question-4-answers-D">D) None of the above</label>

</div>
      
</div>
<!-- Question 5 -->
    
 <div id="jumbotron">

   <h3>What is the correct HTML for emphasized text?</h3>

<div id="options">

<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />

<label for="question-5-answers-A">A) i</label>

</div>

<div id="options">

<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />

<label for="question-5-answers-B">B) em <label>

</div>

<div id="options">

<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />

<label for="question-4-answers-C">C) italic</label>

</div>

<div id="options">

<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />

<label for="question-5-answers-D">D) None of the above</label>

</div>
</div>
  <div id="button">
     <input id="submit" type="submit" value="Submit Quiz"/>
  </div>
    </div>
  </form>
</html>