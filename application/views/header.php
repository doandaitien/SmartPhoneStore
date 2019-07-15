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
				        <a class="nav-link smp" href="#">SMARTPHONE</a>
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

				    <div class="giohang">
				    	<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="color: white;"></i>
				    		<?php if(isset($this->session->userdata['username'])){  ?>
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
									
								} ?>
				    	</button>
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
			<a href="<?php echo base_url(); ?>index.php/SmartPhoneStore/GioHang">
				<div class="btn btn-success">Giỏ hàng</div>
			</a>
			
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
	<!-- slide -->
	
		<div id="demo" class="carousel slide" data-ride="carousel">

				 
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  
				  
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="<?php echo base_url(); ?>vendor/Image/iphone-6s-fpt_15433909221253.jpg" width="100%" height="100%">
				    </div>
				    <div class="carousel-item">
				      <img src="<?php echo base_url(); ?>vendor/Image/iphone-6s-plus_1543457077.jpg" width="100%" height="100%">
				    </div>
				    <div class="carousel-item">
				      <img src="<?php echo base_url(); ?>vendor/Image/nokia-x6_1544777594.jpg" width="100%" height="100%">
				    </div>
				  </div>
				  
				  
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
		</div>
				
	<!-- end slide -->