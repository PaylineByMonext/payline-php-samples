<?php
include '../initSDK.php';

// CONTRACT NUMBER
$array['contractNumber'] = $_POST['contractNumber'];
$array['walletIds'] = explode(';', $_POST['walletIdList']);
                                           

// CARDIND
$array['cardInd'] =  $_POST['CardIndex'];

// EXECUTE
$response = $payline->disableWallet($array);

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
