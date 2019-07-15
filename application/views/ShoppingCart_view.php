<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ hàng của bạn</title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/CSS/giohang.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/JS/giohang.js"></script>
</head>
<body>
	
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
			<span class="tk"><?php if(isset($this->session->userdata['username'])){echo $this->session->userdata['username'];}else{echo 'Tài khoản ';}?></span> <i class="fa fa-user-circle-o" aria-hidden="true"></i>
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

	<!-- menuchinh -->
	<div class="menuchinh">
		 <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin:0 0 0 0;">
		 	<div class="container">
		 		<a class="navbar-brand" href="http://127.0.0.1:4001/TEST/index.php/SmartPhoneStore">HOME</a>
				  <button class="navbar-toggler navbar-toggler-right collapsed nutclick" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="navbar-collapse collapse" id="navb" style="">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item sp">
				        <a class="nav-link smp" href="http://127.0.0.1:4001/TEST/index.php/SmartPhoneStore">SMARTPHONE</a>
				        <div class="smartphone">
							<ul class="dsdt">
								<li class="type1">
									<a href="">Iphone</a>
								</li>
								<li class="type1">
									<a href="">Samsung</a>
								</li>
								<li class="type1">
									<a href="">Oppo</a>
								</li>
								<li class="type1">
									<a href="">Sony</a>
								</li>
								<li class="type1">
									<a href="">Nokia</a>
								</li>
								<li class="type1">
									<a href="">Asus</a>
								</li>
								<li class="type1">
									<a href="">Xiaomi</a>
								</li>
								<li class="type1">
									<a href="">HTC</a>
								</li>
								<li class="type1">
									<a href="">Vivo</a>
								</li>

							</ul>
						</div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="">NEWS</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link ct" href="">CONTACT</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0" style="margin-right: 15px">
				      <input class="form-control mr-sm-2" type="text" placeholder="Search">
				      <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
				    </form>

				    <div title="Xem giỏ hàng" class="giohang">
				    	<button title="Xem giỏ hàng" type="button" class="btn btn-primary"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="color: white;"></i><?php if(isset($this->session->userdata['username'])){ ?>
									<span class="badge">
										<?php 
										$user = $this->session->userdata['username'];
										$sql = "select * from Account where username = '".$user."'";
										$fuser = $this->db->query($sql)->result_array();
										$fuser = $fuser[0]["AID"];
										$this->db->select('*');
										$this->db->where('AID', $fuser);
										$gh = $this->db->get('ShoppingCart');
										echo $gh->num_rows();
									 ?>
									</span>
								<?php }
								else{
									
								} ?></button>
				    </div>
				  </div>
		 	</div>
		</nav>

