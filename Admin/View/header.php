<header class="bg-info">
    <div class="container-fluid px-5">
        <ul class="list-unstyled py-3 d-flex justify-content-between align-items-center">
            <li>
                <a class="text-decoration-none fw-bold fs-2 text-warning" href="../index.php">BTL</a>
            </li>
            <li class="">
                <a class="text-decoration-none text-white fw-bold" href="./index.php">Trang Chủ</a>
            </li>

            <!-- Quản trị Doanh Mục -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Quản Trị Doanh Mục
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="./index.php?action=nav&act=nav">Menu</a></li>
                    <li><a class="dropdown-item" href="./index.php?action=loai&act=loai">Loại Sản Phẩm</a></li>
                    <li><a class="dropdown-item" href="./index.php?action=sanPham">Sản Phẩm</a></li>
                    <li><a class="dropdown-item" href="#">Chi Tiết Sản Phẩm</a></li>
                </ul>
            </div>

            <!-- Thống kê -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Thống Kê
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Sản Phẩm bán được nhiều Nhất</a></li>
                    <li><a class="dropdown-item" href="#">Sản Phẩm chưa được giao</a></li>
                    <li><a class="dropdown-item" href="#">Sản phẩm bán ít nhất</a></li>
                </ul>
            </div>

            <!-- Báo cáo -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Báo Cáo
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Tháng</a></li>
                    <li><a class="dropdown-item" href="#">Quý</a></li>
                    <li><a class="dropdown-item" href="#">Năm</a></li>
                </ul>
            </div>

            <!-- Báo cáo Tồn kho -->
            <li class="">
                <a class="text-decoration-none fw-bold text-white" href="#">Tồn Kho</a>
            </li>
        </ul>
    </div>
</header>