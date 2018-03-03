<?php
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\ExecutePayment;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
require 'app/start.php';

ob_start();

	if(!isset($_GET['success'],$_GET['paymentId'], $_GET['PayerID'])){
		die();
		
	}
	if((bool)$_GET['success']===false){
		die();
	}
	
	$paymentId = $_GET['paymentId'];
	$payerId = $_GET['PayerID'];
	
	$payment = Payment::get($paymentId,$paypal);
	
	$execute = new PaymentExecution();
	$execute->setpayerId($payerId);
	
	try{
		$result= $payment->execute($execute,$paypal);
	}catch(Exception $e){
		$data = json_decode($e->getData());
		var_dump($data);
		die($e);
	}
	
	echo 'Payment made. Thanks';
	header("Location:http://www.write-out-loud-admin.net/download.php?speech_id=".$_REQUEST["speech_id"]);
	?>