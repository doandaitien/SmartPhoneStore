<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang quản trị- Thêm sản phẩm</title>
	
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/CSS/themsanpham.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/JS/themsanpham.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor_finder/ckeditor.js"></script>
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
	                <h2><?php if(isset($this->session->userdata['useradmin'])){
							echo $this->session->userdata['useradmin'];
						}
						else{
							redirect(base_url('index.php/SmartPhoneStore/login'));
						} ?></h2>
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
	        <div class="col-md-10" style="overflow-y: scroll;overflow-x: hidden;position: relative;">
	        	<div class="menutren" style="position: fixed;top:0;width: 84%;z-index: 4;">
	        		<a href="#" class="admin">
	        			<img src="<?php echo base_url(); ?>/vendor/Image/person.png" width="50px" height="50px"> <?php if(isset($this->session->userdata['useradmin'])){
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
	        	<div class="themsanpham" style="position: absolute;top: 13%;z-index: 3;margin-left: 40px;">
	        		<!-- CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ !!! -->
					<div class="text-center"><h2 class="td">Thêm mới sản phẩm</h2></div>
					<div class="container">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<form action="<?php echo base_url(); ?>index.php/admin/DK_ThemSanPham" method="POST" role="form">
				        			<div class="form-group">
				        				<label for="">Tên sản phẩm</label>
				        				<input type="text" class="form-control" id="" name="tensp" placeholder="Enter name" required>
				        			</div>
				        			<div class="form-group">
				        				<label for="">Hãng SX</label>
				        				<input type="text" class="form-control" id="" name="hangsx" placeholder="Enter Supplier" required>
				        			</div>
				        			<div class="form-group">
				        				<label for="">Giá tiền</label>
				        				<input type="text" class="form-control" id="" name="gt" placeholder="Enter price" required>
				        			</div>
				        			<div class="form-group">
				        				<label for="">Ảnh</label>
				        				<input type="file" class="form-control" id="" name="avt" placeholder="Choose image" required>
				        			</div>
				        			<div class="form-group">
				        				<label for="">Thông tin sản phẩm</label>
				        				<textarea class="bl" rows="5" cols="98.5" id="ckeditor" name="des">
										</textarea>
				        			</div>
				        			<button type="submit" class="btn btn-primary">Thêm mới</button>
				        		</form>
							</div>
						</div>
					</div>
	        		
	        	</div>
	        </div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			CKEDITOR.replace('ckeditor');
		});
	</script>
</body>
</html>