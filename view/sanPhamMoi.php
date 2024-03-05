<?php
$sp = new SanPham();
$spm = $sp->laySanPhamMoi();
?>

<div class="mt-5">
    <h5 class="mb-3 fw-bold">Sản Phẩm Mới Về</h5>

    <div class="d-flex justify-content-between align-items-center">
        <?php
        while ($set = $spm->fetch()) :
        ?>
            <div style="width: 260px;" class="product card me-1 position-relative overflow-hidden">
                <img class="w-100" src="assets/imgs/<?php echo $set['hinh_sanPham']; ?>" alt="">
                <div class="action position-absolute" style="top: 220px; left: 8px">
                    <button class="btn btn-info btn-sm">Mua Ngay</button>
                    <button class="btn btn-info btn-sm">Thêm vào giỏ hàng</button>
                </div>
                <div class="position-absolute rounded rounded-circle bg-danger text-white fw-bold" style="top: 8px; left: 8px; padding: 10px 12px">
                    Mới
                </div>
            </div>
        <?php
        endwhile;
        ?>

    </div>

    <div class="text-center">
        <button class="btn btn-secondary mt-4">Xem thêm -></button>
    </div>
</div>

<style>
    .action {
        transform: translateY(65px);
    }

    .product:hover {
        transition: all .2s linear;
        transform: scale(1.1);
    }

    .product:hover .action {
        transition: all .2s linear;
        transform: translateY(0);
    }
</style>