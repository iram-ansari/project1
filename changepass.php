<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <!-- font cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- animate js.cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css"
    integrity="sha512-gFn7XRm5v3GlgOwAQ80SXDT8pyg6uaV9JbW2OkNx5Im2jR8zx2X/3DbHymcZnUraU+klZjRJqNfNkFN7SyR3fg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css"
    integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css"
    integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css.css">
  <!-- animate.css cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    wow = new WOW(
      {
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
      }
    )
    wow.init();
  </script>
   <script src="jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php
     error_reporting(0);
    include("db.php");
    session_start();
    $sesid=$_SESSION['user'];

    $sel="select * from register where mobile='$sesid'";
     $r=mysqli_query($conn,$sel);
     $k=mysqli_fetch_array($r,MYSQLI_BOTH);
?> 
<style>
  #mn{
    background-image:url("https://www.nortonrosefulbright.com/-/media/images/nrf/hero/cybersecurity-data-protection-technology-innovation.jpg?revision=&revision=4611686018427387904");
    background-size:100% 100%;
  }
</style>
<script>
      $(document).ready(function () {
            $("#popup1").click(function () {
                swal("LOGOUT SUCCESSFULL!", "You clicked the button!", "success");
            });
            $("#popup2").click(function () {
                swal("CHANGE SUCCESSFULL!", "You clicked the button!", "success");
            });
          
        });
    </script>

</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 mt-1">
                <div id="slider">
                 
                  
                   
                <img src="image/<?php echo $k['4'] ?>" height="49" id="img">
                    <h5 class="text-light p-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my profile</h5><hr>
                    <a href="changepass.php" class="text-light text-center" style="text-decoration:none">&nbsp;<i class="fa-solid fa-lock"></i></i>&nbsp;&nbsp;&nbsp;CHANGE PASSWORD</a><br><br>
                    <a href="yourfeed.php"class="text-center text-light"style="text-decoration:none">&nbsp;<i class="fa-solid fa-comment"></i>&nbsp;&nbsp;&nbsp; YOUR FEEDBACK</a><br><br>
                    <a href="yourenq.php"class="text-center text-light "style="text-decoration:none">&nbsp;<i class="fa-solid fa-question"></i>&nbsp;&nbsp;&nbsp;YOUR ENQUIRY</a><br><br>
                    <!-- <a href="yourpay.php"class="text-center text-light "style="text-decoration:none">&nbsp;<i class="fa-solid fa-credit-card"></i>&nbsp;&nbsp;&nbsp;PAYMENT</a><br><br> -->
                    <a href="logout.php"class="text-center text-light"style="text-decoration:none">&nbsp;<i class="fa-solid fa-right-from-bracket" id="popup1"></i>&nbsp;&nbsp;&nbsp;LOGOUT</a><br><br>
                </div>
            </div>
            <!-- slider div end -->
           
            <div class="col-sm-10 mt-1" id="mn">
            <div class="row justify-content-center">
            <h1 class="text-center text-light">CHANGE PASSWORD</h1>
                <div class="col-sm-2" >
                <form action="changepasswordcode.php" method="post">
        <h5 class="text-light">OLD PASSWORD: </h5><input type="text" name="opass"><br>
        <h5 class="text-light">NEW PASSWORD:</h5> <input type="text" name="npass"><br>
        <h5 class="text-light">CONFIRM PASSWORD:</h5><input type="text" name="cpass"><br>
        <button class="btn btn-primary" id="popup2">CHANGE</button>
    </form>
  

               <!-- dd  -->
                </div>
              

            
            </div><br><br><br><br><br><br><br><br><br><br>
            <!-- tt  -->
            <div class="row">
                <div class="col-lg-12" id="ff">
                  <h5 class="text-center" id="ff"> 
                    Website Terms|| Privacy Policy || Accessibility Statement||
                  <br>Copyright © 2024<br>All rights reserved.
                   <br> Designed By: IRAM ANSARI </h5></div>
              </div>
              <!-- tt  -->
        </div>
             
    </div>
</body>
</html>