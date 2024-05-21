

<?php
// Include the database connection file
include '../dbconnection.php';

// Start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to find the user by email
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    // Check if exactly one user is found with the provided email
    if ($result->num_rows == 1) {
        // Fetch user data
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Set session variables
            $_SESSION['username'] = $row['username'];
            $_SESSION['userId'] = $row['userId'];

            // Redirect to a protected page
            header("Location: ../home/home.php");
            exit; // Terminate script execution after the redirect
        } else {
            echo "Invalid password.";
            header("Location: login.php");
        }
    } else {
        echo "No user found with this email.";
        header("Location: login.php");
    }

    // Close the database connection
    $conn->close();
}
?>
