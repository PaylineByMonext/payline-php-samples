<form action="../demos/wallet.php" method="post" class="payline-form" name="getBillingRecord" id="getBillingRecord">
	<fieldset>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php if(isset($_GET['contractNumber'])) echo $_GET['contractNumber']; else echo $_SESSION['CONTRACT_NUMBER'];?>" />
		</div>
		<div class="row">
			<label for="paymentRecordId">Payment record ID</label>
			<input type="text" name="paymentRecordId" id="paymentRecordId" value="<?php if(isset($_GET['paymentRecordId'])) echo $_GET['paymentRecordId'];?>" />
		</div>
		<div class="row">
			<label for="billingRecordId">Billing record ID</label>
			<input type="text" name="billingRecordId" id="billingRecordId" value="<?php if(isset($_GET['billingRecordId'])) echo $_GET['billingRecordId'];?>" />
		</div>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="getBillingRecord">
</form>