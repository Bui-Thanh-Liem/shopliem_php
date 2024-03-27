<?php
class Bill
{
    function themBill($id_khachHang, $tongTien)
    {
        $db = new Connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');

        // 
        $query = "insert into bill(id_bill, id_khachHang, tongTien, date) value(null, $id_khachHang, $tongTien, '$ngay')";
        $db->exec($query);

        // 
        $querySelect = "SELECT b.id_bill, b.id_khachHang, b.tongTien, b.date FROM bill b ORDER BY b.id_bill DESC LIMIT 1";
        $newBill = $db->getInstance($querySelect);
        return $newBill;
    }

    function themChiTietBill($id_bill, $id_sanPham, $soLuong, $mauSac, $size, $thanhTien)
    {
        $db = new Connect();
        $query = "insert into chi_tiet_bill(id_bill, id_sanPham, soLuong, mauSac, size, thanhTien) value($id_bill, $id_sanPham, $soLuong, '$mauSac', '$size', $thanhTien)";
        $queryUpdate = "UPDATE san_pham sp SET sp.soLuong = sp.soLuong -$soLuong WHERE sp.id_sanPham = $id_sanPham";
        $db->exec($query);
        $db->exec($queryUpdate);
    }

    function logBills()
    {
        $db = new Connect();
        $querySelect = "SELECT b.id_bill, b.id_khachHang, b.tongTien, b.date, b.status FROM bill b";
        $newBill = $db->getList($querySelect);
        return $newBill;
    }

    function logChiTietBill($id_bill)
    {
        $db = new Connect();
        $querySelect = "SELECT ctb.id_sanPham, ctb.soLuong, ctb.mauSac, ctb.size, ctb.thanhTien, sp.ten_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham FROM chi_tiet_bill ctb, san_pham sp, chi_tiet_san_pham ctsp WHERE ctsp.id_sanPham = ctb.id_sanPham AND sp.id_sanPham = ctb.id_sanPham AND ctb.id_bill = $id_bill";
        $newChiTietBill = $db->getList($querySelect);
        return $newChiTietBill;
    }

    function logKhachHangBill($id)
    {
        $db = new Connect();
        $querySelect = "SELECT kh.hoVaTen, kh.sdt, kh.diaChi FROM khach_hang kh WHERE kh.id_khachHang = $id";
        $kh = $db->getInstance($querySelect);
        return $kh;
    }
}
