<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Login </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=5">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="shortcut icon" href="assets/img/favicon.png">
</head>

<body>

	<?php include 'pre_loader.php'; ?>
	
    <!-- App Header -->
    <div class="appHeader bg-primary no-border transparent position-absolute">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Enter Login Code</h1>
            <p>A 4 Digit Login code has been sent to your email, Enter to proceed </p>
        </div>
        <div class="section mb-5 p-2">
            <form action="#">
                <div class="form-group basic">
                    <input type="text" class="form-control verification-input" id="smscode" placeholder="••••"
                        maxlength="4">
                </div>

                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg"> LOGIN </button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->

    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="../../unpkg.com/ionicons%405.0.0/dist/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/baseae52.js?v=5"></script>


</body>


<!-- Mirrored from finapp.bragherstudio.com/view/app-sms-verification.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 20:28:21 GMT -->
</html>