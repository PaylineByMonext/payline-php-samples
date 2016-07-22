<form action="../demos/direct.php" method="post" class="payline-form">
    <fieldset>
            <h4>getToken, full example</h4>
            <div class="row">
                <label for="cardNumber">Card number</label>
                <input type="text" name="cardNumber" id="cardNumber" value="4970100011222417" />
                <span class="help">(required)</span>
            </div>
            <div class="row">
                <label for="expirationDate">Card expiration date</label>
                <input type="text" name="expirationDate" id="expirationDate" value="01<?php echo date('y')+2?>" />
                <span class="help">(required. Format : "mmyy")</span>
            </div>
            <div class="row">
                <label for="contractNumber">Contract number</label>
                <input type="text" name="contractNumber" id="contractNumber" value="<?php echo $_SESSION['CONTRACT_NUMBER']?>" />
                <span class="help">(required)</span>
            </div>
   </fieldset>
   <input type="submit" name="submit" class="submit" value="getToken" />
</form>
