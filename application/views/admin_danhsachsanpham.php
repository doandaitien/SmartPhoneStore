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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/CSS/danhsachsanpham.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/JS/danhsachsanpham.js"></script>
</head>
<body>
	<?php 
		$uri = $_SERVER['REQUEST_URI'];
		$uri = explode('/',$uri);
		$tranghientai = end($uri);
	 ?>
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
	        <div class="col-md-10" style="position: relative;overflow-y: scroll;overflow-x: hidden;">
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
	        	<div class="danhsachsanphamadmin" style="position: absolute;top: 13%;width: 100%;">
	        		<div class="container">
	        			<div class="row text-center tieude">
	        				<h2 class="td">Danh sách sản phẩm</h2>
	        			</div>
	        			<div class="row search">
	        				<form class="pull-right" action="/action_page.php">
						      <div class="input-group">
						        <input type="text" class="form-control" placeholder="Search" name="search">
						        <div class="input-group-btn">
						          <button class="btn btn-default" type="submit">
						            <i class="fa fa-search" aria-hidden="true"></i>
						          </button>
						        </div>
						      </div>
						    </form>
	        			</div>
	        			<div class="row">
	        				<?php foreach ($dulieuproduct as $key => $value):?>
							<div class="_1spadmin">
	        					<div class="avt"><img src="<?= $value['URL_IMG'] ?>" class="img-responsive" width="100%" height="100%"></div>
	        					<div class="thongtin">
	        						<div class="hangsx"><?= $value['Supplier'] ?></div>
	        						<div class="tensp"><?= $value['NameProduct'] ?></div>
	        						<div class="gt"><?= $value['Price']?> đ</div>
	        					</div>
	        					<div class="des">
	        						<div class="btn btn-outline-info chitiet">Chi tiết</div>
	        						<div class="btn btn-outline-success chinhsua"><a href="<?= base_url(); ?>index.php/admin/ChinhSuaSanPham/<?= $value['PID']?>">Sửa <i class="fa fa-pencil" aria-hidden="true"></i></a></div>
	        						<div class="btn btn-outline-danger xoa"><a href="<?= base_url(); ?>index.php/admin/XoaSanPham/<?= $value['PID']?>">Xóa <i class="fa fa-times" aria-hidden="true"></i></a></div>

	        						<br>

	        						<div class="tt"><?= $value['Description']?></div>
	        					</div>
	        				</div>
							<?php endforeach?>
							
	        			</div>
	        			<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<ul class="pagination justify-content-center" style="margin:30px 0">
									  <li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/admin/page/<?= $tranghientai-1 ?>">Previous</a></li>
										<?php for ($i = 0; $i < $sotrang; $i++) { ?>
											<?php if($i+1 == $tranghientai){ ?>
												<li class="page-item active"><a class="page-link" href="<?= base_url(); ?>index.php/admin/page/<?= $i+1 ?>"><?= $i + 1?></a></li>
											<?php }else{ ?>
												<li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/admin/page/<?= $i+1 ?>"><?= $i + 1?></a></li>
											<?php } ?>
											
										<?php  } ?>
									  <li class="page-item"><a class="page-link" href="<?= base_url(); ?>index.php/admin/page/<?= $tranghientai+1 ?>">Next</a></li>
									</ul>
								</div>
							</div>
						</div>
	        		</div>
	        	</div>
	        </div>
		</div>
	</div>
</body>
</html>