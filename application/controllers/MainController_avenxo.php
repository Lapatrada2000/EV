<?php
/*
* MainCcontroller
* Form Management
* @input  -
* @output -
* @author Kunanya Singmee
* @Update Date 2564-04-05
*/

defined('BASEPATH') or exit('No direct script access allowed');

class MainController_avenxo extends CI_Controller
{

	public function headers()
	{
		$this->load->view('includes/template_avenxo/header');
	}

	public function javascript()
	{
		$this->load->view('includes/template_avenxo/javascript');
	}

	public function footer()
	{
		$this->load->view('includes/template_avenxo/footer');
	}

	public function topbar()
	{
		$this->load->view('includes/template_avenxo/topbar');
	}

	public function sidebar()
	{
		$this->load->view('includes/template_avenxo/sidebar');
	}

	public function output($body, $data = '')
	{
		$this->headers();
		$this->topbar();
		$this->sidebar();
		$this->javascript();
		$this->load->view($body, $data);
		$this->footer();
	}

}

?>