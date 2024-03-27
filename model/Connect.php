<?php
class Connect
{
    // thuộc tính
    var $db = null;

    // hàm tạo được gọi khi tạo 1 đối tượng
    public function __construct()
    {
        // kết nối với database
        $dsn = 'mysql:host=localhost;dbname=shopliem';

        // có user
        $user = 'root';
        $pass = ''; // nếu xài xampp và wampp thì bỏ trống

        // kết nối
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (\Throwable $th) {
            echo "Kết nối thất bại";
        }
    }

    // phương thức lấy về nhiều row
    function getList($select)
    {
        $result = $this->db->query($select);
        return $result;
    }

    // phương thức lấy về 1 row
    function getInstance($select)
    {
        $result = $this->db->query($select);
        $result = $result->fetch();
        return $result; // mảng
    }

    // để thực hiện câu lệnh insert, update, delete thì ai làm? exec
    function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }

    // để dữ liệu an toàn prepare
    function execp($query)
    {
        $statement = $this->db->prepare($query);
        return $statement;
    }
}
