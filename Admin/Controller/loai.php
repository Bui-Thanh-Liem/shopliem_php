<?php
$act = 'loai';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
$loai = new Loai();
switch ($act) {
    case 'loai':
        include_once "./view/LoaiSanpham.php";
        break;
    case 'them':
        $ten = '';
        $check = false;
        if (isset($_POST['tenLoai']) && $_POST['tenLoai'] != '') {
            $ten = $_POST['tenLoai'];
            $check = $loai->insertLoai($ten);
        };
        if (!$check) {
            echo '<script>alert("Thêm loại không thành công !");</script>';
        } else {
            echo '<script>alert("Thêm loại thành công");</script>';
        }
        include_once "./view/LoaiSanpham.php";
        break;
    case 'xoa':
        $id = '';
        $check = false;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $check = $loai->xoaLoai($id);
        }
        include_once "./view/LoaiSanpham.php";
        break;
    case 'capNhat':
        include_once "./view/capNhatLoaiSanpham.php";
        break;
    case 'capNhat_action':
        $id = '';
        $ten = '';
        $check = false;
        if (isset($_POST['id']) && isset($_POST['ten'])) {
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $check = $loai->capNhatLoai($id, $ten);
        }
        if (!$check) {
            echo '<script>alert("Cập nhật loại không thành công !");</script>';
        } else {
            echo '<script>alert("Cập nhật loại thành công");</script>';
        }
        include_once "./view/LoaiSanpham.php";
        break;
    default:
        # code...
        break;
}
