<?php
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "", "cravory");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statement
    $stmt = $conn->prepare("SELECT * FROM restaurant_reg WHERE restaurant_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Check password (plain or hashed)
        if (password_verify($password, $row['password']) || $password === $row['password']) {
            $_SESSION['restaurant_id'] = $row['id'];
            $_SESSION['restaurant_name'] = $row['restaurant_name'];
            $_SESSION['restaurant_email'] = $row['restaurant_email'];

            echo "<script>
                alert('Login successful!');
                window.location.href = '../cravoryadmin/dashboard.html';
            </script>";
            exit;
        } else {
            echo "<script>alert('Invalid password!'); window.history.back();</script>";
            exit;
        }
    } else {
        echo "<script>alert('Invalid email or password!'); window.history.back();</script>";
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Cravory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <style>
        body {
            background-color: #2f353c;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-box {
            background-color: #2c2c2c;
            margin-top: 60px;
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
    <div class="container-xxl position-relative p-0">
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
                    <a href="../cravoryadmin/res_reg.html" class="nav-item nav-link">Register</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Login Form -->
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="login-box" style="max-width: 400px">
            <p class="text-center mb-4" style="font-size: 40px; font-weight: 500;">
                <i class="fa fa-utensils me-2 text-warning"></i>Admin Login
            </p>
            <form method="POST" action="">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-orange">Login</button>
                </div>
                <p class="text-center mb-0 mt-2">
                    Don't have an account? <a href="../cravoryadmin/res_reg.php">Register</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>
