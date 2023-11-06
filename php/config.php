<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Config BD</h1>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HEMTENTA_DB"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo("Conection Successful");
}

?> 
</body>
</html>
