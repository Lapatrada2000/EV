<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/MainController.php");

class Auth extends MainController
{

	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$this->load->view('auth/v_user_login');
	}

	public function check_login()
	{
		$this->load->model('auth/M_umuser', 'm_umuser');
		// some logic with MD5 to query
		$user = $this->m_umuser->check_login($_POST['username'], md5("O]O" . $_POST['password'] . "O[O"));
		// check it can log in ?
		if ($user == false) {
			redirect('index.php/auth/login', 'refresh');
		} else {
			// create a session to log in this main system
			foreach ($user->result_array() as $usr) {
				$this->session->set_userdata('UsID', $usr['UsID']);
				$this->session->set_userdata('UsPsCode', $usr['UsPsCode']);
				$this->session->set_userdata('UsLogin', $usr['UsLogin']);
				$this->session->set_userdata('UsDpID', $usr['UsDpID']);
				$this->session->set_userdata('UsName', $usr['UsName']);
				$this->session->set_userdata('dpName', $usr['dpName']);
				$this->session->set_userdata('UsWgID', $usr['UsWgID']);
				$this->session->set_userdata('UsAdmin', $usr['UsAdmin']);
				$this->session->set_userdata('logged_in', TRUE);
				break;
			}

			redirect('index.php/auth/main', 'refresh');
		}
	}

	public function main()
	{
		if (!empty($this->session->userdata('UsID'))) {
			$this->output_admin('auth/v_user_main');
		} else {
			redirect('index.php/auth/login', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('HOME');
		$this->session->unset_userdata('URL');
		$this->session->unset_userdata('MnID');
		$this->session->unset_userdata('MnURL');
		$this->session->unset_userdata('MnNameT');
		$this->session->unset_userdata('UsID');
		$this->session->unset_userdata('GpID');
		$this->session->unset_userdata('StID');
		$this->session->unset_userdata('UsPsCode');
		$this->session->unset_userdata('UsLogin');
		$this->session->unset_userdata('SysName');
		$this->session->unset_userdata('UsName');
		$this->session->unset_userdata('dpName');
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('GpName');
		$this->session->unset_userdata('UsWgID');
		$this->session->unset_userdata('UsAdmin');
		redirect('index.php/auth/login', 'refresh');
	}
}
