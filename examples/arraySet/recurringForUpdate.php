<?php
// RECURRING
if (isset($_POST['rfuBillingLeft']))
    $array['recurring']['billingLeft'] = $_POST['rfuBillingLeft'];
if (isset($_POST['rfuBillingDay']))
    $array['recurring']['billingDay'] = $_POST['rfuBillingDay'];
if (isset($_POST['rfuEndDate']))
    $array['recurring']['endDate'] = $_POST['rfuEndDate'];
if (isset($_POST['rfuNewAmount']))
    $array['recurring']['newAmount'] = $_POST['rfuNewAmount'];
if (isset($_POST['rfuAmountModificationDate']))
    $array['recurring']['amountModificationDate'] = $_POST['rfuAmountModificationDate'];
