<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In / Sign up</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/CSS/style.css">
</head>
<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="<?php echo base_url()."index.php/SmartPhoneStore/KiemTraDuLieu/" ?>" method="POST"> 
					<div class="group">
						<label for="user" class="label">Username</label>
						<input name="username" type="text" class="input" required>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input  name="password" type="password" class="input" data-type="password" required>
					</div>
					<div><span class="success"><?php if(isset($b_Check) && $b_Check == false){echo "Tài khoản hoặc mật khẩu không chính xác !";}?></span></div>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
				</form>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input  type="text" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input  type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input  type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input  type="text" class="input" required>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
  
  

</body>

</html>
