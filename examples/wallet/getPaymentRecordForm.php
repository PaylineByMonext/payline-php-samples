<form action="../demos/wallet.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'getPaymentRecord';
  include '../fieldset/version.php';
  ?>
	<fieldset>
        <h4>Payment record informations</h4>
        <div class="row">
            <label for="contractNumber">Contract number</label>
            <input type="text" name="contractNumber" id="contractNumber" value="<?php  if(isset($_GET['contractNumber'])) echo $_GET['contractNumber']; else echo $_SESSION['CONTRACT_NUMBER']; ?>">
        </div>  
        <div class="row">
            <label for="paymentRecordId">Payment record id</label>
            <input type="text" name="paymentRecordId" id="paymentRecordId" value="<?php  if(isset($_GET['paymentRecordId'])) echo $_GET['paymentRecordId']; ?>" />
        </div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="getPaymentRecord" />
</form>
