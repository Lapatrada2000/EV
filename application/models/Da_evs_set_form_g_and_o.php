<?php
/*
* Da_evs_set_form_g_and_o
* set form G&O management 
* @author Tanadon Tangjaimongkhon
* @Create Date 2563-10-26
*/
/*
* Da_evs_set_form_g_and_o
* set form G&O management 
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/

include_once("evs_model.php");

/*
* Da_evs_set_form_g_and_o
* set form G&O management 
* @author Tanadon Tangjaimongkhon
* @Create Date 2563-10-26
*/
/*
* Da_evs_set_form_g_and_o
* set form G&O management 
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
class Da_evs_set_form_g_and_o extends evs_model {		
	
	public $sfg_id; //Number Sequence	
    public $sfg_index_level; //index field of rating	
    public $sfg_index_ranges; //index field of ranges	
	public $sfg_pos_id; //Position Sequence	
	public $sfg_pay_id; //Year Evaluation	


	function __construct() {
		parent::__construct();
	}
	/*
	* insert
	* Insert  index field, index field ranges, position id, sfg_pay_id
	* @input  sfg_index_level, sfg_index_ranges, stg_pos_id, sfg_pay_id
	* @output -
    * @author Tanadon Tangjaimongkhon
    * @Create Date 2563-10-26
	*/
	function insert() {
	 	$sql = "INSERT INTO evs_database.evs_set_form_g_and_o (sfg_index_level, sfg_index_ranges, sfg_pay_id, sfg_pos_id)
	 			VALUES(?, ?, ?, ?)";
		
		$this->db->query($sql, array($this->sfg_index_level, $this->sfg_index_ranges, $this->sfg_pay_id, $this->sfg_pos_id));
	 }
	 
	/*
	* update
	* update index field, index field ranges, position id, sfg_pay_id
	* @input sfg_id, sfg_index_level, sfg_index_ranges, stg_pos_id, sfg_pay_id
	* @output -
    * @author Tanadon Tangjaimongkhon
    * @Create Date 2563-10-26
	*/
	function update() {
	 	$sql = "UPDATE evs_database.evs_set_form_g_and_o 
	 			SET	sfg_index_level=?, sfg_index_ranges=?, sfg_pay_id=?
	 			WHERE sfg_pos_id=?";
		
	 	$this->db->query($sql, array($this->sfg_index_level , $this->sfg_index_ranges, $this->sfg_pay_id , $this->sfg_pos_id));
		
	 }
	/*
	* delete
	* Delete index field, index field ranges, position id
	* @input sfg_id, sfg_index_level, sfg_index_ranges, stg_pos_id
	* @output -
    * @author Tanadon Tangjaimongkhon
    * @Create Date 2563-10-26
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_set_form_g_and_o
	 			WHERE sfg_id=?";
	 	$this->db->query($sql, array($this->sfg_id));
	 }

	/*
	* get_by_key
	* Get index field, index field ranges, position id
	* @input sfg_id
	* @output sfg_id, sfg_index_level, sfg_index_ranges, stg_pos_id
    * @author Tanadon Tangjaimongkhon
    * @Create Date 2563-10-26
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_set_form_g_and_o
				WHERE sfg_id=?";
		$query = $this->db->query($sql, array($this->sfg_id));
		return $query;
	}

	
}	 