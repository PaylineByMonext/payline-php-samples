<form action="../demos/wallet.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'doScheduledWalletPayment';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	include '../fieldset/order.php';
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
    </fieldset>
    <fieldset>
        <h4>Scheduled date</h4>
        <div class="row">
            <label for="scheduledDate">Date</label>
            <input type="text" name="scheduledDate" id="scheduledDate" value="<?php echo date('d/m/Y', strtotime(sprintf('now + %d day', 4)))?>" />
			<span class="help">(required - format : "dd/mm/yyyy")</span>
        </div>
    </fieldset>
    <?php
	include '../fieldset/privateDataList.php';
	include '../fieldset/media.php';
	?>
    <input type="submit" name="submit" class="submit" value="doScheduledWalletPayment" />
</form>
