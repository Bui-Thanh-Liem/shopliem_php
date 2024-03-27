<div class="container">
    <?php
    include_once "./view/header.php";
    $c = new Cart();
    $user = new User();

    $cart = array();
    $userLoged = '';
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    };

    if (isset($_SESSION['tenDangNhap'])) {
        $userLoged = $_SESSION['tenDangNhap'];
    };

    $persion = $user->logUser($userLoged);
    ?>
    <div class="d-flex align-items-center mb-5">
        <div class="" style="width: 80px; margin-right: 24px;">
            <img class="w-100 border border-2 rounded rounded-circle" src="assets/imgs/akd1.jpg" alt="">
        </div>
        <?php
        if (!$userLoged) {
            echo '<div>
                <p class="">Bạn đã có tài khoản ?</p>
                <a class="btn btn-success btn-sm" href="index.php?action=login&act=login">Đăng Nhập</a>
            </div>';
        } else {
            echo '<div>
            <p class="">
                ' . $persion['hoVaTen'] . '
                <span>(' . $persion['email'] . ')</span>
            </p>
            <a class="btn btn-danger btn-sm" href="index.php?action=login&act=logout">Đăng Xuất</a>
        </div>';
        }
        ?>
    </div>
    <form action="index.php?action=bill" method="post">
        <div class="row">
            <div class="col-lg-7">
                <div class="mb-3">
                    <label for="tenNguoiNhan" class="form-label fw-bold">Tên người nhận</label>
                    <input value="<?php echo isset($persion['hoVaTen']) ? $persion['hoVaTen'] : '...' ?>" id="tenNguoiNhan" class="form-control" type="text" placeholder="...">
                </div>

                <div class="mb-3">
                    <label for="diaChiNguoiNhan" class="form-label fw-bold">Địa chỉ người nhận</label>
                    <input value="<?php echo isset($persion['diaChi']) ? $persion['diaChi'] : '...' ?>" id="diaChiNguoiNhan" class="form-control" type="text" placeholder="...">
                </div>

                <div class="mb-3">
                    <label for="sdtNguoiNhan" class="form-label fw-bold">Số điện thoại người nhận</label>
                    <input value="<?php echo isset($persion['sdt']) ? $persion['sdt'] : '...' ?>" id="sdtNguoiNhan" class="form-control" type="text" placeholder="...">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Phương thức vận chuyển</label>
                    <div class="form-check">
                        <input onchange="handleChangeVanChuyen(event)" value="hoaToc" class="form-check-input" type="radio" name="phuongThucVanChuyen" id="phuongThucVanChuyen1">
                        <label class="form-check-label" for="phuongThucVanChuyen1">
                            Hỏa Tốc
                        </label>
                    </div>
                    <div class="form-check">
                        <input onchange="handleChangeVanChuyen(event)" value="binhThuong" class="form-check-input" type="radio" name="phuongThucVanChuyen" id="phuongThucVanChuyen2" checked>
                        <label class="form-check-label" for="phuongThucVanChuyen2">
                            Bình Thường
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Phương thức thanh toán</label>
                    <div class="form-check">
                        <input value="COD" class="form-check-input" type="radio" name="phuongThucThanhToan" id="phuongThucThanhToan1" checked>
                        <label class="form-check-label" for="phuongThucThanhToan1">
                            Thanh toán khi giao hàng (COD)
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="NH" class="form-check-input" type="radio" name="phuongThucThanhToan" id="phuongThucThanhToan2">
                        <label class="form-check-label" for="phuongThucThanhToan2">
                            Chuyển khoản qua ngân hàng
                        </label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border border-1 p-3 rounded rounded-5" style="max-height: 400px; overflow-y: auto;">
                    <?php
                    foreach ($cart as $index => $item) :
                    ?>
                        <div class="d-flex align-items-center mb-3">
                            <div class="position-relative" style="width: 80px; margin-right: 24px;">
                                <img class="w-100 rounded rounded-5 border border-3" src="assets/imgs/<?php echo $item['hinh']; ?>" alt="">
                                <span class="px-2 position-absolute rounded rounded-circle text-white" style="background-color: #333; top: -10px; right: -12px">
                                    <?php echo $item['soLuong']; ?>
                                </span>
                            </div>

                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-1"><?php echo $item['ten']; ?></p>
                                    <p class="m-0">
                                        <span class="text-secondary"><?php echo $item['size']; ?></span>
                                        <span class="text-secondary">/</span>
                                        <span class="text-secondary"><?php echo $item['mau']; ?></span>
                                    </p>
                                </div>
                                <div class="">
                                    <?php echo number_format($item['tongGiaMotSp'], 0, ".", ","); ?>
                                    <sup class="fw-bold">đ</sup>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-4 d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Tạm tính: </span>
                    <span class="fs-4">
                        <?php echo number_format($c->tongGiaCart(), 0, ".", ","); ?>
                        <input hidden type="number" class="tamTinh" value="<?php echo $c->tongGiaCart(); ?>">
                        <sup class="fw-bold">đ</sup>
                    </span>
                </div>
                <div class="mt-1 d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Phí vận chuyển: </span>
                    <span class="giaVanChuyen">Miễn phí</span>
                </div>
                <div style="height: 2px; background-color: #999;" class="my-2"></div>
                <div class="mt-1 d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Tổng cộng: </span>
                    <span class="fs-4">
                        <span class="tongTien">
                            <?php echo number_format($c->tongGiaCart(), 0, ".", ","); ?>
                            <sup class="fw-bold">đ</sup>
                        </span>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <a href="index.php?action=cart&act=cart" class="btn btn-info">Quay lại</a>
                    <button class="btn btn-success">Thanh Toán</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    const giaVanChuyen = document.querySelector('.giaVanChuyen');
    const tamTinh = document.querySelector('.tamTinh');
    const tongTien = document.querySelector('.tongTien');
    const handleChangeVanChuyen = (e) => {
        if (e.target.value == 'hoaToc') {
            giaVanChuyen.innerHTML = '50,000<sup><strong>đ</stro></sup>';
            tongTien.innerText = (parseFloat(tamTinh.value) + 50000).toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            });
        } else {
            giaVanChuyen.innerText = 'Miễn phí';
            tongTien.innerText = (parseFloat(tamTinh.value)).toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            });
        }
    }
</script>