<?php
$act = 'register';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'register_action':
        $tenDangNhap = '';
        $email = '';
        $password = '';
        $hoVaTen = '';
        $sdt = '';
        $diaChi = '';
        if (isset($_POST['submit'])) {
            $tenDangNhap = $_POST['tenDangNhap'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hoVaTen = $_POST['hoVaTen'];
            $sdt = $_POST['sdt'];
            $diaChi = $_POST['diaChi'];

            // Mã Hóa
            $saltF = 'buithanhliem';
            $salfL = 'buithanhliem';
            $newPass = md5($saltF . $password . $salfL);

            // 
            $kh = new User();
            $isFlag = false;
            $kiemTraTrungDangKi = $kh->kiemTraTrungDangKi($tenDangNhap, $email);

            if(!$kiemTraTrungDangKi) {
                $isFlag = $kh->nhapKhachHang($tenDangNhap, $hoVaTen, $newPass, $email, $diaChi, $sdt);
            }
            
            if (!$isFlag) {
                echo '<script>
                        alert("Đăng Kí Không Thành Công.");
                    </script>';
                include_once "./view/register.php";
            } else {
                echo '<script>
                        alert("Đăng Kí Thành Công.");
                    </script>';
                include_once "./view/home.php";
            }
        }
        break;
    default:
        include_once "./view/register.php";
}
