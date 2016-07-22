<?php
$i = 0;
foreach ($_POST['privateDataKey'] as $privateDataKey) {
    $privateData = array();
    $privateData['key'] = $privateDataKey;
    $privateData['value'] = $_POST['privateDataValue'][$i];
    $payline->addPrivateData($privateData);
    $i ++;
}
