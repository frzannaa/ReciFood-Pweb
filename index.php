<?php

// Start the session
session_start();
$id_user=$_SESSION["id_user"];
$nama= $_SESSION["nama"] ;
$email=$_SESSION["email"] ;



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> ReciFood </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/koki.jpg" rel="icon">
  <link href="assets/img/koki.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
     <?php
		include ("menu.html");
	?>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="news.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/news1.jpg');">
                    <div class="img-bg-inner">
                      <h2>Organic Food & Farming Report Outlines Opportunities for the Farm Bill</h2>
                      <p>A new report details the benefits of organic farming and outlines strategies to expand organic agriculture practices through the 2023 Farm Bill. The report is a product of the National Resources and Defense Council (NRDC), Swette Center for Sustainable Food Systems at Arizona State University (ASU) and Californians for Pesticide Reform (CPR)</p>
                    </div>
                  </a>
                </div>

                 <div class="swiper-slide">
                  <a href="news.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/news2.jpg');">
                    <div class="img-bg-inner">
                      <h2>WORLD VEGAN DAY AND THE RISE OF PLANT-BASED EATING</h2>
                      <p>Established in 1994 to celebrate the 50th anniversary of the founding of the Vegan Society in the UK – and the simultaneous coining of the word ‘vegan’ – World Vegan Day is now celebrated around the world.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="chef.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/chef.jpg');">
                    <div class="img-bg-inner">
                      <h2>International Chefs Day: 6 Chef-Recommended Ways To Improve Your Cooking</h2>
                      <p>International Chefs Day: Here are some cooking tips from the best chefs to amp up your cooking and make it simple, hassle-free and give delicious results!</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="chef.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/robot.png');">
                    <div class="img-bg-inner">
                      <h2>Pastry Chef Makes Edible Chocolate Robot - Watch Incredible Viral Video</h2>
                      <p>Pastry chef Amaury Guichon shared an incredible video of a robot chef, made entirely with chocolate!</p>
                    </div>
                  </a>
                </div>
                </section>                
 
             
                     <div class="container">
                       <div class = "row">
                         <div class="col-sm"> 
                  <a href="news.php?kat=5" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/quiche.jpg');" ></a> 
                    <div class="img-bg-inner"> 
                      <h2>The Recipe for Your Appetizer!</h2>     
                      
                    </div>
                 </div>
                </div>
                       
                          <div class="container">
                       <div class = "row">
                         <div class="col-sm"> 
                  <a href="news.php?kat=7" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/chocolate.jpg');" > </a>
                    <div class="img-bg-inner">
                      <h2>The Recipe  for Your Dessert Food!</h2>  
                     
                    </div>
                 </div>
                </div>
                            
                               <div class="container">
                       <div class = "row">
                         <div class="col-sm"> 
                  <a href="news.php?kat=8" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/strawberry-lime-punch.jpg');" >   </a>
                    <div class="img-bg-inner">
                      <h2>The Recipe  for Your Beverages!</h2>     
                    
                    </div>
                 </div>
                </div>
                  
  </main>
  <!-- End #main --> 
 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">About ReciFood</h3>
            <p>Recifood is a place for those who like agriculture, various types of food, and cooking. In ReciFood, there are many explanations about food ingredients, how to cook a food, and other interesting information.</p>
            <p><a href="about.php" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.php"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="news.php?kat=1"><i class="bi bi-chevron-right"></i> Categories</a></li>
              <li><a href="news.php?kat=2"><i class="bi bi-chevron-right"></i> News</a></li>
              <li><a href="about.php"><i class="bi bi-chevron-right"></i> About us</a></li>
              <li><a href="contact.php"><i class="bi bi-chevron-right"></i> Contact</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="news.php?kat=5"><i class="bi bi-chevron-right"></i> Appetizer</a></li>
              <li><a href="news.php?kat=6"><i class="bi bi-chevron-right"></i> Main Course</a></li>
              <li><a href="news.php?kat=7"><i class="bi bi-chevron-right"></i> Dessert Food</a></li>
              <li><a href="news.php?kat=8"><i class="bi bi-chevron-right"></i> Beverages </a></li>
             
            </ul>
          </div>

          
    
  <!-- <! Vendor JS Files --> 
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
