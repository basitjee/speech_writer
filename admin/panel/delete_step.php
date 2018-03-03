<?php
include("db_con2.php");
	if (!$db) {	
		echo 'Could not connect to the database.';
	} else {			
		$step_id 	= $_POST['action'];		
		echo $step_id;
		$query 		= $db->query("DELETE FROM steps WHERE id = '".$step_id."'");
	} 
?>