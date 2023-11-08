<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create BD</h1>
<?php
  // Create the Variable
$servername = "localhost";
$username = "root";
$password = "";

  // Create connection
$conn = new mysqli($servername, $username, $password);
  // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


  // Create database
$sql = "CREATE DATABASE IF NOT EXISTS crud_app";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

  // Create BD variable
$dbname = "crud_app"; 
  // Create connection to the Database 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  // Create table
$sql = "CREATE TABLE IF NOT EXISTS Products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(30) NOT NULL,
    `description` VARCHAR(30) NOT NULL,
    price VARCHAR(50),
    `image` VARCHAR(100)
    )";
    if ($conn->query($sql) === TRUE) {
      echo "Table Products created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

$conn->close();

?> 
</body>
</html>
