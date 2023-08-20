<?php
 include 'db.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $current_price = $_POST['current_price'];
  $before_price = $_POST['before_price'];
  $file = $_FILES['img']['name'];

  foreach($file as $key=>$value){
    $file = $_FILES['img']['name'][$key];
    $tmp = $_FILES['img']['tmp_name'][$key];

    move_uploaded_file($tmp,"images/".$file);

    $insert = "INSERT INTO add_product (name,description,current_price,before_price,img) VALUES ('$name[$key]', '$description[$key]','$current_price[$key]' , '$before_price[$key]', '".$value."')";

    $ex_insert = mysqli_query($db_connect,$insert);

    if($ex_insert){
        echo "success";
    }else{
        echo "failed";
    }
  }


?>