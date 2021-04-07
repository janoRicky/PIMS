<!DOCTYPE html>
<html>
<?php

$this->view("template/head", array("title" => $head_title));

?>
<body>
	<div class="cont">
		<div class="row">
			<div class="row-4"></div>
			<div class="row-4 login-container mt-3">
				<div class="row cont-center">
					<div class="row-5">
						<img class="login_logo" src="./assets/img/PIS.png">
					</div>
					<div class="row-7">
						<span style="font-weight: bolder; font-size: 2.1rem; color: #69ff00;">
							PHARMACY<br> 
							INVENTORY<br> 
							SYSTEM
						</span>
					</div>
				</div>
				<form action="#" method="POST" target="./admin/dashboard.php">
					<div class="row">
						<div class="row-2"></div>
						<div class="row-8">
							<h2>Username:</h2>
							<input class="inp-text" type="text" name="">
							<h2>Password:</h2>
							<input class="inp-text" type="text" name="">
							<input class="inp-button mt-2" type="submit" name="login" value="LOGIN">
						</div>
						<div class="row-2"></div>
					</div>
				</form>
			</div>
			<div class="row-4"></div>
		</div>
	</div>
</body>
</html>