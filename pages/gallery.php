<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="ŠA Fest - u spomen na prijedorskog umjetnika Dalibora Popovića Mikšu održaće se u Ljetnoj bašti u Prijedoru, 17. i 18. avgusta 2018. Podržite ŠA Fest i uživajte u svirci jer ŠA must go on!"/>
  <title>ShaFest</title>
  <!-- load css files -->
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../css/main.min.css">
  <link rel="stylesheet" href="../css/sha-font.min.css">
  <link rel="stylesheet" href="../vendors/lightbox2/dist/css/lightbox.min.css">
  <!-- fav icons -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

  <!-- og tags -->
  <meta property="og:url" content="http://www.shafest.com/" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Memorijalni festival posvećen Daliboru Popoviću Mikši." />
  <meta property="og:description" content="ŠA Fest - u spomen na prijedorskog umjetnika Dalibora Popovića Mikšu održaće se u Ljetnoj bašti u Prijedoru, 17. i 18. avgusta 2018. Podržite ŠA Fest i uživajte u svirci jer ŠA must go on!" />
  <meta property="og:image" content="http://shafest.com/img/logo.png" />
</head>
<body>
  <div class="loader">
    <div class="loader__wrap">
      <img src="../img/logo-white.png" alt="ShaFestiva Logo" class="loader__img">
    </div>
  </div>
  <header class="header">
      <div class="header__logo">
        <img src="../img/logo.png" alt="Sha Festival Logo" class="header__logo__img">
      </div>
      <nav class="nav">
        <div class="nav__icon">
          <span class="nav__icon__line nav__icon__line--top"></span>
          <span class="nav__icon__line nav__icon__line--middle"></span>
          <span class="nav__icon__line nav__icon__line--bottom"></span>
        </div>
        <ul class="nav__dropdown">
          <li class="nav__item">
            <a href="#about-sha-fest" class="nav__link">o Ša festivalu</a>
          </li>
          <li class="nav__item">
              <a href="#about-sha" class="nav__link">O Mikši</a>
          </li>
          <li class="nav__item">
            <a href="#line-up" class="nav__link">Program</a>
          </li>
          <li class="nav__item">
            <a href="pages/gallery.php" class="nav__link">Galerija</a>
          </li>
          <li class="nav__item">
            <a href="#tickets" class="nav__link">Ulaznice</a>
          </li>
        </ul>
      </nav>
    </header>

    <section class="gallery content-padding">
        <section class="container">
            <div class="row">
                <?php
                $directory = "../img/gallery";
                $images = glob($directory . "/*.jpg");
                foreach($images as $image) {
                    echo '<a href="' . $image . '" data-lightbox="image-1" data-title="" class="gallery__link">
                    <img class="gallery__img__thumb" src=" ' . $image .' " alt="">
                    </a>';
                }
                ?>
            </div>
        </section>
    </section>
</section>
  <footer class="footer">
    <div class="container content-padding">
      <div class="row">
        <div class="col-md-4 col-sm-12 footer__cols">
          <h6 class="footer__heading">Site Map</h6>
          <ul>
            <li><a href="#about-sha-fest">O Ša Festivalu</a></li>
            <li><a href="#about-sha">O Mikši</a></li>
            <!-- <li><a href="#news">Novosti</a></li> -->
            <li><a href="#sponsors">Sponzori</a></li>
            <li><a href="pages/gallery.php">Galerija</a></li>
            <li><a href="#tickets">Ulaznice</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12 footer__cols">
          <h6 class="footer__heading">Kontakt</h6>
          <ul>
            <li><a href="tel:+38765470400">+387 (0)65 470 400</a></li>
            <li><a href="mailto:info@shafest.com">info@shafest.com</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12 footer__cols">
          <h6 class="footer__heading">Društvene mreže</h6>
          <ul>
            <li><a href="https://www.facebook.com/ShaFestival/" target="_blank"><i class="icon-facebook-squared">/ShaFestival</i></a></li>
            <li><a href="https://www.instagram.com/shafest/" target="_blank"><i class="icon-instagram"></i>/shafest</a></li>
            <li><a href="#">#shamustgoon</a></li>
            <li><a href="#">#šafestivalprijedor</a></li>
            <li><a href="#">#shafest</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <h6 class="footer__heading text-align-center">Ša fest line up</h6>
      <div class="line-up">
          <a href="https://www.facebook.com/bandbecari/" class="line-up__link">The Bechars</a>
          <a href="#" class="line-up__link">Jall aux jaux</a>
          <a href="https://www.facebook.com/ketpool/" class="line-up__link">Ketpool</a>
          <a href="#" class="line-up__link">Kazoo</a>
          <a href="#" class="line-up__link">Double dog</a>
          <a href="https://www.facebook.com/profile.php?id=100015754387166" class="line-up__link">The Shejvers</a>
        </div>
        <div class="line-up">
          <a href="http://www.vhband.com/" class="line-up__link">Vasli Hadžimanov Band</a>
          <a href="https://www.facebook.com/DBAUIZADJALE/" class="line-up__link">Dbau</a>
          <a href="http://www.sopotproject.com/" class="line-up__link">Sopot</a>
          <a href="https://www.facebook.com/grupaartanlili/" class="line-up__link">Artan Lili</a>
          <a href="https://www.facebook.com/STRAIGHT-JACKIN-40489827937/" class="line-up__link">Staright Jackin</a>
        </div>
    </div>
    <div class="container content-padding">
      <div class="row justify-content-center">
        <div class="col-md-2 footer__logo">
          <img src="../img/logo-white.png" alt="Sha festival logo" class="footer__logo__img">
        </div>
      </div>
    </div>
  </footer>
  <footer class="post-footer">
    &copy; copyright Ša fest 2018. ŠA must go on!
  </footer>
  <a href="#to-top" class="to-top">
    <div class="to-top__box">
      <i class="icon-up-open-big to-top__box__icon"></i>
    </div>
  </a>
  <!-- load js files -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../vendors/lightbox2/dist/js/lightbox.min.js"></script>
</body>
</html>