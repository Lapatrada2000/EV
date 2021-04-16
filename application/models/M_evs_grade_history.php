<?php
/*
* M_evs_category
* set category management
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/ 
/*
* M_evs_category
* set category management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/ 
?>
<?php
include_once("Da_evs_grade_history.php");

/*
* M_evs_category
* set category management
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/
/*
* M_evs_category
* set category management
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/  
class M_evs_grade_history extends Da_evs_grade_history {

	/*
	* get_all
	* get data to database
	* @input -
	* @output data category
	* @author 	Jakkarin Pimpaeng
	* @Create Date 2563-09-01
	*/
    function get_all() {	
		$sql = "SELECT * 
				FROM evs_database.evs_grade_history";
        $query = $this->db->query($sql);
		return $query;
	}
	//get_category_all

	

} 
?>