<?php
//    session_start();
//    include "../connect/Connector.php";
//    if(isset($_POST['submitted'])){
//        $arr = [
//            "email" => $_POST['email'],
//            "password" => $_POST['password']
//        ];
//        $connect = new Connector();
//        $req = $connect->postRequest('/auth/login', $arr);
//        $response = json_decode($req);
//        if($response->status == TRUE){
//            //get customer info
//            $customer = $connect->getRequest("/auth",NULL, $response->token);
//            $customer = json_decode($customer);
//            if(in_array("admin", $customer->data->roles)){
//                $_SESSION["loggedin"]=TRUE;
//                $_SESSION['userid']  = $_POST['email'];//initiliaze session variable  to username
//                $_SESSION['last_time']=time();
//                $_SESSION['x-token'] = $response->token;
//                header("location: ../index.php");
//                exit();
//            }else{
//                echo"alert(Not an admin)";
//            }
//        }else{
//            echo"alert('wrong')";
//        }
//    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Login to <strong>Nokeux</strong></h1>
                            <div class="description">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log in:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form  action="../connect/login.php" method="POST" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="email"  class=" form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password"  class="form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
<!--                                    <input type="hidden" name="submitted">-->
			                    </form>
		                    </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/placeholder.js"></script>


        <script>
            $(document).ready(function() {
                $(".login-form").submit(function(e) {

                    var formData = {
                        email: $("#form-username").val(),
                        pwd: $("#form-password").val(),
                    };
                    $.ajax({
                        cache: false,
                        type: "POST",
                        url: "../connect/login.php",
                        data: formData,
                        dataType: "json",
                        encode: true,
                    }).done(function (data) {
                        //console.log(data);
                        if(data.code == 100){
                            toastr.success(data.desc)
                            location.href = "../index.php"
                        }else{
                            toastr.warning(data.desc)
                        }
                    });

                    e.preventDefault();
                });
            });
        </script>
    </body>

</html>