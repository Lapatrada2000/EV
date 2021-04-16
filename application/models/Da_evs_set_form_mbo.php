<?php
/*
* Da_evs_set_form_mbo
* Form MBO Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_set_form_mbo
* Form MBO Management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_set_form_mbo
* Form MBO Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_set_form_mbo
* Form MBO Management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
class Da_evs_set_form_mbo extends evs_model {		
	public $sfm_id; //Number Sequence	
	public $sfm_index_field	; //table index	
	public $sfm_pay_id; //Year of evaluate	
	public $sfm_pos_id; //Position Sequence	

	function __construct() {
		parent::__construct();

	}
	/*
	* insert
	* Insert Form MBO into database
	* @input sfm_id,sfn_index_field,sfm_pay_id,sfm_pos_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function insert() {
	 	$sql = "INSERT INTO evs_database.evs_set_form_mbo (sfm_index_field, sfm_pos_id, sfm_pay_id)
	 			VALUES(?, ?, ?)";
	 	$this->db->query($sql, array($this->sfm_index_field, $this->sfm_pos_id, $this->sfm_pay_id));
	 }

	/*
	* update
	* Update Form MBO into database
	* @input sfm_id,sfn_index_field,sfm_pos_id, sfm_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function update() {
	 	$sql = "UPDATE evs_database.evs_set_form_mbo 
	 			SET	sfm_index_field=?, sfm_pos_id=? , sfm_pay_id=?
	 			WHERE sfm_pos_id=?";
	 	$this->db->query($sql, array($this->sfm_index_field, $this->sfm_pos_id, $this->sfm_pay_id, $this->sfm_pos_id));
		
	 }
	/*
	* delete
	* Delete Form MBO from database
	* @input sfm_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_set_form_mbo
	 			WHERE sfm_id=?";
	 	$this->db->query($sql, array($this->sfm_id));
	 }
	 
	/*
	* get_by_key
	* Get Form MBO from database
	* @input sfm_id
	* @output sfm_id, sfn_index_field, sfm_pay_id, sfm_pos_id 
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_mbo
				WHERE sfm_pos_id = ?";
		$query = $this->db->query($sql, array($this->sfm_pos_id));
		return $query;
	}	
}	 