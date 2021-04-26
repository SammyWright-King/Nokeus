<?php
    $transactions = $adm->getTransactions();

    if (isset($_GET['page']) && $_GET['page'] == 'transaction_success'){
        require_once "transaction_success.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'transaction_declined') {
        require_once "transaction_declined.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'transaction_active') {
        require_once "transaction_active.php";
    }
?>