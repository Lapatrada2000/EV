<?php
/*
* M_evs_position_level
* set position level management 
* @author Jakkarin Pimpaeng
* @Create Date 2563-10-25
*/ 
/*
* M_evs_position_level
* set position level management 
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
?>
<?php
include_once("Da_evs_position_level.php");

/*
* M_evs_position_level
* set position level management 
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/
/*
* M_evs_position_level
* set position level management 
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-2
*/
class M_evs_position_level extends Da_evs_position_level {

	/*
	* get_all
	* @input -
	* @output poition level all
	* @author Tanadon Tangjaimongkhon
	* @Update Date 2563-10-2
	*/
	function get_all() {	
		$sql = "SELECT * 
				FROM dbmc.position_level
				left join dbmc.position 
				on position.position_level_id = position_level.psl_id
				WHERE NOT psl_id = 6
				GROUP BY position.position_level_id,position_level.psl_id
				ORDER BY position_level.psl_id";
		$query = $this->db->query($sql);
		return $query;
	}//get_all

} 
?>