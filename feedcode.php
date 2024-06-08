
<?php
 
  //  error_reporting(0);
//  include("db.php");
$a=$_POST['feedback'];
 
$conn=mysqli_connect("localhost","root","","shop");
//  $a=$_POST['feedback'];
 

 $ins="INSERT INTO `feedback`( `feedback`) VALUES('$a')";
 
 if(mysqli_query($conn,$ins)){
   
    
    echo "feedback submited";
  }
    else{
        echo "feedback not submit";
    }


?> 
