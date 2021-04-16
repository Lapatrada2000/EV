<?php
/*
* Da_evs_key_component
* Key Component of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_key_component
* Key Component of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_key_component
* Key Component of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_key_component
* Key Component of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
class Da_evs_key_component extends evs_model {		
	
	public $kcp_id; //Number Sequence	
	public $kcp_key_component_detail_en; //compentency detaIl english
	public $kcp_key_component_detail_th; //compentency detaIl thai	
	public $kcp_year; //Year of evaluate	
	public $kcp_cpn_id; //Competency Sequence	

	function __construct() {
		parent::__construct();
		

	}
	/*
	* insert
	* Insert Key Compentency into database
	* @input kcp_compentency_detal, kcp_cpn_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* insert
	* Insert Key Compentency into database
	* @input kcp_compentency_detal, kcp_cpn_id
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function insert() {
	 	$sql = "INSERT INTO evs_database.evs_key_component (kcp_key_component_detail_en, kcp_key_component_detail_th, kcp_cpn_id)
	 			VALUES(?, ?, ?)";
		 
	 	$this->db->query($sql, array($this->kcp_key_component_detail_en, $this->kcp_key_component_detail_th, $this->kcp_cpn_id));
	
	 }

	/*
	* update
	* Update Key Compentency into database
	* @input kcp_id, kcp_compentency_detal, kcp_year, kcp_cpn_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* update
	* Update Key Compentency into database
	* @input kcp_id, kcp_compentency_detal, kcp_year, kcp_cpn_id
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function update() {

	 	$sql = "UPDATE evs_database.evs_key_component 
	 			SET	kcp_key_component_detail_en=?, kcp_key_component_detail_th=?, kcp_cpn_id=? 
	 			WHERE kcp_id=?";
		
		$this->db->query($sql, array( $this->kcp_key_component_detail_en, $this->kcp_key_component_detail_th, $this->kcp_cpn_id, $this->kcp_id));
		
	 }

	/*
	* delete
	* Delete Key Compentency from database
	* @input kcp_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_key_component
	 			WHERE kcp_id=?";
	 	$this->db->query($sql, array($this->kcp_id));
		
	 }

	/*
	* get_by_key
	* Get Key Compentency from database
	* @input kcp_id
	* @output kcp_id, kcp_compentency_detal, kcp_year, kcp_cpn_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28
	*/
	/*
	* get_by_key
	* Get Key Compentency from database
	* @input kcp_id
	* @output kcp_id, kcp_compentency_detal, kcp_year, kcp_cpn_id
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_key_component
				WHERE kcp_id=?";
		$this->db->query($sql, array($this->kcp_id));
		return $query;
	}

	
}	 