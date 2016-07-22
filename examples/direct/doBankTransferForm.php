<form action="../demos/direct.php" method="post" class="payline-form">
<?php
	$displayedPage = 'doBankTransfer';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/creditor.php';
	include '../fieldset/comment.php';
	include '../fieldset/transactionId.php';
?>
<fieldset>
	<div class="row">
		<label for="orderId">Order Id</label>
		<input type="text" name="orderId" id="orderId" value="" />
	</div>
</fieldset>
<input type="submit" name="submit" class="submit" value="doBankTransfer">
</form>