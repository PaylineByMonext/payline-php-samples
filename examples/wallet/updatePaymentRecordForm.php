<form action="../demos/wallet.php" method="post" class="payline-form">
	<?php
    $displayedPage = 'updatePaymentRecord';
    include '../fieldset/version.php';
  ?>
	<fieldset>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>" />
		</div>
		<div class="row">
			<label for="paymentRecordId">Payment record ID</label>
			<input type="text" name="paymentRecordId" id="paymentRecordId" value="" />
		</div>
	</fieldset>
	<?php include '../fieldset/recurringForUpdate.php' ?>
	<input type="submit" name="submit" class="submit" value="updatePaymentRecord">
</form>