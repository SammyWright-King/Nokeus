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

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Total Balance</span>
                        <h1 class="total">$ 2,562.50</h1>
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-toggle="modal" data-target="#deposit">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <a href="#" class="btn btn-primary btn-block">  WITHDRAW  </a>
                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

		<?php include 'transaction_modals.php'; ?>

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