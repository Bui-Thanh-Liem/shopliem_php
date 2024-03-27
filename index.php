<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// unset($_SESSION['cart']);
include "./model/Connect.php";
include "./model/SanPham.php";
include "./model/User.php";
include "./model/Cart.php";
include "./model/Bill.php";
include "./model/Nav.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTL Shop</title>
    <link rel="shortcut icon" href="./assets/imgs/avatar.png" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styleGlobal.css">
</head>

<body>
    <?php
    include_once "./view/topHeader.php";
    ?>

    <?php
    $action = 'home';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    include_once "./controller/" . $action . ".php";
    ?>

    <div class="container-fluid">
        <?php
        include_once "./view/footer.php";
        ?>
    </div>





    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>