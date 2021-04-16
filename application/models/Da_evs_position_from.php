<?php
/*
* Da_evs_position_from
* Person of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_position_from
* Person of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
?>
<?php
include_once("evs_model.php");

/*
* Da_evs_position_from
* Person of Position Management
* @author Jakkarin Pimpaeng
* @Create Date 2563-09-28
*/ 
/*
* Da_evs_position_from
* Person of Position Management
* @author Tanadon Tangjaimongkhon
* @update Date 2563-10-04
*/ 
class Da_evs_position_from extends evs_model {		
	
	public $ps_id; //Number Sequence	
	public $ps_form_pe; //pe form name
	public $ps_form_ce; //ce form name	
	public $ps_ratio_pe; //pe ratio
	public $ps_ratio_ce; //ce ratio
	public $ps_ratio_atd_pe; //attendance ratio pe
	public $ps_ratio_atd_ce; //attendance ratio ce
	public $ps_status_form_pe; //status disable pe form
	public $ps_status_form_ce; //status disable ce form
	public $ps_status_set_form_pe; //status set form pe
	public $ps_status_set_form_ce; //status set form ce	
	public $ps_status_form_update; //status update form
	public $ps_pos_id; //Position Sequence	
	public $ps_pay_id; //pattern and year Sequence	

	function __construct() {
		parent::__construct();
		

	}
	/*
	* insert
	* Insert Person into database
	* @input ps_form_pe, ps_form_ce, ps_ratio_pe, ps_ratio_atd_pe, ps_ratio_ce, ps_ratio_atd_ce, ps_status_form_pe, ps_pos_id, ps_status_edit, ps_status_form_ce, ps_pay_id, ps_status_form_update
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28	
	*/
	/*
	* insert
	* Insert Person into database
	* @input ps_form_pe, ps_form_ce, ps_ratio_pe, ps_ratio_atd_pe, ps_ratio_ce, ps_ratio_atd_ce, ps_status_form_pe, ps_pos_id, ps_status_edit, ps_status_form_ce, ps_pay_id, ps_status_form_update
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26
	*/
	function insert() {
	 	$sql = "INSERT INTO evs_database.evs_position_from (ps_form_pe, 
		 								ps_form_ce, 
										ps_ratio_pe, 
										ps_ratio_atd_pe, 
										ps_ratio_ce, 
										ps_ratio_atd_ce, 
										ps_status_form_pe, 
										ps_pos_id,
										ps_status_form_ce, 
										ps_pay_id,
										ps_status_set_form_pe,
										ps_status_set_form_ce,
										ps_status_form_update)
	 			VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		 
		$this->db->query($sql, array($this->ps_form_pe, $this->ps_form_ce, $this->ps_ratio_pe, $this->ps_ratio_atd_pe, $this->ps_ratio_ce, $this->ps_ratio_atd_ce, $this->ps_status_form_pe, $this->ps_pos_id, $this->ps_status_form_ce, $this->ps_pay_id, $this->ps_status_set_form_pe, $this->ps_status_set_form_ce, $this->ps_status_form_update));
	
	 }

	/*
	* update
	* Update Person into database
	* @input ps_pos_id, ps_form_pe, ps_form_ce, ps_ratio_pe, ps_ratio_atd_pe, ps_ratio_ce, ps_ratio_atd_ce, ps_status_form_pe, ps_status_edit, ps_status_form_ce, ps_status_set_form_ce, ps_status_from_update
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28	
	*/
	/*
	* update
	* Update Person into database
	* @input ps_pos_id, ps_form_pe, ps_form_ce, ps_ratio_pe, ps_ratio_atd_pe, ps_ratio_ce, ps_ratio_atd_ce, ps_status_form_pe, ps_status_edit, ps_status_form_ce, ps_status_set_form_ce, ps_status_from_update
	* @output -
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26	
	*/
	function update() {
	 	$sql = "UPDATE evs_database.evs_position_from 
	 			SET ps_form_pe = ? 
				 , ps_form_ce = ? 
				 , ps_ratio_pe = ? 
				 , ps_ratio_atd_pe = ? 
				 , ps_ratio_ce = ? 
				 , ps_ratio_atd_ce = ? 
				 , ps_status_form_pe = ?
				 , ps_status_form_ce = ?
				 , ps_status_set_form_pe = ?
				 , ps_status_set_form_ce = ?
				 , ps_status_form_update = ?
	 			WHERE ps_pos_id = ?";
		
		 $this->db->query($sql, array($this->ps_form_pe, $this->ps_form_ce, $this->ps_ratio_pe, $this->ps_ratio_atd_pe, 
		 $this->ps_ratio_ce, $this->ps_ratio_atd_ce, $this->ps_status_form_pe,
		 $this->ps_status_form_ce, $this->ps_status_set_form_pe, $this->ps_status_set_form_ce, $this->ps_status_form_update, $this->ps_pos_id));
		
	 }

	/*
	* delete
	* Delete Person from database
	* @input ps_id
	* @output -
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28	
	*/
	function delete() {
	 	$sql = "DELETE FROM evs_database.evs_position_from
	 			WHERE ps_id=?";
	 	$this->db->query($sql, array($this->ps_id));
		
	 }
	 
	/*
	* get_by_key
	* Get Person from database
	* @input ps_id
	* @output ps_pos_id, ps_form_pe, ps_form_ce, ps_ratio_pe, ps_ratio_atd_pe, ps_ratio_ce, ps_ratio_atd_ce, ps_status_form_pe, ps_pos_id, ps_status_edit, ps_status_form_ce, ps_pay_id
	* @author Jakkarin Pimpaeng
	* @Create Date 2563-09-28	
	*/
	/*
	* get_by_key
	* Get Person from database
	* @input ps_id
	* @output ps_pos_id, ps_form_pe, ps_form_ce, ps_ratio_pe, ps_ratio_atd_pe, ps_ratio_ce, ps_ratio_atd_ce, ps_status_form_pe, ps_pos_id, ps_status_edit, ps_status_form_ce, ps_pay_id
	* @author Tanadon Tangjaimongkhon
	* @update Date 2563-10-26	
	*/
	function get_by_key() {	
		$sql = "SELECT * 
				FROM evs_database.evs_position_from
				WHERE ps_pos_id=? AND ps_pay_id = ?";
		$query = $this->db->query($sql, array($this->ps_pos_id, $this->ps_pay_id));
		return $query;
	}

	
}	 