<?php
if (isset($_GET['id'])) {
  $mahh = $_GET['id'];
  $hh = new SanPham();
  $kq = $hh->getHangHoaID($mahh);
  $tenhh = $kq['tenhh'];
  $maloai = $kq['maloai'];
  $dacbiet = $kq['dacbiet'];
  $slx = $kq['soluotxem'];
  $ngaylap = $kq['ngaylap'];
  $mota = $kq['mota'];
}
?>

<?php
$ac = 1;
if (isset($_GET['action'])) {
  if (isset($_GET['act']) && $_GET['act'] == 'insert_action') {
    $ac = 1;
  } else {
    $ac = 2;
  }
}
?>

<div class="">
  <div>
    <p class="fw-bold fs-3 text-center mt-5">Thêm Sản Phẩm Mới</p>
  </div>
  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=sanPham&act=add_sanPham_action" method="post" enctype="multipart/form-data">';
  } else {
    echo '<form action="index.php?action=sanPham&act=update_action" method="post" enctype="multipart/form-data">';
  }
  ?>
  <table class="table" style="border: 0px;">
    <tr>
      <td>Mã hàng</td>
      <td> <input type="text" class="form-control" name="mahh" value="<?php if (isset($mahh)) echo $mahh; ?>" readonly /></td>
    </tr>
    <tr>
      <td>Tên hàng</td>
      <td><input type="text" class="form-control" name="tenhh" value="<?php if (isset($tenhh)) echo $tenhh; ?>" maxlength="100px"></td>
    </tr>

    <tr>
      <td>Mã loại</td>
      <td>
        <select name="maloai" class="form-control" style="width:150px;">
          <?php
          $selectLoai = -1;
          if (isset($maloai) && $maloai != -1) {
            $selectLoai = $maloai;
          }
          $loai = new loai();
          $result = $loai->getLoai();
          while ($set = $result->fetch()) :
          ?>
            <option value="<?php echo $set['id_loaiSanPham'] ?>" <?php if ($selectLoai == $set['id_loaiSanPham']) echo 'selected'; ?>><?php echo $set['ten_loaiSanPham'] ?></option>
          <?php
          endwhile;
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Đơn giá</td>
      <td><input type="number" class="form-control" value="<?php if (isset($gia_sanPham)) echo $slx; ?>" name="gia_sanPham">
      </td>
    </tr>
    <tr>
      <td>Số lượt xem</td>
      <td><input type="text" class="form-control" value="<?php if (isset($slx)) echo $slx; ?>" name="slx">
      </td>
    </tr>
    <tr>
      <td>Ngày lập</td>
      <td><input type="text" class="form-control" value="<?php if (isset($ngaylap)) echo $ngaylap; ?>" name="ngaylap">
      </td>
    </tr>
    <tr>
      <td>Mô tả</td>
      <td><input type="text" class="form-control" value="<?php if (isset($mota)) echo $mota; ?>" name="mota">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input class="btn btn-info" type="submit" value="Submit">
      </td>
    </tr>

  </table>
  </form>
</div>