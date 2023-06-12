<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
  <body>
    
  <h1>contact us</h1>

    <div class="container">
        <input class="form-control" type="text" id="name" placeholder="enter name">
      
        <textarea class="form-control" name="" id="msg"placeholder="write your msg" cols="30" rows="10"></textarea>
         <button onclick="dataSubmit()" class="btn btn-primary">send</button>
    </div>

    <script>

        function dataSubmit(){
            var name =  $("#name").val();
       var msg =  $("#msg").val();
        $.ajax({
            url:"msg.php",
            method:"post",
            data:{name:name,msg:msg},
            success:function(res){
                alert(res)
            }
        })
        }
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>