<?php if(isset($this->session->userdata['username'])){ ?>
		<div class="giohangchitiet">
		<ul>
			<?php
				$user = $this->session->userdata['username'];
				$sql = "select * from Account where username = '".$user."'";
				$faid = $this->db->query($sql)->result_array();
				$faid = $faid[0]["AID"];
				$getGioHang = "select * from ShoppingCart AS SC,Product AS P where SC.PID = P.PID and SC.AID = ".$faid . " LIMIT 3";
				$GioHang = $this->db->query($getGioHang);
				$GioHang = $GioHang->result_array();
				?>
				<?php  foreach ($GioHang as $key => $value): ?>
				
			 
			<li class="giohangchitietli">
				<div class="anhsp" style="width: 50px;height:50px;"><img class="img-responsive" width="100%" height="100%" src="<?= $value['URL_IMG'] ?>"></div>
				<div class="tensp"><?= $value['NameProduct'] ?></div>
				<div class="slsp"><?= $value['Quantity'] ?>x - </div>
				<div class="giasp"> <?= $value['Price'] ?>đ</div>
			</li>

				<?php endforeach?>
			<?php
			$user = $this->session->userdata['username'];
				$sql = "select * from Account where username = '".$user."'";
				$faid = $this->db->query($sql)->result_array();
				$faid = $faid[0]["AID"];
				$getGioHang = "select * from ShoppingCart AS SC,Product AS P where SC.PID = P.PID and SC.AID = ".$faid;
				$sl = $this->db->query($getGioHang)->num_rows();
				if($sl > 3){
			 ?>
			<li class="connua">
				còn nữa ...
			</li>
			<?php }
			else{
			 ?>
			 <li class="connua" style="height: 35px;width: 5px;">
				
			</li>
			<?php } ?>

		</ul>
		<div class="xemgiohang">
			<a href=""><div class="btn btn-success">Giỏ hàng</div></a>
			<div class="tongtien">Tổng tiền :
		 <?php 
			$sql = "select * from Account where username = '".$user."'";
			$faid = $this->db->query($sql)->result_array();
			$faid = $faid[0]["AID"];
			$getGioHang = "select * from ShoppingCart AS SC,Product AS P where SC.PID = P.PID and SC.AID = ".$faid;
			$GioHang = $this->db->query($getGioHang)->result_array();
			$totalPrice = 0.0;
			foreach ($GioHang as $key => $value):
				settype($value['Price'],"double");
				$totalPrice += $value['Quantity'] * $value['Price'];
			endforeach;
		
		echo $totalPrice;

		?>0.000đ

		</div></div>
		
	</div>
<?php } ?>	
	</div> <!-- end menuchinh -->
	<!-- end menuchinh -->
	<?php
		if(isset($this->session->userdata['username'])){
			require('GioHang.php');
		}
		else{
			redirect(base_url('index.php/SmartPhoneStore/Login'));
		}
	?>
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
	<script>
		$(document).ready(function() {
			tinhtongtien();
			$('.tru').click(function(event) {
				/* Act on the event */
				event.preventDefault();
				var quantity;
				var user = $('.tk')[0].innerText;
				String(user);
				var sl = $(this).next('#slspham');
				var pid = $(this).next().next('.idsp')[0].innerText;
				sl = sl[0].innerText;
				if(Number(sl) == 1){
					alert('Số lượng sản phẩm đã tối thiểu !')
				}else{
					quantity = sl - 1;
					$(this).next()[0].innerText = quantity;
					tinhtongtien();

				}

				$.ajax({
					url: '<?php echo base_url(); ?>index.php/SmartPhoneStore/ChinhSuaSoLuongSanPham',
					type: 'POST',
					dataType: 'json',
					data: {index: quantity,username : user,productid : pid}
				})		
			});;

			$('.cong').click(function(event) {
				/* Act on the event */
				event.preventDefault();
				var quantity;
				var user = $('.tk')[0].innerText;
				String(user);
				var sl = $(this).prev().prev('#slspham');
				var pid = $(this).prev('.idsp')[0].innerText;
				sl = sl[0].innerText;
				quantity = Number(sl) + 1;
				$(this).prev().prev('#slspham')[0].innerText = quantity;
				tinhtongtien();
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/SmartPhoneStore/ChinhSuaSoLuongSanPham',
					type: 'POST',
					dataType: 'json',
					data: {index: quantity,username : user,productid : pid}
				})		
			});;

			function tinhtongtien() {
				var a = $('._1sp'); // số sản phẩm 
				var b = $('.giatien'); // tiền 
				var c = $('.slspham'); // số lượng của sản phẩm 
				var TongTien = 0.0;
				for (var i = 0; i < a.length; i++) {
					var k = parseFloat(b[i].innerText);
					var p = parseFloat(c[i].innerText);
					if(p%2 == 1){
						TongTien += Math.round(k)*p;
					}
					else{
						TongTien += k*p;
					}
				}
				var tt1 = $('.tt1');
				var tt2 = $('.tt2');
				tt1[0].innerText = TongTien.toFixed(2) +"0.000 ₫";
				tt2[0].innerText = TongTien.toFixed(2) +"0.000 ₫";


			}
		});
	</script>
</body>
</html>