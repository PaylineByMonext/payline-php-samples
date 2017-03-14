<?php
include '../initSDK.php';
$doAuthorization3DSRequest = array();
                    	
// VERSION
$doAuthorization3DSRequest['version'] = $_SESSION['WS_VERSION'];
                    	 
// PAYMENT
$doAuthorization3DSRequest['payment']['amount'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['paymentAmount'];
$doAuthorization3DSRequest['payment']['currency'] = $_SESSION['PAYMENT_CURRENCY'];
$doAuthorization3DSRequest['payment']['action'] = $_SESSION['PAYMENT_ACTION'];
$doAuthorization3DSRequest['payment']['mode'] =  $_SESSION['PAYMENT_MODE'];
$doAuthorization3DSRequest['payment']['contractNumber'] = $_SESSION['3DS_AUTH_CONTRACT'];
                    	
// CARD INFO
$doAuthorization3DSRequest['card']['type'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['cardType'];
$doAuthorization3DSRequest['card']['number'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['cardNumber'];
$doAuthorization3DSRequest['card']['expirationDate'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['cardExp'];
$doAuthorization3DSRequest['card']['cvx'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['CVV'];
$doAuthorization3DSRequest['card']['token'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['cardTokenPan'];
                    	
// ORDER
$doAuthorization3DSRequest['order']['ref'] = $_SESSION['3DS_AUTH_ORDER_REF'];
$doAuthorization3DSRequest['order']['amount'] = $doAuthorization3DSRequest['payment']['amount'];
$doAuthorization3DSRequest['order']['date'] = date('d/m/Y H:i');
$doAuthorization3DSRequest['order']['currency'] = $doAuthorization3DSRequest['payment']['currency'];

// BUYER
$doAuthorization3DSRequest['buyer']['legalStatus'] = $_SESSION['buyerLegalStatus'];
$doAuthorization3DSRequest['buyer']['title'] = $_SESSION['buyerTitle'];
$doAuthorization3DSRequest['buyer']['lastName'] = $_SESSION['buyerLastName'];
$doAuthorization3DSRequest['buyer']['firstName'] = $_SESSION['buyerFirstName'];
$doAuthorization3DSRequest['buyer']['email'] = $_SESSION['buyerEmail'];
$doAuthorization3DSRequest['buyer']['mobilePhone'] = $_SESSION['mobilePhone'];
$doAuthorization3DSRequest['buyer']['customerId'] = $_SESSION['customerId'];
$doAuthorization3DSRequest['buyer']['accountCreateDate'] = $_SESSION['buyerAccountCreateDate'];
$doAuthorization3DSRequest['buyer']['accountAverageAmount'] = $_SESSION['buyerAverageAmount'];
$doAuthorization3DSRequest['buyer']['accountOrderCount'] = $_SESSION['buyerOrderCount'];
$doAuthorization3DSRequest['buyer']['walletId'] = $_SESSION['buyerWalletId'];
$doAuthorization3DSRequest['buyer']['walletDisplayed'] = $_SESSION['buyerWalletDisplayed'];
$doAuthorization3DSRequest['buyer']['walletSecured'] = $_SESSION['buyerWalletSecured'];
$doAuthorization3DSRequest['buyer']['walletCardInd'] = $_SESSION['buyerWalletCardInd'];
$doAuthorization3DSRequest['buyer']['ip'] = $_SESSION['buyerIp'];
$doAuthorization3DSRequest['buyer']['legalDocument'] = $_SESSION['legalDocument'];
$doAuthorization3DSRequest['buyer']['birthDate'] = $_SESSION['birthDate'];
$doAuthorization3DSRequest['buyer']['fingerprintID'] = $_SESSION['fingerprintID'];
$doAuthorization3DSRequest['buyer']['deviceFingerprint'] = $_SESSION['deviceFingerprint'];
$doAuthorization3DSRequest['buyer']['isBot'] = $_SESSION['isBot'];
$doAuthorization3DSRequest['buyer']['isIncognito'] = $_SESSION['isIncognito'];
$doAuthorization3DSRequest['buyer']['isBehindProxy'] = $_SESSION['isBehindProxy'];
$doAuthorization3DSRequest['buyer']['isFromTor'] = $_SESSION['isFromTor'];
$doAuthorization3DSRequest['buyer']['isEmulator'] = $_SESSION['isEmulator'];
$doAuthorization3DSRequest['buyer']['isRooted'] = $_SESSION['isRooted'];
$doAuthorization3DSRequest['buyer']['hasTimezoneMismatch'] = $_SESSION['hasTimezoneMismatch'];

// BILLING ADDRESS
$doAuthorization3DSRequest['billingAddress']['title'] = $_SESSION['billingAddressTitle'];
$doAuthorization3DSRequest['billingAddress']['firstName'] = $_SESSION['billingAddressFirstName'];
$doAuthorization3DSRequest['billingAddress']['lastName'] = $_SESSION['billingAddressLastName'];
$doAuthorization3DSRequest['billingAddress']['name'] = $_SESSION['billingAddressName'];
$doAuthorization3DSRequest['billingAddress']['street1'] = $_SESSION['billingAddressStreet1'];
$doAuthorization3DSRequest['billingAddress']['street2'] = $_SESSION['billingAddressStreet2'];
$doAuthorization3DSRequest['billingAddress']['county'] = $_SESSION['billingAddressCounty'];
$doAuthorization3DSRequest['billingAddress']['cityName'] = $_SESSION['billingAddressCity'];
$doAuthorization3DSRequest['billingAddress']['zipCode'] = $_SESSION['billingAddressZipCode'];
$doAuthorization3DSRequest['billingAddress']['country'] = $_SESSION['billingAddressCountry'];
$doAuthorization3DSRequest['billingAddress']['state'] = $_SESSION['billingAddressState'];
$doAuthorization3DSRequest['billingAddress']['phoneType'] = $_SESSION['billingAddressPhoneType'];
$doAuthorization3DSRequest['billingAddress']['phone'] = $_SESSION['billingAddressPhone'];

// SHIPPING ADDRESS
$doAuthorization3DSRequest['shippingAddress']['title'] = $_SESSION['shippingAddressTitle'];
$doAuthorization3DSRequest['shippingAddress']['firstName'] = $_SESSION['shippingAddressFirstName'];
$doAuthorization3DSRequest['shippingAddress']['lastName'] = $_SESSION['shippingAddressLastName'];
$doAuthorization3DSRequest['shippingAddress']['name'] = $_SESSION['shippingAddressName'];
$doAuthorization3DSRequest['shippingAddress']['street1'] = $_SESSION['shippingAddressStreet1'];
$doAuthorization3DSRequest['shippingAddress']['street2'] = $_SESSION['shippingAddressStreet2'];
$doAuthorization3DSRequest['shippingAddress']['county'] = $_SESSION['shippingAddressCounty'];
$doAuthorization3DSRequest['shippingAddress']['cityName'] = $_SESSION['shippingAddressCity'];
$doAuthorization3DSRequest['shippingAddress']['zipCode'] = $_SESSION['shippingAddressZipCode'];
$doAuthorization3DSRequest['shippingAddress']['country'] = $_SESSION['shippingAddressCountry'];
$doAuthorization3DSRequest['shippingAddress']['state'] = $_SESSION['shippingAddressState'];
$doAuthorization3DSRequest['shippingAddress']['phoneType'] = $_SESSION['shippingAddressPhoneType'];
$doAuthorization3DSRequest['shippingAddress']['phone'] = $_SESSION['shippingAddressPhone'];
                    	
// AUTHENTICATION 3DSECURE
$doAuthorization3DSRequest['3DSecure']['md'] = $_POST['MD'];
$doAuthorization3DSRequest['3DSecure']['pares'] = $_POST['PaRes'];
                    	 
// RESPONSE
$doAuthorization3DSResponse = $payline->doAuthorization($doAuthorization3DSRequest);
                    	 
echo '<H3>doAuthorization Request</H3>';
print_a($doAuthorization3DSRequest);
echo '<br/><H3>doAuthorization Response</H3>';
print_a($doAuthorization3DSResponse, 0, true);
?>