<form action="../demos/wallet.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'updateWallet';
  include '../fieldset/version.php';
  ?>
	<fieldset>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>" />
		</div>
	</fieldset>
	<fieldset>
		<div class="row">
			<label for="cardInd">Card index</label>
			<input type="text" name="cardInd" id="cardInd" value="" />
		</div>
	</fieldset>
	<?php
	include '../fieldset/wallet.php';
	include '../fieldset/buyer.php';
	include '../fieldset/owner.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/authentication3DSecure.php';
	include '../fieldset/media.php';
	?>
	<fieldset>
		<div class="row">
			<label for="walletContractNumber">Wallet contract list</label>
			<input type="text" name="walletContractNumber" id="walletContractNumber" value="">
			<span class="help">(separator if severals numbers : ";")</span>
		</div>
	</fieldset>
    <input type="submit" name="submit" class="submit" value="updateWallet" />
</form>
