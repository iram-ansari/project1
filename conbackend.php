<?php

  $a=$_POST['f-name'];
  $b=$_POST['l-name'];
  $c=$_POST['email'];
  $d=$_POST['phone'];
//   $e=$_POST['subject']; 
  $f=$_POST['message'];
  
  $conn=mysqli_connect("localhost","root","","shop");

    $ins="INSERT INTO `contact`( `f-name`, `l-name`, `phone`, `message`) VALUES ('$a','$b','$c','$d''$f')";

    if(mysqli_query($conn,$ins)){
     
      //  header("location:show.php");
      echo "data save ";

    }else{
      echo "data not store";
    }







?>