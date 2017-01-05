<?php
echo '<H3>Card</H3>';
print_a($_SESSION['3DS_AUTH_PAYMENT_DATA']);
echo '<br/><H3>ACS Response</H3>';
print_a($_POST, 0, true);
?>