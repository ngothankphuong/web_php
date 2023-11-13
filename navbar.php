<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img style="height: 80px;" src="./img/Google-Logo.jpg" alt=""></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link btn btn-success ml-2" href="./index.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn btn-success ml-2" href="./index.php">Contact <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn btn-success ml-2" href="./index.php">About <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 m-3" type="submit">Search</button>
            </form>


            <?php
            session_start();
            if (!empty($_SESSION["user"])) {
                ?>
                <a href="./cart.php"><button class="m-2 btn btn-outline-danger my-2 my-sm-0" type="submit"><i
                            class="fa-solid fa-cart-shopping"></i> Cart</button></a>


                <!-- hien thi ten nguoi dung tren navbar -->
                <a href=""><button class="m-2 btn btn-outline-primary my-2 my-sm-0" type="submit">
                        <?php echo $_SESSION['user'][0]; ?>
                    </button></a>

                <!-- hien thi ID nguoi dung tren navbar -->
                <input class="btn btn-danger" type="hidden" value="<?php echo $_SESSION['user'][1] ?>" />

                <a href="./controller/logoutHandle.php"><button class="m-2 btn btn-outline-success my-2 my-sm-0"
                        type="submit">Logout</button></a>
            <?php } else if (empty($_SESSION["user"])) { ?>

                    <a href="./login.php"><button class="m-2 btn btn-outline-success my-2 my-sm-0"
                            type="submit">Login</button></a>
                    <a href="./register.php"><button class="m-2 btn btn-outline-success my-2 my-sm-0"
                            type="submit">Register</button></a>

            <?php } ?>

        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>