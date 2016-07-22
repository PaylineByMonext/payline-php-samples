<?php
// WALLET
$array['wallet']['walletId'] = $_POST['walletId'];
$array['wallet']['lastName'] = $_POST['walletlastName'];
$array['wallet']['firstName'] = $_POST['walletFirstName'];
$array['wallet']['email'] = $_POST['walletEmail'];
$array['wallet']['comment'] = $_POST['walletComment'];
$array['wallet']['default'] = '';
if (isset($_POST['walletDefault'])) {
    $array['wallet']['default'] = 1;
}
$array['wallet']['cardBrand'] = $_POST['cardBrand'];

// WALLET ADDRESS
$array['address']['name'] = $_POST['walletAddressName'];
$array['address']['street1'] = $_POST['walletAddressStreet1'];
$array['address']['street2'] = $_POST['walletAddressStreet2'];
$array['address']['cityName'] = $_POST['walletAddressCity'];
$array['address']['zipCode'] = $_POST['walletAddressZipCode'];
$array['address']['country'] = $_POST['walletAddressCountry'];
$array['address']['phone'] = $_POST['walletAddressPhone'];

// CARD
include 'card.php';
