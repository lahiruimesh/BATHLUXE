<?php

//Database connection
$servername = "localhost";
$username = "BATHLUXE";
$password = "bW12345*";
$dbname = "BATHLUXE";

// Create connection to the database
    $conn = new mysqli ($servername, $username, $password, $dbname);

// check if the connection was successful
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}    

?>