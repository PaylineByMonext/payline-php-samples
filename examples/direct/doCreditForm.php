<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'doCredit';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/card.php';
	include '../fieldset/comment.php';
	include '../fieldset/order.php';
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/media.php';
	include '../fieldset/subMerchant.php';
	?>
    <input type="submit" name="submit" class="submit" value="doCredit" />
</form>
