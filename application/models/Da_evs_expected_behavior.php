<?php
/*
* Da_evs_expected_behavior
* Expected & behavior of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_expected_behavior
* Expected & behavior of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_expected_behavior
* Expected & behavior of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_expected_behavior
* Expected & behavior of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
class Da_evs_expected_behavior extends evs_model {		
	
	public $ept_id; //Number Sequence	
	public $ept_expected_detail_en; //expected behavior detail english	
	public $ept_expected_detail_th; //expected behavior detail thai	
	public $ept_year; //Year of evaluate	
	public $ept_pos_id; //Position Sequence	
	public $ept_kcp_id; //key compentency Sequence	


	function __construct() {
		parent::__construct();
	}
	/*
	* insert
	* Insert Expected & behavior into database
	* @input ept_expected_detail, ept_pos_id, ept_kcp_id 
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* insert
	* Insert Expected & behavior into database
	* @input ept_expected_detail, ept_pos_id, ept_kcp_id 
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function insert() {
	 	 
	 	$sql = "INSERT INTO evs_database.evs_expected_behavior (ept_expected_detail_en, ept_expected_detail_th, ept_pos_id, ept_kcp_id)
	 			VALUES(?, ?, ?, ?)";
	 	$this->db->query($sql, array($this->ept_expected_detail_en, $this->ept_expected_detail_th, $this->ept_pos_id, $this->ept_kcp_id));

	 }

	/*
	* update
	* Update Expected & behavior into database
	* @input ept_id, ept_expected_detail, ept_year, ept_pos_id, ept_kcp_id, ept_ps_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* update
	* Update Expected & behavior into database
	* @input ept_id, ept_expected_detail, ept_year, ept_pos_id, ept_kcp_id, ept_ps_id
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function update() {
	 	
	 	$sql = "UPDATE evs_database.evs_expected_behavior 
	 			SET	ept_expected_detail_en=?, ept_expected_detail_th=?, ept_pos_id=?, ept_kcp_id=?
	 			WHERE ept_id=?";
		
		$this->db->query($sql, array($this->ept_expected_detail_en, $this->ept_expected_detail_th, $this->ept_pos_id, $this->ept_kcp_id, $this->ept_id));
		
	 }

	/*
	* delete
	* Delete Expected & behavior from database
	* @input ept_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	
	 	$sql = "DELETE FROM evs_database.evs_expected_behavior
	 			WHERE ept_id=?";
	 	$this->db->query($sql, array($this->ept_id));
		
	 }

	/*
	* get_by_key
	* Get Expected & behavior from database
	* @input ept_id
	* @output ept_id, ept_expected_detail, ept_year, ept_pos_id, ept_kcp_id, ept_ps_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* get_by_key
	* Get Expected & behavior from database
	* @input ept_id
	* @output ept_id, ept_expected_detail, ept_year, ept_pos_id, ept_kcp_id, ept_ps_id
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_expected_behavior
				WHERE ept_id=?";
		$query = $this->db->query($sql, array($this->ept_id));
		return $query;
	}

	
}	 