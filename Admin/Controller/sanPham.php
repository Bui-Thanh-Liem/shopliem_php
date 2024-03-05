<?php
$act = "sanPham";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'sanPham':
        include_once "./View/sanPham.php";
        break;
    case 'add_sanPham':
        include_once "./View/addSanPham.php";
        break;
    case 'add_sanPham_action':
        // kiểm tra và nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $gia_sanPham = $_POST['gia_sanPham'];
            $giam_gia = $_POST['giam_gia'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];

            // Đem thông tin insert vào database
            $hh = new SanPham();
            $check = $hh->insertSanPham($tenhh, $maloai, $gia_sanPham, $giam_gia, $slx, $ngaylap, $mota);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                include_once "./View/sanPham.php";
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }
        }
        break;
    case 'update_sanPham':
        include_once "./View/updateSanPham.php";
        break;
    case "update_sanPham_action":
        // nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $gia_sanPham = $_POST['gia_sanPham'];
            $giam_gia = $_POST['giam_gia'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];

            echo $tenhh . ' ' . $maloai . ' ' . $gia_sanPham . ' ' . $giam_gia . ' ' . $slx . ' ' . $ngaylap . ' ' . $mota;

            // Đem thông tin update vào database
            $hh = new SanPham();
            $kt = $hh->updateSanPham($mahh, $tenhh, $gia_sanPham, $giam_gia,  $maloai, $slx, $ngaylap, $mota);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../index.php?action=sanPham"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
}
