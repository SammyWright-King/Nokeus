<?php
    session_start();
    include "back/Connect.php";
    if(isset($_POST['submitted'])){
        $arr = [
          "email" => $_POST['email'],
          "password" => $_POST['pwd']
        ];
        $connect = new Connect();
        $req = $connect->postRequest('/auth/login', $arr);
        $response = json_decode($req);
        if($response->status == TRUE){
            $_SESSION["loggedin"]=TRUE;
            $_SESSION['userid']  = $_POST['email'];//initiliaze session variable  to username
            $_SESSION['last_time']=time();
            $_SESSION['x-token'] = $response->token;
            header("location: home.php");
            exit();
        }else{
            echo"alert('wrong')";
        }
    }

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
        <div class="pageTitle"></div>
        <div class="right">
            <a href="home.php" class="headerButton" style="color:#fff" >
                Adverts
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule" style="margin-top:15vh" >

        <div class="section mt-2 text-center">
            <h1>Log in</h1>
            <h4> Login to continue	 </h4>
        </div>
        <div class="section mb-5 p-2">

            <form action="#" method="post">
                <div class="card" style="border-radius: 8px 8px 0 0" >
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="email" class="form-control" id="email1" placeholder="Email" name="email">
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
                                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-button-group transparent">
                    <button type="submit" style="border-radius: 0 0 8px 8px" class="btn btn-primary btn-block btn-lg" name="submit"> LOGIN </button>
                    <input type="hidden" name="submitted" value="TRUE">
                </div>


                <div class="form-links mt-2" >
                    <div>
                        <a href="register.php"  >Register Now</a>
                    </div>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
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