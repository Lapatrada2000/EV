<?php
/*
* M_evs_identification
* set identification management
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/ 
/*
* M_evs_identification
* set identification management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
?>
<?php
include_once("Da_evs_identification.php");

/*
* M_evs_identification
* set identification management
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/ 
/*
* M_evs_identification
* set identification management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/
class M_evs_identification extends Da_evs_identification {
    
	/*
	* get_identification_all
	* get data to database
	* @input -
	* @output data identification
	* @author 	Jakkarin Pimpaeng
	* @Create Date 2563-10-18
	*/
    function get_identification_all() {	
		$sql = "SELECT * 
				FROM evs_database.evs_identification";
        $query = $this->db->query($sql);
		return $query;
	}
	// get_identification_all 

	/*
	* get_category_identification_by_position_sort
	* Get Category Weight by position ID from database
	* @input position ID
	* @output Category Weight by position ID
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2563-11-20
	*/
	function get_identification_by_position_sort(){
		$sql = "SELECT * 
				FROM evs_database.evs_category
				LEFT JOIN evs_database.evs_identification
				ON idf_ctg_id = ctg_id
				where idf_pos_id=?
				group by idf_identification_detail_en
				order by idf_identification_detail_en ASC ";
        $query = $this->db->query($sql, array($this->idf_pos_id));
		return $query;

	}
	//get_category_identification_by_position_sort

	/*
	* get_identification_all_by_pos
	* get data to database
	* @input -
	* @output data identification
	* @author 	Tanadon Tangjaimongkhon
	* @Create Date 2564-04-10
	*/
    function get_identification_all_by_pos() {	
		$sql = "SELECT * 
				FROM evs_database.evs_identification
				where idf_pos_id = ?";
        $query = $this->db->query($sql, array($this->idf_pos_id));
		return $query;
	}
	// get_identification_all_by_pos 



	

} 
?>