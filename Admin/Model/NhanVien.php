<?php
class nhanvien
{
    function getUserAdmin($user, $pass)
    {
        $db = new Connect();
        $select = "SELECT * 
                    FROM nhan_vien nv 
                    WHERE nv.username = '$user' AND nv.matKhau = '$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
}
