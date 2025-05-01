<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cravory | Xampp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

          <!-- Navbar Start -->
          <?php session_start(); ?>
          <div class="container-xxl position-relative py-5 m-0">
              <nav
                  class="navbar navbar-expand-lg navbar-dark sticky-top px-4 px-lg-5 <?php echo isset($_SESSION['user_id']) ? 'py-lg-2' : 'py-lg-4'; ?> mb-3">
                  <a class="navbar-brand p-0" href="#">
                      <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Cravory</h1>
                  </a>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                      <div class="navbar-nav ms-auto pe-4">
                          <a href="index.php" class="nav-item nav-link fs-6">Home</a>
                          <a href="restaurants.php" class="nav-item nav-link fs-6 active">Restaurants</a>
                          <a href="service.html" class="nav-item nav-link fs-6">Service</a>
                      </div>
  
                      <?php if (isset($_SESSION['user_id'])): ?>
                      <a href="profile.php" class="nav-item nav-link d-flex align-items-center">
                          <img src="profile_image/<?php echo $_SESSION['profile_image']; ?>" class="rounded-circle p-3"
                              height="70" width="70" alt="Profile">
                          <?php echo strtoupper($_SESSION['first_name']); ?>
                      </a>
                      <?php else: ?>
                      <a href="login.html"
                          class="nav-item nav-link btn btn-primary fw-bold mx-1 px-3 py-1 rounded-5 ">Login</a>
                      <?php endif; ?>
                  </div>
              </nav>
          </div>
          <!-- Navbar End -->
  


        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-2 pb-1">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Restaurants</h1>
            </div>
        </div>

        <!-- Navbar & Hero End -->

        <!-- Restaurant card start -->

        <div class="restaurant-scroll-container wow fadeInUp " data-wow-delay="0.1s">
            <!-- onclick="window.location.href='products.html';" -->
            <!-- card 1 -->

            <div class="restaurant-wrapper">
                <!-- Restaurant 1 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=1" class="navbar-brand p-0">
                        <img src="img/Res Img/Sree Annapoorna.jpg" alt="Sree Annapurna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Sree Annapurna</h3>
                        <p class="restaurant-type"> Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> R.S. Puram,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 5.0</p>
                    </div>
                </div>

                <!-- Restaurant 2 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=2" class="navbar-brand p-0">
                        <img src="img/Res Img/Haribhavanam.jpg" alt="Haribhavanam">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Haribhavanam</h3>
                        <p class="restaurant-type"> Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Peelamedu,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>

                <!-- Restaurant 3 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=3" class="navbar-brand p-0">
                        <img src="img/Res Img/Bird  on tree.jpg" alt="Bird on Tree">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Bird on Tree</h3>
                        <p class="restaurant-type"> Both</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Race Course Road,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.7</p>
                    </div>
                </div>

                <!-- Restaurant 4 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=4" class="navbar-brand p-0">
                        <img src="img/Res Img/junior-kuppanna.jpg" alt="Junior Kuppanna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Junior Kuppanna</h3>
                        <p class="restaurant-type"> Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Ram Nagar,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.5</p>
                    </div>
                </div>

                <!-- Restaurant 5 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=5" class="navbar-brand p-0">
                        <img src="img/Res Img/Shree Anandhas.jpg" alt="Shree Anandhaas">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Shree Anandhaas</h3>
                        <p class="restaurant-type">Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Peelamedu,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>
            </div>


            <!-- Card 2 -->
            <div class="restaurant-wrapper">
                <!-- Restaurant 1 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=6" class="navbar-brand p-0">
                        <img src="img/Res Img/spice-nation.jpg" alt="Sree Annapurna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Spice Nation</h3>
                        <p class="restaurant-type">Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Thudiyalur,
                            Coimbatore
                        </p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.3</p>
                    </div>
                </div>

                <!-- Restaurant 2 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=7" class="navbar-brand p-0">
                        <img src="img/Res Img/green-leaf.jpg" alt="Haribhavanam">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Green Leaf</h3>
                        <p class="restaurant-type">Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Saravanampatti,
                            Coimbatore
                        </p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.0</p>
                    </div>
                </div>

                <!-- Restaurant 3 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=8" class="navbar-brand p-0">
                        <img src="img/Res Img/Spice trail.jpg" alt="Bird on Tree">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Spice Trail</h3>
                        <p class="restaurant-type">Both</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Red Cross Rd,
                            Egmore,
                            Chennai</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.7</p>
                    </div>
                </div>

                <!-- Restaurant 4 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=9" class="navbar-brand p-0">
                        <img src="img/Res Img/grillz.jpg" alt="Junior Kuppanna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Grillz</h3>
                        <p class="restaurant-type">Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i>Bannimantap, Mysuru,
                            Karnataka</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.2</p>
                    </div>
                </div>

                <!-- Restaurant 5 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=10" class="navbar-brand p-0">
                        <img src="img/Res Img/Annalakshmi.jpg" alt="Shree Anandhaas">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Annalakshmi</h3>
                        <p class="restaurant-type">Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Spur Tank road,
                            Chennai
                        </p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="restaurant-wrapper">
                <!-- Restaurant 1 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=11" class="navbar-brand p-0">
                        <img src="img/Res Img/Sree Annapoorna.jpg" alt="Sree Annapurna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Sree Annapurna</h3>
                        <p class="restaurant-type"> Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> R.S. Puram,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 5.0</p>
                    </div>
                </div>

                <!-- Restaurant 2 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=12" class="navbar-brand p-0">
                        <img src="img/Res Img/Haribhavanam.jpg" alt="Haribhavanam">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Haribhavanam</h3>
                        <p class="restaurant-type"> Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Peelamedu,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>

                <!-- Restaurant 3 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=13" class="navbar-brand p-0">
                        <img src="img/Res Img/Bird  on tree.jpg" alt="Bird on Tree">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Bird on Tree</h3>
                        <p class="restaurant-type"> Both</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Race Course Road,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.7</p>
                    </div>
                </div>

                <!-- Restaurant 4 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=14" class="navbar-brand p-0">
                        <img src="img/Res Img/junior-kuppanna.jpg" alt="Junior Kuppanna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Junior Kuppanna</h3>
                        <p class="restaurant-type"> Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Ram Nagar,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.5</p>
                    </div>
                </div>

                <!-- Restaurant 5 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=15" class="navbar-brand p-0">
                        <img src="img/Res Img/Shree Anandhas.jpg" alt="Shree Anandhaas">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Shree Anandhaas</h3>
                        <p class="restaurant-type">Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Peelamedu,
                            Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->

            <div class="restaurant-wrapper">
                <!-- Restaurant 1 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=6" class="navbar-brand p-0">
                        <img src="img/Res Img/spice-nation.jpg" alt="Sree Annapurna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Spice Nation</h3>
                        <p class="restaurant-type">Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Thudiyalur,
                            Coimbatore
                        </p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.3</p>
                    </div>
                </div>
                <!-- Restaurant 2 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=7" class="navbar-brand p-0">
                        <img src="img/Res Img/green-leaf.jpg" alt="Haribhavanam">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Green Leaf</h3>
                        <p class="restaurant-type"> Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Saravanampatti,
                            Coimbatore </p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.0</p>
                    </div>
                </div>

                <!-- Restaurant 3 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=8" class="navbar-brand p-0">
                        <img src="img/Res Img/Spice trail.jpg" alt="Bird on Tree">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Spice Trail</h3>
                        <p class="restaurant-type">Both</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Red Cross Rd,
                            Egmore,
                            Chennai</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.7</p>
                    </div>
                </div>

                <!-- Restaurant 4 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=9" class="navbar-brand p-0">
                        <img src="img/Res Img/grillz.jpg" alt="Junior Kuppanna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Grillz</h3>
                        <p class="restaurant-type">Non-Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i>Bannimantap, Mysuru,
                            Karnataka</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.2</p>
                    </div>
                </div>

                <!-- Restaurant 5 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=10" class="navbar-brand p-0">
                        <img src="img/Res Img/Annalakshmi.jpg" alt="Shree Anandhaas">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Annalakshmi</h3>
                        <p class="restaurant-type">Veg</p>
                        <p class="restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Spur Tank road,
                            Chennai
                        </p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>
            </div>
        </div>




        <!-- Footer Start -->
        <div class="bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5 justify-content-center text-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <h4 class="section-title ff-secondary text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="about.html" target="_blank">About Us</a>
                        <a class="btn btn-link" href="contact.html" target="_blank">Contact Us</a>
                        <a class="btn btn-link" href="booking.html" target="_blank">Reservation</a>
                        <a class="btn btn-link" href="privacypolicy.html" target="_blank">Privacy Policy</a>
                        <a class="btn btn-link" href="termscondition.html" target="_blank">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <h4 class="section-title ff-secondary text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@cravory.com</p>
                        <div class="d-flex justify-content-center pt-2">
                            <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <h4 class="section-title ff-secondary text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Stay updated with Cravory! Get exclusive restaurant deals, personalized dining
                            recommendations, and the
                            latest food trends delivered straight to your inbox.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Cravory</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.html">Home</a>
                                <a href="Cookies.html" target="_blank">Cookies</a>
                                <a href="help.html" target="_blank">Help</a>
                                <a href="FQAS.html" target="_blank">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>


    <!-- JavaScript Libraries -->
    <!-- Template Javascript -->
    <script src="script.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <link href="lib/animate/animate.min.css" rel="stylesheet">


    <script src="lib/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>



    <!-- location
     <style>
           iframe {
      width: 100%;
      height: 300px;
      border: none;
    }
     </style>
    <div class="section map">
        <h2>Location</h2>
        <p>1200 S Figueroa St Suite 180, Los Angeles, CA 90015</p>
        <iframe src="https://maps.google.com/maps?q=1200%20S%20Figueroa%20St%20Los%20Angeles&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
      </div> -->
</body>

</html>