<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('Base_Model.php');
class Users_model extends Base_Model {
	public function __construct()
    {
		parent::__construct();
    }
	
	public function insert ($name, $password, $cost){        
        $sql = "INSERT INTO Users(name, password, cost) VALUES ('%s', '%s', %d)";
		$sql = sprintf($sql, $name, $password, $cost);
		$this->db->query ($sql);
		echo $this->db->affected_rows();
	}	
	public function login ($name, $password){        
		$sql = "SELECT * FROM Users WHERE name = '%s' AND password='%s'";	
		$sql = sprintf($sql, $name, $password);
		echo $sql;
		$query = $this->db->query($sql);
		return $query->row_array();		
	}	
}