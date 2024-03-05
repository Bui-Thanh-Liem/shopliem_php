<?php
class SanPham
{
    function getHangHoa()
    {
        $db = new Connect();
        $select = "SELECT sp.id_sanPham, sp.ten_sanPham, sp.id_loaiSanPham, ctsp.luotXem, ctsp.ngayLap, ctsp.mieuTa_sanPham
                        FROM san_pham sp, chi_tiet_san_pham ctsp
                        WHERE sp.id_sanPham = ctsp.id_sanPham";
        $result = $db->getList($select);
        return $result;
    }

    function insertHangHoa($tenhh, $maloai, $gia_sanPham, $slx, $ngaylap, $mota)
    {
        $db = new Connect();
        $resultID = $db->getInstance("SELECT MAX(sp.id_sanPham) + 1 as idNewSanPham FROM san_pham sp");
        $id = $resultID['idNewSanPham'];
        $query1 = "INSERT INTO san_pham(id_sanPham, ten_sanPham, hinh_sanPham, id_loaiSanPham) VALUES(null, '$tenhh', 'HINH MOI THEM', $maloai)";
        $query2 = "INSERT INTO chi_tiet_san_pham(id_chiTietSanPham, id_sanPham, gia_sanPham, phanTramGiaGia_sanPham, mieuTa_sanPham, luotXem, ngayLap) VALUES(null, $id, $gia_sanPham, $slx, '$mota', 88, $ngaylap)";
        $query = $query1.";".$query2;
        $result = $db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getHangHoaID($id)
    {
        $db = new Connect();
        $select = "select * from hanghoa where mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh, $tenhh, $maloai, $slx, $ngaylap, $mota)
    {
        $db = new Connect();
        $query = "update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        $result = $db->exec($query);
        return $result;
    }
}
