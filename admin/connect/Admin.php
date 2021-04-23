<?php
include "Connector.php";
include "Session.php";

$connect = new Connector();

$customer = $connect->getRequest("/auth",NULL, $_SESSION['x-token']);
$customer =json_decode($customer);
$customer = $customer->data;

$params = [
    "id"=> $customer->_id,
    "agentId" => $customer->_id
];
$rates = $connect->getRequest("/rates/filter", $params, $_SESSION['x-token']);
$rates = json_decode($rates);

$customers = $connect->getRequest('/customers', NULL, $_SESSION['x-token']);
$customers = json_decode($customers);
$customers = $customers->data;

