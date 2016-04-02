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
		
<<<<<<< HEAD
		$this->load->view('templates/header', $data);
		//$this->load->view('templates/nav');
		$this->load->view('pages/'.$page, $data);
=======
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav',$navdata);
		$this->load->view('pages/'.$page);
>>>>>>> 394563a39c8d518c90f70e3c5cd1cc55b802f8fa
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
