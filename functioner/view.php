<?php
include 'functioner/config.php';


$result = mysqli_query($conn,"SELECT * FROM Products");
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<table class="table table-bordered table-striped-columns">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image</th>
  </tr>
  <?php foreach($data as $row): ?>
  <tr>
    
    <td><?= htmlspecialchars($row['id']) ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['description']) ?></td>
    <td><?= htmlspecialchars($row['price']) ?></td>
    <td>
        <div>
            <img src="img/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['image'])?>" class="img-fluid" >
        </div>
    </td>
  </tr>
  <?php endforeach ?>
</table>
