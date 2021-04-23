<?php
    session_start();
    include "back/Connect.php";
    if(isset($_POST['submitted'])){
      if(isset($_POST['condition'])){
        $arr = [
            "email" => $_POST['email'],
            "password" => $_POST['pwd'],
            "firstname" => $_POST['firstname'],
            "lastname" => $_POST['lastname'],
            "phone" => $_POST['phone']
        ];
        $connect = new Connect();
        $req = $connect->postRequest('/auth/signup', $arr);
        $response = json_decode($req);
        if($response->status == TRUE){
            $_SESSION["loggedin"]=true;
            $_SESSION['userid']  = $_POST['email'];//initiliaze session variable  to username
            $_SESSION['last_time']=time();
            $_SESSION['x-token'] = $response->token;
            header("location: home.php");
            exit();
        }else{
            echo"alert('wrong')";
        }
      }else{
          $message = "Agree to Condition";
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
    <div class="appHeader bg-primary text-light" style="border: none"">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="login.php" class="headerButton" style="color:#fff" >
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule"  style="margin-top:10vh" >

        <div class="section mt-2 text-center" >
            <h1>Register now</h1>
            <h4>Create an account</h4>
        </div>
        <div class="section mb-5 p-2">
            <form action="#" method="post">
                <div class="card">
                    <div class="card-body">
					
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
					
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="custom-control custom-checkbox mt-2 mb-1">
                            <input type="checkbox" class="custom-control-input" id="customChecka1" name="condition">
                            <label class="custom-control-label" for="customChecka1">
                                I Agree <a href="#" data-toggle="modal" data-target="#termsModal"> Terms and Conditions</a>
                            </label>
                        </div>
        
                    </div>
                </div>



                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                    <input type="hidden" name="submitted" value="TRUE">
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
    <script src="../../unpkg.com/ionicons%405.0.0/dist/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/baseae52.js?v=5"></script>


</body>
</html>