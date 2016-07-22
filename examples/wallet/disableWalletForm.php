<form action="../demos/wallet.php" method="post"  class="payline-form">
	<fieldset>
        <h4>Wallet informations</h4>
        <div class="row">
            <label for="contractNumber">Contract number</label>
            <input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
        </div>   
		<div class="row">
            <label for="CardIndex">Card Index</label>
            <input type="text" name="CardIndex" id="CardIndex" value="">
        </div>		
        <div class="row">
            <label for="walletIdList">Wallet ID list</label>
            <input type="text" name="walletIdList" id="walletIdList" value="" />
			<span class="help">(separator if severals numbers : ";")</span>
        </div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="disableWallet" />
</form>
