<?php
include '../initSDK.php';
use Payline\PaylineSDK;

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/order.php';
include '../arraySet/privateDataList.php';
include '../arraySet/buyer.php';
include '../arraySet/owner.php';
include '../arraySet/recurring.php';
include '../arraySet/urls.php';
include '../arraySet/webOptions.php';
include '../arraySet/subMerchant.php';

// FIRST CONTRACT LIST
if (isset($_POST['selectedContract'])){
	$contracts = explode(";",$_POST['selectedContract']);
	$array['contracts'] = $contracts;
}

// SECOND CONTRACT LIST
if (isset($_POST['secondSelectedContract'])){
	$secondContracts = explode(";",$_POST['secondSelectedContract']);
	$array['secondContracts'] = $secondContracts;
}

// WALLET CONTRACT LIST
if (isset($_POST['contractNumberWalletList'])){
	$walletContracts = explode(";",$_POST['contractNumberWalletList']);
	$array['walletContracts'] = $walletContracts;
}

// MERCHANT NAME
$array['merchantName'] = $_POST['merchantName'];

// MISC DATA
$array['miscData'] = $_POST['miscData'];

// EXECUTE
$response = $payline->doWebPayment($array);
unset($_SESSION['webPaymentToken']);
unset($_SESSION['shortCutToken']);

// RESPONSE
if(isset($response) && $response['result']['code'] == '00000'){
    $_SESSION['webPaymentToken'] = $response['token'];
	if ($_POST['data-template']=="redirect") {
	    echo "<span>Redirect to secure page...</span><br/>";
	    echo "<span>If redirect fails clic <a href='".$response['redirectURL']."'>here</a></span>";
	    echo "<script type='text/javascript'>document.location.href='".$response['redirectURL']."';</script>";	    
	} else { // affichage du wigdet
	    echo "<span>&nbsp;</span>";
        echo "<div id='PaylineWidget' data-token='".$response['token']."' data-template='".$_POST['data-template']."' data-event-didshowstate='customStates'></div>";
	}
} elseif(isset($response)) {
    echo '<span>ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' </span>';
}