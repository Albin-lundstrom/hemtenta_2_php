<?php
    // include the config.php file to get connected to the Database
include 'functioner/config.php';


$sql = "DELETE FROM Products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>