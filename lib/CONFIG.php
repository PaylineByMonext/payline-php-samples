<?php

// generated by updateConfig.php on 12/11/2017 17:36(Europe/Paris time)

require_once realpath(dirname(dirname(__FILE__))).'/vendor/autoload.php';
use Monolog\Logger;
if (! isset($_SESSION)) session_start();

// global setting
$_SESSION['ENVIRONMENT'] = 'HOMO';
$_SESSION['MERCHANT_ID'] = '37334959742602';
$_SESSION['MERCHANT_NAME'] = "DEMO MODULES";
$_SESSION['ACCESS_KEY'] = 'rNNCgJ3DNHUBPYRuY9G7';
$_SESSION['ACCESS_KEY_REF'] = '';
$_SESSION['WS_VERSION'] = '16';
$_SESSION['PROXY_HOST'] = '127.0.0.1';
$_SESSION['PROXY_PORT'] = '5000';
$_SESSION['PROXY_LOGIN'] = '';
$_SESSION['PROXY_PASSWORD'] = '';

// demo settings
$_SESSION['KIT_ROOT'] = 'http://127.0.0.1/git/payline-php-samples/';
$_SESSION['JS_PATH'] = 'D:\\wamp64\\www\\git\\payline-php-samples\\examples\\demos\\scripts\\';
$_SESSION['CSS_PATH'] = 'D:\\wamp64\\www\\git\\payline-php-samples\\examples\\demos\\css\\';
$_SESSION['LOG_PATH'] = 'D:\\wamp64\\www\\git\\payline-php-samples\\logs\\';
$_SESSION['LOG_LEVEL'] = Logger::DEBUG;

// payment setting
$_SESSION['PAYMENT_AMOUNT'] = '990';
$_SESSION['PAYMENT_CURRENCY'] = '978';
$_SESSION['LANGUAGE_CODE'] = 'fr';
$_SESSION['PAYMENT_ACTION'] = '101';
$_SESSION['PAYMENT_MODE'] = 'CPT';
$_SESSION['CUSTOM_PAYMENT_TEMPLATE_URL'] = '';
$_SESSION['CUSTOM_PAYMENT_PAGE_CODE'] = '';
$_SESSION['CONTRACT_NUMBER'] = '1234567';
$_SESSION['CONTRACT_NUMBER_LIST'] = '1234567';
$_SESSION['SECOND_CONTRACT_NUMBER_LIST'] = '';
$_SESSION['WALLET_CONTRACT_NUMBER_LIST'] = '';
$_SESSION['RETURN_URL'] = 'http://127.0.0.1/git/payline-php-samples/examples/demos/web.php?e=getWebPaymentDetails';
$_SESSION['NOTIFICATION_URL'] = '';
$_SESSION['CANCEL_URL'] = 'http://127.0.0.1/git/payline-php-samples/examples/demos/web.php?e=getWebPaymentDetails';
$_SESSION['WLT_RETURN_URL'] = 'http://127.0.0.1/git/payline-php-samples/examples/demos/wallet.php?e=getWebWallet';
$_SESSION['WLT_NOTIFICATION_URL'] = '';
$_SESSION['WLT_CANCEL_URL'] = 'http://127.0.0.1/git/payline-php-samples/examples/demos/wallet.php?e=getWebWallet';
$_SESSION['CUSTOM_WIDGET_CSS'] = null;
$_SESSION['CUSTOM_WIDGET_JS'] = null;
$_SESSION['cumulatedAmount'] = '';

