<?php
session_start();
include "Connector.php";

$data = [];
//
$id = $_POST['trans_id'];
//
$connect = new Connector();
$req = $connect->put('/transactions/'.$id.'/complete', NULL, $_SESSION['x-admin-token']);
$response = json_decode($req);
////
if($response->status == TRUE){
    $data['code'] = 100;
    $data['desc'] =  "Transaction Updated Successfully";
}else{
    $data['code'] = 102;
    $data['desc'] = "Error Completing Transaction";
}


echo json_encode($data);

