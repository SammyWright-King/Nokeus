<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title> Nokuex </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=5">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Nokuex App">
    <meta name="keywords" content="Trade with Nokuex. Buy and sell Bitcoin USDT, RMB, Ethereum & Gift Cards" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <a href="app-settings.html" class="headerButton">
                <img src="assets/img/sample/avatar/user.png" alt="image" class="imaged w32">
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
		<br><br>
        <div class="section mt-2">
			<div class="section-title bg-danger" style="font-size:15pt;text-align:center;border-radius:5px 5px 0 0" > 15m 5s</div>
            <div class="card" style="border-radius:0 0 8px 8px"  >

                <div class="card-body">
                    
					<figure style="width:100%;margin:0;text-align:center" >
						<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=12qn4Dr2CsfVt994LgTbJ9aD66nddYXtpi"  />
					</figure>
					
					<p style="font-size:10pt;text-align:center;margin:0;color:#000" > 12qn4Dr2CsfVt994LgTbJ9aD66nddYXtpi </p>
					<br>
					<p style="margin:0" > Use priority when you send to enable faster confirmation  on the blockchain. <br> <span style="color:red" > Only send Bitcoins to this Address </span>  </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary" style="width:100%" > <i class="fa fa-copy"></i> &nbsp; COPY ADDRESS </a>
					<br><br>
					<button class="btn btn-danger btn-block" >  Cancel &nbsp; <i class="fa fa-close"></i> </button>
                </div>
            </div>
        </div>
		<br><br>


    </div>
    <!-- * App Capsule -->

	<?php include 'bottom_nav.php'; ?>

    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/ionicons.min.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/baseae52.js?v=5"></script>


</body>

</html>