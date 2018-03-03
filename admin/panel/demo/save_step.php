<?php
include("../db_con.php");
	if (!$db_selected) {	
		echo 'Could not connect to the database.';
	} else {					
		// echo $_POST['ask'];		
		// echo $_POST['input_field'];
		// echo $_POST['main_speech'];
		// echo $_POST['sub_speech'];
		// echo $_POST['editor_check'];
		// echo $_POST['editor_textarea'];
		// echo $_POST['middle_heading'];
		echo $_POST['step_id'];
		$result 		= mysql_query("SELECT MAX(step_order) FROM steps WHERE main_speech_id = '".$_POST['main_speech']."' AND sub_speech_id = '".$_POST['sub_speech']."'");
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			    $maximum_step = $row['MAX(step_order)'];
			}
		$maximum_step 	= $maximum_step + 1;	
		// echo $maximum_step;
			// if editor enabled
			if ($_POST['editor_check'] == 1) {					
				$ask_pieces 	= explode("|", $_POST['ask']);
					if ($_POST['editor_textarea'] == 1) {
						$editor_heading	= "";	
						$opening1 		= $ask_pieces[0];	
						$opening1 		= addslashes($opening1);					
					} else {
						$editor_heading	= $ask_pieces[0];		
						$editor_heading	= addslashes($editor_heading);
						$opening1 		= $ask_pieces[1];
						$opening1		= addslashes($opening1);		
					}
				$opening2 		= $ask_pieces[2];
				$opening2		= addslashes($opening2);
				$opening3 		= $ask_pieces[3];
				$opening3		= addslashes($opening3);
				$opening4 		= $ask_pieces[4];
				$opening4		= addslashes($opening4);				
				$opening5 		= $ask_pieces[5];
				$opening5		= addslashes($opening5);				
				$opening6 		= $ask_pieces[6];		
				$opening6		= addslashes($opening6);
					if ($_POST['step_id'] != "0") {
						$result = mysql_query("UPDATE steps SET step = '".$_POST['input_field']."', 1opening = '".$opening1."', 2opening = '".$opening2."', 3opening = '".$opening3."', 4opening = '".$opening4."', 5opening = '".$opening5."', 6opening = '".$opening6."', editor_heading = '".$editor_heading."', editor_sub_heading = '".$_POST['middle_heading']."' WHERE id = '".$_POST['step_id']."'");
					} else {										
						$result = mysql_query("INSERT INTO steps(id, step_order, main_speech_id, sub_speech_id, step, question, choice_selection_box, 1opening, 2opening, 3opening, 4opening, 5opening, 6opening, editor_heading, editor_sub_heading) VALUES (NULL, '".$maximum_step."', '".$_POST['main_speech']."', '".$_POST['sub_speech']."', '".$_POST['input_field']."', '', 'yes', '".$opening1."', '".$opening2."', '".$opening3."', '".$opening4."', '".$opening5."', '".$opening6."', '".$editor_heading."', '".$_POST['middle_heading']."')");
					}
			// if editor disabled
			} else {
				$question 	= $_POST['ask'];	
				$question	= addslashes($question);
					if ($_POST['step_id'] != "0") {
						$result = mysql_query("UPDATE steps SET step = '".$_POST['input_field']."', question = '".$question."', 1opening = '".$opening1."', 2opening = '".$opening2."', 3opening = '".$opening3."', 4opening = '".$opening4."', 5opening = '".$opening5."', 6opening = '".$opening6."', editor_heading = '".$editor_heading."', editor_sub_heading = '".$_POST['middle_heading']."' WHERE id = '".$_POST['step_id']."'");
					} else {				
						$result = mysql_query("INSERT INTO steps(id, step_order, main_speech_id, sub_speech_id, step, question, choice_selection_box, 1opening, 2opening, 3opening, 4opening, 5opening, 6opening, editor_heading, editor_sub_heading) VALUES (NULL, '".$maximum_step."', '".$_POST['main_speech']."', '".$_POST['sub_speech']."', '".$_POST['input_field']."', '".$question."', 'no', '', '', '', '', '', '', '', '')");
					}
			}
				
	} 
?>