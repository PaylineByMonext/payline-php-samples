<form action="../demos/wallet.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'manageWebWallet';
  include '../fieldset/version.php';
  ?>
	<fieldset>
		<h4>Wallet informations</h4>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
		</div>
		<div class="row">
			<label for="selectedContractList">Selected contract list</label>
			<input type="text" name="selectedContractList" id="selectedContractList" value="<?php echo $_SESSION['CONTRACT_NUMBER_LIST']?>">
			<span class="help">(separator if severals numbers :	";")</span>
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
	</fieldset>
	<?php
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/webOptions.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/walletUrls.php';
	include '../fieldset/merchantName.php';
	?>
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
	<input type="submit" name="submit" class="submit" value="manageWebWallet">
</form>
