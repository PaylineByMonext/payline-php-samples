<p>
	This page displays payment records created through example pages.
</p>
<?php
$paymentRecordsFile = '../index/paymentRecords.dat';
if(isset($_POST['clear'])){
	$handle = fopen($paymentRecordsFile, 'w');
	fwrite($handle, null);
	fclose($handle);
}
$handle = fopen($paymentRecordsFile, 'r');
?>
<table style='border: 1px solid white;'>
  <tr>
    <td colspan='4' align='right'>
      <form action="index.php?e=paymentRecords" method="POST">
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
  </tr>
<?php
$tr = 0;
while($line = fgets($handle)){
  $lineEx = explode('#', $line);
  $paymentRecordInfo = array();
  foreach ($lineEx as $data){
      $dataEx = explode('=', $data);
      $paymentRecordInfo[$dataEx[0]] = $dataEx[1];
  }
  $trColor = '#FFFFFF';
  if($tr%2 != 0){
    $trColor = '#DDDDDD'; 
  }
  echo "<tr style='background-color: $trColor;font-family: Arial; font-size: 8pt;'>";
  echo "<td style='padding:2px;'>".$paymentRecordInfo['DATE'].'</td>'; // date
  echo "<td style='padding:2px;'>".$paymentRecordInfo['CONTRACT'].'</td>'; // Contract
  $linkGetW = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/wallet.php?e=getWallet&walletId='.$paymentRecordInfo['WALLET_ID'].'&contractNumber='.$paymentRecordInfo['CONTRACT']."'>".$paymentRecordInfo['WALLET_ID'].'</a>';
  echo "<td style='padding:2px;'>".$linkGetW."</td>"; // Wallet ID
  $linkGetPR = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/wallet.php?e=getPaymentRecord&paymentRecordId='.$paymentRecordInfo['PAYMENT_RECORD_ID'].'&contractNumber='.$paymentRecordInfo['CONTRACT']."'>".$paymentRecordInfo['PAYMENT_RECORD_ID'].'</a>';
  echo "<td style='padding:2px;'>".$linkGetPR.'</td>'; // Payment record ID
  echo '</tr>';
  $tr++;
}
if($tr == 0){
  echo "<tr><td colspan='4' align='center'><br/>--  No paymentRecord found  --</td></tr>";
}
echo '</table>';
fclose($handle);
?>