<?php
class ThongSoBan
{
    function getSpBanNhieu()
    {
        $db = new Connect();
        $select = "SELECT MAX(subquery.count_soLuong) as 'soLuong', id_sanPham
            FROM (
                SELECT id_sanPham, COUNT(soLuong) AS count_soLuong
                FROM chi_tiet_bill
                GROUP BY id_sanPham
            ) AS subquery;";
        $result = $db->getInstance($select);
        return $result;
    }
}
