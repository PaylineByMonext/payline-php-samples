<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

// TRANSACTION INFO
$array['transactionID'] = $_POST['transactionID'];

include '../arraySet/payment.php';
include '../arraySet/privateDataList.php';

//SEQUENCE NUMBER
$array['sequenceNumber'] = $_POST['sequenceNumber'];

//MEDIA
$array['media'] = $_POST['media'];

// RESPONSE
$response = $payline->doCapture($array);
if(isset($response['transaction']['id'])){
	$res = insertTransactionData(
    $array['payment']['contractNumber'],
    '',
    $response['transaction']['id'],
    $array['payment']['action'],
    $array['payment']['amount'],
    $array['payment']['currency'],
    $response['result']['code']
  );
  if($res != 1){
    $payline->getLogger()->addError($res);
  }
}

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
