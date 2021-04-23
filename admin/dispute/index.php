<?php
    if (isset($_GET['page']) && $_GET['page'] == 'dispute'){
        require_once "dispute.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'edithistory') {
        require_once "edithistory.php";
    }
?>