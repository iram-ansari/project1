<?php
  error_reporting(0);
   session_start();

   $sesid=$_SESSION['user'];
   if(isset($_SESSION['user']))
   {
    session_start();
    header("location:index.php");
   }
   else{
    echo "logout failed";
   }




?>