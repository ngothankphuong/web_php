<?php 

require_once("../database/DBConnect.php");

$itemID = $_POST["itemID"];

$sql = "DELETE FROM items WHERE id='$itemID'";

if($conn->query($sql)) {
    $_SESSION["delItem"]="del item success";
    header("location: ../admin/allItem.php");
}

?>