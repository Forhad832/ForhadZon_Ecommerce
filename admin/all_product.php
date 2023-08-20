<?php
  include 'db.php';
  session_start();
  $email = "";
 
  if($_SESSION['email'] == true ){
    $email = $_SESSION['email'];
    
    
  }else{
    header("location:login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forhadzon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <div>
          
            <img class="rounded-circle" src="./new2.jpg" width="50" height="50" alt="admin">
        </div>
      </form>
    </div>
  </div>
</nav>
  <div class="container-fluid">
 

  <div class="row" style="min-height: 100vh;">
  <div class="col-lg-2 shadow bg-secondary p-4 text-white">
            <div class="navbar-nav">
                <li class="nav-item"><a href="visitor.php" class="nav-link mb-3">Visitor</a></li>
                <li class="nav-item"><a href="add_product.php" class="nav-link mb-3">Add Product</a></li>
                <li class="nav-item"><a href="all_product.php" class="nav-link mb-3">All Product</a></li>
                <li class="nav-item"><a href="order-product.php" class="nav-link mb-3">order prouduct</a></li>
                <li class="nav-item"><a href="confirm.php" class="nav-link mb-3">Confrim prouduct</a></li>
                <li class=" bg-danger px-4 mb-0 py-1 text-center"><a href="logout.php" class="nav-link mb-3">Logout</a></li>
            </div>
        </div>
  <div class="col-lg-9">
  <h4 class="text-center text-center my-5">All Products Details</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Current_price</th>
                <th>BEfore Price</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
                $select = "SELECT * FROM add_product";
                $ex = mysqli_query($db_connect,$select);

                while($row = mysqli_fetch_array($ex)) { ?>

                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><img src="images/<?php echo $row['img'] ?>" width="80px" height="80px" alt=""></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['current_price'] ?></td>
                            <td><?php echo $row['before_price'] ?></td>
                        </tr>
                <?php  }

?>
        </tbody>
    </table>
  </div>
      
  
      
     </div>
  </div>


<footer>
    <div class="container-fluid">
        <div class="bg-secondary py-5">
            <p class="text-center text-white">copyrght all Resererd by Forhad</p>
        </div>
    </div>
</footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>