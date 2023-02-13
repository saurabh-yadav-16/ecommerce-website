<?php
error_reporting(0);

include("server/connection.php");

session_start();

if (isset($_POST['add_to_cart'])) {

  if (isset($_SESSION['cart'])) {

    $products_array_ids = array_column($_SESSION['cart'], "product_id");
    if (!in_array($_POST['product_id'], $products_array_ids)) {


      $product_id = $_POST['product_id'];

      $product_array = array(

        'product_id' => $_POST['product_id'],
        'product_name' => $_POST['product_name'],
        'product_price' => $_POST['product_price'],
        'product_image' => $_POST['product_image'],
        'product_quantity' => $_POST['product_quantity']

      );

      $_SESSION['cart'][$product_id] = $product_array;
    } else {
      echo '<script>alert("Product already added)</script>';
    }
  } else {


    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(

      'product_id' => $product_name,
      'product_name' => $product_name,
      'product_price' => $product_price,
      'product_image' => $product_image,
      'product_quantity' => $product_quantity

    );

    $_SESSION['cart'][$product_id] = $product_array;
  }
}else if (isset($_POST['remove_product'])){
  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);
}else if (isset($_POST['edit_quantity'])) {
  $product_id = $_POST['product_id'];
  $product_quantity = $_POST['product_quantity'];
  $product_array = $_SESSION['cart'][$product_id];
  $product_array['product_quantity']=$product_quantity;
  $_SESSION['cart'][$product_id]= $product_array;
}


function calculateTotalCart()
{
  $total = 0;
  foreach ($_SESSION['cart'] as $key => $value) {
    $product = $_SESSION['cart'][$key];
    $price = $product['product_price'];
    $quantity = $product['product_quantity'];

    $total = $total + ($price * $quantity);
  }

  $_SESSION['total'] = $total;
}

calculateTotalCart();


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

  <!--Cart-->
  <section class="cart container my-5 py-5">
    <div class="container mt-5">
      <h2 class="font-weight-bolde">Your Cart</h2>
      <hr />
    </div>
    <table class="mt-5 pt-5">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>


      <?php foreach ($_SESSION['cart'] as $key => $value) { ?>

        <tr>
          <td>
            <div class="product-info">
              <img src="assets/imgs/<?php echo $value['product_image']; ?>" alt="" />
              <div>
                <p><?php echo $value['product_name']; ?></p>
                <small><span>$</span><?php echo $value['product_price']; ?></small>
                <br>
                <form method="POST" action="cart.php">
                  <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
                  <input type="submit" name="remove_product" class="remove-btn" value="remove" />
                </form>

              </div>
            </div>
          </td>
          <td>
            <form method="POST" action="cart.php">
              <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
              <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>" />
              <input type="submit" class="edit-btn" value="edit" name="edit_quantity" />
            </form>

          </td>
          <td>
            <span>$</span>
            <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
          </td>
        </tr>

      <?php } ?>



    </table>
    <div class="cart-total">
      <table>
        <tr>
          <td>Total</td>
          <td>$ <?php echo $_SESSION['total']; ?></td>
        </tr>
      </table>
    </div>
    <div class="checkout-container">
      <form method="POST" action="checkout.php">
        <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout" >
      </form>
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