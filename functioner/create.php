<?php

  // Check for the image
if(isset($_FILES['img'])){
    // Uppload the image to the img folder
  move_uploaded_file($_FILES['img']['tmp_name'], "img/". $_FILES['img']['name']);
    // include the config.php file to get connected to the Database
  include 'functioner/config.php';

    // Create the sql variable, giving the values to the right colums in the products table
      // Variables/values form the index page
  $sql = "INSERT INTO Products (`name`,`description`,price,`image`)
  VALUES ('$name', '$desc', '$price', '$img')";

    // Checking and echo out if the query worked
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
  } else {
      //Else give the error
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}else{
    //If the image can't be find echo that out
    echo "Can't find a image";
}


?> 