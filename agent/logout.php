<?php
ob_start();
include 'core.php';
$destroy = setcookie("agent", $employer_id, time()-3600, '/');
header('location: index.php');

?>