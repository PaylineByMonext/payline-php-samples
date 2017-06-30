<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'doRefund';
	include '../fieldset/version.php';
	include '../fieldset/transactionId.php';
	include '../fieldset/payment.php';
	include '../fieldset/comment.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/orderDetails.php';
	include '../fieldset/sequenceNumber.php';
	include '../fieldset/media.php';
	?>
	<input type="submit" name="submit" class="submit" value="doRefund" />
</form>
