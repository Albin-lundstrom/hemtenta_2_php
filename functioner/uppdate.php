<?php
include 'functioner/config.php';

$sql = "UPDATE Products SET price='$newPrice' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error updating price: " . $conn->error;
}

$sql = "UPDATE Products SET `image`='$newImage' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
  } else {
    echo "Error updating image: " . $conn->error;
  }

$conn->close();
?>