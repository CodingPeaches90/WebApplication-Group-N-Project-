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
<html>
  <header>
    <title>hello wolrd</title>
  </header>
  <body>
    <!-- log out of session -->
    
    <p>
      logout
    </p>
   <!-- -->
    <button onClick="window.location='logout.php';" value="click here" />
    
  </body>
</html>

