<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php
    //include navbar
    require_once("./navbar.php");
    ?>
    <?php
    //thông báo sai mật khẩu
    if (!empty($_SESSION["errorPass"])) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Some thing wrong password</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    unset($_SESSION["errorPass"]);
    ?>

    <?php
    //thông báo tài khoản không tồn tại
    if (!empty($_SESSION["notRegister"])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Please register !</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    unset($_SESSION["notRegister"]);
    ?>



    <div class="wrapper">
        <form action="./controller/loginHandle.php" method="post" class="form-signin">
            <h2 class="form-signin-heading text-center">Please login</h2>
            <input type="email" class="form-control m-3" name="email" placeholder="Email Address" required="required"
                autofocus="" />
            <input type="password" class="form-control m-3" name="password" placeholder="Password"
                required="required" />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
</body>

</html>