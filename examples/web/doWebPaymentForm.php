<form action="../demos/web.php" method="post" class="payline-form">
	<fieldset>
		<h4>Do Web Payment minimal informations</h4>
		<div class="row">
			<label for="ref">Order reference</label>
			<input type="text" name="ref" id="ref" value="<?php echo 'PHP-'.time()?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="amount">Amount</label>
			<input type="text" name="amount" id="amount" value="33300">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="currency">Currency</label>
			<input type="text" name="currency" id="currency" value="<?php echo $_SESSION['PAYMENT_CURRENCY'];?>">
			<span class="help">(required)</span>
		</div>
	</fieldset>
	<fieldset>		
    	<h4>User Experience : redirection / lightbox / inside the shop</h4>
    		<div class="row">
		<label for="data-template">template</label>
    			<select name="data-template" id="data-template">
			<option value="redirect" selected>redirect</option>
			<option value="lightbox">lightbox</option>			
			<option value="tab">in-shop tab</option>
			<option value="column">in-shop column</option>		
		</select>
		</div>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="doWebPayment">
</form>
