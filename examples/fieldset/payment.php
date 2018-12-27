<fieldset>
	<h4>Informations about payment</h4>

	<div class="row">
		<label for="paymentAmount">Payment amount</label>
		<input type="text" name="paymentAmount" id="paymentAmount" value="<?php  if(isset($_GET['amount'])) echo $_GET['amount']; else echo $_SESSION['PAYMENT_AMOUNT']; ?>">
	</div>
		
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="paymentMode">Payment mode</label>
		<select	name="paymentMode" id="paymentMode">
			<option value="CPT" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization','doImmediateWalletPayment','doScheduledWalletPayment')) && strcmp ("CPT",$_SESSION['PAYMENT_MODE']) == 0) echo "selected"; ?>>CPT (Comptant)</option>
			<option value="DIF" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization','doImmediateWalletPayment','doScheduledWalletPayment')) && strcmp ("DIF",$_SESSION['PAYMENT_MODE']) == 0) echo "selected"; ?>>DIF (Diff&#233;r&#233;)</option>
			<option value="NX" <?php if(in_array($displayedPage, array('doWebPayment','doScheduledWalletPayment')) && strcmp ("NX",$_SESSION['PAYMENT_MODE']) == 0) echo "selected"; ?>>NX (N fois)</option>
			<option value="REC" <?php if((in_array($displayedPage, array('doWebPayment')) && strcmp ("REC",$_SESSION['PAYMENT_MODE']) == 0) ||  $displayedPage == 'doRecurrentWalletPayment') echo "selected"; ?>>REC (R&#233;current)</option>			
			<option value="001">001 (PASS Comptant)</option>			
			<option value="002">002 (PASS Crédit)</option>			
			<option value="003">003 (PASS Epargne)</option>			
			<option value="004">004 (PASS N mois)</option>			
			<option value="005">005 (PASS Promotion)</option>			
			<option value="006">006 (PASS 3 fois sans intérêts)</option>			
			<option value="007">007 (PASS Report 3 mois)</option>
		</select>
	</div>

	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="paymentAction">Payment action</label>
    	<select name="paymentAction" id="paymentAction">
			<option value="100" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization','doImmediateWalletPayment','doScheduledWalletPayment','doRecurrentWalletPayment')) && strcmp ("100",$_SESSION['PAYMENT_ACTION']) == 0) echo "selected"; ?>>100 (Autorisation)</option>
			<option value="101" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization','doImmediateWalletPayment','doScheduledWalletPayment','doRecurrentWalletPayment')) && strcmp ("101",$_SESSION['PAYMENT_ACTION']) == 0) echo "selected"; ?>>101 (Autorisation+Validation)</option>
			<option value="108">108 (Demande information)</option>
			<option value="110" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization')) && strcmp ("110",$_SESSION['PAYMENT_ACTION']) == 0) echo "selected"; ?>>110 (Autorisation REC - enregistrement CVV)</option>
			<option value="111" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization')) && strcmp ("111",$_SESSION['PAYMENT_ACTION']) == 0) echo "selected"; ?>>111 (Autorisation+Validation REC - enregistrement CVV)</option>
			<option value="120" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization')) && strcmp ("120",$_SESSION['PAYMENT_ACTION']) == 0) echo "selected"; ?>>120 (Autorisation sans CVV)</option>
			<option value="121" <?php if(in_array($displayedPage, array('doWebPayment','doAuthorization')) && strcmp ("121",$_SESSION['PAYMENT_ACTION']) == 0) echo "selected"; ?>>121 (Autorisation+Validation sans CVV)</option>
			<option value="150" <?php if(in_array($displayedPage, array('doBankTransfer'))) echo "selected"; ?>>150 (Virement)</option>
			<option value="201" <?php if($displayedPage == 'doCapture') echo "selected"; ?>>201 (Validation)</option>
			<option value="202" <?php if($displayedPage == 'doCapture' && strcmp ("202",PAYMENT_ACTION) == 0) echo "selected"; ?>>202 (R&#233;autorisation)</option>
			<option value="204" <?php if($displayedPage == 'doDebit') echo "selected"; ?>>204 (D&#233;bit)</option>
			<option value="421" <?php if($displayedPage == 'doRefund') echo "selected"; ?>>421 (Remboursement)</option>
			<option value="422" <?php if($displayedPage == 'doCredit') echo "selected"; ?>>422 (Recr&#233;dit)</option>
			<option value="500">500 (Signature mandat)</option>				
		</select>
	</div>

	<div class="row">
		<label for="paymentCurrency">Payment currency</label>
		<input type="text" name="paymentCurrency" id="paymentCurrency" value="<?php  if(isset($_GET['currency'])) echo $_GET['currency']; else echo $_SESSION['PAYMENT_CURRENCY']; ?>">
	</div>

	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="paymentContractNumber">Contract number</label>
		<input type="text" name="paymentContractNumber" id="paymentContractNumber" value="<?php  if(isset($_GET['contractNumber'])) echo $_GET['contractNumber']; else echo $_SESSION['CONTRACT_NUMBER']; ?>">
	</div>

	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="differedActionDate">Differed action date</label>
		<input type="text" name="differedActionDate" id="differedActionDate" value="">
		<span class="help">(format : "dd/mm/yy")</span>
	</div>

	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="paymentSoftDescriptor">Soft descriptor</label>
		<input type="text" name="paymentSoftDescriptor" id="paymentSoftDescriptor" value="">
	</div>
	
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="cardBrand">Card brand</label>
		<select	name="cardBrand" id="cardBrand">
			<option value=""></option>
			<option value="0">0 (CB)</option>
			<option value="1">1 (VISA)</option>
			<option value="4">4 (MASTERCARD)</option>
			<option value="5">5 (MAESTRO)</option>
			<option value="8">8 (BCMC)</option>
		</select>
	</div>

</fieldset>