<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device=device-width,initial-scale=1.0"/>
        <title>about</title>

 <!-- swiper css link-->
 <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<!-- custom css file link-->
<link rel="stylesheet" href="style.css"/>

    </head>
    <body>
   
<!-- header section starts-->
<section class="header">
    <a href="home.php" class ="logo">NepalYatra.</a>

    <nav class="navbar">
<a href="home.php">Home</a>
<a href="about.php">About</a>
<a href="package.php">Package</a>
<a href="book.php">Book</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section end-->
<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
    <h1>book now </h1>
</div>

 
<!-- booking section starts -->
<section class="booking">
<h1 class="heading-title">book your trip!</h1>
<form action ="book_form.php" mehtot ="post" class="book-form">

<div class="flex">
<div class="inputBox">
    <span>name :</span>
    <input type="text" placeholder="enter your name" name="name">
</div>


<div class="inputBox">
    <span>email :</span>
    <input type="text" placeholder="enter your email" name="email">
</div>

<div class="inputBox">
    <span>phone :</span>
    <input type="number" placeholder="enter your number" name="phone">
</div>

<div class="inputBox">
    <span>address :</span>
    <input type="text" placeholder="enter your address" name="address">
</div>

<div class="inputBox">
    <span>where to visit:</span>
    <input type="text" placeholder="place you want to visit " name="location">
</div>

<div class="inputBox">
    <span>how many :</span>
    <input type="number" placeholder="number of guests" name="guests">
</div>

<div class="inputBox">
    <span>arrivals :</span>
    <input type="date"  name="arrivals ">
</div>

<div class="inputBox">
    <span>leaving:</span>
    <input type="date " name="leaving">
</div>

</div>
<input type="submit" value="submit" class="btn" name="send">
</form>


</section>


<!-- booking section ends-->











<!-- footer section starts-->
<section class="footer">
    <div>
        <div class="box-container">
            <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Package</a> 
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>    
    </div>
    
            <div class="box">
            <h3> extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us </a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>
    <div class="box">
            <h3> contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>9806951074</a>
            <a href="#"><i class="fas fa-phone"></i>9869747143</a>
            <a href="#"><i class="fas fa-envelope">cricketerbibek619@gmail.com</i></a>
            <a href="#"><i class="fas fa-map">kathmandu,nepal-101010</i></a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        
        


</div>
<div class="credit"> created by <span> BCE 2020</span> |all rights reserved! </div>

</section>


<!-- footer section ends-->


 
<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!-- custom js file link-->
<script src="script.js"></script>

</body>
</html>