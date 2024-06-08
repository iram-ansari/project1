<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- sep  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     <!-- nav  -->

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <div class="container-fluid"> -->
    <!-- <a class="navbar-brand" href="#">BRIGHT FUTURE</a> -->
    <a class="navbar-brand" href="#">
      <img src="https://iconape.com/wp-content/png_logo_vector/bright-comercial-logo.png" alt="" width="200" height="70">
    </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="font-weight: bold; font-size: 13px;">HOME</a>
          </li>
          <li class="nav-item">
          
            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="font-weight: bold; font-size: 13px;">
              LOGIN
            </a>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ACCESS YOUR ACCOUNT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" >
                    <form action="logincode.php" method="post" >
                      Mobile: <input type="number" name="mob"> <br>
                      Password: <input type="password" name="pass"> <br>
                      <a href="logout.php">logout??</a><br><br>
                      <!-- <a href="forgetpassword">forget password??</a><br><br> -->
                      <button class="btn btn-primary">Login</button>
                  </form>
                  </div>
                
                </div>
              </div>
            </div>
            
            <!-- Button trigger modal -->
          </li>
         
         
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="find.php" style="font-weight: bold;  font-size: 13px;">FIND JOBS</a>
          </li>
         
          <li class="nav-item">
          
            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal1"  style="font-weight: bold; font-size: 13px;">
              REGISTRATION
            </a>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" >
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CREATE YOUR ACCOUNT FOR FREE</h5>
                    <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action="registercode.php" method="post" >
  Name: <input type="text" name="name"> <br>
  Mobile: <input type="number" name="mob"> <br>
  Password: <input type="password" name="pass"> <br><br>
  <button class="btn btn-primary">Save</button>
</form>
 
                  </div>
                
                </div>
              </div>
            </div>
            
            <!-- Button trigger modal -->
          </li>
         
         



          <li class="nav-item">

          <li class="nav-item">
          
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              style="font-weight: bold;  font-size: 13px;">WISHLIST</a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="font-weight: bold;  font-size: 13px;"><i
                class="bi bi-cart3"></i></a>
          </li>
          </li>
        </ul>

      </div>
    </div>
  </nav>
   <br><br>
     <!-- nav end -->
     <!-- card  -->
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center">SEARCH BY CATEGORY</h1>
                <h6 class="text-center">Search your career opportunity with our category</h6><br><br><br>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem; height:20rem ">
              <img src="https://theeventchronicle.com/wp-content/uploads/2020/12/Online-Human-Resource-Management.jpg" class="card-img-top" alt="">
           <div class="card-body">
         <h3 class="card-text">Business <br>Development</h3>
         <h5>110 positions open</h5>
  </div>
</div>
</div>

                <div class="col-sm-3">
                <div class="card" style="width: 18rem;  height:20rem">
              <img src="https://assets.entrepreneur.com/content/3x2/2000/20180716191933-GettyImages-910506076.jpeg" class="card-img-top" alt="">
           <div class="card-body">
         <h3 class="card-text">Marketing &<br>Communication</h3>
         <h5>190 positions open</h5>
  </div>
</div>
</div>

                <div class="col-sm-3">
                <div class="card" style="width: 18rem;  height:20rem">
              <img src="https://www.siachen.com/wp-content/uploads/2023/12/shutterstock_519204928-scaled-1.jpg" class="card-img-top" alt="">
           <div class="card-body">
         <h3 class="card-text">Human <br>Resource</h3>
         <h5>170 positions open</h5>
  </div>
</div>
</div>

                <div class="col-sm-3">
                <div class="card" style="width: 18rem;  height:20rem">
              <img src="https://www.thebalancemoney.com/thmb/K6AiObUZt6SqMpSscSAv6mTmjzk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/business-people-having-meeting-in-board-room-563712923-57aa46753df78cf459a1d374.jpg" class="card-img-top" alt="">
           <div class="card-body">
         <h3 class="card-text">Project Management</h3>
         <h5>116 positions open</h5>
  </div>
</div>
</div>

            </div><br><br><br>
  <!-- card end  -->
    <!-- sec cd  -->
    <div class="row">
                <h1 class="text-center">Featured job offers</h1>
                <h6 class="text-center">Search your career opportunity through 12,600 jobs</h6><br><br><br>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem; height:13rem ">
            
           <div class="card-body">
         <h3 class="card-text"><i class="fa-solid fa-business-time"></i>Business <br>Development</h3>
         <h4>:Senior editor </h4>
         <h4><i class="fa-solid fa-location-dot"></i>Location:Lucknow</h4>
         <a href="contact.php" class="btn btn-warning">FULL TIME</a>

  </div>
</div>
</div>

                <div class="col-sm-3">
                <div class="card" style="width: 18rem;  height:13rem">
            
           <div class="card-body">
         <h3 class="card-text"><i class="fa-brands fa-vuejs"></i>Marketing &<br>Communication</h3>
         <h4>:JS Developer</h4>
         <h4><i class="fa-solid fa-location-dot"></i>Location:Noida</h4>
         <a href="contact.php" class="btn btn-warning">PART TIME</a>

  </div>
</div>
</div>

                <div class="col-sm-3">
                <div class="card" style="width: 18rem;  height:13rem">
             
           <div class="card-body">
         <h3 class="card-text"><i class="fa-solid fa-person-military-pointing"></i>Human <br>Resource</h3>
         <h4>:Manager </h4>
         <h4><i class="fa-solid fa-location-dot"></i>Location:Delhi</h4>
         <a href="contact.php" class="btn btn-warning">FULL TIME</a>

  </div>
</div>
</div>

                <div class="col-sm-3">
                <div class="card" style="width: 18rem;  height:13rem">
            
           <div class="card-body">
         <h3 class="card-text"><i class="fa-regular fa-clipboard"></i>Project Management</h3>
         <h4>:Team Leader </h4>
         <h4><i class="fa-solid fa-location-dot"></i>Location:Jaunpur</h4><br>
         <a href="contact.php" class="btn btn-warning">PART TIME</a>

  </div>
</div>
</div>

            </div><br><br><br><br>

      <!-- sec cd  -->
      <!-- footer  -->

      
         <div class="row" id="footer">
            <div class="col-sm-4"><br><br>
            <h3 class="text-light">Location</h3><hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56931.8727638752!2d80.95334399999999!3d26.8958123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1716713820264!5m2!1sen!2sin" width="200px" height="100px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-3"></iframe>

            </div>

            <div class="col-sm-4 mt-5">
                <h3 class="text-light">FOR CANDIDATES</h3><hr>
            <a href="index.php" class="text-light">Home</a><br>
              <a href="find.php" class="text-light">Jobs</a><br>
              <a href="index.php" class="text-light">Apply</a><br>
             
            </div>

            <div class="col-sm-4 mt-5">
            <h3 class="text-light">Helpful Resource</h3><hr>
            <p>
                    <a href="tel:+91 7395022117" class="text-light text-decoration-none"><i
                            class="fa-solid fa-phone-volume">

                        </i>+91739502211</a><br>
                    <a href="mailto:iram444@gmail.com" class="text-light text-decoration-none"><i
                            class="fa-solid fa-envelope">

                        </i>iram444@gmail.com</a><br>
                </p>
              
         </div>
         <div class="col-lg-12 mt-5 text-center">
             Copyright © 2024 iram /bright.com Pvt Ltd. Desingn by IRAM ANSARI <a href="admin.php">adminpannel</a>

             </div>
<br>

      <!-- footer end  -->
    <!-- main cont  -->
   </div>


</body>
</html>