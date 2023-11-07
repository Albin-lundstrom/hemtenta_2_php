<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM Products");
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<table border="1">
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image Link</th>
  </tr>
  <?php foreach($data as $row): ?>
  <tr>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['description']) ?></td>
    <td><?= htmlspecialchars($row['price']) ?></td>
    <td><?= htmlspecialchars($row['image']) ?></td>
  </tr>
  <?php endforeach ?>
</table>

</body>
</html>
