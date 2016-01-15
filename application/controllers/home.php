<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
		// pass the variable into view.
		$data['hello']= " woher komst du"; 		
		$data['hello2']= "what an old man sees seating a young man standing and straining his neck cannot see";
			
	
		$this->load->view('home',$data);

	}
} 