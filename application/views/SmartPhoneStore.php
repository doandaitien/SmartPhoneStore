<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<!-- load tất cả các file -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/JS/jquery-3.3.1.min.js"></script>
	<!-- end load tất cả các file -->
	<!-- load bootstrap  -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/Bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<!-- cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- load font awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/FontAwesome/css/font-awesome.css">
	<!-- https://place-hold.it/1900x700 -->
	<!-- load file dinh kem -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/CSS/1.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/JS/1.js"></script>
</head>
<body>
	<?php 
		$uri = $_SERVER['REQUEST_URI'];
		$uri = explode('/',$uri);
		$tranghientai = end($uri);
	 ?>
	<div class="container foot" style="text-align: right;">
		<span><i class="fa fa-envelope" aria-hidden="true"></i> Support: <a href="#"> hust.edu.vn</a></span>
		<span><i class="fa fa-phone-square" aria-hidden="true" ></i> Telephone: <a href="#"> 0964625586</a></span>
		<?php if(isset($this->session->userdata['username'])){}else{ ?>
		<a href="<?php echo base_url(); ?>index.php/SmartPhoneStore/Login" style="text-decoration: none;">
			<div href="#" class="signin nutdangnhap "><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In/Sign Up</div>
		</a>
		<?php } ?>
	</div>
	<div class="logo container">
		<a href="http://127.0.0.1:4001/TEST/index.php/SmartPhoneStore"><img src="<?php echo base_url(); ?>vendor/Image/logo_bk.png" alt="BKS"></a>
		<div class="thongtinnguoidung">
			<span class="tk"><?php if(isset($this->session->userdata['username'])){
				echo $this->session->userdata['username'];
			}
			else{
				echo 'Tài khoản ';
			} ?> </span> <i class="fa fa-user-circle-o" aria-hidden="true"></i>
		</div>
		<?php 
			if(isset($this->session->userdata['username'])){
		 ?>
		<div class="tttk">
			<ul class="tttk1">
				<li class="a">
					<a href=""><span>Thông tin cá nhân</span><i class="fa fa-user pull-right"></i></a>
				</li>
				<li class="a">
					<a href="<?php echo base_url();?>index.php/SmartPhoneStore/logout"><span>Đăng xuất</span><i class="fa fa-sign-out pull-right" aria-hidden="true"></i> </a>
				</li>
				<li class="a">
					<a href=""><span>Lịch sử đơn hàng</span><i class="fa fa-list-alt pull-right" aria-hidden="true"></i></a>
				</li>
				
			</ul>
		</div>
	<?php } ?>
	</div>
	<?php require('header.php')?>
	<!-- phần sản phẩm  -->
	<div class="product">
		<div class="container">
			<div class="row">

				<?php foreach ($dulieuproduct as $key => $value):?>
					<!-- _1khoi -->

					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 _1khoi" id="khoi">
						<a href="<?php echo base_url(); ?>index.php/SmartPhoneStore/XemSanPham/<?= $value['PID'] ?>" style="text-decoration: none;">
							<div class="card">
								<img class="card-img-top img-responsive imgProduct" src="<?= $value['URL_IMG'] ?>" alt="Card image cap">
								<div class="card-block">
									<p class="card-text nameProduct"><?= $value['NameProduct'] ?></p>
									<p class="card-text priceProduct"><?= $value['Price'] ?>₫</p>
								</div>
							</div>
						</a>
						
					</div>
					<!-- end _1khoi -->
				<?php endforeach?>
				

			</div>
		</div>
	</div>
	<!-- end sản phẩm -->
	<!-- phân trang  -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ul class="pagination justify-content-center" style="margin:20px 0">
				  <li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/SmartPhoneStore/page/<?= $tranghientai-1 ?>">Previous</a></li>
					<?php for ($i = 0; $i < $sotrang; $i++) { ?>
						<?php if($i+1 == $tranghientai){ ?>
							<li class="page-item active"><a class="page-link" href="<?= base_url(); ?>index.php/SmartPhoneStore/page/<?= $i+1 ?>"><?= $i + 1?></a></li>
						<?php }else{ ?>
							<li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/SmartPhoneStore/page/<?= $i+1 ?>"><?= $i + 1?></a></li>
						<?php } ?>
						
					<?php  } ?>
				  <li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/SmartPhoneStore/page/<?= $tranghientai+1 ?>">Next</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end phân trang  -->
	<?php require('footer.php')?>

	<!-- nút đi lên  -->
	<div class="nutdilen">
		<i class="fa fa-hand-o-up fa-4x" aria-hidden="true"></i>
	</div>
	<!-- end nút đi lên  -->
	<!-- body -->
	<script>
		$(document).ready(function() {
			var sp = $('.giohangchitietli');

			if(sp.length == 1){
				$('.giohangchitiet').css({
					height: '173px'
				});;
			}
			else if(sp.length == 2){
				$('.giohangchitiet').css({
					height: '250px'
				});;
			}
			else if(sp.length == 0){
				$('.giohangchitiet').css({
					height: '96px'
				});;
			}

		});
	</script>
</body>
</html>