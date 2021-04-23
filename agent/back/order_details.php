<?php

if(ISSET($_POST['buy'])){

	include '../core.php';
	$BuyCoin = htmlentities($_POST['BuyCoin']);
	$BuybitUSD = htmlentities($_POST['BuybitUSD']);
	$BuyBTC = htmlentities($_POST['BuyBTC']);
	$BuyMin = htmlentities($_POST['BuyMin']);
	$BuyBank = htmlentities($_POST['BuyBank']);
	
	$date = time();
	
	if($BuyCoin=='Bitcoin') {
		$symbol = 'BTC';
	}
	if($BuyCoin=='Ethereum') {
		$symbol = 'ETH';
	}
	if($BuyCoin=='USDT') {
		$symbol = 'USDT';
	}

	$agent_Buy_order = mysql_query("INSERT INTO agent_buy_order(agent_username, BuyCoin, BuybitUSD, BuyBTC, BuyMin, BuyBank, date)VALUES('$agent_username','$BuyCoin','$BuybitUSD','$BuyBTC','$BuyMin', '$BuyBank', '$date')");
	
	if($agent_Buy_order) {	
		echo '
					<a href="#" class="item" style="border-radius:0px 0px 8px 8px" data-toggle="modal" data-target="#Buy" >
						<div class="detail">
							<div>
								<strong> &nbsp;&nbsp; Buy </strong>
								<p> &nbsp; &nbsp; Min: '.$BuyMin.' '.$symbol.' </p>
							</div>
						</div>
						<div class="right">
							<div class="price text-default"> '.$BuybitUSD.' NGN/BTC <br> <small> '.$BuyBank.' </small> </div>
						</div>
					</a>
		';
	}
}


if(ISSET($_POST['Sell'])){

	include '../core.php';
	$SellCoin = htmlentities($_POST['SellCoin']);
	$SellbitUSD = htmlentities($_POST['SellbitUSD']);
	$SellBTC = htmlentities($_POST['SellBTC']);
	$SellMin = htmlentities($_POST['SellMin']);
	$SellBank = htmlentities($_POST['SellBank']);
	
	$date = time();
	
	if($SellCoin=='BITCOIN') {
		$symbol = 'BTC';
	}
	
	$agent_Sell_order = mysql_query("INSERT INTO agent_sell_order(agent_username, SellCoin, SellbitUSD, SellBTC, SellMin, SellBank, date)VALUES('$agent_username','$SellCoin','$SellbitUSD','$SellBTC','$SellMin', '$SellBank', '$date')");
	
	if($agent_Sell_order) {	
		echo '
					<a href="#" class="item" style="border-radius:0px 0px 8px 8px" data-toggle="modal" data-target="#Sell" >
						<div class="detail">
							<div>
								<strong> &nbsp;&nbsp; Sell </strong>
								<p> &nbsp; &nbsp; Min: '.$SellMin.' '.$symbol.' </p>
							</div>
						</div>
						<div class="right">
							<div class="price text-default"> '.$SellbitUSD.' NGN/BTC <br> <small> '.$SellBank.' </small> </div>
						</div>
					</a>
		';
	}
}

?>
