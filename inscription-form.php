<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>inscription</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="form.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">plateformedesjeunesyoussoufia@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+212687904684</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://web.facebook.com/profile.php?id=100092654574112 " class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/plateformedesjeunesyoussoufia/?next=%2F " class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/plateforme-des-jeunes-youssoufia-9187b62a0/ " class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="index.php?logout='1'">
		                <button style="margin-left: 445px;" class="butt">
		                 <span>
		                  Sign Out
		                 </span>
		                </button>
                        <?php 
                    
                            session_start(); 

                            if (isset($_GET['logout'])) {
                                session_destroy();
                                unset($_SESSION['user_nom']);
                                header("location: index.php");
                            }
           
                          ?>
		              </a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

     <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="logo.png" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="index.php#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">À propos</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.php/#team">Équipe</a></li>
          <li class="dropdown"><a href="#"><span>Plateforme</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">CAEDEL</a></li>
              <li><a href="#">MAROC INNOV</a></li>
              <li><a href="#">Association gestionnaire</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Communiqués</a></li>
              <li><a href="#">Evénements</a></li>
              <li><a href="#">Galerie</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  <h2>Formulaire d'inscription</h2>
    <form action="forms/inscription.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>
        
        <label for="genre">Genre :</label>
        <select id="genre" name="genre" required>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select><br><br>
        
        <label for="cin">N° CIN :</label>
        <input type="text" id="cin" name="cin" required><br><br>
        
        <label for="telephone">N° de telephone :</label>
        <input type="tel" id="telephone" name="telephone" required><br><br>
        
        <label for="commune_residence">Commune de residence :</label>
        <select id="commune_residence" name="commune_residence" required>
            <option value="Youssoufia">Youssoufia</option>
            <option value="Echemmaia">Echemmaia</option>
            <option value="EL gantour">EL gantour</option>
            <option value="Esbiaat">Esbiaat</option>
            <option value="Atiamim">Atiamim</option>
            <option value="Lakhoualka">Lakhoualka</option>
            <option value="Rass Al ain">Rass Al ain</option>
            <option value="Jnane Bouih">Jnane Bouih</option>
            <option value="Jdour">Jdour</option>
            <option value="Ighoud">Ighoud</option>
            <option value="Sidi chiker">Sidi chiker</option>
        </select><br><br>
        
        <label for="type_candidat">Type candidat :</label>
        <select id="type_candidat" name="type_candidat" required>
            <option value="Auto-entrepreneur">Auto-entrepreneur</option>
            <option value="coopérative">Coopérative</option>
            <option value="Association">Association</option>
            <option value="Autre">Autre</option>
            <option value="sans">Sans</option>
        </select><br><br>
        
        <label for="orientation">Orientation :</label>
        <select id="orientation" name="orientation" required>
            <option value="Entreprenariat(INDH)">Entreprenariat(INDH)</option>
            <option value="ESS(INDH)">ESS(INDH)</option>
            <option value="CAEDEL(CRI)">CAEDEL(CRI)</option>
            <option value="Employabilité (Anapec)">Employabilité (Anapec)</option>
        </select><br><br>
        
        <label for="cin_pdf">Photocopie de CIN (PDF) :</label>
        <input type="file" id="cin_pdf" name="cin_pdf" accept="application/pdf" required><br><br>
        
        <label for="cv_pdf">CV (PDF) :</label>
        <input type="file" id="cv_pdf" name="cv_pdf" accept="application/pdf" required><br><br>
        
        <label for="formulaire_pdf">Formulaire rempli (PDF) :</label>
        <input type="file" id="formulaire_pdf" name="formulaire_pdf" accept="application/pdf" required><br><br>
        <label for="Engagement_pdf">Engagement</label>
        <input type="file" id="engagement" name="engagement_pdf" accept="application/pdf">
        
        <button type="submit">Soumettre</button>
    </form>
  </main>
  <!-- Footer -->
  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Plateforme des jeunes Youssoufia<span>.</span></h3>
        <p>
          Plateforme des jeunes Youssoufia <br>
          Habitation Laghdir<br>
          Youssoufia Maroc <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> plateformedesjeunesyoussoufia@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container py-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Fatouma Elghanjaoui</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
    Designed by <a href="C:/Users/ADMIN/Desktop/LesFichiersPDF/cv(1).pdf">Fatouma</a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>