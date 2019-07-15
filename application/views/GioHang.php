<div class="ndgiohang">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php  ?>
					<span class="tieude">GIỎ HÀNG</span><span class="sl">(<?php echo $sl; ?> sản phẩm)</span>
				</div>
			</div>

			<div class="row">
				<?php 
					if($sl == 0){
				 ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="nentrang text-center">
						<span class="kocosp">Không có sản phẩm nào trong giỏ hàng của bạn.</span>
						<a href="<?php echo base_url();?>index.php/SmartPhoneStore"><span class="btn btn-warning ttms">Tiếp tục mua sắm</span></a>
					</div>
				</div>
			<?php }else{ ?>
				<!-- <div class="noidunggiohang"> -->
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 khungsp">
						<?php 
							$user = $this->session->userdata['username'];
							$sql = "select * from Account where username = '".$user."'";
							$result = $this->db->query($sql)->result_array();
							$AID = $result[0]["AID"];

							$sql = "select * from ShoppingCart AS SC, Product AS P where SC.PID = P.PID and SC.AID = ". $AID;
							$sl = $this->db->query($sql)->num_rows();
							$dulieu = $this->db->query($sql)->result_array();
							$totalPrice = 0.0;
							foreach ($dulieu as $key => $value):

						 ?>

						<div class="row _1sp">
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 anh">
								<p class="image">
									<img style="width: 118px;height: 118px;" src="<?= $value['URL_IMG'] ?>" class="img-responsive">
								</p>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 thongtin">
								<div class="namepd"><?= $value['NameProduct'] ?></div>
								<div class="hangxs">Cung cấp bởi <?= $value['Supplier'] ?> </div>
								<a href="<?php echo base_url();?>index.php/SmartPhoneStore/XoaSanPham/<?= $AID ?>/<?= $value['PID'] ?>" title="Xóa"><i class="fa fa-times" aria-hidden="true"></i></a>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 giatien">
								<?= $value['Price'] ?> ₫
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sl">
								<span>
									<a href="" class="tru"><i class="fa fa-minus" aria-hidden="true"></i></a>
									<div id="slspham" class="slspham"><?= $value['Quantity'] ?></div>
									<span class="idsp" style="display: none;"><?= $value['PID'] ?></span>
									<a href="" class="cong"><i class="fa fa-plus" aria-hidden="true"></i></a>
									
								</span>
							</div>

						</div>
						<?php 
							settype($value['Price'],"double");
							$totalPrice += $value['Quantity'] * $value['Price']; 
						?>
						<?php endforeach?>
						
						
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 khungtt">
						<div class="row tamtinh">
							
								<span>Tạm tính:</span>
								<!-- <strong class="tt1"><?= $totalPrice ?>0.000&nbsp;₫</strong> -->
								<strong class="tt1"></strong>

							
						</div>
						<div class="row thanhtien">
							<span>Thành tiền :</span>
							<div class="amount">
	            				<p>
	                            	<strong class="tt2"><?= $totalPrice ?>0.000&nbsp;₫ </strong>
	                        	</p>
	            				<p class="text-right">
	                				<small>(Đã bao gồm VAT)</small>
	            				</p>
	        				</div>
						</div>
						<div class="row thtt">
							<div class="btn btn-large btn-block btn-danger btn-checkout">TIẾN HÀNH THANH TOÁN</div>
						</div>
					</div>
				<?php } ?>
				<!-- </div> -->
			</div>
		</div>
	</div>
	<div class="nenxam"></div>
	<div class="container">
		<div class="thanhtoan">
			<div class="row">
				<div class="col-md-3">
					<div class="contact-info">
						<!-- <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/> -->
						<h2>Thanh toán</h2>
						<h4>Hãy nhập đầy đủ thông tin !</h4>
					</div>
				</div>
				<div class="col-md-9">
					<form>
						<div class="contact-form">
							<div class="form-group">
							  <label class="control-label col-sm-4" for="fname">Họ và tên:</label>
							  <div class="col-sm-10">          
								<input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname">
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-4" for="lname">Số điện thoại:</label>
							  <div class="col-sm-10">          
								<input type="text" class="form-control" id="lname" placeholder="Enter Phone" name="lname">
							  </div>
							</div>
							<div class="form-group">
							  <label class="control-label col-sm-4" >Địa chỉ:</label>
							  <div class="col-sm-10">
								<input type="text" class="form-control" id="email" placeholder="Enter Address" name="email">
							  </div>
							</div>
							<div class="form-group">        
							  <div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Hoàn thành</button>
							  </div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>