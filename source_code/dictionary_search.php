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
          <p>Javanese Dictionary A-Z</p>
          <h2 style="margin-top:20px; color:#c9742a;">Find definitions & translation by typing Javanese words, Indonesian words or English words</h2>
        </header>

      

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
  <div align="center">
    <label class="radio-inline">
        <input type="radio" name="language" id="language" value="jv" checked> Javanese Words
      </label>
      &nbsp;
      <label class="radio-inline">
        <input type="radio" name="language" id="language" value="en"> English Words
      </label>
&nbsp;
      <label class="radio-inline">
        <input type="radio" name="language" id="language" value="id"> Indonesian Words
      </label></div>
      <br/>
      
      <input type="text" placeholder="Type a word in javanese..." id="q">
      <button on onclick="arti();"><i class="ri-search-2-line"></i> Search</button>
  </div>

     
     
  </div>

    <div class="col-md-1"></div>
  </div>



</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    function arti(){
      var q = $('#q').val();
       var language = $('input[name="language"]:checked').val();

      $.ajax({
         url: "api/api_db.php",
         type:'POST',
         data: { text: q, source:language},
           success: function(data)
                {
                  $("#translated-text").html(data);
                  $("#words").html(q);
                }
      });
    }




        $("#q").on('keyup', function (e) {
          if (e.key === 'Enter' || e.keyCode === 13) {
              arti();
          }
        });


        $('input[type=radio][name=language]').change(function() {
        if (this.value == 'jv') {
          //alert("jv");
          $("#q").attr("placeholder", "Type a word in javanese...");
        }
        else if (this.value == 'id') {
          //alert("id");          
          $("#q").attr("placeholder", "Type a word in indonesian...");
        }
        else if (this.value == 'en') {
          //alert("en");
          $("#q").attr("placeholder", "Type a word in english...");
        }
        });



    </script>

    <hr />


<h2 style="margin-bottom:3px" id="words">How to Use Dictionary Search ?</h2>

    <hr />

    <div class="col-lg-12 d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="background-color: #f6f9ff; padding: 40px;">

<div id="translated-text">
  <div class="alert alert-info">
    <p>Here's an instruction on how to use a dictionary to find the meaning of a word in Javanese, Indonesian, and English :</p>
  <ol>
      <li>Type the word you want to look up in the search box on the above.</li>
      <li>Click on the "Search" button or press the "Enter" key on your keyboard.</li>
      <li>This will display the meaning of the word in Indonesian and/or Javanese, as well as the English translation.</li>
      <li>If you want to look up another word, simply repeat the process by typing the new word in the search box and clicking on the "Search" button.</li>
    </ol>

  </div>
</div>
  


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