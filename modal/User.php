<?php
class User
{
    function nhapKhachHang($tenDangNhap, $hoVaTen, $matKhau, $email, $diaChi, $sdt)
    {
        $db = new Connect();
        $query = "INSERT INTO khach_hang (id_khachHang, tenDangNhap, email, matKhau, hoVaTen, sdt, diaChi) 
                    VALUES(null, '$tenDangNhap', '$email', '$matKhau', '$hoVaTen', '$sdt', '$diaChi')";
        $result = $db->exec($query);
        return $result;
    }

    function kiemTraTrungDangKi($tenDangNhap, $email)
    {
        $db = new Connect();
        $query = "SELECT kh.tenDangNhap, kh.email
                    FROM khach_hang kh 
                    WHERE kh.tenDangNhap = '$tenDangNhap' AND kh.email = '$email'";
        $result = $db->getInstance($query);
        return $result;
    }

    function kiemTraDangNhap($tenDangNhap, $matKhau)
    {
        $db = new Connect();
        $query = "SELECT kh.tenDangNhap
                    FROM khach_hang kh
                    WHERE kh.tenDangNhap = '$tenDangNhap' AND kh.matKhau = '$matKhau'";
        $result = $db->getInstance($query);
        return $result;
    }

    function logUser($tenDangNhap)
    {
        $db = new Connect();
        $query = "SELECT kh.tenDangNhap, kh.email, kh.hoVaTen, kh.sdt, kh.diaChi
                    FROM khach_hang kh
                    WHERE kh.tenDangNhap = '$tenDangNhap'";
        $result = $db->getInstance($query);
        return $result;
    }
}
