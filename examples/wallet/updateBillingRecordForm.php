<form action="../demos/wallet.php" method="post" class="payline-form" name="updateBillingRecord" id="updateBillingRecord">
	<fieldset>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>" />
		</div>
		<div class="row">
			<label for="paymentRecordId">Payment record ID</label>
			<input type="text" name="paymentRecordId" id="paymentRecordId" value="" />
		</div>
		<div class="row">
			<label for="billingRecordId">Billing record ID</label>
			<input type="text" name="billingRecordId" id="billingRecordId" value="" />
		</div>
		<?php
    $displayedPage = 'updateBillingRecord';
		include '../fieldset/billingRecord.php';
		?>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="updateBillingRecord">
</form>