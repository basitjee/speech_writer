<?php
session_start();
include("db_con.php");
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
			
			.static_header {
				position:fixed;
				top: 35px;
			}
			
			#custom {	
			    -moz-appearance:none;
			    -webkit-appearance:none;			     
			    appearance:none;
			    width:60px;
			    height:60px;
			    border:5px solid #B0362D; 
			    background:white; 
			    border-radius:50%;
			}
			
			#custom:checked {
			    border: 5px solid #B0362D;
    			background-color:#cfdcdd !important;                
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
				margin-left:auto;
   				margin-right:auto;
   				width:1000px;
   				height:35px;
   				background-color: #639A97;
   				border-left: 1px solid #ccc;
   				border-right: 1px solid #ccc;
   				border-left: 1px solid #ccc;
   				border-top: 1px solid #ccc;
			}
			
			.container {
				margin-left:auto;
   				margin-right:auto;
   				width:1000px;
 				background-color: #F5EEE6;
			}
			
			.child1 {
				width:450px;
				float:left;
				border: 1px solid #ccc;				
				background-color: #F2F2F2;	
				height: 500px; 
    			overflow-y: auto; 
			}
			
			.child2 {
				width:500px;
				float:left;
				background-color: #F2F2F2;
			 	height: 400px; 
			 	overflow-y: auto;
			 	padding: 8px;
			 }
			 
			 .insider1 {
			 	padding-right: 5px;
				padding-left: 15px;
				padding-bottom: 15px;
			 }
			
			@media (min-width: 481px) and (max-width: 768px) {
			  .container { width:740px; }
			  .child1 { width:250px; border: none; }
			  .child2 { width:250px; }
			  .top_header { display: none; }
			   
			}
			
			@media (min-width: 321px) and (max-width: 480px) {
				  .container { width:450px; }
				  .child1 { width:150px; border: none; }
			  	  .child2 { width:150px; }
			  	  .top_header { display: none; }
			}	
			
			@media (max-width: 320px) {
				.container { width:275px; }
				.child1 { width:100px; border: none; }
			  	.child2 { width:100px; }
			  	.top_header { display: none; }
			}
			
			img {
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
				margin-left:22px;
				font-family: 'Courgette', cursive;
				color: #639A97;
			}

			h3 {
				margin-left:22px;
				font-family: 'Courgette', cursive;
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
				background: -moz-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#25A6E1),color-stop(100%,#188BC0));
				background: -webkit-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: -o-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: -ms-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
				filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
				padding:8px 13px;
				color:#fff;
				font-family:'Helvetica Neue',sans-serif;
				font-size:17px;
				border-radius:4px;
				-moz-border-radius:4px;
				-webkit-border-radius:4px;
				border:1px solid #1A87B9
			} 
			
			input[type="text"] {
			  padding: 10px;
			  border: solid 1px #dcdcdc;
			  transition: box-shadow 0.3s, border 0.3s;
			  width: 550px;
			  font: 0.813em/1.3 Verdana,Geneva,sans-serif;
			}
			
			input:focus {
				border:1px solid #B0362D; 			    
			}        
			
			.login_textbox {
			  width: 80% !important;
			  padding: 5px !important;
			  border: none !important;
			  border-bottom: solid 2px #c9c9c9 !important;
			  transition: border 0.3s;
			  font: 0.813em/1.3 Verdana,Geneva,sans-serif !important;
			}

			.password_textbox {
			  width: 80%;
			  padding: 5px;
			  border: none;
			  border-bottom: solid 2px #c9c9c9;
			  transition: border 0.3s;
			}
			
			textarea {
			  font: 0.813em/1.3 Verdana,Geneva,sans-serif;
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
				font-family:'Open Sans',sans-serif;
			}
						
			input {
				font: 1em/1.3 Verdana,Geneva,sans-serif;
			}
			
			.label1 {
				font: 1em/1.3 Verdana,Geneva,sans-serif;
				color: #639A97;
				margin-top: 15px;
			}
			 
			.label2 {
				font: 1em/1.3 Verdana,Geneva,sans-serif;
				font-size: 15px;
				border-bottom: 1px solid #B0362D;
				/* cursor: grab; */ 
				padding-bottom: 20px;				
			}
			
			.label3 {
				font: 1em/1.3 Verdana,Geneva,sans-serif;
				color: #639A97;				
			} 
			
			.last_step_note {
				font: 1em/1.3 Verdana,Geneva,sans-serif;
				font-size: 15px;
				color: #639A97;
				margin-left: 8px;
				margin-right: 8px;				
			}
			
			input[type="button"] {
				webkit-box-shadow:rgba(0,0,0,0.98) 0 1px 0 0;
				-moz-box-shadow:rgba(0,0,0,0.98) 0 1px 0 0;
				box-shadow:rgba(0,0,0,0.98) 0 1px 0 0;
				background-color:#EEE;
				border-radius:0;
				-webkit-border-radius:0;
				-moz-border-radius:0;
				border:1px solid #999;
				color:#666;
				font: 1em/1.3 Verdana,Geneva,sans-serif;
				font-size:11px;
				font-weight:700;
				padding:2px 6px;
			}			  
			
			textarea { 
				width: 100%; 
				margin: 0; 
				padding: 0; 
				border-width: 1; 
			}
			
			.login_container1 {
				width:490px;
				float:left;
			 	background-color: #F5EEE6;  
			}
			     
		</style>
		<script src="buttons.js" type="text/javascript"></script>
		<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
	</head>
	<body>			
		<div class="container" align="center">
			<font class="question">
				<br/><br/>
				Nearly there!
				<br/>
				One more click and you'll arrive at the payment page  
				<br/><br/>
			</font>	
			 
<form action="checkout.php" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="susan@write-out-loud.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Product Name">
<input type="hidden" name="amount" value="0.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="hidden" name="speech_id" value="<?=$_GET['speech_id']?>">
<input type="submit" value="Pay for my speech now" class="rad-button light flat rad-button-editor"  name="Buy Now" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>	
<br/><br/><br/><br/><br/>
		</div>		
	</body>	
</html>	