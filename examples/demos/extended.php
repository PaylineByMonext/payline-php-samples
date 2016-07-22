<?php
	use Payline\PaylineSDK;
	include "../../include.php";
	$array = array(
		'getTransactionDetails',
		'transactionsSearch',
		'getAlertDetails'
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
        <script type="text/javascript" src="scripts/mootools-1.11.js"></script>
        <script type="text/javascript" src="scripts/demos.js"></script>
	</head>

	<body>
		<?php include_once('scripts/geshi.php'); ?>

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
					<li><a href="extended.php" class="on">Extended</a></li>
					<li><a href="ajax.php">API Ajax</a></li>
				</ul>
		  </div>
		</div>

		<div id="wrapper">
			<div id="container">
				<div id="content">
					<?php include 'logged.php';?>
					<h2>Extended</h2>
					<?php echo $links; ?>
                    <p id="info">Demo that shows the usage of Payline extended API</p>
                    <?php if(!isset($_POST['submit'])){?>
                    <p id="sourcelinks">
						<a href="#" id="exampleonly">display example only</a>
						<a href="#" id="htmlcode">html code</a> | <a href="#" id="phpcode">php code</a> | <a href="#" id="csscode">css code</a>
					</p>
					<?php } ?>

					<div id="source">
					<?php
					if(isset($_POST['submit'])){
						include('../extended/'.$_POST['submit'].'.php');
					}else{
						?>

						<div class="code" id="php">
							<?php
                            $filename = "../extended/{$selected}.php";
                            $handle = fopen( $filename , 'r' );
                            $source =  fread ($handle, filesize ($filename));
                            $geshi = new GeSHi($source, 'php');
                            echo $geshi->parse_code();
                            ?>
						</div>

						<div class="code" id="html">
							<?php
                            $filename = "../extended/{$selected}Form.php";
                            $handle = fopen( $filename , 'r' );
                            $source =  fread ($handle, filesize ($filename));
							$geshi = new GeSHi($source, 'html4strict');
                            $geshi->enable_keyword_links(false);
							echo $geshi->parse_code();
                            ?>
						</div>

						<div class="code" id="css">
							<?php
                            $filename = 'css/forms.css';
                            $handle = fopen( $filename , 'r' );
                            $source =  fread ($handle, filesize ($filename));
                            $geshi = new GeSHi($source, 'css');
                            echo $geshi->parse_code();
                            ?>
						</div>

						<div id="demo">
							<?php
							include("../extended/{$selected}Form.php");
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