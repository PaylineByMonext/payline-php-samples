<?php
if(!file_exists("vendor/monext/payline-sdk")){
    echo "Package <a href='https://packagist.org/packages/monext/payline-sdk'>payline-sdk</a> is required. Run composer install.";
    exit();
}else{
    header("Location: examples/demos/index.php");
    exit();
}