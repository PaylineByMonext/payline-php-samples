<?php
include '../initSDK.php';
$doImmediateWalletPaymentRequest = array();
                    	
// VERSION
$doImmediateWalletPaymentRequest['version'] = 10;
                    	 
// PAYMENT
$doImmediateWalletPaymentRequest['payment']['amount'] = 1000;
$doImmediateWalletPaymentRequest['payment']['currency'] = PAYMENT_CURRENCY;
$doImmediateWalletPaymentRequest['payment']['action'] = PAYMENT_ACTION;
$doImmediateWalletPaymentRequest['payment']['mode'] =  PAYMENT_MODE;
$doImmediateWalletPaymentRequest['payment']['contractNumber'] = $_SESSION['3DS_AUTH_CONTRACT'];
                    	
// ORDER
$doImmediateWalletPaymentRequest['order']['ref'] = $_SESSION['3DS_AUTH_ORDER_REF'];
$doImmediateWalletPaymentRequest['order']['amount'] = $doImmediateWalletPaymentRequest['payment']['amount'];
$doImmediateWalletPaymentRequest['order']['date'] = date('d/m/Y H:i');
$doImmediateWalletPaymentRequest['order']['currency'] = $doImmediateWalletPaymentRequest['payment']['currency'];

// WALLET
$doImmediateWalletPaymentRequest['walletId'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['walletId'];
$doImmediateWalletPaymentRequest['walletCardInd'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['walletCardInd'];
$doImmediateWalletPaymentRequest['buyer']['walletId'] = $doImmediateWalletPaymentRequest['walletId'];
$doImmediateWalletPaymentRequest['buyer']['walletCardInd'] = $doImmediateWalletPaymentRequest['walletCardInd'];

                    	
// AUTHENTICATION 3DSECURE
$doImmediateWalletPaymentRequest['3DSecure']['md'] = $_POST['MD'];
$doImmediateWalletPaymentRequest['3DSecure']['pares'] = $_POST['PaRes'];
                    	 
// RESPONSE
$doImmediateWalletPaymentResponse = $payline->doImmediateWalletPayment($doImmediateWalletPaymentRequest);
                    	 
echo '<H3>doImmediateWalletPayment Request</H3>';
print_a($doImmediateWalletPaymentRequest);
echo '<br/><H3>doImmediateWalletPayment Response</H3>';
print_a($doImmediateWalletPaymentResponse, 0, true);
?>