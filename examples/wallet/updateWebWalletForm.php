<form action="../demos/wallet.php" method="post" class="payline-form">
	<?php
    $displayedPage = 'updateWebWallet';
    include '../fieldset/version.php';
  ?>
	<fieldset>
		<h4>Wallet informations</h4>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
		</div>
		<div class="row">
			<label for="cardInd">Card index</label>
			<input type="text" name="cardInd" id="cardInd" value="">
		</div>
		<div class="row">
			<label for="walletId">Wallet ID</label>
			<input type="text" name="walletId" id="walletId" value="<?php echo $_SESSION['buyerWalletId'] ?>">
		</div>
		
		<div class="row">
			<label for="contractNumberWalletList">Wallet contract list</label>
			<input type="text" name="contractNumberWalletList" id="contractNumberWalletList" value="<?php echo $_SESSION['WALLET_CONTRACT_NUMBER_LIST']?>">
			<span class="help">(separator if severals numbers :	";")</span>
		</div>
		<div class="row">
			<label for="updatePersonalDetails">Update personal details</label>
			<input type="checkbox" name="updatePersonalDetails" id="updatePersonalDetails" value="1">
		</div>
		<div class="row">
			<label for="updateOwnerDetails">Update owner details</label>
			<input type="checkbox" name="updateOwnerDetails" id="updateOwnerDetails" value="1">
		</div>
		<div class="row">
			<label for="updatePaymentDetails">Update payment details</label>
			<input type="checkbox" name="updatePaymentDetails" id="updatePaymentDetails" value="1">
		</div>
	</fieldset>
	<?php
	include '../fieldset/buyer.php';
	include '../fieldset/webOptions.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/walletUrls.php';
	?>
	
	<input type="submit" name="submit" class="submit" value="updateWebWallet">
</form>
