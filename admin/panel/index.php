<?php
	if ($_REQUEST['error'] == 1) {
		$message = "Access Denied";
	} else {
		$message = "";
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

	<title>Speech Writer - Admin Panel Login</title>

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
	<link rel="stylesheet" href="../../assets/globals/plugins/bootstrap-social/bootstrap-social.css">
	<!-- END PLUGINS CSS -->

	<!-- FIX PLUGINS -->
	<link rel="stylesheet" href="../../assets/globals/css/plugins.css">
	<!-- END FIX PLUGINS -->

	<!-- BEGIN SHORTCUT AND TOUCH ICONS -->
	<link rel="shortcut icon" href="../../assets/globals/img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="../../assets/globals/img/icons/apple-touch-icon.png">
	<!-- END SHORTCUT AND TOUCH ICONS -->

	<script src="../../assets/globals/plugins/modernizr/modernizr.min.js"></script>
	<style>
	input {
		color: white;
	}
	</style>
</head>
<body class="bg-login">

	<div class="login-screen">
		<div class="panel-login blur-content">
			<div class="panel-heading"><img src="../../assets/globals/img/teamfox.png" height="100" alt=""></div><!--.panel-heading-->
			
			<form method="post" name="login_form" action="validator.php">
			<div id="pane-login" class="panel-body active">
				<h2>Login to Dashboard</h2>				
				<div align="center" style="color: red;">
					<?=$message?>
				</div>	
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" style="color: white;">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" style="color: white;">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-buttons clearfix">
					<!--<label class="pull-left"><input type="checkbox" name="remember" value="1">  Remember me </label> -->					
					<button type="submit" class="btn btn-success pull-right">Login</button>
					
				</div><!--.form-buttons-->

			</div><!--#login.panel-body-->
			</form>

			<div id="pane-forgot-password" class="panel-body">
				<h2>Forgot Your Password</h2>
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="email" class="form-control" placeholder="Enter your email address">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-buttons clearfix">
					<button type="submit" class="btn btn-white pull-left show-pane-login">Cancel</button>
					<button type="submit" class="btn btn-success pull-right">Send</button>
				</div><!--.form-buttons-->
			</div><!--#pane-forgot-password.panel-body-->

			<div id="pane-create-account" class="panel-body">
				<h2>Create a New Account</h2>
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="text" class="form-control" placeholder="Enter your full name">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="email" class="form-control" placeholder="Enter your email address">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="password" class="form-control" placeholder="Enter your password">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-group">
					<div class="inputer">
						<div class="input-wrapper">
							<input type="password" class="form-control" placeholder="Enter your password again">
						</div>
					</div>
				</div><!--.form-group-->
				<div class="form-group">
					<label><input type="checkbox" name="remember" value="1"> I have read and agree to the term of use.</label>
				</div>
				<div class="form-buttons clearfix">
					<button type="submit" class="btn btn-white pull-left show-pane-login">Cancel</button>
					<button type="submit" class="btn btn-success pull-right">Sign Up</button>
				</div><!--.form-buttons-->
			</div><!--#login.panel-body-->

		</div><!--.blur-content-->
	</div><!--.login-screen-->

	<div class="bg-blur dark">
		<div class="overlay"></div><!--.overlay-->
	</div><!--.bg-blur-->

	<svg version="1.1" xmlns='http://www.w3.org/2000/svg'>
		<filter id='blur'>
			<feGaussianBlur stdDeviation='7' />
		</filter>
	</svg>

	<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="../../assets/globals/js/global-vendors.js"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<!-- BEGIN PLUGINS AREA -->
	<!-- END PLUGINS AREA -->

	<!-- PLUGINS INITIALIZATION AND SETTINGS -->
	<script src="../../assets/globals/scripts/user-pages.js"></script>
	<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

	<!-- PLEASURE Initializer -->
	<script src="../../assets/globals/js/pleasure.js"></script>
	<!-- ADMIN 1 Layout Functions -->
	<script src="../../assets/admin1/js/layout.js"></script>

	<!-- BEGIN INITIALIZATION-->
	<script>
	$(document).ready(function () {
		Pleasure.init();
		Layout.init();
		UserPages.login();
	});
	</script>
	<!-- END INITIALIZATION-->

	<!-- BEGIN Google Analytics -->
	<script>
		

		ga('create', Pleasure.settings.ga.urchin, Pleasure.settings.ga.url);
		ga('send', 'pageview');
	</script>
	<!-- END Google Analytics -->

</body>
</html>