<form action="../demos/direct.php" method="post" name="doAuthorization" id="doAuthorization" class="payline-form">
	<?php
	$displayedPage = 'doAuthorization';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/bankAccountData.php';
	include '../fieldset/card.php';
	include '../fieldset/order.php';
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/authentication3DSecure.php';
	include '../fieldset/media.php';
	include '../fieldset/subMerchant.php';
	?>
    <fieldset>
    	<div class="row">
            <label for="asynchronousRetryTimeout">Retry timeout</label>
            <input type="text" name="asynchronousRetryTimeout" id="asynchronousRetryTimeout" value="" />
    	</div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="doAuthorization" />
</form>
