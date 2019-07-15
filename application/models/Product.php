<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function display($soSanPhamTrong1Trang)
	{
		$product = $this->db->get('Product',$soSanPhamTrong1Trang, 0);
		$product = $product->result_array(); // biển đổi kết quả thành 1 mảng
		return $product;
	}
	public function GetProduct($PID)
	{
		$this->db->select('*');
		$this->db->where('PID', $PID);
		$sanpham = $this->db->get('Product');

		$sanpham = $sanpham->result_array();

		return $sanpham;


	}

	public function soTrang($soSanPhamTrong1Trang)
	{
		$this->db->select('*');
		$result = $this->db->get('Product')->result_array();

		$result = count($result);

		$sotrang = ceil($result/$soSanPhamTrong1Trang);
		return $sotrang;
	}

	public function loadSPtheotrang($trang,$soSanPhamTrong1Trang)
	{
		$vitri = ($trang-1)*$soSanPhamTrong1Trang;
		$ketqua = $this->db->get('Product', $soSanPhamTrong1Trang, $vitri);
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}

	public function AddProduct($tensp,$hangsx,$gt,$avt,$des)
	{
		$dulieu['NameProduct'] = $tensp;
		$dulieu['Supplier'] = $hangsx;
		$dulieu['Price'] = $gt;
		$dulieu['URL_IMG'] = $avt;
		$dulieu['Description'] = $des;
		return $this->db->insert('Product', $dulieu);
	}

	public function DeleteProduct($PID)
	{
		$sql = "delete from Product where PID = ".$PID;
		return $this->db->query($sql);
	}

	public function UpdateProduct($PID,$tensp,$hangsx,$gt,$avt,$des)
	{
		$sql = "update Product set NameProduct = '".$tensp."', Supplier ='".$hangsx."',Price ='".$gt."',Description='".$des."',URL_IMG ='".$avt."' where PID=".$PID;
		return $this->db->query($sql);
	}


}

/* End of file Product.php */
/* Location: ./application/models/Product.php */