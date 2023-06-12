<?php
 include 'db.php';
  
  $name = $_POST['name'];
  $description = $_POST['description'];
  $current_price = $_POST['current_price'];
  $before_price = $_POST['before_price'];
  $buying_price = $_POST['buying_price'];
  $title = $_POST['title'];
  $file = $_FILES['img']['name'];
  
  foreach($file as $key=>$value){
     $file = $_FILES['img']['name'][$key];
     $tmp = $_FILES['img']['tmp_name'][$key];
     move_uploaded_file($tmp,$file);
     $ins = "INSERT INTO add_product(name,description,current_price
     ,before_price,buying_price,title,img)
     VALUES('$name[$key]','$description[$key]','$current_price[$key]',
     '$before_price[$key]', '$buying_price[$key]',  '$title[$key]','".$value."')";

     $ex = mysqli_query($con,$ins);
     if($ex){
        echo "success";
     }else{
        echo "failed";
     }
  }
?>

