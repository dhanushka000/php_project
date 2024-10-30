<?php
include 'components/connection.php';
session_start();
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else{
    $user_id = '';
}
   if (isset($_POST['logout'])){
   	session_destroy();
   	header("location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible " content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">
        <title>Sri Lanka tea</title>
        <!-- link to css-->
         <link rel="stylesheet" href="stylel.css">
         <!-- box icons -->
          <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

          <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
           />

    </head>
    <body>
        <!--navigation bar-->
        <header class="header">
        <a href="#" class="logo">
        <img src="logo.jpg" alt="">
         </a>          
            <!-- nav list-->
             <nav class="navbar">
             <a href="#home" class="home-active">Home</a>
             <a href="about.html">About</a>
             <a href="#menu" >Menu</a>
             <a href="product.html" >Products</a>
             <a href="#review" >Review</a>
             <a href="#contact" >Contact</a>
             <a href="#blogs" >Blogs</a>
             <a href="Login.html">Signup</a>

             </nav>

          

             <div class="icons">
            
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas  fa-shopping-bag" id="cart-btn"></div>
                <div class="bx bx-menu" id="menu-btn"></div>
               
             </div>

             <form class="example" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="bx bx-search"></i></button>
              </form>


              <div class="cart-items-container"></div> 
              <div class="cart-items">
                <span class="fas fa-time"></span>
                <img src="tea.jpg" alt="">
                <div class="content">
                  <h3>cart item 01</h3>
                  <div class="price">$15.99/-</div>
                </div>
              </div> 
        </header>
<!--header sectition ends-->
<!--header sectition starts-->
             <section class="home" id="home">
              <div class="content">
                <h3> Sri Lanka Fresh Tea in the morning </h3>
                <p>Start your day with Sri Lankan tea. A fragrant brew that sharpens focus, soothes the mind, boosts health, and fills your morning with natural vitality </p>
                <a href="#" class="btn">get yours now</a>
              </div>
             </section>

             

<!--header sectition ends-->
              <!--about section starts-->
           
              <!--about section ends-->


              <!--menu section starts-->

              <section class="menu" id="menu">

                <h1 class="heading">our <span>menu</span></h1>

                <div class="box-container">

                  <div class="box">
                    <img src="Menu1.avif" alt="">
                    <h3>Black Tea</h3>
                    <div class="price">$10.99 <span>15.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>

                  <div class="box">
                    <img src="Menu2.avif" alt="">
                    <h3>Green Tea</h3>
                    <div class="price">$12.99 <span>14.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>

                  <div class="box">
                    <img src="menu3.jpeg" alt="">
                    <h3>Lemon Tea</h3>
                    <div class="price">$8.99 <span>12.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>

                  <div class="box">
                    <img src="menu4.webp" alt="">
                    <h3>Helty Tea</h3>
                    <div class="price">$18.99 <span>20.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>

                  <div class="box">
                    <img src="MENU5.jpg" alt="">
                    <h3>Ginger Tea</h3>
                    <div class="price">$05.99 <span>10.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>

                  <div class="box">
                    <img src="menu6.jpg" alt="">
                    <h3>Milk Tea</h3>
                    <div class="price">$11.99 <span>16.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>
                  <div class="box">
                    <img src="Menu7.avif" alt="">
                    <h3>Green helty</h3>
                    <div class="price">$12.99 <span>17.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>

                  <div class="box">
                    <img src="menu9.avif" alt="">
                    <h3>Ice Tea</h3>
                    <div class="price">$15.99 <span>20.99</span></div>
                    <a href="#" class="btn">Add to cart</a>
                  </div>
            
                </div>
              </section>
              <!--menu section ends-->
              
              <!--review section starts-->
              <section class="review" id="review">
                <h1 class="heading">customer's <span>review</span></h1>

                <div class="box-container">

                <div class="box">
                  <img src="" alt="" class="quote">
                  <p>The company itself is a very successful company. Don't you think that no one is free to follow us in flight? needs or labors, except those which commend them
                    Does this happen any lss? There is no one.</p>
                    <img src="profile1.jpeg" class="user" alt="">
                    <h3>lussy perera</h3>
                    <div class="stars">
                      <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class="bx bxs-star-half-alt"></i>
                    </div>
                </div>
                

                <div class="box">
                  <img src="" alt="" class="quote">
                  <p>T products for their exceptional flavor, freshness, and quality. Many highlight the rich taste and variety of teas, along with excellent customer service and timely delivery, making it a trusted choice for tea lovers.</p>
                    <img src="profile4.jpeg" class="user" alt="">
                    <h3>jony perera</h3>
                    <div class="stars">
                      <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class="bx bxs-star-half-alt"></i>
                    </div>
                </div>

                <div class="box">
                  <img src="" alt="" class="quote">
                  <p>The company itself is a very successful company. Don't you think that no one is free to follow us in flight? needs or labors, except those which commend them
                    Does this happen any less? There is no one.</p>
                    <img src="profile6.jpg" class="user" alt="">
                    <h3>Dhanushka gandarawaththa</h3>
                    <div class="stars">
                      <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class="bx bxs-star-half-alt"></i>
                    </div>
                </div>

                </div>

              </section>
                <!--review section starts-->

              <!--contact section staets-->
              <section class="contact" id="contact">
                <h1 class="heading"><span>Contact</span>Us</h1>
                <div class="row">
                  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63367.83067427647!2d80.73974691916507!3d6.951449622944274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!5e0!3m2!1sen!2slk!4v1725635107325!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <form action="">

                <h3>getin touch</h3>

                  <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Name">
                  </div>
                  <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                  </div>
                  <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="phone" placeholder="Phone">
                  </div>

                  <input type="submit" value="contact now" class="btn">
                </form>

                </div>














              </section>
              <!--contact section ends-->
            
              <!--blogs section starts-->
              <section class="blogs" id="blogs">

              <h1 class="heading"|>our <span>blogs</span></h1>

              <div class="box-container">

              <div class="box">
                <div class="image">
                  <img src="blogs1.jpg" alt="">
                </div>

                <div class="content">
                  <a href="#" class="title">Tea Granita!</a>
                  <span>by admin / 21ts september 2024</span>
                  <p>Good morning! Hope you're all having a productive week. With rising temperatures and humidity, the question is: "How are you staying cool?" It’s incredibly hot, and the forecast shows no relief in sight. Stay coo</p>
                    <a href="#" class="btn">read more</a>

                </div>
              </div>
              
               <div class="box">
                <div class="image">
                  <img src="blog2.jpg" alt="">
                </div>

                <div class="content">
                  <a href="#" class="title">Fruit Teas to Beat the Heat!</a>
                  <span>by admin / 21th september 2024</span>
                  <p>As fall approaches in Upstate NY, we're enjoying cooler weather and holding onto summer with fruity iced teas. This post highlights our favorite fruit teas for iced tea and the easiest way to make them!</p>
                    <a href="#" class="btn">read more</a>
                    
                </div>
              </div>
              

              <div class="box">
                <div class="image">
                  <img src="blog3.jpg" alt="">
                </div>

                <div class="content">
                  <a href="#" class="title">The Unusual Suspects for iced Tea!</a>
                  <span>by admin / 07th september 2024</span>
                  <p>Good morning, tea friends! The amazing weather has allowed me to finally get out in the garden. It's been productive, but tough and hot work! Now, all I can think is, "Lake anyone?"</p>
                    <a href="#" class="btn">read more</a>
                    
                </div>
              </div>
              

            </div> 

          </section>

              <!--blogs section ends -->

              <section class="footer">
              <div class="share">
                <a class='bx bxl-facebook-circle'></a>
                <a class='bx bxl-instagram-alt' ></a>
                <a class='bx bxl-reddit'></a>
                <a class='bx bxl-tiktok'></a>
                <a class='bx bxl-twitter'></a>
                <a class='bx bxl-meta' ></a>
                <a class='bx bxl-vk'></a>
                <a class='bx bxl-whatsapp'></a>
                <a class='bx bxl-snapchat'></a>
                <a class='bx bxl-invision'></a>
           
       
              </div>
              <div class="links">
                <a href="#" >home</a>
                <a href="#" >about</a>
                <a href="#" >menu</a>
                <a href="#" >products</a>
                <a href="#" >review</a>
                <a href="#" >contact</a>
                <a href="#" >blogs</a>

        <!--link to js-->
        <script src="main.js">

        </script>              </div>
              <div class="credit">created by<span>mr.dhanushka gandarawaththa</span>all rights reserved</div>

            </section>








            </section>

          <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


        <?php include 'components/alert.php' ?>
    </body>
</html>