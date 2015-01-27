<?php
if (!defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class template extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function call_admin_template($data=NULL)
	{
		// echo "<pre>";print_r($data);die();
		$this->load->view('admin_template', $data);
	}

	public function call_front_end_template($data=NULL)
	{
		$this->load->view('front_end_template', $data);
	}
}
?>