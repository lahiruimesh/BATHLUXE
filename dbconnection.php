<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bathluxe";

// Create connection to the database
    $conn = new mysqli ($servername, $username, $password, $dbname);

// check if the connection was successful
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}    

?>