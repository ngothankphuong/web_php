<?php
require_once("../database/DBConnect.php");

    //Lấy dữ liệu từ form
    $userName = $_POST["username"];
    $userEmail = $_POST["useremail"];
    $userPassword = $_POST["userpassword"];

    // //kiem tra nguoi dung da ton tai
    $sql = "SELECT userID FROM users WHERE userEmail='" . $userEmail . "'";
    $result = $conn->query($sql);

    session_start();
    if ($result->num_rows > 0) {
        //email da ton tai
        $_SESSION["regis2"] = "Email da duoc su dung";
        header("location: ../register.php");
    } 
    else {
        $hashed_pass = password_hash($userPassword, PASSWORD_DEFAULT);
        $sql="INSERT INTO users (userName, userEmail, userPassword) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $userName, $userEmail, $hashed_pass);
        if ($stmt->execute()) {
            $_SESSION["regis1"] = "Dang ky tai khoan thanh cong";
            header("location: ../register.php");
        } 
    }
?>