<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function CheckAcc($a_UserInfo){
		// $sql = "select * from account where user = N'".$user;


		$a_User	=	$this->db->select()
					    	->where('Username', $a_UserInfo['username'])
					    	->where('Password', $a_UserInfo['password'])
					    	->get('Account')
					    	->row_array();
    	if(count($a_User) >0){
    		return $a_User["Role"];
    	} else {
    		return false;
    	}
	}

}

/* End of file Account.php */
/* Location: ./application/models/Account.php */