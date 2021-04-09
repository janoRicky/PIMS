<div class="sidebar">
	<div class="row mt_2">
		<div class="row_3"></div>
		<div class="row_6">
			<img class="logo" src="./assets/img/PIS.png">
		</div>
		<div class="row_3"></div>
	</div>
	<div class="row">
		<div class="row_12 text_center">
			<span class="title">
				<span class="cap">P</span> 
				<span class="cap">I</span> 
				<span class="cap">M</span> 
				<span class="cap">S</span>
			</span>
		</div>
	</div>
	<ul>
		<br>
		<a href="dashboard">
			<li class="<?=($active == 'dashboard'?'active':'')?> row">
				<div class="row_3 icon">&#8962;</div>
				<div class="row_9 text">&nbsp;Dashboard</div>
			</li>
		</a>
		<a href="<?=($active == 'items'?'active':'')?> items">
			<li class="row">
				<div class="row_3 icon">&#128463;</div>
				<div class="row_9 text">&nbsp;Items</div>
			</li>
		</a>
		<a href="<?=($active == 'accounts'?'active':'')?> accounts">
			<li class="row">
				<div class="row_3 icon">&#197;</div>
				<div class="row_9 text">&nbsp;Accounts</div>
			</li>
		</a>
		<br><br>
		<a href="login">
			<li class="row">
				<div class="row_3 icon">&#10550;</div>
				<div class="row_9 text">&nbsp;Logout</div>
			</li>
		</a>
	</ul>
</div>