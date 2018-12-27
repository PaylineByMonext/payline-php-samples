<form action="ajax.php" method="post" class="payline-form">
	<fieldset>
		<div class="row">
			<label for="accessKeyRef">web2token ref.</label>
			<input type="text" name="accessKeyRef" id="accessKeyRef" disabled="true" value="<?php echo $_SESSION['ACCESS_KEY_REF']?>">
		</div>
		<div class="row">
			<label for="orderRef">Order reference</label>
			<input type="text" name="orderRef" id="orderRef" value="<?php echo 'AJAX'.time()?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
			<span class="help">(required)</span>
		</div>
	</fieldset>
	<input type="hidden" name="ajaxStep" id="ajaxStep" value="1">
	<input type="submit" name="submit" class="submit" value="next">
</form>
