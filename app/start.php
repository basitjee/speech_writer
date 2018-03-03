<?php

require 'vendor/autoload.php';
define('SITE_URL','http://www.write-out-loud-admin.net');
/*$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
	'AYPuZ3XAcQa4TNpwouzNIBKyt52m1liJAaaBg_cLPMkWdxs8e55mStWO5oZSIjOaenCz0xj_tFD1PM8U',
	'EH8JU6ydkSvJLq0OvKvgFRTJ0kL5hS15_Nq8K-TmVBtdSunfQq9wLgVp6Dc7ftoLKvWWs9PjQNsSygDz')
);*/

$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
	'AeyLwYAApEy4xCYvx86X3gIA6n7sxNbwodWybVsFCDBiV6QX35gHgMlGXfpqPe9AqgIWlWEH20y752wK',
	'EJOMtbdBQ5_PKTyhqTHI3Z8WJewvwUAn1SWl8AvgZOBc-RWCEqsynH1p0_LgmBSU5bfssJA57jF2rzXt')
);

$paypal->setConfig(
array(
'mode' => 'live',
'cache.enabled' => true,
)
);


?>