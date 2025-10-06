<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/esengo.jpg" rel="icon">
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> 

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- AOS (Animate On Scroll) -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Swiper -->
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

<!-- Glightbox -->
<link href="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <p class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/esengo.jpg" alt="Logo" id="logo" style="cursor: pointer;">
        <!-- <h1 class="sitename">GP</h1> -->
        <span>.</span>
      </p>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('index') }}" class="active">Accueil<br></a></li>
          <li><a href="#about">Apropos</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="{{ route('blog.index') }}">Blog</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @auth()
        <a class="btn-getstarted" href="{{ route('dashboard') }}">Page Admin</a>
      @endauth
      <!-- Bouton Connexion (caché au départ) -->
@guest
<a class="btn-getstarted" href="{{ route('login') }}" id="btn-connexion" style="display:none;">
    Connexion
</a>
@endguest

    </div>
  </header>
  @yield('content')
  
  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/esengo.jpg" alt=""> 
              <span class="sitename">Esengo Technique</span>
            </a>
            <div class="footer-contact pt-3">
              <!-- <p>A108 Adam Street</p>
              <p>New York, NY 535022</p> -->
              <p class="mt-3"><strong>Phone:</strong> <span>+243 824 549 996</span></p>
              <p><strong>Email:</strong> <span>Esengotechnique@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://wa.me/243811222032"><i class="bi bi-whatsapp"></i></a>
             <!-- <a href="https://www.facebook.com/...."><i class="bi bi-facebook"></i></a> -->
              <a href="https://www.instagram.com/https://www.instagram.com/esengo_technique_rdc?igsh=MWI3bWNyNm1mZGN5Nw=="><i class="bi bi-instagram"></i></a>
              <a href="http://www.youtube.com/@EsengoTechnique-v1q"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero"> Accueil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about"> A propos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="# "> Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Électricité Bâtiment</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Panneaux Solaires</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Caméras de Surveillance</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Climatisation</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4><br></h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Décoration Intérieure & Extérieure</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> ArchitectureCaméras de Surveillance</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Maçonnerie</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services"> Plomberie</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Esengo Technique</strong> <span>Tous droits réservés.</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Design réalisé par <a href="https://gradi08.github.io/gradinchakiportfolio/">Gradi N'chaki</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- PHP Email Form Validation (tu peux garder local si c'est ton script personnalisé) -->
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- AOS (Animate On Scroll) -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Glightbox -->
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/js/glightbox.min.js"></script>

<!-- ImagesLoaded -->
<script src="https://cdn.jsdelivr.net/npm/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>

<!-- Isotope -->
<script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>

<!-- PureCounter -->
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>


  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    let clickCount = 0;
    const logo = document.getElementById('logo');
    const btnConnexion = document.getElementById('btn-connexion');

    logo.addEventListener('click', () => {
        clickCount++;

        if (clickCount === 3) {
            btnConnexion.style.display = "inline-block"; // affiche le bouton
        }
    });
</script>
</body>

</html>