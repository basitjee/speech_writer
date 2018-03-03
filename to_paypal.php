<?php
session_start();
include("db_con.php");
	if ($_SESSION['user_log_flag'] == 1) {
		// code for setting paypal, its parameters and redirect to paypal
		die("code for setting paypal, its parameters and redirect to paypal");	
	} else {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/button.css">
		<style>
			
			body {
				font-family: Verdana;				
			}
			
			.container {
				margin-left:auto;
   				margin-right:auto;
   				width:1000px;
   				background-color: #F5EEE6;     			  			 
			}
			
			.child1 {
				width:490px;
				float:left;
			 	background-color: #F5EEE6;   	
			}
			
			.child2 {
				width:490px;
				float:left;
			 	background-color: #F5EEE6;
			 	height: 230px;   		
			}
			
			@media (min-width: 481px) and (max-width: 768px) {
			  .container { width:740px; }
			  .child1 { width:250px; }
			  .child2 { width:250px; }			   
			}
			
			@media (min-width: 321px) and (max-width: 480px) {
				  .container { width:450px; }
				  .child1 { width:150px; }
			  	  .child2 { width:150px; }
			}	
			
			@media (max-width: 320px) {
				.container { width:275px; }
				.child1 { width:100px; }
			  	.child2 { width:100px; }
			}
			
			img {
			    width: 100%;
			    height: auto;
			}	
			
			input[type="text"] {
			  width: 80%;
			  padding: 5px;
			  border: none;
			  border-bottom: solid 2px #c9c9c9;
			  transition: border 0.3s;
			}

			input[type="password"] {
			  width: 80%;
			  padding: 5px;
			  border: none;
			  border-bottom: solid 2px #c9c9c9;
			  transition: border 0.3s;
			}
			
			input[type="email"] {
			  width: 80%;
			  padding: 5px;
			  border: none;
			  border-bottom: solid 2px #c9c9c9;
			  transition: border 0.3s;
			}
			
		</style>
		<script>
		
		function show_register() {			 
			$("#login").hide();
			$("#register").show();
		}
				
		function show_login() {
			$("#register").hide();
			$("#login").show();			
		}
		
		</script>
	</head>
	<body >
		<div class="container" align="center">
			<div class="child1">
				<!-- <a href="speech_writer_engine.php"><img src="images/free_worksheets_mst1.jpg"></a> -->				 
				
				<table border="0" style="padding: 10px;" id="login">
					<form action="speech_writer_engine.php" method="post" name="login_form">
					<tr height="50">
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" required="required" ></td>
					</tr>
					<tr>	
						<td>Password</td>
						<td><input type="password" name="password" required="required"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>	
					<tr>
						<td></td>
						<td><input type="submit" value="Login" class="rad-button light flat small">&nbsp;<input type="reset" value="Reset" class="rad-button light flat small"></td>
					</tr>
					<tr height="50">
						<td></td>
						<td><a onclick="show_register();" href="#">Register For Free</a></td>
					</tr>
					</form>
				</table>
				<table border="0" style="padding: 10px; display: none;" id="register">
					<form action="speech_writer_engine.php" method="post" name="register_form">
					<tr height="50">
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Full Name</td>
						<td><input type="text" name="fullname" required="required"></td>
					</tr>
					<tr>	
						<td>Email</td>
						<td><input type="email" name="email" required="required" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="new_password" required="required"></td>
					</tr>	
					<tr>
						<td>Verify Password</td>
						<td><input type="password" name="verify_password" required="required" ></td>
					</tr>	
					<tr>
						<td></td>
						<td><input type="submit" value="Register" class="rad-button light flat small">&nbsp;<input type="reset" value="Reset" class="rad-button light flat small"></td>
					</tr>
					<tr height="50">
						<td></td>
						<td><a onclick="show_login();" href="#">Login</a></td>
					</tr>
					</form>
				</table>	
				
			</div>
			<!--
			<div style="float: left; background-color: #F5EEE6; height: auto;">
			 &nbsp;&nbsp;&nbsp;
			</div>
			-->	 	
			<div class="child2">
				<!-- <img src="images/links.jpg"> -->
				
				<table border="0">
					<tr height="80">
						<td></td>						 
					</tr>
					<tr>	
						<td></td>						 
					</tr>
					<tr>
						<td></td>
					</tr>
				</table>
			</div>	  	
		</div>		
	</body>	
</html>	
<?php
	}
?>