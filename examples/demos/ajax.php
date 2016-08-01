<?php
	use Payline\PaylineSDK;
	include "../../include.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<title><?php echo "Payline - ".PaylineSDK::SDK_RELEASE ?></title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/forms.css" />
        <script type="text/javascript" src="scripts/mootools-1.11.js"></script>
        <script type="text/javascript" src="scripts/demos.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	</head>

	<body>
		<div id="header">
			<div id="header-inside">
				<div id="logo">
					<h1><a href="http://www.payline.com"><span>payline</span></a></h1>
					<p>by Monext</p>
				</div>
				<ul id="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="web.php">Web</a></li>
					<li><a href="direct.php">Direct</a></li>
					<li><a href="wallet.php">Wallet</a></li>
					<li><a href="extended.php">Extended</a></li>
					<li><a href="ajax.php" class="on">API Ajax</a></li>
				</ul>
		  </div>
		</div>

		<div id="wrapper">
			<div id="container">
				<div id="content">
					<?php include 'logged.php';?>
					<h2>API Ajax</h2>
                    <p id="info">Demo that shows the usage of Payline Ajax API</p>
                    <div id="demo">
                    <?php
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
                    $aes256Key = hash("SHA256", $_SESSION['ACCESS_KEY'], true);
                    if(!isset($_POST['ajaxStep']) && !isset($_POST['PaRes'])){
                    	include("../ajax/step0Form.php");
                    }elseif(isset($_POST['ajaxStep']) && $_POST['ajaxStep'] == 1){
                    	$_SESSION['AJAX_CONTRACT']=$_POST['contractNumber'];
                    	$messageUtf8 = utf8_encode($_SESSION['MERCHANT_ID'] . ";" . $_POST['orderRef'] . ";" . $_POST['contractNumber']);
                    	$crypted = $payline->getEncrypt($messageUtf8, $aes256Key);
                    	DEFINE( 'CRYPTED_DATA', $crypted );
                    	include("../ajax/step1Form.php");
                    }elseif(isset($_POST['ajaxStep']) && $_POST['ajaxStep'] == 2){
                    	$returnedData = explode('=',$_POST['returnedData']);
                    	if(strcmp("errorCode",$returnedData[0])==0){
                    		echo "ERROR - getToken servlet returned errorCode ".$returnedData[1];
                    	}elseif(strcmp("data",$returnedData[0])==0){
                    		$decrypt = $payline->gzdecode($payline->getDecrypt($returnedData[1], $aes256Key));
                    		$arrayDecrypt = explode(';',$decrypt);
                    		$paymentData = array(
                    			'cardTokenPan'	=> $arrayDecrypt[0],
                    			'cardExp'		=> $arrayDecrypt[1],
                    			'vCVV'			=> $arrayDecrypt[2],
                    			'orderRef'		=> $arrayDecrypt[3],
                    			'cardType'		=> $arrayDecrypt[4],
                    			'cardIsCVD '	=> $arrayDecrypt[5],
                    			'cardCountry'	=> $arrayDecrypt[6],
                    			'cardProduct'	=> $arrayDecrypt[7],
                    			'bankCode'		=> $arrayDecrypt[8]
                    		);
                    		$_SESSION['AJAX_RAW_PAYMENT_DATA']=$returnedData[1];
                    		$_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']=$paymentData;
                        $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['paymentAction']=$_POST['paymentAction'];
                        if($_POST['doAuth'] == 1){
                    		if($_POST['3DS'] == 1){
                    			$verifyEnrollmentRequest = array();
                    			//VERSION
                    			$verifyEnrollmentRequest['version'] = 4;
                    			
                    			//PAYMENT
                    			$verifyEnrollmentRequest['payment']['amount'] = 100;
                    			$verifyEnrollmentRequest['payment']['currency'] = 978;
                    			$verifyEnrollmentRequest['payment']['action'] = 100;
                    			$verifyEnrollmentRequest['payment']['mode'] =  'CPT';
                    			$verifyEnrollmentRequest['payment']['contractNumber'] = $_SESSION['AJAX_CONTRACT'];
                    			
                    			// CARD INFO
                    			$verifyEnrollmentRequest['card']['type'] = $paymentData['cardType'];
                    			$verifyEnrollmentRequest['card']['expirationDate'] = $paymentData['cardExp'];
                    			$verifyEnrollmentRequest['card']['token'] = $paymentData['cardTokenPan'];
                                        $verifyEnrollmentRequest['card']['cvx'] = '';
                    			
                    			// ORDER
                    			$verifyEnrollmentRequest['orderRef'] = $paymentData['orderRef'];

                    			
                    			// MD
                    			$verifyEnrollmentRequest['mdFieldValue'] = '';
                    			
                    			//USERAGENT
                    			$verifyEnrollmentRequest['userAgent'] = '';
                    			
                    			// WALLET
                    			$verifyEnrollmentRequest['walletId'] = '';
                    			$verifyEnrollmentRequest['walletCardInd'] = '';
                    			
                    			// RESPONSE
                    			$verifyEnrollmentResponse = $payline->verifyEnrollment($verifyEnrollmentRequest);
                    			if($verifyEnrollmentResponse['result']['code'] != paylineSDK::ERR_CODE){
                    				if($verifyEnrollmentResponse['result']['code'] == '03000'){
                    					echo "<form name='3DSForm' action='".$verifyEnrollmentResponse['actionUrl']."' method='POST' class='payline-form'>";
                    					echo "	<input type='hidden' name='".$verifyEnrollmentResponse['termUrlName']."' value='http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']."'>";
                    					echo "	<input type='hidden' name='".$verifyEnrollmentResponse['pareqFieldName']."' value='".$verifyEnrollmentResponse['pareqFieldValue']."'>";
                    					echo "	<input type='hidden' name='".$verifyEnrollmentResponse['mdFieldName']."' value='".$verifyEnrollmentResponse['mdFieldValue']."'>";
                    					echo "	<input type='submit' name='submit' value='Redirect to ACS'>";
                    					echo "</form>";
                    					echo "<script type='text/javascript'>document.getElementById('3DSForm').submit();</script>";
                    				}else{
                    					echo 'Error at verifyEnrollment call : '.$verifyEnrollmentResponse['result']['longMessage'].' (code '.$verifyEnrollmentResponse['result']['code'].')';
                    				}
                    			}else{
                    				echo 'Critical error at verifyEnrollment call';
                    			}
                    		}else{
                    			$doAuthorizationRequest = array();
                    			//VERSION
                    			$doAuthorizationRequest['version'] = 4;
                    			
                    			//PAYMENT
								$doAuthorizationRequest['payment']['amount'] = 3000;
								$doAuthorizationRequest['payment']['currency'] = $_SESSION['PAYMENT_CURRENCY'];
								$doAuthorizationRequest['payment']['action'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['paymentAction'];
								$doAuthorizationRequest['payment']['mode'] =  $_SESSION['PAYMENT_MODE'];
								$doAuthorizationRequest['payment']['contractNumber'] = $_SESSION['AJAX_CONTRACT'];
								
                    			// CARD INFO
								$doAuthorizationRequest['card']['type'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['cardType'];
								$doAuthorizationRequest['card']['expirationDate'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['cardExp'];
								$doAuthorizationRequest['card']['cvx'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['vCVV'];
								$doAuthorizationRequest['card']['token'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['cardTokenPan'];
								$doAuthorizationRequest['card']['cardholder'] = 'MONEXT';
								
                    			//ORDER
								$doAuthorizationRequest['order']['ref'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['orderRef'];
								$doAuthorizationRequest['order']['amount'] = $doAuthorizationRequest['payment']['amount'];
								$doAuthorizationRequest['order']['date'] = date('d/m/Y H:i');
								$doAuthorizationRequest['order']['currency'] = $doAuthorizationRequest['payment']['currency'];
								
								// BUYER
								$doAuthorizationRequest['buyer']['legalStatus'] = $_SESSION['buyerLegalStatus'];
								$doAuthorizationRequest['buyer']['title'] = $_SESSION['buyerTitle'];
								$doAuthorizationRequest['buyer']['lastName'] = $_SESSION['buyerLastName'];
								$doAuthorizationRequest['buyer']['firstName'] = $_SESSION['buyerFirstName'];
								$doAuthorizationRequest['buyer']['email'] = $_SESSION['buyerEmail'];
								$doAuthorizationRequest['buyer']['mobilePhone'] = $_SESSION['mobilePhone'];
								$doAuthorizationRequest['buyer']['customerId'] = $_SESSION['customerId'];
								$doAuthorizationRequest['buyer']['accountCreateDate'] = $_SESSION['buyerAccountCreateDate'];
								$doAuthorizationRequest['buyer']['accountAverageAmount'] = $_SESSION['buyerAverageAmount'];
								$doAuthorizationRequest['buyer']['accountOrderCount'] = $_SESSION['buyerOrderCount'];
								$doAuthorizationRequest['buyer']['walletId'] = $_SESSION['buyerWalletId'];
								$doAuthorizationRequest['buyer']['ip'] = $_SESSION['buyerIp'];
								$doAuthorizationRequest['buyer']['legalDocument'] = $_SESSION['legalDocument'];
								$doAuthorizationRequest['buyer']['birthDate'] = $_SESSION['birthDate'];
								$doAuthorizationRequest['buyer']['fingerprintID'] = $_SESSION['fingerprintID'];
								
								// BILLING ADDRESS
								$doAuthorizationRequest['billingAddress']['title'] = $_SESSION['billingAddressTitle'];
								$doAuthorizationRequest['billingAddress']['firstName'] = $_SESSION['billingAddressFirstName'];
								$doAuthorizationRequest['billingAddress']['lastName'] = $_SESSION['billingAddressLastName'];
								$doAuthorizationRequest['billingAddress']['name'] = $_SESSION['billingAddressName'];
								$doAuthorizationRequest['billingAddress']['street1'] = $_SESSION['billingAddressStreet1'];
								$doAuthorizationRequest['billingAddress']['street2'] = $_SESSION['billingAddressStreet2'];
								$doAuthorizationRequest['billingAddress']['county'] = $_SESSION['billingAddressCounty'];
								$doAuthorizationRequest['billingAddress']['cityName'] = $_SESSION['billingAddressCity'];
								$doAuthorizationRequest['billingAddress']['zipCode'] = $_SESSION['billingAddressZipCode'];
								$doAuthorizationRequest['billingAddress']['country'] = $_SESSION['billingAddressCountry'];
								$doAuthorizationRequest['billingAddress']['state'] = $_SESSION['billingAddressState'];
								$doAuthorizationRequest['billingAddress']['phoneType'] = $_SESSION['billingAddressPhoneType'];
								$doAuthorizationRequest['billingAddress']['phone'] = $_SESSION['billingAddressPhone'];
								
								// SHIPPING ADDRESS
								$doAuthorizationRequest['shippingAddress']['title'] = $_SESSION['shippingAddressTitle'];
								$doAuthorizationRequest['shippingAddress']['firstName'] = $_SESSION['shippingAddressFirstName'];
								$doAuthorizationRequest['shippingAddress']['lastName'] = $_SESSION['shippingAddressLastName'];
								$doAuthorizationRequest['shippingAddress']['name'] = $_SESSION['shippingAddressName'];
								$doAuthorizationRequest['shippingAddress']['street1'] = $_SESSION['shippingAddressStreet1'];
								$doAuthorizationRequest['shippingAddress']['street2'] = $_SESSION['shippingAddressStreet2'];
								$doAuthorizationRequest['shippingAddress']['county'] = $_SESSION['shippingAddressCounty'];
								$doAuthorizationRequest['shippingAddress']['cityName'] = $_SESSION['shippingAddressCity'];
								$doAuthorizationRequest['shippingAddress']['zipCode'] = $_SESSION['shippingAddressZipCode'];
								$doAuthorizationRequest['shippingAddress']['country'] = $_SESSION['shippingAddressCountry'];
								$doAuthorizationRequest['shippingAddress']['state'] = $_SESSION['shippingAddressState'];
								$doAuthorizationRequest['shippingAddress']['phoneType'] = $_SESSION['shippingAddressPhoneType'];
								$doAuthorizationRequest['shippingAddress']['phone'] = $_SESSION['shippingAddressPhone'];
                    			
                    			// RESPONSE
                    			$doAuthorizationResponse = $payline->doAuthorization($doAuthorizationRequest);
                    			
                    			echo '<H3>doAuthorization Request</H3>';
                    			print_a($doAuthorizationRequest);
                    			echo '<br/><H3>doAuthorization Response</H3>';
                    			print_a($doAuthorizationResponse, 0, true);
                    		}
                        }else{
                              // no doAuthorization call, just getToken response display
                              echo '<br/><H3>getToken servlet raw response</H3>';
                              print_a(array('data'=>$returnedData[1]));
                              echo '<br/><H3>decrypted response</H3>';
                    	      print_a($paymentData, 0, true);
                           }
                    	}
                    }
                    if(isset($_POST['PaRes'])){ // back from ACS with 3D Secure authentication data
                    	$doAuthorization3DSRequest = array();
                    	
                    	//VERSION
                    	$doAuthorization3DSRequest['version'] = 4;
                    	 
                    	//PAYMENT
                    	$doAuthorization3DSRequest['payment']['amount'] = 1000;
                    	$doAuthorization3DSRequest['payment']['currency'] = $_SESSION['PAYMENT_CURRENCY'];
                    	$doAuthorization3DSRequest['payment']['action'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['paymentAction'];
                    	$doAuthorization3DSRequest['payment']['mode'] =  $_SESSION['PAYMENT_MODE'];
                    	$doAuthorization3DSRequest['payment']['contractNumber'] = $_SESSION['AJAX_CONTRACT'];
                    	
                    	// CARD INFO
                    	$doAuthorization3DSRequest['card']['type'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['cardType'];
                    	$doAuthorization3DSRequest['card']['expirationDate'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['cardExp'];
                    	$doAuthorization3DSRequest['card']['cvx'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['vCVV'];
                    	$doAuthorization3DSRequest['card']['token'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['cardTokenPan'];
                    	$doAuthorization3DSRequest['card']['cardholder'] = 'MONEXT';
                    	
                    	//ORDER
                    	$doAuthorization3DSRequest['order']['ref'] = $_SESSION['AJAX_DECRYPTED_PAYMENT_DATA']['orderRef'];
                    	$doAuthorization3DSRequest['order']['amount'] = $doAuthorization3DSRequest['payment']['amount'];
                    	$doAuthorization3DSRequest['order']['date'] = date('d/m/Y H:i');
                    	$doAuthorization3DSRequest['order']['currency'] = $_SESSION['ORDER_CURRENCY'];
                    	
                    	// BUYER
                    	$doAuthorizationRequest['buyer']['legalStatus'] = $_SESSION['buyerLegalStatus'];
                    	$doAuthorizationRequest['buyer']['title'] = $_SESSION['buyerTitle'];
                    	$doAuthorizationRequest['buyer']['lastName'] = $_SESSION['buyerLastName'];
                    	$doAuthorizationRequest['buyer']['firstName'] = $_SESSION['buyerFirstName'];
                    	$doAuthorizationRequest['buyer']['email'] = $_SESSION['buyerEmail'];
                    	$doAuthorizationRequest['buyer']['mobilePhone'] = $_SESSION['mobilePhone'];
                    	$doAuthorizationRequest['buyer']['customerId'] = $_SESSION['customerId'];
                    	$doAuthorizationRequest['buyer']['accountCreateDate'] = $_SESSION['buyerAccountCreateDate'];
                    	$doAuthorizationRequest['buyer']['accountAverageAmount'] = $_SESSION['buyerAverageAmount'];
                    	$doAuthorizationRequest['buyer']['accountOrderCount'] = $_SESSION['buyerOrderCount'];
                    	$doAuthorizationRequest['buyer']['walletId'] = $_SESSION['buyerWalletId'];
                    	$doAuthorizationRequest['buyer']['ip'] = $_SESSION['buyerIp'];
                    	$doAuthorizationRequest['buyer']['legalDocument'] = $_SESSION['legalDocument'];
                    	$doAuthorizationRequest['buyer']['birthDate'] = $_SESSION['birthDate'];
                    	$doAuthorizationRequest['buyer']['fingerprintID'] = $_SESSION['fingerprintID'];
                    	
                    	// BILLING ADDRESS
                    	$doAuthorizationRequest['billingAddress']['title'] = $_SESSION['billingAddressTitle'];
                    	$doAuthorizationRequest['billingAddress']['firstName'] = $_SESSION['billingAddressFirstName'];
                    	$doAuthorizationRequest['billingAddress']['lastName'] = $_SESSION['billingAddressLastName'];
                    	$doAuthorizationRequest['billingAddress']['name'] = $_SESSION['billingAddressName'];
                    	$doAuthorizationRequest['billingAddress']['street1'] = $_SESSION['billingAddressStreet1'];
                    	$doAuthorizationRequest['billingAddress']['street2'] = $_SESSION['billingAddressStreet2'];
                    	$doAuthorizationRequest['billingAddress']['county'] = $_SESSION['billingAddressCounty'];
                    	$doAuthorizationRequest['billingAddress']['cityName'] = $_SESSION['billingAddressCity'];
                    	$doAuthorizationRequest['billingAddress']['zipCode'] = $_SESSION['billingAddressZipCode'];
                    	$doAuthorizationRequest['billingAddress']['country'] = $_SESSION['billingAddressCountry'];
                    	$doAuthorizationRequest['billingAddress']['state'] = $_SESSION['billingAddressState'];
                    	$doAuthorizationRequest['billingAddress']['phoneType'] = $_SESSION['billingAddressPhoneType'];
                    	$doAuthorizationRequest['billingAddress']['phone'] = $_SESSION['billingAddressPhone'];
                    	
                    	// SHIPPING ADDRESS
                    	$doAuthorizationRequest['shippingAddress']['title'] = $_SESSION['shippingAddressTitle'];
                    	$doAuthorizationRequest['shippingAddress']['firstName'] = $_SESSION['shippingAddressFirstName'];
                    	$doAuthorizationRequest['shippingAddress']['lastName'] = $_SESSION['shippingAddressLastName'];
                    	$doAuthorizationRequest['shippingAddress']['name'] = $_SESSION['shippingAddressName'];
                    	$doAuthorizationRequest['shippingAddress']['street1'] = $_SESSION['shippingAddressStreet1'];
                    	$doAuthorizationRequest['shippingAddress']['street2'] = $_SESSION['shippingAddressStreet2'];
                    	$doAuthorizationRequest['shippingAddress']['county'] = $_SESSION['shippingAddressCounty'];
                    	$doAuthorizationRequest['shippingAddress']['cityName'] = $_SESSION['shippingAddressCity'];
                    	$doAuthorizationRequest['shippingAddress']['zipCode'] = $_SESSION['shippingAddressZipCode'];
                    	$doAuthorizationRequest['shippingAddress']['country'] = $_SESSION['shippingAddressCountry'];
                    	$doAuthorizationRequest['shippingAddress']['state'] = $_SESSION['shippingAddressState'];
                    	$doAuthorizationRequest['shippingAddress']['phoneType'] = $_SESSION['shippingAddressPhoneType'];
                    	$doAuthorizationRequest['shippingAddress']['phone'] = $_SESSION['shippingAddressPhone'];
                    	
                    	//AUTHENTICATION 3DSECURE
                    	$doAuthorization3DSRequest['3DSecure']['md'] = $_POST['MD'];
                    	$doAuthorization3DSRequest['3DSecure']['pares'] = $_POST['PaRes'];
                    	 
                    	// RESPONSE
                    	$doAuthorization3DSResponse = $payline->doAuthorization($doAuthorization3DSRequest);
                    	 
                    	echo '<H3>doAuthorization Request</H3>';
                    	print_a($doAuthorization3DSRequest);
                    	echo '<br/><H3>doAuthorization Response</H3>';
                    	print_a($doAuthorization3DSResponse, 0, true);
                    }
                    ?>
					</div>
				</div>
				<span class="clr"></span>
			</div>
		</div>

		<div id="footer">
			<div id="footer-inside">
				<a href="http://www.monext.net/" class="copy"></a>
				<p><?php echo PaylineSDK::SDK_RELEASE.'&nbsp;&nbsp;-&nbsp;&nbsp;copyright &copy; '.date('Y')?> <a href="http://www.monext.net/">Monext</a></p>
			</div>
		</div>

	</body>
</html>