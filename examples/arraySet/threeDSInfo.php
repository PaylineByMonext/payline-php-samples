<?php
$array['threeDSInfo']['challengeInd'] = $_POST['challengeInd'];
$array['threeDSInfo']['threeDSReqPriorAuthData'] = $_POST['threeDSReqPriorAuthData'];
$array['threeDSInfo']['threeDSReqPriorAuthMethod'] = $_POST['threeDSReqPriorAuthMethod'];
$array['threeDSInfo']['threeDSReqPriorAuthTimestamp'] = $_POST['threeDSReqPriorAuthTimestamp'];
$array['threeDSInfo']['threeDSMethodNotificationURL'] = $_POST['threeDSMethodNotificationURL'];
$array['threeDSInfo']['threeDSMethodResult'] = $_POST['threeDSMethodResult'];

// SDK
$array['sdk']['deviceRenderingOptionsIF'] = $_POST['deviceRenderingOptionsIF'];
$array['sdk']['deviceRenderOptionsUI'] = $_POST['deviceRenderOptionsUI'];
$array['sdk']['appID'] = $_POST['appID'];
$array['sdk']['ephemPubKey'] = $_POST['ephemPubKey'];
$array['sdk']['maxTimeout'] = $_POST['maxTimeout'];
$array['sdk']['referenceNumber'] = $_POST['referenceNumber'];
$array['sdk']['transID'] = $_POST['transID'];

// BROWSER
$array['browser']['acceptHeader'] = $_POST['acceptHeader'];
$array['browser']['javaEnabled'] = $_POST['javaEnabled'];
$array['browser']['javascriptEnabled'] = $_POST['javascriptEnabled'];
$array['browser']['language'] = $_POST['language'];
$array['browser']['colorDepth'] = $_POST['colorDepth'];
$array['browser']['screenHeight'] = $_POST['screenHeight'];
$array['browser']['screenWidth'] = $_POST['screenWidth'];
$array['browser']['timeZoneOffset'] = $_POST['timeZoneOffset'];
$array['browser']['userAgent'] = $_POST['userAgent'];
