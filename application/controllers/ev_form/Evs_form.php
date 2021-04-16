
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController_avenxo.php");

/*
* Evs_form
* Form
* @author 	Kunanya Singmee
* @Create Date 2564-04-05
*/

class Evs_form extends MainController_avenxo {

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
	* index
	* @input 
	* @output 
	* @author 	Kunanya Singmee
	* @Create Date 2564-04-05
	*/
	function index()
	{
		$this->output('/consent/ev_form/v_main_form');
	}
	// function index()
	
	/*
	* createMBO
	* @input emp_id
	* @output infomation employee
	* @author 	Kunanya Singmee
	* @Create Date 2564-04-07
	*/
	function createMBO()
	{
		$emp_id = $this->input->post("emp_id");
		
		$this->load->model('M_evs_employee','memp');
		$this->memp->Emp_ID = $emp_id;
		$data['emp_info'] = $this->memp->get_by_empid();
		
		$this->output('/consent/ev_form/v_createMBO',$data);
	}
	// function index() $this->input->post
	
	
	function get_mbo_by_pos(){
		
		$pos = $this->input->post("pos");
		$this->load->model('M_evs_set_form_mbo','mesf');
		$this->mesf->sfm_pos_id = $pos;
		$data = $this->mesf->get_mbo()->row();
		
		echo json_encode($data);
	}
	// function get_mbo_by_pos
 
}
?>