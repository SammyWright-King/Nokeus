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

		<!--
        <div class="section mt-2">
            <div class="section-title bg-danger" style="font-size:15pt;text-align:center;border-radius:5px 5px 0 0" > Awaiting Bitcoin <span class="spinner-border"></span> </div>
			
            <div class="card" style="border-radius:0 0 8px 8px" >
                <div class="card-header">
					<small style="text-align:center;display:block" class="text-success" > Bitcoins would be sent to the following Address </small>
                </div>
                <div class="card-body">
                    <h6 style="color:#000;font-weight:600;font-size:10pt" > 35MJ6Dh2sGCRKcWehEMAhjCP7dakL1fYbu </h6>
					<br>
					<button type="button" class="btn btn-default btn-block btn-lg" >  SELLER STATUS: &nbsp; <span class="badge badge-danger" style="border-radius:3px" > SENDING</span>	 </button>
					<br><br>
                    <form>	
						<button type="submit" class="btn btn-primary btn-block btn-lg" >  I HAVE RECEIVED &nbsp;  </button>
                    </form>
                </div>
            </div>
        </div>
		-->
		
        <div class="section mt-2">
            <div class="section-title bg-danger" style="font-size:15pt;text-align:center;border-radius:5px 5px 0 0" > Awaiting Funds <span class="spinner-border"></span> </div>
			
            <div class="card" style="border-radius:0 0 8px 8px" >
                <div class="card-header">
					<small style="text-align:center;display:block" class="text-success" > Funds would be sent to the following Account </small>
                </div>
                <div class="card-body">
                    <h5 style="color:#000;font-weight:600" > Account No: 0198758744 </h5>
					<p> Account Name: Nicolas Akpas <br> Bank Name: GT Bank </p>
					
					<br>
					<button type="button" class="btn btn-default btn-block btn-lg" >  BUYER STATUS:  &nbsp; <span class="badge badge-danger" style="border-radius:3px" > PAYING</span>	 </button>
					<br><br>
                    <button type="submit" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#confirm" >  I HAVE RECEIVED &nbsp;  </button>
					
					<button class="btn btn-danger btn-block" >  DISPUTE &nbsp; <i class="fa fa-user"></i> </button>
                    
                </div>
            </div>
        </div>
		

    </div>
    <!-- * App Capsule -->
	
        <!-- Dialog Iconed Block -->
        <div class="modal fade dialogbox" id="confirm" data-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Confirm </h5>
                    </div>
                    <div class="modal-body">
                        Are you sure you have received ?
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn btn-text-secondary" data-dismiss="modal">CANCEL</a>
                            <a href="#" class="btn btn-text-primary" data-toggle="modal" data-target="#status" >CONFIRM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Dialog Iconed Block -->
	
        <!-- Dialog Form -->
        <div class="modal fade dialogbox" id="status" data-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
						<figure style="text-align:center;width:100%"  >
							<img src="assets/success.gif" style="width:80px"  />
						</figure>
                    </div>
                    <form>
                        <div class="modal-body text-left mb-2">
							<h5 style="text-align:center" > Trade Completed <span style="color:green" >  </h5>
							<p> <small> Thanks for choosing Nokuex, how was you experience with us </small> </p>
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