<?php

include "back/Connect.php";


$connect = new Connect();
$req = $connect->makeRequest('', "GET");
echo $req."\n";

$arr = array(
    "email" => "php.guy@development.com",
    "password" => "123456"
);
$req= $connect->postRequest('/auth/login',  $arr);
var_dump($req);

//$res = json_decode($req);
////print_r($res);
//echo "\n";
////echo $res->message."\n";
//
//////$customer = $connect->makeRequest("/auth", "GET", $res->token);
//$customer = $connect->getRequest("/auth",NULL, $res->token);
//$customer = json_decode($customer);
////print_r($customer);
//
////
////echo "\n\n";
////$params = [
////    "id"=> $customer->data->_id,
////    "agentId" => $customer->data->_id
////];
////$rates = $connect->getRequest("/rates", NULL, $res->token);
////$rates = json_decode($rates);
////$rates = $rates->data;
////foreach($rates as $rate){
////    echo $rate->bitcoin_rate."\n";
////}
//
//$customers = $connect->getRequest('/customers', NULL, $res->token);
//$customers = json_decode($customers);
//foreach ($customers->data as $customer){
//    echo $customer->email."\n";
//}


