<?php
use Payline\PaylineSDK;
?>
<script type="text/javascript">
	Payline.jQuery(document).ready( function () {
		Payline.jQuery("#paymentForm").submit( function() {	// form submit
			Payline.jQuery.support.cors = true; // cross-domain ajax request
			var url = '<?php if($_SESSION['ENVIRONMENT'] == PaylineSDK::ENV_PROD){echo PaylineSDK::PROD_GET_TOKEN_SERVLET;}elseif($_SESSION['ENVIRONMENT'] == PaylineSDK::ENV_HOMO){echo PaylineSDK::HOMO_GET_TOKEN_SERVLET;}elseif($_SESSION['ENVIRONMENT'] == PaylineSDK::ENV_INT){echo PaylineSDK::INT_GET_TOKEN_SERVLET;}elseif($_SESSION['ENVIRONMENT'] == PaylineSDK::ENV_DEV){echo PaylineSDK::DEV_GET_TOKEN_SERVLET;} ?> ';
			var data = "data="+Payline.jQuery("#data").val() + "&accessKeyRef=<?php echo $_SESSION['ACCESS_KEY_REF']?>&cardNumber=" + Payline.jQuery("#cardNumber").val() + "&cardExpirationDate=" + Payline.jQuery("#cardExp").val() + ((document.getElementById("cardCvx").disabled == false) ? "&cardCvx=" + Payline.jQuery("#cardCvx").val() : "");
			console.log(url);
			console.log(data);
			Payline.jQuery.ajax({				
				type: "POST",
         		url: url,
				data: data,             
				success: function(msg){ // AJAX call success
					document.getElementById("returnedData").value=msg;
					if(document.getElementById("3DSCheck").checked){
						document.getElementById("3DS").value = 1;
					}
					if(document.getElementById("doAuthCheck").checked){
						document.getElementById("doAuth").value = 1;
					}
          			document.getElementById("paymentAction").value = document.getElementById("i_paymentAction").value;
					document.getElementById("ajaxStep2").submit();
				},
				error:function (xhr, status, error){
					alert("Erreur lors de l'appel de Payline : " + xhr.responseText + " (" + status + " - " + error + ")");
				}
			});
			return false; // stay on same page when form is submited
		});
	});

	function inArray(needle, haystack) {
	    var length = haystack.length;
	    for(var i = 0; i < length; i++) {
		    if(haystack[i] == needle) return true;
	    }
	    return false;
	}

	function changeCardType(){
		var noCVX = ['BCMC','AURORE','COFINOGA','CYRILLUS','JCB','MAESTRO','SWITCH','DINERS'];
		if(inArray(document.getElementById("cardType").value,noCVX)){
			document.getElementById("cardCvx").disabled = true;
			document.getElementById("cardCvxHelp").innerHTML = ''; 
		}else{
			document.getElementById("cardCvx").disabled = false;
			document.getElementById("cardCvxHelp").innerHTML = '(required)';
		}
			
	}
</script>

<form id="paymentForm" action="#" class="payline-form">
	<fieldset>
		<h4>Card</h4>
		<div class="row">
			<label for="cardType">Card type</label>
			<select name="cardType" id="cardType" onChange="changeCardType()">
<!--
				<option value="1EURO.COM">1EURO.COM</option>
				<option value="3XCB">3XCB</option>
				<option value="3XONEY">3XONEY</option>
				<option value="3XONEY_SF">3XONEY_SF</option>
				<option value="4XONEY">4XONEY</option>
				<option value="4XONEY_SF">4XONEY_SF</option>
-->
				<option value="AMEX">AMEX</option>
				<option value="AMEX-ONE CLICK">AMEX-ONE CLICK</option>
				<option value="AMEX-REC BILLING">AMEX-REC BILLING</option>
<!--
				<option value="ANCV">ANCV</option>
-->
				<option value="AURORE">AURORE</option>

				<option value="BCMC">BCMC</option>
<!--
				<option value="BUYSTER">BUYSTER</option>
-->
				<option value="CADEAU_ACCORD">CADEAU_ACCORD</option>
				<option value="CASINO">CASINO</option>
				<option value="CB" selected>CB</option>
				<option value="CBPASS">CBPASS</option>
				<option value="CDGP">CDGP</option>
<!--
				<option value="CHEQUE">CHEQUE</option>
-->
				<option value="COFINOGA">COFINOGA</option>
				<option value="CYRILLUS">CYRILLUS</option>
				<option value="DINERS">DINERS</option>
				<option value="DISCOVER">DISCOVER</option>
				<option value="ELV">ELV</option>
				<option value="EMONEO">EMONEO</option>
				<option value="FNAC">FNAC</option>
				<option value="GIROPAY">GIROPAY</option>
				<option value="IDEAL">IDEAL</option>
<!--
				<option value="ILLICADO">ILLICADO</option>
				<option value="INTERNET+">INTERNET+</option>
-->
				<option value="JCB">JCB</option>
				<option value="KANGOUROU">KANGOUROU</option>
<!--
				<option value="LEETCHI">LEETCHI</option>
				<option value="LYDIA">LYDIA</option>
