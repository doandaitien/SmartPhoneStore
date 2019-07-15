<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetAllComment($PID)
	{
		$sql = "select * from Comment AS C , Account AS A where A.AID = C.AID and C.PID = " . $PID;
		$comment = $this->db->query($sql);

		$comment = $comment->result_array();
		return $comment;
	}

}

/* End of file Comment.php */
/* Location: ./application/models/Comment.php */