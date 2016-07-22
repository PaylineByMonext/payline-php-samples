<form action="../demos/wallet.php" method="post" class="payline-form">

	<fieldset>
		<h4>Informations about Wallet</h4>

		<div class="row">
			<label for="contractNumber">Contract Number</label> 
			<input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
			<span class="help">(required)</span>
		</div>
		<div class="row"><label for="walletId">Wallet id</label> 
			<input type="text" name="walletId" id="walletId" value="<?php echo $_SESSION['buyerWalletId'] ?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="cardIndex">Card index</label> 
			<input type="text" name="cardIndex" id="cardIndex" value="">
		</div>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="getCards">
</form>
