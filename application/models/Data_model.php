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
		
		$data['data'] = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/new_vito/v5/get_malls.php');
		
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
		
		return $data['data'];
		
	}
	
	function GetCategories()
	{
		$response = array();
		
		$sql = 'SELECT CategoryID, CategoryName FROM CategoryMaster WHERE ParentID = 0';
		$result = $this->db->query($sql);
		
		$response = $result->result_array();
		//print_r($result->result());
		/* $response["category"] = array();
		foreach($result->result_array() as $row)
		{
			$city = array();
			
			$city["CategoryID"] = $row["CategoryID"];
			$city["CategoryName"] = $row["CategoryName"];
			
			array_push($response["category"],$city);
		} */
				
		//$response = file_get_contents('http://ec2-52-6-60-173.compute-1.amazonaws.com/new_vito/v6/get_category.php');
		//print_r($response);
		return $response;
		
	}
}

?>

