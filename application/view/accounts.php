<!DOCTYPE html>
<html>
<?php
$this->view("template/head", array("title" => $head_title));
?>
<body>
	<div class="wrapping">
		<?php $this->view("template/sidebar", array("active" => "accounts")); ?>
		<div class="content">
			<?php $this->view("template/navbar", array("nav_link" => $nav_link, "nav_text" => $nav_text)); ?>
			<div class="row">
				<div class="row_1"></div>
				<div class="row_10">
					<form action="accounts" method="GET">
						<div class="row pt_2">
							<div class="row_10">
								<input class="textbox txt_sm" type="text" name="search">
							</div>
							<div class="row_2 text_center">
								<input class="button btn_sm" type="submit" value="SEARCH">
							</div>
						</div>
					</form>
					<h4>Showing <?=(($acc_pg-1)*$page_limit)+1?>-<?=($acc_pg*$page_limit < $table_size ? $acc_pg*$page_limit : $table_size)?> results of <?=$table_size?> rows.</h4>
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($table as $key => $val): ?>
							<tr>
								<td><?=$val["id"]?></td>
								<td><?=$val["name"]?></td>
								<td><?=$val["email"]?></td>
								<td class="text_center">
									<a>
										<button class="button btn_sm">View</button>
									</a>
									<a>
										<button class="button btn_sm">Edit</button>
									</a>
									<a>
										<button class="button btn_sm">Delete</button>
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="row mt_2">
						<div class="row_6 text_right">
							<a <?=(($acc_pg - 1) < 1 ? "" : "href='accounts?pg=".($acc_pg - 1).(isset($search_val) ? "&search=" . $search_val : "")."'")?>>
								<button class="button btn_sm <?=(($acc_pg - 1) < 1 ? 'disabled' : '' )?> mr_1">
									< PAGE
								</button>
							</a>
						</div>
						<div class="row_6 text_left">
							<a <?=($table_size <= ($acc_pg * $page_limit) ? "" : "href='accounts?pg=".($acc_pg + 1).(isset($search_val) ? "&search=" . $search_val : "")."'")?>>
								<button class="button btn_sm <?=($table_size <= ($acc_pg * $page_limit) ? 'disabled' : '')?> ml_1">
									PAGE >
								</button>
							</a>
						</div>
					</div>
				</div>
				<div class="row_1"></div>
			</div>
		</div>
	</div>
</body>
</html>
