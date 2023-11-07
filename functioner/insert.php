<?php
include 'functioner/config.php';

$sql = "INSERT INTO Products (`name`,`description`,price,`image`)
VALUES ('$name', '$desc', '$price', '$img')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully" . "<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if(isset($_FILES['img'])){
    move_uploaded_file($_FILES['img']['tmp_name'], "img/". $_FILES['img']['name']);
}
else{
    echo "image not found!";
}
     
?> 