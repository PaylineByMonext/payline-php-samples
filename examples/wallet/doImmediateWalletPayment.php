<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/order.php';
include '../arraySet/buyer.php';

// WALLET ID
$array['walletId'] = $_POST['walletId'];

// CARDIND
$array['cardInd'] =  $_POST['CardIndex'];

// WALLET CVX
$array['walletCvx'] =  $_POST['walletCvx'];

include '../arraySet/privateDataList.php';
include '../arraySet/authentication3DSecure.php';

//MEDIA
$array['media'] = $_POST['media'];

// EXECUTE
$response = $payline->doImmediateWalletPayment($array);

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