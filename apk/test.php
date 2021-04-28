<?php

include "back/Connect.php";

$connect = new Connect();

$arr = array(
    "email" => "php.guy@development.com",
    "password" => "123456"
);
$req= $connect->postRequest('/auth/login',  $arr);
$res = json_decode($req);
//var_dump($req);

$btc = $connect->accessURL('https://api.coinbase.com/v2/prices/BTC-USD/buy');
$btc = json_decode($btc);

echo $btc->data->amount."\n";
echo $btc->data->amount * 2;

$params = array(
    "account_name"=> "donald",
    "account_number" => '1234567890',
    "bank_name" => 'uba'
);


$update = $connect->put('/customers', $params, $res->token);
var_dump($update);

$id = '60761706f7089f00170efe60';
$complete = $connect->put('/transactions/'.$id.'/complete', NULL, $res->token);
//var_dump($complete);
$complete = json_decode($complete);
echo $complete->status;

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


