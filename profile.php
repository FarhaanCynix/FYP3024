<?php
session_start();
include_once 'includes/db.inc.php';

$user_id = $_SESSION['user_id'];

// Fetch user details from the database
$sql = "SELECT username, email FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("User not found");
}

$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebars.css">
    <link rel="stylesheet" href="css/profile.css"> <!-- Add this line for profile.css -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Profile</title>
</head>

<body>
    <?php include_once 'sidebar.php'; ?>
    <div class="main-content">
        <div class="profile-container">
            <h1>User Profile</h1>
            <div class="profile-details">
                <div class="profile-item">
                    <span class="profile-label">Username:</span>
                    <span class="profile-value"><?php echo $username; ?></span>
                </div>
                <div class="profile-item">
                    <span class="profile-label">Email:</span>
                    <span class="profile-value"><?php echo $email; ?></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
