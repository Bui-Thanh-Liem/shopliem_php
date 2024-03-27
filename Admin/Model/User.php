<?php
class User
{
    function getUser()
    {
        $db = new Connect();
        $select = "SELECT * FROM Khach_hang";
        $result = $db->getList($select);
        return $result;
    }

    function blockUser($id)
    {
        $db = new Connect();
        $select = "UPDATE Khach_hang SET block = 1 WHERE id_KhachHang = $id";
        $result = $db->exec($select);
        return $result;
    }

    function unBlockUser($id)
    {
        $db = new Connect();
        $select = "UPDATE Khach_hang SET block = 0 WHERE id_KhachHang = $id";
        $result = $db->exec($select);
        return $result;
    }
}
