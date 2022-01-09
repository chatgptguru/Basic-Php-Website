<style>
.width-100{
	width:100%;
}
.height-100 a{
	height :  100%;
}
.d-flex{
	display: flex !important;
}

@media (min-width: 991px){
	.mobile-hide{
		display: none;
	}
}

</style>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top mobile-hide">
		<div class="container">
			<!-- BEGIN LOGO -->
<!--			<div class="page-logo">-->
<!--				<a href="index.html"><img src="../../assets/admin/layout3/img/logo-default.png" alt="logo" class="logo-default"></a>-->
<!--			</div>-->
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<div class="hor-menu width-100">
				<ul class="nav navbar-nav width-100"  style="display: flex;">
					<li class="<?php echo $_SESSION['pages'] == 'home' ? 'active' : '' ?>">
						<a href="home.php">HOME</a>
					</li>
					<li class="menu-dropdown mega-menu-dropdown <?php echo $_SESSION['pages'] == 'about' ? 'active' : '' ?>">
						<a href="about.php">
						LOGIC MODEL
						</a>
					</li>
					<li class="<?php echo $_SESSION['pages'] == 'work' ? 'active' : '' ?>">
						<a href="work.php">
						SURVEYS
						</a>
					</li>
					<li style="flex-grow : 1"></li>
					<li class="height-100">
						<?php require_once 'common/topmenu.php';?>
					</li>
				</ul>
			</div>

			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->