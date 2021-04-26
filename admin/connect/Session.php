<?php

session_start();

if (!isset($_SESSION['loggedIn'])){
    //redirect();
    session_regenerate_id();
    $_SESSION['loggedIn'] = FALSE;
}
if(!isset($_SESSION['x-admin-token'])){
    redirect();
}
if (time()- $_SESSION['last_time'] > 1800){
    redirect();
}else{
    $_SESSION['last_time'] = time();
}

/**
 * redirect to login
 */
function redirect(){
    session_unset();
    session_destroy();
    $_SESSION=array();
    header("location: ./auth/login.php");
}