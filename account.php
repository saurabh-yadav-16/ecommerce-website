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

  <!--Account-->
  <section class="my-5 py-5">
    <div class="row container mx-auto">
      <div class="text-center mt-3 pt-5 col-lg-6 col-12">
        <h3 class="font-weight-bold">Account Info</h3>
        <hr class="mx-auto" />
        <div class="account-info">
          <p>Name : <span>John</span></p>
          <p>Email : <span>john@gmail.com</span></p>
          <p><a href="" id="orders-btn">Your Orders</a></p>
          <p><a href="" id="logout-btn">Logout</a></p>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <form id="account-form" action="">
          <h3>Change Password</h3>
          <hr class="mx-auto" />
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="Password" id="account-password" placeholder="Password" required />
          </div>
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" name="Confirm Password" id="account-password-confirm" placeholder="Password" required />
          </div>
          <div class="form-group">
            <input type="submit" value="Change Password" class="btn" id="change-pass-btn" />
          </div>
        </form>
      </div>
    </div>
  </section>

  <!--Orders-->
  <section class="orders container my-5 py-3">
    <div class="container mt-2">
      <h2 class="font-weight-bolde text-center">Your Orders</h2>
      <hr class="mx-auto">
    </div>
    <table class="mt-5 pt-5">
      <tr>
        <th>Product</th>
        <th>Date</th>
      </tr>
      <td>
        <div class="product-info">
          <img src="assets/imgs/shoe-01.jpg">
          <div>
            <p class="mt-3">White Shoes</p>
          </div>

        </div>
      </td>
      <td>
        <span>16-10-2022</span>
      </td>

      </tr>

    </table>

  </section>
  <!--footer-->
  <footer class="mt-5 py-5" id="footer">
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