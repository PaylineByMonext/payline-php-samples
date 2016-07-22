<?php
use Payline\PaylineSDK;

include "../../include.php";
$array = array(
    'about',
    'configuration',
    'transactions',
    'paymentRecords'
);
$selected = isset($_GET['e']) && in_array($_GET['e'], $array) ? $_GET['e'] : $array[0];
$selected = isset($_POST['submit']) ? $_POST['submit'] : $selected;

$links = '<h3>';
foreach ($array as $v)
    $links .= ($v == $selected) ? "<a class='backtoform' href='?e=$v'>$v</a> - " : "<a href='?e=$v'>$v</a> - ";
$links = substr($links, 0, - 2) . '</h3>';
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
				<h1>
					<a href="http://www.payline.com"><span>payline</span></a>
				</h1>
				<p>by Monext</p>
			</div>
			<ul id="menu">
				<li><a href="index.php" class="on">Home</a></li>
				<li><a href="web.php">Web</a></li>
				<li><a href="direct.php">Direct</a></li>
				<li><a href="wallet.php">Wallet</a></li>
				<li><a href="extended.php">Extended</a></li>
				<li><a href="ajax.php">API Ajax</a></li>
			</ul>
		</div>
	</div>

	<div id="wrapper">
		<div id="container">
			<div id="content">
				<?php include 'logged.php';?>
				<h2>Home</h2>
	<?php
    echo $links;
    
    if (isset($_GET['res_upd'])) {
        if ($_GET['res_upd'] == 0) {
            echo "<h4 style='color:green'>Configuration is saved</h4>";
        } elseif ($_GET['res_upd'] == 1) {
            echo "<h4 style='color:red'>Identifiants incorrects</h4>";
        } elseif ($_GET['res_upd'] == 2) {
            echo "<h4 style='color:red'>Erreur de connexion &agrave; la base</h4>";
        } elseif ($_GET['res_upd'] == 3) {
            echo "<h4 style='color:red'>Erreur lors de la mise &agrave; jour</h4>";
        }
    }
    ?>
					<div id="source">
					<div id="demo">
	<?php
    include ("../index/{$selected}.php");
    ?>
						</div>
				</div>
			</div>
			<span class="clr"></span>
		</div>
	</div>

	<div id="footer">
		<div id="footer-inside">
			<a href="http://www.monext.net/" class="copy"></a>
			<p><?php echo PaylineSDK::SDK_RELEASE.'&nbsp;&nbsp;-&nbsp;&nbsp;copyright &copy; '.date('Y')?>
			<a href="http://www.monext.net/">Monext</a>
			</p>
		</div>
	</div>
</body>
</html>
