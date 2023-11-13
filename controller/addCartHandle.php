<?php

    require_once("../database/DBConnect.php");
    //IDproduct & iduser gửi từ form
    $productID = $_GET["itemID"];
    $iduser = $_GET["userID"];
    //  echo $productID."------".$userID;

    $userID = null;
    $userName = null;
    //lay ra user bang ID
    $sql = "SELECT * FROM users WHERE userID='$iduser'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $userID = $row["userID"];
            $userName = $row["userName"];
            echo $userID . "+++" . $userName;
        }
    }

    $itemID = null;
    $itemName = null;
    $itemImg = null;
    $itemPrice = null;

    //lay ra san pham theo ID
    $sql1 = "SELECT * FROM items WHERE ID='$productID'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $itemID = $row["ID"];
            $itemName = $row["itemName"];
            $itemImg = $row["itemImg"];
            $itemPrice = $row["itemPrice"];
            //echo $itemID . "--" . $itemName . "--" . $itemImg . "--" . $itemPrice;
        }
    }

    //them san pham vao gio hang user
    $sql2 = "INSERT INTO carts(cartID,userID, userName, productID, productName, productImg, productPrice, Quantity) VALUE(null,'$userID','$userName','$productID','$itemName','$itemImg','$itemPrice',1)";
    $stmt = $conn->prepare($sql2);
    session_start();
    if ($stmt->execute()) {
        echo "add cart thanh cong";
        $_SESSION["addSucc"]= "Add cart successfully";
        header("location: ../index.php");
    }

?>