<?php

require_once("../database/DBConnect.php");

$quantity = $_GET["value"];
$cartID = (int) $_GET["cartID"];
$userID = (int) $_GET["userID"];
if ($quantity > 1) {
    $quantity -= 1;

    $sql = "UPDATE carts SET Quantity='$quantity' WHERE cartID='$cartID' AND userID='$userID' ";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
} else if ($quantity == 1) {
    $sql = "DELETE FROM carts WHERE cartID='$cartID' AND userID='$userID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

header("location: ../cart.php");
?>