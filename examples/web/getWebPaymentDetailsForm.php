<form action="../demos/web.php" method="post" class="payline-form">
	<?php 
	   include '../fieldset/version.php';
	?>
    <fieldset>
    	<div class="row">
    		<label for="token">Payment token</label>
    		<input type="text" name="token" id="token" value="<?php if(isset($_GET['token'])) echo $_GET['token']; ?>" />
    		<span class="help">(required)</span>
    	</div>
   </fieldset>
   <input type="submit" name="submit" class="submit" value="getWebPaymentDetails" />
</form>
