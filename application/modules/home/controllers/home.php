<?php if(!defined("BASEPATH")) exit("No direct access to scrip allowed");
/**
* 
*/
class Home extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		
	}

	public function index()
	{
		$data['content_page'] = 'home/home';
		$this->template->call_front_end_template($data);
	}
	
	
}
?>