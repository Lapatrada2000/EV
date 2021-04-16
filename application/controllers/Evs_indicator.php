<?php
/*
* Evs_indicator
* Indicator by form 
* @author 	Jakkarin PimPang
* @Create Date 2563-09-10
*/
/*
* Evs_indicator
* Indicator by form 
* @author 	Jakkarin PimPang
* @Update Date 2563-10-3
*/
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

/*
* Evs_indicator
* Indicator by form 
* @author 	Jakkarin PimPang
* @Create Date 2563-09-10
*/
/*
* Evs_indicator
* Indicator by form 
* @author 	Jakkarin PimPang
* @Update Date 2563-10-03
*/
class Evs_indicator extends MainController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 
	/*
	* main_indicator
	* Display v_main_indicator
	* @input 
	* @output 
	* @author Jakkarin PimPang
	* @Create Date 2563-09-15
	*/
	function main_indicator(){
		$this->output("consent/indicator/v_indicator_index");
	}
	// function main_indicator()


	

}