<?php
 include 'db.php';
 session_start();

 $email = '';
 $name='';
 $user_id = '';
 if($_SESSION['email'] == true){
    $email = $_SESSION['email'];
    $user_id = $_SESSION['id'];
    $name = $_SESSION['name'];
 }else{
    header("location:login.php");
 }
 $total= 0;

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $insert_contact = "INSERT INTO user_ocntact (name,email,phone,message) VALUES('$name', '$email', '$phone' ,'$message')";
    $ex_insert = mysqli_query($db_connect,$insert_contact);
 } 


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   
  </head>
  <body >
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 fw-bold" href="#">Forhadzon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product.php">Home</a>
        </li>
         <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Sign up</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li> -->
        
      </ul>
      <form class="d-flex w-75 mx-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      
      </form>
      <div class="d-flex align-items-center gap-5">
            <div class="">
                <a class="fs-5 text-decoration-none" href="cart.php">Cart</a>
            </div>
           
     <div>
     <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       <?php 
         $select = "SELECT * FROM users WHERE id = '$user_id'";
         $ex = mysqli_query($db_connect,$select);
         $row = mysqli_fetch_array($ex);     ?>
         
         <img class="rounded-circle" src="<?php echo $row['img'] ?>" width="60px" height="60px" alt=""> <?php

?>
         
          </a>
         <div class="dropdown-menu " style="left:-246px; padding:30px; width:330px;"> 
           <h5>Name :<?php echo $name ?></h5>
            <a href="" class="fs-5 text-black mb-4 text-sm d-block">E-mail : <span class="text-sm"><?php echo $email ?></span></a>
           <p class="mb-4"><a class="fs-5 text-black text-decoration-none" href="history.php">History</a></p>
           <p class="mb-4"><a class="fs-5 text-black text-decoration-none" href="contact.php">Contact Us</a></p>
            
            <div>
                <a class="btn btn-danger" href="logout.php">Logout</a>
            </div>
         </div>
</div>
     </div>
            
        </div>
    </div>
  </div>
</nav>
<div class="bg-secondary">
      
<div class="container">
        <div class="py-5 text-white">
            <h3>Contact With us</h3>
             
        </div>
    </div>
</div>

<!-- cart here  -->
<div class="container" style="min-height: 100vh;">
  <div class="row">
    <div class="col-offset-4"></div>
    <div class="col-lg-8 mx-auto shadow p-4 mt-5">

    <h3 class="mb-3 text-center">Please Fill The Contact Form</h3>
    <form method="post" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="write your name" class="form-control mb-3">
                    <input type="email" name="email" placeholder="write your email" class="form-control mb-3">
                    <input type="text" name="phone" placeholder="write your phone number" class="form-control mb-3">
                    <textarea class="form-control mb-5 d-block" name="message" id="" placeholder="write your problem" cols="30" rows="10"></textarea>
                   
                    <a href="sendContact.php"><button name="submit" class="btn btn-lg btn-primary px-5 py-2">Submit</button></a>

                    

                </form>
  </div>
    </div>
</div>




<footer class="bg-dark text-white py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="mb-4">ForhadZon</h4>
                <p>The customer is at the heart of our unique business model, Lorem ipsum dolor sit..</p>
                <div class="mt-3 d-flex">
                    <div>
                        <img src="./image/card-1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <h4 class="mb-4">SHOPING</h4>
                <p>Shoping Store</p>
                <p>Trending Shoes</p>
                <p>Accessories</p>
                <p>Sale</p>
            </div>
            <div class="col-lg-2">
                <h4 class="mb-4">SHOPING</h4>
                <p>Contact Us</p>
                <p>Payment Methods</p>
                <p>Delivary</p>
                <p>Return & Exchanges</p>
            </div>
            <div class="col-lg-4">
                <h4 class="mb-4">Customer Care</h4>
                 <p>Help Center</p>
                 <p>How to Buy</p>
                 <p>Returns & Refunds</p>
                 <p>Contact Us</p>
                 <p>Terms & Conditions</p>





            </div>
        </div>
        <p class="text-center p-0 mb-0 mt-4">ForhadZon &copy; Right All Reserved 2023</p>
    </div>
</footer>


<script>
  // function removeRow(id){

  //   $.ajax({
  //     url:"delete.php",
  //     method:"GET",
  //     data:{id:id},
  //     success:function(res){
  //         console.log(res);
  //     }
  //   })
  // }


  // $.ajax({
  //   url:"cartShow.php",
  //   method:"GET",
  //   success: function(res){
  //     console.log(res);
  //   }
  // })
  </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>