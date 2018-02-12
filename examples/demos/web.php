<?php
    use Payline\PaylineSDK;
   	include "../../include.php";
	$array = array(
		//'doWebPayment',
		'fullWebPayment',
	    'shortcut',
	    'widgetPayment',
		'getWebPaymentDetails'
	);
	$selected = isset( $_GET['e'] ) && in_array($_GET['e'], $array) ? $_GET['e'] : $array[0];
	$selected = isset($_POST['submit']) ? $_POST['submit'] : $selected;

	$links = '<h3>';
	//$links .= ( 'doWebPayment'==$selected ) ? "<a class='backtoform' href='?e=doWebPayment'>doWebPayment (light)</a> - " : "<a href='?e=doWebPayment'>doWebPayment (light)</a> - ";
	$links .= ( 'fullWebPayment'==$selected ) ? "<a class='backtoform' href='?e=fullWebPayment'>doWebPayment (full)</a> - " : "<a href='?e=fullWebPayment'>doWebPayment (full)</a> - ";
	$links .= ( 'widgetPayment'==$selected ) ? "<a class='backtoform' href='?e=widgetPayment'>doWebPayment (advanced widget)</a> - " : "<a href='?e=widgetPayment'>doWebPayment (advanced widget)</a> - ";
	$links .= ( 'shortcut'==$selected ) ? "<a class='backtoform' href='?e=shortcut'>Payment shortcut</a> - " : "<a href='?e=shortcut'>Payment shortcut</a> - ";
	$links .= ( 'getWebPaymentDetails'==$selected ) ? "<a class='backtoform' href='?e=getWebPaymentDetails'>getWebPaymentDetails</a>" : "<a href='?e=getWebPaymentDetails'>getWebPaymentDetails</a>";
	$links .= '</h3>';
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset='UTF-8'>
		<title><?php echo "Payline - ".PaylineSDK::SDK_RELEASE ?></title>
		<!--STYLES -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/forms.css" />        
        <?php
        switch ($_SESSION['ENVIRONMENT']){
            case PaylineSDK::ENV_DEV:
                echo "<link rel='stylesheet' href='".PaylineSDK::DEV_WDGT_CSS."'>";
                break;
            case PaylineSDK::ENV_HOMO:
                echo "<link rel='stylesheet' href='".PaylineSDK::HOMO_WDGT_CSS."'>";
                break;
            case PaylineSDK::ENV_PROD:
                echo "<link rel='stylesheet' href='".PaylineSDK::PROD_WDGT_CSS."'>";
                break;
        }
        if(isset($_SESSION['CUSTOM_WIDGET_CSS']) && $_SESSION['CUSTOM_WIDGET_CSS'] != null){
            echo "<link rel='stylesheet' href='".$_SESSION['KIT_ROOT']."examples/demos/css/".$_SESSION['CUSTOM_WIDGET_CSS']."'>";
        }
        ?>
        <!--STYLES END-->
        <!--SCRIPTS-->
        <?php
        switch ($_SESSION['ENVIRONMENT']){
            case PaylineSDK::ENV_DEV:
                echo "<script src='".PaylineSDK::DEV_WDGT_JS."'></script>";
                break;
            case PaylineSDK::ENV_HOMO:
                echo "<script src='".PaylineSDK::HOMO_WDGT_JS."'></script>";
                break;
            case PaylineSDK::ENV_PROD:
                echo "<script src='".PaylineSDK::PROD_WDGT_JS."'></script>";
                break;
        }
        if(isset($_SESSION['CUSTOM_WIDGET_JS']) && $_SESSION['CUSTOM_WIDGET_JS'] != null){
            echo "<script src='".$_SESSION['KIT_ROOT']."examples/demos/scripts/".$_SESSION['CUSTOM_WIDGET_JS']."'></script>"; 
        }
        ?>
        <script type='text/javascript'>
        function widgetWillInit(){
        	var console = document.getElementById("widgetLifeCycle");
    		if(console){
    			var d = new Date();
    			var horo = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'.'+d.getMilliseconds();
    			document.getElementById("widgetLifeCycle").innerHTML = console.innerHTML+"<span class='widgetLifeSign'>["+horo+"] willinit</span>";
    		}
        }
        function widgetWillShow(){
        	var console = document.getElementById("widgetLifeCycle");
    		if(console){
    			var d = new Date();
    			var horo = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'.'+d.getMilliseconds();
    			document.getElementById("widgetLifeCycle").innerHTML = console.innerHTML+"<span class='widgetLifeSign'>["+horo+"] willshow</span>";
    		}
        }
        function widgetFinalStateHasBeenReached(obj){
        	var console = document.getElementById("widgetLifeCycle");
    		if(console){
    			var d = new Date();
    			var horo = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'.'+d.getMilliseconds();
    			document.getElementById("widgetLifeCycle").innerHTML = console.innerHTML+"<span class='widgetLifeSign'>["+horo+"] finalstatehasbeenreached : "+obj.state+"</span>";
    		}
        }
        function widgetDidShowState(obj){
        	var console = document.getElementById("widgetLifeCycle");
    		if(console){
    			var d = new Date();
    			var horo = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'.'+d.getMilliseconds();
    			document.getElementById("widgetLifeCycle").innerHTML = console.innerHTML+"<span class='widgetLifeSign'>["+horo+"] didshowstate : "+obj.state+"</span>";
    		}
        }
        function updatePaymentSession(token){
        	Payline.Api.init();
            var datasPayline = {
        		'payment':{
            	    'amount':document.getElementById('paymentAmount').value,
            	    'currency':document.getElementById('paymentCurrency').value
            	},'order':{
            	    'amount':document.getElementById('orderAmount').value,
            	    'currency':document.getElementById('orderCurrency').value,
            	    'taxes':document.getElementById('orderTaxes').value,
            	    'deliveryTime':document.getElementById('deliveryTime').value,
            	    'deliveryMode':document.getElementById('deliveryMode').value,
            	    'deliveryExpectedDate':document.getElementById('deliveryExpectedDate').value,
            	    'deliveryExpectedDelay':document.getElementById('deliveryExpectedDelay').value,
            	    'details':{
            	    	'orderDetail':{
            	    		'ref':document.getElementById('orderDetailRef1').value,
            	    		'price':document.getElementById('orderDetailPrice1').value,
            	    		'quantity':document.getElementById('orderDetailQuantity1').value,
            	    		'comment':document.getElementById('orderDetailComment1').value,
            	    		'category':document.getElementById('orderDetailCategory1').value,
            	    		'brand':document.getElementById('orderDetailBrand1').value,
            	    		'subcategory1':document.getElementById('orderDetailSubcategory1_1').value,
            	    		'subcategory2':document.getElementById('orderDetailSubcategory2_1').value,
            	    		'additionalData':document.getElementById('orderDetailAdditionalData1').value,
            	    		'taxRate':document.getElementById('orderDetailTaxRate1').value
            	    	},'orderDetail':{
            	    		'ref':document.getElementById('orderDetailRef2').value,
            	    		'price':document.getElementById('orderDetailPrice2').value,
            	    		'quantity':document.getElementById('orderDetailQuantity2').value,
            	    		'comment':document.getElementById('orderDetailComment2').value,
            	    		'category':document.getElementById('orderDetailCategory2').value,
            	    		'brand':document.getElementById('orderDetailBrand2').value,
            	    		'subcategory1':document.getElementById('orderDetailSubcategory1_2').value,
            	    		'subcategory2':document.getElementById('orderDetailSubcategory2_2').value,
            	    		'additionalData':document.getElementById('orderDetailAdditionalData2').value,
            	    		'taxRate':document.getElementById('orderDetailTaxRate2').value
            	    	}
            	    }
            	},'buyer':{
                	'shippingAddress':{
                    	'title':document.getElementById('shippingAddressTitle').value,
                    	'name':document.getElementById('shippingAddressName').value,
                    	'lastName':document.getElementById('shippingAddressLastName').value,
                    	'firstName':document.getElementById('shippingAddressFirstName').value,
                    	'street1':document.getElementById('shippingAddressStreet1').value,
                    	'street2':document.getElementById('shippingAddressStreet2').value,
                    	'cityName':document.getElementById('shippingAddressCity').value,
                    	'zipCode':document.getElementById('shippingAddressZipCode').value,
                    	'country':document.getElementById('shippingAddressCountry').value,
                    	'phone':document.getElementById('shippingAddressPhone').value,
                    	'state':document.getElementById('shippingAddressState').value,
                    	'county':document.getElementById('shippingAddressCounty').value,
                    	'phoneType':document.getElementById('shippingAddressPhoneType').value
                    },'billingAddress':{
                    	'title':document.getElementById('billingAddressTitle').value,
                    	'name':document.getElementById('billingAddressName').value,
                    	'lastName':document.getElementById('billingAddressLastName').value,
                    	'firstName':document.getElementById('billingAddressFirstName').value,
                    	'street1':document.getElementById('billingAddressStreet1').value,
                    	'street2':document.getElementById('billingAddressStreet2').value,
                    	'cityName':document.getElementById('billingAddressCity').value,
                    	'zipCode':document.getElementById('billingAddressZipCode').value,
                    	'country':document.getElementById('billingAddressCountry').value,
                    	'phone':document.getElementById('billingAddressPhone').value,
                    	'state':document.getElementById('billingAddressState').value,
                    	'county':document.getElementById('billingAddressCounty').value,
                    	'phoneType':document.getElementById('billingAddressPhoneType').value
                    }
                }
            };
            Payline.Api.updateWebpaymentData(token,datasPayline,sessionUpdated(token));
        }
        function sessionUpdated(token){
        	var console = document.getElementById("widgetLifeCycle");
    		if(console){
    			var d = new Date();
    			var horo = d.getFullYear()+'-'+d.getMonth()+'-'+d.getDate()+' '+d.getHours()+':'+d.getMinutes()+':'+d.getSeconds()+'.'+d.getMilliseconds();
    			document.getElementById("widgetLifeCycle").innerHTML = console.innerHTML+"<span class='widgetLifeSign'>["+horo+"] payment session "+token+" updated</span>";
    		}
            document.getElementById('widgetPaymentForm').style.display="none";
            Payline.Api.show();
        }

        function showStateFunction(state) {  
            if ("PAYMENT_METHODS_LIST_FAST_CHECKOUT" == state.state) {
            	// specific process if needed
            }
            if ("PAYMENT_TRANSITIONAL_FAST_CHECKOUT" == state.state) {
            	var buyer = Payline.Api.getBuyerFastCheckout();
            	document.getElementById("paypalBuyerEmail").value =  buyer.email;
            	document.getElementById("paypalBuyerFirstName").value = buyer.firstName;
            	document.getElementById("paypalBuyerLastName").value = buyer.lastName;
            	document.getElementById("paypalBuyerStreet1").value = buyer.street1;
            	document.getElementById("paypalBuyerStreet2").value = buyer.street2;
            	document.getElementById("paypalBuyerZipcode").value = buyer.zipCode;
            	document.getElementById("paypalBuyerCity").value = buyer.cityName;
            	document.getElementById("paypalBuyerCountry").value = buyer.country;            
            }
            if ("PAYMENT_SUCCESS" == state.state) {
               // specific process if needed
            }
        }

        function finalizeExpressCheckout(token){
        	var shippingOption = document.getElementsByName('shippingOption');
			var shippingCost = 1;
        	for (var i = 0, len = shippingOption.length; i < len; i++) {
        		if(shippingOption[i].checked){
            		shippingCost = document.getElementsByName('shippingOption')[i].value;
        		}
        	}
        	var finalPaymentAmount = parseInt(shippingCost)+parseInt(document.getElementById("shortcutAmount").value);
        	
            var datasPayline = {
        		'payment':{
            	    'amount':finalPaymentAmount
            	},'order':{
            	    'amount':finalPaymentAmount
            	},'buyer':{
                	'shippingAddress':{
                    	'lastName':document.getElementById('paypalBuyerLastName').value,
                    	'firstName':document.getElementById('paypalBuyerFirstName').value,
                    	'street1':document.getElementById('paypalBuyerStreet1').value,
                    	'street2':document.getElementById('paypalBuyerStreet2').value,
                    	'cityName':document.getElementById('paypalBuyerCity').value,
                    	'zipCode':document.getElementById('paypalBuyerZipcode').value,
                    	'country':document.getElementById('paypalBuyerCountry').value
                    }
                }
            };
            Payline.Api.updateWebpaymentData(token, datasPayline, function (response) {
                if(response.status != 200) {
                    alert("Error occured at Payline.Api.updateWebpaymentData (code "+response.status+")");
                } else {
                	Payline.Api.finalizeShortcut();
                }
            });
        }

        function customStates(state){
            Payline.jQuery('#pl-container-lightbox-close').click(function (e) {
                alert('sur cette page la fermeture de la lightbox annule la session de paiement (utilisation de data-event-didshowstate, voir la source)');
                var actionUrl = Payline.Models.Contexts.ContextManager.getCurrentContext().getCancelUrl();
                Payline.Api.endToken(null, function() {
                    window.location.href = actionUrl;
                }, null, false);
            });
    	}  
        
        </script>
        <!--SCRIPTS END-->
	</head>

	<body>
		<div id="header">
			<div id="header-inside">
				<div id="logo">
					<h1><a href="http://www.payline.com"><span>payline</span></a></h1>
					<p>by Monext</p>
				</div>
				<?php $activeTab = 'web'; include 'tabs.php';?>
		  </div>
		</div>

		<div id="wrapper">
			<div id="container">
				<div id="content">
					<?php include 'logged.php';?>
					<h2>Web Payment</h2>
					<?php echo $links; ?>
                    <p id="info">Demo that shows the usage of Payline webPayment API</p>
					<div id="source">
					<?php
					if(isset($_POST['submit'])){ // validation d'un formulaire
						include('../web/'.$_POST['submit'].'.php');
					}elseif(isset($_GET['token']) || (isset($_GET['paylinetoken']) && isset($_GET['e'])) ){ // retour à la boutique classique ou depuis le widget
					    include('../web/'.$_GET['e'].'.php');
					}elseif(isset($_GET['paylinetoken']) && !isset($_GET['e'])){// retour depuis un partenaire (Paypal...) => affichage du step3 dans le wigdet
                        echo "<div id='PaylineWidget' data-token='".$_GET['paylinetoken']."'></div>";
					}else{
						?>
						<div id="demo">
							<div id="widgetLifeCycle"></div>
							<?php
							include("../web/{$selected}Form.php");
							?>
						</div>
					<?php } ?>
					</div>
				</div>
				<span class="clr"></span>
			</div>
		</div>
		<div id="footer">
			<div id="footer-inside">
				<a href="http://www.monext.net/" class="copy"></a>
				<p><a href="https://github.com/PaylineByMonext/payline-php-sdk" target="payline-php-sdk"><?php echo PaylineSDK::SDK_RELEASE?></a>&nbsp;-&nbsp;<a href="https://github.com/PaylineByMonext/payline-php-samples" target="payline-php-sample">see sources on GitHub</a></p>
			</div>
		</div>
	</body>
</html>