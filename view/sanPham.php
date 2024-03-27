<style>
    .action {
        transform: translateY(65px);
    }

    .product:hover img {
        transition: all .6s linear;
        transform: rotate(20deg);
    }

    .product:hover .action {
        transition: all .2s linear;
        transform: translateY(0);
    }
</style>

<div class="container">
    <?php
    include_once "./view/header.php";
    include_once "./view/nav.php";
    ?>
</div>

<?php
$id = 'all';
if (isset($_GET['idLoaiSanPham'])) {
    $id = $_GET['idLoaiSanPham'];
}
$sp = new SanPham();
$result_sp = '';
$tenLoai = '';

switch ($id) {
    case 'all':
        $result_sp = $sp->layTatCaSanPham();
        $tenLoai = 'All';
        break;
    case 'sale':
        $result_sp = $sp->layTatCaSanPhamGiamGia();
        $tenLoai = 'Sale';
        break;
    default:
        $result_sp = $sp->laySanPhamTheoIdLoai($id);
        $tenLoai = $sp->layTenLoaiTheoIdLoai($id);
        $tenLoai = $tenLoai['ten_loaiSanPham'];
}

?>

<div class="container">
    <div class="my-4">
        <span class="fw-bold">Danh mục</span>
        <span>/</span>
        <span><?php echo $tenLoai; ?></span>
    </div>
    <div>
        <div class="d-flex justify-content-start align-items-center flex-wrap">
            <?php
            while ($set = $result_sp->fetch()) :
            ?>
                <div style="width: 260px; margin-right: 12px; margin-bottom: 12px;" class="product card me-1 position-relative overflow-hidden">
                    <a href="index.php?action=sanPham&act=chiTietSanPham&id=<?php echo $set['id_sanPham']; ?>">
                        <img class="w-100" src="assets/imgs/<?php echo $set['hinh_sanPham']; ?>" alt="">
                    </a>
                    <div class="action position-absolute" style="top: 220px; left: 8px">
                        <a href="" class="btn btn-info btn-sm d-inline-block">Mua Ngay</a>
                        <a href="index.php?action=cart&act=addOne&id=<?php echo $set['id_sanPham']; ?>" class="btn btn-info btn-sm d-inline-block">Thêm vào giỏ hàng</a>
                    </div>
                    <?php
                    if ($set['phanTramGiaGia_sanPham'] != 0) {
                        echo '<div class="position-absolute rounded rounded-circle bg-danger text-white fw-bold" style="top: 8px; left: 8px; padding: 10px 12px">
                                        ' . $set['phanTramGiaGia_sanPham'] . '%
                                    </div>';
                    }
                    ?>
                </div>
            <?php
            endwhile;
            ?>

        </div>
    </div>
</div>