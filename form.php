<html>
<head>

<title>Paypal </title>
</head>


<body>

<h1> Enter Values </h1>

<div class="payment">
<form action = "checkout.php" method="post" autocomplete="off">
	 
	<input type="hidden" name="product">
	
		<input type="hidden" name="price">
		<input type="submit" value="pay">
		</form>
		
</form>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="naqvi.sajid11-facilitator@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Dentist Form">
<input type="hidden" name="amount" value="10.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="20.000">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>




</div>
</body>






</html>