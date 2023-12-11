<?php
    session_start();

    require '../classes/Product.php';

    $user = new User;

    // $all_products = $product->getAllproducts();


?>

<!doctype html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-light" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
            <i class="fa-solid fa-house text-dark"></i>
            </a>
            <div class="navbar-nav mx-auto">
                <span class="navbar-text text-dark bg-center">Welcome, <?= $_SESSION['username'] ?></span>
            </div>
            <div>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
      <div class="col-6">
        <h2 class="text-left">Product List</h2>
        <i class="fa-solid fa-plus"></i>
        
            <table class="table table-hover align-middle">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Product Name</td>
                  <td>Price</td>
                  <td>Quantity</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </thead>

              <tbody>

                  <?php
                  while($products = $all_products->fetch_assoc()){
                    // we did get raw data from the database, but not completed

                  ?>
                  <tr>
                       <td><?= $products['id'];?></td>
                       <td><?= $products['product_name'];?></td>
                       <td><?= $products['price'];?></td>
                       <td><?= $products['quantity'];?></td>
                       <td>
                      <!-- ↓you can edit only your data, cuz code like once session start.... -->
                       <?php
                          if($_SESSION['id'] == $products['id']) {

                     
                       ?>
                       <a href="edit-product.php" class=" btn btn-warning">
                        <i class="fa-solid fa-pen"></i>
                       </a>

                       <a href="../actions/delete-product.php" class="btn btn-danger">
                       <i class="fa-solid fa-trash"></i>
                       </a>

                       <a href="buy-product.php" class="btn btn-success">
                       <i class="fa-solid fa-cash-register"></i>
                       </a>

                       <?php
                       }
                       ?>


                       </td>

                  </tr>
                     
                  <?php
                     }
                  ?>
                  <!-- php is a script; we can incert anywhere -->

                  <?php
                     if(empty($all_products)){
                      // opening of the cond
                      // if there is no information matched, "No Records Found" will displayed
                  ?>
                <tr>
                  <td class="text-center text-danger bg-secondary" colspan="6">No Records Found</td>
                </tr>

                  <?php

                     }
                    //  closing the cond
                  ?>
              </tbody>

            </table>
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