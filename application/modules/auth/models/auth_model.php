<?php if(!defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class auth_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function FunctionName()
	{
		
	}
	function get_user_login($username,$password)
	{
		$user = array();
        $query = "SELECT 
                    `us`.`user_id`,
                    `us`.`username`,
                    `us`.`password`,
                    `us`.`usertype_id`,
                    `us`.`is_active`,
                    `typ`.`id`,
                    `typ`.`usertype`
                FROM `users` `us`
                LEFT JOIN `usertypes` `typ`
                    ON `us`.`usertype_id` = `typ`.`id`
                WHERE `us`.`username` = '$username' AND `us`.`password` = '$password' AND `us`.`is_active` = 1";
        $query = $this->db->query($query);
    	
        $details = $query->result_array();
        // echo "<pre>";print_r($details);die();

    	if($details)
    	{
    		$user['auth'] = TRUE;
    		$user['user_id'] = $details[0]['user_id'];
    		$user['usertype'] = $details[0]['usertype'];
        }
    	else
    	{
    		$user['auth'] = FALSE;
    	}

    	// echo "<pre>";print_r($user);die;

        
    	return $user;
	}

	
}
?>