<?php
/*
* M_evs_set_from_mbo
* -
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/ 
/*
* M_evs_set_from_mbo
* -
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
/*
* M_evs_set_from_mbo
* -
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/ 
?>
<?php
include_once("Da_evs_set_form_mbo.php");

/*
* M_evs_set_from_mbo
* -
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/
/*
* M_evs_set_from_mbo
* -
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
/*
* M_evs_set_form_g_and_o
* -
* @author Piyasak Sirjan
* @Update Date 2564-01-4
*/

class M_evs_set_form_mbo extends Da_evs_set_form_mbo {

    /*
	* get_all_by_key_by_year
	* Get Form MBO from database by id by year
	* @input sfm_pos_id , sfm_pay_id
	* @output sfm_id, sfn_index_field, sfm_pay_id, sfm_pos_id , sfm_pay_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	* @Update Date 2564-01-4
	*/
	function get_all_by_key_by_year() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_mbo
				WHERE sfm_pos_id = ? AND sfm_pay_id = ?";
		$query = $this->db->query($sql, array($this->sfm_pos_id, $this->sfm_pay_id));
		return $query;
	}//get_all_by_key_by_year
	
	
	function get_mbo() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_mbo
				WHERE sfm_pos_id=?";
		$query = $this->db->query($sql, array($this->sfm_pos_id));
		return $query;
	}//get_mbo
	

} 
?>