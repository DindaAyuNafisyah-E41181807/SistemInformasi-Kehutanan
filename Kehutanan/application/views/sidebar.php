<!--tamplate untuk side bar sesudah login-->
</nav>
	<!--Status login anda-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Selamat Datang Admin!</div>
			</div>
			<div class="clear"></div>
		<!--Tampilan search di sidebar sesudah login-->
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		<!--Menu navigasi di sidebar sesudah login-->
		</form>
		<ul class="nav menu">
			<li><?php echo anchor('crud/index/', 'Master Pesanggem');?></li>
			<li><?php echo anchor('admin/index/', 'Admin');?></li>
			<li><?php echo anchor('login/logout/', 'Logout');?></li>
		</ul>
	</div>
	