<?php

require 'vendor/autoload.php';
define('SITE_URL','http://www.write-out-loud-admin.net');
$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
	'ASqjq7sv4bJSUT_RabWVXHuAENoEOncONXDfFtwlYpf7sbCuO7PXhywKOJijGl_KVovBPo_ncshSoiD7',
	'EDRBDoSLQmalcRNz4cKBCZ1NJSUxFr0_6hsXpupKZGaDllscEM--JfsXU4JHeSqSLjr953CNrfv3lalM')
);
?>