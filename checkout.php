<?php
use PayPal\Api\Payment;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;

require 'app/start.php';
ob_start();
if(!isset($_POST['product'],$_POST['price'])){
	$product = 'Speech Builder Payment';
$price = 10;
$shipping = 2.00;

$total= $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
      ->setCurrency('USD')
	  ->setQuantity(1)
	  ->setPrice($price);
	  
	  $itemList = new ItemList();
	  $itemList->setItems([$item]);
	  $details = new Details();
	  
	  $details = new Details();
	  $details->setTax($shipping)
		->setSubtotal($price);
		
		
		$amount = new Amount();
		$amount->setCurrency('USD')
			->setTotal($total)
			->setDetails($details);
			
			
			
				$transaction = new transaction();
				$transaction->setAmount($amount)
					->setItemList($itemList)
					->setDescription('PayforSomething')
					->setInvoiceNumber(uniqid());
					
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl(SITE_URL . '/pay.php?success=true&speech_id='.$_REQUEST["speech_id"])
		->setCancelUrl(SITE_URL . '/pay.php?success=false');
		
		$payment = new Payment();
		$payment->setIntent('sale')
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions([$transaction]);
					
try{
	$payment->create($paypal);
}	catch(Exception $e){
		die($e);
}	

echo $approvalUrl = $payment->getApprovalLink();


header("Location:{$approvalUrl}");
}
$product = 'Speech Builder Payment';
$price = 9.99;
$shipping = 0.00;

$total= $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
      ->setCurrency('USD')
	  ->setQuantity(1)
	  ->setPrice($price);
	  
	  $itemList = new ItemList();
	  $itemList->setItems([$item]);
	  $details = new Details();
	  
	  $details = new Details();
	  $details->setTax($shipping)
		->setSubtotal($price);
		
		
		$amount = new Amount();
		$amount->setCurrency('USD')
			->setTotal($total)
			->setDetails($details);
			
			
			
				$transaction = new transaction();
				$transaction->setAmount($amount)
					->setItemList($itemList)
					->setDescription('PayforSomething')
					->setInvoiceNumber(uniqid());
					
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl(SITE_URL . '/pay.php?success=true&speech_id='.$_REQUEST["speech_id"])
		->setCancelUrl(SITE_URL . '/pay.php?success=false');
		
		$payment = new Payment();
		$payment->setIntent('sale')
			->setPayer($payer)
			->setRedirectUrls($redirectUrls)
			->setTransactions([$transaction]);
					
try{
	$payment->create($paypal);
}	catch(Exception $e){
		die($e);
}	

echo $approvalUrl = $payment->getApprovalLink();
header("Location:{$approvalUrl}");
?>