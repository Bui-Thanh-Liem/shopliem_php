<div class="container">
  <p class="fw-bold fs-4 my-4 text-danger">Quản lý loại hàng hóa</p>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm loại mới
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm Mới</h5>
          <button type="button" class="btn-close border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
          <form action="./index.php?action=loai&act=them" method="post">
            <div class="mb-3">
              <label for="tenLoai" class="form-label">Tên loại mới: </label>
              <input type="text" name="tenLoai" class="form-control" id="tenLoai" placeholder="...">
            </div>
            <div class="text-center mt-5">
              <button type="submit" class="btn btn-success w-50">OK</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Tên loại</th>
        <th scope="col">Cập nhật / Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $loai = new loai();
      $loais = $loai->getLoai();
      while ($l = $loais->fetch()) :
      ?>
        <tr>
          <th scope="row"><?php echo intval($l['id_loaiSanPham']); ?></th>
          <td><?php echo $l['ten_loaiSanPham']; ?></td>
          <td>
            <div>
              <a href="./index.php?action=loai&act=capNhat&id=<?php echo $l['id_loaiSanPham'];?>" class="btn btn-warning">Cập nhật</a>
              <a href="./index.php?action=loai&act=xoa&id=<?php echo $l['id_loaiSanPham'];?>" class="btn btn-danger">Xóa</a>
            </div>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>