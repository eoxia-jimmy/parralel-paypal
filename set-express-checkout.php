<?php

include_once( 'curl-util.php' );

$ch = new CURL_Util( 'https://api-3t.sandbox.paypal.com/nvp', array(
	'USER' => '****************************************',
	'PWD' => '*************',
	'SIGNATURE' => '*********************************************',
	'METHOD' => 'SetExpressCheckout',
	'VERSION' => 124.0,
	'cancelUrl' => 'http://127.0.0.1/tests/paypal/cancel.php',
	'returnUrl' => 'http://127.0.0.1/tests/paypal/success.php',

	'PAYMENTREQUEST_0_PAYMENTACTION' => 'Sale',
	'PAYMENTREQUEST_0_SELLERPAYPALACCOUNTID' => '***************',
	'PAYMENTREQUEST_0_AMT' => 10,
	'PAYMENTREQUEST_0_ITEMAMT' => 7,
	'PAYMENTREQUEST_0_TAXAMT' => 3,
	'PAYMENTREQUEST_0_PAYMENTREQUESTID' => 'OR0000001-PAYMENT0',
	'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',

	'PAYMENTREQUEST_1_PAYMENTACTION' => 'Sale',
	'PAYMENTREQUEST_1_SELLERPAYPALACCOUNTID' => '***************',
	'PAYMENTREQUEST_1_AMT' => 20,
	'PAYMENTREQUEST_1_ITEMAMT' => 17,
	'PAYMENTREQUEST_1_TAXAMT' => 3,
	'PAYMENTREQUEST_1_PAYMENTREQUESTID' => 'OR0000001-PAYMENT1',
	'PAYMENTREQUEST_1_CURRENCYCODE' => 'EUR',

	'L_PAYMENTREQUEST_0_NAME0' => 'Test',
	'L_PAYMENTREQUEST_0_NUMBER0' => '123456',
	'L_PAYMENTREQUEST_0_QTY0' => 1,
	'L_PAYMENTREQUEST_0_TAXAMT0' => 3,
	'L_PAYMENTREQUEST_0_AMT0' => 7,

	'L_PAYMENTREQUEST_1_NAME0' => 'Test',
	'L_PAYMENTREQUEST_1_NUMBER0' => '123456',
	'L_PAYMENTREQUEST_1_QTY0' => 1,
	'L_PAYMENTREQUEST_1_TAXAMT0' => 3,
	'L_PAYMENTREQUEST_1_AMT0' => 17,
) );

$response = $ch->exec();
die( json_encode( $response ) );
