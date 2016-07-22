<p>This page displays transactions done through example pages</p>
<br />

<?php
$transactionsFile = '../index/transactions.dat';
if(isset($_POST['clear'])){
	$handle = fopen($transactionsFile, 'w');
	fwrite($handle, null);
	fclose($handle);
}
$handle = fopen($transactionsFile, 'r');
?>
<table style='border: 1px solid white;'>
	<tr>
		<td colspan='8' align='right'>
		<form action="index.php?e=transactions" method="POST">
			<input type="submit" name="clear" class="submit" value="clear history" onclick="confirm('clear all transactions ?')" align="right"/>
		</form><br/>
		</td>
	</tr>
	<tr style='background-color:black;'>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='140'>date</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='90'>Contract</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='120'>Order ref.</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='130'>Transaction ID</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='140'>Transaction type</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='80'>result</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='200'>token</td>
		<td style='padding:2px;color:white;text-align:center;font-weight:bold;' width='90'>actions</td>
	</tr>
	<?php
	$tr = 0;
	while($line = fgets($handle)){
		$lineEx = explode('#', $line);
		$transactionInfo = array();
		foreach ($lineEx as $data){
			$dataEx = explode('=', $data);
			$transactionInfo[$dataEx[0]] = $dataEx[1];
		}
		$transactionType = '';
		switch ($transactionInfo['ACTION']) {
			case '100':
			case '110':
			case '120':
				$transactionType = 'Autorisation';
				break;
			case '101':
			case '111':
			case '121':
				$transactionType = 'Autorisation+Validation';
				break;
			case '201':
				$transactionType = 'Validation';
				break;
			case '421':
				$transactionType = 'Remboursement';
				break;
			case '204':
				$transactionType = 'Debit';
				break;
			case '422':
				$transactionType = 'Credit';
				break;
			case 'AN':
				$transactionType = 'Annulation';
				break;
			case 'RE':
				$transactionType = 'ReAutorisation';
				break;
			case 'REV':
				$transactionType = 'ReAutorisation+Validation';
				break;
		}
		$trColor = '#FFFFFF';
		if($tr%2 != 0){
			$trColor = '#DDDDDD';
		}
		echo "<tr style='background-color: $trColor;font-family: Arial; font-size: 8pt;'>";
        echo "<td style='padding:2px;'>".date('Y/m/d H:i:s',$transactionInfo['DATE']).'</td>'; // date
        echo "<td style='padding:2px;'>".$transactionInfo['CONTRACT'].'</td>'; // Contract
        echo "<td style='padding:2px;'>".$transactionInfo['ORDER_REF'].'</td>'; // Order ref.
        $lienGetTD = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/extended.php?e=getTransactionDetails&transactionId='.$transactionInfo['TRANSACTION_ID']."'>".$transactionInfo['TRANSACTION_ID'].'</a>';
        echo "<td style='padding:2px;'>".$lienGetTD."</td>"; // Transaction ID
        echo "<td style='padding:2px;'>".$transactionType.'</td>'; // transaction type
        $imgResult =  $_SESSION['KIT_ROOT'].'examples/demos/img/cross.png';
        if(in_array($transactionInfo['RESULT'], array('00000','00100','02500','02501','03000','04003','34230','34330'))){
          $imgResult =  $_SESSION['KIT_ROOT'].'examples/demos/img/ok.png';
        }
        echo "<td style='padding:2px;'>".$transactionInfo['RESULT']."&nbsp<img height='15' src='$imgResult'></td>"; // result code
        $lienGetWPD = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/web.php?e=getWebPaymentDetails&token='.$transactionInfo['TOKEN']."'>".$transactionInfo['TOKEN'].'</a>';
        echo "<td style='padding:2px;'>".$lienGetWPD.'</td>'; // token
        $lienReset = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/direct.php?e=doReset&tid='.$transactionInfo['TRANSACTION_ID']."'><img alt='doReset' height='15' src='".$_SESSION['KIT_ROOT']."examples/demos/img/reset.png'></a>";
        $lienCapture = "<img alt='' height='20' src='".$_SESSION['KIT_ROOT']."examples/demos/img/filler.png'>";
        if(in_array($transactionInfo['ACTION'], array('100','110','120','RE'))){
          $lienCapture = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/direct.php?e=doCapture&tid='.$transactionInfo['TRANSACTION_ID'].'&contractNumber='.$transactionInfo['CONTRACT'].'&currency='.$transactionInfo['CURRENCY'].'&amount='.$transactionInfo['AMOUNT']."'><img alt='doCapture' height='20' src='".$_SESSION['KIT_ROOT']."examples/demos/img/capture.png'></a>";
        }
        $lienRefund = "<img alt='' height='20' src='".$_SESSION['KIT_ROOT']."examples/demos/img/filler.png'>";
        if(in_array($transactionInfo['ACTION'], array('100','110','120','101','111','121','204','RE','REV'))){
          $lienRefund = "<a href='".$_SESSION['KIT_ROOT'].'examples/demos/direct.php?e=doRefund&tid='.$transactionInfo['TRANSACTION_ID'].'&contractNumber='.$transactionInfo['CONTRACT'].'&currency='.$transactionInfo['CURRENCY'].'&amount='.$transactionInfo['AMOUNT']."'><img alt='doRefund' height='20' src='".$_SESSION['KIT_ROOT']."examples/demos/img/refund.png'></a>";
        }
        echo "<td style='padding:2px;'>$lienReset&nbsp;$lienCapture&nbsp;$lienRefund</td>"; // actions
        echo '</tr>';
        $tr++;
	}
	if($tr == 0){
		echo "<tr><td colspan='8' align='center'><br/>--  No transaction found  --</td></tr>";
	}
    echo '</table>';
	fclose($handle);
?>