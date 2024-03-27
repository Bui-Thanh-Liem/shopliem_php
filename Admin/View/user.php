<div class="container">
  <p class="fw-bold fs-4 text-center text-danger my-5">Quản Lý Nhân Viên</p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên nhân viên</th>
        <th scope="col">Username</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Vai trò</th>
        <th scope="col">Cập nhật / Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nv = new Nhanvien();
      $nvs = $nv->getNhanVien();
      while ($n = $nvs->fetch()) :
      ?>
        <tr>
          <th scope="row"><?php echo $n['id_nhanVien'] ?></th>
          <td><?php echo $n['ten_nhanVien'] ?></td>
          <td><?php echo $n['username'] ?></td>
          <td><?php echo $n['diaChi'] ?></td>
          <td><?php echo $n['vaiTro'] == 1 ? 'Admin' : 'Nhân viên' ?></td>
          <td>
            <button <?php echo $n['vaiTro'] == 1 ? 'disabled' : '' ?> class="btn btn-warning">Cập nhật</button>
            <button <?php echo $n['vaiTro'] == 1 ? 'disabled' : '' ?> class="btn btn-danger">Xóa</button>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

  <p class="fw-bold fs-4 text-center text-danger my-5">Quản Lý Khách Hàng</p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Email</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Đia chỉ</th>
        <th scope="col">Block</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $user = new User();
      $usrs = $user->getUser();
      while ($u = $usrs->fetch()) :
      ?>
        <tr class="">
          <th scope="row"><?php echo $u['id_khachHang'] ?></th>
          <td><?php echo $u['tenDangNhap'] ?></td>
          <td><?php echo $u['email'] ?></td>
          <td><?php echo $u['hoVaTen'] ?></td>
          <td><?php echo $u['sdt'] ?></td>
          <td><?php echo $u['diaChi'] ?></td>
          <?php
          if ($u['block'] == 1) :
          ?>
            <td>
              <a href="./index.php?action=user&act=unblock&id=<?php echo $u['id_khachHang'] ?>" class="btn btn-warning">
                Unblock
              </a>
            </td>
          <?php endif; ?>

          <?php
          if ($u['block'] == 0) :
          ?>
            <td>
              <a href="./index.php?action=user&act=block&id=<?php echo $u['id_khachHang'] ?>" class="btn btn-danger">
                Block
              </a>
            </td>
          <?php endif; ?>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>