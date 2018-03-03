<?phperror_reporting(0);
$link 			= mysql_connect('localhost', 'root', '');
	if (!$link) {
	    die('Not connected : ' . mysql_error());
	}
$db_selected 	= mysql_select_db('speech_writer', $link);
	if (!$db_selected) {
	    die ('Can\'t use foo : ' . mysql_error());
	}

/* 	
$link 			= mysql_connect('localhost', 'writeout_root', '?uoU[3yfTuud');
	if (!$link) {
	    die('Not connected : ' . mysql_error());
	}
$db_selected 	= mysql_select_db('writeout_speech_writer', $link);
	if (!$db_selected) {
	    die ('Can\'t use foo : ' . mysql_error());
	}	
*/
?>
