<div class="container">
    <?php
    include_once "./view/header.php";
    include_once "./view/nav.php";
    $cart2 = new Cart();
    ?>
    <div class="text-center fw-bold my-5">
        GIỎ HÀNG CỦA BẠN
    </div>
    <div class="row">
        <div class="col-lg-9">
            <p>Bạn đang có <span class="fw-bold"><?php echo $cart2->tongSPCart() ?></span> sản phẩm trong giỏ hàng</p>
            <?php
            $sp = new SanPham();
            $cart = array();
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
            };
            foreach ($cart as $index => $item) :
                $maxSl = $sp->laySoLuongById($item['id']);

                echo '<form method="post" action="index.php?action=cart&act=update">
                        <div class="row justify-content-between align-items-center mb-3">
                            <input hidden name="index" type="text" value="' . $index . '">
                            <div class="col">
                                <img class="w-75 rounded rounded-1 border border-5" src="assets/imgs/' . $item['hinh'] . '" alt="">
                            </div>
                            <div class="col">
                                <p class="mb-2">' . $item['ten'] . '</p>
                                <p class="m-0">
                                    <span class="text-secondary">' . $item['size'] . '</span>
                                    <span class="text-secondary">/</span>
                                    <span class="text-secondary">' . $item['mau'] . '</span>
                                </p>
                            </div>
                            <div class="col">
                                <div class="mt-3 d-flex justify-content-between align-items-center w-25 rounded rounded-1 border border-1 h-0">
                                    <div onclick="soLuong.value == 1 ? soLuong.value = 1 : soLuong.value--" class="btn btn-secondary" style="line-height: 1;">-</div>
                                    <input max="'.$maxSl['soLuong'].'" value="' . $item['soLuong'] . '" name="soLuong" style="width: 40px; height: 24px;" class="text-danger fw-bold text-center" />
                                    <div onclick="soLuong.value == '.$maxSl['soLuong'].' ? soLuong.value = '.$maxSl['soLuong'].' : soLuong.value++" class="btn btn-secondary" style="line-height: 1;">+</div>
                                </div>
                            </div>
                            <div class="col">' . number_format($item['gia'], 0, ".", ",") . '<sup class="fw-bold">đ</sup> </p>
                            </div>
                            <div class="col">
                                <p class="m-0">Thành tiền:</p>
                                <p class="text-danger fw-bold m-0">' . number_format($item['tongGiaMotSp'], 0, ".", ",") . '<sup class="fw-bold">đ</sup> </p>
                                </p>
                                <button name="update" class="text-center btn btn-warning btn-sm text-dark text-decoration-none">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <a href="index.php?action=cart&act=delete&index=' . $index . '" class="text-center btn btn-danger btn-sm text-dark text-decoration-none">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </div>
                        </div>
                    </form>';
            endforeach;

            if (!$cart) {
                echo '<div class="text-center fs-3 my-5">
                        Giỏ Hàng Trống !
                    </div>';
            };
            ?>
        </div>
        <div class="col">
            <a class="text-info text-decoration-none" href="index.php?action=sanPham">Tiếp tục mua hàng -></a>
            <div class="border border-1 p-3">
                <p class="fw-bold">Thông tin đơn hàng</p>
                <div class="my-3" style="height: 1px; background: #999;"></div>
                <div>
                    <p class="fw-bold d-inline">Tổng tiền:</p>
                    <span class="d-inline-block ms-3 text-danger fw-bold">
                        <?php
                        echo number_format($cart2->tongGiaCart(), 0, ".", ",");
                        ?>
                        <sup class="fw-bold">đ</sup>
                    </span>
                </div>
                <div class="my-3" style="height: 1px; background: #999;"></div>
                <p>Bạn có thể nhập mã giảm giá ở trang thanh toán.</p>
                <div class="my-3" style="height: 1px; background: #999;"></div>
                <a href="index.php?action=payment" class="btn btn-success text-white w-100">Thanh Toán</a>
            </div>
        </div>
    </div>
</div>

<script>
    const soLuong = document.querySelector('input[name="soLuong"]');
</script>