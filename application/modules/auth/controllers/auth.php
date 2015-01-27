<?php if(!defined("BASEPATH")) exit("No direct access to scrip allowed");
/**
* 
*/
class auth extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view("login");
	}
	
	function authentication()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hashed_password = md5($password);

		$authenticate = $this->auth_model->get_user_login($username,$hashed_password);
		// echo "<pre>";print_r($authenticate);die();
		if($authenticate['auth'] == TRUE)
		{
			$user_id = $authenticate['user_id'];
			$user_type = $authenticate['usertype'];
			
			$data = array(
				'logged_in' => TRUE,
				'userid' => $user_id,
				'usertype' => $user_type
			);

			$this->session->set_userdata($data);
			$redirect_url = $this->session->userdata('usertype');;
			redirect(base_url() . $redirect_url);
		}
		else
		{
			$data['error'] = 'Login Error! Please Try Again';
			$this->load->view('login', $data);
		}
	}
}
?>