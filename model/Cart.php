<?php
class Cart
{
    function themVaoGioHang($id, $size, $soLuong)
    {
        if(isset($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $index => $item) {
                if($item['id'] == $id && $item['size'] == $size) {
                    $_SESSION['cart'][$index]['soLuong'] = $_SESSION['cart'][$index]['soLuong'] + $soLuong;
                    $_SESSION['cart'][$index]['tongGiaMotSp'] = ($_SESSION['cart'][$index]['soLuong'] + $soLuong) * $_SESSION['cart'][$index]['gia'];
                    return;
                }
            }
        }
        $sp = new SanPham();
        $idsp = $sp->layMotSanPhamTheoId($id);
        $tensp = $idsp['ten_sanPham'];
        $mau = explode(" ", $idsp['ten_sanPham'])[count(explode(" ", $idsp['ten_sanPham'])) - 1];
        $gia = $idsp['gia_sanPham'] * ($idsp['phanTramGiaGia_sanPham'] / 100);
        $giaChuaGiam = $idsp['gia_sanPham'];
        $phanTramGiamGia = $idsp['phanTramGiaGia_sanPham'];
        $gia = $phanTramGiamGia != 0 ? ($giaChuaGiam - ($phanTramGiamGia / 100) * $giaChuaGiam) : $giaChuaGiam;
        $hinh = $idsp['hinh_sanPham'];
        $tongGiaMotSp = $soLuong * $gia;

        $item = array(
            'id' => $id,
            'hinh' => $hinh,
            'ten' => $tensp,
            'size' => $size,
            'gia' => $gia,
            'mau' => $mau,
            'soLuong' => $soLuong,
            'tongGiaMotSp' => $tongGiaMotSp,
        );
        $_SESSION['cart'][] = $item;
    }

    function capNhatGioHang($index, $soLuong)
    {
        $_SESSION['cart'][$index]['soLuong'] = $soLuong;
        $tongGiaMotSp = $_SESSION['cart'][$index]['soLuong'] * $_SESSION['cart'][$index]['gia'];
        $_SESSION['cart'][$index]['tongGiaMotSp'] = $tongGiaMotSp;
    }

    function xoaMotGioHang($index)
    {
        unset($_SESSION['cart'][$index]);
    }

    function tongGiaCart()
    {
        $gia = 0;
        foreach ($_SESSION['cart'] as $item) {
            $gia = $gia + $item['tongGiaMotSp'];
        }
        return $gia;
    }

    function xoaCart()
    {
        $_SESSION['cart'] = array();
    }

    function tongSPCart()
    {
        $sl = 0;
        foreach ($_SESSION['cart'] as $item) {
            $sl = $sl + $item['soLuong'];
        }
        return $sl;
    }
}
