<?php
class SanPham
{
    function getSanPham()
    {
        $db = new Connect();
        $select = "SELECT sp.id_sanPham, sp.soLuong, sp.ten_sanPham, sp.hinh_sanPham, sp.id_loaiSanPham, ctsp.luotXem, ctsp.ngayLap, ctsp.mieuTa_sanPham
                        FROM san_pham sp, chi_tiet_san_pham ctsp
                        WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.destroy = 0";
        $result = $db->getList($select);
        return $result;
    }

    function insertSanPham($tenhh, $maloai, $gia_sanPham, $giam_gia, $slx, $ngaylap, $mota, $hinh)
    {
        $db = new Connect();
        $query1 = "INSERT INTO san_pham(id_sanPham, ten_sanPham, hinh_sanPham, id_loaiSanPham) VALUES(null, '$tenhh', '$hinh', $maloai)";
        $result1 = $db->exec($query1);
        $resultID = $db->getInstance("SELECT sp.id_sanPham
                                        FROM san_pham sp
                                        ORDER BY sp.id_sanPham DESC
                                        LIMIT 1;");
        $id = $resultID['id_sanPham'];
        $query2 = "INSERT INTO chi_tiet_san_pham(id_chiTietSanPham, id_sanPham, gia_sanPham, phanTramGiaGia_sanPham, mieuTa_sanPham, luotXem, ngayLap) 
                                                VALUES(null, $id, $gia_sanPham, $giam_gia, '$mota', $slx, $ngaylap)";
        $result2 = $db->exec($query2);
        return $result1;
    }

    // phường thức lấy thông tin dựa vào id
    function getSanPhamTheoId($id)
    {
        $db = new Connect();
        $select = "SELECT sp.ten_sanPham, sp.soLuong, sp.hinh_sanPham, sp.id_loaiSanPham, ctsp.phanTramGiaGia_sanPham, ctsp.mieuTa_sanPham, ctsp.ngayLap, ctsp.luotXem, ctsp.gia_sanPham
                    FROM san_pham sp, chi_tiet_san_pham ctsp 
                    WHERE sp.id_sanPham = ctsp.id_sanPham AND sp.id_sanPham = $id AND sp.destroy = 0";
        $result = $db->getInstance($select);
        return $result;
    }

    function updateSanPham($mahh, $tenhh, $gia_sanPham, $giam_gia, $maloai, $slx, $ngaylap, $mota, $hinh, $soLuong)
    {
        $db = new Connect();
        $query1 = "UPDATE san_pham
                    SET ten_sanPham = '$tenhh', 
                        id_loaiSanPham = $maloai, 
                        hinh_sanPham = '$hinh',
                        soLuong = $soLuong
                    WHERE id_sanPham = $mahh";

        $query2 = "UPDATE chi_tiet_san_pham
                    SET luotXem = $slx, 
                        ngayLap = '$ngaylap', 
                        gia_sanPham = $gia_sanPham, 
                        phanTramGiaGia_sanPham = $giam_gia, 
                        mieuTa_sanPham = '$mota'
                    WHERE id_sanPham = $mahh";
        $result1 = $db->exec($query1);
        $result2 = $db->exec($query2);
        return $result2;
    }

    function delete($id) {
        $db = new Connect();
        $query1 = "UPDATE san_pham
                    SET destroy = 1
                    WHERE id_sanPham = $id";
        $result1 = $db->exec($query1);
        return $result1;
    }
}
