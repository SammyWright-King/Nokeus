<?php
    include "back/Customer.php";

    $customer = new Customer();
    $rates = $customer->getRates();
    $id=NULL;
    if(isset($_GET['id'])) $id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title> Nokuex </title>
    <link rel="stylesheet" href="assets/css/styleae52.css?v=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" >
    <link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/collection/components/icon/icon.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

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


            <div class="wallet-card" style="margin-top:5vh" >
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
						<br>
                        <h1 class="total" style="margin:0;text-align:center" > Select Currency </h1>
						<p style="text-align:center;font-size:10pt;padding-top:5px" > Trade with Nokuex. Buy and sell Bitcoin USDT, RMB & Ethereum </p>
                    </div>
                </div>

                <div class="wallet-footer">
                    <div class="item" style="margin-right:5px" >
                        <select style="font-size:13pt;color:#fff;padding:10px;width:100%;border-radius: 5px;border:none;box-shadow: 1px 1px 10px #D3D3D3" class="bg-info currency" id="currency">
								<option> Bitcoin </option>
								<option> Ethereum </option>
								<option> RMB </option>
								<option> USDT </option>
						</select>
                    </div>
                </div>
				<br>

            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title bg-primary" style="font-size:13pt;text-align:center;border-radius:5px 5px 0 0" > <i class="fa fa-bar-chart"></i> RATES </div>

            <div class="transactions">
                <?php
                    if(empty($rates)){
                        echo "No Rates Available";
                    }else {
                        foreach ($rates as $rate) {
                            if (strcasecmp($id, "ethereum") == 0) {
                                echo '
                             <a href="#" class="item" style="border-radius:0px 0px 8px 8px" data-toggle="modal" data-target="#buy" >
                                <div class="detail">
                                    <div>
                                        <strong> &nbsp;&nbsp; BUY </strong>
                                        <p> &nbsp; &nbsp; Min: 0.01 ETH </p>
                                        <p class="text-success" > &nbsp; &nbsp;' . $customer->getAgent($rate->agent)->firstname . '</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price text-default">' . $rate->ethereum_rate . '  NGN/BTC <br> <small> GTBank </small> </div>
                                </div>
                                <div class="icon-wrapper bg-success" style="padding:5px;border-radius:5px;font-size:9pt" > BUY </div>
                            </a>';
                            } elseif (strcasecmp($id, 'usdt') == 0) {
                                echo '
                             <a href="#" class="item" style="border-radius:0px 0px 8px 8px" data-toggle="modal" data-target="#buy" >
                                <div class="detail">
                                    <div>
                                        <strong> &nbsp;&nbsp; BUY </strong>
                                        <p> &nbsp; &nbsp; Min: 0.01 USDT </p>
                                        <p class="text-success" > &nbsp; &nbsp;' . $customer->getAgent($rate->agent)->firstname . '</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price text-default">' . $rate->tether_rate . '  NGN/BTC <br> <small> GTBank </small> </div>
                                </div>
                                <div class="icon-wrapper bg-success" style="padding:5px;border-radius:5px;font-size:9pt" > BUY </div>
                            </a>';
                            } else {
                                echo '
                             <a href="#" class="item" style="border-radius:0px 0px 8px 8px" data-toggle="modal" data-target="#buy" >
                                <div class="detail">
                                    <div>
                                        <strong> &nbsp;&nbsp; BUY </strong>
                                        <p> &nbsp; &nbsp; Min: 0.01 BTC </p>
                                        <p class="text-success" > &nbsp; &nbsp;' . $customer->getAgent($rate->agent)->firstname . '</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price text-default">' . $rate->bitcoin_rate . '  NGN/BTC <br> <small> GTBank </small> </div>
                                </div>
                                <div class="icon-wrapper bg-success" style="padding:5px;border-radius:5px;font-size:9pt" > BUY </div>
                            </a>
                                    ';
                            }
                        }
                    }

                ?>
<!---->
<!--                <a href="#" class="item" style="border-radius:0px 0px 8px 8px" data-toggle="modal" data-target="#buy" >-->
<!--                    <div class="detail">-->
<!--                        <div>-->
<!--                            <strong> &nbsp;&nbsp; BUY </strong>-->
<!--							<p> &nbsp; &nbsp; Min: 0.01 BTC </p>-->
<!--							<p class="text-success" > &nbsp; &nbsp; Agent 1 </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="right">-->
<!--                        <div class="price text-default"> 440 NGN/BTC <br> <small> GTBank </small> </div>-->
<!--                    </div>-->
<!--                    <div class="icon-wrapper bg-success" style="padding:5px;border-radius:5px;font-size:9pt" > BUY </div>-->
<!--                </a>-->

