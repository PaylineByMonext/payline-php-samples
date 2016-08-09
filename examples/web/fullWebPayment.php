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

// EXECUTE
$response = $payline->doWebPayment($array);

// RESPONSE
if(isset($response) && $response['result']['code'] == '00000'){
	if ($_POST['data-template']=="redirect") {
		header("location:".$response['redirectURL']);
		exit();
	} else { // affichage du wigdet
	    echo "<!DOCTYPE html><html><head><title>Payline API Widget</title>";
	    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
        echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
        echo "<meta charset='UTF-8'>";
        echo "<!--SCRIPTS-->";
        switch (ENVIRONMENT){
            case PaylineSDK::ENV_DEV:
                echo "<script src='".PaylineSDK::DEV_WDGT_JS."'></script>";
                break;
            case PaylineSDK::ENV_HOMO:
                echo "<script src='".PaylineSDK::HOMO_WDGT_JS."'></script>";
                break;
            case PaylineSDK::ENV_PROD:
                echo "<script src='".PaylineSDK::PROD_WDGT_JS."'></script>";
                break;
        }
        echo "<!--SCRIPTS END-->";
        echo "<!--STYLES -->";
        switch (ENVIRONMENT){
            case PaylineSDK::ENV_DEV:
                echo "<link rel='stylesheet' href='".PaylineSDK::DEV_WDGT_CSS."'>";
                break;
            case PaylineSDK::ENV_HOMO:
                echo "<link rel='stylesheet' href='".PaylineSDK::HOMO_WDGT_CSS."'>";
                break;
            case PaylineSDK::ENV_PROD:
                echo "<link rel='stylesheet' href='".PaylineSDK::PROD_WDGT_CSS."'>";
                break;
        }
        echo "<!--STYLES END-->";
        echo "</head><body>";
        echo "<div id='PaylineWidget' data-token='".$response['token']."' data-template='".$_POST['data-template']."' ></div>";
        echo "</body></html>";
	}
} elseif(isset($response)) {
    echo 'ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' <BR/>';
}