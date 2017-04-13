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

// MERCHANT NAME
$array['merchantName'] = $_POST['merchantName'];

// EXECUTE
$response = $payline->manageWebWallet($array);
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