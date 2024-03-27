<div class="container">
    <?php
    include_once "./view/header.php";
    $bill = new Bill();
    $user = new User();
    $cart = new Cart();
    $persion = $user->logUser($_SESSION['tenDangNhap']);
    $id = $persion['id_khachHang'];
    $billNew = $bill->themBill($id, $cart->tongGiaCart());
    $persionBuy = $bill->logKhachHangBill($billNew['id_khachHang']);
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $bill->themChiTietBill($billNew['id_bill'], $value['id'], $value['soLuong'], $value['mau'], $value['size'], $value['tongGiaMotSp']);
        }
    }
    $newChiTietBill = $bill->logChiTietBill($billNew['id_bill']);
    $cart->xoaCart();
    ?>
    <div>
        <p class="fw-bold fs-4 text-center my-3 text-danger">Hóa Đơn mua hàng của bạn</p>
        <div class="">
            <table class="table mb-2">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Thông tin của bạn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Số hóa đơn</td>
                        <td><?php echo $billNew['id_bill'] ?></td>
                    </tr>
                    <tr>
                        <td> Họ và tên</td>
                        <td><?php echo $persionBuy['hoVaTen'] ?></td>
                    </tr>
                    <tr>
                        <td> Địa chỉ</td>
                        <td><?php echo $persionBuy['diaChi'] ?></td>
                    </tr>
                    <tr>
                        <td> Số điện thoại</td>
                        <td><?php echo $persionBuy['sdt'] ?></td>
                    </tr>
                </tbody>
            </table>

            <p class="fw-bold">Chi tiết hàng hóa</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Stt</th>
                        <th scope="col">Thông tin sản phẩm</th>
                        <th scope="col">Tùy chọn của bạn</th>
                        <th scope="col">Chi tiết giá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tongTien = 0;
                    foreach ($newChiTietBill as $index => $value) :
                    ?>
                        <tr>
                            <th scope="row"><?php echo ($index + 1) ?></th>
                            <td><?php echo $value['ten_sanPham'] ?></td>
                            <td>
                                <div>
                                    <span>màu: </span>
                                    <span>
                                        <?php echo $value['mauSac'] ?>
                                    </span>
                                </div>
                                <div>
                                    <span>Size: </span>
                                    <span>
                                        <?php echo $value['size'] ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span> Số Lượng: </span>
                                    <span>
                                        <?php echo $value['soLuong'] ?>
                                    </span>
                                </div>
                                <div>
                                    <span>Đơn giá: </span>
                                    <span>
                                        <?php 
                                            $gia = 0;
                                            $gia = $value['phanTramGiaGia_sanPham'] != 0 ? $value['gia_sanPham'] - ($value['gia_sanPham'] * ( $value['phanTramGiaGia_sanPham'] / 100 )) : $value['gia_sanPham'];
                                            $tongTien = $tongTien + ($gia * $value['soLuong']);
                                            echo number_format($gia, 0, ".", ",") 
                                        ?>
                                        <sup class="fw-bold">đ</sup>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th>Tổng Tiền: </th>
                        <td></td>
                        <td></td>
                        <td>
                            <span>
                                <span class="fw-bold">
                                    <?php echo number_format($tongTien, 0, ".", ",") ?>
                                </span>
                                <sup class="fw-bold">đ</sup>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>