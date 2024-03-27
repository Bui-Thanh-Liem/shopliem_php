<?php
$user = new User();
$persion = $user->logUser($_SESSION['tenDangNhap']);
?>

<div class="container">
    <?php
    include_once "./view/header.php";
    include_once "./view/nav.php";
    ?>
    <div class="mt-5">
        <p class="fw-bold">Thông Tin Tài Khoản</p>
        <div style="width: 50%; height: 2px" class="bg-dark"></div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-2">
            <p>Họ và Tên: </p>
            <p>Email: </p>
            <p>Số Điện Thoại: </p>
            <p>Địa Chỉ: </p>
            <a class="btn btn-success btn-sm" href="index.php?action=bill&act=bills">Đơn hàng của bạn</a>
        </div>
        <div class="col">
            <p><?php echo $persion['hoVaTen'] ?></p>
            <p><?php echo $persion['email'] ?></p>
            <p><?php echo $persion['sdt'] ?></p>
            <p><?php echo $persion['diaChi'] ?></p>
            <a class="btn btn-danger btn-sm" href="index.php?action=login&act=logout">Đăng Xuất</a>

        </div>
    </div>
</div>