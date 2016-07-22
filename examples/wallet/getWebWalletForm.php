<form action="../demos/wallet.php" method="post"  class="payline-form">
	<?php
  $displayedPage = 'getWebWallet';
  include '../fieldset/version.php';
  ?>
	<fieldset>
        <div class="row">
            <label for="token">Token</label>
            <input type="text" name="token" id="token" value="">
        </div>  
    </fieldset>
    <input type="submit" name="submit" class="submit" value="getWebWallet" />
</form>
