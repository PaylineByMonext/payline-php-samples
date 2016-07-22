<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
    $displayedPage = 'verifyAuthentication';
    include '../fieldset/version.php';
  ?>
	<fieldset>
		<h4>3DSecure information</h4>
		<div class="row">
			<label for="pares">Pares</label>
			<input type="text" name="pares" id="pares" value="" />
		</div>
		<div class="row">
			<label for="md">Md</label>
			<input type="text" name="md" id="md" value="" />
		</div>
		<div class="row">
			<label for="contractNumber">Contract number</label>
			<input type="text" name="contractNumber" id="contractNumber" value="" />
		</div>
	</fieldset>
	<?php include '../fieldset/card.php'?>
	<input type="submit" name="submit" class="submit" value="verifyAuthentication">
</form>
