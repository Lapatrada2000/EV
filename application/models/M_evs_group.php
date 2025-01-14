<?php
/*
* M_evs_group
* M_evs_group
* @author 	Tippawan Aiemsaad
* @Create Date 2564-04-08
*/ 
?>
<?php
include_once("Da_evs_group.php");

class M_evs_group extends Da_evs_group {
	/*
	* get_all
	* Get All Group from database
	* @input  -
	* @output Group all
	* @author 	Tippawan Aiemsaad
	* @Create Date 2564-04-08
	*/
	function get_all(){	
		$sql = "SELECT * 
				FROM evs_database.evs_group" ;
		$query = $this->db->query($sql);
		return $query;
	}//get_all WHERE NOT pos_psl_id=6
	
	/*
	* get_all
	* Get All Group from database
	* @input  -
	* @output Group all
	* @author 	Tippawan Aiemsaad
	* @Create Date 2564-04-08
	*/
	function get_all_com(){	
		$sql = "SELECT *
				FROM evs_database.evs_group as evg
				WHERE gru_company_id = ?";
		$query = $this->db->query($sql, array($this->gru_company_id));
		return $query;
	
	}//get_all_com  INNER JOIN dbmc.employee as emp ON emp.Emp_ID = evg.gru_head_dept
	
	

	
	
	
	
} 
?>
