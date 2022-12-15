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

$text=$_GET['text-to-search'];
$submit=$_GET['submit'];

$sql="SELECT * FROM `news` WHERE isi_news like '%" . $text . "%' order by tanggal DESC;";


//echo "<br>";
//echo $sql;

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Search</title>
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
			
            if ($submit=='Search') {
				// jika tombol submit di tekan            
              //echo $sql;
               echo "<h1>Maybe what you're looking for... : </h1><br>";
                echo  "<ol>";
   				while ($row=mysqli_fetch_object($result))
				{
					echo "<h2><li><a href='news.php?id=" .$row->id_news ."'>" . $row->judul_news . "</li></h2>";
 				}
                echo "</ol>";
              
              // isi search
              
            }
		   else
     		{
				?>
				<form method="GET" action="search.php">
				<p>Search <input type="text" name="text-to-search" id="text-to-search" size="20"></p>
				<p><input type="submit" value="Search" name="submit" id="submit"></p>
				</form>
				<?php
   			}
		   ?>
            
            <!-- End news Content -->
            

        </div>
      </div>
    </section>
  </main><!-- End #main -->

    <br>
    <br>
    <br>
    
  </main><!-- End #main -->

 <!-- ======= Footer ======= -->

    
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
