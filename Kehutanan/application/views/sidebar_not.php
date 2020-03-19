	<!--tamplate untuk side bar sebelum login-->
</nav>
	<!--Status login anda-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Anda Belum Login</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--Tampilan search di sidebar sebelum login-->
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<!--Menu navigasi di sidebar sebelum login-->
		</form>
		<ul class="nav menu">
			<li class="active"><a href="dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><?php echo anchor('login/index/', 'Login');?></a></li>
		</ul>
	</div>
