<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php
    require_once("./navbar.php");
    ?>
    <?php
    if(empty($_SESSION["userAdmin"])==true) {
        header("location: ../login.php");
    }
    ?>

    <div class="row text-center">
        <div class="col-sm-3 ml-5">
            <div class="card">
                <div class="card-body">
                    <p><i class="fa-solid fa-plus fa-3x"></i></p>
                    <a href="./addItem.php" class="btn btn-primary">Add Item</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <p><i class="fa-solid fa-border-all fa-3x"></i></p>
                    <a href="./allItem.php" class="btn btn-primary">All Item</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <p><i class="fa-solid fa-box-open fa-3x"></i></p>
                    <a href="#" class="btn btn-primary">Orders</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>