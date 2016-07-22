<fieldset>
	<h4>Informations about card</h4>
	<div class="row">
		<label for="cardNumber">Encrypted key ID</label>
		<input type="text" name="encryptionKeyId" id="encryptionKeyId" value="" />
	</div>
	<div class="row">
		<label for="cardNumber">Encrypted data</label>
		<input type="text" name="encryptedData" id="encryptedData" value="" />
	</div>
	<div class="row">
		<label for="cardNumber">Card number</label>
		<input type="text" name="cardNumber" id="cardNumber" value="4970100012345670" />
	</div>
	<div class="row">
		<label for="cardType">Card type</label>
		<select name="cardType"	id="cardType">
			<option value="1EURO.COM">1EURO.COM</option>
			<option value="3XCB">3XCB</option>
			<option value="3XONEY">3XONEY</option>
			<option value="3XONEY_SF">3XONEY_SF</option>
			<option value="4XONEY">4XONEY</option>
			<option value="4XONEY_SF">4XONEY_SF</option>
			<option value="AMEX">AMEX</option>
			<option value="AMEX-ONE CLICK">AMEX-ONE CLICK</option>
			<option value="AMEX-REC BILLING">AMEX-REC BILLING</option>
			<option value="ANCV">ANCV</option>
			<option value="AURORE">AURORE</option>
			<option value="BCMC">BCMC</option>
			<option value="BUYSTER">BUYSTER</option>
			<option value="CADEAU_ACCORD">CADEAU_ACCORD</option>
			<option value="CASINO">CASINO</option>
			<option value="CB" selected="true">CB</option>
			<option value="CBPASS">CBPASS</option>
			<option value="CDGP">CDGP</option>
			<option value="CHEQUE">CHEQUE</option>
			<option value="COFINOGA">COFINOGA</option>
			<option value="CYRILLUS">CYRILLUS</option>
			<option value="DINERS">DINERS</option>
			<option value="DISCOVER">DISCOVER</option>
			<option value="ELV">ELV</option>
			<option value="EMONEO">EMONEO</option>
			<option value="FNAC">FNAC</option>
			<option value="GIROPAY">GIROPAY</option>
			<option value="IDEAL">IDEAL</option>
			<option value="ILLICADO">ILLICADO</option>
			<option value="INTERNET+">INTERNET+</option>
			<option value="JCB">JCB</option>
			<option value="KANGOUROU">KANGOUROU</option>
			<option value="LEETCHI">LEETCHI</option>
			<option value="LYDIA">LYDIA</option>
			<option value="MAESTRO">MAESTRO</option>
			<option value="MANDARINE">MANDARINE</option>
			<option value="MASTERCARD">MASTERCARD</option>
			<option value="MASTERCARDPASS">MASTERCARDPASS</option>
			<option value="MASTERPASS">MASTERPASS</option>
			<option value="MAXICHEQUE">MAXICHEQUE</option>
			<option value="MCVISA">MCVISA</option>
			<option value="MONEYCLIC">MONEYCLIC</option>
			<option value="NEOSURF">NEOSURF</option>
			<option value="NETELLER">NETELLER</option>
			<option value="OKSHOPPING">OKSHOPPING</option>
			<option value="PASS">PASS</option>
			<option value="PAYFAIR">PAYFAIR</option>
			<option value="PAYLIB">PAYLIB</option>
			<option value="PAYPAL">PAYPAL</option>
			<option value="PAYSAFECARD">PAYSAFECARD</option>
			<option value="PINPAID">PINPAID</option>
			<option value="PRINTEMPS">PRINTEMPS</option>
			<option value="PRZELEWY24">PRZELEWY24</option>
			<option value="SACARTE">SACARTE</option>
			<option value="SDD">SDD</option>
			<option value="SKRILL(MONEYBOOKERS)">SKRILL(MONEYBOOKERS)</option>
			<option value="SOFINCO">SOFINCO</option>
			<option value="SOFORT">SOFORT</option>
			<option value="SURCOUF">SURCOUF</option>
			<option value="SWITCH">SWITCH</option>
			<option value="TICKETSURF">TICKETSURF</option>
			<option value="TOTALGR">TOTALGR</option>
			<option value="UKASH">UKASH</option>
			<option value="VISA">VISA</option>
			<option value="VISAPREPAID">VISAPREPAID</option>
			<option value="VME">VME</option>
			<option value="WEXPAY">WEXPAY</option>
			<option value="YANDEX">YANDEX</option>
			<option value="YAPITAL">YAPITAL</option>
		</select>
	</div>
	<div class="row">
		<label for="cardExpirationDate">Card expiration date</label>
		<input type="text" name="cardExpirationDate" id="cardExpirationDate" value="01<?php echo date('y')+2?>" />
	</div>
	<div class="row">
		<label for="cardCrypto">Card cryptogram</label>
		<input type="text" name="cardCrypto" id="cardCrypto" value="123" />
	</div>
	<div class="row">
		<label for="cardOwnerBirthdayDate">Owner birthday date</label>
		<input type="text" name="cardOwnerBirthdayDate" id="cardOwnerBirthdayDate" value="" />
		<span class="help">(format : "ddmmyy")</span>
	</div>
	<div class="row">
		<label for="cardPassword">Card password</label>
		<input type="text" name="cardPassword" id="cardPassword" value="" />
	</div>
	<div class="row">
		<label for="cardPresent">Card Present</label> <select name="cardPresent" id="cardPresent">
			<option value=""></option>
			<option value="1">yes</option>
			<option value="0">no</option>
		</select>
	</div>
	<div class="row">
		<label for="cardHolder">Card holder</label>
		<input type="text" name="cardHolder" id="cardHolder" value="" />
	</div>
	<div class="row">
		<label for="cardToken">Card token</label>
		<input type="text" name="cardToken" id="cardToken" value="" />
	</div>
</fieldset>
