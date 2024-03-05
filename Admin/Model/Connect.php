<?php
class Connect
{
	var $db = null;
	public function __construct()
	{
		$dsn = 'mysql:host=localhost;dbname=shopliem';
		$user = 'root';
		$pass = '';
		$this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}
	// lấy đúng một row
	public function getInstance($select)
	{
		$results = $this->db->query($select);
		$result = $results->fetch();
		return $result;
	}

	// Lấy nhiều rows
	public function getList($select)
	{
		$results = $this->db->query($select);
		return ($results);
	}

	public function exec($query)
	{
		$results = $this->db->exec($query);
		return ($results);
	}
}
