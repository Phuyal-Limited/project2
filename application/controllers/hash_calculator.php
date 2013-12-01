<?php	
	require_once ("PaymentFormHelper.php");
	include ("Config.php");

	$Width = 800;
	$FormAction = "https://mms.".$PaymentProcessorDomain."/Pages/PublicPages/PaymentForm.aspx";
	// the amount in *minor* currency (i.e. £10.00 passed as "1000")
	$szAmount=$amount;
	// the currency	- ISO 4217 3-digit numeric (e.g. GBP = 826)
	$szCurrencyCode = strval(826);
	// order ID
	$szOrderID = "Hotel Booking Deposit";
	// the transaction type - can be SALE or PREAUTH
	$szTransactionType = "SALE";
	// the GMT/UTC relative date/time for the transaction (MUST either be in GMT/UTC 
	// or MUST include the correct timezone offset)
	$szTransactionDateTime = $dateTime;
	// order description
	$szOrderDescription = $orderDesc;
	// these variables allow the payment form to be "seeded" with initial values
	$szCustomerName = $custName;	
	$szAddress1 = "";
	$szAddress2 = "";
	$szAddress3 = "";
	$szAddress4 = "";
	$szCity = "";
	$szState = "";
	$szPostCode = "";
	// the country code - ISO 3166-1  3-digit numeric (e.g. UK = 826)
	$szCountryCode = strval(826);
	// use these to control which fields on the hosted payment form are
	// mandatory
	$szCV2Mandatory = PaymentFormHelper::boolToString(true);
	$data['szCV2Mandatory']=$szCV2Mandatory;
	$szAddress1Mandatory = PaymentFormHelper::boolToString(false);
	$data['szAddress1Mandatory']=$szAddress1Mandatory;
	$szCityMandatory = PaymentFormHelper::boolToString(false);
	$data['szCityMandatory']=$szCityMandatory;
	$szPostCodeMandatory = PaymentFormHelper::boolToString(false);
	$data['szPostCodeMandatory']=$szPostCodeMandatory;
	$szStateMandatory = PaymentFormHelper::boolToString(false);
	$data['szStateMandatory']=$szStateMandatory;
	$szCountryMandatory = PaymentFormHelper::boolToString(true);
	$data['szCountryMandatory']=$szCountryMandatory;
	// the URL on this system that the payment form will push the results to (only applicable for 
	// ResultDeliveryMethod = "SERVER")
	if ($ResultDeliveryMethod != "SERVER")
	{
		$szServerResultURL = base_url('thank_you');
	}
	else
	{
		$szServerResultURL = base_url('thank_you');
	}
	$data['szServerResultURL']=$szServerResultURL;
	// set this to true if you want the hosted payment form to display the transaction result
	// to the customer (only applicable for ResultDeliveryMethod = "SERVER")
	if ($ResultDeliveryMethod != "SERVER")
	{
		$szPaymentFormDisplaysResult = base_url('thank_you');
	}
	else
	{
		$szPaymentFormDisplaysResult = PaymentFormHelper::boolToString(false);
	}
	// the callback URL on this site that will display the transaction result to the customer
	// (always required unless ResultDeliveryMethod = "SERVER" and PaymentFormDisplaysResult = "true")
	if ($ResultDeliveryMethod == "SERVER" && PaymentFormHelper::stringToBool($szPaymentFormDisplaysResult) == false)
	{
		$szCallbackURL = "http://paymentgatewayuk.com/PHP/HostedSample/DisplayTransactionResult.php";
	}
	else
	{
		$szCallbackURL = base_url('thank_you');
	}
	// get the string to be hashed
	$szStringToHash = PaymentFormHelper::generateStringToHash($MerchantID,
			        										  $Password,
			        										  $szAmount,
															  $szCurrencyCode,
															  $szOrderID,
															  $szTransactionType,
															  $szTransactionDateTime,
															  $szCallbackURL,
															  $szOrderDescription,
															  $szCustomerName,
															  $szAddress1,
															  $szAddress2,
															  $szAddress3,
															  $szAddress4,
															  $szCity,
															  $szState,
															  $szPostCode,
															  $szCountryCode,
															  $szCV2Mandatory,
															  $szAddress1Mandatory,
															  $szCityMandatory,
															  $szPostCodeMandatory,
															  $szStateMandatory,
															  $szCountryMandatory,
															  $ResultDeliveryMethod,
															  $szServerResultURL,
															  $szPaymentFormDisplaysResult,
			         		                                  $PreSharedKey,
			         		                                  $HashMethod);

	// pass this string into the hash function to create the hash digest
	$szHashDigest = PaymentFormHelper::calculateHashDigest($szStringToHash,
                        								   $PreSharedKey, 
                        								   $HashMethod);
?>