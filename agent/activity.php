<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Activity </title>
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
    <div class="appHeader bg-primary">
        <div class="left">
            <a href="#" class="headerButton goBack" style="color:#fff" >
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Trades
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule" >
	
        <div class="section mt-1" style="padding:0" >
            <div class="card" style="padding:0;border-radius:0" >
                <div class="card-body pt-0">

                    <ul class="nav nav-tabs lined" role="tablist" >
                        <li class="nav-item" style="width:33%" >
                            <a class="nav-link active" data-toggle="tab" href="#overview2" role="tab">
                                Active
                            </a>
                        </li>
                        <li class="nav-item" style="width:33%" >
                            <a class="nav-link" data-toggle="tab" href="#cards2" role="tab">
                             Incoming   
                            </a>
                        </li>
                        <li class="nav-item"  style="width:33%" >
                            <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">
								Completed
                            </a>
                        </li>
                    </ul>
					
                    <div class="tab-content mt-2">
						
                        <div class="tab-pane fade show active" id="overview2" role="tabpanel" style="text-align:center" >
							<br>
                            NO ACTIVE TRADES
                        </div>
                        <div class="tab-pane fade" id="cards2" role="tabpanel" style="text-align:center" >
							<br>
                            NO INCOMING TRADES
                        </div>
                        <div class="tab-pane fade" id="settings2" role="tabpanel" style="text-align:center" >
							<br>
                            NO COMPLETED TRADES
                        </div>
                    </div>
                </div>
            </div>
        </div>

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