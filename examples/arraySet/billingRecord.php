<?php
// BILLINGRECORD
if (isset($_POST['brDate']))
    $array['billingRecordForUpdate']['date'] = $_POST['brDate'];
if (isset($_POST['brAmount']))
    $array['billingRecordForUpdate']['amount'] = $_POST['brAmount'];
if (isset($_POST['brStatus']))
    $array['billingRecordForUpdate']['status'] = $_POST['brStatus'];
if (isset($_POST['brExecutionDate']))
    $array['billingRecordForUpdate']['executionDate'] = $_POST['brExecutionDate'];
