<div class="">
  <div>
    <p class="fw-bold fs-3 text-center mt-5">Danh Sách Hàng Hóa</p>
  </div>
  <div>
    <a href="index.php?action=sanPham&act=add_sanPham">
      <p class="btn btn-primary">Thêm một sản phẩm</p>
    </a>
    <!-- Button trigger model -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Thêm nhiều sản phẩm
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nhập thêm sản phẩm mới</h5>
          <button type="button" class="btn-close border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
          <form action="index.php?action=sanPham&act=addByFile" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="d-block" for="">Sản phẩm: </label>
              <input class="bg-warning" type="file" name="file">
            </div>
            <button class="w-100 d-block btn btn-success mt-4" type="submit">ok</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Hình</th>
        <th>Mã loại</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng</th>
        <th>Cập nhật / Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new SanPham();
      $result = $hh->getSanPham();
      while ($set = $result->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['id_sanPham']; ?></td>
          <td><?php echo $set['ten_sanPham']; ?></td>
          <td style="width: 100px;">
            <img class="w-100" src="assets/imgs/<?php echo $set['hinh_sanPham']; ?>" alt="">
          </td>
          <td><?php echo $set['id_loaiSanPham']; ?></td>
          <td><?php echo $set['luotXem']; ?></td>
          <td><?php echo $set['ngayLap']; ?></td>
          <td style="max-width: 300px;"><?php echo $set['mieuTa_sanPham']; ?></td>
          <td>
            <?php echo $set['soLuong']; ?>
          </td>
          <td>
            <a class="btn btn-warning text-white mb-2 w-100" href="index.php?action=sanPham&act=update_sanPham&id=<?php echo $set['id_sanPham']; ?>">Cập nhật</a>
            <a class="btn btn-danger w-100" href="index.php?action=sanPham&act=delete&id=<?php echo $set['id_sanPham']; ?>">Xóa</a>
          </td>
        </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>
</div>