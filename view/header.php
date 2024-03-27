<div class="fs-1 fw-bold mb-5 mt-3 row">
    <div class="col offset-4 text-center">
        <a class="text-decoration-none text-info" href="index.php">BTL</a>
    </div>
    <div class="col d-flex justify-content-end align-items-center">
        <a href="index.php?action=login" class="text-dark" style="margin-right: 24px;">
            <?php
            if (isset($_SESSION['tenDangNhap'])) {
                echo '<span class="fs-4">' . $_SESSION["tenDangNhap"] . '</span>';
            } else {
                echo '<i class="fs-3 bi bi-person-circle"></i>';
            }
            ?>
        </a>
        <a href="" class="text-dark" style="margin-right: 24px;">
            <i class="fs-3 bi bi-search"></i>
        </a>
        <a href="index.php?action=cart&act=cart" class="text-dark" style="margin-right: 24px;">
            <i class="fs-3 bi bi-bag-dash-fill"></i>
        </a>
    </div>
</div>