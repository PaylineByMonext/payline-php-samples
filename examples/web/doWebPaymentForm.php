<form action="../demos/web.php" method="post" name="doWebPayment" id="doWebPayment" class="payline-form">
	<?php
    $displayedPage = 'doWebPayment';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/order.php';
	include '../fieldset/urls.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/webOptions.php';
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/recurring.php';
	include '../fieldset/merchantName.php';
	include '../fieldset/subMerchant.php';	
	?>
    <fieldset>
    	<div class="row">
            <label for="miscData">Miscelaneous data</label>
            <input type="text" name="miscData" id="miscData" value="" />
    	</div>
    </fieldset>
    <fieldset>
    	<div class="row">
            <label for="asynchronousRetryTimeout">Retry timeout</label>
            <input type="text" name="asynchronousRetryTimeout" id="asynchronousRetryTimeout" value="" />
    	</div>
    </fieldset>
    <fieldset>
    	<h4>Contrats</h4>
    	<div class="row">
            <label for="selectedContract">Selected contract list</label>
            <input type="text" name="selectedContract" id="selectedContract" value="<?php echo $_SESSION['CONTRACT_NUMBER_LIST']?>" />
            <span class="help">(separator if severals numbers : ";")</span>
		</div>
		<div class="row">
            <label for="secondSelectedContract">Second contract list</label>
            <input type="text" name="secondSelectedContract" id="secondSelectedContract" value="<?php echo $_SESSION['SECOND_CONTRACT_NUMBER_LIST']?>" />
            <span class="help">(separator if severals numbers : ";")</span>
		</div>
		<div class="row">
			<label for="contractNumberWalletList">Wallet contract list</label>
			<input type="text" name="contractNumberWalletList" id="contractNumberWalletList" value="<?php echo $_SESSION['WALLET_CONTRACT_NUMBER_LIST']?>">
			<span class="help">(separator if severals numbers :	";")</span>
		</div>
    </fieldset>
	<fieldset>
    	<h4>User Experience : redirection / lightbox / inside the shop</h4>
    	<div class="row">
		<label for="data-template">template</label>
    			<select name="data-template" id="data-template">
			<option value="redirect" selected>redirect</option>
			<option value="lightbox">lightbox</option>			
			<option value="tab">in-shop tab</option>
			<option value="column">in-shop column</option>		
		</select>
		</div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="doWebPayment" />
</form>
