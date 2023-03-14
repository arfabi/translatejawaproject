<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" width="40">
        <span>Translate Jawa</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if($page=="index"){ echo "active";}?>" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto <?php if($page=="dictionary"){ echo "active";}?>" href="dictionary.php">Javanese Dictionary</a></li>
          <li><a class="nav-link scrollto <?php if($page=="translator"){ echo "active";}?>" href="translator.php">Javanese Translator</a></li>
          <li><a class="nav-link scrollto <?php if($page=="hanacaraka"){ echo "active";}?>" href="hanacaraka.php">Hanacaraka Converter</a></li>
          <li><a class="nav-link scrollto <?php if($page=="course"){ echo "active";}?>" href="course.php">Javanese Course</a></li>
          <li><a class="getstarted scrollto" href="index.php#features">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->