<div class="container">
    <p class="fs-4 fw-bold text-danger">Biểu đồ</p>
    <?php
    $thongSoBan = new ThongSoBan();
    $tsb = $thongSoBan->getSpBanNhieu();
    $sp = new SanPham();
    $spbn = $sp->getSanPhamTheoId($tsb['id_sanPham']);
    ?>

    <div class="d-flex">

    </div>
    <p><?php echo $spbn['ten_sanPham'];?></p>
</div>