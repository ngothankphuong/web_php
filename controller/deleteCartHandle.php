<?php 

require_once("../database/DBConnect.php");

$cartID = $_GET["cartid"];
$userID = $_GET["userid"];

//echo $cartID."---".$userID;

session_start();
$sql = "DELETE FROM carts WHERE cartID='$cartID' AND userID='$userID'";
if($conn->query($sql)==true){
    echo "delete thanh cong";
    $_SESSION["delSucc"] = "Delete Sucess";
    header("location: ../cart.php");
} else {
    echo "That bai";
}

?>



<!-- XOA GIO HANG -->