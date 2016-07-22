<form action="../demos/wallet.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'doImmediateWalletPayment';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/order.php';
	include '../fieldset/buyer.php';
	?>
	<fieldset>
        <h4>Wallet informations</h4>
        <div class="row">
            <label for="walletId">Wallet ID</label>
            <input type="text" name="walletId" id="walletId" value="<?php echo $_SESSION['buyerWalletId'] ?>" />
            <span class="help">(required)</span>
        </div>
		<div class="row">
            <label for="CardIndex">Card Index</label>
            <input type="text" name="CardIndex" id="CardIndex" value="">
        </div>
		<div class="row">
            <label for="walletCvx">CVX</label>
            <input type="text" name="walletCvx" id="walletCvx" value="">
        </div>	
    </fieldset>
    <?php
	include '../fieldset/privateDataList.php';
	include '../fieldset/media.php';
	include '../fieldset/authentication3DSecure.php';
	?>
    <input type="submit" name="submit" class="submit" value="doImmediateWalletPayment" />
</form>
