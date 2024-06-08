<?php
   
   include("db.php");

   $a=$_POST['mob'];
   $b=$_POST['pass'];

   $sel="select * from admin where mobile='$a'";
   
   $r=mysqli_query($conn,$sel);
   $k=mysqli_fetch_array($r,MYSQLI_BOTH);

      if($k['mobile']==$a)
      {
        if($k['password']==$b)
        {
              session_start();
             $_SESSION['admin']=$a;
            header("location:admindash.php");
        }
      }
      else{
           echo "password not match ";
      }


?>