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
            $hinh = $_FILES["hinh"]["name"];
            $maloai = $_POST['maloai'];
            $gia_sanPham = $_POST['gia_sanPham'];
            $giam_gia = $_POST['giam_gia'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];

            // Đem thông tin insert vào database
            $hh = new SanPham();
            $check = $hh->insertSanPham($tenhh, $maloai, $gia_sanPham, $giam_gia, $slx, $ngaylap, $mota, $hinh);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                include_once "./View/sanPham.php";
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }
        }
        break;
    case 'addByFile':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //b1: lấy về, từ Server $_FILE
            $file = $_FILES['file']['tmp_name'];

            // b2: thay thế những ký tự đặc biệt xEF,xBB,xBF
            file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));

            //b3: mở file ra
            $file_open = fopen($file, "r");

            //b4: đọc nội dung của file
            while (($csv = fgetcsv($file_open, 1000, ","))) {
                $tenSanPham = $csv[0];      // ten san pham
                $idLoaiSanPham = $csv[1];   // ma loai
                $giaSanPham = $csv[2];      // gia san pham
                $giamGiaSanPham = $csv[3];  // giam gia san pham
                $soLuotXem = $csv[4];       // luot xem
                $ngayLap = $csv[5];         // Ngay lap
                $moTa = $csv[6];            // Mo ta
                $hinh = $csv[7];            // Hinh

                $sp = new SanPham();
                $sp->insertSanPham($tenSanPham, $idLoaiSanPham, $giaSanPham, $giamGiaSanPham, $soLuotXem, $ngayLap, $moTa, $hinh);
            }
            echo '<script> alert("Nhập sản phẩm thành công")</script>';
            include_once "./View/sanPham.php";
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
            $hinh = $_FILES["hinh"]["name"];
            $maloai = $_POST['maloai'];
            $gia_sanPham = $_POST['gia_sanPham'];
            $giam_gia = $_POST['giam_gia'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $soLuong = $_POST['soLuong'];
            $mota = $_POST['mota'];

            // Đem thông tin update vào database
            $hh = new SanPham();
            $kt = $hh->updateSanPham($mahh, $tenhh, $gia_sanPham, $giam_gia,  $maloai, $slx, $ngaylap, $mota, $hinh, $soLuong);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                include_once "./View/sanPham.php";
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $hh = new SanPham();
            $kq = $hh->delete($_GET['id']);
            echo '<script> alert("Xóa dữ liệu thành công")</script>';
        } else {
            echo '<script> alert("Xóa dữ liệu không thành công")</script>';
        }
        include_once "./View/sanPham.php";

        break;
}
