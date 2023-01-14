<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mystyle.css">
    <title>Book</title>


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
   <div class="heading3">
    <h1>Book</h1>
   </div>



 <!-- book section starts -->
 <section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="book_from.php" method="post" class="book-form">
  <div class="flex">
     <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
     </div>

     <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
     </div>
     <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
     </div>
     <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your addres" name="address">
     </div>
     <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
     </div>
     <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="how many guests" name="guests">
     </div>
     <div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals">
     </div>
     <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving">
     </div>
  </div>

  <input type="submit" value="submit" class="btn" name="send">

</form>



</section>

<!-- book section ends -->








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