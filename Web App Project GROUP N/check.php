<?php


session_start();

//var_dump($_SESSION);
if(isset($_SESSION['username'])){
  
   //do nothing
  
}else{
  
  header("Location: form.php");
  exit();
}
// for every page
