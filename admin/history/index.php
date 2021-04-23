<?php
    if (isset($_GET['page']) && $_GET['page'] == 'viewhistory'){
        require_once "viewhistory.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'edithistory') {
        require_once "edithistory.php";
    }
?>