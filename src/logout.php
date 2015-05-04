<?php
  session_start(); //If the session exists, it should continue here as well.
  session_unset(); // Taking that session and unsetting the session variables.
  session_destroy(); // DIE SESSION DIE

  header('Location: login.php'); //Redirect now
  exit(); // DONE! Bah-bam!
?>
