<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 fw-bold" href="#">Forhadzon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Sign up</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <div>
            <img src="./image/user.jpg" class="rounded-circle" width="60px" height="60px" alt="admin">
        </div>
      </form>
    </div>
  </div>
</nav>
  

 <div class="container-fluid">
 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://icms-image.slatic.net/images/ims-web/c2e2138b-6b8b-429e-9a04-1152e905233f.jpg_1200x1200.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://icms-image.slatic.net/images/ims-web/a50bd375-1282-4636-80ae-c61c26c1c6b2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://icms-image.slatic.net/images/ims-web/7973fb17-b545-4398-bc61-743f555692b0.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev bg-secondary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next bg-secondary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>


 <div class="flash-sell">
    <div class="container">
    <div class="row gap-5 my-5 justify-content-center">
        <div class="col-lg-2 shadow rounded fs-4 fw-semibold text-center p-2">cloths</div>
        <div class="col-lg-2 shadow rounded fs-4 fw-semibold text-center p-2">Accesories</div>
        <div class="col-lg-2 shadow rounded fs-4 fw-semibold text-center p-2">Hot Sales</div>
        <div class="col-lg-2 shadow rounded fs-4 fw-semibold text-center p-2">Shoe spring</div>
    </div>
    </div>
 </div>


 <!-- all product in here -->
 <!-- all product in here -->
 <!-- all product in here -->

<section class="allProduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/shirt.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Forhad Style Shirt</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-1.jpg" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Cleaning kit for pc Desktop keyboard</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-3.jpg" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Destroy mosquito kit</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-4.jpg" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Room Cleaning Kit _ room cleaning</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-5.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Maui Jim Guardrails Aviator Sunglasses</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-6.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Forhad Style Shirt</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-8.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>adidas Alliance II Sackpack/</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-9.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Running / Walking / Sport Shoes...</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0" style="height: 500px;">
                    <img src="./image/product-10.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Rolex Watch in Diamond</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card shadow border-0">
                    <img src="./image/shirt.webp" class="card-img img-fluid"    alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Full Pack T shirt Shoe And Jeans Pant</h4>
                            <p>price $400 <span><del class="text-danger">$550</del></span></p>
                            <button class="d-block w-100 bg-primary px-5 py-2 btn btn-primary btn-lg">add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




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
    window.addEventListener("click", function(){
        alert("Sign in first!");
        window.location.assign("signup.php");
    })
</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>