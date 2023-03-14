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
  
    <!-- ======= Team Section ======= -->
    <section id="course" class="team" style="padding-top: 100px;">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Javanese Dictionary</p>
          <h2 style="margin-top:20px; color:#c9742a;">Definitions, translations, and explanations of words in the Javanese language.</h2>
        </header>

      
<form action="/entri/nul" class="form-horizontal" id="searchForm" method="post" onsubmit="searchText(event)" role="form">

  <div class="form-group">
  

  <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  


<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

.openBtn {
  background: #f1f1f1;
  border: none;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #bbb;
}



.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: 1px solid #ced4da;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  color: #fff;
  background: #1A120B;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>
</head>
<body>

<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
   
  </div>
</div>

<div id="myOverlay" class="overlay">
 <form action="/action_page.php">
      <input type="text" placeholder="Type a word in javanese..." name="search">
      <button type="submit"><i class="ri-search-2-line"></i> Search</button>
    </form>
  </div>

     
     
  </div>

    <div class="col-md-1"></div>
  </div>



</div>
<h3 id="errorMessageDiv"></h3>
<script>
  String.prototype.contains = function (it) { return this.indexOf(it) != -1; };
  function searchText(ev) {
    var val = $("#textBoxSearch").val();
    ev.preventDefault();
    if (!val) {
      $("#errorMessageDiv").replaceWith("<h3 id=\"errorMessageDiv\"><font color=\"red\"><p class=\"text-center add-margin-top-5\"><i>Kotak pencarian tidak boleh kosong</i></p></font></h3>");
    } else {
      if (val.contains('.') || val.contains('?') || val.toLowerCase() == 'nul' || val.toLowerCase() == 'bin') { //for non-dependent respond
        window.location.href = '/' + 'Cari/Hasil?frasa=' + val;
      } else {
        window.location.href = '/' + 'entri/' + val;
      }
    }
  }
</script>
</form>    <hr />


<h2 style="margin-bottom:3px">mit.ra <small><span class="entrisButton"><a href="../DataDasarEntri/Edit?eid=54761"><span title="Ubah" class="glyphicon glyphicon-edit text-success"></span></a><a href="../DataDasarEntri/Copy?eid=54761"><span title="Usulkan entri baru berdasarkan entri ini" class="glyphicon glyphicon-duplicate" style="color:darkcyan"></span></a><a href="../DataDasarEntri/Details?eid=54761"><span title="Detail" class="glyphicon glyphicon-list-alt text-info"></span></a><span title="Sejarah redaksi - entri ini tidak memiliki sejarah redaksi" class="glyphicon glyphicon-book" style="color:lightgrey"></span><a href="https://www.google.com/#q=mitra"><span title="Cari di Google" class="glyphicon glyphicon-search text-primary"></span></a></span></small></h2><p><a href="http://tesaurus.kemdikbud.go.id/tematis/lema/mitra">&#x21E2; Tesaurus</a></p>
    <hr />

    <div class="col-lg-12 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="background-color: #f6f9ff; padding: 40px;">

<div id="d1"><b class="main highlight">arti</b><span class="per-suku">/ar·ti/</span> <em class="jk" title="nomina (kata benda)">n</em> <b class="num">1</b> maksud yang terkandung (dalam perkataan, kalimat); makna: <em>apa -- isyarat itu?</em>; <b class="num">2</b> guna; faedah: <em>apa -- nya bagi kamu menyakiti binatang itu;</em><div class="sub_17"><br><b class="tur highlight">berarti</b><span class="per-suku">/ber·ar·ti/</span> <em class="jk" title="verba (kata kerja)">v</em> <b class="num">1</b> mengandung maksud: <em>jika ibu marah, itu tidak ~ beliau benci kepadamu;</em> <b class="num">2</b> berfaedah; berguna: <em>mungkin pertolongan saya ini tak ~ bagi penderitaanmu yang begitu besar;</em> <b class="num">3</b> sama artinya dengan; sama halnya dengan: <em>mengambil milik orang tanpa permisi ~ mencuri;</em><br><br><b class="tur highlight">keberartian</b><span class="per-suku">/ke·ber·ar·ti·an/</span> <em class="jk" title="nomina (kata benda)">n</em> perihal mempunyai arti: <em>tujuan hidupnya sebagai seniman bukanlah harta, melainkan untuk meningkatkan ~ bagi dirinya dan bagi masyarakat</em>;<br><br><b class="tur highlight">mengartikan</b><span class="per-suku">/meng·ar·ti·kan/</span> <em class="jk" title="verba (kata kerja)">v</em> <b class="num">1</b> memberi arti; menafsirkan: <em>mereka ~ isyarat itu sebagai tanda menyerah;</em> <b class="num">2</b> menerangkan maksud sesuatu: <em>ia ~ ?reformasi? sebagai perubahan radikal;</em><br><br><b class="tur highlight">artian</b><span class="per-suku">/ar·ti·an/</span> <em class="jk" title="nomina (kata benda)">n</em> arti; tafsiran; pengertian;<br><br><b class="tur highlight">pengartian</b><span class="per-suku">/peng·ar·ti·an/</span> <em class="jk" title="nomina (kata benda)">n</em> proses, cara, perbuatan memberi arti;<br><br><b class="tur highlight">searti</b><span class="per-suku">/se·ar·ti/</span> <em class="jk" title="nomina (kata benda)">n</em> sama artinya:<em> carilah kata-kata yang ~</em></div></div>
            </div>
          </div>



      </div>

    </section><!-- End Team Section -->


<style>
  .highlight {
    background: #ff7;
}

          

  #translatorbtn {
  margin-top: 20px;
  margin-bottom: 20px;
  line-height: 0;
  padding: 15px 40px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #1A120B;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }


  #copybtn {
  margin-top: 20px;
  margin-bottom: 20px;
  line-height: 0;
  padding: 15px 40px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #1A120B;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
    }
  </style>
        


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