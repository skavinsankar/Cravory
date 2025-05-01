<?php
// Start session
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "", "cravory");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// File upload
$target_dir = "profile_image/";
$profile_image_name = time() . "_" . basename($_FILES["profile_picture"]["name"]);
$target_file = $target_dir . $profile_image_name;
$image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check password match
if ($password !== $confirm_password) {
    echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
    exit();
}

// Validate image
$allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($image_type, $allowed_types)) {
    echo "<script>alert('Only JPG, JPEG, PNG, or GIF files are allowed.'); window.history.back();</script>";
    exit();
}

// Upload image file
if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
    // Insert user data into database
    $sql = "INSERT INTO signup (first_name, last_name, email, phone_number, password, profile_image)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $password, $profile_image_name);

    if ($stmt->execute()) {
        echo "<script>
            alert('Registration Successful!');
            window.location.href = 'login.html';
        </script>";
    } else {
        echo "<script>alert('Database error: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Failed to upload image!'); window.history.back();</script>";
}

$conn->close();
?>
