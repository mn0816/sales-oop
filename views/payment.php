<!doctype html>
<html lang="en">
    <head>
        <title>Payment</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="bg-light">
        <div style="height:100vh;">
          <div class="container">
            <div class="row">
                <div class="card w-50 mx-auto">
                    <div class="card-header">
                    <h1 class="text-success"><i class="fa-solid fa-hand-holding-dollar"></i>Payment</h1>
                    </div>
                    <div class="row">
                        <div class="card-body">
                         <div class="col-6 text-left">
                        <h6>Product Name</h6>
                        <p class="display-7">
                            <?= $product_name?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <h6>Total Price</h6>
                           <p class="display-7">
                               <?= $multiplication ?>
                           </p>
                        </div>
                        <div class="col-6">
                           <h6>Buy Quantity</h6>
                           <p class="display-7">
                               <?= $quantity ?>
                            </p>
                            <h6 class="text-danger">Maximum of 1000</h6>
                        </div>
                    </div>
                    <div>
                        <label for="">Payment</label><br>
                        <i class="fa-solid fa-dollar-sign">                        <input type="number" name="payment" id="payment" class="mx-auto"></i>
                    </div>
                        <button type="submit" name="btn" class="btn btn-success w-100 mt-3">Pay</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
        


        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