<!--                <a href="#" class="item" data-toggle="modal" data-target="#sell" >-->
<!--                    <div class="detail">-->
<!--                        <div>-->
<!--                            <strong> &nbsp;&nbsp; SELL  </strong>-->
<!--							<p> &nbsp; &nbsp; Min: 0.02 BTC </p>-->
<!--							<p class="text-primary" > &nbsp; &nbsp; Agent 1 </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="right">-->
<!--                        <div class="price text-default"> 430 NGN/BTC <br> <small> Diamond Bank </small> </div>-->
<!--                    </div>-->
<!--					<div class="icon-wrapper bg-primary" style="padding:5px;border-radius:5px;font-size:9pt" > SELL </div>-->
<!--                </a>-->

<!--                <a href="#" class="item">-->
<!--                    <div class="detail">-->
<!--                        <div>-->
<!--                            <strong> &nbsp;&nbsp; BUY </strong>-->
<!--							<p> &nbsp; &nbsp; Min: 0.01 BTC </p>-->
<!--							<p class="text-success" > &nbsp; &nbsp; Agent 2 </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="right">-->
<!--                        <div class="price text-default"> 420 NGN/BTC <br> <small> First Bank </small> </div>-->
<!--                    </div>-->
<!--                    <div class="icon-wrapper bg-success" style="padding:5px;border-radius:5px;font-size:9pt" > BUY </div>-->
<!--                </a>-->
<!---->
<!--                <a href="#" class="item">-->
<!--                    <div class="detail">-->
<!--                        <div>-->
<!--                            <strong> &nbsp;&nbsp; SELL  </strong>-->
<!--							<p> &nbsp; &nbsp; Min: 0.02 BTC </p>-->
<!--							<p class="text-primary" > &nbsp; &nbsp; Agent 2 </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="right">-->
<!--                        <div class="price text-default"> 410 NGN/BTC <br> <small> FCMB </small> </div>-->
<!--                    </div>-->
<!--					<div class="icon-wrapper bg-primary" style="padding:5px;border-radius:5px;font-size:9pt" > SELL </div>-->
<!--                </a>-->

            </div>
        </div>
        <!-- * Transactions -->

    </div>
    <!-- * App Capsule -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="buy" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Buy Bitcoin </h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>

								<div style="margin-top:-2em" > </div>
                                <div class="form-group basic">
                                    <div class="input-group mb-1" >
                                        <input type="text" class="form-control" placeholder="Bitcoin Wallet" >
                                    </div>
                                </div>

								<div style="clear:both" > </div>

                                <div class="form-group basic" style="width:50%;float:left" >
                                    <div class="input-group mb-1" >
                                        <input type="number" class="form-control" placeholder="BTC" >
                                    </div>
                                </div>

                                <div class="form-group basic" style="width:50%;float:left" >
                                    <div class="input-group mb-1">
                                        <input type="number" class="form-control" placeholder="USD">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-group mb-1">
                                        <input type="number" class="form-control" placeholder="NGN">
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <a href="buy.php" class="btn btn-primary btn-block btn-lg" > Next <ion-icon name="arrow-forward-outline"></ion-icon>  </a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="sell" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> SELL BITCOIN </h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
								<div style="margin-top:-2em" > </div>

								<div style="clear:both" > </div>

                                <div class="form-group basic" style="width:50%;float:left" >
                                    <div class="input-group mb-1" >
                                        <input type="number" class="form-control" placeholder="BTC" >
                                    </div>
                                </div>

                                <div class="form-group basic" style="width:50%;float:left" >
                                    <div class="input-group mb-1">
                                        <input type="number" class="form-control" placeholder="USD">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-group mb-1">
                                        <input type="number" class="form-control" placeholder="NGN">
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <a href="account.php" class="btn btn-primary btn-block btn-lg">  Next <ion-icon name="arrow-forward-outline"></ion-icon> </a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->


	<?php include 'bottom_nav.php'; ?>

    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.1/ionicons.min.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/baseae52.js?v=5"></script>
	<script src="assets/js/custom.js?v=2"></script>
    <script>
        $(document).ready(function (){
            $('#currency').change(function (){
                url = new URL(location.href)
                urlParams = url.searchParams;

                if(urlParams.has('id')){
                    urlParams.set('id', $(this).val())
                    location.href = url.toString()
                }else{
                    urlParams.append('id', $(this).val())
                    location.href = url.toString()
                }
            })
        })
    </script>
</body>

</html>