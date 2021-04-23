<?php
ob_start();
include 'core.php'; 
include 'market.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Nokuex </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" >
    <link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

	<?php include 'pre_loader.php'; ?>

    <!-- App Header -->
    <div class="appHeader bg-primary text-light" style="border: none" >
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="assets/img/logo3.png" style="width:200px" alt="logo" class="logo">
        </div>
        <div class="right">
            <a href="profile.php" class="headerButton">
                <img src="assets/img/sample/avatar/user.png" alt="image" class="imaged w32">
            </a>
        </div>
    </div>
    <!-- * App Header -->

	<?php if(ISSET($_GET['btc'])): ?>
		<?php include 'bitcoin_board.php'; ?>
	<?php endif; ?>
	
	<?php if(ISSET($_GET['eth'])): ?>
		<?php include 'eth_board.php'; ?>
	<?php endif; ?>
	
	<?php if(ISSET($_GET['usdt'])): ?>
		<?php include 'usdt_board.php'; ?>
	<?php endif; ?>
	

	<?php include 'bottom_nav.php'; ?>

    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="agent.js?v=a"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/ionicons.min.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/baseae52.js?v=5"></script>
	<script src="assets/js/custom.js?v=2"></script>
	
	<script> 
		function calculate() {
			var bitUSD = $("#BuybitUSD").val();
			var btcprice = <?php echo $btc_price; ?>;
			var NGNBTC = bitUSD*btcprice;
			$("#BuyBTC").val(NGNBTC);
		}
		
		
		$(document).ready(function(){
			$("select#BuyCoin").change(function(){
				var selectedCoin = $(this).children("option:selected").val();
				//var selectedCoinID = ""+selectedCoin;
				
				if(selectedCoin){
					$(".box").not("." + selectedCoin).hide();
					$("." + selectedCoin).show();
				} else{
					$(".box").hide();
				}
				
			});
		});
		
	</script>
	
	
	
</body>

</html>