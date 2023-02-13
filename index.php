<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | RGITSHOP</title>

  
  <!-- Bootstrap import-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  
  <!--font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="./assets/imgs/logo-black.png" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a href="./cart.php"><i class="fas fa-shopping-cart"></i></a>
          </li>
          <li class="nav-item">
            <a href="./account.php"><i class="fas fa-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Home-->
  <section id="home">
    <div class="container-fluid">
      <h5>NEW ARRIVALS</h5>
      <h1>Best prices this season</h1>
      <p>RGITSHOP offers the best products for the most affordable prices</p>
      <a href="shop.php"><button>Shop Now!!!</button></a>
    </div>
  </section>

  <!--Section-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <!--one-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="./assets/imgs/1.jpg" />
        <div class="details">
          <h2>50% off on hoodies</h2>
          <a href="shop.php"><button>Shop Now!!!</button></a>
        </div>
      </div>
      <!--two-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="./assets/imgs/5.jpg" />
        <div class="details">
          <h2>Brand new backpacks</h2>
          <a href="shop.php"><button>Shop Now!!!</button></a>
        </div>
      </div>
      <!--three-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="./assets/imgs/4.jpg" />
        <div class="details">
          <h2>Awesome Watches!!!!</h2>
          <a href="shop.php"><button>Shop Now!!!</button></a>
        </div>
      </div>
    </div>
  </section>

  <!--featured-->
  <section id="featured" class="my-3 pb-3">
    <div class="container-fluid text-center mt-3 py-2">
      <h3>Our Featured</h3>
      <hr class="mx-auto" />
      <p1>here you can checkout our featured products</p1>
    </div>
    <div class="row mx-auto container-fluid">
      <?php include('server/get_featured_products.php'); ?>
      <?php while ($row = $featured_products->fetch_assoc()){?>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="./assets/imgs/<?php echo $row['product_image']; ?>" />
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h3 class="p-name"><?php echo $row['product_name']; ?></h3>
        <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
        <a href="<?php echo "single_product.php?product_id=".$row['product_id']?>"><button class="buy-btn">Buy Now</button></a>
      </div>
      <?php } ?>
    </div>
  </section>

  <!--Banner-->
  <section id="banner">
    <div class="container-fluid">
      <h5>NEW ARRIVALS</h5>
      <h1>Best prices this season</h1>
      <p>RGITSHOP offers the best products for the most affordable prices</p>
      <a href="shop.php"><button>Shop Now!!!</button></a>
    </div>
  </section>

  <!--footer-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img src="assets/imgs/logo-white.png" />
        <p class="pt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
          magnam numquam quae, libero beatae eligendi incidunt unde voluptate
          perferendis ab corrupti quas rem a omnis ipsum obcaecati explicabo
          sit possimus.
        </p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase">
          <li><a href="#">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Boys</a></li>
          <li><a href="#">Girls</a></li>
          <li><a href="#">New arrivals</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">Address</h6>
          <p>123 street versoa mumbai</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone No</h6>
          <p>(+91)420-420-420</p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p>rgitshop123@gmail.com</p>
        </div>
      </div>
    </div>

    <div class="copyright mt-5">
      <div class="row container-fluid mx-auto">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mx-auto">
          <i class="fa-brands fa-cc-paypal"></i>
          <i class="fa-brands fa-cc-visa"></i>
          <i class="fa-solid fa-credit-card"></i>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 text-nowrap mb-2 mx-auto">
          <p>RGITSHOP @2025 All rights Reserved</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mx-auto">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>