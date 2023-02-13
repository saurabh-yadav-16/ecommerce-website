<?php


session_start();
include('connection.php');




if(isset($_POST['place_order'])){

    //get user info and store it 
    
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city  = $_POST['city'];
    $address = $_POST['address'];
    $order_cost= $_SESSION['total'];
    $order_status = "on_hold";
    $user_id = 1;
    $order_date = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("INSERT INTO orders (orders_cost,order_status,user_id,user_phone,user_city,user_address,order_date)
    VALUES(?,?,?,?,?,?,?);");

    $stmt->bind_param('isiisss',$order_cost,$order_status,$user_id,$phone,$city,$address,$order_date);

    $stmt->execute();
    $order_id = $stmt->insert_id;
    

    //get products from the cart

    $_SESSION['cart'];
    foreach ($_SESSION['cart'] as $key => $value) {
        
        $product = $_SESSION['cart'][$key];
        $product_id = $product['product_id'];
        $product_name = $product['product_name'];
        $product_image = $product['product_image'];
        $product_price = $product['product_price'];
        $product_quantity = $product['product_quantity'];


        $stm1 = $conn->prepare("INSERT INTO order item(order_id,product_id,product_name,product_image,product_price,product_quantity,user_id,order_date)
        VALUES(?,?,?,?,?,?,?,?)");

        $stm1->bind_parma('iissiiis',$order_id,$product_id,$product_name,$product_image,$product_price,$product_quantity,$user_id,$order_date);
        $stmt1->execute();
    }








}



?>