<?php
    $admin = $adm->getCustomer();
    $btc = $adm->getBitcoinRate('USD');
    $eth = $adm->getEthereumRate('USD');
    $usdt = 0.99;

    if (isset($_GET['page']) && $_GET['page'] == 'company'){
        require_once "company.php";
    }
?>