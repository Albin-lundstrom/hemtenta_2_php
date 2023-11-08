<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hemtenta_2</title>
        <!-- Bootstrap with that css doesn't uppdate -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js" defer></script>
        <!-- Inline Style with that extrenal CSS doen't uppdate -->
    <style>
        input{
            margin: 1%;
        }
        table{
            margin:  1%;
        }
        img{
            min-height: 8vh;
            max-height: 40vh;
            width: auto;
        }
        #uppdate-btn{
            width: 100%;
        }
        /* #hide{ */
            /* display: none; */
        /* } */
    </style>
</head>
<body>
    <!-- Main Body Div for flex with bootstrap classes-->
    <div class="d-flex flex-row bd-highlight mb-3 justify-content-center text-center container">
        <!-- Add Products div -->
        <div class="p-2 bd-highlight d-flex flex-column container">
            <h3 class="">
                <u>Add a product</u>
            </h3>
            <div class="container">
                    <!-- Form for createing a product -->
                        <!-- Enctype for image files -->
                <form action="" method="POST" class="d-flex flex-column mb-3" enctype="multipart/form-data">
                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                    <input type="text" placeholder="Description" class="form-control" name="desc" required>
                    <input type="number" placeholder="Price" class="form-control" name="price" required>
                    <input type="file" class="form-control" name="img" accept="image/*" required>
                    <button class="btn btn-danger" name="add">
                        Create Product
                    </button>
                </form>
                    <!-- php code to get variable of the form and include the create file-->
                <?php 
                    $name = $_POST['name'];
                    $desc = $_POST['desc'];
                    $price = $_POST['price'];
                    $img = $_FILES['img']['name'];
                        // Check for a post from the button and then include the file
                    if( isset($_POST['add'])){
                        if($name == "" || $desc == "" || $price == "" || $img == ""){
                            echo "Form can't be empty";
                        }else{
                            include 'functioner/create.php';
                        }
                    }
                ?>
            </div>
        </div>
            <!-- Show product div -->
        <div class="p-2 bd-highlight" id="view-div">
            <h3>
                <u>See all products</u>
            </h3>
            <form action="" method="POST">
                <button class="btn btn-danger" id="uppdate-btn">
                    Uppdate List
                </button>
            </form>
                <!-- Php code to include the view file -->
            <?php
                include 'functioner/view.php';
            ?>
        </div>
            <!-- Uppdate price and image off a product -->
        <div class="p-2 bd-highlight container">
            <h3>
                <u>Uppdate the price and image</u>
            </h3>
            <div class="container">
                <!-- Form for uppdateing a product -->
                    <!-- Enctype for image files -->
                <form action="" class="d-flex flex-column mb-3" method="POST" enctype="multipart/form-data">
                    <input type="number" placeholder="Write the id of the product" class="form-control" name="upp" required>
                    <input type="number" placeholder="Price" class="form-control" name="new-price">
                    <input type="file" placeholder="Image Link" class="form-control" name="new-image">
                    <input type="text" readonly value="Remember to write ID number." class="form-control text-center"></button>
                    <button class="btn btn-danger" name="upp-num">
                        Uppdate information
                    </button>
                </form>
                    <!-- php code to get variable of the form and include the uppdate file-->
                <?php
                    $id = $_POST['upp'];
                    $newPrice = $_POST['new-price'];
                    $newImage = $_FILES['new-image']['name'];
                        // Check for a post from the button and then include the file
                    if ( isset($_POST['upp-num'])){
                        include 'functioner/uppdate.php';
                    } 
                ?>
            </div>
        </div>
    </div>
</body>
</html>
