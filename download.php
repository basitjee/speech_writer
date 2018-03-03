<?php 
session_start();
include ("db_con.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title></title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="css/button.css">
		<link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<style>
		
			.box1 {				 
				height: 35px; 
				display: table-cell; 
				vertical-align: middle; 
				width: 400px;
				text-align: left;
			}

			.static_header {
				position: fixed;
				top: 35px;
				/* left: 350px; */
			}

			#custom {
				-moz-appearance: none;
				-webkit-appearance: none;
				appearance: none;
				width: 60px;
				height: 60px;
				border: 5px solid #B0362D;
				background: white;
				border-radius: 50%;
				/* box-shadow:inset 0 0 50px rgba(0,0,0,.2); */
			}

			#custom:checked {
				/*background:red;*/
				border: 5px solid #B0362D;
				background-color: #cfdcdd !important;
			}

			iframe {
				width: 100%;
				height: 1000px;
				float: left;
			}

			#writeroot {
				border: 1px solid #000000;
				margin-left: 1%;
				width: 49%;
				height: 400px;
			}

			span.separator {
				font-size: 200%;
				font-weight: bold;
			}

			.top_header {
				margin-left: auto;
				margin-right: auto;
				width: 1000px;
				height: 35px;
				background-color: #639A97;
				border-left: 1px solid #ccc;
				border-right: 1px solid #ccc;
				border-left: 1px solid #ccc;
				border-top: 1px solid #ccc;
			}

			.container {
				margin-left: auto;
				margin-right: auto;
				width: 1000px;
				background-color: #F5EEE6;
			}

			.child1 {
				width: 450px;
				float: left;				
				border: 1px solid #ccc;
				background-color: #F2F2F2;
				height: 500px;
				overflow-y: auto;
			}

			.child2 {
				width: 450px;
				float: left;				
				background-color: #F5EEE6;
				height: 400px;
				overflow-y: auto;
				padding: 8px;
				padding-top: 50px;
			}

			.insider1 {
				padding-right: 5px;
				padding-left: 15px;
				padding-bottom: 15px;
			}

			@media (min-width: 481px) and (max-width: 768px) {
				
				.container {
					width: 740px;
				}
				.child1 {
					width: 250px;
					border: none;
				}
				.child2 {
					width: 250px;
				}
				.top_header {
					display: none;
				}
				
				.box1 {
					width: 225px;
				}
				
				.extended-button {
					width: 100px;
				}

			}

			@media (min-width: 321px) and (max-width: 480px) {
				.container {
					width: 450px;
				}
				.child1 {
					width: 150px;
					border: none;
				}
				.child2 {
					width: 150px;
				}
				.top_header {
					display: none;
				}
			}

			@media (max-width: 320px) {
				.container {
					width: 275px;
				}
				.child1 {
					width: 100px;
					border: none;
				}
				.child2 {
					width: 100px;
				}
				.top_header {
					display: none;
				}
			}

			img {
				/*
				 width: 100%;
				 height: auto;
				 */
			}

			nav a {
				position: relative;
				display: inline-block;
				margin: 15px 25px;
				outline: none;
				color: #000;
				text-decoration: none;
				letter-spacing: 1px;
				font-weight: 20;
				text-shadow: 0 0 1px rgba(255,255,255,0.3);
				font-size: 20px;
				font-family: 'Niconne', cursive;
			}

			h2 {
				margin-left: 22px;
				font-family: 'Courgette', cursive;
				color: #639A97;
			}

			h3 {
				margin-left: 22px;
				font-family: 'Courgette', cursive;
				color: #639A97;
				font-size: 15px;
			}

			nav a:hover, nav a:focus {
				outline: none;
			}

			.cl-effect-14 a {
				padding: 0 20px;
				height: 45px;
				line-height: 45px;
			}

			.cl-effect-14 a::before, .cl-effect-14 a::after {
				position: absolute;
				width: 45px;
				height: 2px;
				background: #000;
				content: '';
				opacity: 0.2;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
				pointer-events: none;
			}

			.cl-effect-14 a::before {
				top: 0;
				left: 0;
				-webkit-transform: rotate(90deg);
				-moz-transform: rotate(90deg);
				transform: rotate(90deg);
				-webkit-transform-origin: 0 0;
				-moz-transform-origin: 0 0;
				transform-origin: 0 0;
			}

			.cl-effect-14 a::after {
				right: 0;
				bottom: 0;
				-webkit-transform: rotate(90deg);
				-moz-transform: rotate(90deg);
				transform: rotate(90deg);
				-webkit-transform-origin: 100% 0;
				-moz-transform-origin: 100% 0;
				transform-origin: 100% 0;
			}

			.cl-effect-14 a:hover::before, .cl-effect-14 a:hover::after, .cl-effect-14 a:focus::before, .cl-effect-14 a:focus::after {
				opacity: 1;
			}

			.cl-effect-14 a:hover::before, .cl-effect-14 a:focus::before {
				left: 50%;
				-webkit-transform: rotate(0deg) translateX(-50%);
				-moz-transform: rotate(0deg) translateX(-50%);
				transform: rotate(0deg) translateX(-50%);
			}

			.cl-effect-14 a:hover::after, .cl-effect-14 a:focus::after {
				right: 50%;
				-webkit-transform: rotate(0deg) translateX(50%);
				-moz-transform: rotate(0deg) translateX(50%);
				transform: rotate(0deg) translateX(50%);
			}

			.btnExample {
				color: #900;
				background: #FF0;
				font-weight: bold;
				border: 1px solid #900;
			}

			.btnExample:hover {
				color: #FFF;
				background: #900;
			}

			.styled-button-8 {
				background: #25A6E1;
				background: -moz-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#25A6E1),color-stop(100%,#188BC0));
				background: -webkit-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: -o-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: -ms-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				filter: progid : DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
				padding: 8px 13px;
				color: #fff;
				font-family: 'Helvetica Neue', sans-serif;
				font-size: 17px;
				border-radius: 4px;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
				border: 1px solid #1A87B9
			}

			input[type="text"] {
				padding: 10px;
				border: solid 1px #dcdcdc;
				transition: box-shadow 0.3s, border 0.3s;
				width: 550px;
				font: 0.813em/1.3 Verdana, Geneva, sans-serif;
			}

			input:focus {
				border: 1px solid #B0362D;
			}

			.login_textbox {
				width: 80% !important;
				padding: 5px !important;
				border: none !important;
				border-bottom: solid 2px #c9c9c9 !important;
				transition: border 0.3s;
				font: 0.813em/1.3 Verdana, Geneva, sans-serif !important;
			}

			.password_textbox {
				width: 80%;
				padding: 5px;
				border: none;
				border-bottom: solid 2px #c9c9c9;
				transition: border 0.3s;
			}

			textarea {
				font: 0.813em/1.3 Verdana, Geneva, sans-serif;
			}

			.question {
				font: 2em/1.3 'Open Sans', sans-serif;
				color: #115458;
			}

			.sub_heading {
				font: 1em/1.3 'Open Sans', sans-serif;
				color: #115458;
			}

			.question2 {
				font: 'Open Sans', sans-serif;
				color: #115458;
			}
			
			.font1 {
				font-family: 'Open Sans', sans-serif;				
			}

			.font2 {
				font-family: 'Open Sans', sans-serif;
				color: #115458;
				font-size: 14px;
			}
			
			input {
				font: 1em/1.3 Verdana, Geneva, sans-serif;
			}

			.label1 {
				font: 1em/1.3 Verdana, Geneva, sans-serif;
				color: #639A97;
				margin-top: 15px;
			}

			.label2 {
				font: 1em/1.3 Verdana, Geneva, sans-serif;
				font-size: 15px;
				border-bottom: 1px solid #B0362D;
				/* cursor: grab; */
				padding-bottom: 20px;
			}

			.label3 {
				font: 1em/1.3 Verdana, Geneva, sans-serif;
				color: #639A97;
			}

			.last_step_note {
				font: 1em/1.3 Verdana, Geneva, sans-serif;
				font-size: 15px;
				color: #639A97;
				margin-left: 8px;
				margin-right: 8px;
			}

			input[type="button"] {
				webkit-box-shadow: rgba(0,0,0,0.98) 0 1px 0 0;
				-moz-box-shadow: rgba(0,0,0,0.98) 0 1px 0 0;
				box-shadow: rgba(0,0,0,0.98) 0 1px 0 0;
				background-color: #EEE;
				border-radius: 0;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border: 1px solid #999;
				color: #666;
				font: 1em/1.3 Verdana, Geneva, sans-serif;
				font-size: 11px;
				font-weight: 700;
				padding: 2px 6px;
			}

			textarea {
				width: 100%;
				margin: 0;
				padding: 0;
				border-width: 1;
			}

			.login_container1 {
				width: 490px;
				float: left;
				background-color: #F5EEE6;
			}
			
			
		</style>
		<script src="buttons.js" type="text/javascript"></script>
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
		<script>
		function process() {
			document.getElementById("hidden").value = document.getElementById("content").innerHTML;
  			return true;			
		}
		</script>
	</head>
	<body>
		<div class="container" align="center">			
			<font class="question">
				<div>
					Fantastic! Edit, then download your speech
					<br/>
				</div>
			</font>
			 
				<?php
					if (isset($_REQUEST["speech_id"])) { 
				?>				
						<div align="left" class="font2" style="margin-top: 20px; padding-left: 10px;">
							 
						</div>	
						<div class="child1" align="left" style="padding-left: 10px;" contenteditable="true" id="content">
						<?php
						$speech_query 	= "SELECT * FROM purchased_speeches WHERE sold_speech_id = '".$_REQUEST['speech_id']."' ";								
						$result_speech	= mysql_query($speech_query);
							while ($row_speech = mysql_fetch_array($result_speech)) {
								$speech = $row_speech['speech'];																
							}		
						echo $speech; 	
						?>		
						</div>
					<div align="center" class="child2">
						<div class="box1 sub_heading">
							<b>1. Check & edit your speech one last time</b> 
								<br/>
							(Read your speech out loud several times to  make sure it flows well and you have included everything you want to say. Click into the text if you need to make changes. <br> <br> Do not click Download My Speech until you have your speech just as you want it. Once you press the download button you can not return to edit it again.)						
						</div> 
						<br/>
						<form method="post" action="pdf.php" name="pdf_form" onsubmit="javascript: return process();">
							<input type="hidden" name="speech_id" value="<?=$_REQUEST['speech_id']?>">
							<input type="hidden" id="hidden" name="content" vlaue="<?php echo $speech; ?>">
							<input type="submit" value="Download My Speech" class="rad-button light flat rad-button-editor extended-button">							
							<div class="box1 sub_heading" style="padding-top: 20px;">
								Your speech will open in a pdf format in a new window. Please save it immediately.
							</div>
						</form>
						<br/> 
						<table border="0">							 
							<tr>
								<td align="center">
									<a href="https://www.write-out-loud.com/product-support.html" target="_new">Help</a>
								</td>
							</tr>
							<tr>
								<td align="center">
									<a href="https://www.write-out-loud.com">Home</a>
								</td>
							</tr>		
							
											
						</table>	
					</div>
					<div style="float: left; width: 450px; padding-top: 35px;" align="center" >
								
					</div>
				<?php
					} else { 
				?>
						<div class="child1" align="left">
							Access Denied
						</div>
				<?php
					}  
				?>
				
				 
				<!-- div for selection text -->

				 
				<!-- End div for selection text -->
				
				<div style="clear: both;"></div>
				<br/>
				<br/>
				&nbsp;
			 	
		</div>

	</body>
</html>
