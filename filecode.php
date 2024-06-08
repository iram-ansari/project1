<?php
session_start();
echo $user = $_SESSION['user'];
echo $a = $_FILES['pic']['name'];
echo $b = $_FILES['pic']['tmp_name'];

$conn = mysqli_connect("localhost", "root", "", "shop");
$loc = "image/";

// Update query to set the image name for the user
$up = "UPDATE `register` SET `img`='$a' WHERE `mobile`='$user'";

// Execute the update query
if (mysqli_query($conn, $up)) {
  // Move the uploaded file to the desired location
  move_uploaded_file($b, $loc . $a);
  header("location:userdash.php");
} else {
  echo "Error updating data: " . mysqli_error($conn);
}
