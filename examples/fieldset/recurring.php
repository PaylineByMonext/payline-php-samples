<fieldset>
	<h4>Recurring informations</h4>
	<div class="row">
		<label for="recurringFirstAmount">First amount</label>
		<input type="text" name="recurringFirstAmount" id="recurringFirstAmount" value="" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="recurringBillingLeft">Billing left</label>
		<input type="text" name="recurringBillingLeft" id="recurringBillingLeft" value="" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="recurringAmount">Recurring Amount</label>
		<input type="text" name="recurringAmount" id="recurringAmount" value="" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="recurringNewAmount">Recurring New Amount</label>
		<input type="text" name="recurringNewAmount" id="recurringNewAmount" value="" />
	</div>
	
	<div class="row">
		<label for="recurringAmountModificationDate">Amount modification date</label>
		<input type="text" name="recurringAmountModificationDate" id="recurringAmountModificationDate" value="" />
		<span class="help">(format : "dd/mm/yyyy")</span>
	</div>
	<div class="row">
		<label for="recurringBillingCycle">Billing cycle</label>
		<select	name="recurringBillingCycle" id="recurringBillingCycle">
			<option value="10">10 (Quotidien)</option>
			<option value="20">20 (Hebdomadaire)</option>
			<option value="30">30 (Bimensuel)</option>
			<option value="40">40 (Mensuel)</option>
			<option value="50">50 (Bimestriel)</option>
			<option value="60">60 (Trimestriel)</option>
			<option value="70">70 (Semi-annuel)</option>
			<option value="80">80 (Annuel)</option>
			<option value="90">90 (Bisannuel)</option>
		</select>
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="recurringStartDate">Start date</label>
		<input type="text" name="recurringStartDate" id="recurringStartDate" value="" />
		<span class="help">(format : "dd/mm/yyyy")</span>
	</div>
	<div class="row">
		<label for="recurringEndDate">End date</label>
		<input type="text" name="recurringEndDate" id="recurringEndDate" value="" />
		<span class="help">(format : "dd/mm/yyyy")</span>
	</div>
	<div class="row">
		<label for="recurringBillingDay">Billing day</label>
		<select name="recurringBillingDay" id="recurringBillingDay">
			<option value=""></option>
			<?php
			for($i=1;$i<=31;$i++){
				echo "<option value='".$i."'>$i</option>";
			}
			?>
		</select>
	</div>
    <div class="row">
        <label for="billingRank">Billing bank</label>
        <input type="text" name="billingRank" id="billingRank" value="" />
    </div>
</fieldset>
