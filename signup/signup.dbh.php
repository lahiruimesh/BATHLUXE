
<?php
// Include the database connection file
include '../dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $firstName = $conn->real_escape_string($_POST['firstName']);//Using $conn->real_escape_string is a crucial step in securing your application against SQL injection attacks. It ensures that any special characters in the user input are properly escaped, thereby preventing them from being interpreted as part of the SQL syntax.
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $telephoneNo = $conn->real_escape_string($_POST['telephoneNo']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $rePassword = $conn->real_escape_string($_POST['re-password']);

    // Validate data
    if ($password !== $rePassword) {
        die("Passwords do not match.");
    }

    if (strlen($telephoneNo) !== 10 || !ctype_digit($telephoneNo)) {
        die("Telephone number must be 10 digits.");
    }


    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO user (firstName, lastName, email, address, telephoneNo, username, password) 
            VALUES ('$firstName','$lastName', '$email', '$address', '$telephoneNo','$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo"success";
        header("Location: ../login/login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
