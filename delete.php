<?php 
    $con=mysqli_connect("localhost","root","","shop");

    $delid=$_REQUEST['idd'];

    $del="delete from register where id=$delid";

    if(mysqli_query($con,$del)){
//    this is for redirect 
        header("location:profile.php");
    }



?>