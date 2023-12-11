<?php

session_start();
require '../classes/Product.php';


// $product_obj = new Product;



?>

<!doctype html>
<html lang="en">

<head>
  <title>User</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <main>
      <div class="container">
           <div class="card w-50 mx-auto">
              <div class="card-header">
                 <h2 class="text-center mb-4 text-success"> <i class="fa-solid fa-cash-register"></i>Buy Product</h2>
              </div> 
              <div class="card-body">
                      <div class="row">
                         <div class="col-6 text-left">
                        <h6>Product Name</h6>
                        <p class="display-7">
                            <?= $product_name?>
                        </p>
                      </div>
                      <div class="row">
                        <div class="col-6">
                           <h6>Price</h6>
                           <p class="display-7">
                               <?= $price ?>
                           </p>
                        </div>
                        <div class="col-6">
                           <h6>Stocks Left</h6>
                           <p class="display-7">
                               <?= $stocks_left ?>
                            </p>
                        </div>
                    </div>
                    <div>
                        <label for="">Buy Quantity</label><br>
                        <input type="number" name="payment" id="payment" class="mx-auto mt-3">
                    </div>
                        <button type="submit" name="btn" class="btn btn-success w-100 mt-3">Pay</button>
                    </div>
           

           </div> 
      </div>
        
    </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>