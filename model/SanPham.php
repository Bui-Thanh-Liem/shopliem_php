<?php
class SanPham
{
    function laySanPhamMoi()
    {
        // b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.ten_sanPham, sp.id_sanPham, sp.hinh_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp 
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.destroy = 0 AND sp.soLuong > 0 ORDER BY sp.id_sanPham DESC LIMIT 4";

        // b3: ai thực thi câu truy vấn này ?
        $result = $db->getList($select);
        return $result;
    }

    function laySanPhamGiamGia()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.ten_sanPham, sp.id_sanPham, sp.hinh_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp 
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.destroy = 0 AND sp.soLuong > 0 AND ctsp.phanTramGiaGia_sanPham > 0 ORDER BY sp.id_sanPham DESC LIMIT 4";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result;
    }

    function layTatCaSanPham()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.id_sanPham, sp.ten_sanPham, sp.hinh_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.destroy = 0 AND sp.soLuong > 0";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result;
    }

    function layTatCaSanPhamGiamGia()
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.id_sanPham, sp.ten_sanPham, sp.hinh_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND ctsp.phanTramGiaGia_sanPham != 0 AND sp.destroy = 0 AND sp.soLuong > 0";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result;
    }

    function laySanPhamTheoIdLoai($id)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.id_sanPham, sp.ten_sanPham, sp.hinh_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.id_loaiSanPham = $id AND sp.destroy = 0 AND sp.soLuong > 0";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getList($select);
        return $result;
    }

    function layTenLoaiTheoIdLoai($id)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT lsp.ten_loaiSanPham FROM loai_san_pham lsp WHERE lsp.id_loaiSanPham = $id";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getInstance($select);
        return $result;
    }

    function layMotSanPhamTheoId($id)
    {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.ten_sanPham, sp.id_sanPham, sp.soLuong, sp.hinh_sanPham, ctsp.gia_sanPham, ctsp.phanTramGiaGia_sanPham, ctsp.mieuTa_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.id_sanPham = $id";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getInstance($select);
        return $result;
    }

    function laySoLuongById($id) {
        //b1: kêt nối được với dữ liệu
        $db = new connect();

        // b2: viết câu truy vấn
        $select = "SELECT sp.soLuong
                    FROM san_pham sp
                    WHERE sp.id_sanPham = $id";

        // b3: ai thực thi câu truy vấn này?
        $result = $db->getInstance($select);
        return $result;
    }
}
