<?php
$act = 'login';

if (isset($_SESSION['tenDangNhap'])) {
    $act = 'infor';
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'login_action':
        $tenDangNhap = '';
        $password = '';
        if (isset($_POST['submit'])) {
            $tenDangNhap = $_POST['tenDangNhap'];
            $password = $_POST['password'];

            // Mã Hóa
            $saltF = 'buithanhliem';
            $salfL = 'buithanhliem';
            $newPass = md5($saltF . $password . $salfL);

            // 
            $kh = new User();
            $khDangNhap = $kh->kiemTraDangNhap($tenDangNhap, $newPass);
            if (!$khDangNhap) {
                echo '<script>
                        alert("Đăng Nhập Không Thành Công.");
                    </script>';
                include_once "./view/login.php";
            } else {
                $_SESSION['tenDangNhap'] = $khDangNhap['tenDangNhap'];
                echo '<script>
                        alert("Đăng Nhập Thành Công.");
                    </script>';
                include_once "./view/home.php";
            }
        }
        break;
    case 'infor':
        include_once "./view/inforUser.php";
        break;
    case 'logout':
        unset($_SESSION['tenDangNhap']);
        include_once "./view/login.php";
        break;
    default:
        include_once "./view/login.php";
}
