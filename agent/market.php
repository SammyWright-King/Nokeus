<?php

$ticker = file_get_contents('https://blockchain.info/ticker');
$decode_prices = json_decode($ticker, TRUE);
$btc_price = $decode_prices['USD']['15m'];

?>