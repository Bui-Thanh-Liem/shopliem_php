<?php
$act = '';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'banNhieu':
        include_once "./view/sanPhamBanNhieu.php";
        break;

    default:
        # code...
        break;
}
