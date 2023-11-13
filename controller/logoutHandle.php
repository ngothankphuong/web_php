<?php 
session_start();
unset($_SESSION["user"]);
header("location: ../index.php");
unset($_SESSION["userAdmin"]);
header("location: ../index.php");
?>