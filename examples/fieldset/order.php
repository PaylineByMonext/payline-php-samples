<fieldset>
	<h4>Informations about order</h4>
	<div class="row">
		<label for="orderRef">Order reference</label>
		<input type="text" name="orderRef" id="orderRef" value="<?php echo 'PHP-'.time()?>" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="orderOrigin">Order origin</label>
		<input type="text" name="orderOrigin" id="orderOrigin" value="1" maxlength="3" />
	</div>
	<div class="row">
		<label for="orderCountry">Order country</label>
		<input type="text" name="orderCountry" id="orderCountry" value="FR" />
	</div>
	<div class="row">
		<label for="orderTaxes">Order taxes</label>
		<input type="text" name="orderTaxes" id="orderTaxes" value="50" />
	</div>
	<div class="row">
		<label for="orderCurrency">Order currency</label>
		<input type="text" name="orderCurrency" id="orderCurrency" value="978" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="orderAmount">Order amount</label>
		<input type="text" name="orderAmount" id="orderAmount" value="1000" />
		<span class="help">(required)</span>
	</div>
	<div class="row">
		<label for="orderDate">Order date</label>
		<input type="text" name="orderDate" id="orderDate" value="<?php echo date('d/m/Y H:i')?>" />
		<span class="help">(format : "dd/mm/yyyy HH24:MM")</span>
	</div>
	<div class="row">
		<label for="deliveryTime">Delivery time</label>
		<select	name="deliveryTime" id="deliveryTime">
			<option value=""></option>
			<option value="1" selected="selected">1 (Standard)</option>
			<option value="2">2 (Express)</option>
		</select>
	</div>
	<div class="row">
		<label for="deliveryMode">Delivery mode</label>
		<select	name="deliveryMode" id="deliveryMode">
			<option value=""></option>
			<option value="1">1 (Retrait chez le marchand)</option>
			<option value="2">2 (Point retrait)</option>
			<option value="3">3 (Retrait dans un a&#233;roport, une gare ou une agence de voyage)</option>
			<option value="4" selected="selected">4 (Transporteur priv&#233;)</option>
			<option value="5">5 (Emission d'un billet &#233;lectronique, t&#233;l&#233;chargements)</option>
		</select>
	</div>
	<div class="row">
		<label for="deliveryExpectedDate">Expected delivery date</label>
		<input type="text" name="deliveryExpectedDate" id="deliveryExpectedDate" value="<?php echo date('d/m/Y', strtotime(sprintf('now + %d day', 4)))?>" />
	</div>
	<div class="row">
		<label for="deliveryExpectedDelay">Expected delivery delay</label>
		<input type="text" name="deliveryExpectedDelay" id="deliveryExpectedDelay" value="4" />
	</div>
	<div class="row">
		<h5>Order details</h5>
    </div>
    <table border="0">
    	<tr>
    		<td>
    			<div class="row">
					<label for="orderDetailRef1">Item 1 reference</label>
					<input type="text" name="orderDetailRef1" id="orderDetailRef1" value="reference1" maxlength="50" />
				</div>
				<div class="row">
					<label for="orderDetailPrice1">Item 1 price</label>
					<input type="text" name="orderDetailPrice1" id="orderDetailPrice1" value="400" />
				</div>
				<div class="row">
					<label for="orderDetailQuantity1">Item 1 quantity</label>
					<input type="text" name="orderDetailQuantity1" id="orderDetailQuantity1" value="1" />
				</div>
				<div class="row">
					<label for="orderDetailComment1">Item 1 comment</label>
					<textarea name="orderDetailComment1" id="orderDetailComment1">Comment for item 1</textarea>
				</div>
				<div class="row">
					<label for="orderDetailCategory1">Item 1 category</label>
					<input type="text" name="orderDetailCategory1" id="orderDetailCategory1" value="10" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory1_1">Item 1 sub-category 1</label>
					<input type="text" name="orderDetailSubcategory1_1" id="orderDetailSubcategory1_1" value="" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory2_1">Item 1 sub-category 2</label>
					<input type="text" name="orderDetailSubcategory2_1" id="orderDetailSubcategory2_1" value="" />
				</div>				
				<div class="row">
					<label for="orderDetailBrand1">Item 1 brand</label>
					<input type="text" name="orderDetailBrand1" id="orderDetailBrand1" value="br1" />
				</div>
				<div class="row">
					<label for="orderDetailAdditionalData1">Item 1 additional data</label>
					<input type="text" name="orderDetailAdditionalData1" id="orderDetailAdditionalData1" value="" />
				</div>
				<div class="row">
					<label for="orderDetailTaxRate1">Item 1 tax rate</label>
					<input type="text" name="orderDetailTaxRate1" id="orderDetailTaxRate1" value="5" />
				</div>
    		</td>
    		<td>
    			<div class="row">
					<label for="orderDetailRef2">Item 2 reference</label>
					<input type="text" name="orderDetailRef2" id="orderDetailRef2" value="reference2" maxlength="50" />
				</div>	
				<div class="row">
					<label for="orderDetailPrice2">Item 2 price</label>
					<input type="text" name="orderDetailPrice2" id="orderDetailPrice2" value="600" />
				</div>
				<div class="row">
					<label for="orderDetailQuantity2">Item 2 quantity</label>
					<input type="text" name="orderDetailQuantity2" id="orderDetailQuantity2" value="1" />
				</div>
				<div class="row">
					<label for="orderDetailComment2">Item 2 comment</label>
					<textarea name="orderDetailComment2" id="orderDetailComment2">Comment for item 2</textarea>
				</div>
				<div class="row">
					<label for="orderDetailCategory2">Item 2 category</label>
					<input type="text" name="orderDetailCategory2" id="orderDetailCategory2" value="10" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory1_2">Item 2 sub-category 1</label>
					<input type="text" name="orderDetailSubcategory1_2" id="orderDetailSubcategory1_2" value="" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory2_2">Item 2 sub-category 2</label>
					<input type="text" name="orderDetailSubcategory2_2" id="orderDetailSubcategory2_2" value="" />
				</div>				
				<div class="row">
					<label for="orderDetailBrand2">Item 2 brand</label>
					<input type="text" name="orderDetailBrand2" id="orderDetailBrand2" value="br2" />
				</div>
				<div class="row">
					<label for="orderDetailAdditionalData2">Item 2 additional data</label>
					<input type="text" name="orderDetailAdditionalData2" id="orderDetailAdditionalData2" value="" />
				</div>
				<div class="row">
					<label for="orderDetailTaxRate2">Item 2 tax rate</label>
					<input type="text" name="orderDetailTaxRate2" id="orderDetailTaxRate2" value="5" />
				</div>   
    		</td>
    	</tr>
    </table>       
</fieldset>
