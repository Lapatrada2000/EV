<?php
/*
* Da_evs_competency
* Competency of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_competency
* Competency of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_competency
* Competency of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/
/*
* Da_evs_competency
* Competency of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/
class Da_evs_competency extends evs_model {		
	public $cpn_id; //Number Sequence	
	public $cpn_competency_detail_en; //competency detail english	
	public $cpn_competency_detail_tn; //competency detail thai	
	public $cpn_definition_detail_en; //competency definition english
	public $cpn_definition_detail_th; //competency definition thai

	function __construct() {
		parent::__construct();
		
	}
	/*
	* insert
	* Insert Competency into database
	* @input cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_en, cpn_definition_th
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* insert
	* Insert Competency into database
	* @input cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_en, cpn_definition_th
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function insert() {
	 	 
	 	$sql = "INSERT INTO evs_database.evs_competency   (cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_detail_en, cpn_definition_detail_th)
	 			VALUES(?, ?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->cpn_competency_detail_en, $this->cpn_competency_detail_th, $this->cpn_definition_detail_en, $this->cpn_definition_detail_th));
	 }

	/*
	* update
	* Update Competency into database
	* @input cpn_id,cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_en, cpn_definition_th
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* update
	* Update Competency into database
	* @input cpn_id,cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_en, cpn_definition_th
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function update() {
	 	
	 	$sql = "UPDATE evs_database.evs_competency 
	 			SET	cpn_competency_detail_en=?, cpn_competency_detail_th=?, cpn_definition_detail_en=? , cpn_definition_detail_th=?
	 			WHERE cpn_id=?";
		
		$this->db->query($sql, array($this->cpn_competency_detail_en, $this->cpn_competency_detail_th,$this->cpn_definition_detail_en,$this->cpn_definition_detail_th, $this->cpn_id));
		
	 }

	/*
	* delete
	* Delete Competency from database
	* @input cpn_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	
	 	$sql = "DELETE FROM evs_database.evs_competency
	 			WHERE cpn_id=?";
	 	$this->db->query($sql, array($this->cpn_id));
		
	 }
	
	/*
	* get_by_key
	* Get Competency from database
	* @input cpn_id
	* @output cpn_id,cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_en, cpn_definition_th
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* get_by_key
	* Get Competency from database
	* @input cpn_id
	* @output cpn_id,cpn_competency_detail_en, cpn_competency_detail_th, cpn_definition_en, cpn_definition_th
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_competency
				WHERE cpn_id=?";
		$query = $this->db->query($sql, array($this->cpn_id));
		return $query;
	}

	
}	