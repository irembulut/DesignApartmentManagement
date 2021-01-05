<?php
$servername = "localhost";
$username = "root";
$database="apartment";
$password = "";

// Create connection
$link = new mysqli($servername, $username, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
echo "<p style='color:white'> <p>";
?>







