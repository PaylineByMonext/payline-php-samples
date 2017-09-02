<script type="text/javascript">
	function clearSampleOrder(){
		document.getElementById('orderRef').value= '';
		document.getElementById('orderOrigin').value= '';
		document.getElementById('orderCountry').value= '';
		document.getElementById('orderTaxes').value= '';
		document.getElementById('orderCurrency').value= '';
		document.getElementById('orderAmount').value= '';
		document.getElementById('deliveryTime').value= '';
		document.getElementById('deliveryMode').value= '';
		document.getElementById('deliveryExpectedDelay').value= '';
		document.getElementById('deliveryExpectedDate').value= '';
		document.getElementById('orderDetailRef1').value= '';
		document.getElementById('orderDetailPrice1').value= '';
		document.getElementById('orderDetailQuantity1').value= '';
		document.getElementById('orderDetailComment1').value= '';
		document.getElementById('orderDetailCategory1').value= '';
		document.getElementById('orderDetailSubcategory1_1').value= '';
		document.getElementById('orderDetailSubcategory2_1').value= '';
		document.getElementById('orderDetailBrand1').value= '';
		document.getElementById('orderDetailAdditionalData1').value= '';
		document.getElementById('orderDetailTaxRate1').value= '';
		document.getElementById('orderDetailRef2').value= '';
		document.getElementById('orderDetailPrice2').value= '';
		document.getElementById('orderDetailQuantity2').value= '';
		document.getElementById('orderDetailComment2').value= '';
		document.getElementById('orderDetailCategory2').value= '';
		document.getElementById('orderDetailSubcategory1_2').value= '';
		document.getElementById('orderDetailSubcategory2_2').value= '';
		document.getElementById('orderDetailBrand2').value= '';
		document.getElementById('orderDetailAdditionalData2').value= '';
		document.getElementById('orderDetailTaxRate2').value= '';
	}
