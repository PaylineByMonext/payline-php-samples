<form action="../demos/direct.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'doDebit';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/card.php';
	include '../fieldset/order.php';
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/authentication3DSecure.php';
	include '../fieldset/authorization.php';
	include '../fieldset/media.php';
	include '../fieldset/subMerchant.php';
	?>
    <input type="submit" name="submit" class="submit" value="doDebit" />
</form>
