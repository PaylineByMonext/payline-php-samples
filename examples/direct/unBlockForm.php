<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'unBlock';
	include '../fieldset/version.php';
	include '../fieldset/transactionId.php';
	?>	
	<fieldset>
		<div class="row">
			<label for="transactionDate">Transaction date</label>
			<input type="text" name="transactionDate" id="transactionDate" value="" />
			<span class="help">(format : "dd/mm/yyyy")</span>
		</div>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="unBlock">
</form>
