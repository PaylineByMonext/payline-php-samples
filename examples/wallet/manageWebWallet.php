<?php
include '../initSDK.php';
use Payline\PaylineSDK;

// VERSION
$array['version'] = $_POST['version'];

// WALLET
$array['contractNumber'] = $_POST['contractNumber'];
if (isset($_POST['selectedContractList'])){
    $contracts = explode(";",$_POST['selectedContractList']);
    $array['contracts'] = $contracts;
}
if (isset($_POST['contractNumberWalletList'])){
	$contracts = explode(";",$_POST['contractNumberWalletList']);
	$array['walletContracts'] = $contracts;
}

//UPDATE OPTIONS
$array['updatePersonalDetails'] = isset($_POST['updatePersonalDetails']) ? 1 : 0;

include '../arraySet/buyer.php';
include '../arraySet/owner.php';

// OPTIONS
include '../arraySet/webOptions.php';

// URL
include '../arraySet/urls.php';

// PRIVATE DATA (optional)
include '../arraySet/privateDataList.php';

// EXECUTE
$response = $payline->manageWebWallet($array);
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