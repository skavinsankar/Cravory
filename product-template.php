<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.icon" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

    <style>
        .star-rating {
            color: #d32323;
        }

        .tag {
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 5px 12px;
            margin-right: 5px;
        }

        .nav-tabs .nav-link.active {
            border-bottom: 2px solid red;
        }

        .info-icon {
            font-size: 1.2rem;
            margin-right: 10px;
            color: #343a40;
        }

        .info-title {
            font-weight: bold;
        }

        .info-section {
            margin-bottom: 20px;
        }

        .info-content a {
            text-decoration: none;
            color: #d63384;
        }

        .info-content a:hover {
            text-decoration: underline;
        }

        .star-rating {
            color: #e7711b;
            font-size: 1.2rem;
        }

        .bar-bg {
            background-color: #e9ecef;
            height: 10px;
            position: relative;
        }

        .bar-fill {
            background-color: #dc3545;
            height: 100%;
        }

        .tag-badge {
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            display: inline-block;
            font-size: 0.9rem;
        }

        .menu-item {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .available {
            color: green;
            font-weight: bold;
        }

        .unavailable {
            color: red;
            font-weight: bold;
        }
    </style>
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


        <!-- Hero Header Start -->
        <div class="w-100 bg-dark hero-header pt-3 pb-3 mb-2">
            <div class="container text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="restaurants.php">Restaurants</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page" id="restaurant-name1"></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Hero Header End -->

        <!-- Header Start -->

        <!-- Full Width Image -->
        <div class="container-fluid px-5">
            <img id="restaurant-img" src="" style="width: 100%; height: 400px;">
        </div>

        <div class="container-fluid px-5">
            <div class="container my-4">
                <div class="d-flex justify-content-between flex-wrap align-items-start">
                    <div>
                        <h2 id="restaurant-name2"></h2>
                        <div class="d-flex align-items-center mb-2 flex-wrap">
                            <div class="star-rating me-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="me-3" id="restaurant-rating"></span>
                            <span id="restaurant-reviews">
                                <i class="fa-regular fa-comments me-1"></i>
                            </span>
                            <span class="p-1">Reviews</span>

                            <span class="mx-3" id="restaurant-type">
                                <i class="fas fa-drumstick-bite me-1"></i>
                            </span>
                            <span class="mx-3" id="restaurant-cuisine">
                                <i class="fas fa-drumstick-bite me-1"></i>
                            </span>
                        </div>
                    </div>

                    <div class="text-center m-2">
                        <button class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#viewmenu">
                            View Menu </button>
                        <button class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#Booktable">Book The
                            Table</button>
                    </div>

                    <!-- Modal Structure -->
                    <div class="modal fade" id="viewmenu" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="RestaurantName"></h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Category Buttons -->
                                    <div class="mt-3">
                                        <button class="btn btn-outline-primary" id="southBtn">South Indian</button>
                                        <button class="btn btn-outline-primary" id="northBtn">North Indian</button>
                                        <button class="btn btn-outline-primary" id="dessertsBtn">Desserts</button>
                                        <button class="btn btn-outline-primary" id="icecreamBtn">Ice Cream</button>
                                        <button class="btn btn-secondary" onclick="loadMenu(currentMenuType)">🔄
                                            Refresh</button>
                                    </div>

                                    <!-- Menu Display Area -->
                                    <div id="menuList" class="mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                           const initialMenus = {
      south: [
    { name: "Idli", price: 20, available: true },
    { name: "Dosa", price: 40, available: true },
    { name: "Pongal", price: 40, available: true },
    { name: "Meals", price: 140, available: true },
    { name: "Chapati", price: 20, available: true },
    { name: "Uttapam", price: 40, available: true },
    { name: "Veg Briyani", price: 180, available: true },
    { name: "Paniyaram", price: 10, available: true }
  ],
  north: [
    { name: "Butter Chicken", price: 125, available: true },
    { name: "Paratha", price: 70, available: true },
    { name: "Briyani", price: 200, available: true },
    { name: "Tandoori Chicken", price: 370, available: true },
    { name: "Naan", price: 50, available: true },
    { name: "Malai Kofta", price: 60, available: true },
    { name: "Kadhi", price: 70, available: true },
    { name: "Chicken Tikka Masala", price: 220, available: true }
  ],
  desserts: [
    { name: "Jalebi", price: 25, available: true },
    { name: "Milk Burfi", price: 25, available: true },
    { name: "Coconut Burfi", price: 30, available: true },
    { name: "Kheer", price: 25, available: true },
    { name: "Kaju Katli", price: 25, available: true },
    { name: "Halwa Recipe", price: 35, available: true },
    { name: "Rava Laddu", price: 25, available: true },
    { name: "Rasgulla", price: 45, available: true }
  ],
  icecream: [
    { name: "Almond", price: 55, available: true },
    { name: "Blackberry", price: 65, available: true },
    { name: "Butterscotch", price: 75, available: true },
    { name: "Donnatella", price: 85, available: true },
    { name: "Espresso Fudge", price: 95, available: true },
    { name: "French Vanilla", price: 95, available: true },
    { name: "Honeycomb", price: 85, available: true },
    { name: "Chocolate", price: 65, available: true }
  ]
    };

    // Initialize localStorage if not already set
    if (!localStorage.getItem('menus')) {
      localStorage.setItem('menus', JSON.stringify(initialMenus));
    }
                        let currentMenuType = 'south';

                        // Load and display menu items
                        function loadMenu(menuType) {
                            const menuList = document.getElementById('menuList');
                            menuList.innerHTML = '';

                            const menus = JSON.parse(localStorage.getItem('menus')) || {
                                south: [], north: [], desserts: [], icecream: []
                            };

                            const menuItems = menus[menuType];

                            if (!menuItems || menuItems.length === 0) {
                                menuList.innerHTML = '<p class="text-muted">No dishes available in this category.</p>';
                                return;
                            }

                            menuItems.forEach(item => {
                                const menuItemDiv = document.createElement('div');
                                menuItemDiv.classList.add('menu-item');

                                const availabilityClass = item.available ? 'available' : 'unavailable';
                                const availabilityText = item.available ? 'Available' : 'Unavailable';

                                menuItemDiv.innerHTML = `
          <span>${item.name} - ₹${item.price}</span>
          <span class="${availabilityClass}">${availabilityText}</span>
        `;
                                menuList.appendChild(menuItemDiv);
                            });
                        }

                        // Event Listeners for buttons
                        document.getElementById('southBtn').addEventListener('click', () => {
                            currentMenuType = 'south';
                            loadMenu(currentMenuType);
                        });
                        document.getElementById('northBtn').addEventListener('click', () => {
                            currentMenuType = 'north';
                            loadMenu(currentMenuType);
                        });
                        document.getElementById('dessertsBtn').addEventListener('click', () => {
                            currentMenuType = 'desserts';
                            loadMenu(currentMenuType);
                        });
                        document.getElementById('icecreamBtn').addEventListener('click', () => {
                            currentMenuType = 'icecream';
                            loadMenu(currentMenuType);
                        });

                        // Listen to localStorage changes from other tabs/windows
                        window.addEventListener('storage', function (event) {
                            if (event.key === 'menus') {
                                loadMenu(currentMenuType);
                            }
                        });

                        // Load default menu
                        loadMenu(currentMenuType);
                    </script>


                    <!-- Book Table Modal -->
                    <div class="modal fade" id="Booktable" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="RestaurantName"></h5> -->
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="col-md-8">
                                        <ul class="nav nav-tabs" id="menuTabs1" role="tablist">
                                            <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#r1-south">South Indian</button></li>
                                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#r1-northindian">North Indian</button></li>
                                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#r1-desserts">Desserts</button></li>
                                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#r1-icecream">Ice Cream</button></li>
                                        </ul>

                                        <div class="tab-content mt-3" style="max-height: 230px; overflow-y: auto;">
                                            <div class="tab-pane fade show active" id="r1-south">
                                                <div class="list-group">
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Idli – ₹20 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Idli" data-price="20">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Dosa – ₹40 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Dosa" data-price="40">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Pongal – ₹40 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Pongal" data-price="40">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Meals – ₹140 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Meals" data-price="140">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Chapati – ₹20<button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Chapati" data-price="20">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Uttapam – ₹40 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Uttapam" data-price="40">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Veg Briyani – ₹180 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Veg Briyani" data-price="180">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Paniyaram – ₹10 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Paniyaram" data-price="10">+</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="r1-northindian">
                                                <div class="list-group">
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Butter chicken – ₹125 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Butter chicken" data-price="125">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Paratha – ₹70 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Paratha" data-price="70">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Briyani – ₹200 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Briyani" data-price="200">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Tandoori chicken – ₹370 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Tandoori chicken" data-price="370">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Naan – ₹50 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Naan" data-price="50">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Malai Kofta – ₹60 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Malai Kofta" data-price="60">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Kadhi – ₹70 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Kadhi" data-price="70">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Chicken tikka masala – ₹220 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Chicken tikka masala" data-price="220">+</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="r1-desserts">
                                                <div class="list-group">
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Jalebi – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Jalebi " data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Milk Burfi – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Milk Burfi " data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Coconut Burfi – ₹30 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Coconut Burfi " data-price="30">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Kheer – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Kheer" data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Kaju Katli – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Kaju Katli " data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Halwa Recipe – ₹35 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Halwa Recipe" data-price="35">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Rava Laddu – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Rava Laddu" data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Shankarpali – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Shankarpali" data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Puran poli – ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Puran poli " data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Lauki Halwa– ₹25 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Jalebi " data-price="25">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Coconut Ladoo – ₹35 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Coconut Ladoo" data-price="35">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Rasgulla – ₹45 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Rasgulla " data-price="45">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Rasmalai – ₹55 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Rasmalai" data-price="55">+</button>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="r1-icecream">
                                                <div class="list-group">
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Almond– ₹55 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name=" Almond" data-price="55">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Blackberry – ₹65 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Blackberry" data-price="65">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Butterscotch – ₹75 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name=" Butterscotch" data-price="75">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Donnatella – ₹85 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Donnatella" data-price="85">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Espresso Fudge – ₹95 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Espresso Fudge" data-price="95">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        French Vanilla – ₹95 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name=" Almond" data-price="95">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Honeycomb – ₹85 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Honeycomb" data-price="85">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Jelly Bean – ₹75 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name=" Jelly Bean" data-price="75">+</button>
                                                    </div>
                                                    <div class="list-group-item d-flex justify-content-between">
                                                        Chocolate – ₹65 <button
                                                            class="btn btn-sm btn-outline-success add-btn" data-id="r1"
                                                            data-name="Chocolate" data-price="65">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 row d-flex">
                                            <div class="col-md-6">
                                                <label for="r1Seats" class="form-label fw-bold">Number of Seats:</label>
                                                <input type="number" id="r1Seats" class="form-control" min="1" max="50"
                                                    value="2">
                                                <div id="seatError" class="text-danger mt-1" style="display:none;">Not
                                                    Enough Seats Available</div>
                                            </div>

                                            <!-- Seat Available -->
                                            <script>
                                                const r1SeatsInput = document.getElementById('r1Seats');
                                                const seatError = document.getElementById('seatError');

                                                r1SeatsInput.addEventListener('input', () => {
                                                    const value = parseInt(r1SeatsInput.value, 10);

                                                    if (value > 50) {
                                                        seatError.style.display = 'block';
                                                        r1SeatsInput.value = 50; // Set it back to 50
                                                    } else {
                                                        seatError.style.display = 'none';
                                                    }
                                                });
                                            </script>

                                            <div class="col-md-6">
                                                <label for="r1Date" class="form-label fw-bold">Date:</label>
                                                <input type="date" id="r1Date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mt-4 row d-flex">
                                            <div class="col-md-6">
                                                <label for="r1Time" class="form-label fw-bold">Time:</label>
                                                <input type="time" id="r1Time" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="r1Request" class="form-label fw-bold">Special
                                                    Request:</label>
                                                <textarea id="r1Request" class="form-control" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 border-start">
                                        <h5>Your Order</h5>
                                        <ul id="orderList-r1" class="list-group mb-3"
                                            style="max-height: 350px; overflow-y: auto;"></ul>
                                        <p>Total: ₹<span id="totalAmount-r1">0</span></p>
                                        <button class="btn btn-primary w-100 confirm-btn" data-id="r1">Confirm
                                            Booking</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-lg-8">
                            <ul class="nav nav-tabs my-4">
                                <li class="nav-item"><a class="nav-link active" href="#">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Private dining</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Photos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
                            </ul>

                            <h6>About this restaurant</h6>
                            <div class="mb-2">
                                <span class="tag">Good for special occasions</span>
                                <span class="tag">Lively</span>
                                <span class="tag">Fancy</span>
                            </div>
                            <p id="restaurant-description">Restaurants Description</p>

                            <div class="container py-1">
                                <h4>Menu</h4>
                                <a href="#" class="text-danger d-block mb-4" id="restaurant-menu-link">📄 View menu on
                                    restaurant's website</a>

                                <h4 id="restaurant-reviews-title">Reviews Question</h4>
                                <p id="restaurant-reviews-description"></p>

                                <h5 class="mt-4" id="restaurant-rating-title">Overall ratings and reviews</h5>
                                <p class="text-muted" id="restaurant-rating-description">Reviews can only be made by
                                    diners
                                    who have eaten at this restaurant</p>

                                <div class="d-flex align-items-center mb-2">
                                    <div class="star-rating me-2">★★★★☆</div>
                                    <span>4.5 based on recent ratings</span>
                                </div>

                                <div class="row text-center mb-3">
                                    <div class="col"><strong>4.5</strong><br><small>Food</small></div>
                                    <div class="col"><strong>4.4</strong><br><small>Service</small></div>
                                    <div class="col"><strong>4.5</strong><br><small>Ambience</small></div>
                                    <div class="col"><strong>4.2</strong><br><small>Value</small></div>
                                </div>
                            </div>

                            <div class="accordion-item border-warning mb-2" id="faqOne">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-semibold text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        How do I book a table?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Go to the restaurant page and click "Book Table"...
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-warning mb-2" id="faqTwo">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold text-dark" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Can I cancel or modify my booking?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">Yes! You can modify or cancel from your account
                                        dashboard...
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 p-5">
                            <h6 class="fw-bold">Additional information</h6>

                            <div class="info-section d-flex">
                                <i class="bi bi-geo-alt info-icon"></i>
                                <div>
                                    <div class="info-title">Neighborhood</div>
                                    <div class="info-content" id="restaurant-neighborhood">Downtown</div>
                                </div>
                            </div>

                            <div class="info-section d-flex">
                                <i class="bi bi-clock info-icon"></i>
                                <div>
                                    <div class="info-title">Hours of operation</div>
                                    <div class="info-content" id="restaurant-hours">Mon–Wed, Sun 5:00 pm–9:00 pm...
                                    </div>
                                </div>
                            </div>

                            <div class="info-section d-flex">
                                <i class="bi bi-lamp info-icon"></i>
                                <div>
                                    <div class="info-title">Dining style</div>
                                    <div class="info-content" id="restaurant-dining-style">Fine Dining</div>
                                </div>
                            </div>

                            <div class="info-section d-flex">
                                <i class="bi bi-lamp info-icon"></i>
                                <div>
                                    <div class="info-title">Parking details</div>
                                    <div class="info-content" id="restaurant-parking">Valet</div>
                                </div>
                            </div>

                            <div class="info-section d-flex">
                                <i class="bi bi-credit-card info-icon"></i>
                                <div>
                                    <div class="info-title">Payment options</div>
                                    <div class="info-content" id="restaurant-payment">AMEX, Discover, Mastercard, Visa
                                    </div>
                                </div>
                            </div>

                            <div class="info-section d-flex ">
                                <i class="bi bi-list-ul info-icon"></i>
                                <div>
                                    <div class="info-title">Additional</div>
                                    <div class="info-content w-100" id="restaurant-additional">
                                    </div>
                                </div>
                            </div>

                            <div class="info-section d-flex">
                                <i class="bi bi-globe info-icon"></i>
                                <div>
                                    <div class="info-title">Website</div>
                                    <div class="info-content">
                                        <a id="restaurant-website"
                                            href="https://www.mastrosrestaurants.com/location/mastros-ocean-club-la/"
                                            target="_blank">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-3">
                                <a class="btn btn-outline-primary btn-sm" onclick="toggleMoreInfo()">View More</a>
                            </div>

                            <div id="moreInfo" style="display: none;">
                                <div class="info-section d-flex">
                                    <i class="bi bi-telephone info-icon"></i>
                                    <div>
                                        <div class="info-title">Phone number</div>
                                        <div class="info-content text-danger" id="restaurant-phone"></div>
                                    </div>
                                </div>

                                <div class="info-section d-flex">
                                    <i class="bi bi-bell info-icon"></i>
                                    <div>
                                        <div class="info-title">Catering</div>
                                        <div class="info-content" id="restaurant-catering">Contact us for a complete
                                            catering menu...</div>
                                    </div>
                                </div>

                                <div class="info-section d-flex">
                                    <i class="bi bi-cup-straw info-icon"></i>
                                    <div>
                                        <div class="info-title">Private party facilities</div>
                                        <div class="info-content" id="restaurant-private-party">Mastro's combines
                                            atmosphere...</div>
                                    </div>
                                </div>

                                <div class="info-section d-flex">
                                    <i class="bi bi-card-list info-icon"></i>
                                    <div>
                                        <div class="info-title">Private party contact</div>
                                        <div class="info-content" id="restaurant-party-contact">Laurence Whiting : (213)
                                            204-6872</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </div>

            <!-- Footer Start -->
            <div class="bg-dark text-light footer">
                <div class="container py-5">
                    <div class="row g-5 justify-content-center text-center">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-primary mb-4">Company</h4>
                            <a class="btn btn-link" href="about.html">About Us</a>
                            <a class="btn btn-link" href="contact.html">Contact Us</a>
                            <a class="btn btn-link" href="booking.html">Reservation</a>
                            <a class="btn btn-link" href="privacypolicy.html">Privacy Policy</a>
                            <a class="btn btn-link" href="termscondition.html">Terms & Condition</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-primary mb-4">Contact</h4>
                            <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope me-3"></i>info@cravory.com</p>
                            <div class="d-flex justify-content-center pt-2">
                                <a class="btn btn-outline-light btn-social mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="#"><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-primary mb-4">Newsletter</h4>
                            <p>Stay updated with Cravory! Get exclusive restaurant deals, personalized dining
                                recommendations, and the latest food trends delivered straight to your inbox.</p>
                        </div>
                    </div>
                </div>
                <div class="container text-center mt-3">
                    <p>&copy; <a href="#">Cravory</a>, All Right Reserved.</p>
                    <div>
                        <a href="index.php">Home</a> |
                        <a href="Cookies.html">Cookies</a> |
                        <a href="help.html">Help</a> |
                        <a href="FQAS.html">FQAs</a>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <script>
                function toggleMoreInfo() {
                    const moreInfo = document.getElementById("moreInfo");
                    const toggleBtn = document.getElementById("toggleBtn");

                    if (moreInfo.style.display === "none") {
                        moreInfo.style.display = "block";
                        toggleBtn.innerText = "View Less";
                    } else {
                        moreInfo.style.display = "none";
                        toggleBtn.innerText = "View More";
                    }
                }
            </script>


            <!-- Customer Menu HTML (your list of food items) -->

            <script>
                // Menu Data (must be included if not already, OR fetch dynamically)
                const southIndianMenuItems = [
                    { name: "Idli", price: 20, available: true },
                    { name: "Dosa", price: 40, available: true },
                    { name: "Pongal", price: 40, available: true },
                    { name: "Meals", price: 140, available: true },
                    { name: "Chapati", price: 20, available: true },
                    { name: "Uttapam", price: 40, available: true },
                    { name: "Veg Briyani", price: 180, available: true },
                    { name: "Paniyaram", price: 10, available: true },
                    // ... and so on
                ];

                function refreshCustomerMenu() {
                    document.querySelectorAll('.add-btn').forEach(btn => {
                        const dishName = btn.getAttribute('data-name');
                        const menuItem = findMenuItemByName(dishName);

                        if (menuItem) {
                            if (!menuItem.available) {
                                btn.disabled = true;
                                btn.classList.remove('btn-outline-success');
                                btn.classList.add('btn-secondary');
                                btn.textContent = "Unavailable";
                            } else {
                                btn.disabled = false;
                                btn.classList.add('btn-outline-success');
                                btn.classList.remove('btn-secondary');
                                btn.textContent = "+";
                            }
                        }
                    });
                }

                function findMenuItemByName(name) {
                    const allMenus = [
                        ...southIndianMenuItems,
                        // Add northIndianMenuItems, dessertsMenuItems, iceCreamMenuItems if needed
                    ];
                    return allMenus.find(item => item.name === name);
                }

                // Call it once page loads
                document.addEventListener('DOMContentLoaded', refreshCustomerMenu);
            </script>


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 

        <!-- JS Scripts -->
        <script src="script.js"></script>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>



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