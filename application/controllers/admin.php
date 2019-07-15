<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	private $soSanPhamTrong1Trang;
	public function __construct()
	{
		parent::__construct();
		$this->soSanPhamTrong1Trang = 6;
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function ThemSanPham()
	{
		$this->load->view('admin_themsanpham');
	}

	public function DK_ThemSanPham()
	{
		$tensp = $this->input->post('tensp');
		$hangsx = $this->input->post('hangsx');
		$gt = $this->input->post('gt');
		$gt = $gt."0.000";
		$avt = $this->input->post('avt');
		$avt = base_url()."vendor/Image/".$avt;
		$des = $this->input->post('des');
		$des = "<div class='tt'>Thông số kỹ thuật</div><br>".$des;

		$this->load->model('Product');
		if($this->Product->AddProduct($tensp,$hangsx,$gt,$avt,$des)){
			$this->load->view('thanhcong');
		}
		
	}

	public function QuanLySanPham()
	{
		$this->load->model('Product');
		// goi ham getdatabase trong model
		$dulieu = $this->Product->display($this->soSanPhamTrong1Trang);
		$sotrang = $this->Product->soTrang($this->soSanPhamTrong1Trang);
		$dulieu = array(
		'dulieuproduct'=> $dulieu,
		'sotrang' => $sotrang
		); // biến dữ liệu thành mảng 
		$this->load->view('admin_danhsachsanpham', $dulieu, FALSE);
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


		$this->load->view('admin_danhsachsanpham', $dulieu, FALSE);
	}


	public function XoaSanPham($PID)
	{
		$this->load->model('Product');

		if($this->Product->DeleteProduct($PID)){
			$this->load->view('thanhcong1');
		}
	}

	public function ChinhSuaSanPham($PID)
	{
		$this->load->model('Product');

		$product = $this->Product->GetProduct($PID);

		$data['product'] = $product;
		$this->load->view('admin_suasanpham', $data, FALSE);
	}

	public function DK_ChinhSuaSanPham($PID)
	{
		$tensp = $this->input->post('tensp');
		$hangsx = $this->input->post('hangsx');
		$gt = $this->input->post('gt');
		$avt = $this->input->post('avt');
		$des = $this->input->post('des');
		$avatar = $this->input->post('avatar');
		if(strlen($avt) == 0){
			$this->load->model('Product');
			$avt = $avatar;
			if($this->Product->UpdateProduct($PID,$tensp,$hangsx,$gt,$avt,$des)){
				$this->load->view('thanhcong2');
			}
		}else{
			$avt = base_url()."vendor/Image/".$avt;
			$this->load->model('Product');
			if($this->Product->UpdateProduct($PID,$tensp,$hangsx,$gt,$avt,$des)){
				$this->load->view('thanhcong2');
			}
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */