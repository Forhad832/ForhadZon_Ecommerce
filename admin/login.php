<?php
    include 'db.php';
    session_start();
    if(isset($_POST['login'])){
       
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $select = "SELECT * FROM admin WHERE email = '$email' AND pass = '$pass'";
        $ex_select = mysqli_query($db_connect,$select);
        $row = mysqli_fetch_array($ex_select);

        if($row){
            $_SESSION['email'] = $row['email'];
            $_SESSION['img'] = $row['img'];
            $_SESSION['id'] = $row['id'];
            header("location:index.php");
        }else{
            echo "<script>alert('again login')</script>";
            header("location:login.php");
        }

     
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
    <div class="signUp-section">
        <div class="container">
            <div class="sign-box">
                <h3 class="text-white mb-3">Please login</h3>
                <form method="post" enctype="multipart/form-data">
                    
                    <input type="email" name="email" placeholder="write your email" class="form-control mb-3">
                    <input type="password" name="pass" placeholder="write your password" class="form-control mb-3">
                    <a href="login.php"><button name="login" class="btn btn-lg btn-primary px-5 py-2">logIn</button></a>
                    <a href="signup.php"><button name="signup" class="btn btn-lg btn-primary px-5 py-2">Sign Up</button></a>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>