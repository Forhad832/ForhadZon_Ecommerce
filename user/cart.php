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


 if(isset($_POST['upbtn'])){
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $update = "UPDATE cart SET quantity = '$quantity' WHERE product_id = '$product_id' AND user_id = '$user_id'";
    $ex_update = mysqli_query($db_connect,$update);
    if($ex_update){
      echo "<script>alert('success to update')";
    }else{
      echo "<script>alert('update failed')";
 
    }
 }
 $total= 0;
 if(isset($_GET['dlt_id'])){
  $id = $_GET['dlt_id'];
  $delete = "DELETE FROM cart WHERE id = '$id' AND user_id = '$user_id'";
  $ex = mysqli_query($db_connect,$delete);
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
            <h3>Shopping Cart</h3>
             <p class="fs-5">Home > <a class="text-white text-decoration-none" href="product.php">More Shopping</a></p>
        </div>
    </div>
</div>

<!-- cart here  -->
<div class="container" style="min-height: 100vh;">
    <div class="row ">
        <div class="col-lg-9">
        <table class="table">
                <thead>
                    <tr>
                        
                        <th>Image</th>
                        <th>Name</th>
                       
                        <th>Quantity</th>
                        <th>Grand Price</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
            
            <tbody>
               <?php
                $select = "SELECT add_product.name,add_product.img,add_product.current_price,cart.product_id,cart.quantity,cart.id FROM add_product,cart WHERE add_product.id = cart.product_id AND user_id = '$user_id'";

                $ex = mysqli_query($db_connect,$select);

                while($row = mysqli_fetch_array($ex)){ ?>
                   
                    <tr>
                        <td><img width="80px" height="80px" src="./../admin/images/<?php echo $row['img'] ?>" alt=""> 
                       </td>
                        <td><?php echo $row['name'] ?> <br>
                        $<?php echo $row['current_price'] ?></td>
                       
                        <td>
                            
                       <form method="POST">
                         <input type="number" class="text-center mx-2" id="quantity" name="quantity" min="1" max="5" value="<?php echo $row['quantity'] ?>">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                        <button name="upbtn" class="bg-white"><i class="fa-solid fa-arrows-rotate fs-4 " ></i></button>
                       </form>
                    
                    
                    </td>
                        <td>
                            <?php 
                            $grand_total = (int)$row['quantity'] * (int)$row['current_price'];
                            echo $grand_total;
                            ?>
                        </td>
                        <td>
                          <a href="cart.php?dlt_id=<?php echo $row['id'] ?>"><button onclick="removeRow()" class="border-0"><i class="fa-solid fa-trash-can text-danger fs-3"></i></button></a>
                        </td>
                    </tr>

                    <?php  
                             $total += $grand_total;
                         ?>
              <?php  }

            ?>
            </tbody>
            </table>
        </div>
        <div class="col-lg-3 shadow p-4 " style="min-height: 400px;">
        <input type="text" class="form-control mb-2" placeholder="write you cupon code"><button class="btn btn-primary">Apply</button>
          <h5 class="mt-3 mb-3">SubTotal Price : $<?php echo $total ?></h5>
          <h5 class="mb-3">Discount : 00</h5>
          <h5>Total <span><?php echo $total ?></span></h5>
          <div class="mt-5">
            <a href="orderNow.php"><button class="btn btn-success">Order Now</button></a>
          </div>
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>