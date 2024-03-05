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
        include_once "./View/editSanPham.php";
        break;
    case 'add_sanPham_action':
        // kiểm tra và nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $gia_sanPham = $_POST['gia_sanPham'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];

            // Đem thông tin insert vào database
            $hh = new SanPham();
            $check = $hh->insertHangHoa($tenhh, $maloai, $gia_sanPham, $slx, $ngaylap, $mota);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }
        }
        break;
    case 'update_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case "update_action":
        // nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            // Đem thông tin update vào database
            $hh = new SanPham();
            $kt = $hh->updateHangHoa($mahh, $tenhh, $maloai, $slx, $ngaylap, $mota);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
}
