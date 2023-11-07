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
    </style>
</head>
<body>
    <div class="d-flex flex-row bd-highlight mb-3 justify-content-center text-center">
        <div class="p-2 bd-highlight d-flex flex-column">
            <h3 class="">
                <u>Lägg till produkt</u>
            </h3>
            <div class="container">
                <form action="" method="POST" class="d-flex flex-column mb-3">
                    <input type="text" placeholder="Name" class="form-control" name="name">
                    <input type="text" placeholder="Description" class="form-control" name="desc">
                    <input type="number" placeholder="Price" class="form-control" name="price">
                    <input type="file" class="form-control" name="img-link">
                    <button class="btn btn-danger" name="add">
                        Skapa produkten
                    </button>
                </form>
                <?php 
                    $name = $_POST['name'];
                    $desc = $_POST['desc'];
                    $price = $_POST['price'];
                    $img = $_POST['img-link'];
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
            <form action="">
                <button class="btn btn-danger">
                    Se alla produkter
                </button>
            </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>
                <u>Ändra pris/bild på produkt</u>
            </h3>
            <div class="container">
                <form action="" class="d-flex flex-column mb-3">
                    <input type="text" placeholder="Skriv id för produkt" class="form-control">
                    <input type="text" placeholder="Price" class="form-control">
                    <input type="text" placeholder="Image Link" class="form-control">
                    <button class="btn btn-danger">
                        Ändra informationen
                    </button>
                </form>
            </div>
        </div>
        <div class="p-2 bd-highlight">
            <h3>
                <u>Ta bort produkt</u>
            </h3>
            <div class="container">
                <form action="" class="d-flex flex-column mb-3">
                    <input type="text" placeholder="Skriv id för produkt" class="form-control">
                    <button class="btn btn-danger">
                        Ta bort produkten
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
