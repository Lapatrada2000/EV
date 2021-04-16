<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Evs_manage_group extends MainController {

	function manage_group_table(){
		$this->output("consent/manage_group/v_manage_group_table");
	}
    function manage_group(){
		$this->output("consent/manage_group/v_manage_group");
	}
	// function indicator main()






}
