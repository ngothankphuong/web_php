<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>



    <!-- Navbar -->
    <?php
    require_once("./navbar.php");
    ?>



    <div class="card text-center">
        <div class="card-body">

            <table class="table table-light">
                <?php
                if (!empty($_SESSION["delSucc"])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Delete Success
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    unset($_SESSION["delSucc"]);
                }
                ?>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require_once("./database/DBConnect.php");

                    if (!empty($_SESSION["user"])) {
                        $totalPrice = 0;
                        $userID = $_SESSION["user"][1];
                        $sql = "SELECT * FROM carts WHERE userID='$userID'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $totalPrice += $row["productPrice"]*$row["Quantity"];
                            ?>

                            <tr>

                                <td>
                                    <?php echo $row["productName"] ?>
                                </td>
                                <td>
                                    <img src="./img/<?php echo $row["productImg"] ?>" alt="" style="width: 50px; height: 60px;">
                                </td>
                                <td>
                                    <!-- Giảm số lượng san pham trong gio hang -->
                                    <a class="btn btn-success" href="./controller/minusQuantityCart.php?userID=<?php echo $row["userID"] ?>&&cartID=<?php echo $row["cartID"] ?>&&value=<?php echo $row["Quantity"] ?>">-</a>

                                    <?php echo $row["Quantity"] ?>
                                    
                                    <!-- Tăng số lượng sp gio hang -->
                                    <a class="btn btn-success" href="./controller/plusQuantityCart.php?userID=<?php echo $row["userID"] ?>&&cartID=<?php echo $row["cartID"] ?>&&value=<?php echo $row["Quantity"] ?>">+</a>

                                </td>
                                <td>
                                    <?php echo $row["productPrice"] ?>
                                </td>
                                <td>
                                    <form action="./controller/deleteCartHandle.php" method="GET">
                                        <input type="hidden" name="cartid" value="<?php echo $row["cartID"] ?>" />
                                        <input type="hidden" name="userid" value="<?php echo $row["userID"] ?>" />
                                        <button type="submit" class="btn btn-danger">Delete</button></button>
                                    </form>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>

                        <tr>
                            <th scope="row">Total Price</th>
                            <th></th>
                            <th>
                                <?php echo " $totalPrice" ?> VND
                            </th>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center m-3">
        <div class="">
            <a href="" class="btn btn-success">Order Now</a>
            <a href="./index.php" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>



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