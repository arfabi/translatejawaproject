<?php 
include "inc/config.php";
$page="translator";
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


  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Javanese Translator</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Translate Javanese to Indonesian, English, Chinese or other languages and vice versa.
 </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Try Translator</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/42.png" class="img-fluid" >
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="margin-top:0px;">

      <div class="container" data-aos="fade-up">

          <header class="section-header">
          <p>Javanese Translator</p>
          <h2 style="margin-top:5px; color:#c9742a;">Discover the beauty of Javanese language with our translate app.</h2>
        </header>


        <div class="row gx-0">

          <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">

              
  <style>
    /* Style for the input box */
    #input-text {
      height: 100px;
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
        
            <div class="container mt-4">

    <div class="form-group" style="margin-bottom:20px;">
      <label for="input-text">Choose Language :</label>

          <select name="pilihbahasa" id="pilihbahasa" class="form-control">
            <option value="engtojv">English to Javanese</option>
            <option value="jvtoeng">Javanese to English</option>
            <option value="idtojv">Indonesian to Javanese</option>
            <option value="jvtoid">Javanese to Indonesian</option>
            <option value="zhtojv"> Chinese Simplified to Javanese</option>
            <option value="jvtozh">Javanese to Chinese Simplifi</option>
          </select>
    </div>
    
    <div class="form-group">
      <label for="input-text">Enter text to translate :</label>
      <textarea class="form-control" id="input-text" rows="7"></textarea>
    </div>
  

  
    <button type="button"  onclick="arti();" id="translatorbtn"><i class="ri-translate"></i> Translate</button>
    <button type="button"  onclick="copy();" id="copybtn"><i class="ri-file-copy-line"></i> Copy Result</button>
 
    <div class="form-group">
      <label for="translated-text">Translated text:</label>
      <textarea class="form-control" id="translated-text" rows="5" readonly></textarea>
    </div>
<br/>

<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://translatejawa.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script>
    function arti(){
      var inputText = $('#input-text').val();
      var pilihBahasa = $('#pilihbahasa').val();
      $.ajax({
         url: "api/api_translate.php",
         type:'POST',
         data: { text: inputText, language:pilihBahasa},
           success: function(data)
                {
                  $("#translated-text").val(data);
                }
      });
    }

    function copy() {

     // Get the text field
    var copyText = document.getElementById("translated-text");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

     // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

    // Alert the copied text
    alert("Copied the Translated text: " + copyText.value);
    }
  </script>

            </div>
          </div>

        </div>
      </div>

    </section>


    <!-- ======= Features Section ======= -->
    <section id="benefits" class="features" style="padding-top:10px;">

      <div class="container" data-aos="fade-up">


        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up" style="margin-top:10px;">
         

          <h3>Recent Translated</h3>

          <div class="row">
            <div class="col-xl-12 d-flex content">
              <div class="row align-self-center gy-4">


<div id="wrap1">
<p class="popular-words" style="text-align:center;">
<?php 
$sql = "select * from translator order by id_translate desc limit 50";
$query = mysqli_query($koneksi, $sql);
while($data=mysqli_fetch_array($query)){
$teks = $data['text'];
$your_string_without_tags = strip_tags($teks); 
$your_200_char_string = substr($your_string_without_tags, 0, 200); 

?>
<a href="translator/<?php echo $data['text'];?>" title="kata '<?php echo $data['text'];?>' (<?php echo $data['count'];?> kali)"><?php echo $your_200_char_string;?></a>
<?php } ?>
</p>
</div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->


<style>
 

.col a, .popular-words a {
    text-decoration: none;
    padding: 5px 8px;
    background-color: #f7f7f7;
    border-radius: 3px;
    display: inline-block;
    min-width: 50px;
    margin: 0 3px 7px;
    text-align: center;
}
</style>

  </main><!-- End #main -->

 
<?php include "footer.php";?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script id="dsq-count-scr" src="//translatejawa.disqus.com/count.js" async></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>