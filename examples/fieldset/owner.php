<fieldset>
	<h4>Informations about owner (only used by an AMEX payment)</h4>
	<div class="row">
		<label for="ownerLastName">Last name</label>
		<input type="text" name="ownerLastName" id="ownerLastName" value="<?php echo $_SESSION['buyerLastName'] ?>" />
	</div>
	<div class="row">
		<label for="ownerFirstName">First name</label>
		<input type="text" name="ownerFirstName" id="ownerFirstName" value="<?php echo $_SESSION['buyerFirstName'] ?>" />
	</div>
	<div class="row">
		<label for="issueCardDate">Card issue date</label>
		<input type="text" name="issueCardDate" id="issueCardDate" value="01<?php echo date('y')-1?>" />
	</div>
	<div class="row">
		<h5>Owner billing address</h5>
	</div>
	<div class="row">
		<label for="ownerStreet">Street</label>
		<input type="text" name="ownerStreet" id="ownerStreet" value="<?php echo substr($_SESSION['billingAddressStreet1'],0,20) ?>" />
	</div>
	<div class="row">
		<label for="ownerCityName">City name</label>
		<input type="text" name="ownerCityName" id="ownerCityName" value="<?php echo $_SESSION['billingAddressCity'] ?>" />
	</div>
	<div class="row">
		<label for="ownerZipCode">Zip code</label>
		<input type="text" name="ownerZipCode" id="ownerZipCode" value="<?php echo $_SESSION['billingAddressZipCode'] ?>" />
	</div>
	<div class="row">
		<label for="ownerCountry">Country</label>
		<input type="text" name="ownerCountry" id="ownerCountry" value="<?php echo $_SESSION['billingAddressCountry'] ?>" />
	</div>
	<div class="row">
		<label for="ownerPhone">Phone</label>
		<input type="text" name="ownerPhone" id="ownerPhone" value="<?php echo $_SESSION['billingAddressPhone'] ?>" />
	</div>
</fieldset>