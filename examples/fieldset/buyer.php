<script type="text/javascript">
	function clearSampleBuyer(){
		document.getElementById('buyerTitle').value= '';
		document.getElementById('buyerLegalStatus').value= '';
		document.getElementById('buyerLastName').value= '';
		document.getElementById('buyerFirstName').value= '';
		document.getElementById('buyerEmail').value= '';
		document.getElementById('billingAddressTitle').value= '';
		document.getElementById('billingAddressFirstName').value= '';
		document.getElementById('billingAddressLastName').value= '';
		document.getElementById('billingAddressName').value= '';
		document.getElementById('billingAddressStreet1').value= '';
		document.getElementById('billingAddressStreet2').value= '';
		document.getElementById('billingAddressCity').value= '';
		document.getElementById('billingAddressZipCode').value= '';
		document.getElementById('billingAddressCountry').value= '';
		document.getElementById('billingAddressCounty').value= '';		
		document.getElementById('billingAddressState').value= '';
		document.getElementById('billingAddressPhoneType').value= '';
		document.getElementById('billingAddressPhone').value= '';
		document.getElementById('shippingAddressTitle').value= '';
		document.getElementById('shippingAddressFirstName').value= '';
		document.getElementById('shippingAddressLastName').value= '';
		document.getElementById('shippingAddressName').value= '';
		document.getElementById('shippingAddressStreet1').value= '';
		document.getElementById('shippingAddressStreet2').value= '';
		document.getElementById('shippingAddressCity').value= '';
		document.getElementById('shippingAddressZipCode').value= '';
		document.getElementById('shippingAddressCountry').value= '';
		document.getElementById('shippingAddressCounty').value= '';		                         
		document.getElementById('shippingAddressState').value= '';
		document.getElementById('shippingAddressPhoneType').value= '';
		document.getElementById('shippingAddressPhone').value= '';
		document.getElementById('buyerAccountCreateDate').value= '';
		document.getElementById('buyerAverageAmount').value= '';
		document.getElementById('buyerOrderCount').value= '';
		document.getElementById('buyerWalletId').value= '';
		document.getElementById('buyerWalletCardInd').value= '';
		document.getElementById('buyerWalletSecured').value= '';
		document.getElementById('buyerIp').value= '';
		document.getElementById('mobilePhone').value= '';
		document.getElementById('customerId').value= '';
		document.getElementById('legalDocument').value= '';
		document.getElementById('fingerprintID').value= '';
		document.getElementById('deviceFingerprint').value= '';
		document.getElementById('birthDate').value= '';
        document.getElementById('isBot').value= '';
        document.getElementById('isIncognito').value= '';
        document.getElementById('isBehindProxy').value= '';
        document.getElementById('isFromTor').value= '';
        document.getElementById('isEmulator').value= '';
        document.getElementById('isRooted').value= '';
        document.getElementById('hasTimezoneMismatch').value= '';
        document.getElementById('shippingStreetNumber').value= '';
        document.getElementById('shippingAddressCreateDate').value= '';
        document.getElementById('shippingEmail').value= '';
        document.getElementById('billingEmail').value= '';
        document.getElementById('billingAddressCreateDate').value= '';
        document.getElementById('billingStreetNumber').value= '';
        document.getElementById('buyerExtended').value= '';
        document.getElementById('merchantAuthentication').value= '';
        document.getElementById('loyaltyMemberType').value= '';
    }
</script>

