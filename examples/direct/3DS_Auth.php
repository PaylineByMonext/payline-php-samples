<?php
include '../initSDK.php';
$doAuthorization3DSRequest = array();
                    	
//VERSION
$doAuthorization3DSRequest['version'] = $_SESSION['WS_VERSION'];
                    	 
//PAYMENT
$doAuthorization3DSRequest['payment']['amount'] = 1000;
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
                    	
//ORDER
$doAuthorization3DSRequest['order']['ref'] = $_SESSION['3DS_AUTH_ORDER_REF'];
$doAuthorization3DSRequest['order']['amount'] = $doAuthorization3DSRequest['payment']['amount'];
$doAuthorization3DSRequest['order']['date'] = date('d/m/Y H:i');
$doAuthorization3DSRequest['order']['currency'] = $doAuthorization3DSRequest['payment']['currency'];
                    	
//AUTHENTICATION 3DSECURE
$doAuthorization3DSRequest['3DSecure']['md'] = $_POST['MD'];
$doAuthorization3DSRequest['3DSecure']['pares'] = $_POST['PaRes'];
                    	 
// RESPONSE
$doAuthorization3DSResponse = $payline->doAuthorization($doAuthorization3DSRequest);
                    	 
echo '<H3>doAuthorization Request</H3>';
print_a($doAuthorization3DSRequest);
echo '<br/><H3>doAuthorization Response</H3>';
print_a($doAuthorization3DSResponse, 0, true);
?>