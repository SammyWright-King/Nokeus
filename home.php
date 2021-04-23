<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Nokuex </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" >
    <link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

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

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title"> CREATE ORDER </span>
                        <h1 class="total"> BUY/SELL </h1>
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-toggle="modal" data-target="#depositActionSheet">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
                <div class="wallet-footer">
                    <div class="item" style="margin-right:5px" >
                        <a href="#" data-toggle="modal" data-target="#withdrawActionSheet">
                            <div class="bg-danger" style="border-radius:5px" >
                               <strong style="font-size:11pt;color:#fff;padding:10px" > BUY NOW </strong>
                            </div>
                        </a>
                    </div>
					
                    <div class="item" >
                        <a href="#" data-toggle="modal" data-target="#withdrawActionSheet">
                            <div class="bg-info" style="border-radius:5px" >
                               <strong style="font-size:11pt;color:#fff;padding:10px" > SELL NOW </strong>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Wallet Card -->

		<?php include 'current_orders.php'; ?>

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