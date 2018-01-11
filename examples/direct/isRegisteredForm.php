<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
    $displayedPage = 'isRegistered';
	include '../fieldset/version.php';
	include '../fieldset/payment.php';
    include '../fieldset/order.php';
    include '../fieldset/privateDataList.php';
    include '../fieldset/buyer.php';
	?>
	<input type="submit" name="submit" class="submit" value="isRegistered">
</form>
