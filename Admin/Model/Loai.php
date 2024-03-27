<?php
class Loai
{
    function getLoai()
    {
        $db = new connect();
        $select = "SELECT * FROM loai_san_pham WHERE destroy != 1";
        $result = $db->getList($select);
        return $result;
    }

    function getNameLoai($id)
    {
        $db = new connect();
        $select = "SELECT lsp.ten_loaiSanPham FROM loai_san_pham lsp WHERE id_loaiSanPham = $id";
        $result = $db->getInstance($select);
        return $result;
    }

    function insertLoai($ten)
    {
        $db = new Connect();
        $select = "INSERT INTO loai_san_pham(id_loaiSanPham, ten_loaiSanPham) VALUES(null, '$ten')";
        $result = $db->exec($select);
        return $result;
    }

    function xoaLoai($id)
    {
        $db = new Connect();
        $select = "UPDATE loai_san_pham SET destroy = 1 WHERE id_loaiSanPham = '$id'";
        $result = $db->exec($select);
        return $result;
    }

    function capNhatLoai($id, $ten)
    {
        $db = new Connect();
        $select = "UPDATE loai_san_pham SET ten_loaiSanPham = '$ten' WHERE id_loaiSanPham = '$id'";
        $result = $db->exec($select);
        return $result;
    }
}
