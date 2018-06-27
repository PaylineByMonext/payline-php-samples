<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/bankAccountData.php';
include '../arraySet/card.php';
include '../arraySet/order.php';
include '../arraySet/buyer.php';
include '../arraySet/owner.php';
include '../arraySet/privateDataList.php';
include '../arraySet/authentication3DSecure.php';
include '../arraySet/subMerchant.php';  

//MEDIA
$array['media'] = $_POST['media'];

$array['asynchronousRetryTimeout'] = $_POST['asynchronousRetryTimeout'];

// RESPONSE
$response = $payline->doAuthorization($array);
if(isset($response['transaction']['id'])){
	$res = insertTransactionData(
    $array['payment']['contractNumber'],
    $array['order']['ref'],
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
if($response['result']['code'] == '04401' && isset($response['contractNumber'])){    
    echo "<br/>Click on button bellow in order to";
    echo "<ol><li>perform a verifyEnrollment call on card <b>".$array['card']['number']."</b></li><li>get redirected on ACS if verifyEnrollment is OK</li><li>Fill 3D Secure password on ACS</li><li>come back here and perform a doAuthorization call on contract <b>".$response['contractNumber']."</b></li></ol>";
    echo "<form action='".$_SESSION['KIT_ROOT']."examples/demos/direct.php' name='doAuthorization' id='doAuthorization' method='post' class='payline-form'>";
    echo "<input type='hidden' name='doAuthorization' value='1'>";
    echo "<input type='hidden' name='paymentAmount' value='".$array['payment']['amount']."'>";
    echo "<input type='hidden' name='paymentCurrency' value='".$array['payment']['currency']."'>";
    echo "<input type='hidden' name='paymentAction' value='".$array['payment']['action']."'>";
    echo "<input type='hidden' name='paymentMode' value='".$array['payment']['mode']."'>";
    echo "<input type='hidden' name='differedActionDate' value='".$array['payment']['differedActionDate']."'>";
    echo "<input type='hidden' name='paymentContractNumber' value='".$response['contractNumber']."'>";
    echo "<input type='hidden' name='paymentSoftDescriptor' value='".$array['payment']['softDescriptor']."'>";
    echo "<input type='hidden' name='cardBrand' value='".$array['payment']['cardBrand']."'>";
    echo "<input type='hidden' name='encryptionKeyId' value='".$array['card']['encryptionKeyId']."'>";
    echo "<input type='hidden' name='encryptedData' value='".$array['card']['encryptedData']."'>";
    echo "<input type='hidden' name='cardNumber' value='".$array['card']['number']."'>";
    echo "<input type='hidden' name='cardType' value='".$array['card']['type']."'>";
    echo "<input type='hidden' name='cardExpirationDate' value='".$array['card']['expirationDate']."'>";
    echo "<input type='hidden' name='cardCrypto' value='".$array['card']['cvx']."'>";
    echo "<input type='hidden' name='cardOwnerBirthdayDate' value='".$array['card']['ownerBirthdayDate']."'>";
    echo "<input type='hidden' name='cardPassword' value='".$array['card']['password']."'>";
    echo "<input type='hidden' name='cardPresent' value='".$array['card']['cardPresent']."'>";
    echo "<input type='hidden' name='cardHolder' value='".$array['card']['cardholder']."'>";
    echo "<input type='hidden' name='cardToken' value='".$array['card']['token']."'>";
    echo "<input type='hidden' name='orderRef' value='".$array['order']['ref']."'>";
    echo "<input type='hidden' name='version' value='".$array['version']."'>";
    echo "<input type='hidden' name='mdFieldValue' value=''>";
    echo "<input type='hidden' name='UsrAgent' value=''>";
    echo "<input type='submit' name='submit' value='verifyEnrollment'>";
    echo "</form>";    
}
echo '		</td>';
echo '	</tr>';
echo '</table>';	
?> 