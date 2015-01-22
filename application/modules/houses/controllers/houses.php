<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Houses extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_houses');
    }

	public function index()
	{
		echo "Sth";exit;
		$this->load->view('h_home');
	}

	public function register(){
		$this->load->view('h_register');
	}

	public function registerhouse(){
		//$posted = $this->input->post();
		//echo "<pre>";print_r($posted);echo "</pre>";exit;
		
		$recieved = $this->input->post();

    	$house_no = $this->input->post("house_no");
    	$estate = $this->input->post("estate");
    	$building = $this->input->post("building");
    	$state = $this->input->post("state");

    	$house_data = array();
    	$house_info = array(
    		'house_no' => $house_no, 
    		'state' => $state, 
    		'build_id' => $building, 
    	);

    	array_push($house_data, $house_info);
    	$insertion = $this->db->insert_batch("house",$house_data);
    	
    	$this-> housesindex();

	}

	public function housesindex(){
		$houses_info = $this->m_houses->all_houses();

		//echo "<pre>";print_r($houses_info);echo "</pre>";exit;
		$data['houses_info'] = $houses_info;
		$this->load->view('h_index',$data);
	}
}