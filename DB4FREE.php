<?php
$servername = "https://www.db4free.net:3306";
$username = "omegawea";
$password = "74108520";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>