<?php
    use Payline\PaylineSDK;
	include "../../include.php";
	$array = array(
		'doAuthorization',
		'doCapture',
		'unBlock',
		'doRefund',
		'doCredit',
		'doDebit',
		'verifyEnrollment',
		'verifyAuthentication',
		'doReAuthorization',
		'getEncryptionKey',
		'doScoringCheque',
		'doReset',
		'getBalance',
		'getMerchantSettings',
		'getToken',
		'doBankTransfer',
		'isRegistered'
	);
	$selected = isset( $_GET['e'] ) && in_array($_GET['e'], $array) ? $_GET['e'] : $array[0];
	$selected = isset($_POST['submit']) ? $_POST['submit'] : $selected;
	
	$links = '<h3>';
	foreach( $array as $v )
		$links .= ( $v==$selected ) ? "<a class='backtoform' href='?e=$v'>$v</a> - " : "<a href='?e=$v'>$v</a> - ";
	$links = substr( $links, 0, -2 ).'</h3>';
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
	</head>

	<body>
		<div id="header">
			<div id="header-inside">
				<div id="logo">
					<h1><a href="http://www.payline.com"><span>payline</span></a></h1>
					<p>by Monext</p>
				</div>
				<?php include 'tabs.html';?>
		  </div>
		</div>

		<div id="wrapper">
			<div id="container">
				<div id="content">
					<?php include 'logged.php';?>
					<h2>Direct Payment</h2>
					<?php echo $links; ?>
                    <p id="info">Demo that shows the usage of Payline direct API</p>
					<div id="source">
					<?php
					if(isset($_POST['submit'])){
                        include('../direct/'.$_POST['submit'].'.php');
					}elseif(isset($_POST['PaRes'])){ // back from ACS with 3D Secure authentication data
					    if(isset($_GET['rawDisplay'])){
					        include('../direct/displayACSResponse.php');
					    }else{
					        include('../direct/3DS_Auth.php');
					    }
					}else{
						?>
						<div id="demo">
							<?php
							include("../direct/{$selected}Form.php");
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