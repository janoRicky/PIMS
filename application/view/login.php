<!DOCTYPE html>
<html>
<?php
$this->view("template/head", array("title" => $head_title));
?>
<body>
	<div class="cont">
		<div class="row">
			<div class="row_4"></div>
			<div class="row_4 login_container mt_3">
				<div class="row cont_center">
					<div class="row_6">
						<img class="logo" src="./assets/img/PIS.png">
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
				<form action="#" method="POST" target="./admin/dashboard.php">
					<div class="row">
						<div class="row_2"></div>
						<div class="row_8">
							<h2>Username:</h2>
							<input class="inp_text" type="text" name="">
							<h2>Password:</h2>
							<input class="inp_text" type="text" name="">
							<input class="inp_button mt_2" type="submit" name="login" value="LOGIN">
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