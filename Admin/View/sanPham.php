<div class="">
  <div>
    <p class="fw-bold fs-3 text-center mt-5">Danh Sách Hàng Hóa</p>
  </div>
  <a href="index.php?action=sanPham&act=add_sanPham">
    <p class="btn btn-info">Thêm sản phẩm</p>
  </a>
  <table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Mã loại</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Cập nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new SanPham();
      $result = $hh->getHangHoa();
      while ($set = $result->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['id_sanPham']; ?></td>
          <td><?php echo $set['ten_sanPham']; ?></td>
          <td><?php echo $set['id_loaiSanPham']; ?></td>
          <td><?php echo $set['luotXem']; ?></td>
          <td><?php echo $set['ngayLap']; ?></td>
          <td><?php echo $set['mieuTa_sanPham']; ?></td>
          <td><a href="index.php?action=sanPham&act=update_sanPham&id=<?php echo $set['id_sanPham']; ?>">Cập nhật</a></td>
          <td><a href="">Xóa</a></td>
        </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>
</div>