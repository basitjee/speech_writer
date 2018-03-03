<?php
session_start();
error_reporting(0);
	if ($_SESSION['is_log_user'] != 2) {			
		header("Location: index.php?error=1.php"); 
		exit;
	}
include("db_con.php");	
	if ($_POST['form_submitted'] == "form_submitted") {				
		$update_query					= "UPDATE blurb SET blurb = '".mysql_real_escape_string($_POST['blurb'])."' WHERE sub_speech_id = '".$_POST['sub_speech_id']."' ";			
		$result_update					= mysql_query($update_query);
		$update_sub_speech_title_query	= "UPDATE sub_speech SET sub_speech_title = '".$_POST['sub_speech_title']."' WHERE id = '".$_POST['sub_speech_id']."' ";	
		$result_update_sub_speech_title	= mysql_query($update_sub_speech_title_query);
	}	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Speech Writer - Edit Speech</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- BEGIN CORE CSS -->
	<link rel="stylesheet" href="../../assets/admin1/css/admin1.css">
	<link rel="stylesheet" href="../../assets/globals/css/elements.css">
	<!-- END CORE CSS -->

	<!-- BEGIN PLUGINS CSS -->
	<link rel="stylesheet" href="../../assets/globals/plugins/bootstrap-table/dist/bootstrap-table.min.css"> 
	<link rel="stylesheet" href="../../assets/globals/css/plugins.css">
	<!-- END PLUGINS CSS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="../../assets/globals/img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="../../assets/globals/img/icons/apple-touch-icon.png">
	<!-- END SHORTCUT AND TOUCH ICONS -->

	<script src="../../assets/globals/plugins/modernizr/modernizr.min.js"></script>
</head>
<body>

	<div class="nav-bar-container">

		<!-- BEGIN ICONS -->
		<div class="nav-menu">
			<div class="hamburger">
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
			</div><!--.hamburger-->
		</div><!--.nav-menu-->

		<div class="nav-search">
		</div><!--.nav-search-->

		<div class="nav-user">
			<div class="user">
				 
			</div><!--.user-->
			<div class="cross">
				<span class="line"></span>
				<span class="line"></span>
			</div><!--.cross-->
		</div><!--.nav-user-->
		<!-- END OF ICONS -->

		<div class="nav-bar-border"></div><!--.nav-bar-border-->

		<!-- BEGIN OVERLAY HELPERS -->
		<div class="overlay">
			<div class="starting-point">
				<span></span>
			</div><!--.starting-point-->
			<div class="logo">DASHBOARD</div><!--.logo-->
		</div><!--.overlay-->

		<div class="overlay-secondary"></div><!--.overlay-secondary-->
		<!-- END OF OVERLAY HELPERS -->

	</div><!--.nav-bar-container-->

	<div class="content">

		<div class="page-header full-content bg-blue-grey">
			<div class="row">
				<div class="col-sm-6">
					<h1>Sub Speech <small>Edit</small></h1>
				</div><!--.col-->
				<div class="col-sm-6">
					<ol class="breadcrumb">
						<li><a href="#"><i class="ion-home"></i></a></li>
						<li><a href="dashboard_admin.php">Dashboard</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="#" class="active">Sub Speech Edit</a></li>
					</ol>
				</div><!--.col-->
			</div><!--.row-->
		</div><!--.page-header-->		 
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>Edit Speech</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<?php											
					$sub_speech_query	= "SELECT sub_speech_title FROM sub_speech WHERE id = '".$_REQUEST['sub_speech_id']."'";	
					$result_sub_speech	= mysql_query($sub_speech_query);
						while ($row_sub_speech = mysql_fetch_array($result_sub_speech)) {
							$sub_speech_title = $row_sub_speech["sub_speech_title"];
						}
					$blurb_query	= "SELECT * FROM blurb WHERE sub_speech_id = '".$_REQUEST['sub_speech_id']."'";	
					$result_blurb	= mysql_query($blurb_query);
						while ($row_blurb = mysql_fetch_array($result_blurb)) {
							$blurb = $row_blurb["blurb"];
						}		
					?>	
						<form name="sub_speech_form" action="sub_speech_edit.php" method="post" class="form-horizontal" enctype="multipart/form-data">							 
							<div class="row">								
								<div class="form-group has-success has-feedback">
									<label class="control-label col-md-3" for="inputSuccess2">Speech Title</label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="text" class="form-control" id="sub_speech_title" name="sub_speech_title" required="" value="<?=$sub_speech_title?>">
												<span class="ion-android-done tooltips form-control-feedback" data-toggle="tooltip" data-placement="top" title="Success tooltip"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="control-label col-md-3" for="inputSuccess2">Blurb</label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<textarea id="blurb" name="blurb" cols="40" rows="5"><?=$blurb?></textarea>
												<span class="ion-android-done tooltips form-control-feedback" data-toggle="tooltip" data-placement="top" title="Success tooltip"></span>
											</div>
										</div>
									</div>
								</div>								
							</div><!--.row-->
							
							<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">											
											<button type="submit" class="btn btn-primary">Save</button>
											<button type="reset" class="btn btn-default bv-reset">Cancel</button>
											<input type="hidden" value="form_submitted" name="form_submitted">											
											<input type="hidden" value="<?=$_REQUEST['sub_speech_id']?>" name="sub_speech_id">
										</div>
									</div>
							</div>
								
						</form>

					</div><!--.panel-body-->
				</div><!--.panel-->
			</div><!--.col-md-12-->
		</div><!--.row-->
		<div class="form-actions">
			<div class="row">
				<div class="col-md-12" align="center">
					<a href="dashboard_admin.php"><button type="submit" class="btn btn-primary">Back</button></a>							
				</div>
			</div>
		</div>		 
	</div><!--.content-->

	<div class="layer-container">

		<!-- BEGIN MENU LAYER -->
		<?php
		include("menu_admin.php");
		?>
		<!-- END OF MENU LAYER -->

		<!-- BEGIN SEARCH LAYER -->
		<div class="search-layer">
			<div class="search">
				<form action="pages-search-results.html">
					<div class="form-group">
						<input type="text" id="input-search" class="form-control" placeholder="type something">
						<button type="submit" class="btn btn-default disabled"><i class="ion-search"></i></button>
					</div>
				</form>
			</div><!--.search-->

			 
		</div><!--.search-layer-->
		<!-- END OF SEARCH LAYER -->

	</div><!--.layer-container-->

	<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="../../assets/globals/js/global-vendors.js"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<!-- BEGIN PLUGINS AREA -->
	<script src="../../assets/globals/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
	<!-- END PLUGINS AREA -->

	<!-- PLUGINS INITIALIZATION AND SETTINGS -->
	<script src="../../assets/globals/scripts/tables-bootstrap.js"></script>
	<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

	<!-- PLEASURE -->
	<script src="../../assets/globals/js/pleasure.js"></script>
	<!-- ADMIN 1 -->
	<script src="../../assets/admin1/js/layout.js"></script>

	<!-- BEGIN INITIALIZATION-->
	<script>
	$(document).ready(function () {
		Pleasure.init();
		Layout.init();
		TablesBootstrap.init();
	});
	</script>
	<!-- END INITIALIZATION-->

	 

</body>
</html>