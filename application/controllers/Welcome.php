<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['var'] = array('Hello' => 'World', 'Google' => 'Chrome');
		$this->load->view('Output',$data);
	}
}
