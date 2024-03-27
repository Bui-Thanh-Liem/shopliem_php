<?php
    class Nav {
        function getAllNav() {
            $db = new Connect();
            $select = "SELECT * FROM `nav`";
            $result = $db->getList($select);
            return $result;
        }
    }
?>