// buyer info
$_SESSION['buyerLegalStatus'] = '1';
$_SESSION['buyerTitle'] = '10';
$_SESSION['buyerLastName'] = "SUAREZ";
$_SESSION['buyerFirstName'] = "Fabien";
$_SESSION['buyerEmail'] = 'fabien.suarez@payline.com';
$_SESSION['billingAddressTitle'] = "10";
$_SESSION['billingAddressFirstName'] = "Fabien";
$_SESSION['billingAddressLastName'] = "SUAREZ";
$_SESSION['billingAddressName'] = "La Défense";
$_SESSION['billingAddressStreet1'] = "5, Place de la Pyramide";
$_SESSION['billingAddressStreet2'] = "mm";
$_SESSION['billingAddressCity'] = "Paris La Défense Cedex";
$_SESSION['billingAddressZipCode'] = '92088';
$_SESSION['billingAddressCountry'] = "FR";
$_SESSION['billingAddressCounty'] = "mm";
$_SESSION['billingAddressState'] = "mm";
$_SESSION['billingAddressPhoneType'] = '0';
$_SESSION['billingAddressPhone'] = '0141456767';
$_SESSION['shippingAddressTitle'] = '10';
$_SESSION['shippingAddressFirstName'] = "Fabien";
$_SESSION['shippingAddressLastName'] = "SUAREZ";
$_SESSION['shippingAddressName'] = "Ledoux";
$_SESSION['shippingAddressStreet1'] = "260, rue Claude Nicolas Ledoux";
$_SESSION['shippingAddressStreet2'] = "mm";
$_SESSION['shippingAddressCity'] = "Aix-en-Provence Cedex 3";
$_SESSION['shippingAddressZipCode'] = '13593';
$_SESSION['shippingAddressCountry'] = "FR";
$_SESSION['shippingAddressCounty'] = "mm";
$_SESSION['shippingAddressState'] = "mm";
$_SESSION['shippingAddressPhoneType'] = '0';
$_SESSION['shippingAddressPhone'] = '0442251468';
$_SESSION['buyerAccountCreateDate'] = 'mm';
$_SESSION['buyerAverageAmount'] = 'mm';
$_SESSION['buyerOrderCount'] = 'mm';
$_SESSION['buyerWalletId'] = "20171110-01";
$_SESSION['buyerWalletDisplayed'] = '';
$_SESSION['buyerWalletSecured'] = 'CVV';
$_SESSION['buyerWalletCardInd'] = 'mm';
$_SESSION['buyerIp'] = 'mm';
$_SESSION['mobilePhone'] = '0689793619';
$_SESSION['customerId'] = "mm";
$_SESSION['legalDocument'] = '1';
$_SESSION['birthDate'] = 'mm';
$_SESSION['fingerprintID'] = "mm";
$_SESSION['deviceFingerprint'] = "mm";
$_SESSION['isIncognito'] = 'mm';
$_SESSION['isBot'] = 'mm';
$_SESSION['isBehindProxy'] = 'mm';
$_SESSION['isFromTor'] = 'mm';
$_SESSION['isEmulator'] = 'mm';
$_SESSION['isRooted'] = 'mm';
$_SESSION['hasTimezoneMismatch'] = 'mm';
$_SESSION['merchantAuthentication'] = '';
$_SESSION['loyaltyMemberType'] = '';
$_SESSION['buyerExtended'] = '';
$_SESSION['billingStreetNumber'] = '';
$_SESSION['billingEmail'] = '';
$_SESSION['billingAddressCreateDate'] = '';
$_SESSION['shippingEmail'] = '';
$_SESSION['shippingStreetNumber'] = '';
$_SESSION['shippingAddressCreateDate'] = '';

// private data
$_SESSION['pvdKey1'] = 'cartId';
$_SESSION['pvdValue1'] = '4';
$_SESSION['pvdKey2'] = '';
$_SESSION['pvdValue2'] = '';
$_SESSION['pvdKey3'] = '';
$_SESSION['pvdValue3'] = '';
$_SESSION['pvdKey4'] = 'storeId';
$_SESSION['pvdValue4'] = '1';
$_SESSION['pvdKey5'] = '';
$_SESSION['pvdValue5'] = '';
$_SESSION['pvdKey6'] = '';
$_SESSION['pvdValue6'] = '';
$_SESSION['pvdKey7'] = '';
$_SESSION['pvdValue7'] = '';
$_SESSION['pvdKey8'] = '';
$_SESSION['pvdValue8'] = '';

// order info
$_SESSION['orderOrigin'] = '1';
$_SESSION['orderCountry'] = 'FR';
$_SESSION['orderTaxes'] = '';
$_SESSION['orderCurrency'] = '978';
$_SESSION['orderAmount'] = '990';
$_SESSION['deliveryTime'] = '';
$_SESSION['deliveryMode'] = '';
$_SESSION['discountAmount'] = '';
$_SESSION['otaPackageType'] = '';
$_SESSION['otaDestinationCountry'] = '';
$_SESSION['bookingReference'] = '';
$_SESSION['orderDetail'] = '';
$_SESSION['orderExtended'] = '';
$_SESSION['orderOTA'] = '';
$_SESSION['orderDetailRef1'] = '';
$_SESSION['orderDetailPrice1'] = '';
$_SESSION['orderDetailQuantity1'] = '';
$_SESSION['orderDetailComment1'] = '';
$_SESSION['orderDetailCategory1'] = '';
$_SESSION['orderDetailSubcategory1_1'] = '';
$_SESSION['orderDetailSubcategory2_1'] = '';
$_SESSION['orderDetailBrand1'] = '';
$_SESSION['orderDetailAdditionalData1'] = '';
$_SESSION['orderDetailTaxRate1'] = '';
$_SESSION['orderDetailSellerType1'] = '';
$_SESSION['orderDetailSeller1'] = '';
$_SESSION['orderDetailRef2'] = '';
$_SESSION['orderDetailPrice2'] = '';
$_SESSION['orderDetailQuantity2'] = '';
$_SESSION['orderDetailComment2'] = '';
$_SESSION['orderDetailCategory2'] = '';
$_SESSION['orderDetailSubcategory1_2'] = '';
$_SESSION['orderDetailSubcategory2_2'] = '';
$_SESSION['orderDetailBrand2'] = '';
$_SESSION['orderDetailAdditionalData2'] = '';
$_SESSION['orderDetailTaxRate2'] = '';
$_SESSION['orderDetailSellerType2'] = '';
$_SESSION['orderDetailSeller2'] = '';
?> 
