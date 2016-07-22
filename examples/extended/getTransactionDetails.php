<?php
include '../initSDK.php';

//TRANSACTION INFORMATIONS
$array['transactionId'] = $_POST['transactionID'];
$array['orderRef'] = $_POST['orderRef'];
$array['startDate']= $_POST['Startdate'];
$array['endDate']= $_POST['Enddate'];
if(isset($_POST['transactionHistory'])){
	$array['transactionHistory']= 'Y';
}else{
	$array['transactionHistory']= '';
}
if(isset($_POST['archiveSearch'])){
	$array['archiveSearch']= 'Y';
}else{
	$array['archiveSearch']= '';
}

//VERSION
$array['version'] = $_POST['version'];

// EXECUTE
$response = $payline->getTransactionDetails($array);
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
