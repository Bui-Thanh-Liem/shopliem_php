<div class="container">
        <?php
        include_once "./view/header.php";
        include_once "./view/nav.php";
        ?>
    </div>
<div class="container">
    <div class="">
        <h2 class="fw-bold">Đăng Kí</h2>
        <div style="width: 100%; height: 2px" class="bg-dark"></div>
    </div>
    <div class="mt-5 align-items-center">
        <form action="index.php?action=register&act=register_action" method="POST" class="col">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <label for="tenDangNhap" class="form-label">Tên Đăng Nhập</label></label>
                        <input type="text" name="tenDangNhap" class="form-control" id="tenDangNhap" placeholder="...">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="email" class="form-label">Email</label></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Nhập Mật Khẩu</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirm" class="form-label">Nhập Lại Mật Khẩu</label>
                        <input type="password" class="form-control" id="passwordConfirm" placeholder="...">
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <label for="hoVaTen" class="form-label">Họ và Tên</label></label>
                        <input type="text" name="hoVaTen" class="form-control" id="hoVaTen" placeholder="...">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="sdt" class="form-label">Số Điện Thoại</label></label>
                        <input type="text" name="sdt" class="form-control" id="sdt" placeholder="...">
                    </div>
                    <div class="form-floating mb-3">
                        <label for="diaChi" class="form-label">Địa Chỉ</label></label>
                        <input type="text" name="diaChi" class="form-control" id="diaChi" placeholder="...">
                    </div>

                    <div class="d-flex align-items-center">
                        <button type="submit" name="submit" class="btn btn-primary">Đăng Kí</button>
                        <p class="" style="margin-top: 14px; margin-left: 24px;">
                            <a class="text-decoration-none fw-bold text-dark" href="index.php?action=login">Bạn đã có tài khoản</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>