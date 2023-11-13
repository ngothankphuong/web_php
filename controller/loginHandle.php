<?php

require_once("../database/DBConnect.php");

$Email = $_POST["email"];
$Password = $_POST["password"];

//$hash = password_hash($Password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE userEmail = '$Email'";
session_start();
$result = $conn->query($sql);

if ($Email === "admin@gmail.com" && $Password === "admin") {
    //lưu tài khoản admin lên session
    $_SESSION["userAdmin"] = "ADMIN";
    header("location: ../admin/index.php");
} else if ($result->num_rows > 0) {
    //foreach ($result as $row) {
    while( $row = $result->fetch_assoc() ) {
        //password đã hash từ database
        $hashedPass = $row['userPassword'];
        $name = $row['userName'];
        $userID = $row['userID'];
        $verify = password_verify($Password, $hashedPass);
        if ($verify == 1) {
            
            //luu mang chua ten nguoi dung va id len session
            $_SESSION["user"] = array("$name","$userID");
            header("location: ../index.php");
        } else {
            $_SESSION["errorPass"] = "errorPass";
            header("location: ../login.php");
        }
    }
} else if($result->num_rows <= 0){
    $_SESSION["notRegister"] = "notRegister";
    header("location: ../login.php");
}


?>