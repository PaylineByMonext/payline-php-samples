<?php
	use Payline\PaylineSDK;
	include "../../include.php";
	$array = array(
		'createWallet',
		'updateWallet',
		'getWallet',
		'createWebWallet',
	    'updateWebWallet',
	    'getWebWallet',
		'disableWallet',
		'enableWallet',
		'doImmediateWalletPayment',
		'doScheduledWalletPayment',
		'doRecurrentWalletPayment',
		'getPaymentRecord',
		'updatePaymentRecord',
		'getBillingRecord',
		'updateBillingRecord',
		'disablePaymentRecord',
		'getCards',
		'manageWebWallet'
	);
	$selected = isset( $_GET['e'] ) && in_array($_GET['e'], $array) ? $_GET['e'] : $array[0];
	$selected = isset($_POST['submit']) ? $_POST['submit'] : $selected;

	$links = '<h3>';
	foreach( $array as $v ){
		if(strcmp ('createWebWallet',$v)==0 || strcmp ('updateWebWallet',$v)==0){
			$links .= ( $v==$selected ) ? "<a class='backtoform' href='?e=$v'>$v</a> <font size='2' color='red'> (*)</font> - " : "<a href='?e=$v'>$v</a><font size='2' color='red'> (*)</font> - ";
		}else{
			$links .= ( $v==$selected ) ? "<a class='backtoform' href='?e=$v'>$v</a> - " : "<a href='?e=$v'>$v</a> - ";
		}
	}
	$links = substr( $links, 0, -2 ).'</h3>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />
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
        ?>        
        <!--SCRIPTS END-->
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
					<li><a href="wallet.php" class="on">Wallet</a></li>
					<li><a href="extended.php">Extended</a></li>
					<li><a href="ajax.php">API Ajax</a></li>
				</ul>
		  </div>
		</div>

		<div id="wrapper">
			<div id="container">
				<div id="content">
					<?php include 'logged.php';?>
					<h2>Wallet</h2>
					<?php echo $links; ?>
                    <p id="info">
                    	Demo that shows the usage of Payline classes for wallet (both webPayment and Direct API)<br/>
                    	<font size='2' color='red'>(*) </font><b>createWebWallet</b> and <b>updateWebWallet</b> are deprecated. Please use <b>manageWebWallet</b>
                    </p>
					<div id="source">
					<?php
					if(isset($_POST['submit'])){
						include('../wallet/'.$_POST['submit'].'.php');
					}elseif(isset($_POST['PaRes'])){ // back from ACS with 3D Secure authentication data
						include('../wallet/3DS_walletPayment.php');
					}else{
						?>
						<div id="demo">
							<?php
							include("../wallet/{$selected}Form.php");
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
				<p><?php echo PaylineSDK::SDK_RELEASE.'&nbsp;&nbsp;-&nbsp;&nbsp;copyright &copy; '.date('Y')?> <a href="http://www.monext.net/">Monext</a></p>
			</div>
		</div>

	</body>
</html>