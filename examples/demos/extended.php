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
	</head>

	<body>
	<?php
	include 'logged.php';
	?>
		<div id="wrapper" class="plnBox">
		<div id="header">
		<?php
		$activeTab = 'extended';
		include 'tabs.php';
		?>
		</div>
			<div id="container">
					<?php
					echo $links;
					if(isset($_POST['submit'])){
						include('../extended/'.$_POST['submit'].'.php');
					}else{
						?>
						<div id="demo">
							<?php
							include("../extended/{$selected}Form.php");
							?>
						</div>
					<?php } ?>
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