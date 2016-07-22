<fieldset>
	<div class="row">
		<label for="transactionID">Transaction Id</label>
		<input type="text" name="transactionID" id="transactionID" value="<?php if(isset($_GET['tid'])) echo $_GET['tid']; ?>" />
		<span class="help">(required)</span>
	</div>
</fieldset>