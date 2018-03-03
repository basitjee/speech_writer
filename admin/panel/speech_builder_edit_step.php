<?php
session_start();
unset($_SESSION["json_formatted_step"]);
$_SESSION["json_formatted_step"] = "";

include("db_con.php");
$step_id			= $_REQUEST['step_id'];
$main_speech 		= $_REQUEST['main_speech']; 
$sub_speech 		= $_REQUEST['sub_speech']; 

//---------------------------------------------- populate JSON for edit step ---------------------------------------------//

$step_query		= "SELECT * FROM steps WHERE id = '".$_REQUEST['step_id']."'";	
$result_step	= mysql_query($step_query);
	while ($row = mysql_fetch_array($result_step))  {
		$step					= $row["step"];			
		$question				= $row["question"];
		$choice_selection_box	= $row["choice_selection_box"];
		$opening1				= $row["1opening"];
		$opening2				= $row["2opening"];
		$opening3				= $row["3opening"];
		$opening4				= $row["4opening"];
		$opening5				= $row["5opening"];
		$opening6				= $row["6opening"];	
		$editor_heading			= $row["editor_heading"];
		$editor_sub_heading		= $row["editor_sub_heading"];	
	}
// echo $step;
$step_pieces = explode("<br><br><br>", $step); 
// print_r($step_pieces);
	//----------------------------- For 1st field ------------------------------------//
	// Get the name of field
	if (preg_match('/name="([^"]+)"/', $step_pieces[0], $m1)) {
	    $input_name1 = $m1[1];		   
	} else {
	   //preg_match returns the number of matches found, 
	   //so if here didn't match pattern
	}
	// populate with input type text or textarea
	if (strpos($step_pieces[0], 'required') !== false) {		
		$required_flag1 = 'true';
	} else {			
		$required_flag1 = 'false';
	}	
	if (strpos($step_pieces[0], '<input type="text"') !== false) {
		$step_content1 = '{ "title":"'.$input_name1.'", "type":"element-single-line-text", "description": "", "required":'.$required_flag1.', "position":3 }';		
	} else if (strpos($step_pieces[0], '<textarea name') !== false) {
		$step_content1 = '{ "title":"'.$input_name1.'", "type":"element-paragraph-text", "description": "", "required":'.$required_flag1.', "position":3 }';		
	} else  {		
		$step_content1 = '{}';
	}	
