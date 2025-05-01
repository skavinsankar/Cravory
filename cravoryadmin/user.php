<?php
// Database connection
$servername = "localhost"; // Update with your database host
$username = "root"; // Update with your database username
$password = ""; // Update with your database password
$dbname = "cravory"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'signup' table
$sql = "SELECT first_name, email, phone_number, num_orders FROM signup";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            width: 220px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 1rem;
        }

        .sidebar .nav-link {
            color: white;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #FEA116;
            color: white;
        }

        /* Optional: Ensures the table content does not get overlapped */
        .container {
            margin-left: 220px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar text-white">
        <div class="px-3">
            <h4 class="text-warning">🍽 Cravory</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.html">📊 Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../cravoryadmin/Menu_management.html">📋 Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../cravoryadmin/user.php">🧑‍💼 Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">🚪 Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container mt-1">
            <h2 class="mb-4">User Dashboard</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Number of Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . $row["first_name"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["phone_number"] . "</td>
                                        <td>" . $row["num_orders"] . "</td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No users found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

<?php
// Close the connection
$conn->close();
?>
