<?php
$bill = new Bill();
$billAll = $bill->logBills();
?>

<div class="container">
    <?php
    include_once './view/header.php';
    include_once './view/nav.php';
    while ($set = $billAll->fetch()) :
        $chiTietBill = $bill->logChiTietBill($set['id_bill']);
        $user = $bill->logKhachHangBill($set['id_khachHang'])
    ?>
        <div class="border border-5 px-2 mt-5">
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
                        <td><?php echo $set['id_bill'] ?></td>
                    </tr>
                    <tr>
                        <td> Họ và tên</td>
                        <td><?php echo $user['hoVaTen'] ?></td>
                    </tr>
                    <tr>
                        <td> Địa chỉ</td>
                        <td><?php echo $user['diaChi'] ?></td>
                    </tr>
                    <tr>
                        <td> Số điện thoại</td>
                        <td><?php echo $user['sdt'] ?></td>
                    </tr>
                    <tr>
                        <td>Tình trạng</td>
                        <td class="text-danger fw-bold"><?php echo $set['status'] ?></td>
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
                    foreach ($chiTietBill as $index => $value) :
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
                                        $gia = $value['phanTramGiaGia_sanPham'] != 0 ? $value['gia_sanPham'] - ($value['gia_sanPham'] * ($value['phanTramGiaGia_sanPham'] / 100)) : $value['gia_sanPham'];
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
    <?php endwhile; ?>
</div>