<?php
include '../initSDK.php';

// VERSION
$array['version'] = $_POST['version'];

// WALLET
$array['contractNumber'] = $_POST['contractNumber'];
$array['cardInd'] = $_POST['cardInd'];
$array['walletId'] = $_POST['walletId'];

if (isset($_POST['contractNumberWalletList'])){
	$contracts = explode(";",$_POST['contractNumberWalletList']);
	$array['walletContracts'] = $contracts;
}

//UPDATE OPTIONS
$array['updatePersonalDetails'] = isset($_POST['updatePersonalDetails']) ? 1 : 0;
$array['updateOwnerDetails'] = isset($_POST['updateOwnerDetails']) ? 1 : 0;
$array['updatePaymentDetails'] = isset($_POST['updatePaymentDetails']) ? 1 : 0;

include '../arraySet/buyer.php';

// OPTIONS
include '../arraySet/webOptions.php';

// URL
include '../arraySet/urls.php';

// PRIVATE DATA (optional)
include '../arraySet/privateDataList.php';

// EXECUTE
$response = $payline->updateWebWallet($array);
if(isset($response) && $response['result']['code'] == '00000'){
  header("location:".$response['redirectURL']);
  exit();
}elseif(isset($response)) {
	echo 'ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' <BR/>';
}
?>
