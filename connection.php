<?php
$servername = "https://206.189.35.125:8082/?username=pftkgwykbk&db=pftkgwykbk";
$username = "pftkgwykbk";
$password = "PTmfa3paTg";
$dbname = "pftkgwykbk";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
