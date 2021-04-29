<!DOCTYPE html>
<html>
<?php
$this->view("template/head", array("title" => $head_title));
$this->view("template/notifications");
?>
<body>
	<div class="wrapping">
		<?php $this->view("template/sidebar", array("active" => "dashboard")); ?>
		<div class="content">
			<?php $this->view("template/navbar", array("nav_link" => $nav_link, "nav_text" => $nav_text)); ?>
			<div class="row">
				<div class="row_1"></div>
				<div class="row_10">
					<h1>Welcome <?=$_SESSION["admin_name"]?>!</h1>
					<div class="row">
						<div class="row_6 p_1">
							<a href="items">
								<div class="window text_center p_1" style="height: 7rem;">
									<h1><span style="font-size: 3rem;">&#128463;</span> ITEMS (<?=$item_count?>)</h1>
								</div>
							</a>
						</div>
						<div class="row_6 p_1">
							<a href="accounts">
								<div class="window text_center p_1" style="height: 7rem;">
									<h1><span style="font-size: 3rem;">&#197;</span> ACCOUNTS (<?=$admin_count?>)</h1>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row_1"></div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="./assets/js/script.js"></script>
</html>
