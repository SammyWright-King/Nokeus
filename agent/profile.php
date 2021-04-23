<?php
ob_start();
include 'core.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Profile </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=5">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css" />
</head>

<body>

    <?php include 'pre_loader.php'; ?>

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Profile
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        
        <div class="section mt-3 text-center">
            <div class="avatar-section">
                <a href="#">
                    <img src="assets/img/sample/avatar/user.png" alt="avatar" class="imaged w100 rounded">
                    <span class="button">
                        <ion-icon name="camera-outline"></ion-icon>
                    </span>
                </a>
            </div>
        </div>

        <div class="listview-title mt-1">Profile Settings</div>
        <ul class="listview text inset">
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div> Agent Name: <?php echo $agent_username; ?> </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Phone: <?php echo $phone; ?> </div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">Security</div>
        <ul class="listview image-listview text mb-2 inset">
            <li>
                <a href="logout.php" class="item">
                    <div class="in">
                        <div>Log out </div>
                    </div>
                </a>
            </li>
        </ul>
        

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