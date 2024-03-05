<div class="container">
        <?php
        include_once "./view/header.php";
        include_once "./view/nav.php";
        ?>
    </div>
<div class="container">
    <div class="row mt-5 align-items-center">
        <div class="col">
            <h2 class="fw-bold">Đăng Nhập</h2>
            <div style="width: 100%; height: 2px" class="bg-dark"></div>
        </div>
        <form class="col" action="index.php?action=login&act=login_action" method="post">
            <div class="form-floating mb-3">
                <label for="tenDangNhap" class="form-label">Tên Đăng Nhập</label></label>
                <input type="text" name="tenDangNhap" class="form-control" id="tenDangNhap" placeholder="...">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Nhập Mật Khẩu</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="...">
            </div>
            <div class="d-flex align-items-center">
                <button type="submit" name="submit" class="btn btn-primary">Đăng Nhập</button>
                <p class="" style="margin-top: 14px; margin-left: 24px;">
                    <a class="text-decoration-none fw-bold text-dark" href="">Quên mật khẩu?</a>
                    <br>
                    hoặc
                    <a class="text-decoration-none fw-bold text-dark" href="index.php?action=register">Đăng ký</a>
                </p>
            </div>
        </form>
    </div>
</div>