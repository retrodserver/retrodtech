<?php

$sitePath = 'https://retrodtech.com/';
$servername = "localhost";
$username = "vwqmwweafd";
$password = "Y2AQxDxzSP";
$dbname="vwqmwweafd";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>