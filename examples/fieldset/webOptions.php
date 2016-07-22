<fieldset>
	<h4>Options</h4>
	<div class="row">
		<label for="languageCode">Language Code</label>
		<select	name="languageCode" id="languageCode"> 
    		<option value="">- browser language -</option>
    		<option value="cs">cs (Czech - Česky)</option>
    		<option value="da">da (Danish - Dansk)</option>	     	 
    		<option value="nl">nl (Dutch - Nederlands)</option>	    
    		<option value="en">en (English - English)</option>
    		<option value="et">et (Estonian - Eesti keel)</option>	
    		<option value="fi">fi (Finnish - Suomen kieli)</option>	       
    		<option value="fr">fr (French - Fran&ccedil;ais)</option>
    		<option value="de">de (German - Deutsch)</option>
    		<option value="el">el (Greek - Ελληνικά)</option>	     
    		<option value="he">he (Hebrew - עברית)</option>
    		<option value="hu">hu (Hungarian - magyar)</option>	  
    		<option value="ita">ita (Italian - Italiano)</option>
    		<option value="no">no (Norwegian - Norsk)</option>
    		<option value="pt">pt (Portuguese - Portugu&ecirc;s)</option>
    		<option value="pl">pl (Polish - Polski)</option>
    		<option value="ru">ru (Russian - русский язык)</option>		    
    		<option value="sk">sk (Slovak - Slovenčina)</option>	      
    		<option value="sv">sv (Slovene - Slovenščina)</option>      
    		<option value="es">es (Spanish - Espa&ntilde;ol)</option>
    		<option value="uk">uk (Ukrainian - українська мова)</option>        
		</select>
	</div>
	<div class="row">
		<label for="customPaymentPageCode">Custom payment page code</label>
		<input type="text" name="customPaymentPageCode" id="customPaymentPageCode" value="<?php echo $_SESSION['CUSTOM_PAYMENT_PAGE_CODE']?>">
	</div>
	<div class="row">
		<label for="customPaymentTemplateURL">Custom template URL</label>
		<input type="text" name="customPaymentTemplateURL" id="customPaymentTemplateURL" value="<?php echo $_SESSION['CUSTOM_PAYMENT_TEMPLATE_URL']?>">
	</div>
	<div class="row">
		<label for="securityMode">Security mode</label>
		<input type="text" name="securityMode" id="securityMode" value="">
	</div>
</fieldset>