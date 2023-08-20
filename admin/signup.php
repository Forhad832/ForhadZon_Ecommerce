<?php
    include 'db.php';
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $img = $_FILES['img']['name'];
       

        $check_email = "SELECT * FROM admin WHERE email = '$email'";
        $ex_chek_email = mysqli_query($db_connect,$check_email);

        
        $count = mysqli_num_rows($ex_chek_email);
        if(file_exists($count > 0)){
            echo "<script>alert('already email exits')";
        }else{
            $tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp,$img);

            $insert = "INSERT INTO admin (name,email,pass,img) VALUES ('$name','$email','$pass','$img')";
            $ex_insert = mysqli_query($db_connect,$insert);

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
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="signUp-section">
        <div class="container">
            <div class="sign-box">
                <h3 class="text-white mb-3">Please Sign Up first</h3>
                <form method="post" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="write your name" class="form-control mb-3">
                    <input type="email" name="email" placeholder="write your email" class="form-control mb-3">
                    <input type="password" name="pass" placeholder="write your password" class="form-control mb-3">
                    <input type="file" name="img"  class="form-control mb-3">
                    <a href="signup.php"><button name="signup" class="btn btn-lg btn-primary px-5 py-2">Sign Up</button></a>

                    <a href="login.php"><button name="login" class="btn btn-lg btn-primary px-5 py-2">logIn</button></a>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>