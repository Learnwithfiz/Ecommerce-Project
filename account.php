<?php
include 'db.php';
$err_name = $error_email=  $error_pass ="";
if(isset($_POST['create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if(empty($name)){
        $err_name = "name is required";
    }else if(empty($email)){
        $error_email  = "email is required";
    }else if(empty($pass)){
        $error_pass = "password is required";

    }else{
        $select = "SELECT * FROM account_create WHERE email='$email'";
        $ex1 = mysqli_query($con,$select);
        $count = mysqli_num_rows($ex1)>0;
        if($count){
            echo "<script>alert('email already exists')</script>";
        }else{
            $insert = "INSERT INTO account_create (name,email,pass)
            VALUES('$name','$email','$pass')";
            $ex = mysqli_query($con,$insert);
            if($ex){
                echo "<script>alert('account create success')</script>";
            }else{
                echo "<script>alert('account create failed')</script>";
            }
        }
        

    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <form method="post" >
                <input placeholder="enter name" type="text" name="name" class="form-control"> <br>
                <span  class="text-warning"><?php echo $err_name ?></span>
                <input placeholder="enter email" type="email" name="email" class="form-control"> <br>
                <span class="text-warning"><?php echo $error_email ?></span>
                <input placeholder="enter password" type="password " name="pass" class="form-control">

                <span class="text-warning"><?php echo $error_pass ?></span>
                <button name="create" class="btn btn-primary">create account</button>
                <a href="login.php">login</a>
            </form>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>