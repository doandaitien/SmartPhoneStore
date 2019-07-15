<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản trị</title>
	
	<!-- load jquery -->
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/CSS/trangquantri.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/JS/trangquantri.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 left_col menutrai">
	          <div class="left_col scroll-view">
	            <div class="navbar nav_title" style="border: 0;">
	              <a href="" class="site_title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>HUST</span></a>
	            </div>

	            <!-- menu profile quick info -->
	            <div class="profile clearfix">
	              <div class="profile_pic">
	                <img src="<?php echo base_url(); ?>/vendor/Image/person.png" width="70px" height="70px" alt="..." class="img-circle profile_img">
	              </div>
	              <div class="profile_info">
	                <span>Welcome,</span>
	                <h2>
	                	<?php if(isset($this->session->userdata['useradmin'])){
							echo $this->session->userdata['useradmin'];
						}
						else{
							redirect(base_url('index.php/SmartPhoneStore/login'));
						} ?>

	                </h2>
	              </div>
	            </div>
	            <!-- /menu profile quick info -->

	            <br>

	            <!-- sidebar menu -->
	            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	              <div class="menu_section active">
	                <h3>General</h3>
	                <ul class="nav side-menu" style="">
	                  <li class=""><a><i class="fa fa-home fada"></i> Home </a>
	                  </li>
	                  <li class="clickxo"><a><i class="fa fa-user-circle-o fada" aria-hidden="true"></i> Quản lý người dùng <span class="fa fa-chevron-down fa1"></span></a>
	                    <ul class="nav child_menu">
	                      <li><a href="">Danh sách người dùng</a></li>
	                      <li><a href="">Xóa</a></li>
	                    </ul>
	                  </li>
	                  <li class="clickxo"><a><i class="fa fa-edit fada"></i> Quản lý sản phẩm <span class="fa fa-chevron-down fa2"></span></a>
	                    <ul class="nav child_menu">
	                      <li><a href="<?php echo base_url(); ?>index.php/admin/ThemSanPham">Thêm sản phẩm</a></li>
	                      <li><a href="<?php echo base_url(); ?>index.php/admin/QuanLySanPham">Quản lý sản phẩm</a></li>
	                      <li><a href="">Quản lý bình luận sản phẩm</a></li>
	                    </ul>
	                  </li>
	                  <li class="clickxo"><a><i class="fa fa-bar-chart-o fada"></i> Quản lý đơn hàng <span class="fa fa-chevron-down fa3"></span></a>
	                    <ul class="nav child_menu">
	                      <li><a href="">Danh sách đơn hàng</a></li>
	                      <li><a href="">Xóa đơn hàng</a></li>
	                    </ul>
	                  </li>
	                </ul>
	              </div>

	            </div>
	            <!-- /sidebar menu -->

	          </div>
	          <p class="fot text-center"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2018</p>
	        </div>
	        <div class="col-md-10">
	        	<div class="menutren">
	        		<a href="#" class="admin">
	        			<img src="<?php echo base_url(); ?>/vendor/Image/person.png" width="50px" height="50px"><?php if(isset($this->session->userdata['useradmin'])){
							echo $this->session->userdata['useradmin'];
						}
						else{
							redirect(base_url('index.php/SmartPhoneStore/login'));
						} ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
	        		</a>
	        		<ul class="user">
	        			<li>
							<a href=""><span>Thông tin cá nhân</span> <i class="fa fa-user-md pull-right" aria-hidden="true"></i></a>
	        				</li>
	        			<li>
							<a href="<?php echo base_url();?>index.php/SmartPhoneStore/logoutadmin"><span>Log Out</span> <i class="fa fa-sign-out pull-right"></i></a>
	        				</li>
	        		</ul>
	        	</div>
	        	<div class="content">
	        		CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!!
	        	</div>
	        </div>
		</div>
	</div>
</body>
</html>