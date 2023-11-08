<?php
  // Create variable needed for the connection to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app"; 

  // Create connection to the Database and createing the $conn variable 
$conn = new mysqli($servername, $username, $password, $dbname);
  // Check the connection and get the error if it fails
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 