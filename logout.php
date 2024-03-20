<?php
 session_start();


     // Destroy the session
     session_destroy();
     
     // Redirect to login page or any other page
     header("Location: login.php");
     exit();
 
?>