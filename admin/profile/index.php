<?php
    if (isset($_GET['page']) && $_GET['page'] == 'viewprofile'){
        require_once "viewprofile.php";
    }
    elseif (isset($_GET['page']) && $_GET['page'] == 'editprofile') {
        require_once "editprofile.php";
    }
?>