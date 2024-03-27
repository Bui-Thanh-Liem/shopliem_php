<div>
    <ul class="list-unstyled d-flex justify-content-center align-items-center">
        <?php
        $nav = new Nav();
        $navs = $nav->getAllNav();
        while ($nav = $navs->fetch()) :
        ?>
            <li style="margin-right: 34px;" class="fw-bold toTop"><a class="text-decoration-none text-dark" href="index.php?action=sanPham&idLoaiSanPham=<?php echo $nav['key_nav'] ?>"><?php echo $nav['name_nav'] ?></a></li>
        <?php endwhile; ?>
    </ul>
</div>

<style>
    .toTop:hover {
        transition: all .5s linear;
        transform: translateY(-4px);
    }
</style>