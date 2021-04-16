<?php
/*
* evs_model
* -
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/ 
/*
* evs_model
* -
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/ 
?>
<?php
/*
* evs_model
* -
* @author 	Jakkarin Pimpaeng
* @Create Date 2563-09-01
*/
/*
* evs_model
* -
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-4
*/ 
class evs_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->evs = $this->load->database('evs', TRUE);
		
		//$this->umsold = $this->load->database('umsold', TRUE);
	}


}

?>