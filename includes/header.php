<?php
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <title>Smart Insider</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/normalize.css"/>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/all.min.css"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css" href="./assets/css/jquery-ui.min.css"/>

    <!-- Google Custom Font -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700"/>

    <link rel="stylesheet" type="text/css" href="./assets/css/datatables.min.css"/>

    <!-- Place your stylesheet here-->
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollBar.css"/>

    <link rel="stylesheet" type="text/css" href="./assets/css/custombox.min.css">

    <link rel="stylesheet" type="text/css" href="./assets/css/tooltipster.bundle.min.css"/>

    <link rel="stylesheet" type="text/css" href="./assets/css/mdb.min.css"/>

    <link rel="stylesheet" type="text/css" href="./assets/css/custom/style.css?t=<?= time() ?>"/>

    <?php if (basename($_SERVER['PHP_SELF']) == "login.php") { ?>
        <link rel="stylesheet" type="text/css" href="./assets/css/custom/login.css?t=<?= time() ?>"/>
    <?php } ?>

    <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/jquery-ui.min.js"></script>


</head>

<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-nav" id="main-nav">
        <a class="navbar-brand order-1" href="splash.php"><img class="img-fluid" src="./assets/images/si.svg"
                                                               alt="Company Logo"></a>
        <button class="navbar-toggler order-3" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="mobile-search-item" class="header-item search-tabs order-2 ml-5 pl-5 ml-sm-0 pl-sm-0">
            <div class="search-section thisIsContainer d-flex flex-column align-items-end pr-lg-5">
                <ul class="nav nav-tabs searchTab thisToAnimate" id="searchTab-mobile" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active check-close issuer-tab" id="issuer-tab-mobile" data-toggle="tab">Issuer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link person-tab check-close " id="person-tab-mobile" data-toggle="tab"
                           href="#person">Person</a>
                    </li>
                </ul>
                <div class="tab-content searchTabContent thisToAnimate" id="searchTabContent-mobile">
                    <div class="tab-pane selected-tab active" id="issuer-mobile" role="tabpanel"
                         aria-labelledby="issuer-tab">
                        <form class="form-inline nav-link asholder issuer-form">
                            <input class="form-control check-close search-me tour_1 wider-responsive wider"
                                   type="search" placeholder="" aria-label="Search" size="15" autocomplete="off">
                            <i class="fas fa-search text-success" aria-hidden="true"></i>
                        </form>
                        <form style="display:none" class="form-inline nav-link asholder person-form">
                            <input class="form-control check-close search-me person tour_2 wider-responsive"
                                   type="search" placeholder="" aria-label="Search" size="25" autocomplete="off">
                            <i class="fas fa-search text-success" aria-hidden="true"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse custom-nav-collapse order-4" id="navbarCollapse">
            <ul class="navbar-nav w-100">
                <li class="nav-item nav-home nav-special">
                    <a class="nav-link font-link" href="splash.php">
                        <i class="fas fa-home" aria-hidden="true"></i><span> Home </span>
                    </a>
                </li>
                <li class="nav-item dropdown mega-dropdown drops nav-special">
                    <a class="nav-link text-link dropdown-toggle" href="#" id="insiderTradeLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Insider Trades <span
                                class="sr-only">(current)</span> </a>
                    <div class="dropdown-menu mega-menu v-2 bg-transparent p-0" aria-labelledby="insiderTradeLink">
                        <div class="dropdown-menu-child rounded w-100 d-flex flex-wrap bg-custom mx-auto px-4 py-1">
                            <div class="dropdown-item">
                                <div class="dropdown-item-block">
                                    <h5><span class="dropdown-item-heading d-inline-flex text-wrap"> My Searches </span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="filter.php">
                                        <span class="dropdown-item-link special success text-wrap"> New Search </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="dropdown-item-block">
                                    <h5>
                                        <span class="dropdown-item-heading d-inline-flex text-wrap"> Portfolio Searches </span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="dropdown-item-block">
                                    <h5>
                                        <span class="dropdown-item-heading d-inline-flex text-wrap">Index Searches</span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link"> ASX 200 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> FTSE </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <div class="dropdown-item resources">
                                <div class="dropdown-item-block">
                                    <h5>
                                        <span class="dropdown-item-heading d-inline-flex text-wrap"> Resources </span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href=""><span class="dropdown-item-link special success text-wrap"> Sell/Buy Ratio Report </span></a>
                                    <a href="country.php">
                                        <span class="dropdown-item-link dark-special"> Country Info </span>
                                    </a>
                                    <a href="documentdownload.php">
                                        <span class="dropdown-item-link dark-special"> White Papers </span>
                                    </a>
                                    <a href="glossary.php">
                                        <span class="dropdown-item-link dark-special"> Glossary </span>
                                    </a>
                                    <a href="methodology.php">
                                        <span class="dropdown-item-link dark-special"> Methodology </span>
                                    </a>
                                    <a href="scoring.php">
                                        <span class="dropdown-item-link dark-special"> Scoring </span>
                                    </a>
                                    <a href="sectors.php">
                                        <span class="dropdown-item-link dark-special"> Sector Classification </span>
                                    </a>
                                    <a href="transactiontypes.php">
                                        <span class="dropdown-item-link dark-special"> Transaction Types </span>
                                    </a>
                                    <a href="conviction.php">
                                        <span class="dropdown-item-link dark-special"> Conviction Rating </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown drops nav-special">
                    <a class="nav-link text-link dropdown-toggle" href="#" id="buybackTradeLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Buyback Trades</a>
                    <div class="dropdown-menu mega-menu v-2 bg-transparent p-0" aria-labelledby="buybackTradeLink">
                        <div class="dropdown-menu-child rounded w-100 d-flex flex-wrap bg-custom mx-auto px-4 py-1">
                            <div class="dropdown-item">
                                <div class="dropdown-item-block">
                                    <h5>
                                        <span class="dropdown-item-heading d-inline-flex text-wrap">My Searches </span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="filterbuyback.php">
                                        <span class="dropdown-item-link special success text-wrap">New Search </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="dropdown-item-block">
                                    <h5>
                                        <span class="dropdown-item-heading d-inline-flex text-wrap"> Portfolio Searches </span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="dropdown-item-block">
                                    <h5>
                                        <span class="dropdown-item-heading d-inline-flex text-wrap"> Index Searches </span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link"> ASX 200 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> FTSE </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                            <div class="dropdown-item reports">
                                <div class="dropdown-item-block">
                                    <h5><span class="dropdown-item-heading d-inline-flex text-wrap">Reports</span>
                                    </h5>
                                    <span class="dropdown-item-details d-flex flex-column">
                                    <a href="">
                                        <span class="dropdown-item-link special success text-wrap"> Sell/Buy Ratio Report </span>
                                    </a>
                                    <a href="country.php">
                                        <span class="dropdown-item-link dark-special"> Country Info </span>
                                    </a>
                                    <a href="buybackterms.php">
                                        <span class="dropdown-item-link dark-special"> Definitions </span>
                                    </a>
                                    <a href="documentdownload.php">
                                        <span
                                                class="dropdown-item-link dark-special"> White Papers </span>
                                    </a>
                                    <a href="glossary.php">
                                        <span
                                                class="dropdown-item-link dark-special"> Glossary </span>
                                    </a>
                                    <a href="buybackmethodology.php">
                                        <span class="dropdown-item-link dark-special"> Methodology </span>
                                    </a>
                                    <a href="sectors.php">
                                        <span class="dropdown-item-link dark-special"> Sector Classification </span>
                                    </a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown mega-dropdown drops nav-special">
                    <a class="nav-link text-link dropdown-toggle" href="#" id="companySignalLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Company Signals </a>
                    <div class="dropdown-menu mega-menu v-2 bg-transparent p-0" aria-labelledby="companySignalLink">
                        <div class="dropdown-menu-child rounded w-100 d-flex flex-wrap bg-custom mx-auto px-4 py-1">
                        <div class="dropdown-item d-flex flex-column">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap"> My Searches </span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <a href="rankingfilter.php">
                                        <span class="dropdown-item-link special success text-wrap"> New Search </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex flex-column">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap"> Portfolio Searches </span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex flex-column">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap"> Index Searches </span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link"> ASX 200 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> FTSE </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-item reports d-flex flex-column">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap"> Resources </span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link special success text-wrap"> Sell/Buy Ratio Report </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-bell"
                                                                             aria-hidden="true"></i> 123 92 115 </span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> 2 Index </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>

                <li id="desktop-search-item" class=" nav-item search-tabs">
                    <div class="search-section thisIsContainer d-flex flex-column align-items-end justify-content-center pr-5">
                        <ul class="nav nav-tabs searchTab thisToAnimate" id="searchTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active check-close issuer-tab" id="issuer-tab" data-toggle="tab">Issuer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link person-tab check-close " id="person-tab" data-toggle="tab"
                                   href="#person">Person</a>
                            </li>
                        </ul>
                        <div class="tab-content searchTabContent thisToAnimate" id="searchTabContent">
                            <div class="tab-pane selected-tab active" id="issuer" role="tabpanel"
                                 aria-labelledby="issuer-tab">
                                <form class="form-inline nav-link asholder issuer-form">
                                    <input class="form-control check-close search-me tour_1 wider-responsive wider"
                                           type="search" placeholder="" aria-label="Search" size="15"
                                           autocomplete="off">
                                    <i class="fas fa-search text-success" aria-hidden="true"></i>
                                </form>
                                <form style="display:none" class="form-inline nav-link asholder person-form">
                                    <input class="form-control check-close search-me person tour_2 wider-responsive"
                                           type="search" placeholder="" aria-label="Search" size="25"
                                           autocomplete="off">
                                    <i class="fas fa-search text-success" aria-hidden="true"></i>
                                </form>
                            </div>
                            <!--                            <div class="tab-pane fade" id="person" role="tabpanel" aria-labelledby="person-tab">-->
                            <!--                                <form class="form-inline nav-link asholder person-form">-->
                            <!--                                    <input class="form-control search-me person tour_2 wider-responsive"-->
                            <!--                                           type="search" placeholder="" aria-label="Search" size="25"-->
                            <!--                                           autocomplete="off">-->
                            <!--                                    <i class="fas fa-search text-success" aria-hidden="true"></i>-->
                            <!--                                </form>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown mega-dropdown drops ml-lg-auto settings mr-0">
                    <a class="nav-link font-link dropdown-toggle" href="#" id="settingLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div id="usrname-menu" class="user-name d-flex justify-content-lg-center align-items-lg-center">
                            <span class="user-box d-flex flex-lg-column justify-content-center align-items-center">
                                <span class="greet">Welcome</span> <span
                                        class="usr-name font-weight-bold">Atif Alvi</span></span>
                            <span class="usr-icon">
                                    <i class="fas fa-cog" aria-hidden="true"></i>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu mega-menu v-2 bg-transparent p-0" aria-labelledby="settingLink">
                        <div class="dropdown-menu-child rounded w-100 d-flex flex-wrap bg-custom mx-auto px-4 py-1">
                        <div class="dropdown-item">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap">Manage Account</span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column management">
                                    <!--
                                    <a href="javascript:void(0)">
                                        <span class="dropdown-item-link special success"></span>
                                    </a>
                                    -->

                                    <a href="settings.php">
                                        <span class="dropdown-item-link"> <i class="fas fa-tools"
                                                                             aria-hidden="true"></i> Settings</span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> <i class="fas fa-sign-out-alt"
                                                                             aria-hidden="true"></i> Logout</span>
                                    </a>
                                    <a href="support.php">
                                        <span class="dropdown-item-link"> <i class="fas fa-envelope"
                                                                             aria-hidden="true"></i> Support</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap">Manage Portfolio</span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <a href="portfolio.php">
                                        <span class="dropdown-item-link special success">Create Portfolio</span>
                                    </a>
                                    <a href="portfoliolist.php">
                                        <span class="dropdown-item-link special success">Manage Portfolio</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap">Manage Searches</span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <a href="#">
                                        <span class="dropdown-item-link special danger text-wrap">Delete Search</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="dropdown-item-block">
                                <h5>
                                    <span class="dropdown-item-heading d-inline-flex text-wrap">Admin Area</span>
                                </h5>
                                <span class="dropdown-item-details d-flex flex-column">
                                    <!--
                                    <a href="#">
                                            <span class="dropdown-item-link special success text-wrap"></span>
                                    </a>
                                    -->
                                    <a href="adminbox.php">
                                        <span class="dropdown-item-link"> Latest Activity</span>
                                    </a>
                                    <a href="rankmanager.php">
                                        <span class="dropdown-item-link"> Signal Manager</span>
                                    </a>
                                    <a href="rankmanager.php">
                                        <span class="dropdown-item-link"> Signal to Expire</span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> Client Settings</span>
                                    </a>
                                    <a href="filemanager.php">
                                        <span class="dropdown-item-link"> File Management</span>
                                    </a>
                                    <a href="#">
                                        <span class="dropdown-item-link"> Edit Watchlists</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- /header -->
