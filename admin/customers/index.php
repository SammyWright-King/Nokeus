<?php
    $customers = $adm->getCustomers();

    if (isset($_GET['page']) && $_GET['page'] == 'customers'){
        require_once "customers.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'add') {
        require_once "add.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'edit') {
        require_once "edit.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'accounts') {
        require_once "accounts.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'add_money') {
        require_once "add_money.php";
    }
?>