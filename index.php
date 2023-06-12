<?php
  include 'db.php';
  if(isset($_POST['ip'])){
    $ip = $_POST['ip'];
    $isp= $_POST['isp'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $insert = "INSERT INTO visitor(ip	,isp,	country,	city)
    VALUES('$ip','$isp','$country','$city')";
    $sql = mysqli_query($con,$insert);
   
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ramajan Bajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" height="30" width="30"  src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Login
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="account.php">Account</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Bye Now</a></li>
          </ul>
        </li>
       
      </ul>
     
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--carousel-->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="banner" src="img/banner.jpg"  alt="...">
    </div>
    <div class="carousel-item">
      <img class="banner" src="img/banner2.jpg" alt="...">
    </div>
    <div class="carousel-item">
      <img class="banner" src="img/banner3.jpg"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--coursel ends here--->


<!--card section starts here-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
               <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success d-block">add to cart</button>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
            <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success  d-block">add to cart</button>
                  </div>
               </div>
                </div>
             <div class="col-lg-3">
             <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success  d-block">add to cart</button>
                  </div>
               </div>
             </div>
             <div class="col-lg-3">
             <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success  d-block">add to cart</button>
                  </div>
               </div>
            </div>

            <div class="col-lg-3">
               <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success d-block">add to cart</button>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
            <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success  d-block">add to cart</button>
                  </div>
               </div>
                </div>
             <div class="col-lg-3">
             <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success  d-block">add to cart</button>
                  </div>
               </div>
             </div>
             <div class="col-lg-3">
             <div class="card">
                  <div class="card-img">
                      <img class="c-img" src="img/c1.webp" alt="">       
                  </div>
                  <div class="card-title">
                    <h3 > Name : T-shirt</h3>
                  </div>
                  <div class="card-current-price">
                      <h4>price: 550/- <span class="text-warning"> <del>700</del></span></h4>   
                  </div>
                  
                  <div class="card-desc">
                     <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati itaque facere a, quae laboriosam maxime nisi ea nostrum? Eaque.
                    </p>
                  </div>
                  <div class="add-to-cart">
                    <button class="btn btn-success  d-block">add to cart</button>
                  </div>
               </div>
            </div>
        </div>
    </div>
<!--card section here--->
    <script>
       $.getJSON('http://ip-api.com/json/',function(ip){
          var mydata = {
            ip:ip.query,
            isp:ip.isp,
            country:ip.country,
            city:ip.regionName
          };
          $.ajax({
            url:"index.php",
            method:"post",
            data:mydata,
        });
         
       }) 

       
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  </body>
</html>