<?php
    // include the config.php file to get connected to the Database
include 'functioner/config.php';

    // if statment to check if the price should be changed
if($newPrice !== ""){
      // Makes the sql varible for the new price, gives the  value/varaible for the index page
  $sql = "UPDATE Products SET price='$newPrice' WHERE id=$id";
      // Check if the query worked
          // If it doesn't Echo the error
  if ($conn->query($sql) !== TRUE) {
      echo "Error updating price: " . $conn->error;
  }
}

    // if statment to check if the image should be changed
if($newImage !== ""){
    // Check for a image
    if(isset($_FILES['new-image'])){
            // Uppload the image to the img folder
        move_uploaded_file($_FILES['new-image']['tmp_name'], "img/". $_FILES['new-image']['name']);
            // Createing the sql variable for the new image
        $sql = "UPDATE Products SET `image`='$newImage' WHERE id=$id";
            // Checking if the query worked or not
        if ($conn->query($sql) !== TRUE) {
            echo "Error updating price: " . $conn->error;
        }
    }
}



$conn->close();
?>