<?php
 include 'db.php';
 $id = $_POST['id'];
 $insert = "INSERT INTO confirm_order(user_id) VALUES('$id')";
 $ex = mysqli_query($con,$insert);
 if($ex ){
    echo "successs";
 }else{
    echo "failed";
 }

?>