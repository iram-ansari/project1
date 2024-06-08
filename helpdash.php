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
    <script src="jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <script>
      $(document).ready(function () {
            $("#popup1").click(function () {
                swal("LOGOUT SUCCESSFULL!", "You clicked the button!", "success");
            });
           
          
        });
    </script>


</head>
<body>
      <!-- <html>

<head>
  
</head> -->
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 mt-1">
                <div id="slider">
                <img src="https://w7.pngwing.com/pngs/356/276/png-transparent-computer-icons-information-others-miscellaneous-text-logo.png" alt=""  id="img" ><br>
                    <h3 class="text-light text-center">IRAM ANSARI</h3><br>
                    <h5 class="text-light p-1">General</h5><hr>
                    <a href="profile.php" class="text-light text-center" style="text-decoration:none">&nbsp;<i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;PROFILE</a><br><br>
                    <a href="feeddash.php"class="text-center text-light"style="text-decoration:none">&nbsp;<i class="fa-solid fa-comment"></i>&nbsp;&nbsp;&nbsp;FEEDBACK</a><br><br>
                    <a href="helpdash.php"class="text-center text-light "style="text-decoration:none">&nbsp;<i class="fa-solid fa-question"></i>&nbsp;&nbsp;&nbsp;ENQUIRY</a><br><br>
                    <!-- <a href=""class="text-center text-light "style="text-decoration:none">&nbsp;<i class="fa-solid fa-credit-card"></i>&nbsp;&nbsp;&nbsp;PAYMENT</a><br><br> -->
                    <a href="adminlogout.php"class="text-center text-light"style="text-decoration:none">&nbsp;<i class="fa-solid fa-right-from-bracket" id="popup1"></i>&nbsp;&nbsp;&nbsp;LOGOUT</a><br><br>
                </div>
    
            </div>
           <!-- aa  -->
           <div class="col-sm-10 mt-1" >
           <div class="row">
                    
   
                    <div class="col-sm-10">
                        <h1 class="text-center">USERS ENQUIRY</h1>
                        <!-- table  -->
                        <table class="table caption-top">
              <caption>List of users enquiry</caption>
              <thead>
                <tr>
                  <th scope="col">Sr.No</th>
                  <th scope="col">Enquiry</th>
                </tr>
                
              </thead>
              <tbody>
              <?php
          $conn=mysqli_connect("localhost","root","","shop");
          $sel="select * from help";
          $r=mysqli_query($conn,$sel);
          $i=1;
          while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
            {
            ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $k['1'] ?></td>
                </tr>
                <?php
            $i++;
            }
            ?>
            </table>
            </div>
                
            </body>
            </html>
                    
   
       