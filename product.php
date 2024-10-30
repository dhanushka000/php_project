<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

$warning_msg = [];
$success_msg = '';

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Adding products to wishlist
if (isset($_POST['add_to_wishlist'])) {
    $id = unique_id();
    $product_id = $_POST['product_id'];

    // Verify if product already in wishlist
    $varify_wishlist = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ? AND product_id = ?");
    $varify_wishlist->execute([$user_id, $product_id]);

    // Verify if product already in cart
    $cart_num = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ? AND product_id = ?");
    $cart_num->execute([$user_id, $product_id]);

    if ($varify_wishlist->rowCount() > 0) {
        $warning_msg[] = 'Product already exists in your wishlist';
    } else if ($cart_num->rowCount() > 0) {
        $warning_msg[] = 'Product already exists in your cart';
    } else {
        // Select product price
        $select_price = $conn->prepare("SELECT * FROM `products` WHERE id = ? LIMIT 1");
        $select_price->execute([$product_id]);
        $fetch_price = $select_price->fetch(PDO::FETCH_ASSOC);

        // Insert product into wishlist
        $insert_wishlist = $conn->prepare("INSERT INTO `wishlist` (id, user_id, product_id, price) VALUES (?, ?, ?, ?)");
        $insert_wishlist->execute([$id, $user_id, $product_id, $fetch_price['price']]);
        $success_msg = 'Product added to wishlist successfully';
    }
}

// Adding products to cart
if (isset($_POST['add_to_cart'])) {
    $id = unique_id();
    $product_id = $_POST['product_id'];

    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_SANITIZE_STRING);

    // Verify if product already in cart
    $varify_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ? AND product_id = ?");
    $varify_cart->execute([$user_id, $product_id]);

    // Check for the maximum items allowed in cart
    $max_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
    $max_cart_items->execute([$user_id]);

    if ($varify_cart->rowCount() > 0) {
        $warning_msg[] = 'Product already exists in your wishlist';
    } else if ($max_cart_items->rowCount() >= 20) {
        $warning_msg[] = 'Cart is full';
    } else {
        // Select product price
        $select_price = $conn->prepare("SELECT * FROM `products` WHERE id = ? LIMIT 1");
        $select_price->execute([$product_id]);
        $fetch_price = $select_price->fetch(PDO::FETCH_ASSOC);

        // Insert product into cart
        $insert_cart = $conn->prepare("INSERT INTO `cart` (id, user_id, product_id, price, qty) VALUES (?, ?, ?, ?, ?)");
        $insert_cart->execute([$id, $user_id, $product_id, $fetch_price['price'], $qty]);
        $success_msg = 'Product added to cart successfully';
    }
}
?>

<style type="text/css">
<?php include 'styler.css'; ?>   
</style><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible " content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">
        <title>Sri Lanka tea</title>
        <!-- link to css-->
         <link rel="stylesheet" href="styler.css">

         <link rel="stylesheet" href="product.php">
         <!-- box icons -->
          <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

          <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
           />

    </head>
    <body>

        <section class="produts" id="produts">
           
            <h1 class="heading">Our<span>Products</span></h1>


            <div class="box-container">

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  

                </div>
                <div class="image">
                  <img src="product1.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Black Tea</h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$15.99<span>20.99</span>
                  </div>
                </div>
              </div>
          
              <div class="box">
                
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  


                </div>
                <div class="image">
                  <img src="product2.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Decaf Tea</h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$20.99<span>28.00</span></div>
                </div>
              </div>

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  


                </div>
                <div class="image">
                  <img src="product3.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Flavoured Tea</h3>
                 
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$20.99<span>25.99</span>
                  </div>
                </div>
              </div>

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  


                </div>
                <div class="image">
                  <img src="product4.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Green Tea </h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$29.99<span>32.99</span>
                  </div>
                </div>
              </div>

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  


                </div>
                <div class="image">
                  <img src="product5.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Herbal Tea </h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$18.99<span>20.99</span>
                  </div>
                </div>
              </div>

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  


                </div>
                <div class="image">
                  <img src="product6.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Organic Tea</h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$35.99<span>39.99</span>
                  </div>
                </div>
              </div>

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  

                </div>
                <div class="image">
                  <img src="product7.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>white Tea</h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$14.99<span>20.99</span>
                  </div>
                </div>
              </div>

              <div class="box">
                <div class="icons">
                  <a href="#" class="bx bxs-shopping-bag-alt"></a>
                  <a href="#" class="bx bxs-heart"></a>
                  <a href="#" class="bx bxs-happy-heart-eyes"></a>
                  


                </div>
                <div class="image">
                  <img src="product8.jpeg" alt="">
                </div>
                <div class="content">
                  <h3>Oolong Tea</h3>
                  <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half-alt"></i>
                  </div>
                  <div class="price">$18.99<span>23.99</span>
                  </div>
                </div>
              </div>
              <a href="index.html" class="btn">Back to Home</a>
            </div>
          </section>








            </section>

          <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


        <!--link to js-->
        <script src="main.js">

        </script>
        <?php include 'components/alert.php'; ?>
    </body>
</html>