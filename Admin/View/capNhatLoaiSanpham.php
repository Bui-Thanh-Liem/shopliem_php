<?php
$loai = new Loai();
$l = $loai->getNameLoai($_GET['id']);
?>
<div class="container">
  <p class="fw-bold fs-4 text-danger my-5 text-center">Cập nhật Loại Sản Phẩm</p>
  <form action="./index.php?action=loai&act=capNhat_action" method="post">
    <div class="mb-3">
      <label for="tenLoai" class="form-label">Tên loại mới: </label>
      <input type="text" value="<?php echo $l['ten_loaiSanPham']; ?>" name="ten" class="form-control" id="tenLoai" placeholder="...">
      <input type="text" hidden value="<?php echo $_GET['id']; ?>" name="id">
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn btn-success w-50">OK</button>
    </div>
  </form>
</div>