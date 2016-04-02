<?php

class Landing extends CI_Controller {

	function view( $page = 'home'){
		
		$this->load->helper('url');
		
		$filename = 'application/views/pages/'.$page.'.php';
		if(!file_exists($filename)){
			
			show_404();
		}
		
		$data['title'] = $page;
		$navdata['Category'] = array("Food","restro","fashon","hello","world","sflds","vdkjs","svkskdvbsk","sdvbsbdv","sbkbd","bcjhbdc","bdhbcz",
		"ckjd be u","acbc","More");
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav',$navdata);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
	
	/*public function index()
	{
		$page = 'home';
		
		$filename = 'application/views/pages/'.$page.'.php';
		if(!file_exists($filename)){
			
			show_404();
		}
		 
		$this->load->view('pages/'.$page);
	}
	 * 
	 */
	
}
