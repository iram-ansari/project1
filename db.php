
<?php

$conn=mysqli_connect ("localhost","root","","shop");
$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$datetime=$date." " .$time;

?>