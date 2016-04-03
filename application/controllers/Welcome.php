<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index($page = "about")
	{
		$data['title'] = $page;
		$navdata['Category'] = array("Food","restro","fashon","hello","world","sflds","vdkjs","svkskdvbsk","sdvbsbdv","sbkbd","bcjhbdc","bdhbcz",
		"ckjd be u","acbc","More");
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav',$navdata);
		$this->load->view('pages/about',$data);
		$this->load->view('templates/footer');
	}
}
