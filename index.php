<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valorant Shop</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <?php
  require_once("./taglib.php");
  require_once("./navbar.php");
  ?>

  <!-- thong bao add cart thanh cong -->
  <?php
    if(!empty($_SESSION["addSucc"])) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Add cart successfully.</strong>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";

      unset($_SESSION["addSucc"]);
    }
  ?>

  <h1>Trang Chủ</h1>
  <div class="row m-1">

    <?php
    require_once("./database/DBConnect.php");
    $sql = "SELECT * FROM items WHERE itemStatus='active'";
    $result = mysqli_query($conn, $sql);
    $i=0;
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

      <div class="col-sm-3">
        <div class="card m-3">
          <img style="min-height: 250px; max-height: 250px;" class="card-img-top"
            src="./img/<?php echo $row["itemImg"] ?>" alt="Card image cap">
          <div class="card-body">
              <input type="hidden" name="idpro" value="<?php echo $row["ID"] ?>" />
              <h5 class="card-title">Name:
                <?php echo $row["itemName"] ?>
              </h5>
              <p class="card-text">Price:
                <?php echo $row["itemPrice"] ?>
              </p>
              <p class="card-text">Detail:
                <?php echo $row["itemDetail"] ?>
              </p>

              <!-- lay ra ID user tu session -->
              <?php if (!empty($_SESSION["user"])) { ?>
                <input  type="hidden" name="iduser" value="<?php echo $_SESSION["user"][1] ?>" />

                <a href="./controller/addCartHandle.php?userID=<?php echo $_SESSION["user"][1] ?>&itemID=<?php echo $row["ID"] ?>" class="btn btn-primary">Add Cart</a>

              <?php } else { ?>
                <a href="./login.php" class="btn btn-primary">Add Cart</a>
                <?php
              }
              ?>

          </div>
        </div>
      </div>
      <?php
    }
    ?>

</body>

</html>