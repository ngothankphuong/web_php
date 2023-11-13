<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php
    require_once("./navbar.php");
    ?>



    <div class="card">
        <div class="card-body">
            <div class="col-md-6 m-5">

                <?php
                require_once("../database/DBConnect.php");
                $itemID = $_GET["itemID"];
                $sql = "SELECT * FROM items WHERE ID='$itemID'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>

                <form action="../controller/updateItemHandle.php" method="post">
                    <input name="itemID" type="hidden" value="<?php echo $itemID ?>">
                    <div class="form-group row">
                        <label for="input1" class="col-sm-2 col-form-label">Item name</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $row["itemName"] ?>" name="itemName" type="text" class="form-control" id="input1" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input2" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input value="" name="itemImg" type="file" class="form-control" id="input2" placeholder="Image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input3" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $row["itemPrice"] ?>" name="itemPrice" type="text" class="form-control" id="input3" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input4" class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $row["itemDetail"] ?>" name="itemDetail" type="text" class="form-control" id="input4" placeholder="Detail">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                            <div class="col-sm-10">
                                <?php if($row["itemStatus"]=="active") {?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="active" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="non">
                                    <label class="form-check-label" for="gridRadios2">
                                        nonActive
                                    </label>
                                </div>
                                <?php } else {?>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="active" >
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="non" checked>
                                    <label class="form-check-label" for="gridRadios2">
                                        nonActive
                                    </label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
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