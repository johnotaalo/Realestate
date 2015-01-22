<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function template_function(){
    	$query -> Doctrine_Manager::getInstance()->getCurrentConnection()->fetchAll("insert query here");
    	return $query;
    }

    public function register_house(){
    	$recieved = $this->input->post();
    	echo "<pre>";print_r($recieved);echo "</pre>";exit;
    }
    
}