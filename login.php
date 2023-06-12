<?php
 include 'db.php';
 session_start();
  if(isset($_POST['login'])){
       $email = $_POST['email'];
       $pass = $_POST['pass'];

       $sel = "SELECT * FROM account_create where email='$email' AND pass='$pass'";
       $ex = mysqli_query($con,$sel);
       $row = mysqli_fetch_array($ex);
       if($row){
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header("location:product.php");
       }else{
        echo "<script>alert('email and pass doesnot match')</script>";
       }
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
          <div class="container">
            <div class="row">
            <form method="post" >
              
              <input placeholder="enter email" type="email" name="email" class="form-control"> <br>

              <input placeholder="enter password" type="password " name="pass" class="form-control">
              <button name="login" class="btn btn-primary">create account</button>
              <a href="login.php">login</a>
          </form>
            </div>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>              