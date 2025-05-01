<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "cravory");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user data
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT first_name, last_name, email, phone_number FROM signup WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-white">

  <!-- Header -->
    <div class="d-flex align-items-center px-3 py-2 border-bottom">
    <a href="index.html" class="me-3 text-dark fs-4 text-decoration-none">&#8592;</a>
    <a class="mb-0 fw-bold text-decoration-none" href="../Cravory/logout.php">Back Home</a>
  
    <a href="logout.php" class="btn btn-outline-danger rounded-5 ms-auto">Logout</a>
  </div>
  

  <!-- Content -->
  <div class="container py-4">
    <!-- Name -->
    <div class="border rounded-4 p-3 mb-3 d-flex justify-content-between align-items-center">
      <div>
        <small class="text-muted">NAME</small>
        <div class="fw-semibold fs-6"><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></div>
      </div>
    </div>

    <!-- Email -->
    <div class="border rounded-4 p-3 mb-3 d-flex justify-content-between align-items-center">
      <div>
        <small class="text-muted">EMAIL ADDRESS</small>
        <div class="fw-semibold fs-6"><?php echo htmlspecialchars($user['email']); ?></div>
      </div>
    </div>

    <!-- Phone -->
    <div class="border rounded-4 p-3 d-flex justify-content-between align-items-center">
      <div> 
        <small class="text-muted">PHONE NUMBER</small>
        <div class="fw-semibold fs-6"><?php echo htmlspecialchars($user['phone_number']); ?></div>
      </div>
    </div>
  </div>

  
</body>
</html>

