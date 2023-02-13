<?php

include("server/connection.php");
if(isset($_GET['product_id'])){

$product_id = $_GET['product_id'];
  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
  $stmt->bind_param("i",$product_id);
  $stmt->execute();
  
  $product = $stmt->get_result();

}else{

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

  <!--Single Product-->

  <section class="container single-product my-5 pt-5">
    <div class="row mt-5">
      <?php while($row = $product->fetch_assoc()){?>

      
      <div class="col-lg-5 col-md-6 col-sm-12">
        <img class="img-fluid w-100 pb-1" src="assets/imgs/<?php echo $row['product_image']; ?>" alt="" id="mainImg" />
        <div class="small-img-group">
          <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image']; ?>" width="100%" alt="" class="small-img" />
          </div>
          <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image2']; ?>" width="100%" alt="" class="small-img" />
          </div>
          <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image3']; ?>" width="100%" alt="" class="small-img" />
          </div>
          <div class="small-img-col">
            <img src="assets/imgs/<?php echo $row['product_image4']; ?>" width="100%" alt="" class="small-img" />
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-12 col-sm-12">
        <h6>Category/<?php echo $row['product_category']; ?></h6>
        <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
        <h2>$<?php echo $row['product_price']; ?></h2>
        <form method="POST" action="cart.php">
          <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>"/>
          <input type='hidden' name="product_image" value="<?php echo $row['product_image']; ?>"/>
          <input type='hidden' name="product_name" value="<?php echo $row['product_name']; ?>"/>
          <input type='hidden' name="product_price" value="<?php echo $row['product_price']; ?>"/>
          <input type="number" name="product_quantity" value="1" />
          <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
        </form>
        <h4 class="mt-5 mb-5">Product Details</h4>
        <span><?php echo $row['product_description']; ?></span>
      </div>
      
      <?php } ?>
    </div>
  </section>

  <!--Related Products-->
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

  <script>
    var mainImg = document.getElementById("mainImg");
    var smallImg = document.getElementsByClassName("small-img");

    for (let i = 0; i < 4; i++) {
      smallImg[i].onclick = function() {
        mainImg.src = smallImg[i].src;
      };
    }
  </script>
</body>

</html>