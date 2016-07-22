<form action="../demos/direct.php" method="post" class="payline-form">
	<?php
  $displayedPage = 'doReset';
	include '../fieldset/version.php';
	include '../fieldset/transactionId.php';
	include '../fieldset/comment.php';
	include '../fieldset/media.php';
	?>
   <input type="submit" name="submit" class="submit" value="doReset" />
</form>
