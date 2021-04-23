<?php
include "back/Connect.php";
include "back/Session.php";

$connect = new Connect();

$customer = $connect->getRequest("/auth",NULL, $_SESSION['x-token']);
$customer =json_decode($customer);

$params = [
    "id"=> $customer->data->_id,
    "agentId" => $customer->data->_id
];
$rates = $connect->getRequest("/rates", $params, $_SESSION['x-token']);
$rates = json_decode($rates);
$rates = $rates->data;


