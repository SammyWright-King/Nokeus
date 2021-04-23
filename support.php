<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nokuex </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <?php include 'nav.php'; ?>

        <div class="helpdesk-search section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="helpdesk-search-content">
                            <p class="mb-1">Nokuex knowledge Base</p>
                            <h2 class="mb-5">How can we help you today?</h2>
                            <div class="helpdesk-form">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <button type="submit" class="btn btn-success">
                                        Search
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="help-category section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="help-cat">
                            <span class="la la-video-camera"></span>
                            <h4>Video Guide</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="help-cat">
                            <span class="la la-support"></span>
                            <h4>FAQ</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="help-cat">
                            <span class="la la-book"></span>
                            <h4>API for developers</h4>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="sub-cat">
                            <h5> Troubleshooting </h5>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="sub-cat">
                            <h5> Partnership </h5>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="sub-cat">
                            <h5> Getting started </h5>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="sub-cat">
                            <h5> Wallets </h5>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="sub-cat">
                            <h5> Healthy Tips </h5>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="sub-cat">
                            <h5> Crypto-definitions </h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="troubleshooting section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center">
                            <h2>Troubleshooting</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="troubleshooting-content">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <h4>My Transaction</h4>
                                    <ul>
                                        <li><a href="#">My transaction is stuck</a></li>
                                        <li><a href="#">The amount is too low</a></li>
                                        <li><a href="#">Sorry, payment was not received</a></li>
                                        <li><a href="#">Still didn't get my refund</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <h4>My Wallet</h4>
                                    <ul>
                                        <li><a href="#">My wallet address is recognized as invalid</a></li>
                                        <li><a href="#">What does ‘Not yet redeemed?’ mean</a></li>
                                        <li><a href="#">I sent my ABC coins to a non-ABC wallet</a></li>
                                        <li><a href="#">ETH contract addresses</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <h4>Other</h4>
                                    <ul>
                                        <li><a href="#">Customer service doesn't reply</a></li>
                                        <li><a href="#">The amount is too low</a></li>
                                        <li><a href="#">Can't log in</a></li>
                                        <li><a href="#">Can’t enable / disable 2-FA</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ticket-box section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ticket-box-content">
                            <h3>Can't find what you're looking for?</h3>
                            <p>Let us help you!</p>
                            <a href="#" class="btn btn-success">Submit Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>
    </div>




    <script src="js/global.js"></script>

    <script src="js/scripts.js"></script>

</body>

</html>