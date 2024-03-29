<?php
if (isset($_GET['id'])) {
  $mahh = $_GET['id'];
  $hh = new SanPham();
  $kq = $hh->getSanPhamTheoId($mahh);
  $tenhh = $kq['ten_sanPham'];
  $hinh = $kq['hinh_sanPham'];
  $maloai = $kq['id_loaiSanPham'];
  $gia_sanPham = $kq['gia_sanPham'];
  $giam_gia = $kq['phanTramGiaGia_sanPham'];
  $slx = $kq['luotXem'];
  $ngaylap = $kq['ngayLap'];
  $soLuong = $kq['soLuong'];
  $mota = $kq['mieuTa_sanPham'];
}
?>

<div class="container">
  <div>
    <p class="fw-bold fs-3 text-center mt-5">Cập Nhật Sản Phẩm</p>
  </div>
  <form action="index.php?action=sanPham&act=update_sanPham_action" method="post" enctype="multipart/form-data">
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
        <td>Url hình</td>
        <td>
          <input type="file" class="" name="hinh" value="<?php if (isset($hinh)) echo $hinh;?>" maxlength="100px">
          <span style="width: 100px;" class="d-inline-block">
            <img class="w-100" src="assets/imgs/<?php if (isset($hinh)) echo $hinh; ?>" alt="">
          </span>
        </td>
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
        <td><input type="number" class="form-control" value="<?php if (isset($gia_sanPham)) echo $gia_sanPham; ?>" name="gia_sanPham">
        </td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="number" class="form-control" value="<?php if (isset($giam_gia)) echo $giam_gia; ?>" name="giam_gia">
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
        <td>Số lượng</td>
        <td><input type="number" class="form-control" value="<?php if (isset($soLuong)) echo $soLuong; ?>" name="soLuong">
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