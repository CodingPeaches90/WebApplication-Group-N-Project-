<?php
$totalCorrect = 0;

if(isset($_POST['question-1-answers']))
{
  $answer1 = $_POST['question-1-answers'];
  
  if ($answer1 == "C") 
  { 
    $totalCorrect++; 
  }
}

if(isset($_POST['question-2-answers']))
{
  $answer2 = $_POST['question-2-answers'];
   
  if($answer2 == "A")
  {
    $totalCorrect++;
  }
}
   
if(isset($_POST['question-3-answers']))
{
  $answer3 = $_POST['question-3-answers'];
  
  if($answer3 == "B")
  {
    $totalCorrect++;
  }
}
   
if(isset($_POST['question-4-answers']))
{
  $answer4 = $_POST['question-4-answers'];
  
  if($answer4 == "C")
  {
    $totalCorrect++;
  }
}
   
if(isset($_POST['question-5-answers']))
{
  $answer5 = $_POST['question-5-answers'];
  
  if($answer5 == "C")
  {
    $totalCorrect++;
  }
}

?>

<html>
<head>
  <title>Quiz Results</title>
  <link rel="stylesheet" href="style.css" type="text/css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrapper">
            <ul class="nav nav-pills pull-left"> 
            <li id="back" role="presentation" class="active"><a href="cssQuiz.php">Back</a></li>
          </ul> 
      <ul class="nav nav-pills pull-right"> 
            <li id="home" role="presentation" class="active" ><a href="index.php">Home</a></li>
          </ul> 
      </div>
        </div>
   </nav>
     <div id="jumbotronResults">
       <h3 id="title">Results</h3>
       </h3>
       <h3 id="results">
       <?php echo "<div id='results'>You got $totalCorrect / 5 correct.</div>"; ?>
       </h3> 
      <h3 id="thanks">
        Thanks for taking the test!
      </h3>
   </div>
    </div>
  </body>
</html>