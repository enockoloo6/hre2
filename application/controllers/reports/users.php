<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {

	
	public function index()
	{
	
		$this->load->view('user_reports');

	}
} 