<form action="../demos/extended.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'transactionsSearch';
  include '../fieldset/version.php';
  ?>
	<fieldset>
        <h4>Informations about Transaction</h4>
        <div class="row">
            <label for="transactionId">Transaction Id</label>
            <input type="text" name="transactionId" id="transactionId" value="" />
        </div>
        <div class="row">
            <label for="startDate">Start date</label>
            <input type="text" name="startDate" id="startDate" value="<?php echo date('d/m/Y')?>" />
            <span class="help">(format : "dd/mm/yyyy")</span>
        </div>
        <div class="row">
            <label for="endDate">End date</label>
            <input type="text" name="endDate" id="endDate" value="<?php echo date('d/m/Y')?>" />
            <span class="help">(format : "dd/mm/yyyy")</span>
        </div>
        <div class="row">
            <label for="authorizationNumber">Authorization number</label>
            <input type="text" name="authorizationNumber" id="authorizationNumber" value="" />
        </div>
        <div class="row">
            <label for="paymentMean">Card type</label>
            <input type="text" name="paymentMean" id="paymentMean" value="" />
        </div>
        <div class="row">
            <label for="transactionType">Transaction type</label>
            <select name="transactionType" id="transactionType">
			         <option value="">All</option>
			         <option value="1">1 (Autorisation)</option>
			         <option value="2">2 (Validation)</option>
			         <option value="3">3 (Annulation)</option>
			         <option value="4">4 (Remboursement)</option>
			         <option value="5">5 (Cr&#233;dit)</option>
			         <option value="6">6 (Autorisation+Validation)</option>
			         <option value="7">7 (Commande)</option>   
			         <option value="8">8 (R&#233;autorisation+Validation)</option>
			         <option value="9">9 (D&#233;bit)</option>
			         <option value="10">10 (Scoring cheque)</option>  
			         <option value="12">12 (Autorisation + Validation MicroPaiement)</option>
			         <option value="13">13 (R&#233;autorisation)</option> 
			         <option value="14">14 (Annulation micro-paiement)</option>
			         <option value="15">15 (Autorisation+Validation compl&#233;mentaire)</option>
			         <option value="16">16 (Signature SDD)</option>
		        </select>
        </div>
        <div class="row">
            <label for="contractNumber">Contract Number</label>
            <input type="text" name="contractNumber" id="contractNumber" value="" />
        </div>
        <div class="row">
            <label for="returnCode">Return code</label>
            <input type="text" name="returnCode" id="returnCode" value="" />
        </div>
    </fieldset>
	<fieldset>
        <h4>Informations about order</h4>
        <div class="row">
            <label for="orderRef">Order reference</label>
            <input type="text" name="orderRef" id="orderRef" value="" />
        </div>
    </fieldset>
    <fieldset>
        <h4>Informations about card</h4>
        <div class="row">
            <label for="cardNumber">Card number</label>
            <input type="text" name="cardNumber" id="cardNumber" value="" />
        </div>
        <div class="row">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="" />
        </div>
        <div class="row">
            <label for="firstName">FirstName</label>
            <input type="text" name="firstName" id="firstName" value="" />
        </div>
        <div class="row">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="" />
        </div>
         <div class="row">
            <label for="currency">Payement currency</label>
            <input type="text" name="currency" id="currency" value="" />
        </div>
        <div class="row">
            <label for="minAmount">Min Amount</label>
            <input type="text" name="minAmount" id="minAmount" value="" />
        </div>
        <div class="row">
            <label for="maxAmount">Max Amount</label>
            <input type="text" name="maxAmount" id="maxAmount" value="" />
        </div>
        <div class="row">
            <label for="walletId">Wallet Id</label>
            <input type="text" name="walletId" id="walletId" value="" />
        </div>
        <div class="row">
            <label for="walletId">Sequence number</label>
            <input type="text" name="sequenceNumber" id="sequenceNumber" value="" />
        </div>
        <div class="row">
            <label for="walletId">Token</label>
            <input type="text" name="token" id="token" value="" />
        </div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="transactionsSearch" />
</form>




