<fieldset>
	<h4>Recurring informations</h4>
	<div class="row">
		<label for="rfuNewAmount">New amount</label>
		<input type="text" name="rfuNewAmount" id="rfuNewAmount" value="" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="rfuBillingLeft">Billing left</label>
		<input type="text" name="rfuBillingLeft" id="rfuBillingLeft" value="" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="rfuAmountModificationDate">Amount modification date</label>
		<input type="text" name="rfuAmountModificationDate" id="rfuAmountModificationDate" value="" />
		<span class="help">(format : "dd/mm/yyyy")</span>
	</div>
	<div class="row">
		<label for="rfuEndDate">End date</label>
		<input type="text" name="rfuEndDate" id="rfuEndDate" value="" />
		<span class="help">(format : "dd/mm/yyyy")</span>
	</div>
	<div class="row">
		<label for="rfuBillingDay">Billing day</label>
		<select name="rfuBillingDay" id="rfuBillingDay">
			<option value=""></option>
			<?php
			for($i=1;$i<=31;$i++){
				echo "<option value='".$i."'>$i</option>";
			}
			?>
		</select>
	</div>
</fieldset>
