<?php
	if ($_REQUEST["error"] == 1) {
		$error_display = "display: block;";
	} else {
		$error_display = "display: none;";
	}
	if ($_REQUEST["error"] == 2) {
		$error_display2 = "display: block;";
	} else {
		$error_display2 = "display: none;";
	}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script> 		
		<link rel="stylesheet" href="css/button.css">
		<style>
				font-family: Verdana;
			.container {
				margin-left: auto;
			.child1 {
				width: 490px;
			.child2 {
				width: 490px;
			@media (min-width: 481px) and (max-width: 768px) {
				.container {
				.child1 {
				.child2 {
				
				#register {
					width: 250px;
				}
				
				#login {
					width: 250px;
				}
			}
			@media (min-width: 321px) and (max-width: 480px) {
				body {
					background-color: #F5EEE6;
				}	
				
				.container {
				.child1 {
				.child2 {
				
				#register {
					width: 300px;
				}
				
				#login {
					width: 300px;
				}
				
				#center {
					clear: both;
				}
			}
			@media (max-width: 320px) {
				
				body {
					background-color: #F5EEE6;
				}	
				.container {
				.child1 {
				.child2 {
				
				#register {
					width: 150px;
				}
				
				#login {
					width: 150px;
				}
				
				#center {
					clear: both;
				}
			}
			img {
				width: 100%;
			input[type="text"] {
				width: 80%;
			input[type="password"] {
				width: 80%;
			input[type="email"] {
				width: 80%;

		<script>
				var new_password = document.forms["registeration_form"]["new_password"].value;
				var verify_password = document.forms["registeration_form"]["verify_password"].value;
				if (new_password != verify_password) {
					alert("Passwords does not match");
					document.getElementById("new_password").value = "";
					document.getElementById("verify_password").value = "";
					document.getElementById("new_password").focus();
					return false;
				}
			}
	</head>
	<body>
		<div class="container" align="center">
			<div class="child2">
							</td>
			<div id="center"></div>				
				<table border="0" style="padding: 10px;" id="login" width="400">
					<form action="validator.php" method="post" name="login_form">
						<tr height="50" >
							<td colspan="2" style="color:#B0362D;" align="center"><h3>Sign In</h3></td>
						</tr>
						<tr height="25" >
							<td colspan="2" style="color:red;" align="center">
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>
						</tr>
						<tr>
							<td>Password</td>
							<td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
						</tr>
						<tr height="50">
							<td></td>
							<td></td>
						</tr>
					</form>
				</table>
			</div>
		</div>
	</body>
</html>