<?php
session_start();
include("../../db_con.php");
echo $_SESSION["json_formatted_step"];
/*
$step_query		= "SELECT * FROM edit_step WHERE id = '1'";	
$result_step	= mysql_query($step_query);
	while ($row = mysql_fetch_array($result_step))  {
		$step 		= $row["step"];			
		$step_back 	= $row["step_back"];
	}
$test			= $step.$step_back;  
*/ 
// $step_content   = '{ "title": "Speech Generator", "description": "", "fields": [{}, {}, {}, {}, {}, {}, {}, { "title":"Question/Opening Statement", "type":"element-section-break", "description": "In particular we\'d like to thank you for your work in {example1}, {example2} and {example3}.", "required":false, "position":4 }, { "title":"Question/Opening Statement", "type":"element-section-break", "description": "{name} you go down in company history for your achievements on the {example1}, {example2} and {example3}.", "required":false, "position":5 }, { "title":"Question/Opening Statement", "type":"element-section-break", "description": "Whenever we consider {example1}, {example2} or {example3} we will think of you.", "required":false, "position":6 }, {}, {}, {}, { "title":"Question/Opening Statement", "type":"element-multiple-choice", "description": "dss", "required":false, "position":4 }]}';
// echo $step_content;
// var_dump($step_content);

 

/*
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

 
 
		
$step_content 	= '{ "title": "Speech Generator", "description": "", "fields": ['.$editor_heading_content.', '.$editor_sub_heading_content.', '.$question_content.', '.$step_content1.', '.$step_content2.', '.$step_content3.', '.$step_content4.', '.$opening1_content.', '.$opening2_content.', '.$opening3_content.', '.$opening4_content.', '.$opening5_content.', '.$opening6_content.', { "title":"Question/Opening Statement", "type":"element-multiple-choice", "description": "dss", "required":false, "position":4 }]}';
 
$step_content   = '{ "title": "Speech Generator", "description": "", "fields": [{}, {}, {}, {}, {}, {}, {}, { "title":"Question/Opening Statement", "type":"element-section-break", "description": "In particular we\'d like to thank you for your work in {example1}, {example2} and {example3}.", "required":false, "position":4 }, { "title":"Question/Opening Statement", "type":"element-section-break", "description": "{name} you go down in company history for your achievements on the {example1}, {example2} and {example3}.", "required":false, "position":5 }, { "title":"Question/Opening Statement", "type":"element-section-break", "description": "Whenever we consider {example1}, {example2} or {example3} we will think of you.", "required":false, "position":6 }, {}, {}, {}, { "title":"Question/Opening Statement", "type":"element-multiple-choice", "description": "dss", "required":false, "position":4 }]}';
echo $step_content;
  */
  
?>