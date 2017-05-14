<?php

/*
|--------------------------------------------------------------------------
| General settings
|--------------------------------------------------------------------------
*/

$config['donation_currency'] = "USD"; // Remember to change the currency ON PayGol as well!
$config['donation_currency_sign'] = "$";

/*
|--------------------------------------------------------------------------
| PayPal Donation (www.paypal.com)
|--------------------------------------------------------------------------
*/

$config['donate_paypal'] = array(
	'use' => true, // true: enable | false: disable
	'postback_url' => "http://asmodeos-wow.tk/donate/postback_paypal",
	'return_url' => "http://asmodeos-wow.tk/donate/success",
	'email' => "sebasgodoy32@outlook.com",
	'sandbox' => false, // false: live servers | true: testing/dev servers
	
	'values' => array(

		// Format: PRICE => DP
		// Example: 5 => 15 which would cause 5 USD
		// (or your specified currency) to give 15 DP

		3 => 5,
		5 => 10,
		10 => 25,
		15 => 35,
		20 => 45,
		25 => 55,
		30 => 70
	),

);

/*
|--------------------------------------------------------------------------
| PayGol Donation (www.paygol.com)
|--------------------------------------------------------------------------
*/

$config['donate_paygol'] = array(
	'use' => true, // true: enable | false: disable
	'service_id' => 367118, // Your PayGol service ID
	'cancel_url' => "http://asmodeos-wow.tk/donate",
	'return_url' => "http://asmodeos-wow.tk/donate/success",
	
	'values' => array(

		// Format: PRICE => DP
		// Example: 5 => 15 which would cause 5 USD
		// (or your specified currency) to give 15 DP

		3 => 5,
		10 => 15,
		20 => 45,
		30 => 70,
	),

);





/*******************************************************************/
/******************* Only Jesper allowed ***************************/
/*******************************************************************/

// Touch it and I'll kill you! >:(
$config['force_code_editor'] = true;