// echo $step_content1;
 
	//----------------------------- End for 1st field ------------------------------------//
	
	//----------------------------- for 2nd field ------------------------------------//
	// Get the name of field	
	if (preg_match('/name="([^"]+)"/', $step_pieces[1], $m2)) {
	    $input_name2 = $m2[1];		   
	} else {	   
	}	
	if (strpos($step_pieces[1], 'required') !== false) {		
		$required_flag2 = 'true';
	} else {			
		$required_flag2 = 'false';
	}
	// populate with input type text or textarea
	if (strpos($step_pieces[1], '<input type="text"') !== false) {
		$step_content2 = '{ "title":"'.$input_name2.'", "type":"element-single-line-text", "description": "", "required":'.$required_flag2.', "position":3 }';
	} else if (strpos($step_pieces[1], '<textarea name') !== false) {
		$step_content2 = '{ "title":"'.$input_name2.'", "type":"element-paragraph-text", "description": "", "required":'.$required_flag2.', "position":4 }';
	} else  {
		$step_content2 = '{}';
	}
	//----------------------------- End for 2nd field ------------------------------------//	
	
	//----------------------------- for 3rd field ------------------------------------//
	// Get the name of field
	if (preg_match('/name="([^"]+)"/', $step_pieces[2], $m3)) {
	    $input_name3 = $m3[1];		   
	} else {	    
	}	
	if (strpos($step_pieces[2], 'required') !== false) {		
		$required_flag3 = 'true';
	} else {			
		$required_flag3 = 'false';
	}
	// populate with input type text or textarea
	if (strpos($step_pieces[2], '<input type="text"') !== false) {
		$step_content3 = '{ "title":"'.$input_name3.'", "type":"element-single-line-text", "description": "", "required":'.$required_flag3.', "position":3 }';
	} else if (strpos($step_pieces[2], '<textarea name') !== false) {
		$step_content3 = '{ "title":"'.$input_name3.'", "type":"element-paragraph-text", "description": "", "required":'.$required_flag3.', "position":4 }';
	} else  {
		$step_content3 = '{}';
	}
	//----------------------------- End for 3rd field ------------------------------------//
	
	//----------------------------- for 4th field ------------------------------------//
	// Get the name of field
	if (preg_match('/name="([^"]+)"/', $step_pieces[3], $m4)) {
	    $input_name4 = $m4[1];		   
	} else {
	   //preg_match returns the number of matches found, 
	   //so if here didn't match pattern
	}	
	if (strpos($step_pieces[3], 'required') !== false) {		
		$required_flag4 = 'true';
	} else {			
		$required_flag4 = 'false';
	}
		// populate with input type text or textarea
	if (strpos($step_pieces[3], '<input type="text"') !== false) {
		$step_content4 = '{ "title":"'.$input_name4.'", "type":"element-single-line-text", "description": "", "required":'.$required_flag4.', "position":3 }';
	} else if (strpos($step_pieces[3], '<textarea name') !== false) {
		$step_content4 = '{ "title":"'.$input_name4.'", "type":"element-paragraph-text", "description": "", "required":'.$required_flag4.', "position":4 }';
	} else  {
		$step_content4 = '{}';
	}
	//----------------------------- End for 4th field ------------------------------------//
	
	// $step_content1 = '{ "title":"sdds", "type":"element-single-line-text", "description": "", "required":true, "position":3 }';
	// $step_content2 = '{}';
	// $step_content3 = '{}';
	// $step_content4 = '{}';
	if ($editor_heading != "") {
		$editor_heading_content = '{ "title":"", "type":"element-section-break", "description": "'.$editor_heading.'", "required":false, "position":1 }'; 
	} else {
		$editor_heading_content = '{}';
	}
	if ($editor_sub_heading != "") {
		$editor_sub_heading_content = '{ "title":"", "type":"element-section-break", "description": "'.$editor_sub_heading.'", "required":false, "position":2 }'; 
	} else {
		$editor_sub_heading_content = '{}';
	}	
	if ($question != "") {
		$question_content = '{ "title":"", "type":"element-section-break", "description": "'.$question.'", "required":false, "position":3 }'; 
	} else {
		$question_content = '{}';
	}		
	if ($opening1 != "") {
		$opening1_content = '{ "title":"Question/Opening Statement", "type":"element-section-break", "description": "'.$opening1.'", "required":false, "position":4 }';		 
	} else {
		$opening1_content = '{}';		
	}
	if ($opening2 != "") {
		$opening2_content = '{ "title":"Question/Opening Statement", "type":"element-section-break", "description": "'.$opening2.'", "required":false, "position":5 }';		
	} else {
		$opening2_content = '{}';		
	}
	if ($opening3 != "") {
		$opening3_content = '{ "title":"Question/Opening Statement", "type":"element-section-break", "description": "'.$opening3.'", "required":false, "position":6 }';		
	} else {
		$opening3_content = '{}';		
	}
	if ($opening4 != "") {
		$opening4_content = '{ "title":"Question/Opening Statement", "type":"element-section-break", "description": "'.$opening4.'", "required":false, "position":7 }';		
	} else {
		$opening4_content = '{}';		
	}
	if ($opening5 != "") {
		$opening5_content = '{ "title":"Question/Opening Statement", "type":"element-section-break", "description": "'.$opening5.'", "required":false, "position":8 }';		
	} else {
		$opening5_content = '{}';		
	}
	if ($opening6 != "") {
		$opening6_content = '{ "title":"Question/Opening Statement", "type":"element-section-break", "description": "'.$opening6.'", "required":false, "position":9 }';		
	} else {
		$opening6_content = '{}';		
	}
$step_content 		= '{ "title": "Speech Generator", "description": "", "fields": ['.$editor_heading_content.', '.$editor_sub_heading_content.', '.$question_content.', '.$step_content1.', '.$step_content2.', '.$step_content3.', '.$step_content4.', '.$opening1_content.', '.$opening2_content.', '.$opening3_content.', '.$opening4_content.', '.$opening5_content.', '.$opening6_content.', { "title":"Question/Opening Statement", "type":"element-multiple-choice", "description": "dss", "required":false, "position":4 }]}';

//---------------------------------------------- End populate JSON for edit step ---------------------------------------------//