-->
				<option value="MAESTRO">MAESTRO</option>
				<option value="MANDARINE">MANDARINE</option>
				<option value="MASTERCARD">MASTERCARD</option>
				<option value="MASTERCARDPASS">MASTERCARDPASS</option>
				<option value="MASTERPASS">MASTERPASS</option>
<!--
				<option value="MAXICHEQUE">MAXICHEQUE</option>
-->
				<option value="MCVISA">MCVISA</option>
				<option value="MONEYCLIC">MONEYCLIC</option>
				<option value="NEOSURF">NEOSURF</option>
				<option value="NETELLER">NETELLER</option>
<!--
				<option value="OKSHOPPING">OKSHOPPING</option>
-->
				<option value="PASS">PASS</option>
<!--
				<option value="PAYFAIR">PAYFAIR</option>
				<option value="PAYLIB">PAYLIB</option>
				<option value="PAYPAL">PAYPAL</option>
				<option value="PAYSAFECARD">PAYSAFECARD</option>
				<option value="PINPAID">PINPAID</option>
-->
				<option value="PRINTEMPS">PRINTEMPS</option>
<!--
				<option value="PRZELEWY24">PRZELEWY24</option>
				<option value="SACARTE">SACARTE</option>
				<option value="SDD">SDD</option>
				<option value="SKRILL(MONEYBOOKERS)">SKRILL(MONEYBOOKERS)</option>
-->
				<option value="SOFINCO">SOFINCO</option>
<!--
				<option value="SOFORT">SOFORT</option>
				<option value="SURCOUF">SURCOUF</option>
-->
				<option value="SWITCH">SWITCH</option>
<!--
				<option value="TICKETSURF">TICKETSURF</option>
-->
				<option value="TOTALGR">TOTALGR</option>
<!--
				<option value="UKASH">UKASH</option>
-->
				<option value="VISA">VISA</option>
<!--
				<option value="VISAPREPAID">VISAPREPAID</option>
				<option value="VME">VME</option>
				<option value="WEXPAY">WEXPAY</option>
				<option value="YANDEX">YANDEX</option>
				<option value="YAPITAL">YAPITAL</option>
-->
			</select>
		</div>
		<div class="row">
			<label for="cardNumber">Card number</label>
			<input type="text" name="cardNumber" id="cardNumber" value="">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="cardExp">Card expiration date</label>
			<input type="text" name="cardExp" id="cardExp" value="01<?php echo date('y')+2?>">
			<span class="help">(required)</span>
		</div>
		<div class="row">
			<label for="cardCvx">Card CVX</label>
			<input type="text" name="cardCvx" id="cardCvx" value="">
			<span class="help" id="cardCvxHelp">(required)</span>
		</div>
	</fieldset>
	<fieldset>
		<h4>Payment</h4>
		<div class="row">
			<label for="i_paymentAction">Payment action</label>
			<select name="i_paymentAction" id="i_paymentAction">
			 <option value="100">100 (Autorisation)</option>
			 <option value="101" selected>101 (Autorisation+Validation)</option>
			 <option value="108">108 (Demande information)</option>
			 <option value="110">110 (Autorisation REC - enregistrement CVV)</option>
			 <option value="111">111 (Autorisation+Validation REC - enregistrement CVV)</option>
			 <option value="120">120 (Autorisation sans CVV)</option>
			 <option value="121">121 (Autorisation+Validation sans CVV)</option>
			 <option value="201">201 (Validation)</option>
			 <option value="204">204 (D&#233;bit)</option>
			 <option value="421">421 (Remboursement)</option>
			 <option value="422">422 (Recr&#233;dit)</option>
			 <option value="202">202 (R&#233;autorisation)</option>
		</select>
		</div>
		<div class="row">
			<label for="returnUrl">Return URL</label>
			<input type="text" name="returnUrl" id="returnUrl" value="<?php echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']?>" size="100">
		</div>
		<div class="row">
			<label for="data">Data</label>
			<input type="text" name="data" id="data" disabled="true" value="<?php echo CRYPTED_DATA?>" size="100">
		</div>
		<div class="row">
			<label for="3DSCheck">3D Secure</label>
			<input type="checkbox" name="3DSCheck" id="3DSCheck">
			<span class="help">(redirection to ACS for 3DS password filling)</span>
		</div>
		<div class="row">
			<label for="doAuthCheck">call doAuthorization</label>
			<input type="checkbox" name="doAuthCheck" id="doAuthCheck" checked="true">
			<span class="help">(uncheck to simply display getToken result)</span>
		</div>
	</fieldset>
	<input type="submit" name="submit" class="submit" value="next">
</form>
<form action="ajax.php" method="post" name="ajaxStep2" id="ajaxStep2" class="payline-form">
	<input type="hidden" name="ajaxStep" id="ajaxStep" value="2">
	<input type="hidden" name="returnedData" id="returnedData" value="">
	<input type="hidden" name="3DS" id="3DS" value="0">
  <input type="hidden" name="doAuth" id="doAuth" value="0">
	<input type="hidden" name="paymentAction" id="paymentAction" value="">
</form>