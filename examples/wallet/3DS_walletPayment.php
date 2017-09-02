<?php
include '../initSDK.php';
$doImmediateWalletPaymentRequest = array();
                    	
// VERSION
$doImmediateWalletPaymentRequest['version'] = $_SESSION['WS_VERSION'];
                    	 
// PAYMENT
$doImmediateWalletPaymentRequest['payment']['amount'] = $_SESSION['PAYMENT_AMOUNT'];
$doImmediateWalletPaymentRequest['payment']['currency'] = $_SESSION['PAYMENT_CURRENCY'];
$doImmediateWalletPaymentRequest['payment']['action'] = $_SESSION['PAYMENT_ACTION'];
$doImmediateWalletPaymentRequest['payment']['mode'] =  $_SESSION['PAYMENT_MODE'];
$doImmediateWalletPaymentRequest['payment']['contractNumber'] = $_SESSION['3DS_AUTH_CONTRACT'];
                    	
// ORDER
$doImmediateWalletPaymentRequest['order']['ref'] = $_SESSION['3DS_AUTH_ORDER_REF'];
$doImmediateWalletPaymentRequest['order']['amount'] = $_SESSION['orderAmount'];
$doImmediateWalletPaymentRequest['order']['date'] = date('d/m/Y H:i');
$doImmediateWalletPaymentRequest['order']['currency'] = $_SESSION['orderCurrency'];
$doImmediateWalletPaymentRequest['order']['origin'] = $_SESSION['orderOrigin'];
$doImmediateWalletPaymentRequest['order']['country'] = $_SESSION['orderCountry'];
$doImmediateWalletPaymentRequest['order']['taxes'] = $_SESSION['orderTaxes'];
$doImmediateWalletPaymentRequest['order']['deliveryTime'] = $_SESSION['deliveryTime'];
$doImmediateWalletPaymentRequest['order']['deliveryMode'] = $_SESSION['deliveryMode'];
 
// ORDER DETAILS
$item1 = array();
$item1['ref'] = $_SESSION['orderDetailRef1'];
$item1['price'] = $_SESSION['orderDetailPrice1'];
$item1['quantity'] = $_SESSION['orderDetailQuantity1'];
$item1['comment'] = $_SESSION['orderDetailComment1'];
$item1['category'] = $_SESSION['orderDetailCategory1'];
$item1['brand'] = $_SESSION['orderDetailBrand1'];
$item1['subcategory1'] = $_SESSION['orderDetailSubcategory1_1'];
$item1['subcategory2'] = $_SESSION['orderDetailSubcategory2_1'];
$item1['additionalData'] = $_SESSION['orderDetailAdditionalData1'];
$item1['taxRate'] = $_SESSION['orderDetailTaxRate1'];
$payline->addOrderDetail($item1);
 
$item2 = array();
$item2['ref'] = $_SESSION['orderDetailRef2'];
$item2['price'] = $_SESSION['orderDetailPrice2'];
$item2['quantity'] = $_SESSION['orderDetailQuantity2'];
$item2['comment'] = $_SESSION['orderDetailComment2'];
$item2['category'] = $_SESSION['orderDetailCategory2'];
$item2['brand'] = $_SESSION['orderDetailBrand2'];
$item2['subcategory1'] = $_SESSION['orderDetailSubcategory1_2'];
$item2['subcategory2'] = $_SESSION['orderDetailSubcategory2_2'];
$item2['additionalData'] = $_SESSION['orderDetailAdditionalData2'];
$item2['taxRate'] = $_SESSION['orderDetailTaxRate2'];
$payline->addOrderDetail($item2);

// BUYER
$doImmediateWalletPaymentRequest['buyer']['legalStatus'] = $_SESSION['buyerLegalStatus'];
$doImmediateWalletPaymentRequest['buyer']['title'] = $_SESSION['buyerTitle'];
$doImmediateWalletPaymentRequest['buyer']['lastName'] = $_SESSION['buyerLastName'];
$doImmediateWalletPaymentRequest['buyer']['firstName'] = $_SESSION['buyerFirstName'];
$doImmediateWalletPaymentRequest['buyer']['email'] = $_SESSION['buyerEmail'];
$doImmediateWalletPaymentRequest['buyer']['mobilePhone'] = $_SESSION['mobilePhone'];
$doImmediateWalletPaymentRequest['buyer']['customerId'] = $_SESSION['customerId'];
$doImmediateWalletPaymentRequest['buyer']['accountCreateDate'] = $_SESSION['buyerAccountCreateDate'];
$doImmediateWalletPaymentRequest['buyer']['accountAverageAmount'] = $_SESSION['buyerAverageAmount'];
$doImmediateWalletPaymentRequest['buyer']['accountOrderCount'] = $_SESSION['buyerOrderCount'];
$doImmediateWalletPaymentRequest['buyer']['walletId'] = $_SESSION['buyerWalletId'];
$doImmediateWalletPaymentRequest['buyer']['walletDisplayed'] = $_SESSION['buyerWalletDisplayed'];
$doImmediateWalletPaymentRequest['buyer']['walletSecured'] = $_SESSION['buyerWalletSecured'];
$doImmediateWalletPaymentRequest['buyer']['walletCardInd'] = $_SESSION['buyerWalletCardInd'];
$doImmediateWalletPaymentRequest['buyer']['ip'] = $_SESSION['buyerIp'];
$doImmediateWalletPaymentRequest['buyer']['legalDocument'] = $_SESSION['legalDocument'];
$doImmediateWalletPaymentRequest['buyer']['birthDate'] = $_SESSION['birthDate'];
$doImmediateWalletPaymentRequest['buyer']['fingerprintID'] = $_SESSION['fingerprintID'];

