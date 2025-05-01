<?php
session_start(); // Start session

// Connect to the database
$conn = new mysqli("localhost", "root", "", "cravory");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect POST data
$email = $_POST['email'];
$password = $_POST['password'];

// Prevent SQL injection using prepared statement
$stmt = $conn->prepare("SELECT * FROM signup WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // ✅ Verify password (hashed or plain-text)
    if (password_verify($password, $row['password']) || $password === $row['password']) {
        // Save user info in session
        $_SESSION['user_id'] = $row['id']; // assuming there's an 'id' column
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['profile_image'] = $row['profile_image']; // Add this to store image filename


        // Redirect to profile
        echo "<script>
            alert('Login Successful!');
            window.location.href = 'index.php';
        </script>";
        exit();
    } else {
        echo "<script>alert('Incorrect password!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('No user found with this email!'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
