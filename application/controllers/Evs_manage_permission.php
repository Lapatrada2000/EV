<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Evs_manage_permission extends MainController {

	function manage_permission_table(){
		$this->output("consent/manage_permission/v_manage_permission_table");
	}
    function manage_permission(){
		$this->output("consent/manage_permission/v_manage_permission");
	}
	// function indicator main()






}
