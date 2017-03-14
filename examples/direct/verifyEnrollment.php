<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/card.php';

// MD
$array['mdFieldValue'] = $_POST['mdFieldValue'];

//USERAGENT
$array['userAgent'] = $_POST['UsrAgent'];

// ORDER
$array['orderRef'] = $_POST['orderRef'];

// WALLET
$array['walletId'] = $_POST['walletId'];
$array['walletCardInd'] = $_POST['walletCardInd'];

// RESPONSE
$response = $payline->verifyEnrollment($array);

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
$_SESSION['3DS_AUTH_CONTRACT'] = $_POST['paymentContractNumber'];
$_SESSION['3DS_AUTH_ORDER_REF'] = $_POST['orderRef'];                   	
$_SESSION['3DS_AUTH_PAYMENT_DATA']['cardType'] = $_POST['cardType'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['cardNumber'] = $_POST['cardNumber'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['cardExp'] = $_POST['cardExpirationDate'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['CVV'] = $_POST['cardCrypto'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['cardTokenPan'] = $_POST['cardToken'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['walletId'] = $_POST['walletId'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['walletCardInd'] = $_POST['walletCardInd'];
$_SESSION['3DS_AUTH_PAYMENT_DATA']['paymentAmount'] = $_POST['paymentAmount'];

echo "<br/><form method='POST' action='".$response['actionUrl']."'>";
echo "	<input type='hidden' name='".$response['pareqFieldName']."' value='".$response['pareqFieldValue']."'>";
echo "	<input type='hidden' name='".$response['mdFieldName']."' value='".$response['mdFieldValue']."'>";
echo "	Back from ACS<br/>";
echo "	<input type='radio' name='".$response['termUrlName']."' value='".$_SESSION['KIT_ROOT']."examples/demos/direct.php' checked>call doAuthorization<br/>";
if(!isset($_POST['doAuthorization'])){
    echo "	<input type='radio' name='".$response['termUrlName']."' value='".$_SESSION['KIT_ROOT']."examples/demos/wallet.php'>call doImmediateWalletPayment<br/>";
}
echo "	<input type='radio' name='".$response['termUrlName']."' value='".$_SESSION['KIT_ROOT']."examples/demos/direct.php?rawDisplay=1'>just display MD ans PaRes<br/>";
echo "	<input type='submit' value='redirect to ACS'>";
echo "</form>";
echo '		</td>';
echo '	</tr>';
echo '</table>';
?>

