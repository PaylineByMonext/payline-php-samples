<form action="../demos/wallet.php" method="post"  class="payline-form">
	<fieldset>
        <h4>Disable payment record</h4>
        <div class="row">
            <label for="contractNumber">Contract number</label>
            <input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
        </div>  
        <div class="row">
            <label for="paymentRecordId">Payment record id</label>
            <input type="text" name="paymentRecordId" id="paymentRecordId" value="" />
        </div>
	</fieldset>
    <input type="submit" name="submit" class="submit" value="disablePaymentRecord" />
</form>
