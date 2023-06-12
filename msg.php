<?php
  include 'db.php';
  
    extract($_POST);
  if(isset($_POST['name']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $msg = $_POST['msg'];
       $inset = "INSERT INTO contact(name,msg) VALUES('$name','$msg')";
       $ex = mysqli_query($con,$inset);
       if($inset){
        echo "sucess";
       }else{
        echo "failed";
       }
  }