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
  <div class="container">
  <div class="row" style="min-height: 100vh;">
        <div class="col-lg-3 shadow bg-secondary p-4 text-white">
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
            <h2>Dashboard</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, odio. Dicta dolorum quod excepturi cupiditate obcaecati facilis eum, et nulla necessitatibus impedit minus eos maxime, exercitationem voluptates reprehenderit aliquid assumenda laborum harum. Itaque vero necessitatibus quisquam accusantium in ratione explicabo unde, ab quibusdam tempore, ad magni perspiciatis culpa cum non quos aperiam saepe quam atque iure voluptatibus totam maxime distinctio. Saepe aliquid molestiae eum dignissimos magni. Reprehenderit, officiis quisquam! Reprehenderit aspernatur dolore fugiat, laudantium excepturi laboriosam, totam fuga distinctio accusamus pariatur quae sapiente necessitatibus officia sed quidem. Nihil in quaerat odio? Perferendis, accusamus earum libero dolorum vero illum neque corporis dolore tempore ea unde repellat, molestias fuga magni vitae magnam possimus minus rerum quos quas. Recusandae impedit possimus eos totam aut at debitis deleniti sint minima, voluptatibus quos officiis aliquam minus hic, incidunt exercitationem vero dolorem eum? Mollitia pariatur qui quisquam excepturi. Voluptates voluptatem dolor laborum, nam deserunt distinctio, eligendi nemo veritatis illo provident exercitationem a optio eum aliquam temporibus laudantium pariatur vero vitae beatae recusandae! Dolore tempora laboriosam omnis error quas ratione. Numquam perspiciatis aspernatur quidem aliquam consectetur provident at aliquid, vel, natus ex cum sapiente nesciunt eos maxime est sequi magni nostrum adipisci beatae cupiditate consequatur totam accusamus.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, odio. Dicta dolorum quod excepturi cupiditate obcaecati facilis eum, et nulla necessitatibus impedit minus eos maxime, exercitationem voluptates reprehenderit aliquid assumenda laborum harum. Itaque vero necessitatibus quisquam accusantium in ratione explicabo unde, ab quibusdam tempore, ad magni perspiciatis culpa cum non quos aperiam saepe quam atque iure voluptatibus totam maxime distinctio. Saepe aliquid molestiae eum dignissimos magni. Reprehenderit, officiis quisquam! Reprehenderit aspernatur dolore fugiat, laudantium excepturi laboriosam, totam fuga distinctio accusamus pariatur quae sapiente necessitatibus officia sed quidem. Nihil in quaerat odio? Perferendis, accusamus earum libero dolorum vero illum neque corporis dolore tempore ea unde repellat, molestias fuga magni vitae magnam possimus minus rerum quos quas. Recusandae impedit possimus eos totam aut at debitis deleniti sint minima, voluptatibus quos officiis aliquam minus hic, incidunt exercitationem vero dolorem eum? Mollitia pariatur qui quisquam excepturi. Voluptates voluptatem dolor laborum, nam deserunt distinctio, eligendi nemo veritatis illo provident exercitationem a optio eum aliquam temporibus laudantium pariatur vero vitae beatae recusandae! Dolore tempora laboriosam omnis error quas ratione. Numquam perspiciatis aspernatur quidem aliquam consectetur provident at aliquid, vel, natus ex cum sapiente nesciunt eos maxime est sequi magni nostrum adipisci beatae cupiditate consequatur totam accusamus.</p>
        </div>
     </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>