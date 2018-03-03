<?php
session_start();
error_reporting(0);
	if ($_SESSION['is_log_user'] != 2) {			
		header("Location: index.php?error=1.php"); 
		exit;
	}
include("db_con.php");	
	if ($_POST['form_submitted'] == "form_submitted") {
		$new_main_speech_query	= "INSERT INTO sub_speech(id, main_speech_id, sub_speech_title) VALUES (NULL, '".$_POST['id']."', '".$_POST['sub_speech_title']."')";	
		$result_new_main_speech	= mysql_query($new_main_speech_query);							
			if (!$result_new_main_speech) {
				die(mysql_error());
			}			
		$sub_speech_id			= mysql_insert_id();	
		$blurb_query			= "INSERT INTO blurb(id, main_speech_id, sub_speech_id, blurb) VALUES (NULL, '".$_POST['id']."', '".$sub_speech_id."', '".$_POST['blurb']."')";	
		$result_blurb			= mysql_query($blurb_query);
		 
	}
	if ($_GET['delete'] == 'yes') {
		$delete_query	= "DELETE FROM sub_speech WHERE id = '".$_GET['sub_speech_id']."'";	
		$result_delete	= mysql_query($delete_query);
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

	<title>Speech Writer - Sub Speech Listing</title>

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
					<h1>Sub Speech <small>Listing</small></h1>
				</div><!--.col-->
				<div class="col-sm-6">
					<ol class="breadcrumb">
						<li><a href="#"><i class="ion-home"></i></a></li>
						<li><a href="dashboard_admin.php">Dashboard</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="#" class="active">Sub Speech Listing</a></li>
					</ol>
				</div><!--.col-->
			</div><!--.row-->
		</div><!--.page-header-->		 
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>New Sub Speech</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">
					<?php											
					$main_speech_query	= "SELECT * FROM main_speech WHERE id = '".$_REQUEST['id']."'";	
					$result_main_speech	= mysql_query($main_speech_query);
						while ($row_main_speech = mysql_fetch_array($result_main_speech))  {
							$main_speech_id 	= $row_main_speech["id"];
							$main_speech_title 	= $row_main_speech["speech_title"];
						}	
					?>	
						<form name="sub_speech_form" action="sub_speech_listing.php" method="post" class="form-horizontal" enctype="multipart/form-data">							 
							<div class="row">
								<div class="form-group has-success has-feedback">
									<label class="control-label col-md-3" for="inputSuccess2">Main Speech</label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="text" class="form-control" id="main_speech_title" name="main_speech_title" disabled="" value="<?=$main_speech_title?>" >
												<span class="ion-android-done tooltips form-control-feedback" data-toggle="tooltip" data-placement="top" title="Success tooltip"></span>
											</div>
										</div>
									</div>
								</div>	
								<div class="form-group has-success has-feedback">
									<label class="control-label col-md-3" for="inputSuccess2">Sub Speech Title</label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="text" class="form-control" id="sub_speech_title" name="sub_speech_title" required="">
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
												<input type="text" class="form-control" id="blurb" name="blurb" required="">
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
											<input type="hidden" value="<?=$main_speech_id?>" name="id">
										</div>
									</div>
							</div>
								
						</form>

					</div><!--.panel-body-->
				</div><!--.panel-->
			</div><!--.col-md-12-->
		</div><!--.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>Sub Speech Listing</h4></div>
					</div>					
					<div class="panel-heading">
						<div class="panel-title"></div>
					</div>
					<div class="panel-body">
						<?php
						$sub_speech_query	= "SELECT * FROM sub_speech WHERE main_speech_id = '".$_REQUEST['id']."'";	
						$result_sub_speech	= mysql_query($sub_speech_query);
						?>
						<table data-toggle="table" data-height="300" data-sort-name="name" data-sort-order="desc">
							<thead>
								<tr>
									<th  data-sortable="true" width="50px" style="width: 50px;">Sr #</th>
									<th data-sortable="true">Sub Speeches</th>
									<th data-sortable="true">Blurb</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>								
							</thead>
							<tbody>
							<?php
							$counter = 0;
							while ($row = mysql_fetch_array($result_sub_speech))  {
								$sub_speech_id 		= $row["id"];
								$main_speech_id 	= $row["main_speech_id"];
								$sub_speech_title 	= $row["sub_speech_title"];
								$blurb_query		= "SELECT * FROM blurb WHERE sub_speech_id = '".$sub_speech_id."'";	
								$result_blurb		= mysql_query($blurb_query);
								$row_blurb			= mysql_fetch_row($result_blurb);
								$counter++;
							?>
								<tr>
									<td>
										<?=$counter?>		
									</td>									
									<td>
										<?=$sub_speech_title?>
									</td>
									<td>
										<?php
										echo $row_blurb[3];
										?>
									</td>		
									<td>
										<a href="sub_speech_edit.php?id=<?=$main_speech_id?>&sub_speech_id=<?=$sub_speech_id?>">Edit</a>
									</td>
									<td>
										<a href="sub_speech_listing.php?id=<?=$main_speech_id?>&sub_speech_id=<?=$sub_speech_id?>&delete=yes">Delete</a>
									</td>						
								</tr>									 
							<?php
							}
							?>
							</tbody>	
						</table>
					</div>
					
				</div><!--.panel-->
			</div><!--.col-md-6-->
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