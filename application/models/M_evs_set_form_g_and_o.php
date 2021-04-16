<?php
/*
* M_evs_set_form_g_and_o
* set form G&O management 
* @author Jakkarin Pimpaeng
* @Create Date 2563-10-26
*/
/*
* M_evs_set_form_g_and_o
* set form G&O management 
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
/*
* M_evs_set_form_g_and_o
* set form G&O management 
* @author Piyasak Sirjan
* @Update Date 2564-01-4
*/

include_once("Da_evs_set_form_g_and_o.php");

/*
* M_evs_set_form_g_and_o
* set form G&O management 
* @author Jakkarin Pimpaeng
* @Create Date 2563-10-26
*/
/*
* M_evs_set_form_g_and_o
* set form G&O management 
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
/*
* M_evs_set_form_g_and_o
* set form G&O management 
* @author Piyasak Sirjan
* @Update Date 2564-01-4
*/

class M_evs_set_form_g_and_o extends Da_evs_set_form_g_and_o {

    /*
	* get_all_by_key_by_year
	* Get index field, index field ranges, position id, year id
	* @input sfg_id
	* @output sfg_id, sfg_index_level, sfg_index_ranges, stg_pos_id, sfg_pay_id
    * @author Tanadon Tangjaimongkhon
    * @Create Date 2563-12-26
	*/
	function get_all_by_key_by_year() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_g_and_o
				WHERE sfg_pos_id = ? AND sfg_pay_id = ?";
		$query = $this->db->query($sql, array($this->sfg_pos_id, $this->sfg_pay_id));
		return $query;
	}//get_all_by_key_by_year

	
	

} 
?>