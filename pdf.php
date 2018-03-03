<?php 
session_start();
include ("db_con.php");
$speech					= $_POST['content'];
$speech_query 			= "SELECT * FROM purchased_speeches WHERE sold_speech_id = '".$_REQUEST['speech_id']."' ";								
$result_speech			= mysql_query($speech_query);
	while ($row_speech = mysql_fetch_array($result_speech)) {
		// $speech 		= $row_speech['speech'];																
		$main_speech_id = $row_speech['main_speech_id'];
	}
$speech_title_query 	= "SELECT speech_title FROM main_speech WHERE id = '".$main_speech_id."' ";
$result_speech_title	= mysql_query($speech_title_query);
	while ($row_speech_title = mysql_fetch_array($result_speech_title)) {
		$speech_title = $row_speech_title['speech_title'];
	}

$html = '
<style>
table { border-collapse: collapse; margin-top: 0; text-align: center; }
td { padding: 0.5em; }
h1 { margin-bottom: 0; }
</style>
<div align="center">
<img src="images/footer-speech-builder.jpg"  />
</div>
<div align="center">
<font style="font-weight: bold; font-size: 24px;">'.$speech_title.'</font>
</div> 
<br />
<br />
'.$speech.'
<br />  
<br />
';
//==============================================================
//==============================================================
//==============================================================
include("mpdf.php");

$mpdf=new mPDF('c'); 
//$mpdf->SetHeader(''.$speech_title.'|Center Text|{PAGENO}');
$mpdf->SetFooter('<img src="images/footer-speech-builder.jpg"  />');
$mpdf->WriteHTML($html);

$mpdf->Output();
exit;
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================

?>