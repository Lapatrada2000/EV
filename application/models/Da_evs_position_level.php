<?php
/*
* Da_evs_position_level
* Position level Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-10-25
*/ 
/*
* Da_evs_position_level
* Position level Management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-25
*/
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_position_level
* Position level Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-10-25
*/ 
/*
* Da_evs_position_level
* Position level Management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-25
*/
class Da_evs_position_level extends evs_model {		
	
	public $psl_id; //Number Sequence	
	public $psl_position_level; //Position Level Sequence	

	function __construct() {
		parent::__construct();
	}
	/*
	* insert
	* Insert Position level into database
	* @input  psl_position_level
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-10-25
	*/
	function insert() {
	 	$sql = "INSERT INTO dbmc.evs_position_level (evs_position_level.psl_position_level)
	 			VALUES(?)";
		 
	 	$this->db->query($sql, array($this->psl_position_level));
	
	 }

	/*
	* update
	* Update Position level into database
	* @input  psl_position_level
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-10-25
	*/
	function update() {
	 	
	 	$sql = "UPDATE dbmc.evs_position_level 
	 			SET	evs_position_level.psl_position_level=?
	 			WHERE evs_position_level.psl_id=?";
		
	 	$this->db->query($sql, array($this->psl_position_level));
		
	 }

	/*
	* delete
	* Delete Position level into database
	* @input  psl_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-10-25
	*/
	function delete() {
	 	
	 	$sql = "DELETE FROM dbmc.evs_position_level
	 			WHERE evs_position_level.psl_id=?";
	 	$this->db->query($sql, array($this->psl_id));
		
	 }
	 
	/*
	* get_by_key
	* Get Position level into database
	* @input  psl_id
	* @output psl_position_level
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-10-25
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM dbmc.evs_position_level
				WHERE evs_position_level.psl_id=?";
		$query = $this->db->query($sql, array($this->psl_id));
		return $query;
	}

	
}