<fieldset>
	<h4>Informations about buyer</h4>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerLegalStatus">Legal status</label>
		<select	name="buyerLegalStatus" id="buyerLegalStatus">
			<option value=""></option>
			<option value="1" <?php if($_SESSION['buyerLegalStatus'] == "1") echo "selected";?>>1 (Person)</option>
			<option value="2" <?php if($_SESSION['buyerLegalStatus'] == "2") echo "selected";?>>2 (Company)</option>
		</select>
		<input type="button" class="submit" value="clear buyer data" onclick="clearSampleBuyer()" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerTitle">Title</label>
		<select	name="buyerTitle" id="buyerTitle">
			<option value=""></option>
			<option value="1" <?php if($_SESSION['buyerTitle'] == "1") echo "selected";?>>Mme - Madame</option>
			<option value="2" <?php if($_SESSION['buyerTitle'] == "2") echo "selected";?>>Mmes - Mesdames</option>
			<option value="3" <?php if($_SESSION['buyerTitle'] == "3") echo "selected";?>>Mlle - Mademoiselle</option>
			<option value="4" <?php if($_SESSION['buyerTitle'] == "4") echo "selected";?>>M. - Monsieur</option>
			<option value="5" <?php if($_SESSION['buyerTitle'] == "5") echo "selected";?>>MM. - Messieurs</option>
			<option value="6" <?php if($_SESSION['buyerTitle'] == "6") echo "selected";?>>Vve - Veuve</option>
			<option value="7" <?php if($_SESSION['buyerTitle'] == "7") echo "selected";?>>Dr - Docteur</option>
			<option value="8" <?php if($_SESSION['buyerTitle'] == "8") echo "selected";?>>Drs - Docteurs</option>
			<option value="9" <?php if($_SESSION['buyerTitle'] == "9") echo "selected";?>>Pr - Professeur</option>
			<option value="10" <?php if($_SESSION['buyerTitle'] == "10") echo "selected";?>>Me - Ma&icirc;tre</option>
			<option value="11" <?php if($_SESSION['buyerTitle'] == "11") echo "selected";?>>Mes - Ma&icirc;tres</option>
			<option value="12" <?php if($_SESSION['buyerTitle'] == "12") echo "selected";?>>Mgr - Monseigneur</option>
		</select>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerLastName">Last name</label>
		<input type="text" name="buyerLastName" id="buyerLastName" value="<?php echo $_SESSION['buyerLastName'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerFirstName">First name</label>
		<input type="text" name="buyerFirstName" id="buyerFirstName" value="<?php echo $_SESSION['buyerFirstName'] ?>" />
		<span class="help">(required unique wallet ID if is set)</span>
	</div>
	<div class="row">
		<label for="buyerEmail">email</label>
		<input type="text" name="buyerEmail" id="buyerEmail" value="<?php echo $_SESSION['buyerEmail'] ?>" />
	</div>
	<table style='width: 100%;'>
		<tr>
			<td>
				<fieldset>
					<div class="row">
			        	<h5>Billing address</h5>
			        </div>
			        <div class="row">
			            <label for="billingAddressTitle">Title</label>
                		<select	name="billingAddressTitle" id="billingAddressTitle">
                			<option value=""></option>
                			<option value="1" <?php if($_SESSION['billingAddressTitle'] == "1") echo "selected";?>>Mme - Madame</option>
                			<option value="2" <?php if($_SESSION['billingAddressTitle'] == "2") echo "selected";?>>Mmes - Mesdames</option>
                			<option value="3" <?php if($_SESSION['billingAddressTitle'] == "3") echo "selected";?>>Mlle - Mademoiselle</option>
                			<option value="4" <?php if($_SESSION['billingAddressTitle'] == "4") echo "selected";?>>M. - Monsieur</option>
                			<option value="5" <?php if($_SESSION['billingAddressTitle'] == "5") echo "selected";?>>MM. - Messieurs</option>
                			<option value="6" <?php if($_SESSION['billingAddressTitle'] == "6") echo "selected";?>>Vve - Veuve</option>
                			<option value="7" <?php if($_SESSION['billingAddressTitle'] == "7") echo "selected";?>>Dr - Docteur</option>
                			<option value="8" <?php if($_SESSION['billingAddressTitle'] == "8") echo "selected";?>>Drs - Docteurs</option>
                			<option value="9" <?php if($_SESSION['billingAddressTitle'] == "9") echo "selected";?>>Pr - Professeur</option>
                			<option value="10" <?php if($_SESSION['billingAddressTitle'] == "10") echo "selected";?>>Me - Ma&icirc;tre</option>
                			<option value="11" <?php if($_SESSION['billingAddressTitle'] == "11") echo "selected";?>>Mes - Ma&icirc;tres</option>
                			<option value="12" <?php if($_SESSION['billingAddressTitle'] == "12") echo "selected";?>>Mgr - Monseigneur</option>
                		</select>
			        </div>
			        <div class="row">
			            <label for="billingAddressFirstName">First name</label>
			            <input type="text" name="billingAddressFirstName" id="billingAddressFirstName" value="<?php echo $_SESSION['billingAddressFirstName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressLastName">Last name</label>
			            <input type="text" name="billingAddressLastName" id="billingAddressLastName" value="<?php echo $_SESSION['billingAddressLastName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressName">Name</label>
			            <input type="text" name="billingAddressName" id="billingAddressName" value="<?php echo $_SESSION['billingAddressName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressStreet1">Street 1</label>
			            <input type="text" name="billingAddressStreet1" id="billingAddressStreet1" value="<?php echo $_SESSION['billingAddressStreet1'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressStreet2">Street 2</label>
			            <input type="text" name="billingAddressStreet2" id="billingAddressStreet2" value="<?php echo $_SESSION['billingAddressStreet2'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressCity">City</label>
			            <input type="text" name="billingAddressCity" id="billingAddressCity" value="<?php echo $_SESSION['billingAddressCity'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressZipCode">Zip code</label>
			            <input type="text" name="billingAddressZipCode" id="billingAddressZipCode" value="<?php echo $_SESSION['billingAddressZipCode'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressCountry">Country</label>
			            <input type="text" name="billingAddressCountry" id="billingAddressCountry" value="<?php echo $_SESSION['billingAddressCountry'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressCounty">County</label>
			            <input type="text" name="billingAddressCounty" id="billingAddressCounty" value="<?php echo $_SESSION['billingAddressCounty'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressState">State</label>
			            <input type="text" name="billingAddressState" id="billingAddressState" value="<?php echo $_SESSION['billingAddressState'] ?>" />
			        </div>
			        <div class="row">
			            <label for="billingAddressPhoneType">Phone type</label>
			            <select	name="billingAddressPhoneType" id="billingAddressPhoneType">
			            	<option value=""></option>
							<option value="0" <?php if($_SESSION['billingAddressPhoneType'] == "0") echo "selected";?>>0 (Undefined)</option>
							<option value="1" <?php if($_SESSION['billingAddressPhoneType'] == "1") echo "selected";?>>1 (Home Phone)</option>
							<option value="2" <?php if($_SESSION['billingAddressPhoneType'] == "2") echo "selected";?>>2 (Work Phone)</option>
							<option value="3" <?php if($_SESSION['billingAddressPhoneType'] == "3") echo "selected";?>>3 (Messages)</option>
							<option value="4" <?php if($_SESSION['billingAddressPhoneType'] == "4") echo "selected";?>>4 (Billing Phone)</option>
							<option value="5" <?php if($_SESSION['billingAddressPhoneType'] == "5") echo "selected";?>>5 (Temporary Phone)</option>
							<option value="6" <?php if($_SESSION['billingAddressPhoneType'] == "6") echo "selected";?>>6 (Mobile Phone Code)</option>
						</select>
			        </div>
			        <div class="row">
			            <label for="billingStreetNumber">Street number</label>
			            <input type="text" name="billingStreetNumber" id="billingStreetNumber" value="<?php echo $_SESSION['billingStreetNumber'] ?>" />
			        </div>
                    <div class="row">
                        <label for="billingAddressCreateDate">Address create date</label>
                        <input type="text" name="billingAddressCreateDate" id="billingAddressCreateDate" value="<?php echo $_SESSION['billingAddressCreateDate'] ?>" />
                    </div>
                    <div class="row">
                        <label for="billingEmail">Email</label>
                        <input type="text" name="billingEmail" id="billingEmail" value="<?php echo $_SESSION['billingEmail'] ?>" />
                    </div>
			    </fieldset>
			</td>
			<td>
				<fieldset>
					<div class="row">
			        	<h5>Shipping address</h5>
			        </div>
			        <div class="row">
			            <label for="shippingAddressTitle">Title</label>
                		<select	name="shippingAddressTitle" id="shippingAddressTitle">
                			<option value=""></option>
                			<option value="1" <?php if($_SESSION['shippingAddressTitle'] == "1") echo "selected";?>>Mme - Madame</option>
                			<option value="2" <?php if($_SESSION['shippingAddressTitle'] == "2") echo "selected";?>>Mmes - Mesdames</option>
                			<option value="3" <?php if($_SESSION['shippingAddressTitle'] == "3") echo "selected";?>>Mlle - Mademoiselle</option>
                			<option value="4" <?php if($_SESSION['shippingAddressTitle'] == "4") echo "selected";?>>M. - Monsieur</option>
                			<option value="5" <?php if($_SESSION['shippingAddressTitle'] == "5") echo "selected";?>>MM. - Messieurs</option>
                			<option value="6" <?php if($_SESSION['shippingAddressTitle'] == "6") echo "selected";?>>Vve - Veuve</option>
                			<option value="7" <?php if($_SESSION['shippingAddressTitle'] == "7") echo "selected";?>>Dr - Docteur</option>
                			<option value="8" <?php if($_SESSION['shippingAddressTitle'] == "8") echo "selected";?>>Drs - Docteurs</option>
                			<option value="9" <?php if($_SESSION['shippingAddressTitle'] == "9") echo "selected";?>>Pr - Professeur</option>
                			<option value="10" <?php if($_SESSION['shippingAddressTitle'] == "10") echo "selected";?>>Me - Ma&icirc;tre</option>
                			<option value="11" <?php if($_SESSION['shippingAddressTitle'] == "11") echo "selected";?>>Mes - Ma&icirc;tres</option>
                			<option value="12" <?php if($_SESSION['shippingAddressTitle'] == "12") echo "selected";?>>Mgr - Monseigneur</option>
                		</select>
			        </div>
			        <div class="row">
			            <label for="shippingAddressFirstName">First name</label>
			            <input type="text" name="shippingAddressFirstName" id="shippingAddressFirstName" value="<?php echo $_SESSION['shippingAddressFirstName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressLastName">Last name</label>
			            <input type="text" name="shippingAddressLastName" id="shippingAddressLastName" value="<?php echo $_SESSION['shippingAddressLastName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressName">Name</label>
			            <input type="text" name="shippingAddressName" id="shippingAddressName" value="<?php echo $_SESSION['shippingAddressName'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressStreet1">Street 1</label>
			            <input type="text" name="shippingAddressStreet1" id="shippingAddressStreet1" value="<?php echo $_SESSION['shippingAddressStreet1'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressStreet2">Street 2</label>
			            <input type="text" name="shippingAddressStreet2" id="shippingAddressStreet2" value="<?php echo $_SESSION['shippingAddressStreet2'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressCity">City</label>
			            <input type="text" name="shippingAddressCity" id="shippingAddressCity" value="<?php echo $_SESSION['shippingAddressCity'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressZipCode">Zip code</label>
			            <input type="text" name="shippingAddressZipCode" id="shippingAddressZipCode" value="<?php echo $_SESSION['shippingAddressZipCode'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressCountry">Country</label>
			            <input type="text" name="shippingAddressCountry" id="shippingAddressCountry" value="<?php echo $_SESSION['shippingAddressCountry'] ?>" />
			        </div>
			        
			        <div class="row">
			            <label for="shippingAddressCounty">County</label>
			            <input type="text" name="shippingAddressCounty" id="shippingAddressCounty" value="<?php echo $_SESSION['shippingAddressCounty'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressState">State</label>
			            <input type="text" name="shippingAddressState" id="shippingAddressState" value="<?php echo $_SESSION['shippingAddressState'] ?>" />
			        </div>
			        <div class="row">
			            <label for="shippingAddressPhoneType">Phone type</label>
			            <select	name="shippingAddressPhoneType" id="shippingAddressPhoneType">
			            	<option value=""></option>
							<option value="0" <?php if($_SESSION['shippingAddressPhoneType'] == "0") echo "selected";?>>0 (Undefined)</option>
							<option value="1" <?php if($_SESSION['shippingAddressPhoneType'] == "1") echo "selected";?>>1 (Home Phone)</option>
							<option value="2" <?php if($_SESSION['shippingAddressPhoneType'] == "2") echo "selected";?>>2 (Work Phone)</option>
							<option value="3" <?php if($_SESSION['shippingAddressPhoneType'] == "3") echo "selected";?>>3 (Messages)</option>
							<option value="4" <?php if($_SESSION['shippingAddressPhoneType'] == "4") echo "selected";?>>4 (Billing Phone)</option>
							<option value="5" <?php if($_SESSION['shippingAddressPhoneType'] == "5") echo "selected";?>>5 (Temporary Phone)</option>
							<option value="6" <?php if($_SESSION['shippingAddressPhoneType'] == "6") echo "selected";?>>6 (Mobile Phone Code)</option>
						</select>
			        </div>
			        <div class="row">
			            <label for="shippingAddressPhone">Phone</label>
			            <input type="text" name="shippingAddressPhone" id="shippingAddressPhone" value="<?php echo $_SESSION['shippingAddressPhone'] ?>" />
			        </div>
                    <div class="row">
                        <label for="shippingStreetNumber">Street number</label>
                        <input type="text" name="shippingStreetNumber" id="shippingStreetNumber" value="<?php echo $_SESSION['shippingStreetNumber'] ?>" />
                    </div>
                    <div class="row">
                        <label for="shippingAddressCreateDate">Address create date</label>
                        <input type="text" name="shippingAddressCreateDate" id="shippingAddressCreateDate" value="<?php echo $_SESSION['shippingAddressCreateDate'] ?>" />
                    </div>
                    <div class="row">
                        <label for="shippingEmail">Email</label>
                        <input type="text" name="shippingEmail" id="shippingEmail" value="<?php echo $_SESSION['shippingEmail'] ?>" />
                    </div>
			    </fieldset>
			</td>
		</tr>
	</table>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerAccountCreateDate">Account create date</label>
		<input type="text" name="buyerAccountCreateDate" id="buyerAccountCreateDate" value="<?php echo $_SESSION['buyerAccountCreateDate'] ?>" />
		<span class="help">(format : "dd/mm/yy")</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerAverageAmount">Average amount</label>
		<input type="text" name="buyerAverageAmount" id="buyerAverageAmount" value="<?php echo $_SESSION['buyerAverageAmount'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerOrderCount">Order count</label>
		<input type="text" name="buyerOrderCount" id="buyerOrderCount" value="<?php echo $_SESSION['buyerOrderCount'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerWalletId">Wallet ID</label>
		<input type="text" name="buyerWalletId" id="buyerWalletId" value="<?php echo $_SESSION['buyerWalletId'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerWalletDisplayed">Display Wallet</label>
		<select	name="buyerWalletDisplayed" id="buyerWalletDisplayed">
			<option value="">yes</option>
			<option value="none" <?php if($_SESSION['buyerWalletDisplayed'] == "none") echo "selected";?>>no</option>
		</select>
		<span class="help">(choose wether to display wallet on web payment page or not)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerWalletSecured">Wallet security</label>
		<select	name="buyerWalletSecured" id="buyerWalletSecured">
			<option value=""></option>
			<option value="CVV" <?php if($_SESSION['buyerWalletSecured'] == "CVV") echo "selected";?>>CVV</option>
			<option value="3DS" <?php if($_SESSION['buyerWalletSecured'] == "3DS") echo "selected";?>>3DS</option>
			<option value="CVV+3DS" <?php if($_SESSION['buyerWalletSecured'] == "CVV+3DS") echo "selected";?>>CVV+3DS</option>
		</select>
		<span class="help">(corresponding CVV will have to be filled by the buyer)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerWalletCardInd">Wallet card index</label>
		<input type="text" name="buyerWalletCardInd" id="buyerWalletCardInd" value="<?php echo $_SESSION['buyerWalletCardInd'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="buyerIp">IP</label>
		<input type="text" name="buyerIp" id="buyerIp" value="<?php echo $_SESSION['buyerIp'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="mobilePhone">Mobile phone</label>
		<input type="text" name="mobilePhone" id="mobilePhone" value="<?php echo $_SESSION['mobilePhone'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="customerId">Customer ID</label>
		<input type="text" name="customerId" id="customerId" value="<?php echo $_SESSION['customerId'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="legalDocument">Legal document</label>
		<select	name="legalDocument" id="legalDocument">
			<option value=""></option>
			<option value="1" <?php if($_SESSION['legalDocument'] == "1") echo "selected";?>>1 (CPF)</option>
			<option value="2" <?php if($_SESSION['legalDocument'] == "2") echo "selected";?>>2 (CNPJ)</option>
			<option value="3" <?php if($_SESSION['legalDocument'] == "3") echo "selected";?>>3 (RG)</option>
			<option value="4" <?php if($_SESSION['legalDocument'] == "4") echo "selected";?>>4 (IE)</option>
			<option value="5" <?php if($_SESSION['legalDocument'] == "5") echo "selected";?>>5 (Passport)</option>
			<option value="6" <?php if($_SESSION['legalDocument'] == "6") echo "selected";?>>6 (CTPS)</option>
			<option value="7" <?php if($_SESSION['legalDocument'] == "7") echo "selected";?>>7 (Voter ID Card)</option>
		</select>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="birthDate">Birth date</label>
		<input type="text" name="birthDate" id="birthDate" value="<?php echo $_SESSION['birthDate'] ?>" />
		<span class="help">(format : "yyyy-mm-dd")</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="fingerprintID">Finger print ID</label>
		<input type="text" name="fingerprintID" id="fingerprintID" value="<?php echo $_SESSION['fingerprintID'] ?>" />
	</div>	
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="deviceFingerprint">deviceFingerprint</label>
		<input type="text" name="deviceFingerprint" id="deviceFingerprint" value="<?php echo $_SESSION['deviceFingerprint'] ?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="isBot">isBot</label>
		<input type="text" name="isBot" id="isBot" value="<?php echo $_SESSION['isBot'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="isIncognito">isIncognito</label>
		<input type="text" name="isIncognito" id="isIncognito" value="<?php echo $_SESSION['isIncognito'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="isBehindProxy">isBehindProxy</label>
		<input type="text" name="isBehindProxy" id="isBehindProxy" value="<?php echo $_SESSION['isBehindProxy'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="isFromTor">isFromTor</label>
		<input type="text" name="isFromTor" id="isFromTor" value="<?php echo $_SESSION['isFromTor'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="isEmulator">isEmulator</label>
		<input type="text" name="isEmulator" id="isEmulator" value="<?php echo $_SESSION['isEmulator'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="isRooted">isRooted</label>
		<input type="text" name="isRooted" id="isRooted" value="<?php echo $_SESSION['isRooted'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="hasTimezoneMismatch">hasTimezoneMismatch</label>
		<input type="text" name="hasTimezoneMismatch" id="hasTimezoneMismatch" value="<?php echo $_SESSION['hasTimezoneMismatch'] ?>" />
		<span class="help">(Y/N)</span>
	</div>
    <div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
        <label for="buyerExtended">buyerExtended</label>
        <input type="text" name="buyerExtended" id="buyerExtended" value="<?php echo $_SESSION['buyerExtended'] ?>" />
    </div>
    <div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
        <label for="loyaltyMemberType">loyaltyMemberType</label>
        <input type="text" name="loyaltyMemberType" id="loyaltyMemberType" value="<?php echo $_SESSION['loyaltyMemberType'] ?>" />
    </div>
    <div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
        <label for="merchantAuthentication">merchantAuthentication</label>
        <input type="text" name="merchantAuthentication" id="merchantAuthentication" value="<?php echo $_SESSION['merchantAuthentication'] ?>" />
    </div>
</fieldset>
