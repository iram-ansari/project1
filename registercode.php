<?php

include("db.php");

$a=$_POST['name'];
$b=$_POST['mob'];
$c=$_POST['pass'];

$sel="select * from register where mobile='$b'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['2']!=$b)
{

$ins="insert into register(name,mobile,password,datetime) values ('$a','$b','$c','$datetime')";

if(mysqli_query($conn,$ins)){
    header("location:index.php");
}
else{
    echo "data not store";
}
}
else{
   echo "mobile no. already exists";
}

// mm 


?>
