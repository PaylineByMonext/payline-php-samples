<?php

// Default file, will be overwritten by updateConfig.php

require_once realpath(dirname(dirname(__FILE__))).'/vendor/autoload.php';
use Monolog\Logger;
if (! isset($_SESSION)) session_start();

// global setting
$_SESSION['ENVIRONMENT'] = '';
$_SESSION['MERCHANT_ID'] = '';
$_SESSION['MERCHANT_NAME'] = '';
$_SESSION['ACCESS_KEY'] = '';
$_SESSION['ACCESS_KEY_REF'] = '';
$_SESSION['WS_VERSION'] = '';
$_SESSION['PROXY_HOST'] = '';
$_SESSION['PROXY_PORT'] = '';
$_SESSION['PROXY_LOGIN'] = '';
$_SESSION['PROXY_PASSWORD'] = '';

// demo settings
$_SESSION['KIT_ROOT'] = '';
$_SESSION['LOG_PATH'] = '';
$_SESSION['LOG_LEVEL'] = Logger::DEBUG;

// payment setting
$_SESSION['PAYMENT_CURRENCY'] = '';
$_SESSION['ORDER_CURRENCY'] = '';
$_SESSION['LANGUAGE_CODE'] = '';
$_SESSION['PAYMENT_ACTION'] = '';
$_SESSION['PAYMENT_MODE'] = '';
$_SESSION['CUSTOM_PAYMENT_TEMPLATE_URL'] = '';
$_SESSION['CUSTOM_PAYMENT_PAGE_CODE'] = '';
$_SESSION['CONTRACT_NUMBER'] = '';
$_SESSION['CONTRACT_NUMBER_LIST'] = '';
$_SESSION['SECOND_CONTRACT_NUMBER_LIST'] = '';
$_SESSION['WALLET_CONTRACT_NUMBER_LIST'] = '';
$_SESSION['RETURN_URL'] = '';
$_SESSION['NOTIFICATION_URL'] = '';
$_SESSION['CANCEL_URL'] = '';

// buyer info
$_SESSION['buyerLegalStatus'] = '';
$_SESSION['buyerTitle'] = '';
$_SESSION['buyerLastName'] = '';
$_SESSION['buyerFirstName'] = '';
$_SESSION['buyerEmail'] = '';
$_SESSION['billingAddressTitle'] = '';
$_SESSION['billingAddressFirstName'] = '';
$_SESSION['billingAddressLastName'] = '';
$_SESSION['billingAddressName'] = '';
$_SESSION['billingAddressStreet1'] = '';
$_SESSION['billingAddressStreet2'] = '';
$_SESSION['billingAddressCity'] = '';
$_SESSION['billingAddressZipCode'] = '';
$_SESSION['billingAddressCountry'] = '';
$_SESSION['billingAddressCounty'] = '';
$_SESSION['billingAddressState'] = '';
$_SESSION['billingAddressPhoneType'] = '';
$_SESSION['billingAddressPhone'] = '';
$_SESSION['shippingAddressTitle'] = '';
$_SESSION['shippingAddressFirstName'] = '';
$_SESSION['shippingAddressLastName'] = '';
$_SESSION['shippingAddressName'] = '';
$_SESSION['shippingAddressStreet1'] = '';
$_SESSION['shippingAddressStreet2'] = '';
$_SESSION['shippingAddressCity'] = '';
$_SESSION['shippingAddressZipCode'] = '';
$_SESSION['shippingAddressCountry'] = '';
$_SESSION['shippingAddressCounty'] = '';
$_SESSION['shippingAddressState'] = '';
$_SESSION['shippingAddressPhoneType'] = '';
$_SESSION['shippingAddressPhone'] = '';
$_SESSION['buyerAccountCreateDate'] = '';
$_SESSION['buyerAverageAmount'] = '';
$_SESSION['buyerOrderCount'] = '';
$_SESSION['buyerWalletId'] = '';
$_SESSION['buyerWalletDisplayed'] = '';
$_SESSION['buyerWalletSecured'] = '';
$_SESSION['buyerWalletCardInd'] = '';
$_SESSION['buyerIp'] = '';
$_SESSION['mobilePhone'] = '';
$_SESSION['customerId'] = '';
$_SESSION['legalDocument'] = '';
$_SESSION['birthDate'] = '';
$_SESSION['fingerprintID'] = '';
$_SESSION['deviceFingerprint'] = '';
$_SESSION['isIncognito'] = '';
$_SESSION['isBot'] = '';
$_SESSION['isBehindProxy'] = '';
$_SESSION['isFromTor'] = '';
$_SESSION['isEmulator'] = '';
$_SESSION['isRooted'] = '';
$_SESSION['hasTimezoneMismatch'] = '';

// private data
$_SESSION['pvdKey1'] = '';
$_SESSION['pvdValue1'] = '';
$_SESSION['pvdKey2'] = '';
$_SESSION['pvdValue2'] = '';
$_SESSION['pvdKey3'] = '';
$_SESSION['pvdValue3'] = '';
$_SESSION['pvdKey4'] = '';
$_SESSION['pvdValue4'] = '';
$_SESSION['pvdKey5'] = '';
$_SESSION['pvdValue5'] = '';
$_SESSION['pvdKey6'] = '';
$_SESSION['pvdValue6'] = '';
$_SESSION['pvdKey7'] = '';
$_SESSION['pvdValue7'] = '';
$_SESSION['pvdKey8'] = '';
$_SESSION['pvdValue8'] = '';
?> 
