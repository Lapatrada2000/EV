<?php
/*
* Da_evs_identification
* Identification of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_identification
* Identification of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");
/*
* Da_evs_identification
* Identification of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_identification
* Identification of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/
class Da_evs_identification extends evs_model {		
	
	public $idf_id; //Number Sequence	
	public $idf_identification_detail_en; //identification detail english	
	public $idf_identification_detail_th; //identification detail thai	
	public $idf_year; //Year of evaluate	
	public $idf_pos_id; //Position Sequence	
	public $idf_ctg_id; //Category Sequence	

	function __construct() {
		parent::__construct();
		

	}
	/*
	* insert
	* Insert Identification into database
	* @input idf_identification_detal, idf_pos_id, idf_ctg_id, idf_ps_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function insert() {
	 	 
	 	$sql = "INSERT INTO evs_database.evs_identification (idf_identification_detail_en, idf_identification_detail_th, idf_pos_id, idf_ctg_id)
	 			VALUES(?, ?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->idf_identification_detail_en, $this->idf_identification_detail_th, $this->idf_pos_id, $this->idf_ctg_id));
	
	 }

	/*
	* update
	* Update Identification into database
	* @input idf_id, idf_identification_detal, idf_pos_id, idf_ctg_id, idf_ps_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function update() {
	
	 	$sql = "UPDATE evs_database.evs_identification 
	 			SET	idf_identification_detail_en=?, idf_identification_detail_th=?, idf_pos_id=?, idf_ctg_id=?  
	 			WHERE idf_id=?";
		
		$this->db->query($sql, array($this->idf_identification_detail_en, $this->idf_identification_detail_th, $this->idf_pos_id, $this->idf_ctg_id, $this->idf_id));
		
	 }
	 
	/*
	* delete
	* Delete Identification from database
	* @input idf_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_identification
	 			WHERE idf_id=?";
	 	$this->db->query($sql, array($this->idf_id));
		
	 }

	 /*
	* get_by_key
	* Get Identification from database
	* @input  idf_id
	* @output idf_id, idf_identification_detal, idf_pos_id, idf_ctg_id, idf_ps_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_identification
				WHERE idf_id=?";
		$this->db->query($sql, array($this->idf_id));
		return $query;
	}


	
}	