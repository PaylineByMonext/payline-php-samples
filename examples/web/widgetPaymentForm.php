<?php
include '../initSDK.php';
use Payline\PaylineSDK;

//VERSION
$array['version'] = $_SESSION['WS_VERSION'];

// PAYMENT
$array['payment']['amount'] = '999';
$array['payment']['currency'] = $_SESSION['PAYMENT_CURRENCY'];
$array['payment']['action'] = $_SESSION['PAYMENT_ACTION'];
$array['payment']['mode'] = $_SESSION['PAYMENT_MODE'];

// ORDER
$array['order']['ref'] = 'PHP-'.time();
$array['order']['amount'] = $array['payment']['amount'];
$array['order']['currency'] = $array['payment']['currency'];
$array['order']['date'] = date('d/m/Y H:i');

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

// Create session and init widget
$response = $payline->doWebPayment($array);
if(isset($response) && $response['result']['code'] == '00000'){
    echo "<span>&nbsp;</span><br/>";
    echo "<div id='PaylineWidget' data-auto-init=false data-token='".$response['token']."' data-template='tab' data-event-willinit='widgetWillInit' data-event-willshow='widgetWillShow' data-event-didshowstate='widgetDidShowState' data-event-finalstatehasbeenreached='widgetFinalStateHasBeenReached'></div>";
    echo "<script type='text/javascript'>
            var console = document.getElementById('widgetLifeCycle');
    		if(console){
    			var d = new Date();
    			var horo = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'.'+d.getMilliseconds();
    			document.getElementById('widgetLifeCycle').innerHTML = \"<span class='widgetLifeSign'>[\"+horo+\"] payment session ".$response['token']." created</span>\";
    		}    			    
        </script>";
    echo "<div id='widgetPaymentForm' class='payline-form'><br/>";
    $displayedPage = 'widgetPayment';
    include '../fieldset/payment.php';
    include '../fieldset/order.php';
    include '../fieldset/buyer.php';

    echo "<div class='row'>";
    echo "<button onclick=\"updatePaymentSession('".$response['token']."')\">update payment session and show widget</button>";
    echo "</div>";
    echo "</div>";
} elseif(isset($response)) {
    echo 'doWebPayment ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' <BR/>';
}
?>
