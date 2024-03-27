<?php
$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sp = new SanPham();
$msp = $sp->layMotSanPhamTheoId($id);
?>
<div class="container mt-5">
    <div>
        <?php
        include_once "./view/header.php";
        include_once "./view/nav.php";
        ?>
    </div>
    <div class="mt-5 row">
        <div class="col">
            <img class="w-100" src="assets/imgs/<?php echo $msp['hinh_sanPham'] ?>" alt="">
        </div>
        <form action="index.php?action=cart&act=chiTietSanPham_action" method="post" class="col">
            <input hidden type="text" name="idSanPham" value="<?php echo $msp['id_sanPham'] ?>">
            <p class="fs-3 fw-bold"><?php echo $msp['ten_sanPham'] ?></p>
            <?php
            $giaThuc = 0;
            $mau = '';
            if ($msp['phanTramGiaGia_sanPham'] != 0) {
                $giaThuc = $msp['gia_sanPham'] - ($msp['gia_sanPham'] * $msp['phanTramGiaGia_sanPham'] / 100);
                echo '<p class="d-inline-block px-3 py-1 bg-danger text-white"> - ' . $msp['phanTramGiaGia_sanPham'] . ' %</p>';
                echo '<p style="text-decoration: line-through;" class=" text-danger fs-5">' . number_format($msp['gia_sanPham'], 0, ".", ",") . ' <sup class="fw-bold">đ</sup> </p>';
                echo '<p class="fs-3">' . number_format($giaThuc, 0, ".", ",") . ' <sup class="fw-bold">đ</sup> </p>';
            } else {
                echo '<p class="fs-3">' . number_format($msp['gia_sanPham'], 0, ".", ",") . ' <sup class="fw-bold">đ</sup> </p>';
            }
            $mau .= explode(" ", $msp['ten_sanPham'])[count(explode(" ", $msp['ten_sanPham'])) - 1];
            ?>
            <p>Màu sắc: <?php echo $mau; ?></p>

            <div>
                <div>
                    <input value="s" hidden name="size" checked id="s" type="radio">
                    <label class="px-2 fw-bold" for="s">S</label>
                    <input value="m" hidden name="size" id="m" type="radio">
                    <label class="px-2 fw-bold" for="m">M</label>
                    <input value="l" hidden name="size" id="l" type="radio">
                    <label class="px-2 fw-bold" for="l">L</label>
                    <input value="xl" hidden name="size" id="xl" type="radio">
                    <label class="px-2 fw-bold" for="xl">XL</label>
                    <input value="xxl" hidden name="size" id="xxl" type="radio">
                    <label class="px-2 fw-bold" for="xxl">XXL</label>
                </div>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center w-25 rounded rounded-1 border border-1 h-0">
                <div onclick="soLuong.value == 1 ? soLuong.value = 1 : soLuong.value--" class="btn btn-warning" style="line-height: 1;">-</div>
                <input max="<?php echo $msp['soLuong']?>" value="1" name="soLuong" style="width: 40px; height: 24px;" class="bg-info text-danger fw-bold text-center" />
                <div onclick="soLuong.value == <?php echo $msp['soLuong']?> ? soLuong.value = <?php echo $msp['soLuong']?> : soLuong.value++" class="btn btn-warning" style="line-height: 1;">+</div>
            </div>

            <div class="mt-4">
                <button type="submit" name="submit" class="btn btn-info btn-sm">Mua Ngay</button>
                <button type="submit" class="btn btn-info btn-sm">Thêm vào giỏ hàng</button>
            </div>
            <p class="fw-bold mt-5 mb-1">Miêu tả:</p>
            <p><?php echo $msp['mieuTa_sanPham'] ?></p>
        </form>
    </div>
</div>

<script>
    const soLuong = document.querySelector('input[name="soLuong"]');
</script>

<style>
    label {
        cursor: pointer;
    }

    input:checked+label {
        color: red;
        border-radius: 25px;
        background-color: #138496;
    }
</style>