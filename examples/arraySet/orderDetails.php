<?php
// ORDER DETAILS
$item1 = array();
$item1['ref'] = $_POST['orderDetailRef1'];
$item1['price'] = $_POST['orderDetailPrice1'];
$item1['quantity'] = $_POST['orderDetailQuantity1'];
$item1['comment'] = $_POST['orderDetailComment1'];
$item1['category'] = $_POST['orderDetailCategory1'];
$item1['brand'] = $_POST['orderDetailBrand1'];
$item1['subcategory1'] = $_POST['orderDetailSubcategory1_1'];
$item1['subcategory2'] = $_POST['orderDetailSubcategory2_1'];
$item1['additionalData'] = $_POST['orderDetailAdditionalData1'];
$item1['taxRate'] = $_POST['orderDetailTaxRate1'];
$payline->addOrderDetail($item1);

$item2 = array();
$item2['ref'] = $_POST['orderDetailRef2'];
$item2['price'] = $_POST['orderDetailPrice2'];
$item2['quantity'] = $_POST['orderDetailQuantity2'];
$item2['comment'] = $_POST['orderDetailComment2'];
$item2['category'] = $_POST['orderDetailCategory2'];
$item2['brand'] = $_POST['orderDetailBrand2'];
$item2['subcategory1'] = $_POST['orderDetailSubcategory1_2'];
$item2['subcategory2'] = $_POST['orderDetailSubcategory2_2'];
$item2['additionalData'] = $_POST['orderDetailAdditionalData2'];
$item2['taxRate'] = $_POST['orderDetailTaxRate2'];
$payline->addOrderDetail($item2);
