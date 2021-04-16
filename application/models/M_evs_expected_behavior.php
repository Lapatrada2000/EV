<?php
/*
* M_evs_expected_behavior
* set expected behavior management
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/ 
/*
* M_evs_expected_behavior
* set expected behavior management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
?>
<?php
include_once("Da_evs_expected_behavior.php");

/*
* M_evs_expected_behavior
* set expected behavior management
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/
/*
* M_evs_expected_behavior
* set expected behavior management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
class M_evs_expected_behavior extends Da_evs_expected_behavior {

	/*
	* get_all
	* Get all indicator by ability from database
	* @input  -
	* @output expected behavior data
	* @author Tanadon Tangjaimongkhon
	* @Create Date 2563-09-29
	*/

	function get_all() {	
		$sql = "SELECT * 
				FROM evs_database.evs_expected_behavior";
		$query = $this->db->query($sql);
		return $query;
	}//get_all

	/*
	* get_all_by_pos
	* Get all indicator by ability from database
	* @input  -
	* @output expected behavior data
	* @author Tanadon Tangjaimongkhon
	* @Create Date 2564-03-10
	*/

	function get_all_by_pos() {	
		$sql = "SELECT * 
				FROM evs_database.evs_expected_behavior
				left join evs_database.evs_key_component
				on kcp_id = ept_kcp_id
				";
		$query = $this->db->query($sql );
		return $query;
	}//get_all_by_pos

	/*
	* get_insert
	* get data for insert in to database
	* @input kcp_id
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/
	function get_insert() {	
		$sql = "SELECT * 
				FROM evs_database.evs_expected_behavior
				INNER join dbmc.position
				on ept_pos_id = pos_id
				WHERE ept_kcp_id=?";
		$query = $this->db->query($sql, array($this->ept_kcp_id));
		return $query;
	}//get_insert

	/*
	* get_expecandpos
	* get data to database
	* @input -
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/
	function get_expecandpos() {	
		$sql = "SELECT * 
				FROM evs_database.evs_expected_behavior
				INNER join dbmc.position
				on ept_pos_id = pos_id";
		$query = $this->db->query($sql);
		return $query;
	}//get_expecandpos

	/*
	* get_all_key_component_by_id
	* get data by id to database 
	* @input position id and component id
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/	
	function get_all_key_component_by_id(){	
		$sql = "SELECT * 
				from evs_database.evs_expected_behavior as ept
                inner join evs_database.evs_key_component as kcp 
                on ept.ept_kcp_id = kcp.kcp_id
                inner join evs_database.evs_competency as cpn
				on kcp.kcp_cpn_id = cpn.cpn_id
				where ept.ept_pos_id = ? AND kcp.kcp_cpn_id = ?
				group by kcp_key_component_detail_en
				order by kcp_key_component_detail_en ASC";
		$query = $this->db->query($sql ,array($this->ept_pos_id,$this->kcp_cpn_id));
		return $query;
	}//get_all_key_component_by_id

	/*
	* get_all_expected_by_id
	* get data by id to database 
	* @input position id and component id
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/	
	function get_all_expected_by_id(){	
		$sql = "SELECT * 
				from evs_database.evs_expected_behavior as ept
                inner join evs_database.evs_key_component as kcp 
                on ept.ept_kcp_id = kcp.kcp_id
                inner join evs_database.evs_competency as cpn
				on kcp.kcp_cpn_id = cpn.cpn_id
				where ept.ept_pos_id = ? AND ept.ept_kcp_id = ?
				group by ept_expected_detail_en
				order by ept_expected_detail_en ASC";
		$query = $this->db->query($sql ,array($this->ept_pos_id,$this->ept_kcp_id));
		return $query;
	}//get_all_expected_by_id

	/*
	* get_all_indicator_by_ability
	* get data to database
	* @input -
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/	
	function get_all_indicator_by_ability(){	
		$sql = "SELECT * 
				from evs_database.evs_expected_behavior as ept
                inner join evs_database.evs_key_component as kcp 
                on ept.ept_kcp_id = kcp.kcp_id
                inner join evs_database.evs_competency as cpn
                on kcp.kcp_cpn_id = cpn.cpn_id";
		$query = $this->db->query($sql);
		return $query;
	}//get_all_indicator_by_ability

	/*
	* get_all_indicator_by_ability_weight
	* get data to database
	* @input position id 
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/	
	function get_all_indicator_by_ability_weight(){	
		$sql = "SELECT * 
				from evs_database.evs_expected_behavior as ept
                inner join evs_database.evs_key_component as kcp 
                on ept.ept_kcp_id = kcp.kcp_id
                inner join evs_database.evs_competency as cpn
				on kcp.kcp_cpn_id = cpn.cpn_id
				inner join evs_database.evs_competency_weight as cpw
				on cpw.cpw_cpn_id = cpn.cpn_id
				where cpw.cpw_pos_id = ?
				order by cpw.cpw_pos_id ASC";
		$query = $this->db->query($sql ,array($this->cpw_pos_id));
		return $query;
	}//get_all_indicator_by_ability_weight

	/*
	* get_form_by_position_weight
	* get data to database
	* @input -
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-09-01
	*/	
	function get_form_by_position_weight($pos_ID){	
		$sql = "SELECT * 
				from evs_database.evs_expected_behavior as ept
                inner join evs_database.evs_key_component as kcp 
                on ept.ept_kcp_id = kcp.kcp_id
                inner join evs_database.evs_competency as cpn
				on kcp.kcp_cpn_id = cpn.cpn_id
				inner join evs_database.evs_competency_weight as cpw
				on cpw.cpw_cpn_id = cpn.cpn_id
				where = $pos_ID";
		$query = $this->db->query($sql);
		return $query;
	}//get_form_by_position_weight

	/*
	* get_all_competency_by_id
	* get data to database 
	* @input position id 
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-12-31
	*/
    function get_all_competency_by_id() {	
        $sql = "SELECT * 
				FROM evs_database.evs_competency
				LEFT JOIN evs_database.evs_key_component
				ON cpn_id = kcp_cpn_id
				LEFT JOIN evs_database.evs_expected_behavior
				ON ept_kcp_id = kcp_id
				WHERE ept_pos_id = ?
				group by cpn_competency_detail_en
				order by cpn_competency_detail_en ASC";	
		$query = $this->db->query($sql, array($this->ept_pos_id));
    	return $query;
	}//get_all_competency_by_id
	
	/*
	* get_all_indicator_by_ability_group_by
	* get data to database
	* @input position id and component id
	* @output expected behavior data
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2564-02-04
	*/	
	function get_all_indicator_by_ability_group_by(){	
		$sql = "SELECT * 
				from evs_database.evs_expected_behavior as ept
                inner join evs_database.evs_key_component as kcp 
                on ept.ept_kcp_id = kcp.kcp_id
                inner join evs_database.evs_competency as cpn
				on kcp.kcp_cpn_id = cpn.cpn_id
				WHERE ept_pos_id=? AND kcp_cpn_id=?
				group by ept_expected_detail_en
				order by kcp_key_component_detail_en ASC";
		$query = $this->db->query($sql ,array($this->ept_pos_id,$this->kcp_cpn_id));
		return $query;
	}//get_all_indicator_by_ability_group_by

    
	

} 
?>