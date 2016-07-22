<?php
include '../initSDK.php';

//TRANSACTION INFORMATIONS
$array['transactionId'] = $_POST['transactionId'];	
$array['orderRef'] = $_POST['orderRef'];
$array['startDate'] = $_POST['startDate'];
$array['endDate'] = $_POST['endDate'];
$array['authorizationNumber'] = $_POST['authorizationNumber'];
$array['paymentMean'] = $_POST['paymentMean'];
$array['transactionType'] = $_POST['transactionType'];
$array['name'] = $_POST['name'];
$array['firstName'] = $_POST['firstName'];
$array['email'] = $_POST['email'];	
$array['cardNumber'] = $_POST['cardNumber'];
$array['currency'] = $_POST['currency'];
$array['minAmount'] = $_POST['minAmount'];
$array['maxAmount'] = $_POST['maxAmount'];
$array['walletId'] = $_POST['walletId'];
$array['contractNumber'] = $_POST['contractNumber'];
$array['returnCode'] = $_POST['returnCode'];
$array['sequenceNumber'] = $_POST['sequenceNumber'];
$array['token'] = $_POST['token'];
$array['version'] = $_POST['version'];
 
// EXECUTE
$response = $payline->transactionsSearch($array);
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
