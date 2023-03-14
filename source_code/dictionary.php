<?php 
include "inc/config.php";
$page="dictionary";
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TranslateJawa.com - Learn Javanese Language</title>
  <meta content="A Javanese translator web app is an online tool that allows users to translate text from one language to Javanese. The app uses advanced algorithms and machine learning techniques to provide accurate translations. Users can input text in various formats such as plain text, URLs, or upload files to be translated." name="description">
  <meta content="Javanese to Indonesia, Indonesia to Javanese, English to Javanese, Javanese to English" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * App Name: Javanese Translator Web App *
  * Creator : Ahmad Ridlo Fadlli Robbi *
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  
  <?php include "head.php";?>



  <main id="main">
    <!-- ======= About Section ======= -->
  
   
    <!-- ======= Values Section ======= -->
    <section id="features" class="values" style="padding-top:120px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Dictionary</p>
          <h2 style="margin-top:20px; color:#c9742a;">Learn Javanese Language through Dictionary to see Definitions, translations, and explanations of words in the Javanese language.</h2>
        </header>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
               <a href="dictionary_daily.php">
            <div class="box">
              <img src="assets/img/3.png" class="img-fluid" alt="" width="300">
              <h3>Parts Of Speech</h3>
              <p style="color:black;">Understanding parts of speech for determining the correct definition of a word when using the dictionary.</p>
            </div>
          </a>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <a href="dictionary_search.php">
            <div class="box">
              <img src="assets/img/1.png" class="img-fluid" alt="" width="300">
              <h3>Dictionary Search A-Z</h3>
              <p style="color:black;">Learn Definitions, translations, and explanations of words in the Javanese language.</p>
            </div>
          </a>
          </div>


        </div>

      </div>

    </section>


  </main><!-- End #main -->

<?php include "footer.php";?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>