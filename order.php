<?php
 include 'db.php';
 error_reporting(0);
 session_start();
$user_id =  $_SESSION['id'];
$msg="";
 $email="";
 if($_SESSION['email']==true){
    $email=$_SESSION['email'];

 }else{
    header("location:login.php");
 }

    $sel = "SELECT add_product.name,add_product.current_price,cart.user_id ,
    cart.quantity 
    from add_product,cart WHERE add_product.id = cart.product_id AND  user_id='$user_id'";
    $ex = mysqli_query($con,$sel);
    $total=0;
    while($row=mysqli_fetch_array($ex)){
      $product_name[] = $row['name'] . '('.$row['quantity'].')';
       
      $total_price = (int)$row['current_price'] * (int)$row['quantity'];

      $total +=$total_price;

    }
    $imp_convert = implode(",",$product_name);
   

   if(isset($_POST['order'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $city = $_POST['city'];
       $payment = $_POST['payment'];
       $PaymentSystem = $_POST['PaymentSystem'];
       $paymobileBank = $_POST['paymobileBank'];
       $date = $_POST['date'];
       //for insert 
       $month = date('m');
       $insert = "INSERT INTO order_product(name,	email	,phone	
       ,city	,payment,	PaymentSystem,	paymobileBank,	user_order,
       	total_taka,	user_id,	date ,month	)
        VALUES('$name','$email','$phone','$city','$payment',
        '$PaymentSystem','$paymobileBank','$imp_convert','$total','$user_id','$date','$month')";
        $ex = mysqli_query($con,$insert);
        if($ex){
          $msg ="order success";
        }else{
          $msg ="order failed";
        }

        mysqli_query($con,"DELETE FROM cart WHERE user_id='$user_id'");
   }

 ?>
  
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Display toaster message
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "positionClass": "toast-top-right"
            };
            toastr.success('<?php echo $msg ?>');
        });
    </script>
</head>
  <body>
    <div class="container">
        <h1 class='bg-dark text-white p-2 text-center'>please provide right info</h1>
        <div class="row">
            <div class="col-lg-8">
                <form method="post">
                  <input class='form-control'name="name" type="text" placeholder="user name"> <br>
                  <input class='form-control'name="email" type="text" placeholder="user email"> <br>
                  <input class='form-control'name="phone" type="text" placeholder="user phone"> <br>
                  <input class='form-control'name="city" type="text" placeholder="enter city"> <br>
                
                  <input onchange="Fun1()" type="radio" name="payment" id="cash" value='cash'>    cash on
                  <input  onchange="Fun2()" type="radio" name="payment"id="Mobile_bank" value='Mobile_bank'>  Mobile Banking
                  <input  onchange="Fun3()" type="radio"name="payment"id="bank" value='bank'>   Banking
                  <span id="show"></span>
                  <span id="drop"></span>
                  <input type="hidden" name="date" value="<?php echo date('d-m-y') ?>">
                  <br><br> <button name='order' class='btn btn-success'>Order Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var cash = document.getElementById("cash");
        var Mobile_bank = document.getElementById("Mobile_bank");
        var bank = document.getElementById("bank");
        function Fun1(){
            if(cash.value=='cash'){
               var input = "<input type='text' placeholder='sallor name' name='PaymentSystem' class='form-control'>";
             $("#show").append(input);

             document.getElementById("Mobile_bank").disabled = true;
                document.getElementById("bank").disabled = true;
            }else{
                
            }
        }
        function Fun2(){
            if(Mobile_bank.value=='Mobile_bank'){
               var input = "<input type='text' placeholder='enter payment number' name='PaymentSystem' class='form-control'>";
               var dropdown = "<select  class='form-control' name='paymobileBank'><option>Bkash</option><option>Nagad</option><option>Rocket</option></select>";
             
               $("#show").append(input);
               $("#drop").append(dropdown);
             document.getElementById("cash").disabled = true;
                document.getElementById("bank").disabled = true;
            }else{

            }
       }
       function Fun3(){
        if(bank.value=='bank'){
               var input = "<input type='text' placeholder='enter bank/card number' name='PaymentSystem' class='form-control'>";
             $("#show").append(input);
             document.getElementById("cash").disabled = true;
                document.getElementById("Mobile_bank").disabled = true;
            }else{

            }
      }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
