<!DOCTYPE html>
<html>
<head>
	<title>Pharmacy Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">

</head>
<?php
$this->view("template/notifications");
?>
<body>
	<div class="cont">
		<div class="row">
			<div class="row_4"></div>
			<div class="row_4 login_container mt_3">
				<div class="row cont_center">
					<div class="row_6">
						<img class="logo" src="./assets/img/PIMS_logo.png">
					</div>
					<div class="row_6">
						<span class="title">
							<span class="cap">P</span>HARMACY<br> 
							<span class="cap">I</span>NVENTORY<br> 
							<span class="cap">M</span>ANAGEMENT<br> 
							<span class="cap">S</span>YSTEM
						</span>
					</div>
				</div>
				<form action="login_v" method="POST">
					<div class="row">
						<div class="row_2"></div>
						<div class="row_8 text_center">
							<h2>Email:</h2>
							<input class="textbox txt_md" type="text" name="inp_email">
							<h2>Password:</h2>
							<input class="textbox txt_md" type="password" name="inp_password">
							<input class="button btn_lg mt_2" type="submit" name="login" value="LOGIN">
						</div>
						<div class="row_2"></div>
					</div>
				</form>
			</div>
			<div class="row_4"></div>
		</div>
	</div>
</body>
</html>