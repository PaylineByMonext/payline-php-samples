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
	<?php
	include 'logged.php';
	?>
	<div id="wrapper" class="plnBox">
	<div id="header">
    <?php
    $activeTab = 'home';
    include 'tabs.php';
    ?>
	</div>
		<div id="container">
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
        } elseif ($_GET['res_upd'] == 4) {
            echo "<h4 style='color:red'>Erreur lors de la suppression du fichier</h4>";
        }elseif ($_GET['res_upd'] == 5) {
            echo "<h4 style='color:green'>Fichier supprim&eacute;</h4>";
        }elseif ($_GET['res_upd'] == 6) {
            echo "<h4 style='color:red'>Erreur lors de l'upload du fichier</h4>";
        }
    }
    ?>
					<div id="demo">
	<?php
    include ("../index/{$selected}.php");
    ?>
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
