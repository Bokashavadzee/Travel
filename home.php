<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mystyle.css">
    <title>Home</title>


    <!-- swipper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
   <!-- header section starts -->
<section class="header">
<a href="home.php" class="logo">Travel.</a>

<!-- Navbar -->
<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>
   <a href="book.php">book</a>
</nav>


<!-- Menu-btn -->
<div id="menu-btn" class="fas fa-bars"></div>

</section>

   <!-- header section ends -->

   <!-- home section starts -->

   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">


            <div class="swiper-slide slide" style="background: url(img/home-slidephoto.jpg) no-repeat;">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>travel around the world</h3>
                  <a href="package.php" class="btn">discover more</a>

               </div>
            </div>


            <div class="swiper-slide slide" style="background: url(img/home-slidephoto2.jpg) no-repeat;">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>

               </div>
            </div>



            <div class="swiper-slide slide" style="background: url(img/home-slidephoto3.jpg) no-repeat;">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>

               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      </div>
   </section>


  <!-- home section ends -->
   <!-- services section starts -->
   <section class="services">

   <h1 class="heading-title"> Our Services </h1>
   <div class="box-container">
      <div class="box">
         <img src="img/adventure.png" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="img/path.png" alt="">
         <h3>Tour Guide</h3>
      </div>

      <div class="box">
         <img src="img/backpacking.png" alt="">
         <h3>Trekking</h3>
      </div>

      <div class="box">
         <img src="img/fire.png" alt="">
         <h3>Camp Fire</h3>
      </div>

      <div class="box">
         <img src="img/off-road.png" alt="">
         <h3>Off Road</h3>
      </div>

      <div class="box">
         <img src="img/camping.png" alt="">
         <h3>Camping</h3>
      </div>


   </div>
   </section>
   <!-- services section end -->




   <!-- home about section starts -->
   <section class="home-about">
      <div class="image">
         <img src="img/home-aboutphoto.jpg" alt="">
      </div>
      <div class="content">
         <h3>about us</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A id est quidem cumque, aut et corrupti, ad similique quae dolorum provident? Ipsa maxime quae ipsum. Optio corporis cumque minus quae!</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- revive section starts -->




















   <!-- revive section ends -->



   <!-- home package section starts -->
   <section class="home-packages">

      <h1 class="heading-title">our packages</h1>

      <div class="box-container">

         <div class="box">

            <div class="image">

               <img src="img/img1.jpg" alt="">

            </div>
            <div class="container">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, vero!</p>
               <a href="book.php" class="btn">book now</a>
            </div>

         </div>


         <div class="box">

            <div class="image">

               <img src="img/img-2.jpg" alt="">

            </div>
            <div class="container">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, vero!</p>
               <a href="book.php" class="btn">book now</a>
            </div>

         </div>


          <div class="box">

            <div class="image">

               <img src="img/img-3.jpg" alt="">

            </div>
            <div class="container">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, vero!</p>
               <a href="book.php" class="btn">book now</a>
            </div>

         </div>

      </div>

      <div class="load-more"><a href="package.php" class="btn">load more</a></div>

   </section>

   <!-- home package section ends -->


   <!-- home offer section starts -->
   
   <section class="home-offer">
      <div class="content">
         <h3>upto 50% off</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo necessitatibus reiciendis, at autem blanditiis voluptas numquam qui labore exercitationem fugit?</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </section>
   <!-- home offer section ends -->


   <!-- footer section starts -->
   <section class="footer">

   <div class="box-container">
 <div class="box">
   <h3>quick links</h3>
   <a href="home.php"> <i class="fas fa-angle-right"> </i>Home</a>
   <a href="about.php"> <i class="fas fa-angle-right"> </i>About</a>
   <a href="package.php"> <i class="fas fa-angle-right"> </i>Package</a>
   <a href="book.php"> <i class="fas fa-angle-right"> </i>Book</a>

</div>

<div class="box">
   <h3>Extra links</h3>
   <a href="#"> <i class="fas fa-angle-right"> </i>ask questions</a>
   <a href="#"> <i class="fas fa-angle-right"> </i>about us</a>
   <a href="#"> <i class="fas fa-angle-right"> </i>privacy policy</a>
   <a href="#"> <i class="fas fa-angle-right"> </i>terms of use</a>
</div>


<div class="box">
   <h3>Contact info</h3>
   <a href="#"> <i class="fas fa-phone"> </i>+995 592-31-38-78</a>
   <a href="#"> <i class="fas fa-phone"> </i>+995 551-13-61-24</a>
   <a href="#"> <i class="fas fa-envelope"> </i>boka.shavadze@gmail.com</a>
   <a href="#"> <i class="fas fa-map"> </i>Tbilisi, Georgia -400105</a>
</div>

<div class="box">
   <h3>follow us</h3>
   <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
   <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
   <a href="#"><i class="fab fa-instagram"></i>instagram</a>
   <a href="#"><i class="fab fa-github"></i>github</a>

</div>

   </div>


   <div class="credit">Created By <span>Boka Shavadze</span> | all rights reserved!</div>
   </section>

   <!-- footer section ends -->
    

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- Custom js File link -->

<script src="script.js"></script>
</body>
</html>