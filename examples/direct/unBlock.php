<?php
include '../initSDK.php';

$array['transactionID'] = $_POST['transactionID'];
$array['transactionDate'] = $_POST['transactionDate'];
$array['version'] = $_POST['version'];

// RESPONSE FORMAT
$response = $payline->unBlock($array);
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