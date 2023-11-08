<?php
    // include the config.php file to get connected to the Database
include 'functioner/config.php';

    // sends a query to the Products table thru the connection($conn)
        // Then fetch all the data thru the query as multiple array based on rows
$result = mysqli_query($conn,"SELECT * FROM Products");
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

    <!-- Only html table as this file will be included in the index page -->
<table class="table table-bordered table-striped-columns">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
    </tr>
        <!-- Makes a foreach to make a tr ad td for every index in the array -->
    <?php foreach($data as $row): ?>
    <tr>
            <!-- Uses php in the td to show every data in the index -->
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <td><?= htmlspecialchars($row['price']) ?></td>
        <td>
            <div>
                <!-- Shows the img in the td, Alt text is the image file name to error check -->
                <img src="img/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['image'])?>" class="img-fluid" >
            </div>
        </td>
    </tr>
        <!-- Ends the foreach -->
    <?php endforeach ?>
</table>
