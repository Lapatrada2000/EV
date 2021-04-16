<?php
/*
* Da_evs_person_base
* Person Information of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_person_base
* Person Information of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-26
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_person_base
* Person Information of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_person_base
* Person Information of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-26
*/ 
class Da_evs_person_base extends evs_model {		
	
	public $per_id; //Number Sequence	
	public $per_name_en_title; //Prefix Name	
	public $per_name_en; //name Eng	
	public $per_name_en_sur; //Lastname Eng
	public $per_pos_id; // 	Position
	public $per_Company_ID; //company
	public $per_Sectioncode_ID; // Sec code	

	function __construct() {
		parent::__construct();
		

	}
	/*
	* insert
	* Insert Person Information into database
	* @input per_name_en_title, per_name_en,per_name_en_sur, per_pos_id, per_Company_ID, per_Sectioncode_ID
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function insert() {
	 	$sql = "INSERT INTO evs_person_base (per_name_en_title, per_name_en,per_name_en_sur, per_pos_id, per_Company_ID, per_Sectioncode_ID)
	 			VALUES(?, ?, ?, ?, ?, ?, ?)";
	 	$this->db->query($sql, array($this->per_name_en_title, $this->per_name_en, $this->per_name_en_sur, $this->per_pos_id, $this->per_Company_ID, $this->per_Sectioncode_ID));
	
	 }

	/*
	* update
	* Update Person Information into database
	* @input per_id, per_name_en_title, per_name_en,per_name_en_sur, per_pos_id, per_Company_ID, per_Sectioncode_ID
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function update() {
	 	$sql = "UPDATE evs_person_base 
	 			SET	per_name_en_title=?, per_name_en=?, per_name_en_sur=?, per_pos_id=?, per_Company_ID=?, per_Sectioncode_ID=?
	 			WHERE per_id=?";
		
	 	$this->db->query($sql, array($this->per_id, $this->per_name_en_title, $this->per_name_en, $this->per_name_en_sur, $this->per_pos_id, $this->per_Company_ID, $this->per_Sectioncode_ID));
		
	 }

	/*
	* delete
	* Delete Person Information from database
	* @input per_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_person_base
	 			WHERE per_id=?";
	 	$this->db->query($sql, array($this->per_id));
		
	 }
	 
	/*
	* get_by_key
	* Get Person Information from database
	* @input per_id
	* @output per_id, per_name_en_title, per_name_en,per_name_en_sur, per_pos_id, per_Company_ID, per_Sectioncode_ID
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_person_base
				WHERE per_id=?";
		$this->db->query($sql, array($this->per_id));
		return $query;
	}

	
}	 