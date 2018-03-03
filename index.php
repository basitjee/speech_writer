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
	}?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script> 		
		<link rel="stylesheet" href="css/button.css">
		<style>			body {				 
				font-family: Verdana;			}
			.container {
				margin-left: auto;				margin-right: auto;				width: 1000px;				background-color: #F5EEE6;			}
			.child1 {
				width: 490px;				float: left;				background-color: #F5EEE6;				height: 350px;			}
			.child2 {
				width: 490px;				float: left;				background-color: #F5EEE6;				height: 350px;			} 
			@media (min-width: 481px) and (max-width: 768px) {
				.container {					width: 740px;				 								}
				.child1 {					width: 250px;				}
				.child2 {					width: 250px;									}
				
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
				
				.container {					width: 450px;				}
				.child1 {					width: 300px;									}
				.child2 {					width: 300px;				}
				
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
				.container {					width: 275px;				}
				.child1 {					width: 100px;				}
				.child2 {					width: 100px;				}
				
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
				width: 100%;				height: auto;			}
			input[type="text"] {
				width: 80%;				padding: 5px;				border: none;				border-bottom: solid 2px #c9c9c9;				transition: border 0.3s;			}
			input[type="password"] {
				width: 80%;				padding: 5px;				border: none;				border-bottom: solid 2px #c9c9c9;				transition: border 0.3s;			}
			input[type="email"] {
				width: 80%;				padding: 5px;				border: none;				border-bottom: solid 2px #c9c9c9;				transition: border 0.3s;			}
		</style>
		<script>			function validateForm() {
				var new_password = document.forms["registeration_form"]["new_password"].value;
				var verify_password = document.forms["registeration_form"]["verify_password"].value;
				if (new_password != verify_password) {
					alert("Passwords does not match");
					document.getElementById("new_password").value = "";
					document.getElementById("verify_password").value = "";
					document.getElementById("new_password").focus();
					return false;
				}
			}		</script>
	</head>
	<body>
		<div class="container" align="center">
			<div class="child2">				<table border="0" style="padding: 10px;  " id="register" width="400">					<form action="validator_registeration.php" method="post" name="registeration_form" id="registeration_form" onsubmit="return validateForm()">						<tr height="50" >							<td colspan="2" style="color:#B0362D;" align="center"><h3>Free Sign Up</h3></td>						</tr>						<tr height="25">							<td colspan="2" style="color:red;" align="center">								<div style="<?=$error_display2 ?>">									email already exist								</div>
							</td>						</tr>												<tr>							<td>Email</td>							<td>							<input type="email" name="email" required="required" >							</td>						</tr>						<tr>							<td>Password</td>							<td>							<input type="password" name="new_password" id="new_password" required="required">							</td>						</tr>						<tr>							<td>Verify Password</td>							<td>							<input type="password" name="verify_password" id="verify_password" required="required" >							</td>						</tr>						<tr>							<td></td>							<td>							<input type="submit" value="Register" class="rad-button light flat small">							&nbsp;							<input type="reset" value="Reset" class="rad-button light flat small">							</td>						</tr>						<tr height="50">							<td></td>							<td></td>						</tr>					</form>				</table>			</div>
			<div id="center"></div>							<div class="child1" style="border-left: 3px dashed #ccc;" >
				<table border="0" style="padding: 10px;" id="login" width="400">
					<form action="validator.php" method="post" name="login_form">
						<tr height="50" >
							<td colspan="2" style="color:#B0362D;" align="center"><h3>Sign In</h3></td>
						</tr>
						<tr height="25" >
							<td colspan="2" style="color:red;" align="center">								<div style="<?=$error_display ?>">									email/password not matched								</div>
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>							<input type="text" name="username" required="required" >							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>							<input type="password" name="password" required="required">							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>							<input type="submit" value="Login" class="rad-button light flat small">							&nbsp;							<input type="reset" value="Reset" class="rad-button light flat small">							</td>
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