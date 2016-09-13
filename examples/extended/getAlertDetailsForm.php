<form action="../demos/extended.php" method="post" class="payline-form">
	<?php
	include '../fieldset/version.php';
    ?>
    <fieldset>
            <h4>getAlertDetails, full example</h4>
            <div class="row">
                <label for="AlertId">Alert ID</label>
                <input type="text" name="AlertId" id="AlertId" value="" />
                <span class="help">(required)</span>
            </div>
            <div class="row">
                <label for="TransactionId">Transaction ID</label>
                <input type="text" name="TransactionId" id="TransactionId" value="" />
                <span class="help">(required)</span>
            </div>
            <div class="row">
                <label for="TransactionDate">Transaction date</label>
                <input type="text" name="TransactionDate" id="TransactionDate" value="" />           
            </div>
   </fieldset>
   <input type="submit" name="submit" class="submit" value="getAlertDetails" />
</form>
