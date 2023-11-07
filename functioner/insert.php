<?php
include 'functioner/config.php';

$sql = "INSERT INTO Products (`name`,`description`,price,`image`)
VALUES ('$name', '$desc', '$price', '$img')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 