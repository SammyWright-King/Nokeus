<?php
session_start();
include "Connector.php";

$data = [];

$arr = [
    "email" => $_POST['email'],
    "password" => $_POST['pwd']
];
$connect = new Connector();
$req = $connect->postRequest('/auth/login', $arr);
$response = json_decode($req);

if($response->status == TRUE){
    //get customer info
    $customer = $connect->getRequest("/auth",NULL, $response->token);
    $customer = json_decode($customer);
    if(in_array("admin", $customer->data->roles)){
        $_SESSION["loggedin"]=TRUE;
        $_SESSION['userid']  = $_POST['email'];//initiliaze session variable  to username
        $_SESSION['last_time']=time();
        $_SESSION['x-admin-token'] = $response->token;

        $data['code'] = 100;
        $data['desc'] = "Login Successful";
    }else{
        $data['code'] = 102;
        $data['desc'] = "User is not Admin";
    }
}else{
    $data['code'] = 102;
    $data['desc'] = "Wrong Credentials";
}

echo json_encode($data);