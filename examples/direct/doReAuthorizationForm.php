<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'doReAuthorization';
	include '../fieldset/version.php';
	include '../fieldset/transactionId.php';
	include '../fieldset/payment.php';
	include '../fieldset/order.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/media.php';
	?>
    <input type="submit" name="submit" class="submit" value="doReAuthorization" />
</form>