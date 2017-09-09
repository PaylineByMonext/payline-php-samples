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
$array['version'] = isset($_POST['version']) ? $_POST['version'] : $_SESSION['WS_VERSION'];

// EXECUTE
$response = $payline->getWebWallet($array);

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
