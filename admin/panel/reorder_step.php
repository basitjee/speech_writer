<?php
include("db_con2.php");
	if (!$db) {	
		echo 'Could not connect to the database.';
	} else {			
		$tuple_id 		= $_POST['tuple_id'];	
		$new_step_order = $_POST['new_step_order'];
		$new_step_array = explode("_",$new_step_order);
		// echo $new_step_array[1]; 
		$query 			= $db->query("UPDATE steps SET step_order = '".$new_step_array[1]."' WHERE id = '".$tuple_id."' ");
		echo $debug = "UPDATE steps SET step_order = '".$new_step_array[1]."' WHERE id = '".$tuple_id."' ";
	} 
?>