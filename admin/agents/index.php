<?php
    if (isset($_GET['page']) && $_GET['page'] == 'add_agent'){
        require_once "add_agent.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'add_agent_rate') {
        require_once "add_agent_rate.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'edit_agent_rate') {
        require_once "edit_agent_rate.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'manage_agent') {
        require_once "manage_agent.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'view_rates') {
        require_once "view_rates.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'edit_agent') {
        require_once "edit_agent.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'agent_wallet') {
        require_once "agent_wallet.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'transact_agent') {
        require_once "transact_agent.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'agent_withdraw') {
        require_once "agent_withdraw.php";
    }
?>