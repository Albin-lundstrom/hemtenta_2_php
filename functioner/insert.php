<?php
$wontUppload = 1;
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed." ."<br>";
  $wontUppload = 0;
}
if($_FILES["img"]["size"] > 500000) {
    echo "Sorry, your file is too large." ."<br>";
    $wontUppload = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
}else{
    move_uploaded_file($_FILES['img']['tmp_name'], "img/". $_FILES['img']['name']);
    include 'functioner/config.php';

    $sql = "INSERT INTO Products (`name`,`description`,price,`image`)
    VALUES ('$name', '$desc', '$price', '$img')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully" . "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?> 