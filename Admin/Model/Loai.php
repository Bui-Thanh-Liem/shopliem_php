<?php
    class loai{
        function getLoai()
        {
            $db=new connect();
            $select="select * from loai_san_pham";
            $result=$db->getList($select);
            return $result;
        }
    }
?>