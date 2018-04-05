<?php
include '../initSDK.php';
use Payline\PaylineSDK;

if(isset($_POST['submit']) && $_SESSION['shortcutBackFromPartner'] == 0) { // display Partner button
    
    //VERSION
    $array['version'] = $_SESSION['WS_VERSION'];
    
    // PAYMENT
    $array['payment']['amount'] = $_POST['amount'];
    $array['payment']['currency'] = $_POST['currency'];
    $array['payment']['action'] = $_SESSION['PAYMENT_ACTION'];
    $array['payment']['mode'] = $_SESSION['PAYMENT_MODE'];
    
    $_SESSION['shortcutAmount'] = $_POST['amount'];
    
    // ORDER
    $array['order']['ref'] = $_POST['ref'];
    $array['order']['amount'] = $array['payment']['amount'];
    $array['order']['currency'] = $array['payment']['currency'];
    $array['order']['date'] = date('d/m/Y H:i');
    $array['order']['origin'] = $_SESSION['orderOrigin'];
    $array['order']['country'] = $_SESSION['orderCountry'];
    $array['order']['taxes'] = $_SESSION['orderTaxes'];
    $array['order']['deliveryTime'] = $_SESSION['deliveryTime'];
    $array['order']['deliveryMode'] = $_SESSION['deliveryMode'];
    
    // ORDER DETAILS
    $item1 = array();
    $item1['ref'] = $_SESSION['orderDetailRef1'];
    $item1['price'] = $_SESSION['orderDetailPrice1'];
    $item1['quantity'] = $_SESSION['orderDetailQuantity1'];
    $item1['comment'] = $_SESSION['orderDetailComment1'];
    $item1['category'] = $_SESSION['orderDetailCategory1'];
    $item1['brand'] = $_SESSION['orderDetailBrand1'];
    $item1['subcategory1'] = $_SESSION['orderDetailSubcategory1_1'];
    $item1['subcategory2'] = $_SESSION['orderDetailSubcategory2_1'];
    $item1['additionalData'] = $_SESSION['orderDetailAdditionalData1'];
    $item1['taxRate'] = $_SESSION['orderDetailTaxRate1'];
    $payline->addOrderDetail($item1);
    
    $item2 = array();
    $item2['ref'] = $_SESSION['orderDetailRef2'];
    $item2['price'] = $_SESSION['orderDetailPrice2'];
    $item2['quantity'] = $_SESSION['orderDetailQuantity2'];
    $item2['comment'] = $_SESSION['orderDetailComment2'];
    $item2['category'] = $_SESSION['orderDetailCategory2'];
    $item2['brand'] = $_SESSION['orderDetailBrand2'];
    $item2['subcategory1'] = $_SESSION['orderDetailSubcategory1_2'];
    $item2['subcategory2'] = $_SESSION['orderDetailSubcategory2_2'];
    $item2['additionalData'] = $_SESSION['orderDetailAdditionalData2'];
    $item2['taxRate'] = $_SESSION['orderDetailTaxRate2'];
    $payline->addOrderDetail($item2);
    
    // CONTRACT NUMBERS
    $array['payment']['contractNumber'] = $_POST['shortcutContractNumber'];
    $contracts = explode(";",$array['payment']['contractNumber']);
    $array['contracts'] = $contracts;
    $array['secondContracts'] = null;
    $array['walletContracts'] = null;
    
    // URLS
    $array['notificationURL'] = $_SESSION['NOTIFICATION_URL'];
    $array['returnURL'] = $_SESSION['RETURN_URL'];
    $array['cancelURL'] = $_SESSION['CANCEL_URL'];
    
    // options
    $array['customPaymentPageCode'] = $_SESSION['CUSTOM_PAYMENT_PAGE_CODE'];
    $array['customPaymentTemplateURL'] = $_SESSION['CUSTOM_PAYMENT_TEMPLATE_URL'];
    $array['languageCode'] = $_SESSION['LANGUAGE_CODE'];
    
    // MERCHANT NAME
    $array['merchantName'] = $_SESSION['MERCHANT_NAME'];
    
    // PRIVATE DATA
    for($i=1;$i<=8;$i++){
        $privateData = array();
        $privateData['key'] = $_SESSION['pvdKey'.$i] ;
        $privateData['value'] = $_SESSION['pvdValue'.$i];
        $payline->addPrivateData($privateData);
    }
    
    // EXECUTE
    $response = $payline->doWebPayment($array);
    unset($_SESSION['webPaymentToken']);
    unset($_SESSION['shortCutToken']);
    if(isset($response) && $response['result']['code'] == '00000'){
        $_SESSION['shortCutToken'] = $response['token'];
        echo "<span>&nbsp;</span>";
        echo "<div id='PaylineWidget' data-token='".$response['token']."' data-template='shortcut' data-event-didshowstate='showStateFunction'></div>";
    } elseif(isset($response)) {
        echo '<span>ERROR : '.$response['result']['code']. ' '.$response['result']['longMessage'].' </span>';
    }
}else{ // back from partner pages
    ?>
    <form class="payline-form">
    	<input type='hidden' name='shortcutAmount' id='shortcutAmount' value= '<?php echo $_SESSION['shortcutAmount']; ?>'/>
        <fieldset>
        <h4>Information retrieved from Partner</h4>
        	<div class="row">
        		<label for="paypalBuyerFirstName">First name</label>
        		<input type='text' name='paypalBuyerFirstName' id='paypalBuyerFirstName' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerLastName">Last name</label>
        		<input type='text' name='paypalBuyerLastName' id='paypalBuyerLastName' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerEmail">email</label>
        		<input type='text' name='paypalBuyerEmail' id='paypalBuyerEmail' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerStreet1">Address (street 1)</label>
        		<input type='text' name='paypalBuyerStreet1' id='paypalBuyerStreet1' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerStreet2">Address (street 2)</label>
        		<input type='text' name='paypalBuyerStreet2' id='paypalBuyerStreet2' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerZipcode">Zip code</label>
        		<input type='text' name='paypalBuyerZipcode' id='paypalBuyerZipcode' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerCity">City</label>
        		<input type='text' name='paypalBuyerCity' id='paypalBuyerCity' />
        	</div>
        	<div class="row">
        		<label for="paypalBuyerCountry">Country code</label>
        		<input type='text' name='paypalBuyerCountry' id='paypalBuyerCountry' />
        	</div>
        </fieldset>
    </form>
    
    <div id='PaylineWidget' data-token='<?php echo $_SESSION['shortCutToken'];?>' data-template='shortcut' data-event-didshowstate='showStateFunction'></div>
    <div class='PaylineWidget pl-pay-btn-container' style='text-align:center;'>
    <button class='PaylineWidget pl-pay-btn' type='button' onclick="Payline.Api.finalizeShortcut();">Finalize checkout</button>
    </div>
    <?php
}
?>