$_SESSION["json_formatted_step"] 	= $step_content;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Shlomi Nissan">
    <title>Speech Generator Edit Mode</title>
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="src/css/style.css">
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
	
	.label4 {
	    color: #4e443c;
	    font-family: Georgia,serif;
	    font-variant: small-caps;
	    font-weight: 200;
	    letter-spacing: 0;
	    margin-bottom: 0;
	    text-transform: none;
	    font-size: 20px;
	}
	
	.delete_button {
		background-color: #A6C634;
	}
	
	table {
		width: 840px;
		border-collapse: collapse;
		border-spacing: 0;
	}
	
	td, th { border: 1px solid #CCC; }

	.label3 {
		color: brown;
		font-size: 14px;
		font-family: sans-serif;
		font-style: oblique; 	
	}
    
	tr h2 {	 
	    font: 15px/1.3 Verdana,Geneva,sans-serif;
	    padding-bottom: 2px;
	    padding-top: 2px;
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
	    /* box-shadow:inset 0 0 50px rgba(0,0,0,.2); */ 
	}
	
	#custom:checked {
	    /*background:red;*/ 
	     border: 5px solid #B0362D;
		background-color:#cfdcdd !important;                
	}
    
    tr input[type="text"] {
	    border: 1px solid #dcdcdc;
	    font: 0.813em/1.3 Verdana,Geneva,sans-serif;
	    padding: 10px;
	    transition: box-shadow 0.3s ease 0s, border 0.3s ease 0s;
	    width: 550px;
	}
	
	tr h1 {
	    color: #115458;
	    font: 2em/1.3 "Open Sans",sans-serif;
	}
	
	.step_label {
		color: green; 
		font-family: 'Trocchi', serif; 
		font-size: 17px; 
		font-weight: normal; 
		margin: 0;	
		padding-left: 10px;
		text-decoration: underline;	
	}

    </style>
  </head>

  <body>
  	<?php
	$step_query		= "SELECT * FROM steps WHERE main_speech_id = '".$main_speech."' AND sub_speech_id = '".$sub_speech."' ORDER BY step_order";	
	$result_step	= mysql_query($step_query);
	$num_rows 		= mysql_num_rows($result_step);	
	?>
	 
	<br><br>	
	<table border="1" align="center" width="80%" cellpadding="10" style="background-color: #F9F9F9;">
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 1</strong></font></td>
			<td> <div class="guidelines">Click on Question/Opening button. Type in <b>"Field Description"</b> your required question or opening statement. Click on <b>"Add Field"</b> button once you are done.</div></td>
		</tr>
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 2</strong></font></td>
			<td> <div class="guidelines">Click on any 3 buttons (Single Line Text Field, Paragraph Text, Multiple Choice) according to your requirement. For opening statements of editor, use the button <b>Question / Opening</b> instead. You can use the optional <b>"Field Options"</b> to make the field mendatory. Please fill the <b>"Field Label"</b>. It will become special keyword. Click on <b>"Add Field"</b> button once you are done. </div></td>
		</tr>
		<tr>
			<td width="100" valign="top"><font class="guidelines_heading"><strong>Step 3</strong></font></td>
			<td> <div class="guidelines">Please Click on <b>"Generate Speech"</b> button, once you are done with all fields.</div></td>
		</tr>
	</table>
	
    <div style="margin-top: 20px">

      <div id="formBuilder"></div>

      <div id="footer">

        <p style="color: Maroon ;">
          "Note: Plesse click only on 'Generate Speech' button when speech step is ready."
        </p>
		<div align="center">
			<a href="javascript:window.history.back();"><font class="label4">Back</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="dashboard_admin.php"><font class="label4">Dashboard</font></a>
		</div>	
	 	<p style="margin-top: 0">
          <br/><br/>An exclusive program for <a target="_blank" href="http://www.write-out-loud.com">Write-out-loud.com</a><br/><br/>
        </p>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js?nocache=123"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js?nocache=123"></script>
    <script src="src/libraries/dust-js/dust-core-0.3.0.min.js?nocache=123"></script>
    <script src="src/libraries/dust-js/dust-full-0.3.0.min.js?nocache=123"></script>
    <script src="src/libraries/dust-js/dust-helpers.js?nocache=123"></script>
    <script src="src/libraries/tabs.jquery.js?nocache=123"></script>
    <script src="src/formBuilder.jquery.js?nocache=123"></script>
	<script>    
	var main_speech_id 	= <?php echo $main_speech; ?> ;
	var sub_speech_id 	= <?php echo $sub_speech; ?> ;
	var step_id			= <?php echo $step_id; ?>;
     
    $('#formBuilder').formBuilder({        
        load_url: 'src/json/edit_step_content.php',
        save_url: 'demo/save.php',
        
        onSaveForm: function() {
          // redirect to demo page
          window.location.href = 'demo/render.php?main_speech='+main_speech_id+'&sub_speech='+sub_speech_id+'&step_id='+step_id;
        }

      });

    </script>
    
  </body>
</html>