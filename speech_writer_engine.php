<?php
session_start();
include("db_con.php");
// echo $_SESSION['user_log_flag'];
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
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<style>		
			.container {
				margin-left:auto;
   				margin-right:auto;
   				width:1000px;   
   				background-color: #F5EEE6;
			}		
			.child1 {				 
				background-color: #F5EEE6;
			}
			
			.child2 {				
				background-color: #F5EEE6;
			 }
			 .insider1 {
			 	padding-right: 5px;
				padding-left: 15px;
				padding-bottom: 15px;
			 }			
			@media (min-width: 481px) and (max-width: 768px) {
			  
			  body {
			  	background-color: #F5EEE6;
			  }
			  			  .container { 			  	width:485px; 			  }			  
			  .child1 { 			  	width:250px;
			  	border: none; 			  }			  
			  .child2 { 			  	width:250px; 			  }
			  
			  #divider {
			  	width: 1px;
			  }
			  
			  .rad-button {
			  	width: 200px;
			  }			  
			}			
			@media (min-width: 321px) and (max-width: 480px) {
				  				  body {
				  	background-color: #F5EEE6;
				  }
				  
				  .container { 				  	width:450px; 				  }				  
				  .child1 { 				  	width:150px; 				  	border: none;
				  	float: left;				  					  }				  				  
			  	  .child2 { 			  	  	width:150px; 			  	  }
			  	  
			  	  img {
			  	  	width: 150px;
			  	  	height: 150px;
			  	  }
			  	  
			  	  #divider {
				  	width: 1px;
				  }
				  
				  #padder {
				  	width: 1px;
				  }
				  
				  .rad-button {
				  	width: 200px;
				  }			  	  
			}
			@media (max-width: 320px) {				
				body {
			  		background-color: #F5EEE6;
			  	}
			  	
				.container { 					width:275px; 				}
				.child1 { 					width:100px; 					border: none; 
					float: left;					}
			  	.child2 { 			  		width:100px; 			  	}
			  	
			  	img {
			  	  	width: 100px;
			  	  	height: 100px;
			  	}
			  	
			  	#padder {
				  	width: 1px;
				}
				
				.rad-button {
				  	width: 100px;
				}
			}		 					table.pic td{
			    width: 100%;
			    height: auto;
			}			nav a {
			    position: relative;
			    display: inline-block;
			    margin: 15px 25px;
			    outline: none;
			    color: #000;
			    text-decoration: none;
			    letter-spacing: 1px;
			    font-weight: 20;
			    text-shadow: 0 0 1px rgba(255,255,255,0.3);
			    font-size: 14px;
			    font-family: Verdana,Geneva,sans-serif;
			}
			.lable1 {
				font-family: 'Niconne', cursive;
				font-size: 22px;
			}
			h2 {
				margin-left:22px;
				font-family: Verdana,Geneva,sans-serif;
				color: #639A97;
			}
			h3 {
				margin-left:22px;
				font-family: Verdana,Geneva,sans-serif;
				color: #639A97;
				font-size: 15px;
			}
			nav a:hover,
			nav a:focus {
			    outline: none;
			}
			.cl-effect-14 a {
			    padding: 0 20px;
			    height: 45px;
			    line-height: 45px;
			}
			.cl-effect-14 a::before,
			.cl-effect-14 a::after {
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
			.cl-effect-14 a:hover::before,
			.cl-effect-14 a:hover::after,
			.cl-effect-14 a:focus::before,
			.cl-effect-14 a:focus::after {
			    opacity: 1;
			}
			.cl-effect-14 a:hover::before,
			.cl-effect-14 a:focus::before {
			    left: 50%;
			    -webkit-transform: rotate(0deg) translateX(-50%);
			    -moz-transform: rotate(0deg) translateX(-50%);
			    transform: rotate(0deg) translateX(-50%);
			}
			.cl-effect-14 a:hover::after,
			.cl-effect-14 a:focus::after {
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
				filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
				padding:8px 13px;
				color:#fff;
				font-family: Verdana,Geneva,sans-serif;
				font-size:17px;
				border-radius:4px;
				-moz-border-radius:4px;
				-webkit-border-radius:4px;
				border:1px solid #1A87B9;
			} 
			.label3 {
				font: 1em/1.3 Verdana,Geneva,sans-serif;							margin-top: 15px;
			}     
			.heading2 {
				font-family: 'Open Sans', sans-serif;
				color: #115458;
				font-size: 22px;
			}
			.heading3 {
				font-family: 'Open Sans', sans-serif;
				color: #115458;
				margin-right: 24px;
				font-size: 22px;
			}
			.bullets {
				font-family: Verdana;
				list-style-type: square;
			}
			.paragraph {
				font-family: 'Open Sans', sans-serif;
			}
		</style>
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		function change_color(id) { 	 
			$('#'+id).css("background-color","#cfdcdd");
		}
		
		function goBack() {
		    window.history.back();
		}

		</script>
	</head>
	<body>
		<?php
			if ($_REQUEST['step'] == "") {				$speech_image_size_query	= "SELECT * FROM speech_image_size";						$result_speech_image_size	= mysql_query($speech_image_size_query);						while ($row_speech_image_size = mysql_fetch_array($result_speech_image_size)) {						$width 	= $row_speech_image_size['width'];							$height	= $row_speech_image_size['height'];			 		}	
		?>							<div class="container" align="center">
						<h2 class="heading3">Click on the speech you need</h2> 						<table border="0" width="100%" height="250">								<tr>
								<?php	
									$main_speech_query	= "SELECT * FROM main_speech";		
									$result_main_speech	= mysql_query($main_speech_query);	
										while ($row_main_speech = mysql_fetch_array($result_main_speech)) {
											$main_speech_id 	= $row_main_speech['id'];	
											$main_speech_title 	= $row_main_speech['speech_title'];											$main_speech_image 	= $row_main_speech['image'];												?>											<td align="center" class="child1">												<a href="speech_writer_engine.php?step=2&speech_id=<?=$main_speech_id?>"><img class="img" src="images/<?=$main_speech_image?>" width="<?=$width?>px" height="<?=$height?>px"></a>											</td>											<?php	
								 		}		
								?>																</tr>						</table>
				</div>
		<?php
			}
		?>
		<?php
			if ($_GET['step'] == 2) {
		?>		
				<div class="container" align="center">
						<br/>			
						<h2 class="heading2">Click on the type of <?=strtolower($_GET['speech_title'])?> speech you need</h2>
							<table border="0">
								<tr>
									<td class="child1">
										<?php										$speech_image_query		= "SELECT * FROM main_speech WHERE id = ".$_GET['speech_id']." ";											$result_speech_image	= mysql_query($speech_image_query);											while ($row_speech_image = mysql_fetch_array($result_speech_image)) {												$speech_image = $row_speech_image['image'];													?>												<img class="pic" src="images/<?=$speech_image?>" width="200px" height="200px">												<?php 												}										 ?>	 									</td>
									<td width="50" id="divider">
										&nbsp;
									</td>	
									<td class="child1">
										<?php
										$sub_speech_query	= "SELECT * FROM sub_speech WHERE main_speech_id = ".$_GET['speech_id']." ";
										$result_sub_speech	= mysql_query($sub_speech_query);
											while ($row_sub_speech = mysql_fetch_array($result_sub_speech)) {
												$sub_speech_id 		= $row_sub_speech['id'];	
												$sub_speech_title 	= $row_sub_speech['sub_speech_title'];											?>
												<ul class="bullets">
													<li onclick="change_color(this.id);" id="<?=$row_sub_speech['id']?>"><a href="speech_writer_engine.php?step=3&speech_id=<?=$_GET['speech_id']?>&sub_speech_id=<?=$sub_speech_id?>" style="color: black; text-decoration: none;" ><?=$sub_speech_title?></a></li>
												</ul>										<?php
											}
										?> 		 											
									</td>
								</tr>
							</table>
							<br/>	
							<div style="width: 100%; ">
								<table border="0" width="100%">
									<tr>
										<td>
											<input type="button" value="Back" class="rad-button light flat rad-button small2" onclick="goBack();">
										</td>
									</tr>
								</table>			
							</div> 
				</div>	
		<?php
			}
		?>	
		<?php
			if ($_GET['step'] == 3) {
		?>		
				<form method="post" action="dynamic_steps.php">
					<div class="container" align="center" >		
						<br/>
							<table border="0">
								<tr>
									<td>
									</td>
									<td>
									</td>
									<td>
									</td>
									<td>
										<h1 class="heading2">Let's get started</h1>
									</td>
								</tr>
								<tr>
									<td width="100" id="padder">
									</td>	
									<td class="child1">	
										<?php
										if ($_GET['speech_id'] == 1) {
										?>	
											<img class="pic" src="images/Farewell-speech-builder-button-small.png" width="200px" height="200px">
										<?php
										} else if ($_GET['speech_id'] == 2) {
										?>	
											<img class="pic" src="images/welcome-speech-builder-button-small.png" width="200px" height="200px">
										<?php
										}										?>
									</td>
									<td width="50" id="divider">
										&nbsp;
									</td>	
									<td class="paragraph child1">
									<?php
									$blurb_query	= "SELECT * FROM blurb WHERE main_speech_id = ".$_GET['speech_id']." AND sub_speech_id = ".$_GET['sub_speech_id']." ";
									$result_blurb	= mysql_query($blurb_query);
										while ($row_blurb = mysql_fetch_array($result_blurb)) {
											$blurb = $row_blurb['blurb'];
										}
									echo $blurb;
									?>	
										<br>
										<br>
										To begin building this speech click "Start".
										<br><br>
										<input type="hidden" name="dynamic_step" value="dynamic_step">
									 	<input type="hidden" name="speech_id" value="<?=$_GET['speech_id']?>">
									 	<input type="hidden" name="sub_speech_id" value="<?=$_GET['sub_speech_id']?>">
									 	<input type="hidden" name="step_order" value="0">
									 	<div class = "button-wrap">
											<input type="submit" value="Start" class="rad-button light flat rad-button-long">
											 
							    		</div>	
									</td>	
								</tr>
							</table>
							<br/>	
							<div style="width: 100%; ">
								<table border="0" width="100%">
									<tr>
										<td>
											<input type="button" value="Back" class="rad-button light flat rad-button small2" onclick="goBack();">
										</td>
									</tr>
								</table>			
							</div>
				</div>	
				</form>
		<?php
			}
		?>	
	</body>	
</html>	