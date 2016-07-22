<form action="../demos/direct.php" method="post"  class="payline-form">
	<fieldset>
        <h4>get balance</h4>
        <?php
          $displayedPage = 'getBalance';
          include '../fieldset/version.php';
        ?>      
        <div class="row">
            <label for="cardNumber">Card number</label>
            <input type="text" name="cardNumber" id="cardNumber" value="" />
        </div>
        <div class="row">
            <label for="contractNumber">Contract number</label>
            <input type="text" name="contractNumber" id="contractNumber" value="">
        </div>
	</fieldset>
    <input type="submit" name="submit" class="submit" value="getBalance" />
</form>
