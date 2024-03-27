<?php
$nav = new Nav();
$n = $nav->getNameNav($_GET['id']);
?>
<div class="container">
  <p class="fw-bold fs-4 text-danger my-5 text-center">Cập nhật Loại Sản Phẩm</p>
  <form action="./index.php?action=nav&act=capNhat_action" method="post">
    <div class="mb-3">
      <label for="tenNav" class="form-label">Tên nav mới: </label>
      <input type="text" value="<?php echo $n['name_nav']; ?>" name="tenNav" class="form-control" id="tenNav" placeholder="...">
      <input type="text" hidden value="<?php echo $_GET['id']; ?>" name="id">
    </div>
    <div class="mb-3">
      <label for="keyNav" class="form-label">Key nav mới: </label>
      <input type="text" value="<?php echo $n['key_nav']; ?>" name="keyNav" class="form-control" id="keyNav" placeholder="...">
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn btn-success w-50">OK</button>
    </div>
  </form>
</div>