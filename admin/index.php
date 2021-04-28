<?php
    include "connect/Admin.php";
    $adm = new Admin();
    $admin = $adm->getCustomer()->data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Nokuex</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->

    <link href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8c67d6518.js" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


</head>
<body>
    <div id="app">
        <div id="main">
        <?php
		
        require_once "includes/header.php";
        require_once "includes/sidebar.php";


        ?>
        <?php 
            if (isset($_GET["module"])){
                
                switch ($_GET["module"]){
                    case 'dashboard':
                        $template = require_once "dashboard/dashboard.php";
                        break;
                    case 'settings':
                        $template = require_once "settings/index.php";
                        break;
                    case 'users':
                        $template = require_once "users/index.php";
                        break;
                    case 'account':
                        $template = require_once "account/index.php";
                        break;
                    case 'history':
                        $template = require_once "history/index.php";
                        break;
                    case 'profile':
                        $template = require_once "profile/index.php";
                        break;
                    case 'customers':
                        $template = require_once "customers/index.php";
                        break;
                    case 'agents':
                        $template = require_once "agents/index.php";
                        break;
                    case 'transactions':
                        $template = require_once "transactions/index.php";
                        break;
                    case 'wallets':
                        $template = require_once "wallets/index.php";
                        break;
                    case 'business':
                        $template = require_once "business/index.php";
                        break;
                    case 'company':
                        $template = require_once "company/index.php";
                        break;
                    case 'dispute':
                        $template = require_once "dispute/index.php";
                        break;
                    // case 'users':
                    // 	$template = require_once "users/index.php";
                    // 	break;
                    default:
                        # code...
                        break;
                }

            }
            else{
                require_once "dashboard/dashboard.php";
            }

            $template;
        ?>
        
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

    <script>
    $(document).ready(function() {
    $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
        
    $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
            return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });
        
    $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','false');
    });

    $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','true');
    });

    var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

    if(jobCount == '0') {$('.no-result').show();}
        else {$('.no-result').hide();}
            });
    });
</script>
</body>
</html>
