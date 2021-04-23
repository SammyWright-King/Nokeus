<?php
ob_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
include 'markets.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nokuex App </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
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


        <div class="intro">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="intro-content">
                            <h1>Trade with <strong class="text-primary">Nokuex</strong>. <br> Buy and sell
                                Cryptocurrencies & Gift Cards
                            </h1>
                            <p>Fast and secure way to exchange cryptocurrencies and other currencies to your local currency </p>
                        </div>

                        <div class="intro-btn">
                            <a href="#" class="btn btn-primary">Get Started</a>
                            <a href="#" class="btn btn-outline-primary">Download Now</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="intro-form-exchange">
                            <form method="post" name="myform" class="currency_validate">
                                <div class="form-group">
                                    <label class="mr-sm-2"> Send </label>
                                    <div class="input-group mb-3">
                                        <select name='currency' class="form-control">
                                            <option value="bitcoin">NGN</option>
                                            <option>BTC</option>
											<option>ETH</option>
											<option>LTC</option>
											<option>XRP</option>
											<option>BCH</option>
                                        </select>
                                        <input type="text" name="usd_amount" class="form-control" placeholder="Enter Amount">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mr-sm-2">Get</label>
                                    <div class="input-group mb-3">
                                        <select name='currency' class="form-control">
                                            <option value="bitcoin">BTC</option>
                                            <option>NGN</option>
											<option>ETH</option>
											<option>LTC</option>
											<option>XRP</option>
											<option>BCH</option>
                                        </select>
                                        <input type="text" name="usd_amount" class="form-control" value="Result" readonly>
                                    </div>
                                    <div class="d-flex justify-content-between mt-0 align-items-center">
                                        <p class="mb-0">Monthly Limit</p>
                                        <h6 class="mb-0"> Buy & Sell Unlimited </h6>
                                    </div>
                                </div>
                                <a href="#" target="_blank" > <button type="button" class="btn btn-success btn-block"> TRADE NOW<i class="la la-arrow-right"></i></button> </a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="price-grid">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc BTC"></i></span>
                                    <div class="media-body">
                                        Bitcoin
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD <?php echo $btc_current_price; ?></h3>
                                <div id="btcChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc LTC"></i></span>
                                    <div class="media-body">
                                        Litecoin
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD <?php echo $ltc_current_price; ?></h3>
                                <div id="ltcChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc ETH"></i></span>
                                    <div class="media-body">
                                        Ethereum
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD <?php echo $eth_current_price; ?></h3>
                                <span class="text-success"><?php echo $eth_price_change_percentage_24h; ?>%</span>
                                <div id="ethChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="media">
                                    <span><i class="cc XRP"></i></span>
                                    <div class="media-body">
                                        Ripple
                                    </div>
                                </div>
                                <p class="mb-0"> 24h</p>
                            </div>
                            <div class="card-body">
                                <h3>USD <?php echo $xrp_current_price; ?></h3>
                                <span class="text-success"><?php echo $xrp_price_change_percentage_24h; ?>%</span>
                                <div id="xrpChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="portfolio" data-scroll-index="2">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <h2>Build your portfolio today</h2>
                            <p>Nokuex has a variety of features that make it the best place to start trading</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6">
                        <div class="portfolio_list">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon"> <i class="la la-bar-chart"></i></span>
                                        <div class="media-body">
                                            <h4>Manage your portfolio</h4>
                                            <p>Buy and sell popular digital currencies, keep track of them in one
                                                place.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon"> <i class="la la-calendar-check-o"></i></span>
                                        <div class="media-body">
                                            <h4>Recurring buys</h4>
                                            <p>Invest in cryptocurrency slowly over time by scheduling Buys/Sell daily,
                                                weekly,
                                                or monthly.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon"> <i class="la la-lock"></i></span>
                                        <div class="media-body">
                                            <h4>Vault protection</h4>
                                            <p>For added security, store your funds in a vault with time delayed
                                                withdrawals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon"> <i class="la la-mobile"></i></span>
                                        <div class="media-body">
                                            <h4> Market Updates </h4>
                                            <p>Stay on top of the markets with the Nokuex app for <a
                                                    href="#">Android</a>
                                                or
                                                <a href="#">iOS</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="portfolio_img">
                            <img src="images/app2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="testimonial section-padding ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title">
                            <h2>What our customers say</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="testimonial-content">
                            <div class="testimonial1 owl-carousel owl-theme">
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-img">
                                            <img class="img-fluid" src="user.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-review">
                                            <p> A friend of mine refered me to Nokuex when i really needed to buy some Bitcoins around January 2020, after i used the App the seamless nature of transaction, swift support and world class interface. I still doubt they are a Nigerian firm </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-img">
                                            <img class="img-fluid" src="user.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="customer-review">
                                            <p> One reason i will never stop using Nokuex is the level to which they attend to the details both in their and in their services, they are a role model for every blockchain company out of Africa </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo section-padding ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center">
                            <h2> Africa's most trusted Trading App</h2>
                            <p> Here are a few reasons why you should choose Nokuex
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center py-5">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img">
                                <img class="img-fluid" src="images/svg/protect.svg" alt="">
                            </div>
                            <h3>Secure storage </h3>
                            <p>We store the vast majority of the digital assets in secure offline storage.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img">
                                <img class="img-fluid" src="images/svg/cyber.svg" alt="">
                            </div>
                            <h3>Protected by insurance</h3>
                            <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img">
                                <img class="img-fluid" src="images/svg/finance.svg" alt="">
                            </div>
                            <h3>Industry best practices</h3>
                            <p>Nokuex supports a variety of the most popular digital currencies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="appss">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="appss-content">
                            <h2>The secure app to buy & sell yourself</h2>
                            <ul>
                                <li><i class="la la-check"></i> All your digital assets in one secure place</li>
                                <li><i class="la la-check"></i> Use Decentralized structures</li>
                                <li><i class="la la-check"></i> Pay real individuals, not addresses</li>
                            </ul>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary my-1 waves-effect">
                                    <img src="images/android.svg" alt="">
                                </a>
                                <a href="#" class="btn btn-primary my-1 waves-effect">
                                    <img src="images/apple.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="appss-img">
                            <img class="img-fluid" src="images/app.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<?php include 'footer.php'; ?>
    </div>




    <script src="js/global.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="js/plugins/owl-carousel-init.js"></script>

    <script src="vendor/apexchart/apexcharts.min.js"></script>
    <script src="vendor/apexchart/apexchart-init.js"></script>

    <script src="js/scripts.js"></script>
</body>

</html>