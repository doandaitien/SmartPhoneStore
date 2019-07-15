<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SmartPhoneStore extends CI_Controller {

	private $b_Check = false;
	private $soSanPhamTrong1Trang;

	public function __construct()
	{
		parent::__construct();
		$this->soSanPhamTrong1Trang = 12;
		#Tải thư viện  và helper của Form trên CodeIgniter
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		
		#Tải model
		$this->load->model('Account');
	}

	public function index()
	{

		$this->load->model('Product');
		$dulieu = $this->Product->display($this->soSanPhamTrong1Trang);
		$sotrang = $this->Product->soTrang($this->soSanPhamTrong1Trang);
		$dulieu = array(
		'dulieuproduct'=> $dulieu,
		'sotrang' => $sotrang
		);

		$this->load->view('SmartPhoneStore', $dulieu, FALSE);
	}

	public function page($trang)
	{
		$this->load->model('Product');
		$dulieu = $this->Product->loadSPtheotrang($trang,$this->soSanPhamTrong1Trang);
		$sotrang = $this->Product->soTrang($this->soSanPhamTrong1Trang);
		$dulieu = array(
		'dulieuproduct'=> $dulieu,
		'sotrang' => $sotrang
		); // biến dữ liệu thành mảng 


		// echo "<pre>";
		// var_dump($dulieu);
		// echo "</pre>";
		$this->load->view('SmartPhoneStore', $dulieu, FALSE);
	}
	public function KiemTraDuLieu()
	{
		$a_UserInfo['username'] = $this->input->post('username');
		$a_UserInfo['password'] = $this->input->post('password');
		$a_UserChecking = $this->Account->CheckAcc( $a_UserInfo );
		if($a_UserChecking == 'user'){
			$this->session->set_userdata($a_UserInfo);
			$this->session->unset_userdata('useradmin');
			$this->session->unset_userdata('passwordadminc');
			redirect(base_url('index.php/SmartPhoneStore/'));
			
		}
		else if($a_UserChecking == 'admin'){
			$info_admin['useradmin'] = $this->input->post('username');
			$info_admin['passwordadmin'] = $this->input->post('password');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('password');
			$this->session->set_userdata($info_admin);
			redirect(base_url('index.php/admin/'));
		}
		else{
			$this->b_Check = false;
		}


		$a_Data['b_Check']= $this->b_Check;
		$this->load->view('Login', $a_Data);

	}

	public function Login()
	{
		$this->load->view('Login');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');

			// Unset session of user
		redirect(base_url('index.php/SmartPhoneStore/'));
	}
	public function logoutadmin()
	{
		$this->session->unset_userdata('useradmin');
		$this->session->unset_userdata('passwordadmin');

			// Unset session of user
		redirect(base_url('index.php/SmartPhoneStore/'));
	}

	public function XemSanPham($PID)
	{
		// 
		$this->load->model('Product');

		$product = $this->Product->GetProduct($PID);

		$this->load->model('Comment');

		$comment = $this->Comment->GetAllComment($PID);

		$data['product'] = $product;
		$data['comment'] = $comment;


		$this->load->view('ChiTietSanPham', $data, FALSE);

	}

	public function ThemVaoGioHang()
	{
		$PID = $this->input->post('PID');
		$AID = $this->input->post('AID');
		

		$this->load->model('ShoppingCart');

		echo $this->ShoppingCart->AddProduct($AID,$PID);

	}

	public function GioHang()
	{
		$this->load->view('ShoppingCart_view');
	}

	public function XoaSanPham($AID,$PID)
	{
		$this->load->model('ShoppingCart');
		if($this->ShoppingCart->DeleteProduct($AID,$PID)){
			redirect(base_url('index.php/SmartPhoneStore/GioHang'));
		}
	}

	public function ChinhSuaSoLuongSanPham()
	{
		$quantity = $this->input->post('index');
		$username = $this->input->post('username');
		$pid = $this->input->post('productid');

		$this->load->model('ShoppingCart');
		if($this->ShoppingCart->EditQuantity($username,$pid,$quantity)){
			echo $this->ShoppingCart->EditQuantity($username,$pid,$quantity);
		}

	}
}

/* End of file SmartPhoneStore.php */
/* Location: ./application/controllers/SmartPhoneStore.php */