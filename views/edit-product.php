<?php

session_start();
require '../classes/Product.php';


$product_obj = new User;
// $user = $user_obj->getProduct();



?>

<!doctype html>
<html lang="en">

<head>
  <title>Product</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    
<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
            <div class="navbar-nav">
                <span class="navbar-text">Welcome <?= $_SESSION['username'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="col-4 mx-auto">
            <h2 class="text-center mb-4">Edit User</h2>


            <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
                <!-- enctype; if we upload, its necessary -->
                <div class="row justify-content-center mb-3">
                    <div class="col-6">
                        <img src="" alt="">
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="<?= $user['first_name']?>">
                </div>
                <div class="mb-3">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="<?= $user['last_name']?>">
                </div>
                <div class="mb-3">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $user['username']?>"> 
                </div>
                <div class="text-end">
                    <label for="" class="btn btn-secondary btn-sm">Cancel</label>
                </div>

            </form>
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