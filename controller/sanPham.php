<?php
$act = 'sanPham';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'chiTietSanPham':
        include_once "./view/chiTietSanPham.php";
        break;
    case 'chiTietCart':
        include_once "./view/chiTietCart.php";
        break;
    default:
        include_once "./view/sanPham.php";
}
