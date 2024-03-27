<?php
$act = 'thanhToan';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'thanhToan':
        if (!isset($_SESSION['tenDangNhap'])) {
            include_once './view/login.php';
            echo "<script>
                    alert('Bạn phải đăng nhập !')
                </script>";
        } else if (count($_SESSION['cart']) == 0) {
            include_once './view/cart.php';
        } else {
            include_once './view/bill.php';
        }
        break;
    case 'bills':
        include_once './view/bills.php';
        break;
    default:
        break;
}
