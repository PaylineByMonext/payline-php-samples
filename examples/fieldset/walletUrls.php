<fieldset>
	<h4>Wallet action URL's</h4>
	<div class="row">
		<label for="walletNotificationURL">Notification url</label>
		<input type="text" name="walletNotificationURL" id="walletNotificationURL" value="<?php echo $_SESSION['WLT_NOTIFICATION_URL']?>">
		<span class="help">(valid url like http:// or https://)</span>
	</div>
	<div class="row">
		<label for="walletReturnURL">Return url</label>
		<input type="text" name="walletReturnURL" id="walletReturnURL" value="<?php echo $_SESSION['WLT_RETURN_URL']?>">
		<span class="help">(valid url like http:// or https://)</span>
	</div>
	<div class="row">
		<label for="walletCancelURL">Cancel url</label>
		<input type="text" name="walletCancelURL" id="walletCancelURL" value="<?php echo $_SESSION['WLT_CANCEL_URL']?>">
		<span class="help">(valid url like http:// or https://)</span>
	</div>
</fieldset>			