

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - ESENGOTECH</title>
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
          <li><a href="#hero" class="active">Accueil<br></a></li>
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
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Esengo Technique<span>.</span></h2>
            <p>Votre partenaire de confiance pour tous vos projets techniques</p>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-star-fill"></i>
              <h3><a href="">Excellence</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-shield-fill"></i>
              <h3><a href="">Intégrité</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-lightbulb-fill"></i>
              <h3><a href="">Innovation</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-headset"></i>
              <h3><a href="">Service client</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-leaf-fill"></i>
              <h3><a href="">Développement durable</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
<section id="about" class="about section bg-light py-5">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 align-items-center">
      
      <!-- Image -->
      <div class="col-lg-6 order-1 order-lg-2 text-center">
        <img src="assets/img/about.jpg" class="img-fluid rounded-3 shadow" alt="Esengo Technique">
      </div>

      <!-- Contenu -->
      <div class="col-lg-6 order-2 order-lg-1 content">
        <h2 class="mb-4 fw-bold text-primary">Notre histoire</h2>
        
        <p>
          Fondée en 2010, <strong>Esengo Technique</strong> est née de la vision de son fondateur, 
          <strong><em>Monsieur Senenge</em></strong>, qui souhaitait offrir des services techniques de qualité répondant aux 
          besoins croissants de la population congolaise en matière d'électricité, de climatisation 
          et d'énergies renouvelables.
        </p>

        <p>
          Depuis nos débuts modestes avec une petite équipe de techniciens, nous avons grandi pour devenir 
          une référence dans le secteur des services techniques en RDC. 
          <strong>Plus de 50 employés qualifiés</strong> et des centaines de projets réalisés à Kinshasa, 
          Lubumbashi, Goma et Matadi témoignent de notre engagement.
        </p>

        <div class="mt-4">
          <h4 class="fw-semibold text-secondary">Notre mission</h4>
          <p>
            Fournir des services techniques de haute qualité, accessibles et durables qui améliorent 
            le confort et la qualité de vie de nos clients, tout en contribuant au développement 
            économique de la RDC avec des solutions innovantes et écologiques.
          </p>
        </div>

        <div class="mt-4">
          <h4 class="fw-semibold text-secondary">Notre vision</h4>
          <p>
            Devenir le leader incontesté des services techniques en RDC et en Afrique Centrale, reconnu 
            pour notre excellence, notre innovation et notre engagement envers le développement durable.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ======= Nos Valeurs ======= -->
<section id="values" class="services section bg-white py-5">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Nos Valeurs</h2>
    <p>Les principes qui guident nos actions au quotidien</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <!-- Excellence -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-star-fill"></i>
          </div>
          <h3>Excellence</h3>
          <p>Nous visons l'excellence dans chaque projet, en respectant les normes les plus strictes et en utilisant des matériaux de qualité.</p>
        </div>
      </div><!-- End Value Item -->

      <!-- Intégrité -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-shield-fill"></i>
          </div>
          <h3>Intégrité</h3>
          <p>Nous sommes transparents dans nos devis, honnêtes dans nos conseils et fiables dans nos engagements.</p>
        </div>
      </div><!-- End Value Item -->

      <!-- Innovation -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-lightbulb-fill"></i>
          </div>
          <h3>Innovation</h3>
          <p>Nous adoptons les technologies les plus récentes et formons continuellement notre équipe aux meilleures pratiques.</p>
        </div>
      </div><!-- End Value Item -->

      <!-- Service Client -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-headset"></i>
          </div>
          <h3>Service client</h3>
          <p>La satisfaction de nos clients est notre priorité absolue. Nous écoutons, conseillons et accompagnons chaque client.</p>
        </div>
      </div><!-- End Value Item -->

      <!-- Développement Durable -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <<i class="bi bi-leaf-fill"></i>
          </div>
          <h3>Développement durable</h3>
          <p>Nous privilégions les solutions écologiques et économes en énergie pour préserver l'environnement et réduire les coûts.</p>
        </div>
      </div><!-- End Value Item -->

      <!-- Engagement Communautaire -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-people "></i>
          </div>
          <h3>Engagement communautaire</h3>
          <p>Nous nous investissons dans la formation des jeunes techniciens et soutenons des initiatives locales de développement.</p>
        </div>
      </div><!-- End Value Item -->

    </div>
  </div>
