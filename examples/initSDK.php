<?php
use Payline\PaylineSDK;

// INITIALIZE
$array = array();
$payline = new PaylineSDK(
    $_SESSION['MERCHANT_ID'],
    $_SESSION['ACCESS_KEY'],
    $_SESSION['PROXY_HOST'],
    $_SESSION['PROXY_PORT'],
    $_SESSION['PROXY_LOGIN'],
    $_SESSION['PROXY_PASSWORD'],
    $_SESSION['ENVIRONMENT'],
    $_SESSION['LOG_PATH'],
    $_SESSION['LOG_LEVEL']
);
$payline->usedBy("demo");