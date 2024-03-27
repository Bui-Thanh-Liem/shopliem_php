<?php
session_start();
// unset($_SESSION['admin']);
set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SanPham</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styleGlobal.css">
</head>

<body>
    <?php
    if (isset($_SESSION['admin'])) {
        include "View/header.php";
    }
    ?>

    <div class="px-5">
        <div class="">
            <?php
            $ctrl = "login";
            if (isset($_SESSION['admin'])) {
                $ctrl = "user";
                if (isset($_GET['action']))
                    $ctrl = $_GET['action'];
            }
            include 'Controller/' . $ctrl . '.php';
            ?>
        </div>
    </div>

    <?php
    if (isset($_SESSION['admin'])) {
        include "View/footer.php";
    }
    ?>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>