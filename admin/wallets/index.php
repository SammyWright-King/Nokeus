<?php
    if (isset($_GET['page']) && $_GET['page'] == 'accounts'){
        require_once "accounts.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'add_money') {
        require_once "add_money.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'edit') {
        require_once "edit.php";
    }
?>