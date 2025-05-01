<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "cravory";

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and create folder name from restaurant name
    $restaurantName = preg_replace('/[^a-zA-Z0-9-_]/', '_', $_POST['restaurant_name']);
    $uploadFolder = "proofs/" . $restaurantName . "/";
    if (!file_exists($uploadFolder)) {
        mkdir($uploadFolder, 0777, true);
    }

    // Handle file uploads
    $licensePath = $uploadFolder . basename($_FILES["license_proof"]["name"]);
    $fssaiPath   = $uploadFolder . basename($_FILES["fssai_proof"]["name"]);
    $gstPath     = $uploadFolder . basename($_FILES["gst_proof"]["name"]);

    move_uploaded_file($_FILES["license_proof"]["tmp_name"], $licensePath);
    move_uploaded_file($_FILES["fssai_proof"]["tmp_name"], $fssaiPath);
    move_uploaded_file($_FILES["gst_proof"]["tmp_name"], $gstPath);

    // Collect form inputs
    $data = [
        'restaurant_name'       => $_POST['restaurant_name'],
        'registration_number'   => $_POST['registration_number'],
        'license_number'        => $_POST['license_number'],
        'license_upload'        => $licensePath,
        'fssai_upload'          => $fssaiPath,
        'gst_upload'            => $gstPath,
        'restaurant_address'    => $_POST['restaurant_address'],
        'restaurant_email'      => $_POST['restaurant_email'],
        'city'                  => $_POST['city'],
        'state'                 => $_POST['state'],
        'country'               => $_POST['country'],
        'pincode'               => $_POST['pincode'],
        'owner_name'            => $_POST['owner_name'],
        'username'              => $_POST['username'],
        'email'                 => $_POST['email'],
        'phone_number'          => $_POST['phone_number'],
        'password'              => $_POST['password'],
        'working_days'          => $_POST['working_days'],
        'online_order'          => $_POST['online_order'],
        'table_reservation'     => $_POST['table_reservation'],
        'delivery_service'      => $_POST['delivery_service'],
    ];

    // Prepare SQL insert
    $sql = "INSERT INTO restaurant_reg (
        restaurant_name, registration_number, license_number, license_proof,
        fssai_proof, gst_proof, restaurant_address, restaurant_email, city,
        state, country, pincode, owner_name, username, email, phone_number, password,
        working_days, online_order, table_reservation, delivery_service
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssssssssssssssssssss",
        $data['restaurant_name'],
        $data['registration_number'],
        $data['license_number'],
        $data['license_upload'],
        $data['fssai_upload'],
        $data['gst_upload'],
        $data['restaurant_address'],
        $data['restaurant_email'],
        $data['city'],
        $data['state'],
        $data['country'],
        $data['pincode'],
        $data['owner_name'],
        $data['username'],
        $data['email'],
        $data['phone_number'],
        $data['password'],
        $data['working_days'],
        $data['online_order'],
        $data['table_reservation'],
        $data['delivery_service']
    );

    // Execute and check
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='../index.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant Registration | Cravory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #2f353c;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .signup-box {
            background-color: #2c2c2c;
            padding: 30px;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(255, 140, 0, 0.2);
        }

        .btn-orange {
            background-color: #ff8c00;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e67e00;
        }

        a {
            color: #ff8c00;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .signup-box {
                margin-top: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="container-xxl position-relative py-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 sticky-top" style="z-index: 1030;">
            <a href="#" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Cravory</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="../index.php" class="nav-item nav-link">Home</a>
                    <a href="../cravoryadmin/Res_admin_login.php" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Restaurant Registration Form -->
    <div class="container py-5">
        <div class="signup-box mx-auto">
            <h2 class="mb-4 text-center text-warning">Restaurant Registration Form</h2>
            <form method="POST" action="restaurant_signup.php" enctype="multipart/form-data">
                <!-- Row 1 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Restaurant Name</label>
                        <input type="text" class="form-control" name="restaurant_name" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Registration Number</label>
                        <input type="text" class="form-control" name="registration_number" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">License Number</label>
                        <input type="text" class="form-control" name="license_number" required>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Upload License</label>
                        <input type="file" class="form-control" name="license_proof" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Upload FSSAI Certificate</label>
                        <input type="file" class="form-control" name="fssai_proof" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Upload GST Certificate</label>
                        <input type="file" class="form-control" name="gst_proof" required>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Restaurant Address</label>
                        <input type="text" class="form-control" name="restaurant_address" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Restaurant Email</label>
                        <input type="email" class="form-control" name="restaurant_email" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" required>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" name="state" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Pincode</label>
                        <input type="text" class="form-control" name="pincode" required>
                    </div>
                </div>

                <!-- Row 5 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Owner Name</label>
                        <input type="text" class="form-control" name="owner_name" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>

                <!-- Row 6 -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phone_number" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Working Days</label>
                        <select class="form-select" name="working_days" required>
                            <option value="">Select</option>
                            <option>Mon-Fri</option>
                            <option>Mon-Sat</option>
                            <option>Mon-Sun</option>
                        </select>
                    </div>
                </div>

                <!-- Row 7 -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label">Online Order</label>
                        <select class="form-select" name="online_order" required>
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Table Reservation</label>
                        <select class="form-select" name="table_reservation" required>
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Delivery Service</label>
                        <select class="form-select" name="delivery_service" required>
                            <option value="">Select</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-orange px-4">Register</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
