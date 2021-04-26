<?php
    session_start();
    include "Connect.php";

    $data = [];

    $arr = [
        "email" => $_POST['email'],
        "password" => $_POST['pwd'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "phone" => $_POST['phone']
    ];
    $connect = new Connect();
    $req = $connect->postRequest('/auth/signup', $arr);
    $response = json_decode($req);
    if($response->status == TRUE){
        $_SESSION["loggedin"]=TRUE;
        $_SESSION['userid']  = $_POST['email'];//initiliaze session variable  to username
        $_SESSION['last_time']=time();
        $_SESSION['x-token'] = $response->token;

        $data['code'] = 100;
        $data['desc'] = "Logged In Successfully";
    }else{
        $data['code'] = 112;
        $data['desc'] = "Signup Not Successful";
    }

    echo json_encode($data);