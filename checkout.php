<?php

session_start();

if(!empty($_SESSION['cart'])&& isset($_POST['checkout'])){

}
else{
  header('location: index.php');
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | RGITSHOP</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

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

  <!--Checkout-->
  <section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
      <h2 class="form-weight-bold">Checkout</h2>
      <hr class="mx-auto" />
    </div>
    <div class="mx-auto container">
      <form id="checkout-form" method="POST" action="server/place_order.php">
        <div class="form-group checkout-small-element">
          <label for="">Name</label>
          <input type="text" name="name" id="checkout-name" class="form-control" placeholder="Name" required />
        </div>
        <div class="form-group checkout-small-element">
          <label for="">Email</label>
          <input type="text" name="email" id="cheackout-email" class="form-control" placeholder="Email" required />
        </div>
        <div class="form-group checkout-small-element">
          <label for="">Phone Number</label>
          <input type="tel" name="phone" id="cheackout-phone" class="form-control" placeholder="Phone Number" required />
        </div>
        <div class="form-group checkout-small-element">
          <label for="">City</label> 
          <input type="text" name="city" id="checkout-city" class="form-control" placeholder="City" required />
        </div> 
        <div class="form-group checkout-large-element">
          <label for="">Address</label>
          <input type="text" name="address" id="checkout-address" class="form-control" placeholder="Address" required />
        </div>

        <div class="form-group checkout-btn-container">
          <p>Total amount: $ <?php echo $_SESSION['total']; ?></p>
          <input type="submit" id="checkout-btn" name="place_order" value="Place order" class="btn" />
      </form>
    </div>
  </section>

  <!--footer-->
  <footer class="footer mt-5 py-5">
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