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
		
		//$navdata["Category"] = $this->Data_model->GetCategories();
		//$navdata["Bank"] = $this->Data_model->GetBanks();
		$navdata["MenuBar"] = $this->Data_model->GetNavData();
		$navdata["Baners"] = $this->Data_model->GetBanners();
		
		if(0){
			
			//$category = array();
			//print_r($category);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav',$navdata);
			$this->load->view('pages/Output',$data);	
			$this->load->view('templates/footer');
					
		}
		else {		
			
			//print_r($navdata["Category"]);
			$this->load->view('templates/header', $data);
			//$this->load->view('templates/nav');
			//$this->load->view('pages/'.$page, $data);
			//$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$navdata);
			$this->load->view('pages/'.$page,$navdata);
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