</section>

<!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

  <div class="container">

    <div class="row gy-4">
      <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/Voici.jpeg" alt="">
      </div>
      <div class="col-lg-6">

        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-cpu flex-shrink-0"></i>
          <div>
            <h4>Expertise technique</h4>
            <p>Une équipe qualifiée qui vous accompagne dans tous vos besoins techniques, du conseil à la réalisation.</p>
          </div>
        </div><!-- End Features Item-->

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-lightning-charge flex-shrink-0"></i>
          <div>
            <h4>Rapidité & efficacité</h4>
            <p>Des interventions et solutions optimisées pour un gain de temps et une meilleure productivité.</p>
          </div>
        </div><!-- End Features Item-->

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-gear-wide-connected flex-shrink-0"></i>
          <div>
            <h4>Solutions sur mesure</h4>
            <p>Nous adaptons nos services en fonction de vos projets spécifiques et de vos contraintes techniques.</p>
          </div>
        </div><!-- End Features Item-->

        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-shield-lock flex-shrink-0"></i>
          <div>
            <h4>Sécurité & fiabilité</h4>
            <p>Des interventions sécurisées et des solutions durables pour vous garantir la tranquillité d’esprit.</p>
          </div>
        </div>
        <!-- End Features Item-->

      </div>
    </div>

  </div>

</section>
<!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Check our Services</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-lightning-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Électricité Bâtiment</h3>
              </a>
              <p>Installation, maintenance et dépannage électrique pour tous types de bâtiments. Solutions complètes et sécurisées.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-sun-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Panneaux Solaires</h3>
              </a>
              <p>Installation de systèmes solaires photovoltaïques pour une énergie propre et économique. Études personnalisées</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-camera-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Caméras de Surveillance</h3>
              </a>
              <p>Systèmes de sécurité et surveillance pour protéger votre domicile ou entreprise. Solutions haute définition</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-cloud-sun-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Climatisation</h3>
              </a>
              <p>Installation et entretien de systèmes de climatisation pour votre confort. Solutions adaptées à vos besoins.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-droplet-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Plomberie</h3>
              </a>
              <p>Installation, réparation et maintenance de systèmes de plomberie. Interventions rapides et efficaces.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-house-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Décoration Intérieure & Extérieure</h3>
              </a>
              <p>Conseils et réalisation de projets de décoration pour valoriser vos espaces intérieurs et extérieurs.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-house-door-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Architecture</h3>
              </a>
              <p>Conception et suivi de projets architecturaux. Designs modernes et fonctionnels adaptés à vos besoins.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bricks"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Maçonnerie</h3>
              </a>
              <p>Réalisation de travaux de maçonnerie pour tous types de constructions. Qualité et durabilité garanties.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
  <h3>Boostez vos performances avec notre expertise</h3>
  <p>Vous avez un projet technique ? Confiez-le à notre équipe d’experts et transformez vos idées en solutions concrètes et performantes. Ensemble, faisons passer votre entreprise au niveau supérieur.</p>

</div>

          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check our Portfolio</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 align-items-center justify-content-between">

      <div class="col-lg-5">
        <img src="assets/img/stats-img.jpg" alt="" class="img-fluid">
      </div>

      <div class="col-lg-6">

        <h3 class="fw-bold fs-2 mb-3">Des résultats concrets pour chaque projet</h3>
        <p>
          Depuis plusieurs années, nous accompagnons nos clients dans leurs projets techniques avec sérieux et efficacité.  
          Notre engagement : des solutions fiables, un support réactif et une équipe toujours à l’écoute de vos besoins.
        </p>

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-emoji-smile flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Clients Satisfaits</strong> <span>qui nous font confiance</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-journal-richtext flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projets Réalisés</strong> <span>avec succès et professionnalisme</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-headset flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Heures de Support</strong> <span>toujours disponibles pour nos clients</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-people flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Experts Dévoués</strong> <span>prêts à relever chaque défi</span></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </div>

  </div>

</section>
<!-- /Stats Section -->
  </main>



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
<!-- Script -->
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