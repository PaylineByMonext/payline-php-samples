<form action="../demos/extended.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'getTransactionDetails';
  include '../fieldset/version.php';
  ?>
	<fieldset>
        <div class="row">
            <label for="transactionID">Transaction ID</label>
            <input type="text" name="transactionID" id="transactionID" value="<?php echo $_GET['transactionId']?>" />
        </div>
        <div class="row">
            <label for="orderRef">Order reference</label>
            <input type="text" name="orderRef" id="orderRef" value="" />
        </div>
		<div class="row">
            <label for="Startdate"> Start date</label>
            <input type="text" name="Startdate" id="Startdate" value="" />
            <span class="help">( Format : "dd/mm/yyyy")</span>
        </div>
		<div class="row">
            <label for="Enddate">End date</label>
            <input type="text" name="Enddate" id="Enddate" value="" />
            <span class="help">( Format : "dd/mm/yyyy")</span>
        </div>
		<div class="row">
            <label for="transactionHistory">Find associated transactions</label>
            <input type="checkbox" name="transactionHistory" id="transactionHistory" value="" />
        </div>
		<div class="row">
            <label for="archiveSearch">Search in archive</label>
            <input type="checkbox" name="archiveSearch" id="archiveSearch" value="" />
        </div>
    </fieldset>
    <input type="submit" name="submit" class="submit" value="getTransactionDetails" />
</form>