<?php

require_once("../database/DBConnect.php");

$itemID = $_POST["itemID"];
$itemName = $_POST["itemName"];
$itemImg = $_POST["itemImg"];
$itemPrice = $_POST["itemPrice"];
$itemDetail = $_POST["itemDetail"];
$itemStatus = $_POST["gridRadios"];

echo $itemID."".$itemName."".$itemImg."".$itemPrice."".$itemDetail."".$itemStatus;

if(empty($itemImg)) {
    $sql = "UPDATE items SET itemName='$itemName',itemPrice='$itemPrice',itemDetail='$itemDetail',itemStatus='$itemStatus' WHERE ID='$itemID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("location: ../admin/allItem.php");
} else {
    $sql = "UPDATE items SET itemName='$itemName',itemImg='$itemImg',itemPrice='$itemPrice',itemDetail='$itemDetail',itemStatus='$itemStatus' WHERE ID='$itemID'";
    $stmt = $conn->prepare($sql);
    
}

?>