<?php
    include "back/Customer.php";
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

        <div class="listview-title mt-1">Notifications</div>
        <ul class="listview image-listview text inset">
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            Payment Alert
                            <div class="text-muted">
                                Send notification when new payment received
                            </div>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked/>
                            <label class="custom-control-label" for="customSwitch4"></label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            Mobile Notifications
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2"/>
                            <label class="custom-control-label" for="customSwitch2"></label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            Email Notifications
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3"/>
                            <label class="custom-control-label" for="customSwitch3"></label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Notification Sound</div>
                        <span class="text-primary">Beep</span>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">Profile Settings</div>
        <ul class="listview image-listview text inset">
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Change Username</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Update E-mail</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Phone</div>
                        <span class="text-primary">Edit</span>
                    </div>
                </a>
            </li>
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            Show Phone
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5"/>
                            <label class="custom-control-label" for="customSwitch5"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="listview-title mt-1">Security</div>
        <ul class="listview image-listview text mb-2 inset">
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Update Password</div>
                    </div>
                </a>
            </li>
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            2 Step Verification
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6" checked/>
                            <label class="custom-control-label" for="customSwitch6"></label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="back/logout.php" class="item">
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