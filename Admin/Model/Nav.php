<?php
class Nav
{
    function getAllNav()
    {
        $db = new Connect();
        $select = "SELECT n.id_nav, n.name_nav, n.key_nav FROM nav n WHERE n.destroy != 1";
        $result = $db->getList($select);
        return $result;
    }

    function getNameNav($id)
    {
        $db = new Connect();
        $select = "SELECT n.name_nav, n.key_nav FROM nav n WHERE n.id_nav = $id";
        $result = $db->getInstance($select);
        return $result;
    }

    function themNav($ten, $key)
    {
        $db = new Connect();
        $select = "INSERT INTO nav(id_nav, name_nav, key_nav) VALUES(null, '$ten', '$key')";
        $result = $db->exec($select);
        return $result;
    }

    function capNhatNav($id, $ten, $key)
    {
        $db = new Connect();
        $select = "UPDATE nav SET name_nav = '$ten', key_nav = '$key' WHERE id_nav = '$id'";
        $result = $db->exec($select);
        return $result;
    }

    function xoaNav($id)
    {
        $db = new Connect();
        $select = "UPDATE nav SET destroy = 1 WHERE id_nav = '$id'";
        $result = $db->exec($select);
        return $result;
    }
}
