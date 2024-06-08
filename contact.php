
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
    <script src="jquery.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<script>
    $(document).ready(function() {
      $("#popup1").click(function() {
        swal("WE WILL CONTACT YOU AFTER SOME TIME!", "You clicked the button!", "success");
      });
    


    });
  </script>
<style>
  
</style>
<body>
    <marquee>For any enquiry:call us- 7345835553 || our insta id:iramansari_122 || our facebook id:iram ||
        youtube id:iram11 || twitter id: iramansarii || Telephone no: 0522345643345
    </marquee>

            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-8">
                        
        <img class="img-fluid"src="https://i.pinimg.com/originals/e8/28/14/e82814e68e7f32c7ee52cb9c15175f20.png" alt="">
        
                    </div>
                    <div class="col-lg-3">
                    <h1 class="text center">CONTACT US!!</h1>
                    <form action="conbackend.php" method="post" class="row">
                            <div class="col-md-6">
                                <input type="text" name="f-name" placeholder="First Name">
                            </div><br><br>
                            <div class="col-md-6">
                                <input type="text" name="l-name" placeholder="Last Name">
                            </div><br><br>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email Address">
                            </div><br><br>
                            <div class="col-md-6">
                                <input type="number" name="phone" placeholder="Phone Number">
                            </div><br><br>
                           
                            <div class="col-md-12">
                                <textarea name="message" placeholder="How can we help?"></textarea>
                            </div>
                           <button class="btn btn-warning" id="popup1">contact</button>
                        </form>
                    </div>
                </div>
            </div>
  
   
</body>
</html>