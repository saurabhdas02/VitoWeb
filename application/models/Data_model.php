<?php
class Data_model extends CI_Model 
{
	/**
	 * Constructor
	 *
	 * @access	public
	 */	
	function __construct()
	{
		parent::__construct();
	}
		
	function GetMall()
	{
		$response = array();
		$response = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/new_vito/v5/get_malls.php');
		
		/* $result = http://ec2-52-6-60-173.compute-1.amazonaws.com/new_vito/v5/get_malls.php;
		$MallID = array();
		$MallName = array();
		$MallNameLoc = array();
		foreach($result->result() as $row){
			array_push($MallID,$row->MallID);
			array_push($MallName,$row->MallName);
			array_push($MallNameLoc,$row->MallNameLoc);			
		}
		return array('MallID' => $MallID, 'MallName' => $MallName, 'MallNameLoc' => $MallNameLoc); */
		
		//print_r($response);
		return $response; 		
	}
	
	function GetCategories()
	{
		$response = array();
		
		/*$sql = 'SELECT CategoryID, CategoryName FROM CategoryMaster WHERE ParentID = 0';
		$result = $this->db->query($sql);
		
		$response = $result->result_array();
		$CategoryID = array();
		$CategoryName = array();
		
		foreach ($result->result() as $row) {
			
			array_push($CategoryID,$row->CategoryID);
			array_push($CategoryName,$row->CategoryName);
			
		} 
		$response["category"] = array();
		foreach($result->result_array() as $row)
		{
			$city = array();
			
			$city["CategoryID"] = $row["CategoryID"];
			$city["CategoryName"] = $row["CategoryName"];
			
			array_push($response["category"],$city);
		}
		return array('CategoryID' => $CategoryID, 'CategoryName' => $CategoryName);*/		
				
		$response = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/WebApi/get_category.php');
		return $response;
		
	}
	
	function GetBanks()
	{
		$response = array();
		
		/* $sql = 'SELECT BankID, BankName FROM BankMaster';
		$result = $this->db->query($sql);
		
		$BankID = array();
		$BankName = array();
		
		foreach ($result->result() as $row) 
		{
			array_push($BankID,$row->BankID);
			array_push($BankName,$row->BankName);	
		}
		return array('BankID' => $BankID, 'BankName' => $BankName);*/ 
		$response = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/WebApi/get_banks.php');
		return json_decode($response,TRUE); 
		
	}

	function GetNavData($city){
		$response = array();
		
		/* $sql = 'SELECT BankID, BankName FROM BankMaster';
		$result = $this->db->query($sql);
		
		$BankID = array();
		$BankName = array();
		
		foreach ($result->result() as $row) 
		{
			array_push($BankID,$row->BankID);
			array_push($BankName,$row->BankName);	
		}
		return array('BankID' => $BankID, 'BankName' => $BankName);*/ 

		
		$postdata = http_build_query
		(
			array(
		        'city' => $city
		    )
		);
		
		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);
		$context  = stream_context_create($opts);
		
		$response = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/WebApi/get_navdata.php',false,$context);
		//print_r($response);
		return json_decode($response,TRUE); 
		
	}
	function GetBanners(){
		$response = array();
		
		/* $sql = 'SELECT BankID, BankName FROM BankMaster';
		$result = $this->db->query($sql);
		
		$BankID = array();
		$BankName = array();
		
		foreach ($result->result() as $row) 
		{
			array_push($BankID,$row->BankID);
			array_push($BankName,$row->BankName);	
		}
		return array('BankID' => $BankID, 'BankName' => $BankName);*/ 
		$response = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/WebApi/get_banners.php');
		//print_r($response);
		return json_decode($response,TRUE); 
	}
}
?>
