<?php
require 'system/config/koneksi.php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Beramal</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="shortcut icon" href="asset/internal/img/img-local/favicon.ico">
  <link rel="stylesheet" href="asset/internal/css/style-index1.css">
  <link rel="stylesheet" href="asset/internal/css/style-index2.css">

  <script src="asset/internal/js/preloader.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $(".preloader").fadeOut();
    })
  </script>

</head>

<body>

  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="asset/internal/img/img-local/spiner.gif" width="80">
    </div>
  </div>


  <!--Navbar-->
  <header>
    <a href="#" id="logo"></a>
    <nav class="nav">
      <a href="#" id="menu-icon"></a>
      <ul id="top-menu">
        <li class="active">
          <a href="#">Beranda</a>
        </li>
        <li>
          <a href="#foo">Petunjuk</a>
        </li>
        <li>
          <a href="#baz">Lokasi</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- konten1 -->
  <div class="page-wrap">

    <div class="header">
      <div class="box-1">
        <h3>Media Pengelola Bank Sampah</h3>
        <h1 disabled>Bener Ramah Lingkungan</h1>
        <p> Lingkungan rumah menjadi bersih dari sampah <br>
          anorganik, juga akan lebih sehat karena <br>
          mengurangi perkembangbiakan penyakit. <br>
          Di sisi lain, bank sampah dapat menambah <br>
          penghasilan bagi para nasabahnya.
        </p>
        <br>
        <br>
        <div class="left">
          <a href="page/login.php">
            <div class="btn" align="center">Login</div>
          </a> <!-- End Btn -->
        </div>
      </div>
      <div class="box-2">
        <img src="asset/internal/img/img-local/box2.png" alt="">
      </div>
    </div>
  </div>

  </div>


  <!--konten2-->
  <div id="foo">
    <section class="team">
      <div class="container">
        <div class="row">
          <h1>TERTARIK BERGABUNG ???</h1>
          <p>BERAMAL (Bener Ramah Lingkungan) adalah sebuah wadah masyarakat dalam pengelolaan sampah di Kampung Bener
            Yogyakarta. Salah satu program dari BERAMAL adalalah Bank Sampah. Bank sampah berpotensi menurunkan hingga
            setengah dari produksi sampah anorganik. Selain lingkungan rumah menjadi bersih dari sampah anorganik, juga
            akan lebih sehat karena mengurangi perkembangbiakan penyakit seperti Demam Berdarah, mengurangi polusi udara
            akibat pembakaran sampah, dan tanah menjadi lebih subur karena tidak tercemar oleh sampah yang tidak dapat
            terurai. Si sisi lain, bank sampah dapat menambah penghasilan bagi para nasabahnya.</p>
        </div>

        <div class="row mgt50px">
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/1.jpg">
            </div>
            <div class="details">
              <h3>#Tahap1<br><span>Lakukan Pendaftaran</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/2.jpg">
            </div>
            <div class="details">
              <h3>#Tahap2<br><span>Pemilahan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/3.jpg">
            </div>
            <div class="details">
              <h3>#Tahap3<br><span>Penimbangan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/4.jpg">
            </div>
            <div class="details">
              <h3>#Tahap4<br><span>Mendapat Keuntungan</span></h3>
            </div>
          </div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </section>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--konten maps-->

  <br>
  <div id="bar">
    <div class="row mgt50px">
      <h1 align="center">Lokasi Bank Sampah</h1>
      <br>
      <br>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.271832592935!2d110.34985657422243!3d-7.775409477585481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a586aaf61cbf1%3A0xed59773d37f91c28!2sBener%2C%20Tegalrejo%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1644446298849!5m2!1sen!2sid"
        width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  <!--footer-->
  <footer class="footer-distributed">

    <div class="footer-left">

      <p class="footer-links">
        <ul>
          <a href="#">Beranda</a>
          ·
          <a href="#foo">Petunjuk</a>
          ·
          <a href="#baz">Lokasi</a>
      </p>
      <p class="footer-company-name">&copy; BERAMAL2022</p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p>Jln. Bener No.48 Kec. Tegalrejo, Kota Yogyakarta DIY - 55243</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="#">(+62)85 878 221 00</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">beramal@gmail.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        Kunjungi Sosial Media Kami!
      </p>

      <div class="footer-icons">

        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>