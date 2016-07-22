<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

// CONTRACT NUMBER
$array['contractNumber'] = $_POST['contractNumber'];

// CARD INDEX
$array['cardInd'] = $_POST['cardInd'];

include '../arraySet/wallet.php';
include '../arraySet/buyer.php';
include '../arraySet/owner.php';
include '../arraySet/privateDataList.php';
include '../arraySet/authentication3DSecure.php';

//MEDIA
$array['media'] = $_POST['media'];

// WALLET CONTRACT LIST
if (isset($_POST['walletContractNumber'])){
	$walletContracts = explode(";",$_POST['walletContractNumber']);
	$array['walletContracts'] = $walletContracts;
}

// EXECUTE
$response = $payline->updateWallet($array);
echo '<table>';
echo '	<tr>';
echo '		<td><H3>REQUEST</H3></td>';
echo '		<td><H3>RESPONSE</H3></td>';
echo '	</tr>';
echo '	<tr>';
echo "		<td style='vertical-align: top; padding: 5px;'>";
print_a($array);
echo '		</td>';
echo "		<td style='vertical-align: top; padding: 5px;'>";
print_a($response, 0, true);
echo '		</td>';
echo '	</tr>';
echo '</table>';

?>
