<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'doScoringCheque';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
	?>
	<fieldset>
		<h4>Cheque information</h4>
		<div class="row">
			<label for="ChequeNumber">Cheque Number</label>
			<input type="text" name="ChequeNumber" id="ChequeNumber" value="" />
		</div>
	</fieldset>
	<?php
	include '../fieldset/order.php';
	include '../fieldset/privateDataList.php';
	include '../fieldset/media.php';
	?>
	<input type="submit" name="submit" class="submit" value="doScoringcheque">
</form>
