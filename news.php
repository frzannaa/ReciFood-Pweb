<?php
// Start the session
session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "rahel_urecipe", "123456oK", "rahel_recipe");

if($conn->connect_error) {
  exit('Could not connect');
}

$kategori=$_GET['kat'];
$id=$_GET['id'];

if ($id != null)
{
$sql="SELECT id_news, tanggal, intro, judul_news, isi_news, gambar, news.kategorinews_id, kategori_news.nama_kategori FROM kategori_news INNER JOIN news ON kategori_news.kategorinews_id = news.kategorinews_id where id_news=" . $id . " order by tanggal DESC;";
}
else
{
$sql="SELECT id_news, tanggal, intro, judul_news, isi_news, gambar, news.kategorinews_id, kategori_news.nama_kategori FROM kategori_news INNER JOIN news ON kategori_news.kategorinews_id = news.kategorinews_id where kategori_news.kategorinews_id=" . $kategori . " order by tanggal DESC;";
}


//echo "<br>";
//echo $sql;

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Category</title>
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

  </header>
  <!-- End Header -->

  <main id="main">

    <section class="news-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= news Content ======= -->
            
            
<?php

   while ($row=mysqli_fetch_object($result))
{
echo "              
           <div class='news'>
              <div class='post-meta'><span class='date'>" . $row->nama_kategori . "</span> <span class='mx-1'>&bullet;</span> <span>" . $row->tanggal . "</span></div>
              <h1 class='mb-5'>" . $row->judul_news . "</h1>
              <p><span class='firstcharacter'></span>" . $row->intro . "</p>
        
                <img src='assets/img/" . $row->gambar . "' alt='' class='img-fluid'>
          
              " . $row->isi_news . "
              
              <br>
              <br>
           
            </div>";
 }
//$sql="SELECT id_news, tanggal, intro, judul_news, isi_news, gambar, news.kategorinews_id, kategori_news.nama_kategori FROM kategori_news INNER JOIN news ON kategori_news.kategorinews_id = news.kategorinews_id order by tanggal DESC;";

            ?>
            
           

        </div>
      </div>
    </section>
  </main><!-- End #main -->

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
</html>
