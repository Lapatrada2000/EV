<?php
/*
* Da_evs_category
* Category of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_category
* Category of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_category
* Category of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/
/*
* Da_evs_category
* Category of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
class Da_evs_category extends evs_model {		
	
	public $ctg_id; //Number sequence	
	public $ctg_category_detail_en; //Category detail english	
	public $ctg_category_detail_th; //Category detail thai	

	function __construct() {
		parent::__construct();
	
	}

	/*
	* insert
	* Insert Category into database
	* @input ctg_category_name
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* insert
	* Insert Category into database
	* @input ctg_category_name
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function insert() {
	 
	 	$sql = "INSERT INTO evs_database.evs_category (ctg_category_detail_en, ctg_category_detail_th)
	 			VALUES(?, ?)";
		 
	 	$this->db->query($sql, array($this->ctg_category_detail_en, $this->ctg_category_detail_th));
	
	 }
	 
	/*
	* update
	* Update Category into database
	* @input ctg_id, ctg_category_name
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* update
	* Update Category into database
	* @input ctg_id, ctg_category_name
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function update() {
	
	 	$sql = "UPDATE evs_database.evs_category 
	 			SET	ctg_category_detail_en=?, ctg_category_detail_th=?
	 			WHERE ctg_id=?";
		
		$this->db->query($sql, array($this->ctg_category_detail_en, $this->ctg_category_detail_th, $this->ctg_id));
		 
	 }

	/*
	* delete
	* Delete Category from database
	* @input ctg_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* delete
	* Delete Category from database
	* @input ctg_id
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function delete() {
	 	
	 	$sql = "DELETE FROM evs_database.evs_category
	 			WHERE ctg_id=?";
	 	$this->db->query($sql, array($this->ctg_id));
		
	 }

	/*
	* get_by_key
	* Get Category from database
	* @input ctg_id
	* @output ctg_id, ctg_category_name
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* get_by_key
	* Get Category from database
	* @input ctg_id
	* @output ctg_id, ctg_category_name
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_category
				WHERE ctg_id=?";
		$query = $this->db->query($sql, array($this->ctg_id));
		return $query;
	}

	
}	 
?>