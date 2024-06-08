<?php
session_start();
$sesid=$_SESSION['user'];
include("db.php");
$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];


$sel="select * from register where mobile='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['password']==$a)
{
    if($b==$c){
      
       $up="UPDATE register SET password='$b' WHERE mobile='$sesid'";
         if(mysqli_query($conn,$up)){
            header("location:index.php");
         }
    }else{
        echo "new and conf pass are not same ";
    }
}
  else{
    echo "old pass not match";
  }

?>