</script>
<fieldset>
	<h4>Informations about order</h4>
	<div class="row">
		<label for="orderAmount">Order amount</label>
		<input type="text" name="orderAmount" id="orderAmount" value="<?php echo $_SESSION['orderAmount'] ?>" />
		<span class="help">(required)</span>		
		<input type="button" class="submit" value="clear order data" onclick="clearSampleOrder()" />
	</div>
	<div class="row" <?php if(in_array($displayedPage,array('widgetPayment','configuration'))) echo "style='display:none'";?>>
		<label for="orderRef">Order reference</label>
		<input type="text" name="orderRef" id="orderRef" value="<?php echo 'PHP-'.time()?>" />
		<span class="help">(required)</span>
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="orderOrigin">Order origin</label>
		<input type="text" name="orderOrigin" id="orderOrigin" value="<?php echo $_SESSION['orderOrigin'] ?>" maxlength="3" />
	</div>
	<div class="row" <?php if($displayedPage == 'widgetPayment') echo "style='display:none'";?>>
		<label for="orderCountry">Order country</label>
		<input type="text" name="orderCountry" id="orderCountry" value="<?php echo $_SESSION['orderCountry'] ?>" />
	</div>
	<div class="row">
		<label for="orderTaxes">Order taxes</label>
		<input type="text" name="orderTaxes" id="orderTaxes" value="<?php echo $_SESSION['orderTaxes'] ?>" />
	</div>
	<div class="row">
		<label for="orderCurrency">Order currency</label>
		<select name="orderCurrency" id="orderCurrency">								
			<option value="">- select -</option>
			<?php
			echo "<option value='784'"; if($_SESSION['orderCurrency']=='784') echo "selected"; echo ">784 (United Arab Emirates dirham - AED)</option>";
			echo "<option value='971'"; if($_SESSION['orderCurrency']=='971') echo "selected"; echo ">971 (Afghan afghani - AFN)</option>";
			echo "<option value='8'"; if($_SESSION['orderCurrency']=='8') echo "selected"; echo ">8 (Albanian lek - ALL)</option>";
			echo "<option value='51'"; if($_SESSION['orderCurrency']=='51') echo "selected"; echo ">51 (Armenian dram - AMD)</option>";
			echo "<option value='532'"; if($_SESSION['orderCurrency']=='532') echo "selected"; echo ">532 (Netherlands Antillean guilder - ANG)</option>";
			echo "<option value='973'"; if($_SESSION['orderCurrency']=='973') echo "selected"; echo ">973 (Angolan kwanza - AOA)</option>";
			echo "<option value='32'"; if($_SESSION['orderCurrency']=='32') echo "selected"; echo ">32 (Argentine peso - ARS)</option>";
			echo "<option value='36'"; if($_SESSION['orderCurrency']=='36') echo "selected"; echo ">36 (Australian dollar - AUD)</option>";
			echo "<option value='533'"; if($_SESSION['orderCurrency']=='533') echo "selected"; echo ">533 (Aruban florin - AWG)</option>";
			echo "<option value='944'"; if($_SESSION['orderCurrency']=='944') echo "selected"; echo ">944 (Azerbaijani manat - AZN)</option>";
			echo "<option value='977'"; if($_SESSION['orderCurrency']=='977') echo "selected"; echo ">977 (Bosnia and Herzegovina convertible mark - BAM)</option>";
			echo "<option value='52'"; if($_SESSION['orderCurrency']=='52') echo "selected"; echo ">52 (Barbados dollar - BBD)</option>";
			echo "<option value='50'"; if($_SESSION['orderCurrency']=='50') echo "selected"; echo ">50 (Bangladeshi taka - BDT)</option>";
			echo "<option value='975'"; if($_SESSION['orderCurrency']=='975') echo "selected"; echo ">975 (Bulgarian lev - BGN)</option>";
			echo "<option value='48'"; if($_SESSION['orderCurrency']=='48') echo "selected"; echo ">48 (Bahraini dinar - BHD)</option>";
			echo "<option value='108'"; if($_SESSION['orderCurrency']=='108') echo "selected"; echo ">108 (Burundian franc - BIF)</option>";
			echo "<option value='60'"; if($_SESSION['orderCurrency']=='60') echo "selected"; echo ">60 (Bermudian dollar - BMD)</option>";
			echo "<option value='96'"; if($_SESSION['orderCurrency']=='96') echo "selected"; echo ">96 (Brunei dollar - BND)</option>";
			echo "<option value='68'"; if($_SESSION['orderCurrency']=='68') echo "selected"; echo ">68 (Boliviano - BOB)</option>";
			echo "<option value='984'"; if($_SESSION['orderCurrency']=='984') echo "selected"; echo ">984 (Bolivian Mvdol (funds code) - BOV)</option>";
			echo "<option value='986'"; if($_SESSION['orderCurrency']=='986') echo "selected"; echo ">986 (Brazilian real - BRL)</option>";
			echo "<option value='44'"; if($_SESSION['orderCurrency']=='44') echo "selected"; echo ">44 (Bahamian dollar - BSD)</option>";
			echo "<option value='64'"; if($_SESSION['orderCurrency']=='64') echo "selected"; echo ">64 (Bhutanese ngultrum - BTN)</option>";
			echo "<option value='72'"; if($_SESSION['orderCurrency']=='72') echo "selected"; echo ">72 (Botswana pula - BWP)</option>";
			echo "<option value='933'"; if($_SESSION['orderCurrency']=='933') echo "selected"; echo ">933 (Belarusian ruble - BYN)</option>";
			echo "<option value='974'"; if($_SESSION['orderCurrency']=='974') echo "selected"; echo ">974 (Belarusian ruble - BYR)</option>";
			echo "<option value='84'"; if($_SESSION['orderCurrency']=='84') echo "selected"; echo ">84 (Belize dollar - BZD)</option>";
			echo "<option value='124'"; if($_SESSION['orderCurrency']=='124') echo "selected"; echo ">124 (Canadian dollar - CAD)</option>";
			echo "<option value='976'"; if($_SESSION['orderCurrency']=='976') echo "selected"; echo ">976 (Congolese franc - CDF)</option>";
			echo "<option value='947'"; if($_SESSION['orderCurrency']=='947') echo "selected"; echo ">947 (WIR Euro (complementary currency) - CHE)</option>";
			echo "<option value='756'"; if($_SESSION['orderCurrency']=='756') echo "selected"; echo ">756 (Swiss franc - CHF)</option>";
			echo "<option value='948'"; if($_SESSION['orderCurrency']=='948') echo "selected"; echo ">948 (WIR Franc (complementary currency) - CHW)</option>";
			echo "<option value='990'"; if($_SESSION['orderCurrency']=='990') echo "selected"; echo ">990 (Unidad de Fomento (funds code) - CLF)</option>";
			echo "<option value='152'"; if($_SESSION['orderCurrency']=='152') echo "selected"; echo ">152 (Chilean peso - CLP)</option>";
			echo "<option value='156'"; if($_SESSION['orderCurrency']=='156') echo "selected"; echo ">156 (Chinese yuan - CNY)</option>";
			echo "<option value='170'"; if($_SESSION['orderCurrency']=='170') echo "selected"; echo ">170 (Colombian peso - COP)</option>";
			echo "<option value='970'"; if($_SESSION['orderCurrency']=='970') echo "selected"; echo ">970 (Unidad de Valor Real (UVR) (funds code)[7] - COU)</option>";
			echo "<option value='188'"; if($_SESSION['orderCurrency']=='188') echo "selected"; echo ">188 (Costa Rican colon - CRC)</option>";
			echo "<option value='931'"; if($_SESSION['orderCurrency']=='931') echo "selected"; echo ">931 (Cuban convertible peso - CUC)</option>";
			echo "<option value='192'"; if($_SESSION['orderCurrency']=='192') echo "selected"; echo ">192 (Cuban peso - CUP)</option>";
			echo "<option value='132'"; if($_SESSION['orderCurrency']=='132') echo "selected"; echo ">132 (Cape Verde escudo - CVE)</option>";
			echo "<option value='203'"; if($_SESSION['orderCurrency']=='203') echo "selected"; echo ">203 (Czech koruna - CZK)</option>";
			echo "<option value='262'"; if($_SESSION['orderCurrency']=='262') echo "selected"; echo ">262 (Djiboutian franc - DJF)</option>";
			echo "<option value='208'"; if($_SESSION['orderCurrency']=='208') echo "selected"; echo ">208 (Danish krone - DKK)</option>";
			echo "<option value='214'"; if($_SESSION['orderCurrency']=='214') echo "selected"; echo ">214 (Dominican peso - DOP)</option>";
			echo "<option value='12'"; if($_SESSION['orderCurrency']=='12') echo "selected"; echo ">12 (Algerian dinar - DZD)</option>";
			echo "<option value='818'"; if($_SESSION['orderCurrency']=='818') echo "selected"; echo ">818 (Egyptian pound - EGP)</option>";
			echo "<option value='232'"; if($_SESSION['orderCurrency']=='232') echo "selected"; echo ">232 (Eritrean nakfa - ERN)</option>";
			echo "<option value='230'"; if($_SESSION['orderCurrency']=='230') echo "selected"; echo ">230 (Ethiopian birr - ETB)</option>";
			echo "<option value='978'"; if($_SESSION['orderCurrency']=='978') echo "selected"; echo ">978 (Euro - EUR)</option>";
			echo "<option value='242'"; if($_SESSION['orderCurrency']=='242') echo "selected"; echo ">242 (Fiji dollar - FJD)</option>";
			echo "<option value='238'"; if($_SESSION['orderCurrency']=='238') echo "selected"; echo ">238 (Falkland Islands pound - FKP)</option>";
			echo "<option value='826'"; if($_SESSION['orderCurrency']=='826') echo "selected"; echo ">826 (Pound sterling - GBP)</option>";
			echo "<option value='981'"; if($_SESSION['orderCurrency']=='981') echo "selected"; echo ">981 (Georgian lari - GEL)</option>";
			echo "<option value='936'"; if($_SESSION['orderCurrency']=='936') echo "selected"; echo ">936 (Ghanaian cedi - GHS)</option>";
			echo "<option value='292'"; if($_SESSION['orderCurrency']=='292') echo "selected"; echo ">292 (Gibraltar pound - GIP)</option>";
			echo "<option value='270'"; if($_SESSION['orderCurrency']=='270') echo "selected"; echo ">270 (Gambian dalasi - GMD)</option>";
			echo "<option value='324'"; if($_SESSION['orderCurrency']=='324') echo "selected"; echo ">324 (Guinean franc - GNF)</option>";
			echo "<option value='320'"; if($_SESSION['orderCurrency']=='320') echo "selected"; echo ">320 (Guatemalan quetzal - GTQ)</option>";
			echo "<option value='328'"; if($_SESSION['orderCurrency']=='328') echo "selected"; echo ">328 (Guyanese dollar - GYD)</option>";
			echo "<option value='344'"; if($_SESSION['orderCurrency']=='344') echo "selected"; echo ">344 (Hong Kong dollar - HKD)</option>";
			echo "<option value='340'"; if($_SESSION['orderCurrency']=='340') echo "selected"; echo ">340 (Honduran lempira - HNL)</option>";
			echo "<option value='191'"; if($_SESSION['orderCurrency']=='191') echo "selected"; echo ">191 (Croatian kuna - HRK)</option>";
			echo "<option value='332'"; if($_SESSION['orderCurrency']=='332') echo "selected"; echo ">332 (Haitian gourde - HTG)</option>";
			echo "<option value='348'"; if($_SESSION['orderCurrency']=='348') echo "selected"; echo ">348 (Hungarian forint - HUF)</option>";
			echo "<option value='360'"; if($_SESSION['orderCurrency']=='360') echo "selected"; echo ">360 (Indonesian rupiah - IDR)</option>";
			echo "<option value='376'"; if($_SESSION['orderCurrency']=='376') echo "selected"; echo ">376 (Israeli new shekel - ILS)</option>";
			echo "<option value='356'"; if($_SESSION['orderCurrency']=='356') echo "selected"; echo ">356 (Indian rupee - INR)</option>";
			echo "<option value='368'"; if($_SESSION['orderCurrency']=='368') echo "selected"; echo ">368 (Iraqi dinar - IQD)</option>";
			echo "<option value='364'"; if($_SESSION['orderCurrency']=='364') echo "selected"; echo ">364 (Iranian rial - IRR)</option>";
			echo "<option value='352'"; if($_SESSION['orderCurrency']=='352') echo "selected"; echo ">352 (Icelandic króna - ISK)</option>";
			echo "<option value='388'"; if($_SESSION['orderCurrency']=='388') echo "selected"; echo ">388 (Jamaican dollar - JMD)</option>";
			echo "<option value='400'"; if($_SESSION['orderCurrency']=='400') echo "selected"; echo ">400 (Jordanian dinar - JOD)</option>";
			echo "<option value='392'"; if($_SESSION['orderCurrency']=='392') echo "selected"; echo ">392 (Japanese yen - JPY)</option>";
			echo "<option value='404'"; if($_SESSION['orderCurrency']=='404') echo "selected"; echo ">404 (Kenyan shilling - KES)</option>";
			echo "<option value='417'"; if($_SESSION['orderCurrency']=='417') echo "selected"; echo ">417 (Kyrgyzstani som - KGS)</option>";
			echo "<option value='116'"; if($_SESSION['orderCurrency']=='116') echo "selected"; echo ">116 (Cambodian riel - KHR)</option>";
			echo "<option value='174'"; if($_SESSION['orderCurrency']=='174') echo "selected"; echo ">174 (Comoro franc - KMF)</option>";
			echo "<option value='408'"; if($_SESSION['orderCurrency']=='408') echo "selected"; echo ">408 (North Korean won - KPW)</option>";
			echo "<option value='410'"; if($_SESSION['orderCurrency']=='410') echo "selected"; echo ">410 (South Korean won - KRW)</option>";
			echo "<option value='414'"; if($_SESSION['orderCurrency']=='414') echo "selected"; echo ">414 (Kuwaiti dinar - KWD)</option>";
			echo "<option value='136'"; if($_SESSION['orderCurrency']=='136') echo "selected"; echo ">136 (Cayman Islands dollar - KYD)</option>";
			echo "<option value='398'"; if($_SESSION['orderCurrency']=='398') echo "selected"; echo ">398 (Kazakhstani tenge - KZT)</option>";
			echo "<option value='418'"; if($_SESSION['orderCurrency']=='418') echo "selected"; echo ">418 (Lao kip - LAK)</option>";
			echo "<option value='422'"; if($_SESSION['orderCurrency']=='422') echo "selected"; echo ">422 (Lebanese pound - LBP)</option>";
			echo "<option value='144'"; if($_SESSION['orderCurrency']=='144') echo "selected"; echo ">144 (Sri Lankan rupee - LKR)</option>";
			echo "<option value='430'"; if($_SESSION['orderCurrency']=='430') echo "selected"; echo ">430 (Liberian dollar - LRD)</option>";
			echo "<option value='426'"; if($_SESSION['orderCurrency']=='426') echo "selected"; echo ">426 (Lesotho loti - LSL)</option>";
			echo "<option value='434'"; if($_SESSION['orderCurrency']=='434') echo "selected"; echo ">434 (Libyan dinar - LYD)</option>";
			echo "<option value='504'"; if($_SESSION['orderCurrency']=='504') echo "selected"; echo ">504 (Moroccan dirham - MAD)</option>";
			echo "<option value='498'"; if($_SESSION['orderCurrency']=='498') echo "selected"; echo ">498 (Moldovan leu - MDL)</option>";
			echo "<option value='969'"; if($_SESSION['orderCurrency']=='969') echo "selected"; echo ">969 (Malagasy ariary - MGA)</option>";
			echo "<option value='807'"; if($_SESSION['orderCurrency']=='807') echo "selected"; echo ">807 (Macedonian denar - MKD)</option>";
			echo "<option value='104'"; if($_SESSION['orderCurrency']=='104') echo "selected"; echo ">104 (Myanmar kyat - MMK)</option>";
			echo "<option value='496'"; if($_SESSION['orderCurrency']=='496') echo "selected"; echo ">496 (Mongolian tögrög - MNT)</option>";
			echo "<option value='446'"; if($_SESSION['orderCurrency']=='446') echo "selected"; echo ">446 (Macanese pataca - MOP)</option>";
			echo "<option value='478'"; if($_SESSION['orderCurrency']=='478') echo "selected"; echo ">478 (Mauritanian ouguiya - MRO)</option>";
			echo "<option value='480'"; if($_SESSION['orderCurrency']=='480') echo "selected"; echo ">480 (Mauritian rupee - MUR)</option>";
			echo "<option value='462'"; if($_SESSION['orderCurrency']=='462') echo "selected"; echo ">462 (Maldivian rufiyaa - MVR)</option>";
			echo "<option value='454'"; if($_SESSION['orderCurrency']=='454') echo "selected"; echo ">454 (Malawian kwacha - MWK)</option>";
			echo "<option value='484'"; if($_SESSION['orderCurrency']=='484') echo "selected"; echo ">484 (Mexican peso - MXN)</option>";
			echo "<option value='979'"; if($_SESSION['orderCurrency']=='979') echo "selected"; echo ">979 (Mexican Unidad de Inversion (UDI) (funds code) - MXV)</option>";
			echo "<option value='458'"; if($_SESSION['orderCurrency']=='458') echo "selected"; echo ">458 (Malaysian ringgit - MYR)</option>";
			echo "<option value='943'"; if($_SESSION['orderCurrency']=='943') echo "selected"; echo ">943 (Mozambican metical - MZN)</option>";
			echo "<option value='516'"; if($_SESSION['orderCurrency']=='516') echo "selected"; echo ">516 (Namibian dollar - NAD)</option>";
			echo "<option value='566'"; if($_SESSION['orderCurrency']=='566') echo "selected"; echo ">566 (Nigerian naira - NGN)</option>";
			echo "<option value='558'"; if($_SESSION['orderCurrency']=='558') echo "selected"; echo ">558 (Nicaraguan córdoba - NIO)</option>";
			echo "<option value='578'"; if($_SESSION['orderCurrency']=='578') echo "selected"; echo ">578 (Norwegian krone - NOK)</option>";
			echo "<option value='524'"; if($_SESSION['orderCurrency']=='524') echo "selected"; echo ">524 (Nepalese rupee - NPR)</option>";
			echo "<option value='554'"; if($_SESSION['orderCurrency']=='554') echo "selected"; echo ">554 (New Zealand dollar - NZD)</option>";
			echo "<option value='512'"; if($_SESSION['orderCurrency']=='512') echo "selected"; echo ">512 (Omani rial - OMR)</option>";
			echo "<option value='590'"; if($_SESSION['orderCurrency']=='590') echo "selected"; echo ">590 (Panamanian balboa - PAB)</option>";
			echo "<option value='604'"; if($_SESSION['orderCurrency']=='604') echo "selected"; echo ">604 (Peruvian Sol - PEN)</option>";
			echo "<option value='598'"; if($_SESSION['orderCurrency']=='598') echo "selected"; echo ">598 (Papua New Guinean kina - PGK)</option>";
			echo "<option value='608'"; if($_SESSION['orderCurrency']=='608') echo "selected"; echo ">608 (Philippine peso - PHP)</option>";
			echo "<option value='586'"; if($_SESSION['orderCurrency']=='586') echo "selected"; echo ">586 (Pakistani rupee - PKR)</option>";
			echo "<option value='985'"; if($_SESSION['orderCurrency']=='985') echo "selected"; echo ">985 (Polish złoty - PLN)</option>";
			echo "<option value='600'"; if($_SESSION['orderCurrency']=='600') echo "selected"; echo ">600 (Paraguayan guaraní - PYG)</option>";
			echo "<option value='634'"; if($_SESSION['orderCurrency']=='634') echo "selected"; echo ">634 (Qatari riyal - QAR)</option>";
			echo "<option value='946'"; if($_SESSION['orderCurrency']=='946') echo "selected"; echo ">946 (Romanian leu - RON)</option>";
			echo "<option value='941'"; if($_SESSION['orderCurrency']=='941') echo "selected"; echo ">941 (Serbian dinar - RSD)</option>";
			echo "<option value='643'"; if($_SESSION['orderCurrency']=='643') echo "selected"; echo ">643 (Russian ruble - RUB)</option>";
			echo "<option value='646'"; if($_SESSION['orderCurrency']=='646') echo "selected"; echo ">646 (Rwandan franc - RWF)</option>";
			echo "<option value='682'"; if($_SESSION['orderCurrency']=='682') echo "selected"; echo ">682 (Saudi riyal - SAR)</option>";
			echo "<option value='90'"; if($_SESSION['orderCurrency']=='90') echo "selected"; echo ">90 (Solomon Islands dollar - SBD)</option>";
			echo "<option value='690'"; if($_SESSION['orderCurrency']=='690') echo "selected"; echo ">690 (Seychelles rupee - SCR)</option>";
			echo "<option value='938'"; if($_SESSION['orderCurrency']=='938') echo "selected"; echo ">938 (Sudanese pound - SDG)</option>";
			echo "<option value='752'"; if($_SESSION['orderCurrency']=='752') echo "selected"; echo ">752 (Swedish krona/kronor - SEK)</option>";
			echo "<option value='702'"; if($_SESSION['orderCurrency']=='702') echo "selected"; echo ">702 (Singapore dollar - SGD)</option>";
			echo "<option value='654'"; if($_SESSION['orderCurrency']=='654') echo "selected"; echo ">654 (Saint Helena pound - SHP)</option>";
			echo "<option value='694'"; if($_SESSION['orderCurrency']=='694') echo "selected"; echo ">694 (Sierra Leonean leone - SLL)</option>";
			echo "<option value='706'"; if($_SESSION['orderCurrency']=='706') echo "selected"; echo ">706 (Somali shilling - SOS)</option>";
			echo "<option value='968'"; if($_SESSION['orderCurrency']=='968') echo "selected"; echo ">968 (Surinamese dollar - SRD)</option>";
			echo "<option value='728'"; if($_SESSION['orderCurrency']=='728') echo "selected"; echo ">728 (South Sudanese pound - SSP)</option>";
			echo "<option value='678'"; if($_SESSION['orderCurrency']=='678') echo "selected"; echo ">678 (São Tomé and Príncipe dobra - STD)</option>";
			echo "<option value='760'"; if($_SESSION['orderCurrency']=='760') echo "selected"; echo ">760 (Syrian pound - SYP)</option>";
			echo "<option value='748'"; if($_SESSION['orderCurrency']=='748') echo "selected"; echo ">748 (Swazi lilangeni - SZL)</option>";
			echo "<option value='764'"; if($_SESSION['orderCurrency']=='764') echo "selected"; echo ">764 (Thai baht - THB)</option>";
			echo "<option value='972'"; if($_SESSION['orderCurrency']=='972') echo "selected"; echo ">972 (Tajikistani somoni - TJS)</option>";
			echo "<option value='934'"; if($_SESSION['orderCurrency']=='934') echo "selected"; echo ">934 (Turkmenistani manat - TMT)</option>";
			echo "<option value='788'"; if($_SESSION['orderCurrency']=='788') echo "selected"; echo ">788 (Tunisian dinar - TND)</option>";
			echo "<option value='776'"; if($_SESSION['orderCurrency']=='776') echo "selected"; echo ">776 (Tongan paʻanga - TOP)</option>";
			echo "<option value='949'"; if($_SESSION['orderCurrency']=='949') echo "selected"; echo ">949 (Turkish lira - TRY)</option>";
			echo "<option value='780'"; if($_SESSION['orderCurrency']=='780') echo "selected"; echo ">780 (Trinidad and Tobago dollar - TTD)</option>";
			echo "<option value='901'"; if($_SESSION['orderCurrency']=='901') echo "selected"; echo ">901 (New Taiwan dollar - TWD)</option>";
			echo "<option value='834'"; if($_SESSION['orderCurrency']=='834') echo "selected"; echo ">834 (Tanzanian shilling - TZS)</option>";
			echo "<option value='980'"; if($_SESSION['orderCurrency']=='980') echo "selected"; echo ">980 (Ukrainian hryvnia - UAH)</option>";
			echo "<option value='800'"; if($_SESSION['orderCurrency']=='800') echo "selected"; echo ">800 (Ugandan shilling - UGX)</option>";
			echo "<option value='840'"; if($_SESSION['orderCurrency']=='840') echo "selected"; echo ">840 (United States dollar - USD)</option>";
			echo "<option value='997'"; if($_SESSION['orderCurrency']=='997') echo "selected"; echo ">997 (United States dollar (next day) (funds code) - USN)</option>";
			echo "<option value='998'"; if($_SESSION['orderCurrency']=='998') echo "selected"; echo ">998 (United States dollar (same day) (funds code)[10] - USS)</option>";
			echo "<option value='940'"; if($_SESSION['orderCurrency']=='940') echo "selected"; echo ">940 (Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code) - UYI)</option>";
			echo "<option value='858'"; if($_SESSION['orderCurrency']=='858') echo "selected"; echo ">858 (Uruguayan peso - UYU)</option>";
			echo "<option value='860'"; if($_SESSION['orderCurrency']=='860') echo "selected"; echo ">860 (Uzbekistan som - UZS)</option>";
			echo "<option value='937'"; if($_SESSION['orderCurrency']=='937') echo "selected"; echo ">937 (Venezuelan bolívar - VEF)</option>";
			echo "<option value='704'"; if($_SESSION['orderCurrency']=='704') echo "selected"; echo ">704 (Vietnamese dong - VND)</option>";
			echo "<option value='548'"; if($_SESSION['orderCurrency']=='548') echo "selected"; echo ">548 (Vanuatu vatu - VUV)</option>";
			echo "<option value='882'"; if($_SESSION['orderCurrency']=='882') echo "selected"; echo ">882 (Samoan tala - WST)</option>";
			echo "<option value='950'"; if($_SESSION['orderCurrency']=='950') echo "selected"; echo ">950 (CFA franc BEAC - XAF)</option>";
			echo "<option value='961'"; if($_SESSION['orderCurrency']=='961') echo "selected"; echo ">961 (Silver (one troy ounce) - XAG)</option>";
			echo "<option value='959'"; if($_SESSION['orderCurrency']=='959') echo "selected"; echo ">959 (Gold (one troy ounce) - XAU)</option>";
			echo "<option value='955'"; if($_SESSION['orderCurrency']=='955') echo "selected"; echo ">955 (European Composite Unit (EURCO) (bond market unit) - XBA)</option>";
			echo "<option value='956'"; if($_SESSION['orderCurrency']=='956') echo "selected"; echo ">956 (European Monetary Unit (E.M.U.-6) (bond market unit) - XBB)</option>";
			echo "<option value='957'"; if($_SESSION['orderCurrency']=='957') echo "selected"; echo ">957 (European Unit of Account 9 (E.U.A.-9) (bond market unit) - XBC)</option>";
			echo "<option value='958'"; if($_SESSION['orderCurrency']=='958') echo "selected"; echo ">958 (European Unit of Account 17 (E.U.A.-17) (bond market unit) - XBD)</option>";
			echo "<option value='951'"; if($_SESSION['orderCurrency']=='951') echo "selected"; echo ">951 (East Caribbean dollar - XCD)</option>";
			echo "<option value='960'"; if($_SESSION['orderCurrency']=='960') echo "selected"; echo ">960 (Special drawing rights - XDR)</option>";
			echo "<option value='Nil'"; if($_SESSION['orderCurrency']=='Nil') echo "selected"; echo ">Nil (UIC franc (special settlement currency) - XFU)</option>";
			echo "<option value='952'"; if($_SESSION['orderCurrency']=='952') echo "selected"; echo ">952 (CFA franc BCEAO - XOF)</option>";
			echo "<option value='964'"; if($_SESSION['orderCurrency']=='964') echo "selected"; echo ">964 (Palladium (one troy ounce) - XPD)</option>";
			echo "<option value='953'"; if($_SESSION['orderCurrency']=='953') echo "selected"; echo ">953 (CFP franc (franc Pacifique) - XPF)</option>";
			echo "<option value='962'"; if($_SESSION['orderCurrency']=='962') echo "selected"; echo ">962 (Platinum (one troy ounce) - XPT)</option>";
			echo "<option value='994'"; if($_SESSION['orderCurrency']=='994') echo "selected"; echo ">994 (SUCRE - XSU)</option>";
			echo "<option value='963'"; if($_SESSION['orderCurrency']=='963') echo "selected"; echo ">963 (Code reserved for testing purposes - XTS)</option>";
			echo "<option value='965'"; if($_SESSION['orderCurrency']=='965') echo "selected"; echo ">965 (ADB Unit of Account - XUA)</option>";
			echo "<option value='999'"; if($_SESSION['orderCurrency']=='999') echo "selected"; echo ">999 (No currency - XXX)</option>";
			echo "<option value='886'"; if($_SESSION['orderCurrency']=='886') echo "selected"; echo ">886 (Yemeni rial - YER)</option>";
			echo "<option value='710'"; if($_SESSION['orderCurrency']=='710') echo "selected"; echo ">710 (South African rand - ZAR)</option>";
			echo "<option value='967'"; if($_SESSION['orderCurrency']=='967') echo "selected"; echo ">967 (Zambian kwacha - ZMW)</option>";
			?>
		</select>
		<span class="help">(required)</span>
	</div>
	<div class="row" <?php if(in_array($displayedPage,array('widgetPayment','configuration'))) echo "style='display:none'";?>>
		<label for="orderDate">Order date</label>
		<input type="text" name="orderDate" id="orderDate" value="<?php echo date('d/m/Y H:i')?>" />
		<span class="help">(format : "dd/mm/yyyy HH24:MM")</span>
	</div>
	<div class="row">
		<label for="deliveryTime">Delivery time</label>
		<select	name="deliveryTime" id="deliveryTime">
			<option value=""></option>
			<option value="1" <?php if($_SESSION['deliveryTime'] == "1") echo "selected";?>>1 (Standard)</option>
			<option value="2" <?php if($_SESSION['deliveryTime'] == "2") echo "selected";?>>2 (Express)</option>
		</select>
	</div>
	<div class="row">
		<label for="deliveryMode">Delivery mode</label>
		<select	name="deliveryMode" id="deliveryMode">
			<option value=""></option>
			<option value="1" <?php if($_SESSION['deliveryMode'] == "1") echo "selected";?>>1 (Retrait chez le marchand)</option>
			<option value="2" <?php if($_SESSION['deliveryMode'] == "2") echo "selected";?>>2 (Point retrait)</option>
			<option value="3" <?php if($_SESSION['deliveryMode'] == "3") echo "selected";?>>3 (Retrait dans un a&#233;roport, une gare ou une agence de voyage)</option>
			<option value="4" <?php if($_SESSION['deliveryMode'] == "4") echo "selected";?>>4 (Transporteur priv&#233;)</option>
			<option value="5" <?php if($_SESSION['deliveryMode'] == "5") echo "selected";?>>5 (Emission d'un billet &#233;lectronique, t&#233;l&#233;chargements)</option>
		</select>
	</div>
	<div class="row" <?php if($displayedPage == 'configuration') echo "style='display:none'";?>>
		<label for="deliveryExpectedDate">Expected delivery date</label>
		<input type="text" name="deliveryExpectedDate" id="deliveryExpectedDate" value="<?php echo date('d/m/Y', strtotime(sprintf('now + %d day', 4)))?>" />
	</div>
	<div class="row" <?php if($displayedPage == 'configuration') echo "style='display:none'";?>>
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
					<input type="text" name="orderDetailRef1" id="orderDetailRef1" value="<?php echo $_SESSION['orderDetailRef1'] ?>" maxlength="50" />
				</div>
				<div class="row">
					<label for="orderDetailPrice1">Item 1 price</label>
					<input type="text" name="orderDetailPrice1" id="orderDetailPrice1" value="<?php echo $_SESSION['orderDetailPrice1'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailQuantity1">Item 1 quantity</label>
					<input type="text" name="orderDetailQuantity1" id="orderDetailQuantity1" value="<?php echo $_SESSION['orderDetailQuantity1'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailComment1">Item 1 comment</label>
					<textarea name="orderDetailComment1" id="orderDetailComment1"><?php echo $_SESSION['orderDetailComment1'] ?></textarea>
				</div>
				<div class="row">
					<label for="orderDetailCategory1">Item 1 category</label>
					<input type="text" name="orderDetailCategory1" id="orderDetailCategory1" value="<?php echo $_SESSION['orderDetailCategory1'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory1_1">Item 1 sub-category 1</label>
					<input type="text" name="orderDetailSubcategory1_1" id="orderDetailSubcategory1_1" value="<?php echo $_SESSION['orderDetailSubcategory1_1'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory2_1">Item 1 sub-category 2</label>
					<input type="text" name="orderDetailSubcategory2_1" id="orderDetailSubcategory2_1" value="<?php echo $_SESSION['orderDetailSubcategory2_1'] ?>" />
				</div>				
				<div class="row">
					<label for="orderDetailBrand1">Item 1 brand</label>
					<input type="text" name="orderDetailBrand1" id="orderDetailBrand1" value="<?php echo $_SESSION['orderDetailBrand1'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailAdditionalData1">Item 1 additional data</label>
					<input type="text" name="orderDetailAdditionalData1" id="orderDetailAdditionalData1" value="<?php echo $_SESSION['orderDetailAdditionalData1'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailTaxRate1">Item 1 tax rate</label>
					<input type="text" name="orderDetailTaxRate1" id="orderDetailTaxRate1" value="<?php echo $_SESSION['orderDetailTaxRate1'] ?>" />
				</div>
    		</td>
    		<td>
    			<div class="row">
					<label for="orderDetailRef2">Item 2 reference</label>
					<input type="text" name="orderDetailRef2" id="orderDetailRef2" value="<?php echo $_SESSION['orderDetailRef2'] ?>" maxlength="50" />
				</div>	
				<div class="row">
					<label for="orderDetailPrice2">Item 2 price</label>
					<input type="text" name="orderDetailPrice2" id="orderDetailPrice2" value="<?php echo $_SESSION['orderDetailPrice2'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailQuantity2">Item 2 quantity</label>
					<input type="text" name="orderDetailQuantity2" id="orderDetailQuantity2" value="<?php echo $_SESSION['orderDetailQuantity2'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailComment2">Item 2 comment</label>
					<textarea name="orderDetailComment2" id="orderDetailComment2"><?php echo $_SESSION['orderDetailComment2'] ?></textarea>
				</div>
				<div class="row">
					<label for="orderDetailCategory2">Item 2 category</label>
					<input type="text" name="orderDetailCategory2" id="orderDetailCategory2" value="<?php echo $_SESSION['orderDetailCategory2'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory1_2">Item 2 sub-category 1</label>
					<input type="text" name="orderDetailSubcategory1_2" id="orderDetailSubcategory1_2" value="<?php echo $_SESSION['orderDetailSubcategory1_2'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailSubcategory2_2">Item 2 sub-category 2</label>
					<input type="text" name="orderDetailSubcategory2_2" id="orderDetailSubcategory2_2" value="<?php echo $_SESSION['orderDetailSubcategory2_2'] ?>" />
				</div>				
				<div class="row">
					<label for="orderDetailBrand2">Item 2 brand</label>
					<input type="text" name="orderDetailBrand2" id="orderDetailBrand2" value="<?php echo $_SESSION['orderDetailBrand2'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailAdditionalData2">Item 2 additional data</label>
					<input type="text" name="orderDetailAdditionalData2" id="orderDetailAdditionalData2" value="<?php echo $_SESSION['orderDetailAdditionalData2'] ?>" />
				</div>
				<div class="row">
					<label for="orderDetailTaxRate2">Item 2 tax rate</label>
					<input type="text" name="orderDetailTaxRate2" id="orderDetailTaxRate2" value="<?php echo $_SESSION['orderDetailTaxRate2'] ?>" />
				</div>   
    		</td>
    	</tr>
    </table>       
</fieldset>
