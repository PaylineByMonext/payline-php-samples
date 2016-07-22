<form action="../demos/wallet.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'getWallet';
  include '../fieldset/version.php';
  ?>
	<fieldset>
        <h4>Wallet informations</h4>
        <div class="row">
            <label for="contractNumber">Contract number</label>
            <input type="text" name="contractNumber" id="contractNumber" value="<?php if(isset($_GET['contractNumber'])) echo $_GET['contractNumber']; else echo $_SESSION['CONTRACT_NUMBER'];?>">
        </div>
		<div class="row">
            <label for="CardIndex">Card Index</label>
            <input type="text" name="CardIndex" id="CardIndex" value="">
        </div>		
        <div class="row">
            <label for="walletId">Wallet ID</label>
            <input type="text" name="walletId" id="walletId" value="<?php if(isset($_GET['walletId'])) echo $_GET['walletId'];?>" />
        </div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="getWallet" />
</form>
