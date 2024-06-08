<?php
//   error_reporting(0);
   session_start();

   $sesid=$_SESSION['admin'];
   if(isset($_SESSION['admin']))
   {
    session_start();
    header("location:index.php");
   }
   else{
    echo "logout failed";
   }


  

?>