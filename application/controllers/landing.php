<?php

class Landing extends CI_Controller {

	function view( $page = 'home'){
		
		$this->load->helper('url');
		
		$filename = 'application/views/pages/'.$page.'.php';
		if(!file_exists($filename)){
			
			show_404();
		}
		$this->load->view('pages/'.$page);
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
