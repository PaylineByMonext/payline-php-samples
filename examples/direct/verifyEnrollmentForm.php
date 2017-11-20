<form action="../demos/direct.php" method="post" class="payline-form">
		<?php
        $displayedPage = 'verifyEnrollment';
		include '../fieldset/version.php';
		include '../fieldset/card.php';
		include '../fieldset/payment.php';
        include '../fieldset/merchantName.php';
		?>
		<fieldset>
			<div class="row">
				<label for="orderRef">Order reference</label>
				<input type="text" name="orderRef" id="orderRef" value="<?php echo 'PHP'.time()?>">
			</div>
		</fieldset>
		<fieldset>
			<div class="row">
				<label for="mdFieldValue">MD</label>
				<input type="text" name="mdFieldValue" id="mdFieldValue" value="">
			</div>
		</fieldset>
		<fieldset>
			<div class="row">
				<label for="UsrAgent">User Agent</label>
				<input type="text" name="UsrAgent" id="UsrAgent" value="">
			</div>
		</fieldset>
		<fieldset>
			<div class="row">
				<label for="walletId">Wallet ID</label>
				<input type="text" name="walletId" id="walletId" value="">
			</div>
		</fieldset>
		<fieldset>
			<div class="row">
				<label for="walletCardInd">Wallet card index</label>
				<input type="text" name="walletCardInd" id="walletCardInd" value="">
			</div>
		</fieldset>
		<fieldset>
			<div class="row">
				<label for="generateVirtualCvx">Generate virtual CVX</label>
        		<select	name="generateVirtualCvx" id="generateVirtualCvx">
        			<option value=""></option>
        			<option value="true">true</option>
        			<option value="false">false</option>
        		</select>
			</div>
		</fieldset>
	<input type="submit" name="submit" class="submit" value="verifyEnrollment">
</form>
