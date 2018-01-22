<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: index.php");
 } 
 //else if(isset($_SESSION['user'])!="") {
 // header("Location: my-account.php");
 //}
 
 if (isset($_GET['logout'])) {
     header("Location: my-account.php");
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
 
  exit;
 }
 ?>