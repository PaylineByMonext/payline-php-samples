<?php
include '../initSDK.php';
use Payline\PaylineSDK;

//VERSION
$array['version'] = $_SESSION['WS_VERSION'];

// PAYMENT
$array['payment']['amount'] = $_POST['amount'];
$array['payment']['currency'] = $_POST['currency'];
$array['payment']['action'] = $_SESSION['PAYMENT_ACTION'];
$array['payment']['mode'] = $_SESSION['PAYMENT_MODE'];

// ORDER
$array['order']['ref'] = $_POST['ref'];
$array['order']['amount'] = $_POST['amount'];
$array['order']['currency'] = $_POST['currency'];
$array['order']['date'] = date('d/m/Y H:i');

// CONTRACT NUMBERS
$array['payment']['contractNumber'] = $_SESSION['CONTRACT_NUMBER'];
$contracts = explode(";",$_SESSION['CONTRACT_NUMBER_LIST']);
$array['contracts'] = $contracts;
$secondContracts = explode(";",$_SESSION['SECOND_CONTRACT_NUMBER_LIST']);
$array['secondContracts'] = $secondContracts;
$walletContracts = explode(";",$_SESSION['WALLET_CONTRACT_NUMBER_LIST']);
$array['walletContracts'] = $walletContracts;

// URLS
$array['notificationURL'] = $_SESSION['NOTIFICATION_URL'];
$array['returnURL'] = $_SESSION['RETURN_URL'];
$array['cancelURL'] = $_SESSION['CANCEL_URL'];

// options
$array['customPaymentPageCode'] = $_SESSION['CUSTOM_PAYMENT_PAGE_CODE'];
$array['customPaymentTemplateURL'] = $_SESSION['CUSTOM_PAYMENT_TEMPLATE_URL'];
$array['languageCode'] = $_SESSION['LANGUAGE_CODE'];

// BUYER
$array['buyer']['legalStatus'] = $_SESSION['buyerLegalStatus'];
$array['buyer']['title'] = $_SESSION['buyerTitle'];
$array['buyer']['lastName'] = $_SESSION['buyerLastName'];
$array['buyer']['firstName'] = $_SESSION['buyerFirstName'];
$array['buyer']['email'] = $_SESSION['buyerEmail'];
$array['buyer']['mobilePhone'] = $_SESSION['mobilePhone'];
$array['buyer']['customerId'] = $_SESSION['customerId'];
$array['buyer']['accountCreateDate'] = $_SESSION['buyerAccountCreateDate'];
$array['buyer']['accountAverageAmount'] = $_SESSION['buyerAverageAmount'];
$array['buyer']['accountOrderCount'] = $_SESSION['buyerOrderCount'];
$array['buyer']['walletId'] = $_SESSION['buyerWalletId'];
$array['buyer']['walletDisplayed'] = $_SESSION['buyerWalletDisplayed'];
$array['buyer']['walletSecured'] = $_SESSION['buyerWalletSecured'];
$array['buyer']['walletCardInd'] = $_SESSION['buyerWalletCardInd'];
$array['buyer']['ip'] = $_SESSION['buyerIp'];
$array['buyer']['legalDocument'] = $_SESSION['legalDocument'];
$array['buyer']['birthDate'] = $_SESSION['birthDate'];
$array['buyer']['fingerprintID'] = $_SESSION['fingerprintID'];

// BILLING ADDRESS
$array['billingAddress']['title'] = $_SESSION['billingAddressTitle'];
$array['billingAddress']['firstName'] = $_SESSION['billingAddressFirstName'];
$array['billingAddress']['lastName'] = $_SESSION['billingAddressLastName'];
$array['billingAddress']['name'] = $_SESSION['billingAddressName'];
$array['billingAddress']['street1'] = $_SESSION['billingAddressStreet1'];
$array['billingAddress']['street2'] = $_SESSION['billingAddressStreet2'];
$array['billingAddress']['county'] = $_SESSION['billingAddressCounty'];
$array['billingAddress']['cityName'] = $_SESSION['billingAddressCity'];
$array['billingAddress']['zipCode'] = $_SESSION['billingAddressZipCode'];
$array['billingAddress']['country'] = $_SESSION['billingAddressCountry'];
$array['billingAddress']['state'] = $_SESSION['billingAddressState'];
$array['billingAddress']['phoneType'] = $_SESSION['billingAddressPhoneType'];
$array['billingAddress']['phone'] = $_SESSION['billingAddressPhone'];

// SHIPPING ADDRESS
$array['shippingAddress']['title'] = $_SESSION['shippingAddressTitle'];
$array['shippingAddress']['firstName'] = $_SESSION['shippingAddressFirstName'];
$array['shippingAddress']['lastName'] = $_SESSION['shippingAddressLastName'];
$array['shippingAddress']['name'] = $_SESSION['shippingAddressName'];
$array['shippingAddress']['street1'] = $_SESSION['shippingAddressStreet1'];
$array['shippingAddress']['street2'] = $_SESSION['shippingAddressStreet2'];
$array['shippingAddress']['county'] = $_SESSION['shippingAddressCounty'];
$array['shippingAddress']['cityName'] = $_SESSION['shippingAddressCity'];
$array['shippingAddress']['zipCode'] = $_SESSION['shippingAddressZipCode'];
$array['shippingAddress']['country'] = $_SESSION['shippingAddressCountry'];
$array['shippingAddress']['state'] = $_SESSION['shippingAddressState'];
$array['shippingAddress']['phoneType'] = $_SESSION['shippingAddressPhoneType'];
$array['shippingAddress']['phone'] = $_SESSION['shippingAddressPhone'];

// EXECUTE
$response = $payline->doWebPayment($array);
if(isset($response) && $response['result']['code'] == '00000'){
	if ($_POST['data-template']=="redirect") {
	    echo "<span>Redirect to secure page...</span><br/>";
	    echo "<span>If redirect fails clic <a href='".$response['redirectURL']."'>here</a></span>";
	    echo "<script type='text/javascript'>document.location.href='".$response['redirectURL']."';</script>";	    
	} else { // affichage du wigdet
	    echo "<span>&nbsp;</span>";
        echo "<div id='PaylineWidget' data-token='".$response['token']."' data-template='".$_POST['data-template']."' ></div>";
	}
} elseif(isset($response)) {
    echo '<span>ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' </span>';
}