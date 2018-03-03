<?php
session_start();
include("db_con.php");
$password		= $_POST['password'];					
$login_query	= "SELECT id FROM users WHERE username = '".$_POST['username']."' AND password = '".$password."'";	
$result_login	= mysql_query($login_query);
$num_rows 		= mysql_num_rows($result_login);
	if ($num_rows != 0) {
		$row_user_id				= mysql_fetch_row($result_login);		
		$_SESSION['user_log_flag'] 	= 1; 
		$_SESSION['user_id'] 		= $row_user_id[0];
		$_SESSION['email'] 			= $_POST['email'];
		header("Location: speech_writer_engine.php"); 
		exit;	
	} else {		
		header("Location: index.php?error=1"); 
		exit;	
	}
?>