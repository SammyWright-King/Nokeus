<?php
ob_start();
include 'core.php'; 
include 'back/log.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Nokuex </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=5">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Nokuex App">
    <meta name="keywords" content="Trade with Nokuex. Buy and sell Bitcoin USDT, RMB, Ethereum & Gift Cards" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="shortcut icon" href="assets/img/favicon.png">
</head>

<body>

    <?php include 'pre_loader.php'; ?>

    <!-- App Header -->
    <div class="appHeader bg-primary position-absolute">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack"  style="color:#fff" >
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
			<img src="assets/img/logo3.png" style="width:200px" alt="logo" class="logo">
		</div>
        <div class="right">
            <a href="#" class="headerButton" style="color:#fff" >
                
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule" style="margin-top:15vh" >

        <div class="section mt-2 text-center">
            <h1> Staff Login</h1>
            <h4> Login to continue	 </h4>
        </div>
        <div class="section mb-5 p-2">
		
				<?php

					if(ISSET($_COOKIE['agent'])) {
						header('location:home.php?btc');
					}

				?>

            <form action="#" method="post" >
                <div class="card" style="border-radius: 8px 8px 0 0" >
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="text" class="form-control"  placeholder="Username" id="username" required >
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="password" class="form-control" placeholder="Password" id="password" required >
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                    </div>
                </div>
				<button type="button" id="loginButton" onclick="login()" style="border-radius: 0 0 8px 8px" class="btn btn-primary btn-block btn-lg"> LOGIN </button>
				<button type="button" id="loginLoading" style="border-radius: 0 0 8px 8px;display:none" class="btn btn-default btn-block btn-lg"> <img src="assets/img/loader.gif" /> </button>
            </form>
        </div>

    </div>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="agent.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="assets/unpkg.com/ionicons%405.0.0/dist/ionicons.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/ionicons.min.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/baseae52.js?v=5"></script>


</body>
</html>