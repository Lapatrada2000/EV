<?php
/*
* Da_evs_set_form_ability
* Competency Weight of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_set_form_ability
* Competency Weight of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
/*
* Da_evs_set_form_ability
* Competency Weight of Position Management
* @author Jakkarin Pimpaeng
* @update Date 2563-12-08
*/
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_set_form_ability
* Competency Weight of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_set_form_ability
* Competency Weight of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/
/*
* Da_evs_set_form_ability
* Competency Weight of Position Management
* @author Jakkarin Pimpaeng
* @update Date 2563-12-08
*/
class Da_evs_set_form_ability extends evs_model {		
	public $sfa_id; //Number Sequence	
	public $sfa_weight; //competency score	
	public $sfa_pay_id; //Year of evaluate	
	public $sfa_pos_id; //Position Sequence	
	public $sfa_cpn_id; //Competency Sequence	
	
	function __construct() {
		parent::__construct();
		
	}
	/*
	* insert
	* Insert Competency Weight into database
	* @input sfa_weight, sfa_pos_id, sfa_cpn_id, sfa_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* insert
	* Insert Competency Weight into database
	* @input sfa_weight, sfa_pos_id, sfa_cpn_id, sfa_pay_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function insert() {
	 	 
	 	$sql = "INSERT INTO evs_database.evs_set_form_ability (sfa_weight, sfa_pos_id, sfa_cpn_id, sfa_pay_id)
	 			VALUES( ?, ?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->sfa_weight, $this->sfa_pos_id, $this->sfa_cpn_id, $this->sfa_pay_id));
	
	 }

	/*
	* update
	* Update Competency Weight into database
	* @input sfa_id, sfa_weight, sfa_pay_id, sfa_pos_id, sfa_cpn_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* update
	* Update Competency Weight into database
	* @input sfa_id, sfa_weight, sfa_pay_id, sfa_pos_id, sfa_cpn_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function update() {
	 	$sql = "UPDATE evs_database.evs_set_form_ability 
	 			SET	sfa_weight=?, sfa_pay_id=? sfa_pos_id=? sfa_cpn_id=?  
	 			WHERE sfa_pos_id=?";
	 	$this->db->query($sql, array($this->sfa_id, $this->sfa_weight, $this->sfa_pay_id, $this->sfa_pos_id, $this->sfa_cpn_id));
		
	 }

	/*
	* delete
	* Delete Competency Weight from database
	* @input sfa_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* delete
	* Delete Competency Weight from database
	* @input sfa_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_set_form_ability
	 			WHERE sfa_pos_id=?";
	 	$this->db->query($sql, array($this->sfa_pos_id));
		
	 }
	 
	/*
	* get_by_key
	* Get Competency Weight from database
	* @input sfa_id
	* @output sfa_id, sfa_weight, sfa_pay_id, sfa_pos_id, sfa_cpn_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* get_by_key
	* Get Competency Weight from database
	* @input sfa_id
	* @output sfa_id, sfa_weight, sfa_pay_id, sfa_pos_id, sfa_cpn_id
	* @author Jakkarin Pimpaeng
	* @update Date 2563-12-08
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_ability
				WHERE sfa_pos_id=?";
		$query = $this->db->query($sql, array($this->sfa_pos_id));
		return $query;
	}

	
}	 