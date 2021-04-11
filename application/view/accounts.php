<!DOCTYPE html>
<html>
<?php
$this->view("template/head", array("title" => $head_title));
$this->view("template/notifications");
?>
<body>
	<div class="wrapping">
		<?php $this->view("template/sidebar", array("active" => "accounts")); ?>
		<div class="content">
			<?php $this->view("template/navbar", array("nav_link" => $nav_link, "nav_text" => $nav_text)); ?>
			<div class="row">
				<div class="row_1"></div>
				<div class="row_10">
					<h1>ACCOUNTS</h1>
					<form action="accounts" method="GET">
						<div class="row mt_1">
							<div class="row_10">
								<input class="textbox txt_sm" type="text" name="search" value="<?=(isset($search_val) ? $search_val : "")?>">
							</div>
							<div class="row_2 text_center">
								<input class="button btn_sm" type="submit" value="SEARCH">
							</div>
						</div>
					</form>
					<div class="row mt_1">
						<div class="row_9">
							<h4><?=$page_details["desc"]?></h4>
						</div>
						<div class="row_3 text_right">
							<button id="btn_add" class="button btn_lg mr_1">ADD</button>
						</div>
					</div>
					<div class="table_container">
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
										<form action="account_view" method="GET">
											<input type="hidden" name="id" value="<?=$val["id"]?>">
											<input class="button btn_md" type="submit" value="View">
										</form>
										<form action="account_update_view" method="GET">
											<input type="hidden" name="id" value="<?=$val["id"]?>">
											<input class="button btn_md" type="submit" value="Edit">
										</form>
										<button class="button btn_sm btn_delete" value="<?=$val["id"]?>">Delete</button>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<form class="row mt_2" action="accounts" method="GET">
						<input id="page_no" type="hidden" name="pg">
						<input type="hidden" name="search" value="<?=(isset($search_val) ? $search_val : "")?>">
						<div class="row_6 text_right">
							<button id="pg_prev" class="button btn_sm mr_1" value="<?=($page_details['prev'] != NULL ? $page_details['prev'] : '')?>" <?=($page_details["prev"] != NULL ? "" : "disabled")?>>< PAGE</button>
						</div>
						<div class="row_6 text_left">
							<button id="pg_next" class="button btn_sm mr_1" value="<?=($page_details['next'] != NULL ? $page_details['next'] : '')?>" <?=($page_details["next"] != NULL ? "" : "disabled")?>>PAGE ></button>
						</div>
					</form>
				</div>
				<div class="row_1"></div>
			</div>
		</div>
	</div>
</body>
<div id="win_add" class="window_container">
	<div class="window win_sm">
		<form action="account_add" method="POST">
			<div class="win_head">
				ADD NEW ACCOUNT
				<a id="win_add_close" class="win_close">X</a>
			</div>
			<div class="win_body">
				<div class="form">
					<div class="row">
						<div class="row_12 group">
							<div class="label">Full Name:</div>
							<input class="input" type="text" name="inp_name">
						</div>
					</div>
					<div class="row">
						<div class="row_6 group">
							<div class="label">Email:</div>
							<input class="input" type="email" name="inp_email">
						</div>
						<div class="row_6 group">
							<div class="label">Password:</div>
							<input class="input" type="password" name="inp_password">
						</div>
					</div>
				</div>
			</div>
			<div class="win_foot">
				<input class="button btn_md" type="submit" value="Add">
			</div>
		</form>
	</div>
</div>
<div id="win_delete" class="window_container">
	<div class="window win_sm">
		<form action="account_delete" method="GET">
			<div class="win_head">
				DELETE ACCOUNT
				<a id="win_delete_close" class="win_close">X</a>
			</div>
			<div class="win_body">
				<input id="delete_inp_id" type="hidden" name="inp_id">
				Are you sure you want to delete Account #<span id="delete_id"></span>?
			</div>
			<div class="win_foot">
				<input class="button btn_md" type="submit" value="Yes">
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	document.querySelector("#pg_next").onclick = function() {
		document.querySelector("#page_no").value = document.querySelector("#pg_next").value;
	};
	document.querySelector("#pg_prev").onclick = function() {
		document.querySelector("#page_no").value = document.querySelector("#pg_prev").value;
	};

	document.querySelector("#btn_add").onclick = function() {
		document.querySelector("#win_add").style.display = "block";
	};
	document.querySelector("#win_add_close").onclick = function() {
		document.querySelector("#win_add").style.display = "none";
	};

	var del_buttons = document.querySelectorAll(".btn_delete");
	for (var i = del_buttons.length - 1; i >= 0; i--) {
		del_buttons[i].onclick = function() {
			document.querySelector("#win_delete").style.display = "block";
			document.querySelector("#delete_id").textContent = this.value;
			document.querySelector("#delete_inp_id").value = this.value;
		};
	}
	document.querySelector("#win_delete_close").onclick = function() {
		document.querySelector("#win_delete").style.display = "none";
	};
</script>
</html>
