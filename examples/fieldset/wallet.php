<fieldset>
	<h4>Wallet informations</h4>
		<div class="row">
			<label for="walletId">Wallet ID</label>
			<input type="text" name="walletId" id="walletId" value="<?php echo $_SESSION['buyerWalletId'] ?>">
		</div>
		<div class="row">
			<label for="walletlastName">Last name</label>
			<input type="text" name="walletlastName" id="walletlastName" value="<?php echo $_SESSION['buyerLastName'] ?>">
		</div>
		<div class="row">
			<label for="walletFirstName">First name</label>
			<input type="text" name="walletFirstName" id="walletFirstName" value="<?php echo $_SESSION['buyerFirstName'] ?>">
		</div>
		<div class="row">
			<label for="walletEmail">Email</label>
			<input type="text" name="walletEmail" id="walletEmail" value="<?php echo $_SESSION['buyerEmail'] ?>">
		</div>
		<fieldset>
			<div class="row">
		       	<h5>Shipping address</h5>
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressName">Name</label>
		   		<input type="text" name="walletAddressName" id="walletAddressName" value="<?php echo $_SESSION['billingAddressName'] ?>" />
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressStreet1">Street 1</label>
		   		<input type="text" name="walletAddressStreet1" id="walletAddressStreet1" value="<?php echo $_SESSION['billingAddressStreet1'] ?>" />
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressStreet2">Street 2</label>
		   		<input type="text" name="walletAddressStreet2" id="walletAddressStreet2" value="<?php echo $_SESSION['billingAddressStreet2'] ?>" />
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressCity">City</label>
		   		<input type="text" name="walletAddressCity" id="walletAddressCity" value="<?php echo $_SESSION['billingAddressCity'] ?>" />
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressZipCode">Zip code</label>
		   		<input type="text" name="walletAddressZipCode" id="walletAddressZipCode" value="<?php echo $_SESSION['billingAddressZipCode'] ?>" />
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressCountry">Country</label>
		   		<input type="text" name="walletAddressCountry" id="walletAddressCountry" value="<?php echo $_SESSION['billingAddressCountry'] ?>" />
		   	</div>
		   	<div class="row">
		   		<label for="walletAddressPhone">Phone</label>
		   		<input type="text" name="walletAddressPhone" id="walletAddressPhone" value="<?php echo $_SESSION['billingAddressPhone'] ?>" />
		   	</div>
		</fieldset>
		<?php include 'card.php'?>
		<div class="row">
			<label for="walletComment">Comment</label>
			<input type="text" name="walletComment" id="walletComment" value="">
		</div>
		<div class="row">
			<label for="walletDefault">Set this card as default</label>
			<input type="checkbox" name="walletDefault" id="walletDefault" value="1">
		</div>
		<div class="row">
			<label for="cardBrand">Card brand</label>
			<select	name="cardBrand" id="cardBrand">
				<option value="0">0 (CB)</option>
				<option value="1">1 (VISA)</option>
				<option value="4">4 (MASTERCARD)</option>
				<option value="5">5 (MAESTRO)</option>
				<option value="8">8 (BCMC)</option>
			</select>
		</div>
</fieldset>