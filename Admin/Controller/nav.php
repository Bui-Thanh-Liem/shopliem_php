<?php
$act = 'nav';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
$nav = new Nav();
switch ($act) {
    case 'nav':
        include_once "./view/editNav.php";
        break;
    case 'them':
        $key = '';
        $ten = '';
        if ($_POST['key_nav'] == '' || $_POST['name_nav'] == '') {
            echo '<script>alert("Các trường không được rỗng!");</script>';
            include_once "./view/editNav.php";
            break;
        }
        if (isset($_POST['key_nav']) && isset($_POST['name_nav'])) {
            $key = $_POST['key_nav'];
            $ten = $_POST['name_nav'];
        }
        $nav->themNav($ten, $key);
        include_once "./view/editNav.php";
        break;
    case 'capNhat':
        include_once "./view/capNhatNav.php";
        break;
    case 'capNhat_action':
        $id = '';
        $ten = '';
        $key = '';
        $check = false;
        if (isset($_POST['id']) && isset($_POST['tenNav']) && isset($_POST['keyNav'])) {
            $id = $_POST['id'];
            $ten = $_POST['tenNav'];
            $key = $_POST['keyNav'];
            $check = $nav->capNhatNav($id, $ten, $key);
        }
        if (!$check) {
            echo '<script>alert("Cập nhật nav không thành công !");</script>';
        } else {
            echo '<script>alert("Cập nhật nav thành công");</script>';
        }
        include_once "./view/editNav.php";
        break;
    case 'xoa':
        $id = '';
        $check = false;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $check = $nav->xoaNav($id);
        }
        if ($check) {
            echo '<script>alert("Xóa thành công rồi.");</script>';
        }
        include_once "./view/editNav.php";
        break;
    default:
        # code...
        break;
}
