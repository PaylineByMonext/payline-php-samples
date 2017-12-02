<?php
for($i=1;$i<9;$i++){
    $privateData = array();
    $privateData['key'] = $_POST['privateDataKey0'.$i];
    $privateData['value'] = $_POST['privateDataValue0'.$i];
    if($privateData['key'] != ''){
        $payline->addPrivateData($privateData);
    }
}
