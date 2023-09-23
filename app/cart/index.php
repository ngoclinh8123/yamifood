<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../asset/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../asset/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../../asset/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../asset/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../asset/css/custom.css">

    <link rel="stylesheet" href="../../asset/css/cart.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.../../asset/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
		include_once("../layout/header.php");
	?>

    <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Cart</h1>
				</div>
			</div>
		</div>
	</div>
    <!-- Start Gallery -->

    <section class="h-100">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          <div>
            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p>
          </div>
        </div>

        <div class="card border-rad025 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="/yamifood/asset/images/img-01.jpg"
                  class="img-fluid border-rad025" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3 mgt-sm-12 name-price">
                <h2 class="lead fw-normal mb-2">Basic T-shirt</h2>
                <p>$499</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm appearance-none text-center" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-right">
                <h5 class="mb-0 mgt-sm-12 total-price-item"><span class= "mobile-only">Total: </span> $499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end text-right">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-rad025 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="/yamifood/asset/images/img-02.jpg"
                  class="img-fluid border-rad025" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3 mgt-sm-12 name-price">
                <h2 class="lead fw-normal mb-2">Basic T-shirt</h2>
                <p>$499</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm appearance-none text-center" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-right">
                <h5 class="mb-0 mgt-sm-12 total-price-item"><span class= "mobile-only">Total: </span> $499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end text-right">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-rad025 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="/yamifood/asset/images/img-03.jpg"
                  class="img-fluid border-rad025" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3 mgt-sm-12 name-price">
                <h2 class="lead fw-normal mb-2">Basic T-shirt</h2>
                <p>$499</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm appearance-none text-center" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-right">
                <h5 class="mb-0 mgt-sm-12 total-price-item"><span class= "mobile-only">Total: </span> $499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end text-right">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-rad025 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="/yamifood/asset/images/img-04.jpg"
                  class="img-fluid border-rad025" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3 mgt-sm-12 name-price">
                <h2 class="lead fw-normal mb-2">Basic T-shirt</h2>
                <p>$499</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm appearance-none text-center" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-right">
                <h5 class="mb-0 mgt-sm-12 total-price-item"><span class= "mobile-only">Total: </span> $499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end text-right">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Discount code</label>
            </div>
            <button type="button" class="btn primary-bg-color btn-lg ms-3">Apply</button>
            </div>
            <div class="total-price">
                Total price: $499
            </div>
        </div>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn primary-bg-color btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

	<!-- End Gallery -->

	<?php
		include_once("../layout/footer.php");
	?>

	<!-- ALL JS FILES -->
	<script src="../../asset/js/jquery-3.2.1.min.js"></script>
	<script src="../../asset/js/popper.min.js"></script>
	<script src="../../asset/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="../../asset/js/jquery.superslides.min.js"></script>
	<script src="../../asset/js/images-loded.min.js"></script>
	<script src="../../asset/js/isotope.min.js"></script>
	<script src="../../asset/js/baguetteBox.min.js"></script>
	<script src="../../asset/js/jquery.mapify.js"></script>
	<script src="../../asset/js/form-validator.min.js"></script>
    <script src="../../asset/js/contact-form-script.js"></script>
    <script src="../../asset/js/custom.js"></script>
</body>
</html>