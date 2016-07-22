<?php
session_start();
/*
if (! isset($_SESSION['MERCHANT_ID'])) {
    header("Location: http://demo.payline.com/~kitphp/login.php");
    exit();
}
*/
require_once 'vendor/monext/payline-sdk/src/Payline/PaylineSDK.php';
require_once ('lib/CONFIG.php');
require_once ('lib/lib_debug.php');
date_default_timezone_set("Europe/Paris");
