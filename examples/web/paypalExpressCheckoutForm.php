<form action="../demos/web.php?e=paypalExpressCheckout" method="post" class="payline-form">
	<fieldset>
		<h4>Do Web Payment minimal informations</h4>
		<div class="row">
			<label for="ref">Order reference</label>
			<input type="text" name="ref" id="ref" value="<?php echo 'PHP'.time()?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="amount">Payment amount</label>
			<input type="text" name="amount" id="amount" value="<?php echo $_SESSION['PAYMENT_AMOUNT'];?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="currency">Payment currency</label>
			<input type="text" name="currency" id="currency" value="<?php echo $_SESSION['PAYMENT_CURRENCY'];?>">
			<span class="help">(required)</span>
		</div>
	</fieldset>
	<fieldset>
		<h4>Paypal informations</h4>
		<div class="row">
			<label for="ref">Paypal contract number</label>
			<input type="text" name="paypalContractNumber" id="paypalContractNumber" value="">
			<span class="help">(required)</span>
		</div>
	</fieldset>
	<fieldset>
	<input type="submit" name="submit" class="submit" value="paypalExpressCheckout">
</form>
