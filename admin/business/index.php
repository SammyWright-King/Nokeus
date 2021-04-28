<?php
    $transactions = $adm->getTransactions();

    $btc_usd = $adm->getBitcoinRate('USD');
    $eth_usd = $adm->getEthereumRate('USD');

    $btc_ng = $adm->getBitcoinRate('NGN');
    $eth_ng = $adm->getEthereumRate('NGN');

    if (isset($_GET['page']) && $_GET['page'] == 'buy'){
        require_once "buy.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'sell') {
        require_once "sell.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'buy_transact') {
        require_once "buy_transact.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'sell_transact') {
        require_once "sell_transact.php";
    }
?>