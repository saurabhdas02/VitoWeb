<?php

class Landing extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('Data_model');
		$this->load->helper('form');
		
	}
	
	function view( $page = 'home'){
		
		//$this->load->helper('url');
		
		$filename = 'application/views/pages/'.$page.'.php';
		if(!file_exists($filename)){
			
			show_404();
		}
		
		$navdata['Category'] = array("Food","restro","fashon","hello","world","sflds","vdkjs","svkskdvbsk","sdvbsbdv","sbkbd","bcjhbdc","bdhbcz",
			"ckjd be u","acbc","More");
			
		$data['title'] = $page;
		
		if(1){
			$category = array();
			$data["category"] = $this->Data_model->GetCategories();
			//print_r($category);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav',$navdata);
			$this->load->view('pages/Output',$data);	
			$this->load->view('templates/footer');
					
		}
		else {		
			
			$this->load->view('templates/header', $data);
			//$this->load->view('templates/nav');
			//$this->load->view('pages/'.$page, $data);
			//$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$navdata);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');
		}
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
