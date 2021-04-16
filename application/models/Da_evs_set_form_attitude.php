<?php
/*
* Da_evs_set_form_attitude
* Category Weight of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/
/*
* Da_evs_set_form_attitude
* Category Weight of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/  
/*
* Da_evs_set_form_attitude
* Category Weight of Position Management
* @author Jakkarin pimpaeng
* @update Date 2563-12-08
*/  
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_set_form_attitude
* Category Weight of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_set_form_attitude
* Category Weight of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
/*
* Da_evs_set_form_attitude
* Category Weight of Position Management
* @author Jakkarin pimpaeng
* @update Date 2563-12-08
*/
class Da_evs_set_form_attitude extends evs_model {		
	public $sft_id; // category weight ID
	public $sft_weight; // weight of category
	public $sft_pay_id; // year
	public $sft_pos_id; // Position ID
	public $sft_ctg_id; // category ID
	
	function __construct() {
		parent::__construct();
		
	}
	/*
	* insert
	* Insert Category Weight into database
	* @input  sft_weight, sft_pos_id, sft_ctg_id, sft_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* insert
	* Insert Category Weight into database
	* @input  sft_weight, sft_pos_id, sft_ctg_id, sft_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function insert() {
	 	 
	 	$sql = "INSERT INTO evs_database.evs_set_form_attitude (sft_weight, sft_pos_id, sft_ctg_id, sft_pay_id)
	 			VALUES(?, ?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->sft_weight, $this->sft_pos_id, $this->sft_ctg_id, $this->sft_pay_id));
	
	 }

	/*
	* update
	* update Category Weight into database
	* @input  sft_weight, sft_pos_id, sft_ctg_id, sft_id, sft_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* update
	* update Category Weight into database
	* @input  sft_weight, sft_pos_id, sft_ctg_id, sft_id, sft_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function update() {
	 	
	 	$sql = "UPDATE evs_database.evs_set_form_attitude 
	 			SET	sft_weight=?, sft_pos_id=?, sft_ctg_id=?, sft_pay_id=?
	 			WHERE sft_id=?";
		
		$this->db->query($sql, array($this->sft_weight, $this->sft_pos_id, $this->sft_ctg_id,$this->sft_id, $this->sft_pay_id));
		
	 }

	/*
	* delete
	* Delete Category Weight from database
	* @input sft_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* delete
	* Delete Category Weight from database
	* @input sft_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function delete() {
	 
	 	$sql = "DELETE FROM evs_database.evs_set_form_attitude
	 			WHERE sft_pos_id=?";
	 	$this->db->query($sql, array($this->sft_pos_id));
		
	 }
	 
	/*
	* get_by_key
	* Get Category Weight from database
	* @input sft_id
	* @output sft_id, sft_weight, sft_pay_id, sft_pos_id, sft_ctg_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* get_by_key
	* Get Category Weight from database
	* @input sft_id
	* @output sft_id, sft_weight, sft_pay_id, sft_pos_id, sft_ctg_id
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_attitude
				WHERE sft_pos_id = ? AND sft_pay_id = ?";
		$query = $this->db->query($sql, array($this->sft_pos_id ,$this->sft_pay_id));
		return $query;
	}

	
}	