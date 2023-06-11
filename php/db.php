<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "movie_thing";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
}

?>