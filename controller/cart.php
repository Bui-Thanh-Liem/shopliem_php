<?php
$act = '';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
$cart = new Cart();
switch ($act) {
    case 'cart':
        include_once "./view/cart.php";
        break;
    case 'chiTietSanPham_action':
        $id = '';
        $size = '';
        $soLuong = '';
        if (isset($_POST['idSanPham'])) {
            $id = $_POST['idSanPham'];
            $size = $_POST['size'];
            $soLuong = $_POST['soLuong'];
        }
        $cart->themVaoGioHang($id, $size, $soLuong);
        include_once "./view/cart.php";
        break;
    case 'addOne':
        $cart->themVaoGioHang($_GET['id'], 's', 1);
        include_once "./view/cart.php";
        break;
    case 'update':
        if (isset($_POST['index'])) {
            $cart->capNhatGioHang($_POST['index'], $_POST['soLuong']);
        }
        include_once "./view/cart.php";
        break;
    case 'delete':
        if (isset($_GET['index'])) {
            $cart->xoaMotGioHang($_GET['index']);
        }
        include_once "./view/cart.php";
        break;
    default:
        # code...
        break;
}
