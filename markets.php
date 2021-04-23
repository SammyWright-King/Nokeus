<?php 

$all_date = 'https://api.coindesk.com/v1/bpi/currentprice.json';
$all_json = file_get_contents($all_date);

$data = json_decode($all_json, TRUE);

$btc_current_price = $data['bpi']['USD']['rate'];
$btc_price_change_percentage_24h = $data[0]["price_change_percentage_24h"];
$btc_price_change_percentage_24h = round($btc_price_change_percentage_24h, 2);

$eth_current_price = $data[1]["current_price"];
$eth_price_change_percentage_24h = $data[1]["price_change_percentage_24h"];
$eth_price_change_percentage_24h = round($eth_price_change_percentage_24h, 2);

$xrp_current_price = $data[2]["current_price"];
$xrp_price_change_percentage_24h = $data[2]["price_change_percentage_24h"];
$xrp_price_change_percentage_24h = round($xrp_price_change_percentage_24h, 2);

$ltc_current_price = $data[6]["current_price"];
$ltc_price_change_percentage_24h = $data[6]["price_change_percentage_24h"];
$ltc_price_change_percentage_24h = round($ltc_price_change_percentage_24h, 2);

?>