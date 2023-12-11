<?php

session_start();
require '../classes/Product.php';


$user_obj = new User;
$products = $user_obj->getAllproducts($id);



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
      <div class="col-4 mx-auto">
        <i class="fa-solid fa-box"><h2 class="text-center mb-4">Add Product</h2></i>


            <form action="../actions/add-product.php" method="post">
                <div class="row justify-content-center mb-3">
                </div>
                <div class="mb-3">
                    <label for="">Product Name</label><br>
                    <input type="text" class="form-control" name="product_name" value="<?= $user['product_name']?>">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="price" value="<?= $user['price']?>">
                    <label for="">Quantity</label>
                    <input type="text" class="form-control" name="quantity" value="<?= $user['quantity']?>"> 
                </div>
                <button type="submit" class="form-control btn-primary">Add</button>

            </form>
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