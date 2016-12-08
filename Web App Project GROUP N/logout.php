<?php

// when user presses logout come to this page!
// we start off by destroying the session

Session_start();
Session_destroy();
// then we rediect to the file 'goodbye.php' to say goodbye to the user!
header("Location: goodbye.php");

?>

