<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hemtenta_2</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" defer></script>
    <!-- <srcipt src="./js/app.js" defer></sricpt> -->
    <style>
        input{
            margin: 1%;
        }
        table{
            margin:  1%;
        }
        img{
            min-height: 20vh;
            height: 100%;
            width: auto;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-row bd-highlight mb-3 justify-content-center text-center container">
        <div class="p-2 bd-highlight d-flex flex-column container">
            <h3 class="">
                <u>Lägg till produkt</u>
            </h3>
            <div class="container">
                <form action="" method="POST" class="d-flex flex-column mb-3" enctype="multipart/form-data">
                    <input type="text" placeholder="Name" class="form-control" name="name">
                    <input type="text" placeholder="Description" class="form-control" name="desc">
                    <input type="number" placeholder="Price" class="form-control" name="price">
                    <input type="file" class="form-control" name="img">
                    <button class="btn btn-danger" name="add">
                        Skapa produkten
                    </button>
                </form>
                <?php 
                    $name = $_POST['name'];
                    $desc = $_POST['desc'];
                    $price = $_POST['price'];
                    $img = $_FILES['img']['name'];
                    if ( isset($_POST['add'])){
                        include 'functioner/insert.php';
                    }
                ?>
            </div>
        </div>
        <div class="p-2 bd-highlight">
            <h3>
                <u>Se alla produkter</u>
            </h3>
            <?php
                include 'functioner/view.php';
            ?>
        <form action="" method="POST">
            <button class="btn btn-danger">
                Uppdate List
            </button>
        </form>
        </div>
        <div class="p-2 bd-highlight container">
            <h3>
                <u>Ändra pris/bild på produkt</u>
            </h3>
            <div class="container">
                <form action="" class="d-flex flex-column mb-3" method="POST">
                    <input type="number" placeholder="Skriv id för produkt" class="form-control" name="upp">
                    <input type="number" placeholder="Price" class="form-control" name="new-price">
                    <input type="file" placeholder="Image Link" class="form-control" name="new-image">
                    <button class="btn btn-danger" name="upp-num">
                        Ändra informationen
                    </button>
                </form>
                <?php
                    $id = $_POST['upp'];
                    $newPrice = $_POST['new-price'];
                    $newImage = $_POST['new-image'];
                    if ( isset($_POST['upp-num'])){
                        include 'functioner/uppdate.php';
                    } 
                ?>
            </div>
        </div>
        <div class="p-2 bd-highlight container">
            <h3>
                <u>Ta bort produkt</u>
            </h3>
            <div class="container">
                <form action="" class="d-flex flex-column mb-3" method="POST">
                    <input type="number" placeholder="Skriv id för produkt" class="form-control" name="id">
                    <button class="btn btn-danger" name="id-num">
                        Ta bort produkten
                    </button>
                </form>
                <?php
                    $id = $_POST['id'];
                    if ( isset($_POST['id-num'])){
                        include 'functioner/delete.php';
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>
