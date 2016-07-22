<?php
include '../initSDK.php';

// GET TOKEN
if(isset($_POST['token'])){
    $array['token'] = $_POST['token'];
}elseif(isset($_GET['token'])){
    $array['token'] = $_GET['token'];
}elseif(isset($_GET['paylinetoken'])){
    $array['token'] = $_GET['paylinetoken'];
}else{
    echo 'Missing TOKEN';
}

//VERSION
if(isset($_POST['version'])){
	$array['version'] = $_POST['version'];
}else{
    $array['version'] = $_SESSION['WS_VERSION'];
}

// RESPONSE FORMAT
$response = $payline->getWebPaymentDetails($array);
if(isset($response['transaction']['id'])){
	$res = insertTransactionData(
    $response['payment']['contractNumber'],
    $response['order']['ref'],
    $response['transaction']['id'],  
    $response['payment']['action'],
    $response['payment']['amount'],
    $response['payment']['currency'],
    $response['result']['code'],
    $array['token']
  );
  if(isset($response['paymentRecordId']) && $res == 1){ // nouvelle insertion OK
      $res2 = insertPaymentRecordData($response['payment']['contractNumber'],$response['wallet']['walletId'],$response['paymentRecordId']);
      if($res2 != 1){
        $payline->getLogger()->addError($res2);
      }
  }
  if($res != 1 && $res != 2){
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
