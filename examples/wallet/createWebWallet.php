<?php
include '../initSDK.php';

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
$response = $payline->createWebWallet($array);
if(isset($response) && $response['result']['code'] == '00000'){
  header("location:".$response['redirectURL']);
  exit();
}elseif(isset($response)) {
	echo 'ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' <BR/>';
}
?>
