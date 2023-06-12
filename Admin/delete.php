<?php
 include 'db.php';
  $id = $_GET['id'];
  $del = "DELETE FROM add_product WHERE id ='$id'";
  $ex = mysqli_query($con,$del);
  if($ex){
    echo "success";

  }else{
    echo "failed";
  }

 ?>