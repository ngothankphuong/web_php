<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: All Item</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php
    require_once("./navbar.php");

    if (empty($_SESSION["userAdmin"])) {
        header("location: ../login.php");
    }
    ?>

    <h1>All Item</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Detail</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($_SESSION["delItem"])) {
                echo "<h4>Delete Success</h4>";
            }
            ?>
            <?php
            require_once("../database/DBConnect.php");
            $sql = "SELECT * FROM items";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>
                    <th scope="row">
                        <?php echo $row["ID"] ?>
                    </th>

                    <td>
                        <?php echo $row["itemName"] ?>
                    </td>
                    <td><img style="height: 100px; width: 90px;" src="../img/<?php echo $row["itemImg"] ?>" alt=""></td>
                    <td>
                        <?php echo $row["itemPrice"] ?>
                    </td>
                    <td>
                        <?php echo $row["itemDetail"] ?>
                    </td>
                    <td>
                        <?php echo $row["itemStatus"] ?>
                    </td>
                    <td>
                        <a href="./updateItem.php?itemID=<?php echo $row["ID"] ?>" class="btn btn-success">Update</a>
                        <form action="../controller/deleteItem.php" method="POST">
                            <input name="itemID" type="hidden" value="<?php echo $row["ID"] ?>" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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