// BILLING ADDRESS
$doImmediateWalletPaymentRequest['billingAddress']['title'] = $_SESSION['billingAddressTitle'];
$doImmediateWalletPaymentRequest['billingAddress']['firstName'] = $_SESSION['billingAddressFirstName'];
$doImmediateWalletPaymentRequest['billingAddress']['lastName'] = $_SESSION['billingAddressLastName'];
$doImmediateWalletPaymentRequest['billingAddress']['name'] = $_SESSION['billingAddressName'];
$doImmediateWalletPaymentRequest['billingAddress']['street1'] = $_SESSION['billingAddressStreet1'];
$doImmediateWalletPaymentRequest['billingAddress']['street2'] = $_SESSION['billingAddressStreet2'];
$doImmediateWalletPaymentRequest['billingAddress']['county'] = $_SESSION['billingAddressCounty'];
$doImmediateWalletPaymentRequest['billingAddress']['cityName'] = $_SESSION['billingAddressCity'];
$doImmediateWalletPaymentRequest['billingAddress']['zipCode'] = $_SESSION['billingAddressZipCode'];
$doImmediateWalletPaymentRequest['billingAddress']['country'] = $_SESSION['billingAddressCountry'];
$doImmediateWalletPaymentRequest['billingAddress']['state'] = $_SESSION['billingAddressState'];
$doImmediateWalletPaymentRequest['billingAddress']['phoneType'] = $_SESSION['billingAddressPhoneType'];
$doImmediateWalletPaymentRequest['billingAddress']['phone'] = $_SESSION['billingAddressPhone'];

// SHIPPING ADDRESS
$doImmediateWalletPaymentRequest['shippingAddress']['title'] = $_SESSION['shippingAddressTitle'];
$doImmediateWalletPaymentRequest['shippingAddress']['firstName'] = $_SESSION['shippingAddressFirstName'];
$doImmediateWalletPaymentRequest['shippingAddress']['lastName'] = $_SESSION['shippingAddressLastName'];
$doImmediateWalletPaymentRequest['shippingAddress']['name'] = $_SESSION['shippingAddressName'];
$doImmediateWalletPaymentRequest['shippingAddress']['street1'] = $_SESSION['shippingAddressStreet1'];
$doImmediateWalletPaymentRequest['shippingAddress']['street2'] = $_SESSION['shippingAddressStreet2'];
$doImmediateWalletPaymentRequest['shippingAddress']['county'] = $_SESSION['shippingAddressCounty'];
$doImmediateWalletPaymentRequest['shippingAddress']['cityName'] = $_SESSION['shippingAddressCity'];
$doImmediateWalletPaymentRequest['shippingAddress']['zipCode'] = $_SESSION['shippingAddressZipCode'];
$doImmediateWalletPaymentRequest['shippingAddress']['country'] = $_SESSION['shippingAddressCountry'];
$doImmediateWalletPaymentRequest['shippingAddress']['state'] = $_SESSION['shippingAddressState'];
$doImmediateWalletPaymentRequest['shippingAddress']['phoneType'] = $_SESSION['shippingAddressPhoneType'];
$doImmediateWalletPaymentRequest['shippingAddress']['phone'] = $_SESSION['shippingAddressPhone'];

// WALLET
$doImmediateWalletPaymentRequest['walletId'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['walletId'];
$doImmediateWalletPaymentRequest['walletCardInd'] = $_SESSION['3DS_AUTH_PAYMENT_DATA']['walletCardInd'];
$doImmediateWalletPaymentRequest['buyer']['walletId'] = $doImmediateWalletPaymentRequest['walletId'];
$doImmediateWalletPaymentRequest['buyer']['walletCardInd'] = $doImmediateWalletPaymentRequest['walletCardInd'];

// AUTHENTICATION 3DSECURE
$doImmediateWalletPaymentRequest['3DSecure']['md'] = $_POST['MD'];
$doImmediateWalletPaymentRequest['3DSecure']['pares'] = $_POST['PaRes'];

//PRIVATE DATA
for($i=1;$i<=8;$i++){
    $privateData = array();
    $privateData['key'] = $_SESSION['pvdKey'.$i] ;
    $privateData['value'] = $_SESSION['pvdValue'.$i];
    $payline->addPrivateData($privateData);
}
                    	 
// RESPONSE
$doImmediateWalletPaymentResponse = $payline->doImmediateWalletPayment($doImmediateWalletPaymentRequest);
                    	 
echo '<H3>doImmediateWalletPayment Request</H3>';
print_a($doImmediateWalletPaymentRequest);
echo '<br/><H3>doImmediateWalletPayment Response</H3>';
print_a($doImmediateWalletPaymentResponse, 0, true);
?>