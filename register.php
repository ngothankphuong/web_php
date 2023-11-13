<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php
    require_once("./navbar.php");
?>

<?php 
    if(!empty($_SESSION["regis2"])){
        echo "".$_SESSION["regis2"]."";
        unset($_SESSION["regis2"]);

    }
    if(!empty($_SESSION["regis1"])){
        echo "".$_SESSION["regis1"]."";
        unset($_SESSION["regis1"]);;
    }
?>

    <div class="wrapper">
        <form action="./controller/registerHandle.php" method="post" class="form-signin">
            <h2 class="form-signin-heading text-center">Register</h2>
            <input type="text" class="form-control m-3" name="username" placeholder="Full Name" required="required"
                autofocus="" />
            <input type="email" class="form-control m-3" name="useremail" placeholder="Email Address" required="required"
                autofocus="" />
            <input type="password" class="form-control m-3" name="userpassword" placeholder="Password" required="required" />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
</body>

</html>