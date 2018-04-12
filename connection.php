<?php
$servername = "localhost";
$username = "pftkgwykbk";
$password = "PTmfa3paTg";
$dbname = "pftkgwykbk";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn,"utf8");
?>

