<p>
	This page displays transactions done through example pages.
</p>
<?php
  require_once('../../include.php'); 
	$link = mysql_connect(DB_HOST, DB_OWNER, DB_PASS);
	if(!$link){
		echo "DB connect error <br/>";
	}elseif(isset($_POST['clear'])){
    mysql_select_db(DB_NAME, $link);
    $query = "DELETE FROM `billingrecord` WHERE `ENVIRONMENT` = '".ENVIRONMENT."' AND `MERCHANT_ID` = '".MERCHANT_ID."'";
    $result = mysql_query($query, $link);
    if (!$result) {
      echo mysql_error($link);
    }
  }else{
    mysql_select_db(DB_NAME, $link);
    $query = "SELECT *, UNIX_TIMESTAMP(`DATE`) as DATE_TMSTMP  FROM `billingrecord` WHERE `ENVIRONMENT` = '".ENVIRONMENT."' AND `MERCHANT_ID` = '".MERCHANT_ID."' ORDER BY `DATE` DESC";
    $result = mysql_query($query, $link);
    if (!$result) {
      echo mysql_error($link);
    }else{?>
        <table style='border: 1px solid white;'>
          <tr>
            <td colspan='5' align='right'>
              <form action="index.php?e=billingRecords" method="POST">
                <input type="submit" name="clear" class="submit" value="clear history" onclick="confirm('clear all transactions ?')" align="right"/>
              </form>
              <br/>
            </td>
          </tr>
          <tr style='background-color:black;'>
            <td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='140'>date</td>
            <td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='90'>Contract</td>
            <td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='300'>Wallet ID</td>
            <td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='130'>Payment record ID</td>
            <td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='130'>Billing record ID</td>
          </tr>
        <?php
        $tr = 0;
        while($billingRecordInfo = mysql_fetch_assoc($result)){
          $trColor = '#FFFFFF';
          if($tr%2 != 0){
            $trColor = '#DDDDDD'; 
          }
          echo "<tr style='background-color: $trColor;font-family: Arial; font-size: 8pt;'>";
          echo "<td style='padding:2px;'>".$billingRecordInfo['DATE'].'</td>'; // date
          echo "<td style='padding:2px;'>".$billingRecordInfo['CONTRACT'].'</td>'; // Contract
          echo "<td style='padding:2px;'>".$billingRecordInfo['WALLET_ID']."</td>"; // Wallet ID
          echo "<td style='padding:2px;'>".$billingRecordInfo['PAYMENT_RECORD_ID']."</td>"; // Payment Record ID
          $link = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/wallet.php?e=getBillingRecord&paymentRecordId='.$billingRecordInfo['PAYMENT_RECORD_ID'].'&billingRecordId='.$billingRecordInfo['BILLING_RECORD_ID'].'&contractNumber='.$billingRecordInfo['CONTRACT']."'>".$billingRecordInfo['BILLING_RECORD_ID'].'</a>';
          echo "<td style='padding:2px;'>".$link.'</td>'; // Billing record ID
          echo '</tr>';
          $tr++;
        }
        if($tr == 0){
          echo "<tr><td colspan='8' align='center'><br/>--  No billingRecord found  --</td></tr>";
        }
        echo '</table>';
    }
  }
?>