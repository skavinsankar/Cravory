<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cravory</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- <script src="profile.php"></script> -->


</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <?php session_start(); ?>
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top px-4 px-lg-5 py-3 py-lg-2 <?php echo isset($_SESSION['user_id']) ? 'py-lg-2' : 'py-lg-4'; ?> mb-3" id="mainNavbar"
                style="background: transparent !important;" >

                <a class="navbar-brand p-0" href="#">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Cravory</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link fs-6 active">Home</a>
                        <a href="restaurants.php" class="nav-item nav-link fs-6">Restaurants</a>
                        <a href="service.html" class="nav-item nav-link fs-6">Service</a>
                    </div>

                    <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="profile.php" class="nav-item nav-link d-flex align-items-center ">
                        <img src="profile_image/<?php echo $_SESSION['profile_image']; ?>"
                            class="rounded-circle p-3 m-0" height="70" width="70" alt="Profile ">
                        <?php echo strtoupper($_SESSION['first_name']); ?>
                    </a>
                    <?php else: ?>
                    <div class="dropdown">
                        <a class="nav-item nav-link btn btn-primary fw-bold mx-1 px-3 py-1 rounded-5 " href="#"
                            id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <div class="text-success-emphasis">
                            <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 m-1"
                                        href="cravoryadmin/Res_admin_login.php">
                                        <i class="fas fa-user-shield"></i> Admin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2 m-1" href="login.html">
                                        <i class="fas fa-user"></i> User
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </nav>

            <div class="container-xxl p-5 bg-dark hero-header mb-2">
                <div class="container my-4 pt-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <a href="../Cravoryxampp1/booking.php"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft rounded-5">Book A
                                Table</a>
                        </div>
                        <div class="col-lg-6 pt-5 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid w-75 " src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Restaurant card start -->
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Restaurants</h1>
        </div>
        <div class="restaurant-scroll-container wow fadeInUp" data-wow-delay="0.2s">
            <div class="restaurant-wrapper">
                <!-- Restaurant 1 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=1" class="navbar-brand p-0">
                        <img src="img/Res Img/Sree Annapoorna.jpg" alt="Sree Annapurna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Sree Annapurna</h3>
                        <p class="restaurant-type"> Veg</p>
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> R.S. Puram, Coimbatore</p>
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Peelamedu, Coimbatore</p>
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Ram Nagar, Coimbatore</p>
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Peelamedu, Coimbatore</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>

                <!-- Restaurant 1 -->
                <div class="restaurant-card">
                    <a href="product-template.php?id=6" class="navbar-brand p-0">
                        <img src="img/Res Img/spice-nation.jpg" alt="Sree Annapurna">
                    </a>
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Spice Nation</h3>
                        <p class="restaurant-type">Non-Veg</p>
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Thudiyalur, Coimbatore</p>
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Saravanampatti, Coimbatore
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Red Cross Rd, Egmore,
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
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
                        <p class="restaurant-type restaurant-hours">Checking status...</p>
                        <p class="restaurant-location"><i class="fas fa-map-marker-alt"></i> Spur Tank road, Chennai</p>
                        <p class="restaurant-rating"><i class="fas fa-star"></i> 4.6</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="view-more-container">
            <a href="restaurants.php" class="view-more">View More</a>
        </div>

        <!-- Restaurant card End -->



        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime"
                                            placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                            <option value="1">People 1</option>
                                            <option value="2">People 2</option>
                                            <option value="3">People 3</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->



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
                                <a href="index.php">Home</a>
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
        <!-- Chatbot start -->
        <div id="chat-icon" onclick="toggleChat()"
            style="position: fixed; bottom: 20px; left: 20px; background-color: #FEA116; color: white; padding: 15px; border-radius: 50%; box-shadow: 0 4px 8px rgba(0,0,0,0.3); cursor: pointer; z-index: 9999;">
            <i class="fa fa-commenting wow fadeInUp animated slideInLeft" data-wow-delay="0.2s"></i>
        </div>

        <!-- Chat Window -->
        <div id="chat-window"
            style="display: none; position: fixed; bottom: 80px; left: 20px; width: 300px; height: 400px; background: #ffffff; border: 2px solid #FEA116; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); z-index: 9999;">
            <div
                style="background-color: #FEA116; padding: 10px; color: white; font-weight: bold; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                Cravory Assistant</div>
            <div id="chat-body" style="padding: 10px; height: 300px; overflow-y: auto; font-size: 14px;"></div>
            <div style="display: flex; border-top: 1px solid #ddd;">
                <input type="text" id="user-input" placeholder="Ask me anything..."
                    style="flex: 1; padding: 10px; border: none;"
                    onkeypress="if(event.key === 'Enter'){ sendMessage(); }">
                <button onclick="sendMessage()"
                    style="background: #FEA116; color: white; border: none; padding: 10px;">Send</button>
            </div>
        </div>
        <!-- Chatbot End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Template Javascript -->


    <!-- JavaScript Libraries -->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>