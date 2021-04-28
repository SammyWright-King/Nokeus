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


        <div class="section mt-2">
            <div class="section-title bg-danger" style="font-size:15pt;text-align:center;border-radius:5px 5px 0 0" > 15m 5s  </div>
			
            <div class="card" style="border-radius:0 0 8px 8px" >
                <div class="card-header">
					<small style="color:red;text-align:center;display:block" > <i class="fa fa-warning"></i> Upload proof of payment and click the "PAID" Button to continue </small>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> Account Number: 0198765214 </h5>
                    <p class="card-text">Bank Name: GT BANK <br> Account Name: Nokuex Nigeria </p>
					
                    <form>
                        <div class="custom-file-upload" >
                            <input type="file" id="fileuploadInput" accept=".png, .jpg, .jpeg" required >
                            <label for="fileuploadInput"  style="border-radius: 8px 8px 0 0" >
                                <span>
                                    <strong>
                                        <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                        <i>Upload a Picture</i>
                                    </strong>
                                </span>
                            </label>
                        </div>
						<button type="submit" disabled class="btn btn-success btn-block btn-lg" style="border-radius: 0 0 8px 8px" >  PAID &nbsp; <i class="fa fa-check-circle"></i> </button>
						
						<button class="btn btn-danger btn-block" >  Cancel &nbsp; <i class="fa fa-close"></i> </button>
                    </form>
                </div>
            </div>
        </div>

		<br><br>


    </div>
    <!-- * App Capsule -->
	
        <!-- Dialog Form -->
        <div class="modal fade dialogbox" id="status" data-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="text-align:center" > Trade Completed <span style="color:green" > <ion-icon name="checkmark-circle" ></ion-icon> </span> </h5>
                    </div>
                    <form>
                        <div class="modal-body text-left mb-2">
							<p> Thanks for choosing Nokuex, how was you experience with us </p>
							<div class="form-group basic">
								<div class="input-wrapper">
									<textarea id="textarea4" rows="2" class="form-control"
										placeholder="Let us know here"></textarea>
									<i class="clear-input">
										<ion-icon name="close-circle"></ion-icon>
									</i>
								</div>
							</div>

                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button type="button" class="btn btn-text-secondary"
                                    data-dismiss="modal"> No Comments </button>
                                <button type="button" class="btn btn-text-primary" data-dismiss="modal"> Submit </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- * Dialog Form -->

	<?php include 'bottom_nav.php'; ?>

    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/ionicons.min.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/baseae52.js?v=5"></script>
	
	<script>
		//$('#status').modal('show');
	</script>

</body>

</html>