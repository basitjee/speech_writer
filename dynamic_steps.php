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
			 
			.checkout {
				webkit-box-shadow:rgba(0,0,0,0.98) 0 1px 0 0;
				-moz-box-shadow:rgba(0,0,0,0.98) 0 1px 0 0;
				box-shadow:rgba(0,0,0,0.98) 0 1px 0 0;
				background-color:#EEE;
				border-radius:0;
				-webkit-border-radius:0;
				-moz-border-radius:0;
				border:1px solid #999;
				color:#fff;
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
				
		<script type="text/javascript">
		
		
		
		$(document).ready(function() {	
			
			$("#buy_speech").click(function() {
	        		        	
	        	var iframe 			= $('iframe');
	        	var final_speech 	= $('#testElement', iframe.contents()).html();	        	
	        	var main_speech_id	= $("#main_speech_id").val();	        		        	
	        	final_speech 		= final_speech.replace(/"/g, "'");	        	
	        	 
	        	    $.ajax({
					  method: "POST",
					  url: "save_speech.php",
					  data: { speech: final_speech, speech_id_main: main_speech_id }
					})
				    
				    .done(function( msg ) {
				        window.location = "proceed_to_paypal.php?speech_id="+msg;
				  	});
						            
   			});	
			 	 
			capitalize($("#one").text(), "one");
			capitalize($("#two").text(), "two");
			capitalize($("#three").text(), "three");
			capitalize($("#four").text(), "four");
			capitalize($("#five").text(), "five");
			capitalize($("#six").text(), "six");
			capitalize($("#question").text(), "question");			
			
			//---------------- Captilize opening statements and add numbering -------------------// 
			function capitalize(content, id) {				
				var content_splitted 	= content.split(".");
			  	var pre_formatted_content1; 
			  	var pre_formatted_content2; 			 				 
			  	var formatted_content; 
			  	var full_stop_checker 	= content_splitted.length - 1;
					for (i = 0; i < content_splitted.length; i++) {				 
					    pre_formatted_content1 = content_splitted[i].trim();					    
					    pre_formatted_content2 = pre_formatted_content1.substr(0,1).toUpperCase() + pre_formatted_content1.substr(1);					    
						    if (i == 0) {
								formatted_content = "<b>" + pre_formatted_content2 + "</b>. ";     	
						    } else if (i == full_stop_checker) {
						    	// alert("it worked");
						    	formatted_content += pre_formatted_content2;
						    } else {
						    	formatted_content += pre_formatted_content2+". ";
						    }					    	
					}
				// add help icon and its title	
				var submatch;					
				var matches 			= formatted_content.match(/\[(.*?)\]/);
					if (matches) {
					    submatch = matches[1];
					}
				var replaced 			= formatted_content.replace(/\[.*\]/g,' <img src="images/help.png" height="28" width="28" title="'+ submatch +'"  > ');			 			
				$("#"+id).text("");				
				$("#"+id).html(replaced);
			}
			//---------------- End captilize opening statements and add numbering -------------------// 
			
		}); 
		
		var editor_refill = false;
		
		function move_content(id) {
			var match_result1;
			var match_result2;
			var match_result3;
			var match_result4;
			var match_result5;
			var match_result6;
			var div_four 	= $('#four');
			var div_five	= $('#five');
			var div_six		= $('#six'); 			
			$('#one').css("background-color","#f2f2f2");
			$('#two').css("background-color","#f2f2f2");
			$('#three').css("background-color","#f2f2f2");
			$('#four').css("background-color","#f2f2f2");
			$('#five').css("background-color","#f2f2f2");
			$('#six').css("background-color","#f2f2f2");
			var content 			= $('#'+id).html();			
			content 				= content.trim(); 			
			content 				= content.substring(9);			
			content 				= "<p>"+content+"</p>";			 		
			var iframe  			= $('iframe'); 
			var previous_content 	= $('#testElement', iframe.contents()).html();			 
				// it means editor is empty
				if (previous_content.length == 1) {
					$('#testElement', iframe.contents()).append(content);
					editor_refill = true;			
				} else {
					 
					// it means there is some text in editor
					var content1 			= $('#one').html();			
					content1 				= content1.trim(); 			
					content1 				= content1.substring(9);
					content1 				= "<p>"+content1+"</p>";
					var content2 			= $('#two').html();			
					content2 				= content2.trim(); 			
					content2 				= content2.substring(9);
					content2 				= "<p>"+content2+"</p>"; 
					var content3 			= $('#three').html();			
					content3 				= content3.trim(); 			
					content3 				= content3.substring(9);
					content3 				= "<p>"+content3+"</p>";					
						if (div_four.length) {							 
							var content4 			= $('#four').html();								 
							content4 				= content4.trim(); 			
							content4 				= content4.substring(9);
							content4 				= "<p>"+content4+"</p>";							 
							var content5 			= $('#five').html();								 
								if (!content5) {
									content5 = "<p>Null</p>";
								}  
							content5 				= content5.trim(); 			
							content5 				= content5.substring(9);
							content5 				= "<p>"+content5+"</p>";
							var content6 			= $('#six').html();			
								if (!content6) {
									content6 = "<p>Null</p>";
								}  
							content6 				= content6.trim(); 			
							content6 				= content6.substring(9);
							content6 				= "<p>"+content6+"</p>";							 
						}					
					match_result1 		= previous_content.search(content1);
					match_result2 		= previous_content.search(content2);
					match_result3 		= previous_content.search(content3);
						if (div_four.length) {
							match_result4 		= previous_content.search(content4);
							match_result5 		= previous_content.search(content5);
							match_result6 		= previous_content.search(content6); 
						}
						if (match_result1 > 1) {
							previous_content = previous_content.replace(content1, content);
							$('#testElement', iframe.contents()).html(previous_content);
						} else if (match_result2 > 1) {
							previous_content = previous_content.replace(content2, content);
							$('#testElement', iframe.contents()).html(previous_content);
						} else if (match_result3 > 1) {
							previous_content = previous_content.replace(content3, content);
							$('#testElement', iframe.contents()).html(previous_content);
						} else if (match_result4 > 1) {
							previous_content = previous_content.replace(content4, content);
							$('#testElement', iframe.contents()).html(previous_content);
						} else if (match_result5 > 1) {
							previous_content = previous_content.replace(content5, content);
							$('#testElement', iframe.contents()).html(previous_content);
						} else if (match_result6 > 1) {
							previous_content = previous_content.replace(content6, content);
							$('#testElement', iframe.contents()).html(previous_content);
						} else {							 
							if (editor_refill == true) {
								$('#testElement', iframe.contents()).html(content);
							} else {
								$('#testElement', iframe.contents()).append(content);
							}							
						}
				}			
			$('#'+id).css("background-color","#cfdcdd");
		}	
		
		function submit_form() {
			if ($('textarea').length > 0) {				
					if ($('textarea').val()) {    					
    					var content_textarea 	= $('textarea').val();
    					content_textarea		= content_textarea.trim();
    					content_textarea		= "<p>"+content_textarea+"<p>";
    					var iframe  			= $('iframe'); 
						$('#testElement', iframe.contents()).append(content_textarea);
					}
			}
			// Check browser support
			// for removal of localStorage item
			// localStorage.removeItem("content_editable");
			if (typeof(Storage) !== "undefined") {			   
			  var iframe  					= $('iframe');
			  var editor_content 			= $('#testElement', iframe.contents()).html();
			  // alert(editor_content);
				  if (editor_content != undefined) { 
				  	// Store
				    localStorage.setItem("content_editable", editor_content); 		
				  }
			    // Retrieve
			    var content_editable_stored = localStorage.getItem("content_editable");			   
			} else {
			    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
			}
    		document.getElementById("myForm").submit();
    		return false;
		}
		
		function editor_load() {			
			var step_marker						= $('#step_marker').html();
			var choice_selection_box_first_step = $('#choice_selection_box_first_step').html(); 
				if (step_marker == choice_selection_box_first_step) {
					localStorage.removeItem("content_editable");
				}
			var iframe  						= $('iframe');
			var editor_content 					= $('#testElement', iframe.contents()).html();
			var content_editable_stored 		= localStorage.getItem("content_editable");			   
			  if (editor_content != undefined) { 
			  		$('#testElement', iframe.contents()).append(content_editable_stored);	
			  }			 	
		}
		
		function addLoadEvent(func) {
			  var oldonload = window.onload;
			  if (typeof window.onload != 'function') {
			    window.onload = func;
			  } else {
			    window.onload = function() {
			      if (oldonload) {
			        oldonload();
			      }
			      func();
			    }
			  }
		}
		addLoadEvent(editor_load);
		
		function resizeText(multiplier) {
		  if (document.body.style.fontSize == "") {
		    document.body.style.fontSize = "1.0em";
		  }
		  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
		}		
			
		function get_selection() {
			var multiplier			= 1;
			var saede 				= document.getElementById('test').contentWindow.getSelection();			
			document.getElementById('test').contentWindow.getSelection().style.color = "red";			
		}
		
		function showIframeContent(id) {
		  var iframe = document.getElementById("test");
		    try { 
				// get selection
				var selected_content 		= document.getElementById('test').contentWindow.getSelection();				 
					if (id == 1) {
						var replace_content			= "<big>"+selected_content+"</big>";								      
		      		} else {
		      			var replace_content			= "<small>"+selected_content+"</small>";
		      		} 
		      	// get all content of editor
		     	var iframe  				= $('iframe'); 
		     	var editor_content			= $('#testElement', iframe.contents()).html();
		     	var updated_content			= editor_content.replace(selected_content, replace_content); 				 
				$('#testElement', iframe.contents()).html();
				$('#testElement', iframe.contents()).html(updated_content);				 
		    }
		    catch(e) {
		       alert(e.message);
		    }
		  return false;
		}
		
		function chrome_heading(heading_id) {				 
		    try { 
				// get selection
				var selected_content 		= document.getElementById('test').contentWindow.getSelection();
					if (selected_content == "") {
						alert("Please select text");
						return false;
					}
					if (heading_id == 1) {
						var replace_content			= "<font style='font-size: 17px; font-weight: bold;'>"+selected_content+"</font>";								      
		      		} else {
		      			var replace_content			= "<font style='font-size: 14px; font-weight: bold;'>"+selected_content+"</font>";
		      		} 		      	 	
		      	// get all content of editor
		     	var iframe  				= $('iframe'); 
		     	var editor_content			= $('#testElement', iframe.contents()).html();
		     	var updated_content			= editor_content.replace(selected_content, replace_content);
				$('#testElement', iframe.contents()).html("");
				$('#testElement', iframe.contents()).html(updated_content);				
			}
		    catch(e) {
		       alert(e.message);
		    }
		  return false;
		}
		
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
	<body>			
<?php

//-------------- Find template words  -----------------//
function template($templating_array, $question) {
	for ($x = 0; $x <= 4; $x++) {
	    $question = replace_template($templating_array, $question);
	}  
return $question;	
}		
//-------------- End find template words  -----------------//

//-------------- Replace template words  -----------------//
function replace_template($templating_array, $question) {
preg_match_all('/{(.*?)}/', $question, $matches); 
$template_variable 				= $matches[0][0];		 
$strip_off_template_variable 	= str_replace("{","", $template_variable);							
$strip_off_template_variable 	= str_replace("}","", $strip_off_template_variable);		 
	while (list($key, $value) = each($templating_array)) {
	    // echo " Key: $key; Value: $value<br />\n";		
		if ($key == $strip_off_template_variable) {		 				 	
		 	$template_word = $value;
				/*					
				if ($key == "years") {
					$template_word = $template_word." years";
				}			
				*/ 
		}							
	}						
$compiled_question 				= str_replace($template_variable, $template_word, $question);
return $compiled_question;  	
}		
//-------------- End replace template words  -----------------//


		
function help_text($text) {
preg_match_all("/\[[^\]]*\]/", $text, $matches);
var_dump($matches[0]);	
}
		if ($_POST['dynamic_step'] == "dynamic_step") {
				// get next step				 
				$result_next_step	= mysql_query("SELECT MIN(step_order) FROM steps WHERE step_order > ".$_POST["step_order"]." AND main_speech_id = ".$_POST['speech_id']." AND sub_speech_id = ".$_POST['sub_speech_id']." ");
					if (!$result_next_step) {
					    echo 'Could not run query: ' . mysql_error();
					    exit;
					}
				$row_next_step					= mysql_fetch_row($result_next_step);
				$next_step						= $row_next_step[0];
				
				//---------------------- Get last step number -----------------------//
				$result_last_step	= mysql_query("SELECT MAX(step_order) FROM steps WHERE step_order > ".$_POST["step_order"]." AND main_speech_id = ".$_POST['speech_id']." AND sub_speech_id = ".$_POST['sub_speech_id']." ");
					if (!$result_last_step) {
					    echo 'Could not run query: ' . mysql_error();
					    exit;
					}
				$row_last_step					= mysql_fetch_row($result_last_step);
				$last_step						= $row_last_step[0];			 
				//---------------------- End get last step number -------------------//
					
					if ($next_step != "") {
						$result_choice_selection_box	= mysql_query("SELECT step_order FROM steps WHERE main_speech_id = ".$_POST['speech_id']." AND sub_speech_id = ".$_POST['sub_speech_id']." AND choice_selection_box = 'yes' ORDER BY step_order LIMIT 1");
						$row_choice_selection_box		= mysql_fetch_row($result_choice_selection_box);
						$choice_selection_box_step		= $row_choice_selection_box[0];
						// get content of step
						$step_query						= "SELECT * FROM steps WHERE main_speech_id = ".$_POST['speech_id']." AND sub_speech_id = ".$_POST['sub_speech_id']." AND step_order = ".$next_step." ";	
						$result_step					= mysql_query($step_query);
							while ($row_step = mysql_fetch_array($result_step)) {
								$step 					= $row_step['step'];
								$question 				= $row_step['question'];
								$choice_selection_box 	= $row_step['choice_selection_box'];
								$opening1 				= $row_step['1opening'];
								$opening2 				= $row_step['2opening'];
								$opening3 				= $row_step['3opening'];
								$opening4 				= $row_step['4opening'];
								$opening5 				= $row_step['5opening'];
								$opening6 				= $row_step['6opening'];
								$editor_heading			= $row_step['editor_heading'];								
								$editor_sub_heading		= $row_step['editor_sub_heading'];								
							}	
						// assign POST associative array to another array to avoid interuption
						$templating_array 				= $_POST;
							// if condition for choice selection box
							if ($choice_selection_box == "yes") {																	
								$compiled_editor_heading	= template($templating_array, $editor_heading);																	
								$compiled_opening1			= template($templating_array, $opening1);
								$compiled_opening1			= template($templating_array, $compiled_opening1);
								$compiled_opening1			= template($templating_array, $compiled_opening1);
								$compiled_opening1			= template($templating_array, $compiled_opening1);
								$compiled_opening1			= template($templating_array, $compiled_opening1);
								$compiled_opening1			= template($templating_array, $compiled_opening1);
								$compiled_opening2			= template($templating_array, $opening2);
								$compiled_opening2			= template($templating_array, $compiled_opening2);
								$compiled_opening2			= template($templating_array, $compiled_opening2);
								$compiled_opening2			= template($templating_array, $compiled_opening2);
								$compiled_opening2			= template($templating_array, $compiled_opening2);
								$compiled_opening2			= template($templating_array, $compiled_opening2);								
								$compiled_opening3			= template($templating_array, $opening3);
								$compiled_opening3			= template($templating_array, $compiled_opening3);
								$compiled_opening3			= template($templating_array, $compiled_opening3);
								$compiled_opening3			= template($templating_array, $compiled_opening3);
								$compiled_opening3			= template($templating_array, $compiled_opening3);
								$compiled_opening3			= template($templating_array, $compiled_opening3);
								$compiled_opening4			= template($templating_array, $opening4);
								$compiled_opening4			= template($templating_array, $compiled_opening4);
								$compiled_opening4			= template($templating_array, $compiled_opening4);
								$compiled_opening4			= template($templating_array, $compiled_opening4);
								$compiled_opening4			= template($templating_array, $compiled_opening4);
								$compiled_opening4			= template($templating_array, $compiled_opening4);
								$compiled_opening5			= template($templating_array, $opening5);
								$compiled_opening5			= template($templating_array, $compiled_opening5);
								$compiled_opening5			= template($templating_array, $compiled_opening5);
								$compiled_opening5			= template($templating_array, $compiled_opening5);
								$compiled_opening5			= template($templating_array, $compiled_opening5);
								$compiled_opening5			= template($templating_array, $compiled_opening5);
								$compiled_opening6			= template($templating_array, $opening6);
								$compiled_opening6			= template($templating_array, $compiled_opening6);
								$compiled_opening6			= template($templating_array, $compiled_opening6);
								$compiled_opening6			= template($templating_array, $compiled_opening6);
								$compiled_opening6			= template($templating_array, $compiled_opening6);
								$compiled_opening6			= template($templating_array, $compiled_opening6);								 
								$compiled_question			= template($templating_array, $question);							 
							} else {								
								$compiled_question	= template($templating_array, $question);
							}				
				?>		

							<div class="container" align="center">
																					
								<?php									
									if ($choice_selection_box == "yes") {																
								?>										
										<font class="question">
											&nbsp;  
										</font>									
										<form id="testForm" class="static_header" >
											<input type="button" value="B" id="bold" />
											<!-- <input type="button" value="I" id="italic" /> -->	
											<!-- <input type="button" value="U" id="underline" style="text-decoration:underline;" /> -->				
											<!-- <input type="button" value="&lt;p&gt;" id="insertparagraph" /> -->
											<input type="button" value="List" id="insertorderedlist" />
											<!-- <input type="button" value="&lt;ul&gt;" id="insertunorderedlist" /> -->											
											<span class="separator">|</span>
											<input type="button" value="&circlearrowleft;" id="undo" style="font-size: 16px;"  />
											<input type="button" value="&circlearrowright;" id="redo" style="font-size: 16px;" />
											<input type="button" value="Del" id="delete" />
											<span class="separator">|</span>							
											<!-- <input type="button" value="fgcolor" id="forecolor" cmdValue="promptUser" promptText="color?" /> 							
											<span class="separator">|</span>
											-->
											<input type="button" value="A+" id="increasefontsize" />
											<input type="button" value="A-" id="decreasefontsize" />							
											<!-- <input type="button" value="H" id="heading" cmdValue="promptUser" promptText="Please type H1 Or H2" style="font-weight: bolder;" /> -->
										</form>	
										<div style="padding-bottom: 20px; padding-top: 2px; ">
											<div id="chrome_container" style="position: fixed; left: 314px;" >
											</div>
										</div>	
												
										<script>
										if (navigator.userAgent.indexOf("Chrome") != -1 ) {
											$('#increasefontsize').hide();
											$('#decreasefontsize').hide();
											$('#heading').hide();
									    	// var output = '<input type="button" value="Heading h1" onclick="chrome_heading(1);">&nbsp;&nbsp;';
									    	// output += '<input type="button" value="Heading h2" onclick="chrome_heading(2);">&nbsp;&nbsp;';
									    	var output = '<input type="button" value="A-" onclick="showIframeContent(0);">&nbsp;&nbsp;';
									    	output += '<input type="button" value="A+" onclick="showIframeContent(1);">';
									    	$('#chrome_container').html(output);
									    }
    									</script>																											
								<?php
									}								 
								?>								
								<form action="#" method="post" name="step_form" id="step_form" onsubmit="submit_form();" >	
								<?php
									if ($choice_selection_box == "yes") {																										
								?>												
										<div class="child1" align="left">
											<iframe id="test" src="editor.html"></iframe>											 
										</div>
										<div style="float: left;">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</div>	 	
										<!-- div for selection text -->
										
										<div class="child2" align="left" >
										
										<?php										
											if ($compiled_opening1 != "") {
																								
										?>
												
												<div class="question" id="question">
													<?=$compiled_editor_heading?>
												</div>
												<div class="sub_heading">
													<?=$editor_sub_heading?>
												</div>	
												<br/>
																								 
												<div id="one" class="label2" onclick="move_content(this.id);">
													<?php
														if (strpos($step, '</textarea>') === false) {
    												?>		 
															<b>1.</b>
													<?php
														} else {
													?>
															<b>Tip.</b>
													<?php		
														}
													?>		 
													<?=$compiled_opening1?>													
												</div>
												<br/>	
										<?php
											}
										?>		
										<?php
											if ($compiled_opening2 != "") {
										?>
												<div id="two" align="left" class="label2" onclick="move_content(this.id);">
													<b>2.</b> <?=$compiled_opening2?>
												</div>	
												<br/>	
										<?php
											}
										?>				
										<?php
											if ($compiled_opening3 != "") {													
										?>		
												<div id="three" align="left" class="label2" onclick="move_content(this.id);">
													<b>3.</b> <?=$compiled_opening3?>
												</div>
												<br/>
										<?php
											}
										?>			
										<?php
											if ($compiled_opening4 != "") {
										?>
												<div id="four" align="left" class="label2" onclick="move_content(this.id);">
													<b>4.</b> <?=$compiled_opening4?>
												</div>
												<br/>	
										<?php
											}
										?>
										<?php
											if ($compiled_opening5 != "") {
										?>
												<div id="five" align="left" class="label2" onclick="move_content(this.id);">
													<b>5.</b> <?=$compiled_opening5?>
												</div>
												<br/>	
										<?php
											}
										?>
										<?php
											if ($compiled_opening6 != "") {
										?>
												<div id="six" align="left" class="label2" onclick="move_content(this.id);">
													<b>6.</b> <?=$compiled_opening6?>
												</div>
										<?php
											}
										?>
																								
										<br>										
										<font class="label3">
											
										</font>		
										 
										<br>
										<?=$step?>
										<br>
										<br> 
										<?php
													if ($next_step == $last_step) {
												?>
														<div align="left" class="last_step_note">
															Brilliant! You’ve added the last sentences to your speech.
															<br/><br/>
															Pay now to make this masterpiece your own.
															<br/><br/>
															After payment you will be returned to the page where you can continue editing and revising until you are ready to download the completed speech onto your own device.
															<br/><br/>
															You are just two clicks away from getting your speech. 
															<?php															 
																if ($_SESSION['user_log_flag'] != 1) {
															?>
																	<br/><br /> It seems that you are not logged in. Please click the button below to proceed for login or instant free registeration with us and go for paypal to buy this beautiful speech. 
															<?php		
																}
															?>
														</div>	
														<br/><br/>													
												<?php
													}			
												?>		
										</div>	
										<!-- End div for selection text -->
										
									<div style="clear: both;">
									</div>
									<br/>	
								<?php
									} else {
								?>
								<br/>
								<br/>
								<font class="question">									
									<?=$compiled_question?>
								</font>
								<br/>
								<br/>								
								<font class="font1">
									<?=$step?>
								</font>
								<br/>
								<br/>
								<br/>
								<br/>
								<?php
									}
								?>
								<?php
								$_POST['step_order'] = $next_step;								
								?>
								<?php
										if ($next_step != $last_step) {
								?>
											<input type="submit" value="Next" class="rad-button light flat rad-button-editor">	
								<?php
										} else { 	 
								?>		
											<form action="#" method="post" target="_top">	
												<input type="hidden" name="product">				
												<input type="hidden"  name="price">												
												<input type="button" id="buy_speech" value="Click to begin the payment process" name="Check Out" class="rad-button light flat rad-button-editor" style="color: white; font-size: 16px; box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.15); font-family: 'Open Sans', sans-serif;">
												<input type="hidden" value="<?=$_POST['speech_id']?>" name="main_speech_id" id="main_speech_id">
											</form>
								<?php
										}
								?>						
								<br/>&nbsp;
								<?php
									//----- Set input type hiddens --------------//
									while (list($key, $value) = each($_POST)) {
									    // echo "Key: $key; Value: $value<br />\n";
										echo "<input type='hidden' name='$key' value='$value'>";
									}
									//----- End set input type hiddens ---------//
								?>						  	
								</form>
								<div id="step_marker" style="display: none;"><?=$_POST["step_order"]?></div>
								<div id="choice_selection_box_first_step" style="display: none;"><?=$choice_selection_box_step?></div>
							</div>		
					<?php
					} else {
		 				// proceed to paypal
		 				die("Proceed for paypal");
		 			}
		 	}		 
		?>
	</body>	
</html>	