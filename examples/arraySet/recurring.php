<?php
// RECURRING
if (isset($_POST['recurringFirstAmount']))
    $array['recurring']['firstAmount'] = $_POST['recurringFirstAmount'];
if (isset($_POST['recurringAmount']))
    $array['recurring']['amount'] = $_POST['recurringAmount'];
if (isset($_POST['recurringBillingCycle']))
    $array['recurring']['billingCycle'] = $_POST['recurringBillingCycle'];
if (isset($_POST['recurringBillingLeft']))
    $array['recurring']['billingLeft'] = $_POST['recurringBillingLeft'];
if (isset($_POST['recurringBillingDay']))
    $array['recurring']['billingDay'] = $_POST['recurringBillingDay'];
if (isset($_POST['recurringStartDate']))
    $array['recurring']['startDate'] = $_POST['recurringStartDate'];
if (isset($_POST['recurringEndDate']))
    $array['recurring']['endDate'] = $_POST['recurringEndDate'];
if (isset($_POST['recurringNewAmount']))
    $array['recurring']['newAmount'] = $_POST['recurringNewAmount'];
if (isset($_POST['recurringAmountModificationDate']))
    $array['recurring']['amountModificationDate'] = $_POST['recurringAmountModificationDate'];
if (isset($_POST['billingRank']))
    $array['recurring']['billingRank'] = $_POST['billingRank'];
