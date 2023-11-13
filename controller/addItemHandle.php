<?php 

require_once("../database/DBConnect.php");

    $productName = $_POST["itemName"];
    $productImg = $_POST["itemImg"];
    $productPrice = $_POST["itemPrice"];
    $productDetail = $_POST["itemDetail"];
    $productStatus = $_POST["gridRadios"];


    $sql = "INSERT INTO items (itemName, itemImg, itemPrice, itemDetail, itemStatus) VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdss", $productName,$productImg,$productPrice, $productDetail,$productStatus);
    if($stmt->execute()){

        header("location: ../admin/addItem.php");
    }

?>