<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device=device-width,initial-scale=1.0" />
  <title>home</title>

  <!-- swiper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- custom css file link-->
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <!-- header section starts-->
  <section class="header">
    <a href="home.php" class="logo">NepalYatra.</a>

    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>
  <!-- header section end-->


  <!-- home section starts-->

  <section class="home">

    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(images/home-slide-1.jpg) no-repeat">
          <div class="content">
            <div class="text">
              <span >The journey is the destination</span>
              <p class="body-text">Adventure is worthwhile</p>
            </div>

            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(images/home-slide-3.jpg) no-repeat">
          <div class="content">
            <div class="text">  
              <span>The journey is the destination</span>
                <p class="body-text">Travel is my therapy</h3>
            </div>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat">
          <div class="content">
            <div class="text">  
              <span>The journey is the destination</span>
              <p class="body-text">adventure begin</p>
            </div>
              <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>


    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>
  </section>

  <!-- home section ends-->


  <!-- services section starts-->
  <section class="services">

    <h1 class="heading-title">our services </h1>
    <div class="box-container">
      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
      </div>
      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>
      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>camp fire</h3>
      </div>
      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>off road</h3>
      </div>
      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>treeking</h3>
      </div>
    </div>


  </section>
  <!-- services section ends -->

<section class="home-about">
  <div class="image">
    <img src="images/about-img.jpeg" alt="">
  </div>
<div class="content">
  <h3> about us</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi 
    quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente
    autem ipsum? Nobis,provident voluptate? </p>
  <a href="about.php" class="btn">read more</a>
</div>

</section>












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
      </div>
      <div class="credit"> created by <span> C2001 (2020)</span> |all rights reserved! </div>

    </div>
  </section>


  <!-- footer section ends-->



  <!-- swiper js link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <!-- custom js file link-->
  <script src="script.js">
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>

</html>