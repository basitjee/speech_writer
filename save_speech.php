<?php
session_start();
include("db_con.php");

function crypto_rand_secure($min, $max) {
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length) {
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited
	    for ($i=0; $i < $length; $i++) {
	        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
	    }
    return $token;
}

$sold_speech_id 		= getToken(8);
$speech					= $_REQUEST['speech'];
$speech_id_main			= $_REQUEST['speech_id_main'];
$sold_speech_query		= 'INSERT INTO purchased_speeches(id, main_speech_id, sold_speech_id, speech) VALUES (NULL, "'.$speech_id_main.'", "'.$sold_speech_id.'","'.$speech.'")';	
$result_sold_speech		= mysql_query($sold_speech_query);							
	if (!$result_sold_speech) {
		die(mysql_error());
	}			
echo $sold_speech_id;	
?>