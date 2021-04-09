<!DOCTYPE html>
<html>
<?php
$this->view("template/head", array("title" => $head_title));
?>
<body>
	<div class="wrapping">
		<?php $this->view("template/sidebar", array("active" => "dashboard")); ?>
		<div class="content">
			<?php $this->view("template/navbar", array("nav_link" => $head_title, "nav_text" => $head_title)); ?>
			<div class="row">
				<div class="row_1"></div>
				<div class="row_10">
					WAWAWIWA<br><br>KING IN THE CASTLE KING IN THE CASTLE
					<br><br><br>
					<?php
					foreach ($table as $key => $val) {
						echo $val['id']." > ".$val['name']." > ".$val['email']."<br>";
					}
					?>
				</div>
				<div class="row_1"></div>
			</div>
		</div>
	</div>
</body>
</html>
