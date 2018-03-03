<?php
session_start();
include("db_con.php");
$login_query	= "SELECT id FROM users WHERE username = '".$_POST['email']."'";	 
$result_login	= mysql_query($login_query);
$num_rows 		= mysql_num_rows($result_login);
	// if user not exist then do registeration
	if ($num_rows == 0) {
		$insert_query	= "INSERT INTO users (id, username, password) VALUES (NULL, '".$_POST['email']."', '".$_POST['new_password']."');";	
		$result_insert	= mysql_query($insert_query);	
		$row_user_id				= mysql_insert_id();	
		$_SESSION['user_log_flag'] 	= 1; 
		$_SESSION['user_id'] 		= $row_user_id[0];
		$_SESSION['email'] 			= $_POST['email'];
		header("Location: speech_writer_engine.php"); 
		exit;	
	} else {
	// if user exist then stop and show error
		header("Location: index.php?error=2"); 
		exit;	
	}
?>