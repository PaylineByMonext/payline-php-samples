<?php
include '../initSDK.php';

//VERSION
$array['version'] = $_POST['version'];

// AUTHENTICATION
$array['contractNumber'] = $_POST['contractNumber'];
$array['pares'] = $_POST['pares'];
$array['md'] = $_POST['md'];

include '../arraySet/card.php';

// RESPONSE
$response = $payline->verifyAuthentication($array);

// RESPONSE
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

