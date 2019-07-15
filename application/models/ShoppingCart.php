<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingCart extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function AddProduct($AID,$PID)
	{
		$checkid = "select * from Account where Username = '". $AID."'";
		$fAID = $this->db->query($checkid)->result_array();
		$fAID = $fAID[0]["AID"];
		$sql = "select * from ShoppingCart where AID = '".$fAID. "' and PID = ". $PID;
		$num = $this->db->query($sql)->num_rows();
		$dulieu = $this->db->query($sql)->result_array();
		if($num > 0){
			
			$quantity = $dulieu[0]["Quantity"];
			settype($quantity,"integer");
			$quantity ++;

			$sql1 = "update ShoppingCart set quantity = ".$quantity." where AID = '". $fAID . "' and PID = ".$PID;
			$this->db->query($sql1);
			return 1; //  Đã tồn tại
		}
		else{
			$sql2 = "insert into ShoppingCart values ('NULL','". $fAID . "','".$PID."','1')";
			$this->db->query($sql2);

			return 2; // chưa tồn tại
		}
	}

	public function GetAllProduct($AID)
	{
		
	}

	public function DeleteProduct($AID,$PID)
	{
		$sql = "delete from ShoppingCart where AID = ".$AID." and PID = ".$PID;
		$a = $this->db->query($sql);
		return $a;
	}

	public function EditQuantity($username,$PID,$quantity)
	{
		$sql = "select * from Account where username = '".$username."'";
		$dulieulayraaid = $this->db->query($sql)->result_array();
		$dulieulayraaid = $dulieulayraaid[0]["AID"];

		$sql = "update ShoppingCart set quantity = ".$quantity . " where PID = ".$PID." and AID = ".$dulieulayraaid;
		return $this->db->query($sql);
	}

}

/* End of file ShoppingCart.php */
/* Location: ./application/models/ShoppingCart.php */