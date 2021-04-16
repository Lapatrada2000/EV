<?php
/*
* Da_evs_pattern_and_year
* Pattern & Year of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_pattern_and_year
* Pattern & Year of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_pattern_and_year
* Pattern & Year of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/
/*
* Da_evs_pattern_and_year
* Pattern & Year of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
class Da_evs_pattern_and_year extends evs_model {		
	
	public $pay_id; //Number Sequence	
	public $pay_year; //Year of evaluate	
	public $pay_pattern; //pattern of evaluate	

	function __construct() {
		parent::__construct();
		

	}
	/*
	* insert
	* Insert Pattern & Year into database
	* @input yap_year, yap_pattern
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function insert() {
	 	$sql = "INSERT INTO evs_database.evs_pattern_and_year 
				( evs_pattern_and_year.pay_year, evs_pattern_and_year.pay_pattern)
	 			VALUES(?, ?)";
		 
	 	$this->db->query($sql, array($this->pay_year, $this->pay_pattern));
	
	 }

	/*
	* update
	* Update Pattern & Year into database
	* @input yap_id, yap_year, yap_pattern
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function update() {
	 	$sql = "UPDATE evs_database.evs_pattern_and_year 
	 			SET	pay_year=?, pay_pattern=? 
	 			WHERE pay_id=?";
		
	 	$this->db->query($sql, array($this->pay_year, $this->pay_pattern, $this->pay_id));
		
	 }

	/*
	* delete
	* Delete Pattern & Year from database
	* @input yap_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_pattern_and_year
	 			WHERE pay_id=?";
	 	$this->db->query($sql, array($this->pay_id));
		
	 }
	 
	/*
	* get_by_key
	* Get Pattern & Year from database
	* @input yap_id
	* @output yap_id, yap_year, yap_pattern
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_pattern_and_year
				WHERE pay_id=?";
		$this->db->query($sql, array($this->pay_id));
		return $query;
	}

	
}	 