<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

$array['transactionID'] = $_POST['transactionID'];
$array['comment'] = $_POST['comment'];

//MEDIA
$array['media'] = $_POST['media'];

// RESPONSE FORMAT
$response = $payline->doReset($array);
if(isset($response['transaction']['id'])){
	$res = insertTransactionData(
    '',
    '',
    $response['transaction']['id'],
    'AN',
    '',
    '',
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
