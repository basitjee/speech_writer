<?php
session_start();
error_reporting(0);
	if ($_SESSION['is_log_user'] != 2) {			
		header("Location: index.php?error=1.php"); 
		exit;
	}
include("db_con.php");	
	if ($_POST['form_submitted'] == "form_submitted") {
		
		//---------------------------- For main speech image ------------------------//
		$target_dir 	= "../../images/";
		$target_file 	= $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk 		= 1;
		$imageFileType 	= pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image			 
	    $check 			= getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if ($check !== false) {
		        // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
			 		
			/*
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			 */
		  
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    // echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        // echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
					$picture = $_FILES["fileToUpload"]["name"];
			    } else {
			       echo "Sorry, there was an error uploading your file.";
			    }
			}
		//---------------------------- End for main speech image  ------------------------//
				
		$new_main_speech_query	= "INSERT INTO main_speech(id, speech_title, image) VALUES (NULL, '".$_POST['speech_title']."', '".$picture."')";	
		$result_new_main_speech	= mysql_query($new_main_speech_query);							
			if (!$result_new_main_speech) {
				die(mysql_error());
			}			
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

	<title>Speech Writer - Main Speech Listing</title>

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
			<!-- <span class="search"></span> -->
		</div><!--.nav-search-->

		<div class="nav-user">
			<div class="user">
				<!--
				<img src="../../assets/globals/img/faces/tolga-ergin.jpg" alt="">
				<span class="badge">3</span>
				-->
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
			<div class="logo">PLEASURE</div><!--.logo-->
		</div><!--.overlay-->

		<div class="overlay-secondary"></div><!--.overlay-secondary-->
		<!-- END OF OVERLAY HELPERS -->

	</div><!--.nav-bar-container-->

	<div class="content">

		<div class="page-header full-content bg-blue-grey">
			<div class="row">
				<div class="col-sm-6">
					<h1>Main Speech <small>Listing</small></h1>
				</div><!--.col-->
				<div class="col-sm-6">
					<ol class="breadcrumb">
						<li><a href="#"><i class="ion-home"></i></a></li>
						<li><a href="dashboard_admin.php">Dashboard</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="order_preview.php" class="active">Main Speech Listing</a></li>
					</ol>
				</div><!--.col-->
			</div><!--.row-->
		</div><!--.page-header-->		 
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title"><h4>New Main Speech</h4></div>
					</div><!--.panel-heading-->
					<div class="panel-body">

						<form name="main_speech_form" action="main_speech_listing.php" method="post" class="form-horizontal" enctype="multipart/form-data">							 
							<div class="row">
								<div class="form-group has-success has-feedback">
									<label class="control-label col-md-3" for="inputSuccess2">Main Speech Title</label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="text" class="form-control" id="speech_title" name="speech_title" required="">
												<span class="ion-android-done tooltips form-control-feedback" data-toggle="tooltip" data-placement="top" title="Success tooltip"></span>
											</div>
										</div>
									</div>
								</div>								
							</div><!--.row-->
							
							<div class="row">
								<div class="form-group has-success has-feedback">
									<label class="control-label col-md-3" for="inputSuccess2">Display Image</label>
									<div class="col-md-5">
										<div class="inputer">
											<div class="input-wrapper">
												<input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required="">
												<span class="ion-android-done tooltips form-control-feedback" data-toggle="tooltip" data-placement="top" title="Success tooltip"></span>
											</div>
										</div>
									</div>
								</div>								
							</div><!--.row-->
							
							<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">											
											<button type="submit" class="btn btn-primary">Create</button>
											<button type="reset" class="btn btn-default bv-reset">Cancel</button>
											<input type="hidden" value="form_submitted" name="form_submitted">
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
						<div class="panel-title"><h4>Main Speech Listing</h4></div>
					</div>					
					<div class="panel-heading">
						<div class="panel-title"></div>
					</div>
					<div class="panel-body">
						<?php
						$main_speech_query	= "SELECT * FROM main_speech";	
						$result_main_speech	= mysql_query($main_speech_query);
						?>
						<table data-toggle="table" data-height="300" data-sort-name="name" data-sort-order="desc">
							<thead>
								<tr>
									<th  data-sortable="true" width="50px" style="width: 50px;">Sr #</th>
									<th data-sortable="true">Speech</th>
								</tr>								
							</thead>
							<tbody>
							<?php
							$counter = 0;
							while ($row = mysql_fetch_array($result_main_speech))  {
								$main_speech_id 		= $row["id"];
								$speech_title 			= $row["speech_title"];
								$counter++;
							?>
								<tr>
									<td>
										<?=$counter?>		
									</td>									
									<td>
										<a href="sub_speech_listing.php?id=<?=$main_speech_id?>"><?=$speech_title?></a>
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