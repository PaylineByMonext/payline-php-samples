<?php
use Monolog\Logger;
$displayedPage = 'configuration';
?>
<script type='text/javascript'>
function deleteJs(){
	if(confirm('supprimer le JavaScript ?')){
		document.getElementById('inJs').value = '';
		document.getElementById('deleteFile').value = "JS";
		document.getElementById("configForm").submit();
	}			
}
function deleteCss(){
	if(confirm('supprimer la feuille de style ?')){
		document.getElementById('inCss').value = '';
		document.getElementById('deleteFile').value = "CSS";
		document.getElementById("configForm").submit();
	}			
}
</script>
<form id="configForm" action="../index/updateConfig.php" method="post" class="payline-form" enctype="multipart/form-data">
	<input type="hidden" name="configForm" value="1">
	<fieldset>
		<h4>Global settings</h4>
		<div class="row">
			<label for="ENVIRONMENT">Environment</label>
			<select name="ENVIRONMENT" id="ENVIRONMENT">
				<option value="DEV" <?php if($_SESSION['ENVIRONMENT']=="DEV") echo "selected";?>>DEV</option>
				<option value="HOMO" <?php if($_SESSION['ENVIRONMENT']=="HOMO") echo "selected";?>>HOMO</option>
				<option value="PROD" <?php if($_SESSION['ENVIRONMENT']=="PROD") echo "selected";?>>PROD</option>
			</select>
		</div>
		<div class="row">
			<label for="MERCHANT_ID">Merchant ID</label>
			<input type="text" name="MERCHANT_ID" id="MERCHANT_ID" value="<?php echo $_SESSION['MERCHANT_ID']?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="MERCHANT_NAME">Merchant name</label>
			<input type="text" name="MERCHANT_NAME" id="MERCHANT_NAME" value="<?php echo $_SESSION['MERCHANT_NAME']?>">
		</div>
		<div class="row">
			<label for="ACCESS_KEY">Access key</label>
			<input type="text" name="ACCESS_KEY" id="ACCESS_KEY" value="<?php echo $_SESSION['ACCESS_KEY']?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="ACCESS_KEY_REF">web2token ref.</label>
			<input type="text" name="ACCESS_KEY_REF" id="ACCESS_KEY_REF" value="<?php echo $_SESSION['ACCESS_KEY_REF']?>">
		</div>
		<div class="row">
			<label for="PROXY_HOST">Proxy host</label>
			<input type="text" name="PROXY_HOST" id="PROXY_HOST" value="<?php echo $_SESSION['PROXY_HOST']?>">
		</div>
		<div class="row">
			<label for="PROXY_PORT">Proxy port</label>
			<input type="text" name="PROXY_PORT" id="PROXY_PORT" value="<?php echo $_SESSION['PROXY_PORT']?>">
		</div>
		<div class="row">
			<label for="PROXY_LOGIN">Proxy login</label>
			<input type="text" name="PROXY_LOGIN" id="PROXY_LOGIN" value="<?php echo $_SESSION['PROXY_LOGIN']?>">
		</div>
		<div class="row">
			<label for="PROXY_PASSWORD">Proxy password</label>
			<input type="text" name="PROXY_PASSWORD" id="PROXY_PASSWORD" value="<?php echo $_SESSION['PROXY_PASSWORD']?>">
		</div>
		<div class="row">
			<label for="WS_VERSION">Version</label>			
			<select name="WS_VERSION" id="WS_VERSION">				
				<option value='0'>- select -</option>
				<?php
				for($v=1;$v<17;$v++){
				    echo "<option value='$v'"; if($_SESSION['WS_VERSION']==$v) echo "selected"; echo ">$v</option>";				    
				}
				?>
			</select>
		</div>
		<div class="row">
			<label for="LOG_LEVEL">log level</label>			
			<select name="LOG_LEVEL" id="LOG_LEVEL">								
				<?php
				    echo "<option value='Logger::DEBUG'"; if($_SESSION['LOG_LEVEL']==Logger::DEBUG) echo "selected"; echo ">DEBUG</option>";
				    echo "<option value='Logger::INFO'"; if($_SESSION['LOG_LEVEL']==Logger::INFO) echo "selected"; echo ">INFO</option>";
				    echo "<option value='Logger::NOTICE'"; if($_SESSION['LOG_LEVEL']==Logger::NOTICE) echo "selected"; echo ">NOTICE</option>";
				    echo "<option value='Logger::WARNING'"; if($_SESSION['LOG_LEVEL']==Logger::WARNING) echo "selected"; echo ">WARNING</option>";
				    echo "<option value='Logger::ERROR'"; if($_SESSION['LOG_LEVEL']==Logger::ERROR) echo "selected"; echo ">ERROR</option>";
				    echo "<option value='Logger::CRITICAL'"; if($_SESSION['LOG_LEVEL']==Logger::CRITICAL) echo "selected"; echo ">CRITICAL</option>";
				    echo "<option value='Logger::ALERT'"; if($_SESSION['LOG_LEVEL']==Logger::ALERT) echo "selected"; echo ">ALERT</option>";
				    echo "<option value='Logger::EMERGENCY'"; if($_SESSION['LOG_LEVEL']==Logger::EMERGENCY) echo "selected"; echo ">EMERGENCY</option>";
				?>
			</select>
			<span class="help">logs file are written under <?php echo $_SESSION['LOG_PATH'];?></span>
		</div>
	</fieldset>
	<fieldset>		
		<h4>Payment settings</h4>
		<div class="row">
			<label for="CONTRACT_NUMBER">Contrat number</label>
			<input type="text" name="CONTRACT_NUMBER" id="CONTRACT_NUMBER" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="CONTRACT_NUMBER_LIST">Main contract list</label>
			<input type="text" name="CONTRACT_NUMBER_LIST" id="CONTRACT_NUMBER_LIST" value="<?php echo $_SESSION['CONTRACT_NUMBER_LIST']?>">
		</div>
		<div class="row">
			<label for="SECOND_CONTRACT_NUMBER_LIST">Second contract list</label>
			<input type="text" name="SECOND_CONTRACT_NUMBER_LIST" id="SECOND_CONTRACT_NUMBER_LIST" value="<?php echo $_SESSION['SECOND_CONTRACT_NUMBER_LIST']?>">
		</div>
		<div class="row">
			<label for="WALLET_CONTRACT_NUMBER_LIST">Wallet contract list</label>
			<input type="text" name="WALLET_CONTRACT_NUMBER_LIST" id="WALLET_CONTRACT_NUMBER_LIST" value="<?php echo $_SESSION['WALLET_CONTRACT_NUMBER_LIST']?>">
		</div>
		<div class="row">
			<label for="PAYMENT_AMOUNT">Payment amount</label>
			<input type="text" name="PAYMENT_AMOUNT" id="PAYMENT_AMOUNT" value="<?php echo $_SESSION['PAYMENT_AMOUNT']?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="PAYMENT_CURRENCY">Payment currency</label>
			<select name="PAYMENT_CURRENCY" id="PAYMENT_CURRENCY">								
				<option value="">- select -</option>
				<?php
				echo "<option value='784'"; if($_SESSION['PAYMENT_CURRENCY']=='784') echo "selected"; echo ">784 (United Arab Emirates dirham - AED)</option>";
				echo "<option value='971'"; if($_SESSION['PAYMENT_CURRENCY']=='971') echo "selected"; echo ">971 (Afghan afghani - AFN)</option>";
				echo "<option value='8'"; if($_SESSION['PAYMENT_CURRENCY']=='8') echo "selected"; echo ">8 (Albanian lek - ALL)</option>";
				echo "<option value='51'"; if($_SESSION['PAYMENT_CURRENCY']=='51') echo "selected"; echo ">51 (Armenian dram - AMD)</option>";
				echo "<option value='532'"; if($_SESSION['PAYMENT_CURRENCY']=='532') echo "selected"; echo ">532 (Netherlands Antillean guilder - ANG)</option>";
				echo "<option value='973'"; if($_SESSION['PAYMENT_CURRENCY']=='973') echo "selected"; echo ">973 (Angolan kwanza - AOA)</option>";
				echo "<option value='32'"; if($_SESSION['PAYMENT_CURRENCY']=='32') echo "selected"; echo ">32 (Argentine peso - ARS)</option>";
				echo "<option value='36'"; if($_SESSION['PAYMENT_CURRENCY']=='36') echo "selected"; echo ">36 (Australian dollar - AUD)</option>";
				echo "<option value='533'"; if($_SESSION['PAYMENT_CURRENCY']=='533') echo "selected"; echo ">533 (Aruban florin - AWG)</option>";
				echo "<option value='944'"; if($_SESSION['PAYMENT_CURRENCY']=='944') echo "selected"; echo ">944 (Azerbaijani manat - AZN)</option>";
				echo "<option value='977'"; if($_SESSION['PAYMENT_CURRENCY']=='977') echo "selected"; echo ">977 (Bosnia and Herzegovina convertible mark - BAM)</option>";
				echo "<option value='52'"; if($_SESSION['PAYMENT_CURRENCY']=='52') echo "selected"; echo ">52 (Barbados dollar - BBD)</option>";
				echo "<option value='50'"; if($_SESSION['PAYMENT_CURRENCY']=='50') echo "selected"; echo ">50 (Bangladeshi taka - BDT)</option>";
				echo "<option value='975'"; if($_SESSION['PAYMENT_CURRENCY']=='975') echo "selected"; echo ">975 (Bulgarian lev - BGN)</option>";
				echo "<option value='48'"; if($_SESSION['PAYMENT_CURRENCY']=='48') echo "selected"; echo ">48 (Bahraini dinar - BHD)</option>";
				echo "<option value='108'"; if($_SESSION['PAYMENT_CURRENCY']=='108') echo "selected"; echo ">108 (Burundian franc - BIF)</option>";
				echo "<option value='60'"; if($_SESSION['PAYMENT_CURRENCY']=='60') echo "selected"; echo ">60 (Bermudian dollar - BMD)</option>";
				echo "<option value='96'"; if($_SESSION['PAYMENT_CURRENCY']=='96') echo "selected"; echo ">96 (Brunei dollar - BND)</option>";
				echo "<option value='68'"; if($_SESSION['PAYMENT_CURRENCY']=='68') echo "selected"; echo ">68 (Boliviano - BOB)</option>";
				echo "<option value='984'"; if($_SESSION['PAYMENT_CURRENCY']=='984') echo "selected"; echo ">984 (Bolivian Mvdol (funds code) - BOV)</option>";
				echo "<option value='986'"; if($_SESSION['PAYMENT_CURRENCY']=='986') echo "selected"; echo ">986 (Brazilian real - BRL)</option>";
				echo "<option value='44'"; if($_SESSION['PAYMENT_CURRENCY']=='44') echo "selected"; echo ">44 (Bahamian dollar - BSD)</option>";
				echo "<option value='64'"; if($_SESSION['PAYMENT_CURRENCY']=='64') echo "selected"; echo ">64 (Bhutanese ngultrum - BTN)</option>";
				echo "<option value='72'"; if($_SESSION['PAYMENT_CURRENCY']=='72') echo "selected"; echo ">72 (Botswana pula - BWP)</option>";
				echo "<option value='933'"; if($_SESSION['PAYMENT_CURRENCY']=='933') echo "selected"; echo ">933 (Belarusian ruble - BYN)</option>";
				echo "<option value='974'"; if($_SESSION['PAYMENT_CURRENCY']=='974') echo "selected"; echo ">974 (Belarusian ruble - BYR)</option>";
				echo "<option value='84'"; if($_SESSION['PAYMENT_CURRENCY']=='84') echo "selected"; echo ">84 (Belize dollar - BZD)</option>";
				echo "<option value='124'"; if($_SESSION['PAYMENT_CURRENCY']=='124') echo "selected"; echo ">124 (Canadian dollar - CAD)</option>";
				echo "<option value='976'"; if($_SESSION['PAYMENT_CURRENCY']=='976') echo "selected"; echo ">976 (Congolese franc - CDF)</option>";
				echo "<option value='947'"; if($_SESSION['PAYMENT_CURRENCY']=='947') echo "selected"; echo ">947 (WIR Euro (complementary currency) - CHE)</option>";
				echo "<option value='756'"; if($_SESSION['PAYMENT_CURRENCY']=='756') echo "selected"; echo ">756 (Swiss franc - CHF)</option>";
				echo "<option value='948'"; if($_SESSION['PAYMENT_CURRENCY']=='948') echo "selected"; echo ">948 (WIR Franc (complementary currency) - CHW)</option>";
				echo "<option value='990'"; if($_SESSION['PAYMENT_CURRENCY']=='990') echo "selected"; echo ">990 (Unidad de Fomento (funds code) - CLF)</option>";
				echo "<option value='152'"; if($_SESSION['PAYMENT_CURRENCY']=='152') echo "selected"; echo ">152 (Chilean peso - CLP)</option>";
				echo "<option value='156'"; if($_SESSION['PAYMENT_CURRENCY']=='156') echo "selected"; echo ">156 (Chinese yuan - CNY)</option>";
				echo "<option value='170'"; if($_SESSION['PAYMENT_CURRENCY']=='170') echo "selected"; echo ">170 (Colombian peso - COP)</option>";
				echo "<option value='970'"; if($_SESSION['PAYMENT_CURRENCY']=='970') echo "selected"; echo ">970 (Unidad de Valor Real (UVR) (funds code)[7] - COU)</option>";
				echo "<option value='188'"; if($_SESSION['PAYMENT_CURRENCY']=='188') echo "selected"; echo ">188 (Costa Rican colon - CRC)</option>";
				echo "<option value='931'"; if($_SESSION['PAYMENT_CURRENCY']=='931') echo "selected"; echo ">931 (Cuban convertible peso - CUC)</option>";
				echo "<option value='192'"; if($_SESSION['PAYMENT_CURRENCY']=='192') echo "selected"; echo ">192 (Cuban peso - CUP)</option>";
				echo "<option value='132'"; if($_SESSION['PAYMENT_CURRENCY']=='132') echo "selected"; echo ">132 (Cape Verde escudo - CVE)</option>";
				echo "<option value='203'"; if($_SESSION['PAYMENT_CURRENCY']=='203') echo "selected"; echo ">203 (Czech koruna - CZK)</option>";
				echo "<option value='262'"; if($_SESSION['PAYMENT_CURRENCY']=='262') echo "selected"; echo ">262 (Djiboutian franc - DJF)</option>";
				echo "<option value='208'"; if($_SESSION['PAYMENT_CURRENCY']=='208') echo "selected"; echo ">208 (Danish krone - DKK)</option>";
				echo "<option value='214'"; if($_SESSION['PAYMENT_CURRENCY']=='214') echo "selected"; echo ">214 (Dominican peso - DOP)</option>";
				echo "<option value='12'"; if($_SESSION['PAYMENT_CURRENCY']=='12') echo "selected"; echo ">12 (Algerian dinar - DZD)</option>";
				echo "<option value='818'"; if($_SESSION['PAYMENT_CURRENCY']=='818') echo "selected"; echo ">818 (Egyptian pound - EGP)</option>";
				echo "<option value='232'"; if($_SESSION['PAYMENT_CURRENCY']=='232') echo "selected"; echo ">232 (Eritrean nakfa - ERN)</option>";
				echo "<option value='230'"; if($_SESSION['PAYMENT_CURRENCY']=='230') echo "selected"; echo ">230 (Ethiopian birr - ETB)</option>";
				echo "<option value='978'"; if($_SESSION['PAYMENT_CURRENCY']=='978') echo "selected"; echo ">978 (Euro - EUR)</option>";
				echo "<option value='242'"; if($_SESSION['PAYMENT_CURRENCY']=='242') echo "selected"; echo ">242 (Fiji dollar - FJD)</option>";
				echo "<option value='238'"; if($_SESSION['PAYMENT_CURRENCY']=='238') echo "selected"; echo ">238 (Falkland Islands pound - FKP)</option>";
				echo "<option value='826'"; if($_SESSION['PAYMENT_CURRENCY']=='826') echo "selected"; echo ">826 (Pound sterling - GBP)</option>";
				echo "<option value='981'"; if($_SESSION['PAYMENT_CURRENCY']=='981') echo "selected"; echo ">981 (Georgian lari - GEL)</option>";
				echo "<option value='936'"; if($_SESSION['PAYMENT_CURRENCY']=='936') echo "selected"; echo ">936 (Ghanaian cedi - GHS)</option>";
				echo "<option value='292'"; if($_SESSION['PAYMENT_CURRENCY']=='292') echo "selected"; echo ">292 (Gibraltar pound - GIP)</option>";
				echo "<option value='270'"; if($_SESSION['PAYMENT_CURRENCY']=='270') echo "selected"; echo ">270 (Gambian dalasi - GMD)</option>";
				echo "<option value='324'"; if($_SESSION['PAYMENT_CURRENCY']=='324') echo "selected"; echo ">324 (Guinean franc - GNF)</option>";
				echo "<option value='320'"; if($_SESSION['PAYMENT_CURRENCY']=='320') echo "selected"; echo ">320 (Guatemalan quetzal - GTQ)</option>";
				echo "<option value='328'"; if($_SESSION['PAYMENT_CURRENCY']=='328') echo "selected"; echo ">328 (Guyanese dollar - GYD)</option>";
				echo "<option value='344'"; if($_SESSION['PAYMENT_CURRENCY']=='344') echo "selected"; echo ">344 (Hong Kong dollar - HKD)</option>";
				echo "<option value='340'"; if($_SESSION['PAYMENT_CURRENCY']=='340') echo "selected"; echo ">340 (Honduran lempira - HNL)</option>";
				echo "<option value='191'"; if($_SESSION['PAYMENT_CURRENCY']=='191') echo "selected"; echo ">191 (Croatian kuna - HRK)</option>";
				echo "<option value='332'"; if($_SESSION['PAYMENT_CURRENCY']=='332') echo "selected"; echo ">332 (Haitian gourde - HTG)</option>";
				echo "<option value='348'"; if($_SESSION['PAYMENT_CURRENCY']=='348') echo "selected"; echo ">348 (Hungarian forint - HUF)</option>";
				echo "<option value='360'"; if($_SESSION['PAYMENT_CURRENCY']=='360') echo "selected"; echo ">360 (Indonesian rupiah - IDR)</option>";
				echo "<option value='376'"; if($_SESSION['PAYMENT_CURRENCY']=='376') echo "selected"; echo ">376 (Israeli new shekel - ILS)</option>";
				echo "<option value='356'"; if($_SESSION['PAYMENT_CURRENCY']=='356') echo "selected"; echo ">356 (Indian rupee - INR)</option>";
				echo "<option value='368'"; if($_SESSION['PAYMENT_CURRENCY']=='368') echo "selected"; echo ">368 (Iraqi dinar - IQD)</option>";
				echo "<option value='364'"; if($_SESSION['PAYMENT_CURRENCY']=='364') echo "selected"; echo ">364 (Iranian rial - IRR)</option>";
				echo "<option value='352'"; if($_SESSION['PAYMENT_CURRENCY']=='352') echo "selected"; echo ">352 (Icelandic króna - ISK)</option>";
				echo "<option value='388'"; if($_SESSION['PAYMENT_CURRENCY']=='388') echo "selected"; echo ">388 (Jamaican dollar - JMD)</option>";
				echo "<option value='400'"; if($_SESSION['PAYMENT_CURRENCY']=='400') echo "selected"; echo ">400 (Jordanian dinar - JOD)</option>";
				echo "<option value='392'"; if($_SESSION['PAYMENT_CURRENCY']=='392') echo "selected"; echo ">392 (Japanese yen - JPY)</option>";
				echo "<option value='404'"; if($_SESSION['PAYMENT_CURRENCY']=='404') echo "selected"; echo ">404 (Kenyan shilling - KES)</option>";
				echo "<option value='417'"; if($_SESSION['PAYMENT_CURRENCY']=='417') echo "selected"; echo ">417 (Kyrgyzstani som - KGS)</option>";
				echo "<option value='116'"; if($_SESSION['PAYMENT_CURRENCY']=='116') echo "selected"; echo ">116 (Cambodian riel - KHR)</option>";
				echo "<option value='174'"; if($_SESSION['PAYMENT_CURRENCY']=='174') echo "selected"; echo ">174 (Comoro franc - KMF)</option>";
				echo "<option value='408'"; if($_SESSION['PAYMENT_CURRENCY']=='408') echo "selected"; echo ">408 (North Korean won - KPW)</option>";
				echo "<option value='410'"; if($_SESSION['PAYMENT_CURRENCY']=='410') echo "selected"; echo ">410 (South Korean won - KRW)</option>";
				echo "<option value='414'"; if($_SESSION['PAYMENT_CURRENCY']=='414') echo "selected"; echo ">414 (Kuwaiti dinar - KWD)</option>";
				echo "<option value='136'"; if($_SESSION['PAYMENT_CURRENCY']=='136') echo "selected"; echo ">136 (Cayman Islands dollar - KYD)</option>";
				echo "<option value='398'"; if($_SESSION['PAYMENT_CURRENCY']=='398') echo "selected"; echo ">398 (Kazakhstani tenge - KZT)</option>";
				echo "<option value='418'"; if($_SESSION['PAYMENT_CURRENCY']=='418') echo "selected"; echo ">418 (Lao kip - LAK)</option>";
				echo "<option value='422'"; if($_SESSION['PAYMENT_CURRENCY']=='422') echo "selected"; echo ">422 (Lebanese pound - LBP)</option>";
				echo "<option value='144'"; if($_SESSION['PAYMENT_CURRENCY']=='144') echo "selected"; echo ">144 (Sri Lankan rupee - LKR)</option>";
				echo "<option value='430'"; if($_SESSION['PAYMENT_CURRENCY']=='430') echo "selected"; echo ">430 (Liberian dollar - LRD)</option>";
				echo "<option value='426'"; if($_SESSION['PAYMENT_CURRENCY']=='426') echo "selected"; echo ">426 (Lesotho loti - LSL)</option>";
				echo "<option value='434'"; if($_SESSION['PAYMENT_CURRENCY']=='434') echo "selected"; echo ">434 (Libyan dinar - LYD)</option>";
				echo "<option value='504'"; if($_SESSION['PAYMENT_CURRENCY']=='504') echo "selected"; echo ">504 (Moroccan dirham - MAD)</option>";
				echo "<option value='498'"; if($_SESSION['PAYMENT_CURRENCY']=='498') echo "selected"; echo ">498 (Moldovan leu - MDL)</option>";
				echo "<option value='969'"; if($_SESSION['PAYMENT_CURRENCY']=='969') echo "selected"; echo ">969 (Malagasy ariary - MGA)</option>";
				echo "<option value='807'"; if($_SESSION['PAYMENT_CURRENCY']=='807') echo "selected"; echo ">807 (Macedonian denar - MKD)</option>";
				echo "<option value='104'"; if($_SESSION['PAYMENT_CURRENCY']=='104') echo "selected"; echo ">104 (Myanmar kyat - MMK)</option>";
				echo "<option value='496'"; if($_SESSION['PAYMENT_CURRENCY']=='496') echo "selected"; echo ">496 (Mongolian tögrög - MNT)</option>";
				echo "<option value='446'"; if($_SESSION['PAYMENT_CURRENCY']=='446') echo "selected"; echo ">446 (Macanese pataca - MOP)</option>";
				echo "<option value='478'"; if($_SESSION['PAYMENT_CURRENCY']=='478') echo "selected"; echo ">478 (Mauritanian ouguiya - MRO)</option>";
				echo "<option value='480'"; if($_SESSION['PAYMENT_CURRENCY']=='480') echo "selected"; echo ">480 (Mauritian rupee - MUR)</option>";
				echo "<option value='462'"; if($_SESSION['PAYMENT_CURRENCY']=='462') echo "selected"; echo ">462 (Maldivian rufiyaa - MVR)</option>";
				echo "<option value='454'"; if($_SESSION['PAYMENT_CURRENCY']=='454') echo "selected"; echo ">454 (Malawian kwacha - MWK)</option>";
				echo "<option value='484'"; if($_SESSION['PAYMENT_CURRENCY']=='484') echo "selected"; echo ">484 (Mexican peso - MXN)</option>";
				echo "<option value='979'"; if($_SESSION['PAYMENT_CURRENCY']=='979') echo "selected"; echo ">979 (Mexican Unidad de Inversion (UDI) (funds code) - MXV)</option>";
				echo "<option value='458'"; if($_SESSION['PAYMENT_CURRENCY']=='458') echo "selected"; echo ">458 (Malaysian ringgit - MYR)</option>";
				echo "<option value='943'"; if($_SESSION['PAYMENT_CURRENCY']=='943') echo "selected"; echo ">943 (Mozambican metical - MZN)</option>";
				echo "<option value='516'"; if($_SESSION['PAYMENT_CURRENCY']=='516') echo "selected"; echo ">516 (Namibian dollar - NAD)</option>";
				echo "<option value='566'"; if($_SESSION['PAYMENT_CURRENCY']=='566') echo "selected"; echo ">566 (Nigerian naira - NGN)</option>";
				echo "<option value='558'"; if($_SESSION['PAYMENT_CURRENCY']=='558') echo "selected"; echo ">558 (Nicaraguan córdoba - NIO)</option>";
				echo "<option value='578'"; if($_SESSION['PAYMENT_CURRENCY']=='578') echo "selected"; echo ">578 (Norwegian krone - NOK)</option>";
				echo "<option value='524'"; if($_SESSION['PAYMENT_CURRENCY']=='524') echo "selected"; echo ">524 (Nepalese rupee - NPR)</option>";
				echo "<option value='554'"; if($_SESSION['PAYMENT_CURRENCY']=='554') echo "selected"; echo ">554 (New Zealand dollar - NZD)</option>";
				echo "<option value='512'"; if($_SESSION['PAYMENT_CURRENCY']=='512') echo "selected"; echo ">512 (Omani rial - OMR)</option>";
				echo "<option value='590'"; if($_SESSION['PAYMENT_CURRENCY']=='590') echo "selected"; echo ">590 (Panamanian balboa - PAB)</option>";
				echo "<option value='604'"; if($_SESSION['PAYMENT_CURRENCY']=='604') echo "selected"; echo ">604 (Peruvian Sol - PEN)</option>";
				echo "<option value='598'"; if($_SESSION['PAYMENT_CURRENCY']=='598') echo "selected"; echo ">598 (Papua New Guinean kina - PGK)</option>";
				echo "<option value='608'"; if($_SESSION['PAYMENT_CURRENCY']=='608') echo "selected"; echo ">608 (Philippine peso - PHP)</option>";
				echo "<option value='586'"; if($_SESSION['PAYMENT_CURRENCY']=='586') echo "selected"; echo ">586 (Pakistani rupee - PKR)</option>";
				echo "<option value='985'"; if($_SESSION['PAYMENT_CURRENCY']=='985') echo "selected"; echo ">985 (Polish złoty - PLN)</option>";
				echo "<option value='600'"; if($_SESSION['PAYMENT_CURRENCY']=='600') echo "selected"; echo ">600 (Paraguayan guaraní - PYG)</option>";
				echo "<option value='634'"; if($_SESSION['PAYMENT_CURRENCY']=='634') echo "selected"; echo ">634 (Qatari riyal - QAR)</option>";
				echo "<option value='946'"; if($_SESSION['PAYMENT_CURRENCY']=='946') echo "selected"; echo ">946 (Romanian leu - RON)</option>";
				echo "<option value='941'"; if($_SESSION['PAYMENT_CURRENCY']=='941') echo "selected"; echo ">941 (Serbian dinar - RSD)</option>";
				echo "<option value='643'"; if($_SESSION['PAYMENT_CURRENCY']=='643') echo "selected"; echo ">643 (Russian ruble - RUB)</option>";
				echo "<option value='646'"; if($_SESSION['PAYMENT_CURRENCY']=='646') echo "selected"; echo ">646 (Rwandan franc - RWF)</option>";
				echo "<option value='682'"; if($_SESSION['PAYMENT_CURRENCY']=='682') echo "selected"; echo ">682 (Saudi riyal - SAR)</option>";
				echo "<option value='90'"; if($_SESSION['PAYMENT_CURRENCY']=='90') echo "selected"; echo ">90 (Solomon Islands dollar - SBD)</option>";
				echo "<option value='690'"; if($_SESSION['PAYMENT_CURRENCY']=='690') echo "selected"; echo ">690 (Seychelles rupee - SCR)</option>";
				echo "<option value='938'"; if($_SESSION['PAYMENT_CURRENCY']=='938') echo "selected"; echo ">938 (Sudanese pound - SDG)</option>";
				echo "<option value='752'"; if($_SESSION['PAYMENT_CURRENCY']=='752') echo "selected"; echo ">752 (Swedish krona/kronor - SEK)</option>";
				echo "<option value='702'"; if($_SESSION['PAYMENT_CURRENCY']=='702') echo "selected"; echo ">702 (Singapore dollar - SGD)</option>";
				echo "<option value='654'"; if($_SESSION['PAYMENT_CURRENCY']=='654') echo "selected"; echo ">654 (Saint Helena pound - SHP)</option>";
				echo "<option value='694'"; if($_SESSION['PAYMENT_CURRENCY']=='694') echo "selected"; echo ">694 (Sierra Leonean leone - SLL)</option>";
				echo "<option value='706'"; if($_SESSION['PAYMENT_CURRENCY']=='706') echo "selected"; echo ">706 (Somali shilling - SOS)</option>";
				echo "<option value='968'"; if($_SESSION['PAYMENT_CURRENCY']=='968') echo "selected"; echo ">968 (Surinamese dollar - SRD)</option>";
				echo "<option value='728'"; if($_SESSION['PAYMENT_CURRENCY']=='728') echo "selected"; echo ">728 (South Sudanese pound - SSP)</option>";
				echo "<option value='678'"; if($_SESSION['PAYMENT_CURRENCY']=='678') echo "selected"; echo ">678 (São Tomé and Príncipe dobra - STD)</option>";
				echo "<option value='760'"; if($_SESSION['PAYMENT_CURRENCY']=='760') echo "selected"; echo ">760 (Syrian pound - SYP)</option>";
				echo "<option value='748'"; if($_SESSION['PAYMENT_CURRENCY']=='748') echo "selected"; echo ">748 (Swazi lilangeni - SZL)</option>";
				echo "<option value='764'"; if($_SESSION['PAYMENT_CURRENCY']=='764') echo "selected"; echo ">764 (Thai baht - THB)</option>";
				echo "<option value='972'"; if($_SESSION['PAYMENT_CURRENCY']=='972') echo "selected"; echo ">972 (Tajikistani somoni - TJS)</option>";
				echo "<option value='934'"; if($_SESSION['PAYMENT_CURRENCY']=='934') echo "selected"; echo ">934 (Turkmenistani manat - TMT)</option>";
				echo "<option value='788'"; if($_SESSION['PAYMENT_CURRENCY']=='788') echo "selected"; echo ">788 (Tunisian dinar - TND)</option>";
				echo "<option value='776'"; if($_SESSION['PAYMENT_CURRENCY']=='776') echo "selected"; echo ">776 (Tongan paʻanga - TOP)</option>";
				echo "<option value='949'"; if($_SESSION['PAYMENT_CURRENCY']=='949') echo "selected"; echo ">949 (Turkish lira - TRY)</option>";
				echo "<option value='780'"; if($_SESSION['PAYMENT_CURRENCY']=='780') echo "selected"; echo ">780 (Trinidad and Tobago dollar - TTD)</option>";
				echo "<option value='901'"; if($_SESSION['PAYMENT_CURRENCY']=='901') echo "selected"; echo ">901 (New Taiwan dollar - TWD)</option>";
				echo "<option value='834'"; if($_SESSION['PAYMENT_CURRENCY']=='834') echo "selected"; echo ">834 (Tanzanian shilling - TZS)</option>";
				echo "<option value='980'"; if($_SESSION['PAYMENT_CURRENCY']=='980') echo "selected"; echo ">980 (Ukrainian hryvnia - UAH)</option>";
				echo "<option value='800'"; if($_SESSION['PAYMENT_CURRENCY']=='800') echo "selected"; echo ">800 (Ugandan shilling - UGX)</option>";
				echo "<option value='840'"; if($_SESSION['PAYMENT_CURRENCY']=='840') echo "selected"; echo ">840 (United States dollar - USD)</option>";
				echo "<option value='997'"; if($_SESSION['PAYMENT_CURRENCY']=='997') echo "selected"; echo ">997 (United States dollar (next day) (funds code) - USN)</option>";
				echo "<option value='998'"; if($_SESSION['PAYMENT_CURRENCY']=='998') echo "selected"; echo ">998 (United States dollar (same day) (funds code)[10] - USS)</option>";
				echo "<option value='940'"; if($_SESSION['PAYMENT_CURRENCY']=='940') echo "selected"; echo ">940 (Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code) - UYI)</option>";
				echo "<option value='858'"; if($_SESSION['PAYMENT_CURRENCY']=='858') echo "selected"; echo ">858 (Uruguayan peso - UYU)</option>";
				echo "<option value='860'"; if($_SESSION['PAYMENT_CURRENCY']=='860') echo "selected"; echo ">860 (Uzbekistan som - UZS)</option>";
				echo "<option value='937'"; if($_SESSION['PAYMENT_CURRENCY']=='937') echo "selected"; echo ">937 (Venezuelan bolívar - VEF)</option>";
				echo "<option value='704'"; if($_SESSION['PAYMENT_CURRENCY']=='704') echo "selected"; echo ">704 (Vietnamese dong - VND)</option>";
				echo "<option value='548'"; if($_SESSION['PAYMENT_CURRENCY']=='548') echo "selected"; echo ">548 (Vanuatu vatu - VUV)</option>";
				echo "<option value='882'"; if($_SESSION['PAYMENT_CURRENCY']=='882') echo "selected"; echo ">882 (Samoan tala - WST)</option>";
				echo "<option value='950'"; if($_SESSION['PAYMENT_CURRENCY']=='950') echo "selected"; echo ">950 (CFA franc BEAC - XAF)</option>";
				echo "<option value='961'"; if($_SESSION['PAYMENT_CURRENCY']=='961') echo "selected"; echo ">961 (Silver (one troy ounce) - XAG)</option>";
				echo "<option value='959'"; if($_SESSION['PAYMENT_CURRENCY']=='959') echo "selected"; echo ">959 (Gold (one troy ounce) - XAU)</option>";
				echo "<option value='955'"; if($_SESSION['PAYMENT_CURRENCY']=='955') echo "selected"; echo ">955 (European Composite Unit (EURCO) (bond market unit) - XBA)</option>";
				echo "<option value='956'"; if($_SESSION['PAYMENT_CURRENCY']=='956') echo "selected"; echo ">956 (European Monetary Unit (E.M.U.-6) (bond market unit) - XBB)</option>";
				echo "<option value='957'"; if($_SESSION['PAYMENT_CURRENCY']=='957') echo "selected"; echo ">957 (European Unit of Account 9 (E.U.A.-9) (bond market unit) - XBC)</option>";
				echo "<option value='958'"; if($_SESSION['PAYMENT_CURRENCY']=='958') echo "selected"; echo ">958 (European Unit of Account 17 (E.U.A.-17) (bond market unit) - XBD)</option>";
				echo "<option value='951'"; if($_SESSION['PAYMENT_CURRENCY']=='951') echo "selected"; echo ">951 (East Caribbean dollar - XCD)</option>";
				echo "<option value='960'"; if($_SESSION['PAYMENT_CURRENCY']=='960') echo "selected"; echo ">960 (Special drawing rights - XDR)</option>";
				echo "<option value='Nil'"; if($_SESSION['PAYMENT_CURRENCY']=='Nil') echo "selected"; echo ">Nil (UIC franc (special settlement currency) - XFU)</option>";
				echo "<option value='952'"; if($_SESSION['PAYMENT_CURRENCY']=='952') echo "selected"; echo ">952 (CFA franc BCEAO - XOF)</option>";
				echo "<option value='964'"; if($_SESSION['PAYMENT_CURRENCY']=='964') echo "selected"; echo ">964 (Palladium (one troy ounce) - XPD)</option>";
				echo "<option value='953'"; if($_SESSION['PAYMENT_CURRENCY']=='953') echo "selected"; echo ">953 (CFP franc (franc Pacifique) - XPF)</option>";
				echo "<option value='962'"; if($_SESSION['PAYMENT_CURRENCY']=='962') echo "selected"; echo ">962 (Platinum (one troy ounce) - XPT)</option>";
				echo "<option value='994'"; if($_SESSION['PAYMENT_CURRENCY']=='994') echo "selected"; echo ">994 (SUCRE - XSU)</option>";
				echo "<option value='963'"; if($_SESSION['PAYMENT_CURRENCY']=='963') echo "selected"; echo ">963 (Code reserved for testing purposes - XTS)</option>";
				echo "<option value='965'"; if($_SESSION['PAYMENT_CURRENCY']=='965') echo "selected"; echo ">965 (ADB Unit of Account - XUA)</option>";
				echo "<option value='999'"; if($_SESSION['PAYMENT_CURRENCY']=='999') echo "selected"; echo ">999 (No currency - XXX)</option>";
				echo "<option value='886'"; if($_SESSION['PAYMENT_CURRENCY']=='886') echo "selected"; echo ">886 (Yemeni rial - YER)</option>";
				echo "<option value='710'"; if($_SESSION['PAYMENT_CURRENCY']=='710') echo "selected"; echo ">710 (South African rand - ZAR)</option>";
				echo "<option value='967'"; if($_SESSION['PAYMENT_CURRENCY']=='967') echo "selected"; echo ">967 (Zambian kwacha - ZMW)</option>";
				?>
			</select>
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="PAYMENT_ACTION">Payment action</label>
			<select name="PAYMENT_ACTION" id="PAYMENT_ACTION">				
				<option value="">- select -</option>
    			<option value="100" <?php if($_SESSION['PAYMENT_ACTION']=='100') echo "selected"; ?>>100 (Autorisation)</option>
    			<option value="101" <?php if($_SESSION['PAYMENT_ACTION']=='101') echo "selected"; ?>>101 (Autorisation+Validation)</option>
    			<option value="108" <?php if($_SESSION['PAYMENT_ACTION']=='108') echo "selected"; ?>>108 (Demande information)</option>
    			<option value="110" <?php if($_SESSION['PAYMENT_ACTION']=='110') echo "selected"; ?>>110 (Autorisation REC - enregistrement CVV)</option>
    			<option value="111" <?php if($_SESSION['PAYMENT_ACTION']=='111') echo "selected"; ?>>111 (Autorisation+Validation REC - enregistrement CVV)</option>
    			<option value="120" <?php if($_SESSION['PAYMENT_ACTION']=='120') echo "selected"; ?>>120 (Autorisation sans CVV)</option>
    			<option value="121" <?php if($_SESSION['PAYMENT_ACTION']=='121') echo "selected"; ?>>121 (Autorisation+Validation sans CVV)</option>
    			<option value="150" <?php if($_SESSION['PAYMENT_ACTION']=='150') echo "selected"; ?>>150 (Virement)</option>
    			<option value="201" <?php if($_SESSION['PAYMENT_ACTION']=='201') echo "selected"; ?>>201 (Validation)</option>
    			<option value="202" <?php if($_SESSION['PAYMENT_ACTION']=='202') echo "selected"; ?>>202 (R&#233;autorisation)</option>
    			<option value="204" <?php if($_SESSION['PAYMENT_ACTION']=='204') echo "selected"; ?>>204 (D&#233;bit)</option>
    			<option value="421" <?php if($_SESSION['PAYMENT_ACTION']=='421') echo "selected"; ?>>421 (Remboursement)</option>
    			<option value="422" <?php if($_SESSION['PAYMENT_ACTION']=='422') echo "selected"; ?>>422 (Recr&#233;dit)</option>			
    		</select>
    		<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="PAYMENT_MODE">Payment mode</label>
			<select	name="PAYMENT_MODE" id="PAYMENT_MODE">				
				<option value="">- select -</option>
    			<option value="CPT" <?php if($_SESSION['PAYMENT_MODE']=='CPT') echo "selected"; ?>>CPT (Comptant)</option>
    			<option value="DIF" <?php if($_SESSION['PAYMENT_MODE']=='DIF') echo "selected"; ?>>DIF (Diff&#233;r&#233;)</option>
    			<option value="NX" <?php if($_SESSION['PAYMENT_MODE']=='NX') echo "selected"; ?>>NX (N fois)</option>
    			<option value="REC" <?php if($_SESSION['PAYMENT_MODE']=='REC') echo "selected"; ?>>REC (R&#233;current)</option>			
    			<option value="001" <?php if($_SESSION['PAYMENT_MODE']=='001') echo "selected"; ?>>001 (PASS Comptant)</option>			
    			<option value="002" <?php if($_SESSION['PAYMENT_MODE']=='002') echo "selected"; ?>>002 (PASS Crédit)</option>			
    			<option value="003" <?php if($_SESSION['PAYMENT_MODE']=='003') echo "selected"; ?>>003 (PASS Epargne)</option>			
    			<option value="004" <?php if($_SESSION['PAYMENT_MODE']=='004') echo "selected"; ?>>004 (PASS N mois)</option>			
    			<option value="005" <?php if($_SESSION['PAYMENT_MODE']=='005') echo "selected"; ?>>005 (PASS Promotion)</option>			
    			<option value="006" <?php if($_SESSION['PAYMENT_MODE']=='006') echo "selected"; ?>>006 (PASS 3 fois sans intérêts)</option>			
    			<option value="007" <?php if($_SESSION['PAYMENT_MODE']=='007') echo "selected"; ?>>007 (PASS Report 3 mois)</option>
    		</select>
    		<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="LANGUAGE_CODE">Language code</label>
    		<select	name="LANGUAGE_CODE" id="LANGUAGE_CODE"> 
    			<option value="">- browser language -</option>
    			<option value="cs" <?php if($_SESSION['LANGUAGE_CODE']=='cs') echo "selected"; ?>>cs (Czech - Česky)</option>
    			<option value="da" <?php if($_SESSION['LANGUAGE_CODE']=='da') echo "selected"; ?>>da (Danish - Dansk)</option>	     	 
    			<option value="nl" <?php if($_SESSION['LANGUAGE_CODE']=='nl') echo "selected"; ?>>nl (Dutch - Nederlands)</option>	    
    			<option value="en" <?php if($_SESSION['LANGUAGE_CODE']=='en') echo "selected"; ?>>en (English - English)</option>
    			<option value="et" <?php if($_SESSION['LANGUAGE_CODE']=='et') echo "selected"; ?>>et (Estonian - Eesti keel)</option>	
    			<option value="fi" <?php if($_SESSION['LANGUAGE_CODE']=='fi') echo "selected"; ?>>fi (Finnish - Suomen kieli)</option>	       
    			<option value="fr" <?php if($_SESSION['LANGUAGE_CODE']=='fr') echo "selected"; ?>>fr (French - Fran&ccedil;ais)</option>
    			<option value="de" <?php if($_SESSION['LANGUAGE_CODE']=='de') echo "selected"; ?>>de (German - Deutsch)</option>
    			<option value="el" <?php if($_SESSION['LANGUAGE_CODE']=='el') echo "selected"; ?>>el (Greek - Ελληνικά)</option>	     
    			<option value="he" <?php if($_SESSION['LANGUAGE_CODE']=='he') echo "selected"; ?>>he (Hebrew - עברית)</option>
    			<option value="hu" <?php if($_SESSION['LANGUAGE_CODE']=='hu') echo "selected"; ?>>hu (Hungarian - magyar)</option>	  
    			<option value="ita" <?php if($_SESSION['LANGUAGE_CODE']=='ita') echo "selected"; ?>>ita (Italian - Italiano)</option>
    			<option value="no" <?php if($_SESSION['LANGUAGE_CODE']=='no') echo "selected"; ?>>no (Norwegian - Norsk)</option>
    			<option value="pt" <?php if($_SESSION['LANGUAGE_CODE']=='pt') echo "selected"; ?>>pt (Portuguese - Portugu&ecirc;s)</option>
    			<option value="pl" <?php if($_SESSION['LANGUAGE_CODE']=='pl') echo "selected"; ?>>pl (Polish - Polski)</option>
    			<option value="ru" <?php if($_SESSION['LANGUAGE_CODE']=='ru') echo "selected"; ?>>ru (Russian - русский язык)</option>		    
    			<option value="sk" <?php if($_SESSION['LANGUAGE_CODE']=='sk') echo "selected"; ?>>sk (Slovak - Slovenčina)</option>	      
    			<option value="sv" <?php if($_SESSION['LANGUAGE_CODE']=='sv') echo "selected"; ?>>sv (Slovene - Slovenščina)</option>      
    			<option value="es" <?php if($_SESSION['LANGUAGE_CODE']=='es') echo "selected"; ?>>es (Spanish - Espa&ntilde;ol)</option>
    			<option value="uk" <?php if($_SESSION['LANGUAGE_CODE']=='uk') echo "selected"; ?>>uk (Ukrainian - українська мова)</option>        
    		</select>
		</div>
		<div class="row">
			<label for="CUSTOM_PAYMENT_TEMPLATE_URL">Template URL</label>
			<input type="text" name="CUSTOM_PAYMENT_TEMPLATE_URL" id="CUSTOM_PAYMENT_TEMPLATE_URL" value="<?php echo $_SESSION['CUSTOM_PAYMENT_TEMPLATE_URL']?>">
		</div>
		<div class="row">
			<label for="CUSTOM_PAYMENT_PAGE_CODE">Custom page code</label>
			<input type="text" name="CUSTOM_PAYMENT_PAGE_CODE" id="CUSTOM_PAYMENT_PAGE_CODE" value="<?php echo $_SESSION['CUSTOM_PAYMENT_PAGE_CODE']?>">
		</div>
	</fieldset>
	<?php include '../fieldset/urls.php';?>
	<fieldset>		
		<h4>Widget customization</h4>
		<div class="row">
		<label for="inCss">CSS</label>
		<?php
		if(isset($_SESSION['CUSTOM_WIDGET_CSS']) && $_SESSION['CUSTOM_WIDGET_CSS'] != null){
		    echo "<input type='text' value='".$_SESSION['CUSTOM_WIDGET_CSS']."' disabled>";
		    echo "<input type='hidden' id='inCss' name='inCss' value='".$_SESSION['CUSTOM_WIDGET_CSS']."'>";
		    echo "<a class='help' href='#' onClick='deleteCss();'>supprimer</a>";
		}else{
		    echo "<input type='file' id='inCss' name='inCss'>";
		}
		?>	
		</div>
		<div class="row">		
		<label for="inJs">JavaScript</label>
		<?php
		if(isset($_SESSION['CUSTOM_WIDGET_JS']) && $_SESSION['CUSTOM_WIDGET_JS'] != null){
		    echo "<input type='text' value='".$_SESSION['CUSTOM_WIDGET_JS']."' disabled>";
		    echo "<input type='hidden' id='inJs' name='inJs' value='".$_SESSION['CUSTOM_WIDGET_JS']."'>";
		    echo "<a class='help' href='#' onClick='deleteJs();'>supprimer</a>";
		}else{
		    echo "<input type='file' id='inJs' name='inJs'>";		    
		}
		?>		
		</div>
		<input type='hidden' id='deleteFile' name='deleteFile' value=0>		
	</fieldset>
	<?php include '../fieldset/buyer.php';?>
	<?php include '../fieldset/order.php'?>
	<?php include '../fieldset/privateDataList.php'?>
  <input type="submit" class="submit" value="Sauvegarder">
</form>