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
<style type="text/css">
<?php include 'style.css'; ?>	
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible " content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">
        <title>Sri Lanka tea</title>
        <!-- link to css-->
         <link rel="stylesheet" href="styleabout.css">
         <!-- box icons -->
          <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

          <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
           />

    </head>
    <body>

        <section class="about" id="about">
            <h1 class="heading"><span>about</span>us</h1>
            <div class="row">
             <div class="image">
               <img src="te.jpg" alt="">
             </div>
             <div class="content">
               <h3>What make our Tea special?</h3>
               <p>Sri Lankan tea is special for its diverse growing regions,
                  <br>unique climate, and rich soil, which together produce <br>
                  a wide range of distinctive flavors.Careful processing further <br>
                  ensures the tea's exceptional quality and global reputation.<br>  
                   Sri Lankan tea is special due to its rich flavors, unique climate, <br>
                  diverse regions,and careful processing, ensuring exceptional quality.</p>

                 <p>Sri Lankan tea is special due to its rich flavors, unique climate, <br>
                   diverse regions, and careful processing, ensuring exceptional quality.</p>
               <a href="index.html" class="btn">Back to Home</a>
             </div>
            </div>

           </section>
        </script>
        <?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
    </body>
</html>