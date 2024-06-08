<?php
session_start();
error_reporting(0);
include("db.php");

$a = $_POST['mob'];
$b = $_POST['pass'];

$sel = "select * from register where mobile='$a'";
$r = mysqli_query($conn, $sel);
$k = mysqli_fetch_array($r, MYSQLI_BOTH);

if ($k['2'] == $a) {
   if ($k['3'] == $b) {
      session_start();
      $_SESSION['user'] = $a;
      header("location:i2.php");
   } else {
      echo "password not match";
   }
} else {
   echo "mobile no  not match";
}
