<?php
$main_speech 	= $_GET['main_speech']; 
$sub_speech 	= $_GET['sub_speech'];
$step_id 		= $_GET['step_id']; 
	if ($step_id == "") {
		$step_id = 0;
	}
require '../loaders/php/formLoader.php';
session_start();
$form_data 		= isset($_SESSION['form_data']) ? $_SESSION['form_data'] : FALSE;
unset($_SESSION['form_data']);
	if( !$form_data ) {
		header( 'Location: /' ) ;
	}
//
$loader 		= new formLoader($form_data, 'submit.php');
?>
<html>
<head>
	<title>Render</title>	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	 <style>
	
	.guidelines_heading {
		font-family: 'Catamaran', sans-serif;
		padding-left: 6px;
	}
	
	.guidelines {
		font-family: 'PT Serif', serif;
		font-size: 14px;
		padding-left: 6px;
	}
	
	</style> 
	<script src="../src/jquery-1.12.1.min.js"></script> 
	<script>

			function get_fields() {								
				// alert($("div .form-group"));
				// alert($("div").find(".form-group"));
				var editor_flag 	= $('#editor_flag:checkbox:checked').length;				
				var question 		= "";
				var text_box 		= "";
				var temporary_question;
				var textarea_name;
				var editor_textarea = 0;
				var sub_heading		= "";;
					
					//------ Loop over all div elements that contains fields -----// 
					$("div").find(".form-group").each(function(index) {				  
						// alert(index + ": " + $( this ).html());
							// if not going for editor
							if (editor_flag == 0) {								
								// check for textbox
								if ($(this).find('.form-control').length > 0) {							
								 	var input_text_value 	= $(this).find("input:text").val();
									var input_text_name		= $(this).find("input:text").attr("name");
									// alert(input_text_name);
									var required			= "";
										if ($(this).find("input:text").hasClass('required')) {
											required = "required";	
										}
									var error_message 		= "Please fill out this field to continue";
									var set_custom_validity	= "''";
										// if more than one text boxes
										if (text_box != "") {
											text_box += "<br><br><br>"+'<input type="text" name="'+input_text_name+'" placeholder="'+input_text_value+'" oninvalid="this.setCustomValidity('+error_message+')" onchange="this.setCustomValidity('+set_custom_validity+')" '+required+'>';		
										} else {
											text_box = '<input type="text" name="'+input_text_name+'" placeholder="'+input_text_value+'" oninvalid="this.setCustomValidity('+error_message+')" onchange="this.setCustomValidity('+set_custom_validity+')" '+required+'>';
										}										 
								}
								// check for radio button							
								if ($(this).find('input[type=radio]').length > 0) {								 
									var radio_button_content	= "";
									var radio_button_required;	
									var total_radio_buttons 	= $(this).find('input[type=radio]').length;							   							   
								   	var input_radio_name 		= $(this).find("input[type=radio]").attr("name");
								   	// alert(input_radio_name);
								   	var input_radio_value 		= $(this).find("input[type=radio]").val()								 
										for (i = 0; i < total_radio_buttons; i++) {
											if (i == 0) {
												radio_button_required = "required";
											} else {
												radio_button_required = "";
											}											
											radio_button_content += '<input type="radio" name="'+input_radio_name+'" value="'+$("#"+input_radio_name+"_"+i).val()+'" id="custom" '+radio_button_required+' style="vertical-align: middle"> '+$("#"+input_radio_name+"_"+i).val()+'<br>'; 									
										}	
									radio_button_content 		= '<div align="left" style="width: 500px;" >' + radio_button_content + '</div>';
										if (text_box != "") {
											text_box += "<br><br><br>"+radio_button_content;		
										} else {
											text_box += radio_button_content;
										}									
									// alert(radio_button_content);	
								}									
								// check for paragraph(questions)
								var p_exist 			= $(this).find("p").length;							
									if (p_exist != 0) {
										question = $(this).find("p").text();
									}							
							// if going for editor	
							} else {								
								// check for paragraph(questions)								
								var p_exist = $(this).find("p").length;									
									if (p_exist != 0) {			
										// alert($(this).find('h4').text());
										// alert($(this).find("p").text());
										var sub_heading_title = $(this).find('h4').text();
										// for sub heading exists
										if (sub_heading_title == "Sub Heading") {
											sub_heading = $(this).find("p").text();	
										// if sub heading does not exists
										} else {							
											temporary_question = $(this).find("p").text();																				
											question += temporary_question + "|";
										}
									}									
									if ($(this).find("textarea").length > 0) {
										editor_textarea = 1;									   
									   if (textarea_name != "") {
									   		textarea_name 	= $(this).find("textarea").attr("name");									   
									   		text_box		+= '<br><br><textarea name="' + textarea_name + '" col="50" rows="5"></textarea>';
									   } else {
									   		textarea_name 	= $(this).find("textarea").attr("name");									   
									   		text_box		= '<textarea name="' + textarea_name + '" col="50" rows="5"></textarea>';
									   }									   
									}									
							}																							
					});
					//------ End loop over all div elements that contains fields -----//
					
				// alert("text_box: " + text_box);
				// alert("question: " + question);
				// alert("editor_flag: " + editor_flag);		
				// alert("editor_textarea: " + editor_textarea);	
				// alert("sub_heading: " + sub_heading);				
				save_step(question, text_box, editor_flag, editor_textarea, sub_heading);				 
			}
			
			function save_step(question, text_box, editor_flag, editor_textarea, sub_heading) {		
				var main_speech_id 	= <?php echo $main_speech; ?> ;
				var sub_speech_id 	= <?php echo $sub_speech; ?> ;	
				var step_id			= <?php echo $step_id; ?>;			
				// alert("question: " + question);
				// alert("text_box: " + text_box);
				// alert("main_speech_id: " + main_speech_id);
				// alert("sub_speech_id: " + sub_speech_id);
				// alert("editor_flag: " + editor_flag);
				// alert("editor_textarea: " + editor_textarea);		
				// alert("sub_heading: " + sub_heading);
								
				$.ajax({ url: 'save_step.php',				          
				         data: { ask: question, input_field: text_box, main_speech: main_speech_id, sub_speech: sub_speech_id, editor_check: editor_flag, editor_textarea: editor_textarea, middle_heading: sub_heading, step_id: step_id},
				         type: 'post',
				         success: function(output) {
				         	// alert(output);
				         	window.location.href = '../speech_builder.php?main_speech='+main_speech_id+'&sub_speech='+sub_speech_id;		                    
				         }
				});
					
			}	
		
	</script> 
</head>
<body>
	<br>
	<br>
	<table border="1" align="center" width="60%" cellpadding="10" style="background-color: #F9F9F9;">
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 1</strong></font></td>
			<td>
			<div class="guidelines">If there is textbox field, you can insert some text in it. This text will become default text for this feild on front-end. Leaving it empty show empty field on front-end.</div>
			</td>
		</tr>
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 2</strong></font></td>
			<td> <div class="guidelines">If you want to use this step inside editor then check <b>"Make this  step in editor"</b> else leave it unchecked.</div></td>
		</tr>
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 3</strong></font></td>
			<td> <div class="guidelines">Please Click on <b>"Go"</b> button and this step will be added to speech.</div></td>
		</tr>
	</table>
	<div class="container">
		<div class="col-sm-6 col-sm-offset-3">
			<?php $loader->render_form(); ?>
		</div>
		<div style="clear: both">
		</div>	
		<div align="center">
			<input type="checkbox" name="editor_flag" id="editor_flag" value="Editor">&nbsp;Make this step in editor
			<br><br>
		</div>	  
	 </div>
	<div align="center">			
		 
			<input type="button" value="Go" onclick="get_fields();" class="btn btn-primary">
			
	</div>
</body>
</html>

