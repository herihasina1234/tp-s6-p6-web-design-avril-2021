<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('Base_Model.php');
class Statistique_model extends Base_Model {		
	public function insert ($region_id, $analyse, $cas, $gueris, $grave, $deces, $dateStatistique){        
        $sql = "INSERT INTO Statistiques(region_id, analyse, cas, gueris, grave, deces, dateStat) VALUES (%d, %d, %d, %d, %d, %d, '%s')";		
		$sql = sprintf($sql, $region_id, $analyse, $cas, $gueris, $grave, $deces, $dateStatistique);
		echo $sql;
		$this->db->query ($sql);
		echo $this->db->affected_rows();
	}	
	public function findAll ($curr_date){        
		$sql = "SELECT * FROM view_Statistiques WHERE dateStat='%s'";
		$sql = sprintf($sql, $curr_date);
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function findSumStat ($curr_date){        
		$sql = "SELECT * FROM view_sumStatistiques WHERE dateStat='%s'";
		$sql = sprintf($sql, $curr_date);
		$query = $this->db->query($sql);
		return $query->result_array();
	}	

	public function findStatActu (){        
		$sql = "SELECT * FROM view_sumStatistiquesNow";		
		$query = $this->db->query($sql);
		return $query->result_array();
	}	
}