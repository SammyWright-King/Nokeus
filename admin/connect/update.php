<?php
session_start();
include "Connector.php";

$data = [];
//
$arr = [
   "account_name" => $_POST['account_name'],
    "account_number" => $_POST['account_number'],
    "bank_name" => $_POST['bank_name']
];

$connect = new Connector();
$req = $connect->put('/customers', $arr, $_SESSION['x-admin-token']);
$response = json_decode($req);
//
if($response->status == TRUE){
    $data['code'] = 100;
    $data['desc'] =  $response->message;
}else{
    $data['code'] = 102;
    $data['desc'] = "Wrong Credentials";
}


echo json_encode($data);