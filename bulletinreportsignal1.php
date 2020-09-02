<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <title>Smart Insider</title>

    <style type="text/css">
        .table-container {
            min-height: .01%;
            overflow-x: auto;
            width: 100%;
            margin-bottom: 15px;
            overflow-y: hidden
        }

        .main-display                                                                                                                                                                                                                                                                                                                                                                                                                                                         {
            max-width: 680px;
            width: 100%;
            margin: auto;
        }

        .display_none, table.display td h1 {
            display: none !important
        }

        table.display td.center {
            text-align: center
        }

        table.display {
            margin: 0 auto;
            width: 100%;
            clear: both
        }

        table.display thead th {
            padding: 4px 10px 6px 4px;
            font-weight: 700;
            cursor: pointer;
            font-size: 10px
        }

        table.display tr.heading2 td {
            border-bottom: 1px solid #aaa
        }

        table.display td {
            padding: 3px 2px;
            height: 36px
        }

        table.display td a {
            color: #00adf1
        }

        table.display td a:hover {
            color: #00adf1
        }

        td.group {
            background-color: #d1cfd0;
            border-bottom: 2px solid #a19b9e;
            border-top: 2px solid #a19b9e
        }

        td.details {
            background-color: #f0efef
        }

        body {
            -moz-transition: all .5s ease-in-out;
            -webkit-transition: all .5s ease-in-out
        }

        .price-change div {
            white-space: nowrap
        }

        a {
            text-decoration: none
        }

        @font-face {
            font-family: pf_din_text_universalmedium;
            /*src: url(fonts/pfdintextuniversal-medium-webfont.woff2) format('woff2'), url(fonts/PFDinTextUniversal-Medium.otf) format('woff'), url(fonts/pfdintextuniversal-medium-webfont.woff) format('woff');*/
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Avenir Next LT Pro Demi';
            font-style: normal;
            font-weight: 700;
            /*src: local('Avenir Next LT Pro Demi'), url(fonts/AvenirNextLTPro-Demi.woff) format('woff')*/
        }

        @font-face {
            font-family: 'Avenir Next LT Pro Regular';
            font-style: normal;
            font-weight: 400;
            /*src: local('Avenir Next LT Pro Regular'), url(fonts/AvenirNextLTPro-Regular.woff) format('woff')*/
        }

        @-moz-document url-prefix() {
            #dateresult {
                margin: 6px 0 10px 1px !important
            }
            .row-bottom .tdfilter3, .row-bottom td {
                padding-top: 8px !important
            }
        }

        body {
            -ms-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out
        }

        #name_2::-webkit-input-placeholder {
            color: #fff
        }

        * {
            box-sizing: border-box
        }

        #container {
            padding-top: 3px !important
        }

        table.display {
            margin: 0 auto !important
        }

        table.display {
            width: 100% !important;
            border-collapse: collapse !important
        }

        .labels ul li {
            font-weight: 700
        }

        .td1 {
            padding-left: 39px
        }

        .td2 {
            padding: 6px 0 0 58px !important
        }

        .div_logo {
            margin: 12px 0 0 20px !important;
            -ms-transition: all 1s ease-in-out;
            -moz-transition: all 1s ease-in-out;
            -webkit-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out
        }

        .labels ul li {
            font-size: 12px
        }

        .person {
            margin-top: 33px
        }

        .labels {
            float: left;
            width: 30%
        }

        .labels ul li {
            margin-bottom: 17px
        }

        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box
        }

        .person {
            background-color: #787878 !important;
            color: #fff !important;
            border-radius: 0 !important;
            -moz-box-shadow: none !important;
            border: 2px solid rgba(91, 148, 35, 1) !important
        }

        .collapse-icon, a {
            cursor: pointer
        }

        ul.middle li a {
            color: #00adf1 !important
        }

        ul.middle li a {
            font-size: 13px
        }

        ul.middle {
            margin-bottom: 200px
        }

        img.icon {
            width: 30px;
            margin: 0 auto;
            display: block
        }

        ul.middle li {
            margin-bottom: 9px
        }

        .tooltip-heading {
            display: block
        }

        #example thead {
            color: #000
        }

        .q_v {
            font-size: 13px;
            margin-top: 10px;
            color: #00adf1;
            text-align: right
        }

        .tooltip-heading {
            text-align: center;
            font-weight: 700
        }

        .sectors {
            margin-top: 5px
        }

        #request {
            height: 105px;
            width: 100%;
            font-family: arial
        }

        ::-webkit-input-placeholder {
            color: #555
        }

        :-moz-placeholder {
            color: #555
        }

        ::-moz-placeholder {
            color: #555
        }

        :-ms-input-placeholder {
            color: #555
        }

        .collapse-icon {
            margin-right: 10px
        }

        .holding, .price-change {
            text-align: center
        }

        #p-trade-holding .p-col:first-of-type {
            float: left
        }

        .white {
            background: #fff
        }

        .price .at {
            margin-right: 3px
        }

        .at span.at {
            display: block
        }

        .p-trade {
            width: 154px !important
        }

        .amount.amount-header {
            width: 20px;
            position: relative
        }

        td.at {
            position: relative
        }

        #p-trade-holding .p-col:last-of-type {
            float: right
        }

        #p-trade-holding .p-col:first-of-type, #p-trade-holding .p-col:nth-of-type(2) {
            padding-right: 13px
        }

        #p-trade-holding {
            width: 87px
        }

        .holding .font {
            margin-right: -10px
        }

        .sii {
            text-align: right
        }

        .price {
            text-align: left !important
        }

        .price {
            width: 78px;
            white-space: pre
        }

        .company-logo, .holding, .type {
            white-space: nowrap
        }

        .at span.at {
            text-align: center;
            margin: 0 auto
        }

        .at {
            width: 17px;
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .type {
            width: 32px !important
        }

        .p-col {
            font-size: 8px;
            border-right: 1px solid #fff;
            padding: 0 4px
        }

        .p-col:last-of-type {
            border: none;
            padding-right: 0
        }

        .col-left {
            float: left
        }

        .col-right {
            float: right
        }

        #cluster {
            margin: 0
        }

        #director-header {
            width: 108px !important
        }

        .border-none {
            border: none !important
        }

        .company-logo {
            font-weight: 700
        }

        th.price-change {
            padding: 0 !important
        }

        .price-change {
            width: 40px !important
        }

        th.holding_change {
            width: 64px !important
        }

        #trades-meta {
            margin: 4px 4px 4px 0;
            color: #000
        }

        .buy-color {
            color: #00adf1
        }

        .sell-color {
            color: #d04444
        }

        .border0 {
            border-top: 0 !important;
            transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -webkit-transition: all .5s ease-in-out
        }

        #title-header {
            width: 50px !important
        }

        .holding {
            width: 60px !important
        }

        .sii-col {
            width: 42px !important
        }

        th.holding {
            max-width: 0
        }

        .visibility_hidden {
            transition: all 1s ease-in-out;
            visibility: hidden
        }

        .title-text {
            display: block;
            margin-top: -1px
        }

        .col {
            display: inline-block;
            vertical-align: top;
            padding: 3px 0 0;
            min-height: 20px
        }

        .director-title {
            font-size: 12px
        }

        .first-col, .title-col {
            padding-left: 6px
        }

        .director-data {
            position: relative;
            font-size: 11px
        }

        .data-col {
            height: 20px
        }

        .title-col {
            color: #6d6c6c
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-center {
            text-align: center
        }

        .top-labels .col {
            font-size: 14px;
            padding-top: 1px
        }

        .font-8 {
            font-size: 8px
        }

        .font-9 {
            font-size: 9px
        }

        .font-13 {
            font-size: 13px
        }

        .company-logo {
            color: #000;
            font-family: pf_din_text_universalmedium !important;
            font-size: 16px;
            margin: 14px -16px 0 0;
            width: 220px
        }

        .scroll-logo {
            background: url(assets/images/logo.png) no-repeat !important;
            display: none
        }

        .red_change {
            color: #d04545 !important
        }

        .director-title, .top-labels {
            background: 0 0 !important
        }

        .V-hidden {
            visibility: hidden
        }

        .director-title .data-col {
            font-size: 11px
        }

        .opacity-0 {
            -ms-opacity: 0;
            -moz-opacity: 0;
            -webkit-opacity: 0;
            opacity: 0
        }

        .float-left {
            float: left
        }

        .float-right {
            float: right
        }

        #float-menu {
            position: fixed;
            top: 146px;
            left: 0;
            padding: 0;
            border-right: 1px solid #ccc;
            width: 174px;
            background-color: #a7acac;
            z-index: 800;
            opacity: .85
        }

        .navigation {
            list-style: none;
            padding-left: 10px
        }

        .navigation li {
            line-height: 12px;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-left: 27px
        }

        .navigation li a {
            cursor: pointer;
            font-size: 13px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            font-family: Arial
        }

        .active {
            color: #1857a4 !important;
            font-weight: 700
        }

        @media (max-width: 769px) {
            #float-menu {
                display: none
            }
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>

    <script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('.navigation a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 1000, 'swing', function () {
                    //window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPosition = $(document).scrollTop();
            $('.navigation a').each(function () {
                var currentLink = $(this);
                var refElement = $(currentLink.attr("href"));
                if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
                    $('.navigation ul li a').removeClass("active");
                    currentLink.addClass("active");
                } else {
                    currentLink.removeClass("active");
                }
            });
        }
    </script>
</head>

<body style="text-decoration:none;">

<div id="float-menu">
    <ul class="navigation">
        <li><a class="active" href="#new">New Signals</a></li>
        <li><a href="#changed">Changed Signals</a></li>
        <li><a href="#retired">Signals Retired</a></li>
    </ul>
</div>

<div class="table-container">
    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="100%"
           class="main-display">
        <tbody>
        <tr>
            <td colspan="2">
                <table role="presentation" border="0" cellspacing="0" cellpadding="0" style="margin:20px 0px;"
                       width="100%">
                    <tbody>
                    <tr>
                        <td style="font-size:32px; font-family:Arial;">Daily US Stock Rankings</td>
                        <td align="right"><a href="http://data.smartinsider.com"><img
                                        src="https://alpha.smartinsider.com/img/logo6.png" width="263" height="60"></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <!--<tr>
            <td colspan="2" style="padding-bottom:5px;">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="207"><a href="https://alpha.smartinsider.com/members/filter.php?s=45904&r=352478" ><img src="https://alpha.smartinsider.com/img/TransactionView.png" /></a></td>
                        <td align="right" width="240"><a href="https://alpha.smartinsider.com/members/filter.php?s=45904&r=352478&openfilter=yes"><img src="https://alpha.smartinsider.com/img/ChangeBulletinCriteria.png" /></a></td>
                        <td align="right" width="200"><a href="https://alpha.smartinsider.com/app/ajax/excelexport?request=get&userID=31&r=af6d136ce"><img src="https://alpha.smartinsider.com/img/DownloadXL.png" /></a></td>
                    </tr>
                </table>
            </td>
        </tr>-->
        <tr>
            <!--<td style="font-size:12px; font-family:Arial;">If there are problems with how this message is displayed, click <a style="text-decoration:none;color:#058dc7;" href="https://alpha.smartinsider.com/app/bulletintool/reportsignal1?r=352478" target="_blank">here</a> to view it in a web browser.</td>-->
        </tr>
        <tr>
            <td colspan="2" id="new" style="padding:15px 0px;font-size:20px;font-weight:bold;font-family:Arial;">New
                Signals
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table style="" width="100%" role="presentation" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr style="background-color:#A7ACAC;">
                        <td style="padding-left:10px;" width="34">
                            <img title="United States" src="https://alpha.smartinsider.com/img/flgs/flgs/us.png"
                                 width="27">
                        </td>
                        <td width="360"><a title="Energizer Holdings Inc"
                                           href="https://alpha.smartinsider.com/app/members/company?c=83127"
                                           target="_blank"
                                           style="font-family:Arial;   text-align:left; font-size:24px; color:#FFFFFF; text-decoration:none;">Energizer
                                Holdings..</a></td>
                        <td style="font-family:Arial; font-size:17px; color:#FFFFFF;" width="204"><b>Ranked <span
                                        style="color:#abff2e;">+N</span></b></td>
                        <td style="line-height: 18px; font-family:Arial; font-size:14px; color:#FFFFFF; padding-right:10px;"
                            width="230" align="right"><img
                                    src="https://alpha.smartinsider.com/img/White_Sectors/452010.png"
                                    style="padding-left:5px;" width="36" align="right">
                            <a title="Energizer Holdings Inc"
                               href="https://alpha.smartinsider.com/app/members/company?c=83127" target="_blank"
                               style="font-family:Arial;color:#FFFFFF; text-decoration:none;">ENR</a> US<br>
                            <span title="Consumer Staples">Consumer Staples</span><br><span
                                    style="font-family:Helvetica; font-size:12px;">Mkt Cap: </span>$2.9 Billion
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom:10px;font-family:Arial;">Four insiders purchased stock on August 8 at
                prices ranging from $34.65-36.43, two days after the company reported 3Q earnings. Alan Hoskins (CEO)
                purchased 10,000 shares, Robert Vitale (Director) purchased 5,000 shares, Mark Lavigne (COO) purchased
                3,563
                shares and Gregory Kinder (EVP) purchased 6,000 shares. The purchases total about $900,000. Lavigne and
                Kinder are reversing and making their first purchases despite being with the company for several years.
                Vitale has been timely in the past, but not perfect. We are ranking the stock +N.
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom:10px;font-family:Arial;">
                <table class="display coco corina"
                       style="border-collapse: collapse !important;font-size: 13px;font-family: Arial, Helvetica, sans-serif;color:#555;border:none;border-collapse:collapse !important;"
                       id="example" width="660" role="presentation" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr id="group-heading">
                        <th colspan="2" style="border-top: 4px solid #00adf1;border-bottom: 2px solid #00adf1;"
                            rowspan="2"
                            id="group-insider"><span>Insider</span></th>
                        <th colspan="5" style="border-top: 4px solid #00adf1;border-bottom: 2px solid #00adf1;"
                            rowspan="2"
                            id="group-tdetails"><span>Transaction Details</span></th>
                        <th colspan="3" style="border-top: 4px solid #00adf1;" id="group-holding"><span>Holding</span>
                        </th>
                    </tr>
                    <tr id="lower-head">
                        <th class="holding visibled holding-header group-holding"
                            style="border-right:none;border-bottom: 2px solid #00adf1;"
                            title="After transactions reported today">Amount
                        </th>
                        <th id="holding_change" class="holding_change visibled group-holding"
                            style="border-right:none;border-bottom: 2px solid #00adf1;" title="After this transaction">
                            <center>Change</center>
                        </th>
                        <th title="% of Shares on Issue held, not displayed below 0.1%"
                            style="border-right:none;border-bottom: 2px solid #00adf1;" id="sii-col"
                            class="sii-col visibled group-holding">%Sii
                        </th>
                    </tr>
                    </thead>
                    <tbody style="text-align:center;">
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=367722"
                                    style="color: #00adf1 !important;" title="Robert Vitale"
                                    class="persontooltip personname" id="367722">&nbsp;Robert Vitale</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">N</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">08-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">5,000 @ $34.64</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233690"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$173,229</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">18,225</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">38%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.03%</td>

                    </tr>
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=573263"
                                    style="color: #00adf1 !important;" title="Alan Hoskins"
                                    class="persontooltip personname"
                                    id="573263">&nbsp;Alan Hoskins</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">E:CEO</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">08-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">10,000 @ $34.99</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233746"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$349,957</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">260,337</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">4%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.37%</td>

                    </tr>
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=361726"
                                    style="color: #00adf1 !important;" title="Mark Lavigne"
                                    class="persontooltip personname"
                                    id="361726">&nbsp;Mark Lavigne</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">P:COO</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">08-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">3,563 @ $35.08</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233782"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$124,992</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">70,272</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">5%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.10%</td>

                    </tr>
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=572859"
                                    style="color: #00adf1 !important;" title="Gregory Kinder"
                                    class="persontooltip personname" id="572859">&nbsp;Gregory Kinder</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">P:Div. EVP</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">08-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">6,000 @ $36.43</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233843"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$218,590</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">37,767</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">19%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.05%</td>

                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom:10px;font-family:Arial;">
                <div id="83127" data-highcharts-chart="0" style="overflow: hidden;">
                    <div id="highcharts-u513sl5-0"
                         style="position: relative; overflow: hidden; width: 660px; height: 400px; text-align: left; line-height: normal; z-index: 0; left: 0.5px; top: 0px;"
                         dir="ltr" class="highcharts-container ">
                        <svg version="1.1" class="highcharts-root"
                             style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                             xmlns="http://www.w3.org/2000/svg" width="660" height="400" viewBox="0 0 660 400">
                            <desc>Created with Highcharts 7.2.0</desc>
                            <defs>
                                <clipPath id="highcharts-u513sl5-1-">
                                    <rect x="0" y="0" width="612" height="353" fill="none"></rect>
                                </clipPath>
                                <clipPath id="highcharts-u513sl5-770-">
                                    <rect x="0" y="0" width="612" height="353" fill="none"></rect>
                                </clipPath>
                            </defs>
                            <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="660" height="400"
                                  rx="0"
                                  ry="0"></rect>
                            <rect fill="none" class="highcharts-plot-background" x="10" y="10" width="612"
                                  height="353"></rect>
                            <g class="highcharts-plot-bands-0" data-z-index="0">
                                <path fill="#BECC9F" class="highcharts-plot-band "
                                      d="M 199.5 10 L 199.5 363 309.5 363 309.5 10 z"></path>
                                <path fill="#BECC9F" class="highcharts-plot-band "
                                      d="M 464.5 10 L 464.5 363 561.5 363 561.5 10 z"></path>
                                <path fill="#EBFAC7" class="highcharts-plot-band "
                                      d="M 599.5 10 L 599.5 363 601.5 363 601.5 10 z"></path>
                                <path fill="#BECC9F" class="highcharts-plot-band "
                                      d="M 602.5 10 L 602.5 363 621.5 363 621.5 10 z"></path>
                            </g>
                            <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                                <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 64.5 10 L 64.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 133.5 10 L 133.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 204.5 10 L 204.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 272.5 10 L 272.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 341.5 10 L 341.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 409.5 10 L 409.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 476.5 10 L 476.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 542.5 10 L 542.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 610.5 10 L 610.5 363"
                                      opacity="1"></path>
                            </g>
                            <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 363.5 L 622 363.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 319.5 L 622 319.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 275.5 L 622 275.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 231.5 L 622 231.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 187.5 L 622 187.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 142.5 L 622 142.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 98.5 L 622 98.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 54.5 L 622 54.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 9.5 L 622 9.5" opacity="1"></path>
                            </g>
                            <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="10" y="10" width="612"
                                  height="353"></rect>
                            <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 64.5 363 L 64.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 133.5 363 L 133.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 204.5 363 L 204.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 272.5 363 L 272.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 341.5 363 L 341.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 409.5 363 L 409.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 476.5 363 L 476.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 542.5 363 L 542.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 610.5 363 L 610.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                      data-z-index="7" d="M 10 363.5 L 622 363.5"></path>
                            </g>
                            <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
                                <text x="634" data-z-index="7" text-anchor="middle"
                                      transform="translate(0,0) rotate(90 634 186.5)" class="highcharts-axis-title"
                                      style="color:#666666;fill:#666666;" y="186.5">
                                    <tspan>Stock Price</tspan>
                                </text>
                                <path fill="none" class="highcharts-axis-line" data-z-index="7"
                                      d="M 622 10 L 622 363"></path>
                            </g>
                            <g class="highcharts-series-group" data-z-index="3">
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                   transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-u513sl5-770-)">
                                    <path fill="none"
                                          d="M 0 201.03350000000003 L 0.79895561357694 205.26067500000002 L 1.5979112271539 196.00325 L 2.3968668407308 186.031 L 3.1958224543077 176.853 L 3.9947780678847 182.76575000000003 L 4.7937336814616 183.56 L 5.5926892950386 183.56 L 6.3916449086155 178.97100000000003 L 7.1906005221924 181.79500000000002 L 7.989556135771 186.031 L 8.7885117493479 196.79749999999999 L 9.5874673629248 196.26800000000003 L 10.386422976502 200.32750000000004 L 11.185378590079 198.386 L 11.984334203656 195.209 L 12.783289817233 187.2665 L 13.58224543081 188.41375000000002 L 14.381201044386 191.94375000000002 L 15.180156657963 189.03150000000002 L 15.97911227154 186.384 L 16.778067885117 189.64925000000002 L 17.577023498694 190.0905 L 18.375979112271 202.53375000000003 L 19.174934725848 207.12275 L 19.973890339425 207.29925000000003 L 20.772845953002 205.799 L 21.571801566579 208.88775000000004 L 22.370757180157 212.06475000000003 L 23.169712793734 220.71325 L 23.968668407311 216.30075 L 24.767624020888 210.12325000000004 L 25.566579634465 209.77025000000003 L 26.365535248042 226.36124999999998 L 27.164490861619 227.15550000000002 L 27.963446475196 230.59725000000003 L 28.762402088773 232.45050000000003 L 29.56135770235 230.24425000000002 L 30.360313315927 243.83475000000004 L 31.159268929504 242.59925000000004 L 31.958224543081 236.42175 L 32.757180156658 238.275 L 33.556135770235 243.57000000000002 L 34.355091383811 243.74649999999997 L 35.154046997388 242.33450000000002 L 35.953002610965 237.83375000000004 L 36.751958224544 229.36175000000003 L 37.550913838121 221.684 L 38.349869451698 229.89124999999999 L 39.148825065275 229.62650000000002 L 39.947780678852 222.5665 L 40.746736292429 219.30125 L 41.545691906005 226.71425 L 42.344647519582 225.92000000000002 L 43.143603133159 226.758375 L 43.942558746736 228.03800000000004 L 44.741514360313 223.802 L 45.54046997389 223.449 L 46.339425587467 235.36275 L 47.138381201044 237.83375000000004 L 47.937336814621 236.33350000000002 L 48.736292428198 226.140625 L 49.535248041775 225.12574999999998 L 50.334203655352 223.18425 L 51.13315926893 221.331 L 51.932114882507 221.41925000000003 L 52.731070496084 221.06625 L 53.530026109661 226.71425 L 54.328981723238 223.53725 L 55.127937336815 223.89024999999998 L 55.926892950392 224.06675 L 56.725848563969 211.71175000000002 L 57.524804177546 201.56300000000005 L 58.323759791123 197.327 L 59.1227154047 196.79749999999999 L 59.921671018277 202.44549999999998 L 60.720626631854 198.20950000000002 L 61.51958224543 193.35574999999997 L 62.318537859007 191.59075 L 63.117493472584 191.679 L 63.916449086161 191.76725 L 64.715404699738 189.208 L 65.514360313315 184.26600000000005 L 66.313315926894 186.384 L 67.112271540471 189.29625000000004 L 67.911227154048 188.32550000000003 L 68.710182767624 174.029 L 69.509138381201 172.97000000000003 L 70.308093994778 170.76375000000002 L 71.107049608355 173.23475000000005 L 71.906005221932 172.52875 L 72.704960835509 172.35225000000003 L 73.503916449086 156.82025000000004 L 74.302872062663 147.99525000000006 L 75.10182767624 154.261 L 75.900783289817 158.76175000000003 L 76.699738903394 151.87825000000004 L 77.498694516971 148.70125000000002 L 78.297650130548 148.70125000000002 L 79.096605744125 144.55350000000004 L 79.895561357702 145.34775000000002 L 80.69451697128 146.05374999999998 L 81.493472584857 144.90650000000002 L 82.292428198434 144.46525 L 83.091383812011 143.05325000000002 L 83.890339425588 141.906 L 84.689295039165 143.05325000000002 L 85.488250652742 142.70025000000004 L 86.287206266319 144.11225 L 87.086161879896 145.6125 L 87.885117493473 138.99375 L 88.684073107049 132.63975000000002 L 89.483028720626 133.78699999999998 L 90.281984334203 126.99175000000002 L 91.08093994778 127.87425000000005 L 91.879895561357 129.46275000000003 L 92.678851174934 130.16875000000002 L 93.477806788511 138.46425 L 94.276762402088 137.8465 L 95.075718015667 135.199 L 95.874673629243 131.31600000000003 L 96.67362924282 129.46275000000003 L 97.472584856397 125.40325000000001 L 98.271540469974 128.49200000000005 L 99.070496083551 127.69775000000001 L 99.869451697128 129.28625 L 100.66840731071 126.28575000000004 L 101.46736292428 122.31450000000001 L 102.26631853786 123.81475000000003 L 103.06527415144 126.10925 L 103.86422976501 126.02100000000002 L 104.66318537859 128.31550000000001 L 105.46214099217 125.05025000000003 L 106.26109660574 124.69725000000005 L 107.06005221932 125.75625000000002 L 107.8590078329 125.40325000000001 L 108.65796344647 125.93275000000006 L 109.45691906005 124.07950000000002 L 110.25587467363 109.25350000000003 L 111.05483028721 109.69475000000003 L 111.85378590078 107.75325000000004 L 112.65274151436 107.66500000000005 L 113.45169712794 107.8415 L 114.25065274151 109.95950000000002 L 115.04960835509 110.22425000000004 L 115.84856396867 95.83950000000004 L 116.64751958225 92.48599999999999 L 117.44647519582 100.07550000000006 L 118.2454308094 96.72200000000004 L 119.04438642298 99.7225 L 119.84334203655 90.45625000000001 L 120.64229765013 89.83850000000001 L 121.44125326371 96.81025 L 122.24020887728 92.48599999999999 L 123.03916449086 95.22174999999999 L 123.83812010444 93.63325000000003 L 124.63707571802 110.57725000000002 L 125.43603133159 119.4905 L 126.23498694517 127.786 L 127.03394255875 133.38987500000005 L 127.83289817232 132.46325 L 128.6318537859 140.6705 L 129.43080939948 139.435 L 130.22976501305 135.28725 L 131.02872062663 139.6115 L 131.82767624021 141.46475000000004 L 132.62663185379 143.31800000000004 L 133.42558746736 160.08550000000002 L 134.22454308094 157.70274999999998 L 135.02349869452 153.555 L 135.82245430809 148.96600000000004 L 136.62140992167 146.58325000000002 L 137.42036553525 142.43550000000002 L 138.21932114882 138.11125 L 139.0182767624 136.258 L 139.81723237598 136.16975000000002 L 140.61618798956 149.40725 L 141.41514360313 144.55350000000004 L 142.21409921671 134.31650000000002 L 143.01305483029 125.05025000000003 L 143.81201044386 133.52225000000004 L 144.61096605744 156.11425 L 145.40992167102 161.23275000000004 L 146.2088772846 183.82475 L 147.00783289817 177.206 L 147.80678851175 167.58675000000002 L 148.60574412533 169.35174999999998 L 149.4046997389 167.23375000000004 L 150.20365535248 166.17475 L 151.00261096606 164.49800000000002 L 151.80156657963 161.23275000000004 L 152.60052219321 165.38050000000004 L 153.39947780679 176.76475000000002 L 154.19843342037 182.14800000000002 L 154.99738903394 178.4415 L 155.79634464752 178.88275000000004 L 156.5953002611 183.82475 L 157.39425587467 185.76624999999999 L 158.19321148825 190.53175000000005 L 158.99216710183 193.79700000000003 L 159.7911227154 192.20850000000002 L 160.59007832898 191.94375000000002 L 161.38903394256 192.385 L 162.18798955614 196.53275000000005 L 162.98694516971 200.724625 L 163.78590078329 208.137625 L 164.58485639687 203.06324999999998 L 165.38381201044 207.91700000000003 L 166.18276762402 208.53475000000003 L 166.9817232376 207.91700000000003 L 167.78067885118 202.44549999999998 L 168.57963446475 204.5635 L 169.37859007833 196.26800000000003 L 170.17754569191 199.53325 L 170.97650130548 196.79749999999999 L 171.77545691906 201.3865 L 172.57441253264 197.76825 L 173.37336814621 205.53425000000001 L 174.17232375979 210.82925000000003 L 174.97127937337 218.59525000000005 L 175.77023498695 211.18225 L 176.56919060052 196.4445 L 177.3681462141 232.618175 L 178.16710182768 243.21700000000004 L 178.96605744125 254.3365 L 179.76501305483 249.57100000000003 L 180.56396866841 252.13025 L 181.36292428198 252.83625 L 182.16187989556 254.6895 L 182.96083550914 250.277 L 183.75979112272 248.77675 L 184.55874673629 251.60075 L 185.35770234987 241.452 L 186.15665796345 249.30625 L 186.95561357702 253.101 L 187.7545691906 253.71875 L 188.55352480418 242.06975 L 189.35248041775 240.04000000000002 L 190.15143603133 238.0985 L 190.95039164491 224.861 L 191.74934725849 230.86199999999997 L 192.54830287206 231.7445 L 193.34725848564 234.21550000000002 L 194.14621409922 228.03800000000004 L 194.94516971279 220.27200000000002 L 195.74412532637 220.36025 L 196.54308093995 226.27300000000002 L 197.34203655353 221.8605 L 198.1409921671 215.59475 L 198.93994778068 211.2705 L 199.73890339426 213.0355 L 200.53785900783 211.2705 L 201.33681462141 215.85950000000003 L 202.13577023499 211.44700000000003 L 202.93472584856 204.12225000000004 L 203.73368146214 203.195625 L 204.53263707572 205.62249999999997 L 205.33159268929 208.27 L 206.13054830287 221.24275 L 206.92950391645 214.00625000000002 L 207.72845953003 215.06525 L 208.5274151436 210.38800000000003 L 209.32637075718 213.38850000000002 L 210.12532637076 212.94725000000003 L 210.92428198433 211.35875000000004 L 211.72323759791 206.858 L 212.52219321149 208.7995 L 213.32114882507 208.53475000000003 L 214.12010443864 208.35825 L 214.91906005222 208.53475000000003 L 215.7180156658 213.0355 L 216.51697127937 211.8 L 217.31592689295 208.45356000000004 L 218.11488250653 195.12075000000002 L 218.9138381201 190.0905 L 219.71279373368 195.3855 L 220.51174934726 210.25562500000004 L 221.31070496084 211.71175000000002 L 222.10966057441 215.683 L 222.90861618799 215.85950000000003 L 223.70757180157 216.697875 L 224.50652741514 212.85899999999998 L 225.30548302872 221.50750000000002 L 226.1044386423 221.37512500000003 L 226.90339425588 223.18425 L 227.70234986945 231.7445 L 228.50130548303 238.36325 L 229.30026109661 237.39249999999998 L 230.09921671018 244.98199999999997 L 230.89817232376 247.27650000000006 L 231.69712793734 248.556125 L 232.49608355091 248.60025000000002 L 233.29503916449 240.17237500000005 L 234.09399477807 242.24625000000003 L 234.89295039164 231.70037500000004 L 235.69190600522 227.685 L 236.4908616188 230.509 L 237.28981723238 230.509 L 238.08877284595 219.7425 L 238.88772845953 217.09500000000003 L 239.68668407311 221.06625 L 240.48563968668 220.625 L 241.28459530026 220.978 L 242.08355091384 220.88975000000002 L 242.88250652742 220.580875 L 243.68146214099 220.71325 L 244.48041775457 220.0955 L 245.27937336815 212.59425000000005 L 246.07832898172 212.506 L 246.8772845953 212.24124999999998 L 247.67624020888 200.504 L 248.47519582245 199.18025 L 249.27415143603 198.033 L 250.07310704961 197.37112500000003 L 250.87206266319 193.70875000000004 L 251.67101827676 190.973 L 252.46997389034 191.32600000000002 L 253.26892950392 192.82625000000002 L 254.06788511749 198.34187500000002 L 254.86684073107 194.76775 L 255.66579634465 190.79649999999998 L 256.46475195823 194.32650000000004 L 257.2637075718 193.6205 L 258.06266318538 186.384 L 258.86161879896 184.4425 L 259.66057441253 184.35425 L 260.45953002611 181.35375 L 261.25848563969 188.502 L 262.05744125326 197.327 L 262.85639686684 194.32650000000004 L 263.65535248042 194.32650000000004 L 264.45430809399 195.12075000000002 L 265.25326370757 190.62000000000003 L 266.05221932115 167.32200000000003 L 266.85117493473 162.42412500000003 L 267.6501305483 163.9685 L 268.44908616188 163.35075 L 269.24804177546 164.76275000000004 L 270.04699738903 163.52725000000004 L 270.84595300261 162.20350000000005 L 271.64490861619 162.20350000000005 L 272.44386422977 96.1925 L 273.24281984334 114.19550000000001 L 274.04177545692 133.919375 L 274.8407310705 138.28775000000005 L 275.63968668407 131.4925 L 276.43864229765 133.52225000000004 L 277.23759791123 133.434 L 278.0365535248 135.72850000000005 L 278.83550913838 131.22775 L 279.63446475196 138.729 L 280.43342036553 149.67200000000003 L 281.23237597911 103.95850000000004 L 282.03133159269 106.07650000000004 L 282.83028720627 124.34425000000005 L 283.62924281984 128.93325000000002 L 284.42819843342 123.28525000000002 L 285.227154047 137.05225000000002 L 286.02610966058 150.731 L 286.82506527415 146.40675000000005 L 287.62402088773 144.64175000000003 L 288.42297650131 148.34825000000004 L 289.22193211488 138.99375 L 290.02088772846 141.02349999999998 L 290.81984334204 142.612 L 291.61879895561 142.52375 L 292.41775456919 146.848 L 293.21671018277 146.67149999999998 L 294.01566579634 139.6115 L 294.81462140992 132.46325 L 295.6135770235 129.10975000000005 L 296.41253263708 132.1985 L 297.21148825065 136.87575 L 298.01044386423 146.93625 L 298.80939947781 128.05075 L 299.60835509138 117.54900000000004 L 300.40731070496 135.02249999999998 L 301.20626631854 136.52275 L 302.00522193212 143.8475 L 302.80417754569 136.78750000000002 L 303.60313315927 129.46275000000003 L 304.40208877285 125.57974999999999 L 305.20104438642 140.3175 L 306 158.93825 L 306.79895561358 154.08450000000002 L 307.59791122715 149.8485 L 308.39686684073 153.202 L 309.19582245431 154.08450000000002 L 309.99477806788 157.87925 L 310.79373368146 159.64425000000006 L 311.59268929504 163.79200000000003 L 312.39164490862 156.90850000000003 L 313.19060052219 149.58375000000004 L 313.98955613577 91.95650000000006 L 314.78851174935 119.75525000000002 L 315.58746736292 106.51775000000004 L 316.3864229765 104.31150000000002 L 317.18537859008 98.75174999999999 L 317.98433420366 101.13450000000003 L 318.78328981723 101.48750000000001 L 319.58224543081 98.487 L 320.38120104439 99.10475 L 321.18015665796 97.69275000000002 L 321.97911227154 105.63525000000001 L 322.77806788512 96.01600000000002 L 323.57702349869 90.80925000000002 L 324.37597911227 91.07400000000001 L 325.17493472585 93.01550000000003 L 325.97389033942 107.66500000000005 L 326.772845953 110.136 L 327.57180156658 109.25350000000003 L 328.37075718016 103.34075000000001 L 329.16971279373 112.34224999999998 L 329.96866840731 109.95950000000002 L 330.76762402089 111.54800000000003 L 331.56657963447 120.10825000000003 L 332.36553524804 137.93475000000004 L 333.16449086162 145.17125000000004 L 333.9634464752 138.55250000000004 L 334.76240208877 136.69925000000003 L 335.56135770235 132.63975000000002 L 336.36031331593 131.05125000000004 L 337.1592689295 128.49200000000005 L 337.95822454308 129.63925 L 338.75718015666 129.99224999999998 L 339.55613577023 127.786 L 340.35509138381 115.51925000000006 L 341.15404699739 115.60750000000004 L 341.95300261097 119.40225000000004 L 342.75195822454 89.04425000000003 L 343.55091383812 101.48750000000001 L 344.3498694517 98.31050000000002 L 345.14882506527 90.63275000000004 L 345.94778067885 82.69024999999999 L 346.74673629243 80.39575000000002 L 347.54569190601 68.30550000000005 L 348.34464751958 81.71949999999998 L 349.14360313316 87.45574999999997 L 349.94255874674 87.3675 L 350.74151436031 91.69175000000001 L 351.54046997389 91.33875000000006 L 352.33942558747 83.39625000000007 L 353.13838120104 79.33675000000005 L 353.93733681462 85.60250000000002 L 354.7362924282 82.07249999999999 L 355.53524804177 87.0145 L 356.33420365535 91.33875000000006 L 357.13315926893 88.42650000000003 L 357.93211488251 88.25 L 358.73107049608 73.15925000000004 L 359.53002610966 73.86525 L 360.32898172324 72.45325000000003 L 361.12793733681 69.36450000000002 L 361.92689295039 70.95300000000003 L 362.72584856397 63.981250000000045 L 363.52480417755 69.62925000000001 L 364.32375979112 62.30450000000002 L 365.1227154047 62.12800000000004 L 365.92167101828 78.10125000000005 L 366.72062663185 70.15875000000005 L 367.51958224543 56.48000000000002 L 368.31853785901 45.09575000000001 L 369.11749347258 54.09725000000003 L 369.91644908616 61.775000000000034 L 370.71540469974 63.981250000000045 L 371.51436031332 62.039750000000026 L 372.31331592689 61.5985 L 373.11227154047 64.86375000000004 L 373.91122715405 52.86174999999997 L 374.71018276762 56.39175 L 375.5091383812 58.509750000000054 L 376.30809399478 53.74425000000008 L 377.10704960836 55.950500000000034 L 377.90600522193 54.979750000000024 L 378.70496083551 55.68575000000004 L 379.50391644909 43.595500000000015 L 380.30287206266 53.92075 L 381.10182767624 61.15725000000003 L 381.90078328982 55.774 L 382.69973890339 81.27825000000001 L 383.49869451697 68.57025000000004 L 384.29765013055 44.125 L 385.09660574412 49.24349999999998 L 385.8955613577 53.303 L 386.69451697128 59.56875000000002 L 387.49347258486 63.54000000000002 L 388.29242819843 64.33425 L 389.09138381201 62.039750000000026 L 389.89033942559 57.27425000000005 L 390.68929503916 66.27575000000002 L 391.48825065274 53.12650000000008 L 392.28720626632 50.03775000000002 L 393.0861618799 49.15524999999997 L 393.88511749347 58.42149999999998 L 394.68407310705 50.743750000000034 L 395.48302872063 54.71500000000003 L 396.2819843342 58.42149999999998 L 397.08093994778 54.5385 L 397.87989556136 52.24400000000003 L 398.67885117493 50.12600000000009 L 399.47780678851 55.06800000000004 L 400.27676240209 56.56824999999998 L 401.07571801567 56.56824999999998 L 401.87467362924 52.3322500000001 L 402.67362924282 64.24600000000004 L 403.4725848564 83.39625000000007 L 404.27154046997 71.83550000000002 L 405.07049608355 59.03924999999998 L 405.86945169713 55.244500000000016 L 406.66840731071 64.24600000000004 L 407.46736292428 78.63074999999998 L 408.26631853786 81.10174999999998 L 409.06527415144 73.86525 L 409.86422976501 71.30599999999998 L 410.66318537859 69.27625000000006 L 411.46214099217 67.24650000000003 L 412.26109660574 76.15975000000003 L 413.06005221932 90.80925000000002 L 413.8590078329 94.69225 L 414.65796344647 90.89749999999998 L 415.45691906005 100.16375000000002 L 416.25587467363 100.16375000000002 L 417.05483028721 111.19500000000002 L 417.85378590078 113.04825000000005 L 418.65274151436 105.63525000000001 L 419.45169712794 108.98875000000004 L 420.25065274151 100.69324999999998 L 421.04960835509 83.661 L 421.84856396867 81.63125000000002 L 422.64751958225 98.66350000000003 L 423.44647519582 103.34075000000001 L 424.2454308094 93.45675000000006 L 425.04438642298 86.74975 L 425.84334203655 74.39475000000004 L 426.64229765013 76.68925000000002 L 427.44125326371 94.60399999999998 L 428.24020887728 92.48599999999999 L 429.03916449086 83.661 L 429.83812010444 104.84100000000004 L 430.63707571802 104.57625000000004 L 431.43603133159 113.8425 L 432.23498694517 129.904 L 433.03394255875 123.90300000000002 L 433.83289817232 103.60550000000003 L 434.6318537859 99.10475 L 435.43080939948 94.33924999999999 L 436.22976501305 99.28125000000003 L 437.02872062663 91.95650000000006 L 437.82767624021 82.95499999999998 L 438.62663185379 76.07150000000001 L 439.42558746736 78.01300000000003 L 440.22454308094 75.89500000000004 L 441.02349869452 86.04375000000005 L 441.82245430809 105.01750000000001 L 442.62140992167 123.72650000000004 L 443.42036553525 163.79200000000003 L 444.21932114882 176.76475000000002 L 445.0182767624 191.59075 L 445.81723237598 207.29925000000003 L 446.61618798956 203.06324999999998 L 447.41514360313 200.59224999999998 L 448.21409921671 196.17974999999998 L 449.01305483029 209.59375 L 449.81201044386 206.858 L 450.61096605744 213.38850000000002 L 451.40992167102 222.12525000000002 L 452.2088772846 214.18275000000003 L 453.00783289817 220.00725 L 453.80678851175 210.65275 L 454.60574412533 211.8 L 455.4046997389 204.21050000000002 L 456.20365535248 191.85550000000003 L 457.00261096606 194.50300000000001 L 457.80156657963 186.384 L 458.60052219321 180.11825 L 459.39947780679 196.88575000000003 L 460.19843342037 200.504 L 460.99738903394 212.24124999999998 L 461.79634464752 221.24275 L 462.5953002611 227.06725 L 463.39425587467 237.30425000000002 L 464.19321148825 218.33050000000003 L 464.99216710183 219.56600000000003 L 465.7911227154 219.83075 L 466.59007832898 219.30125 L 467.38903394256 223.09600000000003 L 468.18798955614 210.47625000000002 L 468.98694516971 207.12275 L 469.78590078329 204.38699999999997 L 470.58485639687 198.386 L 471.38381201044 195.3855 L 472.18276762402 188.59025 L 472.9817232376 201.65125000000003 L 473.78067885118 199.00375 L 474.57963446475 204.5635 L 475.37859007833 206.505 L 476.17754569191 204.47525000000002 L 476.97650130548 204.38699999999997 L 477.77545691906 204.38699999999997 L 478.57441253264 218.41875000000002 L 479.37336814621 217.80100000000002 L 480.17232375979 210.2115 L 480.97127937337 215.77125000000004 L 481.77023498695 214.4475 L 482.56919060052 214.00625000000002 L 483.3681462141 199.44500000000002 L 484.16710182768 197.15050000000005 L 484.96605744125 196.35625000000002 L 485.76501305483 201.73950000000002 L 486.56396866841 201.91600000000003 L 487.36292428198 218.94825000000003 L 488.16187989556 208.62300000000002 L 488.96083550914 211.62349999999998 L 489.75979112272 221.50750000000002 L 490.55874673629 213.30025000000003 L 491.35770234987 215.85950000000003 L 492.15665796345 215.06525 L 492.95561357702 210.65275 L 493.7545691906 212.06475000000003 L 494.55352480418 210.74100000000004 L 495.35248041775 211.53525 L 496.15143603133 208.0935 L 496.95039164491 206.68150000000003 L 497.74934725849 206.06375000000003 L 498.54830287206 212.85899999999998 L 499.34725848564 200.32750000000004 L 500.14621409922 206.94625000000005 L 500.94516971279 207.82874999999999 L 501.74412532637 216.65374999999997 L 502.54308093995 226.36124999999998 L 503.34203655352 219.12475 L 504.1409921671 218.59525000000005 L 504.93994778068 211.09400000000002 L 505.73890339426 212.77075 L 506.53785900783 211.88825 L 507.33681462141 208.71125 L 508.13577023499 207.29925000000003 L 508.93472584856 209.682 L 509.73368146214 218.6835 L 510.53263707572 210.5645 L 511.33159268929 219.83075 L 512.13054830287 224.77275 L 512.92950391645 221.24275 L 513.72845953003 222.39000000000004 L 514.5274151436 220.978 L 515.32637075718 221.24275 L 516.12532637076 195.91500000000005 L 516.92428198433 199.97449999999998 L 517.72323759791 203.06324999999998 L 518.52219321149 198.82725000000002 L 519.32114882507 195.91500000000005 L 520.12010443864 196.70925 L 520.91906005222 202.53375000000003 L 521.7180156658 203.15150000000003 L 522.51697127937 197.15050000000005 L 523.31592689295 190.17874999999998 L 524.11488250653 193.2675 L 524.9138381201 195.03250000000003 L 525.71279373368 192.9145 L 526.51174934726 189.64925000000002 L 527.31070496084 188.32550000000003 L 528.10966057441 189.29625000000004 L 528.90861618799 188.23725 L 529.70757180157 201.82774999999998 L 530.50652741514 192.9145 L 531.30548302872 192.47325000000004 L 532.1044386423 195.12075000000002 L 532.90339425588 198.82725000000002 L 533.70234986945 199.88625 L 534.50130548303 202.7985 L 535.30026109661 198.5625 L 536.09921671018 219.3895 L 536.89817232376 235.9805 L 537.69712793734 234.21550000000002 L 538.49608355091 233.8625 L 539.29503916449 243.0405 L 540.09399477807 217.35975000000002 L 540.89295039164 202.71025 L 541.69190600522 202.7985 L 542.4908616188 203.328 L 543.28981723238 218.33050000000003 L 544.08877284595 216.12425000000002 L 544.88772845953 213.65325 L 545.68668407311 215.33 L 546.48563968668 216.74200000000002 L 547.28459530026 226.0965 L 548.08355091384 243.21700000000004 L 548.88250652742 239.95175 L 549.68146214099 256.631 L 550.48041775457 248.07075 L 551.27937336815 236.77474999999998 L 552.07832898172 238.0985 L 552.8772845953 233.77425000000002 L 553.67624020888 231.47974999999997 L 554.47519582245 239.42225000000002 L 555.27415143603 242.42275 L 556.07310704961 241.09900000000002 L 556.87206266319 236.33350000000002 L 557.67101827676 246.30575 L 558.46997389034 251.68900000000002 L 559.26892950392 248.6885 L 560.06788511749 271.81 L 560.86684073107 260.95525 L 561.66579634465 275.8695 L 562.46475195823 281.25275 L 563.2637075718 286.54775 L 564.06266318538 280.98800000000006 L 564.86161879896 280.4585 L 565.66057441253 276.752 L 566.45953002611 274.89875 L 567.25848563969 273.575 L 568.05744125326 267.221 L 568.85639686684 265.01475000000005 L 569.65535248042 262.45550000000003 L 570.45430809399 267.83875 L 571.25326370757 267.66225 L 572.05221932115 266.42674999999997 L 572.85117493473 261.66125 L 573.6501305483 259.6315 L 574.44908616188 261.926 L 575.24804177546 264.66175000000004 L 576.04699738903 262.632 L 576.84595300261 269.42725 L 577.64490861619 276.57550000000003 L 578.44386422977 276.57550000000003 L 579.24281984334 270.9275 L 580.04177545692 266.86800000000005 L 580.8407310705 260.867 L 581.63968668407 252.48325 L 582.43864229765 243.57000000000002 L 583.23759791123 246.394 L 584.0365535248 248.86500000000004 L 584.83550913838 259.19025 L 585.63446475196 272.60425 L 586.43342036553 322.20074999999997 L 587.23237597911 319.46500000000003 L 588.03133159269 291.931 L 588.83028720627 293.96075 L 589.62924281984 293.96075 L 590.42819843342 298.54975 L 591.227154047 306.2275 L 592.02610966058 305.60975 L 592.82506527415 296.96125 L 593.62402088773 288.754 L 594.42297650131 299.34400000000005 L 595.22193211488 295.9905 L 596.02088772846 289.37175 L 596.81984334204 295.46099999999996 L 597.61879895561 294.755 L 598.41775456919 303.7565 L 599.21671018277 295.72575 L 600.01566579634 286.90075 L 600.81462140992 277.9875 L 601.6135770235 284.60625 L 602.41253263708 270.13325 L 603.21148825065 267.48575000000005 L 604.01044386423 259.102 L 604.80939947781 234.21550000000002 L 605.60835509138 218.94825000000003 L 606.40731070496 211.8 L 607.20626631854 220.80150000000003 L 608.00522193212 217.88925 L 608.80417754569 222.39000000000004 L 609.60313315927 234.83325000000002 L 610.40208877285 243.74649999999997 L 611.20104438642 246.83525 L 612 247.89425000000006"
                                          class="highcharts-graph" data-z-index="1" stroke="#7cb5ec" stroke-width="2"
                                          stroke-linejoin="round" stroke-linecap="round"></path>
                                    <path fill="none"
                                          d="M -10 201.03350000000003 L 0 201.03350000000003 L 0.79895561357694 205.26067500000002 L 1.5979112271539 196.00325 L 2.3968668407308 186.031 L 3.1958224543077 176.853 L 3.9947780678847 182.76575000000003 L 4.7937336814616 183.56 L 5.5926892950386 183.56 L 6.3916449086155 178.97100000000003 L 7.1906005221924 181.79500000000002 L 7.989556135771 186.031 L 8.7885117493479 196.79749999999999 L 9.5874673629248 196.26800000000003 L 10.386422976502 200.32750000000004 L 11.185378590079 198.386 L 11.984334203656 195.209 L 12.783289817233 187.2665 L 13.58224543081 188.41375000000002 L 14.381201044386 191.94375000000002 L 15.180156657963 189.03150000000002 L 15.97911227154 186.384 L 16.778067885117 189.64925000000002 L 17.577023498694 190.0905 L 18.375979112271 202.53375000000003 L 19.174934725848 207.12275 L 19.973890339425 207.29925000000003 L 20.772845953002 205.799 L 21.571801566579 208.88775000000004 L 22.370757180157 212.06475000000003 L 23.169712793734 220.71325 L 23.968668407311 216.30075 L 24.767624020888 210.12325000000004 L 25.566579634465 209.77025000000003 L 26.365535248042 226.36124999999998 L 27.164490861619 227.15550000000002 L 27.963446475196 230.59725000000003 L 28.762402088773 232.45050000000003 L 29.56135770235 230.24425000000002 L 30.360313315927 243.83475000000004 L 31.159268929504 242.59925000000004 L 31.958224543081 236.42175 L 32.757180156658 238.275 L 33.556135770235 243.57000000000002 L 34.355091383811 243.74649999999997 L 35.154046997388 242.33450000000002 L 35.953002610965 237.83375000000004 L 36.751958224544 229.36175000000003 L 37.550913838121 221.684 L 38.349869451698 229.89124999999999 L 39.148825065275 229.62650000000002 L 39.947780678852 222.5665 L 40.746736292429 219.30125 L 41.545691906005 226.71425 L 42.344647519582 225.92000000000002 L 43.143603133159 226.758375 L 43.942558746736 228.03800000000004 L 44.741514360313 223.802 L 45.54046997389 223.449 L 46.339425587467 235.36275 L 47.138381201044 237.83375000000004 L 47.937336814621 236.33350000000002 L 48.736292428198 226.140625 L 49.535248041775 225.12574999999998 L 50.334203655352 223.18425 L 51.13315926893 221.331 L 51.932114882507 221.41925000000003 L 52.731070496084 221.06625 L 53.530026109661 226.71425 L 54.328981723238 223.53725 L 55.127937336815 223.89024999999998 L 55.926892950392 224.06675 L 56.725848563969 211.71175000000002 L 57.524804177546 201.56300000000005 L 58.323759791123 197.327 L 59.1227154047 196.79749999999999 L 59.921671018277 202.44549999999998 L 60.720626631854 198.20950000000002 L 61.51958224543 193.35574999999997 L 62.318537859007 191.59075 L 63.117493472584 191.679 L 63.916449086161 191.76725 L 64.715404699738 189.208 L 65.514360313315 184.26600000000005 L 66.313315926894 186.384 L 67.112271540471 189.29625000000004 L 67.911227154048 188.32550000000003 L 68.710182767624 174.029 L 69.509138381201 172.97000000000003 L 70.308093994778 170.76375000000002 L 71.107049608355 173.23475000000005 L 71.906005221932 172.52875 L 72.704960835509 172.35225000000003 L 73.503916449086 156.82025000000004 L 74.302872062663 147.99525000000006 L 75.10182767624 154.261 L 75.900783289817 158.76175000000003 L 76.699738903394 151.87825000000004 L 77.498694516971 148.70125000000002 L 78.297650130548 148.70125000000002 L 79.096605744125 144.55350000000004 L 79.895561357702 145.34775000000002 L 80.69451697128 146.05374999999998 L 81.493472584857 144.90650000000002 L 82.292428198434 144.46525 L 83.091383812011 143.05325000000002 L 83.890339425588 141.906 L 84.689295039165 143.05325000000002 L 85.488250652742 142.70025000000004 L 86.287206266319 144.11225 L 87.086161879896 145.6125 L 87.885117493473 138.99375 L 88.684073107049 132.63975000000002 L 89.483028720626 133.78699999999998 L 90.281984334203 126.99175000000002 L 91.08093994778 127.87425000000005 L 91.879895561357 129.46275000000003 L 92.678851174934 130.16875000000002 L 93.477806788511 138.46425 L 94.276762402088 137.8465 L 95.075718015667 135.199 L 95.874673629243 131.31600000000003 L 96.67362924282 129.46275000000003 L 97.472584856397 125.40325000000001 L 98.271540469974 128.49200000000005 L 99.070496083551 127.69775000000001 L 99.869451697128 129.28625 L 100.66840731071 126.28575000000004 L 101.46736292428 122.31450000000001 L 102.26631853786 123.81475000000003 L 103.06527415144 126.10925 L 103.86422976501 126.02100000000002 L 104.66318537859 128.31550000000001 L 105.46214099217 125.05025000000003 L 106.26109660574 124.69725000000005 L 107.06005221932 125.75625000000002 L 107.8590078329 125.40325000000001 L 108.65796344647 125.93275000000006 L 109.45691906005 124.07950000000002 L 110.25587467363 109.25350000000003 L 111.05483028721 109.69475000000003 L 111.85378590078 107.75325000000004 L 112.65274151436 107.66500000000005 L 113.45169712794 107.8415 L 114.25065274151 109.95950000000002 L 115.04960835509 110.22425000000004 L 115.84856396867 95.83950000000004 L 116.64751958225 92.48599999999999 L 117.44647519582 100.07550000000006 L 118.2454308094 96.72200000000004 L 119.04438642298 99.7225 L 119.84334203655 90.45625000000001 L 120.64229765013 89.83850000000001 L 121.44125326371 96.81025 L 122.24020887728 92.48599999999999 L 123.03916449086 95.22174999999999 L 123.83812010444 93.63325000000003 L 124.63707571802 110.57725000000002 L 125.43603133159 119.4905 L 126.23498694517 127.786 L 127.03394255875 133.38987500000005 L 127.83289817232 132.46325 L 128.6318537859 140.6705 L 129.43080939948 139.435 L 130.22976501305 135.28725 L 131.02872062663 139.6115 L 131.82767624021 141.46475000000004 L 132.62663185379 143.31800000000004 L 133.42558746736 160.08550000000002 L 134.22454308094 157.70274999999998 L 135.02349869452 153.555 L 135.82245430809 148.96600000000004 L 136.62140992167 146.58325000000002 L 137.42036553525 142.43550000000002 L 138.21932114882 138.11125 L 139.0182767624 136.258 L 139.81723237598 136.16975000000002 L 140.61618798956 149.40725 L 141.41514360313 144.55350000000004 L 142.21409921671 134.31650000000002 L 143.01305483029 125.05025000000003 L 143.81201044386 133.52225000000004 L 144.61096605744 156.11425 L 145.40992167102 161.23275000000004 L 146.2088772846 183.82475 L 147.00783289817 177.206 L 147.80678851175 167.58675000000002 L 148.60574412533 169.35174999999998 L 149.4046997389 167.23375000000004 L 150.20365535248 166.17475 L 151.00261096606 164.49800000000002 L 151.80156657963 161.23275000000004 L 152.60052219321 165.38050000000004 L 153.39947780679 176.76475000000002 L 154.19843342037 182.14800000000002 L 154.99738903394 178.4415 L 155.79634464752 178.88275000000004 L 156.5953002611 183.82475 L 157.39425587467 185.76624999999999 L 158.19321148825 190.53175000000005 L 158.99216710183 193.79700000000003 L 159.7911227154 192.20850000000002 L 160.59007832898 191.94375000000002 L 161.38903394256 192.385 L 162.18798955614 196.53275000000005 L 162.98694516971 200.724625 L 163.78590078329 208.137625 L 164.58485639687 203.06324999999998 L 165.38381201044 207.91700000000003 L 166.18276762402 208.53475000000003 L 166.9817232376 207.91700000000003 L 167.78067885118 202.44549999999998 L 168.57963446475 204.5635 L 169.37859007833 196.26800000000003 L 170.17754569191 199.53325 L 170.97650130548 196.79749999999999 L 171.77545691906 201.3865 L 172.57441253264 197.76825 L 173.37336814621 205.53425000000001 L 174.17232375979 210.82925000000003 L 174.97127937337 218.59525000000005 L 175.77023498695 211.18225 L 176.56919060052 196.4445 L 177.3681462141 232.618175 L 178.16710182768 243.21700000000004 L 178.96605744125 254.3365 L 179.76501305483 249.57100000000003 L 180.56396866841 252.13025 L 181.36292428198 252.83625 L 182.16187989556 254.6895 L 182.96083550914 250.277 L 183.75979112272 248.77675 L 184.55874673629 251.60075 L 185.35770234987 241.452 L 186.15665796345 249.30625 L 186.95561357702 253.101 L 187.7545691906 253.71875 L 188.55352480418 242.06975 L 189.35248041775 240.04000000000002 L 190.15143603133 238.0985 L 190.95039164491 224.861 L 191.74934725849 230.86199999999997 L 192.54830287206 231.7445 L 193.34725848564 234.21550000000002 L 194.14621409922 228.03800000000004 L 194.94516971279 220.27200000000002 L 195.74412532637 220.36025 L 196.54308093995 226.27300000000002 L 197.34203655353 221.8605 L 198.1409921671 215.59475 L 198.93994778068 211.2705 L 199.73890339426 213.0355 L 200.53785900783 211.2705 L 201.33681462141 215.85950000000003 L 202.13577023499 211.44700000000003 L 202.93472584856 204.12225000000004 L 203.73368146214 203.195625 L 204.53263707572 205.62249999999997 L 205.33159268929 208.27 L 206.13054830287 221.24275 L 206.92950391645 214.00625000000002 L 207.72845953003 215.06525 L 208.5274151436 210.38800000000003 L 209.32637075718 213.38850000000002 L 210.12532637076 212.94725000000003 L 210.92428198433 211.35875000000004 L 211.72323759791 206.858 L 212.52219321149 208.7995 L 213.32114882507 208.53475000000003 L 214.12010443864 208.35825 L 214.91906005222 208.53475000000003 L 215.7180156658 213.0355 L 216.51697127937 211.8 L 217.31592689295 208.45356000000004 L 218.11488250653 195.12075000000002 L 218.9138381201 190.0905 L 219.71279373368 195.3855 L 220.51174934726 210.25562500000004 L 221.31070496084 211.71175000000002 L 222.10966057441 215.683 L 222.90861618799 215.85950000000003 L 223.70757180157 216.697875 L 224.50652741514 212.85899999999998 L 225.30548302872 221.50750000000002 L 226.1044386423 221.37512500000003 L 226.90339425588 223.18425 L 227.70234986945 231.7445 L 228.50130548303 238.36325 L 229.30026109661 237.39249999999998 L 230.09921671018 244.98199999999997 L 230.89817232376 247.27650000000006 L 231.69712793734 248.556125 L 232.49608355091 248.60025000000002 L 233.29503916449 240.17237500000005 L 234.09399477807 242.24625000000003 L 234.89295039164 231.70037500000004 L 235.69190600522 227.685 L 236.4908616188 230.509 L 237.28981723238 230.509 L 238.08877284595 219.7425 L 238.88772845953 217.09500000000003 L 239.68668407311 221.06625 L 240.48563968668 220.625 L 241.28459530026 220.978 L 242.08355091384 220.88975000000002 L 242.88250652742 220.580875 L 243.68146214099 220.71325 L 244.48041775457 220.0955 L 245.27937336815 212.59425000000005 L 246.07832898172 212.506 L 246.8772845953 212.24124999999998 L 247.67624020888 200.504 L 248.47519582245 199.18025 L 249.27415143603 198.033 L 250.07310704961 197.37112500000003 L 250.87206266319 193.70875000000004 L 251.67101827676 190.973 L 252.46997389034 191.32600000000002 L 253.26892950392 192.82625000000002 L 254.06788511749 198.34187500000002 L 254.86684073107 194.76775 L 255.66579634465 190.79649999999998 L 256.46475195823 194.32650000000004 L 257.2637075718 193.6205 L 258.06266318538 186.384 L 258.86161879896 184.4425 L 259.66057441253 184.35425 L 260.45953002611 181.35375 L 261.25848563969 188.502 L 262.05744125326 197.327 L 262.85639686684 194.32650000000004 L 263.65535248042 194.32650000000004 L 264.45430809399 195.12075000000002 L 265.25326370757 190.62000000000003 L 266.05221932115 167.32200000000003 L 266.85117493473 162.42412500000003 L 267.6501305483 163.9685 L 268.44908616188 163.35075 L 269.24804177546 164.76275000000004 L 270.04699738903 163.52725000000004 L 270.84595300261 162.20350000000005 L 271.64490861619 162.20350000000005 L 272.44386422977 96.1925 L 273.24281984334 114.19550000000001 L 274.04177545692 133.919375 L 274.8407310705 138.28775000000005 L 275.63968668407 131.4925 L 276.43864229765 133.52225000000004 L 277.23759791123 133.434 L 278.0365535248 135.72850000000005 L 278.83550913838 131.22775 L 279.63446475196 138.729 L 280.43342036553 149.67200000000003 L 281.23237597911 103.95850000000004 L 282.03133159269 106.07650000000004 L 282.83028720627 124.34425000000005 L 283.62924281984 128.93325000000002 L 284.42819843342 123.28525000000002 L 285.227154047 137.05225000000002 L 286.02610966058 150.731 L 286.82506527415 146.40675000000005 L 287.62402088773 144.64175000000003 L 288.42297650131 148.34825000000004 L 289.22193211488 138.99375 L 290.02088772846 141.02349999999998 L 290.81984334204 142.612 L 291.61879895561 142.52375 L 292.41775456919 146.848 L 293.21671018277 146.67149999999998 L 294.01566579634 139.6115 L 294.81462140992 132.46325 L 295.6135770235 129.10975000000005 L 296.41253263708 132.1985 L 297.21148825065 136.87575 L 298.01044386423 146.93625 L 298.80939947781 128.05075 L 299.60835509138 117.54900000000004 L 300.40731070496 135.02249999999998 L 301.20626631854 136.52275 L 302.00522193212 143.8475 L 302.80417754569 136.78750000000002 L 303.60313315927 129.46275000000003 L 304.40208877285 125.57974999999999 L 305.20104438642 140.3175 L 306 158.93825 L 306.79895561358 154.08450000000002 L 307.59791122715 149.8485 L 308.39686684073 153.202 L 309.19582245431 154.08450000000002 L 309.99477806788 157.87925 L 310.79373368146 159.64425000000006 L 311.59268929504 163.79200000000003 L 312.39164490862 156.90850000000003 L 313.19060052219 149.58375000000004 L 313.98955613577 91.95650000000006 L 314.78851174935 119.75525000000002 L 315.58746736292 106.51775000000004 L 316.3864229765 104.31150000000002 L 317.18537859008 98.75174999999999 L 317.98433420366 101.13450000000003 L 318.78328981723 101.48750000000001 L 319.58224543081 98.487 L 320.38120104439 99.10475 L 321.18015665796 97.69275000000002 L 321.97911227154 105.63525000000001 L 322.77806788512 96.01600000000002 L 323.57702349869 90.80925000000002 L 324.37597911227 91.07400000000001 L 325.17493472585 93.01550000000003 L 325.97389033942 107.66500000000005 L 326.772845953 110.136 L 327.57180156658 109.25350000000003 L 328.37075718016 103.34075000000001 L 329.16971279373 112.34224999999998 L 329.96866840731 109.95950000000002 L 330.76762402089 111.54800000000003 L 331.56657963447 120.10825000000003 L 332.36553524804 137.93475000000004 L 333.16449086162 145.17125000000004 L 333.9634464752 138.55250000000004 L 334.76240208877 136.69925000000003 L 335.56135770235 132.63975000000002 L 336.36031331593 131.05125000000004 L 337.1592689295 128.49200000000005 L 337.95822454308 129.63925 L 338.75718015666 129.99224999999998 L 339.55613577023 127.786 L 340.35509138381 115.51925000000006 L 341.15404699739 115.60750000000004 L 341.95300261097 119.40225000000004 L 342.75195822454 89.04425000000003 L 343.55091383812 101.48750000000001 L 344.3498694517 98.31050000000002 L 345.14882506527 90.63275000000004 L 345.94778067885 82.69024999999999 L 346.74673629243 80.39575000000002 L 347.54569190601 68.30550000000005 L 348.34464751958 81.71949999999998 L 349.14360313316 87.45574999999997 L 349.94255874674 87.3675 L 350.74151436031 91.69175000000001 L 351.54046997389 91.33875000000006 L 352.33942558747 83.39625000000007 L 353.13838120104 79.33675000000005 L 353.93733681462 85.60250000000002 L 354.7362924282 82.07249999999999 L 355.53524804177 87.0145 L 356.33420365535 91.33875000000006 L 357.13315926893 88.42650000000003 L 357.93211488251 88.25 L 358.73107049608 73.15925000000004 L 359.53002610966 73.86525 L 360.32898172324 72.45325000000003 L 361.12793733681 69.36450000000002 L 361.92689295039 70.95300000000003 L 362.72584856397 63.981250000000045 L 363.52480417755 69.62925000000001 L 364.32375979112 62.30450000000002 L 365.1227154047 62.12800000000004 L 365.92167101828 78.10125000000005 L 366.72062663185 70.15875000000005 L 367.51958224543 56.48000000000002 L 368.31853785901 45.09575000000001 L 369.11749347258 54.09725000000003 L 369.91644908616 61.775000000000034 L 370.71540469974 63.981250000000045 L 371.51436031332 62.039750000000026 L 372.31331592689 61.5985 L 373.11227154047 64.86375000000004 L 373.91122715405 52.86174999999997 L 374.71018276762 56.39175 L 375.5091383812 58.509750000000054 L 376.30809399478 53.74425000000008 L 377.10704960836 55.950500000000034 L 377.90600522193 54.979750000000024 L 378.70496083551 55.68575000000004 L 379.50391644909 43.595500000000015 L 380.30287206266 53.92075 L 381.10182767624 61.15725000000003 L 381.90078328982 55.774 L 382.69973890339 81.27825000000001 L 383.49869451697 68.57025000000004 L 384.29765013055 44.125 L 385.09660574412 49.24349999999998 L 385.8955613577 53.303 L 386.69451697128 59.56875000000002 L 387.49347258486 63.54000000000002 L 388.29242819843 64.33425 L 389.09138381201 62.039750000000026 L 389.89033942559 57.27425000000005 L 390.68929503916 66.27575000000002 L 391.48825065274 53.12650000000008 L 392.28720626632 50.03775000000002 L 393.0861618799 49.15524999999997 L 393.88511749347 58.42149999999998 L 394.68407310705 50.743750000000034 L 395.48302872063 54.71500000000003 L 396.2819843342 58.42149999999998 L 397.08093994778 54.5385 L 397.87989556136 52.24400000000003 L 398.67885117493 50.12600000000009 L 399.47780678851 55.06800000000004 L 400.27676240209 56.56824999999998 L 401.07571801567 56.56824999999998 L 401.87467362924 52.3322500000001 L 402.67362924282 64.24600000000004 L 403.4725848564 83.39625000000007 L 404.27154046997 71.83550000000002 L 405.07049608355 59.03924999999998 L 405.86945169713 55.244500000000016 L 406.66840731071 64.24600000000004 L 407.46736292428 78.63074999999998 L 408.26631853786 81.10174999999998 L 409.06527415144 73.86525 L 409.86422976501 71.30599999999998 L 410.66318537859 69.27625000000006 L 411.46214099217 67.24650000000003 L 412.26109660574 76.15975000000003 L 413.06005221932 90.80925000000002 L 413.8590078329 94.69225 L 414.65796344647 90.89749999999998 L 415.45691906005 100.16375000000002 L 416.25587467363 100.16375000000002 L 417.05483028721 111.19500000000002 L 417.85378590078 113.04825000000005 L 418.65274151436 105.63525000000001 L 419.45169712794 108.98875000000004 L 420.25065274151 100.69324999999998 L 421.04960835509 83.661 L 421.84856396867 81.63125000000002 L 422.64751958225 98.66350000000003 L 423.44647519582 103.34075000000001 L 424.2454308094 93.45675000000006 L 425.04438642298 86.74975 L 425.84334203655 74.39475000000004 L 426.64229765013 76.68925000000002 L 427.44125326371 94.60399999999998 L 428.24020887728 92.48599999999999 L 429.03916449086 83.661 L 429.83812010444 104.84100000000004 L 430.63707571802 104.57625000000004 L 431.43603133159 113.8425 L 432.23498694517 129.904 L 433.03394255875 123.90300000000002 L 433.83289817232 103.60550000000003 L 434.6318537859 99.10475 L 435.43080939948 94.33924999999999 L 436.22976501305 99.28125000000003 L 437.02872062663 91.95650000000006 L 437.82767624021 82.95499999999998 L 438.62663185379 76.07150000000001 L 439.42558746736 78.01300000000003 L 440.22454308094 75.89500000000004 L 441.02349869452 86.04375000000005 L 441.82245430809 105.01750000000001 L 442.62140992167 123.72650000000004 L 443.42036553525 163.79200000000003 L 444.21932114882 176.76475000000002 L 445.0182767624 191.59075 L 445.81723237598 207.29925000000003 L 446.61618798956 203.06324999999998 L 447.41514360313 200.59224999999998 L 448.21409921671 196.17974999999998 L 449.01305483029 209.59375 L 449.81201044386 206.858 L 450.61096605744 213.38850000000002 L 451.40992167102 222.12525000000002 L 452.2088772846 214.18275000000003 L 453.00783289817 220.00725 L 453.80678851175 210.65275 L 454.60574412533 211.8 L 455.4046997389 204.21050000000002 L 456.20365535248 191.85550000000003 L 457.00261096606 194.50300000000001 L 457.80156657963 186.384 L 458.60052219321 180.11825 L 459.39947780679 196.88575000000003 L 460.19843342037 200.504 L 460.99738903394 212.24124999999998 L 461.79634464752 221.24275 L 462.5953002611 227.06725 L 463.39425587467 237.30425000000002 L 464.19321148825 218.33050000000003 L 464.99216710183 219.56600000000003 L 465.7911227154 219.83075 L 466.59007832898 219.30125 L 467.38903394256 223.09600000000003 L 468.18798955614 210.47625000000002 L 468.98694516971 207.12275 L 469.78590078329 204.38699999999997 L 470.58485639687 198.386 L 471.38381201044 195.3855 L 472.18276762402 188.59025 L 472.9817232376 201.65125000000003 L 473.78067885118 199.00375 L 474.57963446475 204.5635 L 475.37859007833 206.505 L 476.17754569191 204.47525000000002 L 476.97650130548 204.38699999999997 L 477.77545691906 204.38699999999997 L 478.57441253264 218.41875000000002 L 479.37336814621 217.80100000000002 L 480.17232375979 210.2115 L 480.97127937337 215.77125000000004 L 481.77023498695 214.4475 L 482.56919060052 214.00625000000002 L 483.3681462141 199.44500000000002 L 484.16710182768 197.15050000000005 L 484.96605744125 196.35625000000002 L 485.76501305483 201.73950000000002 L 486.56396866841 201.91600000000003 L 487.36292428198 218.94825000000003 L 488.16187989556 208.62300000000002 L 488.96083550914 211.62349999999998 L 489.75979112272 221.50750000000002 L 490.55874673629 213.30025000000003 L 491.35770234987 215.85950000000003 L 492.15665796345 215.06525 L 492.95561357702 210.65275 L 493.7545691906 212.06475000000003 L 494.55352480418 210.74100000000004 L 495.35248041775 211.53525 L 496.15143603133 208.0935 L 496.95039164491 206.68150000000003 L 497.74934725849 206.06375000000003 L 498.54830287206 212.85899999999998 L 499.34725848564 200.32750000000004 L 500.14621409922 206.94625000000005 L 500.94516971279 207.82874999999999 L 501.74412532637 216.65374999999997 L 502.54308093995 226.36124999999998 L 503.34203655352 219.12475 L 504.1409921671 218.59525000000005 L 504.93994778068 211.09400000000002 L 505.73890339426 212.77075 L 506.53785900783 211.88825 L 507.33681462141 208.71125 L 508.13577023499 207.29925000000003 L 508.93472584856 209.682 L 509.73368146214 218.6835 L 510.53263707572 210.5645 L 511.33159268929 219.83075 L 512.13054830287 224.77275 L 512.92950391645 221.24275 L 513.72845953003 222.39000000000004 L 514.5274151436 220.978 L 515.32637075718 221.24275 L 516.12532637076 195.91500000000005 L 516.92428198433 199.97449999999998 L 517.72323759791 203.06324999999998 L 518.52219321149 198.82725000000002 L 519.32114882507 195.91500000000005 L 520.12010443864 196.70925 L 520.91906005222 202.53375000000003 L 521.7180156658 203.15150000000003 L 522.51697127937 197.15050000000005 L 523.31592689295 190.17874999999998 L 524.11488250653 193.2675 L 524.9138381201 195.03250000000003 L 525.71279373368 192.9145 L 526.51174934726 189.64925000000002 L 527.31070496084 188.32550000000003 L 528.10966057441 189.29625000000004 L 528.90861618799 188.23725 L 529.70757180157 201.82774999999998 L 530.50652741514 192.9145 L 531.30548302872 192.47325000000004 L 532.1044386423 195.12075000000002 L 532.90339425588 198.82725000000002 L 533.70234986945 199.88625 L 534.50130548303 202.7985 L 535.30026109661 198.5625 L 536.09921671018 219.3895 L 536.89817232376 235.9805 L 537.69712793734 234.21550000000002 L 538.49608355091 233.8625 L 539.29503916449 243.0405 L 540.09399477807 217.35975000000002 L 540.89295039164 202.71025 L 541.69190600522 202.7985 L 542.4908616188 203.328 L 543.28981723238 218.33050000000003 L 544.08877284595 216.12425000000002 L 544.88772845953 213.65325 L 545.68668407311 215.33 L 546.48563968668 216.74200000000002 L 547.28459530026 226.0965 L 548.08355091384 243.21700000000004 L 548.88250652742 239.95175 L 549.68146214099 256.631 L 550.48041775457 248.07075 L 551.27937336815 236.77474999999998 L 552.07832898172 238.0985 L 552.8772845953 233.77425000000002 L 553.67624020888 231.47974999999997 L 554.47519582245 239.42225000000002 L 555.27415143603 242.42275 L 556.07310704961 241.09900000000002 L 556.87206266319 236.33350000000002 L 557.67101827676 246.30575 L 558.46997389034 251.68900000000002 L 559.26892950392 248.6885 L 560.06788511749 271.81 L 560.86684073107 260.95525 L 561.66579634465 275.8695 L 562.46475195823 281.25275 L 563.2637075718 286.54775 L 564.06266318538 280.98800000000006 L 564.86161879896 280.4585 L 565.66057441253 276.752 L 566.45953002611 274.89875 L 567.25848563969 273.575 L 568.05744125326 267.221 L 568.85639686684 265.01475000000005 L 569.65535248042 262.45550000000003 L 570.45430809399 267.83875 L 571.25326370757 267.66225 L 572.05221932115 266.42674999999997 L 572.85117493473 261.66125 L 573.6501305483 259.6315 L 574.44908616188 261.926 L 575.24804177546 264.66175000000004 L 576.04699738903 262.632 L 576.84595300261 269.42725 L 577.64490861619 276.57550000000003 L 578.44386422977 276.57550000000003 L 579.24281984334 270.9275 L 580.04177545692 266.86800000000005 L 580.8407310705 260.867 L 581.63968668407 252.48325 L 582.43864229765 243.57000000000002 L 583.23759791123 246.394 L 584.0365535248 248.86500000000004 L 584.83550913838 259.19025 L 585.63446475196 272.60425 L 586.43342036553 322.20074999999997 L 587.23237597911 319.46500000000003 L 588.03133159269 291.931 L 588.83028720627 293.96075 L 589.62924281984 293.96075 L 590.42819843342 298.54975 L 591.227154047 306.2275 L 592.02610966058 305.60975 L 592.82506527415 296.96125 L 593.62402088773 288.754 L 594.42297650131 299.34400000000005 L 595.22193211488 295.9905 L 596.02088772846 289.37175 L 596.81984334204 295.46099999999996 L 597.61879895561 294.755 L 598.41775456919 303.7565 L 599.21671018277 295.72575 L 600.01566579634 286.90075 L 600.81462140992 277.9875 L 601.6135770235 284.60625 L 602.41253263708 270.13325 L 603.21148825065 267.48575000000005 L 604.01044386423 259.102 L 604.80939947781 234.21550000000002 L 605.60835509138 218.94825000000003 L 606.40731070496 211.8 L 607.20626631854 220.80150000000003 L 608.00522193212 217.88925 L 608.80417754569 222.39000000000004 L 609.60313315927 234.83325000000002 L 610.40208877285 243.74649999999997 L 611.20104438642 246.83525 L 612 247.89425000000006 L 622 247.89425000000006"
                                          visibility="visible" data-z-index="2" class="highcharts-tracker-line"
                                          stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)"
                                          stroke-width="22"></path>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0  highcharts-tracker"
                                   transform="translate(10,10) scale(1 1)"></g>
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-1 highcharts-line-series highcharts-color-1 "
                                   transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-u513sl5-770-)">
                                    <path fill="none"
                                          d="M 178.96605744125 254.3365 L 187.7545691906 253.71875 L 445.0182767624 191.59075 L 453.80678851175 210.65275 L 549.68146214099 256.631 L 588.03133159269 291.931"
                                          class="highcharts-graph" data-z-index="1" stroke-linejoin="round"
                                          stroke-linecap="round"></path>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-color-1 "
                                   transform="translate(10,10) scale(1 1)">
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="178" y="254.3365" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="187" y="253.71875" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="445" y="191.59075" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="453" y="210.65275" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="549" y="256.631" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="588" y="291.931" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-2 highcharts-line-series highcharts-color-2 "
                                   transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-u513sl5-770-)">
                                    <path fill="none"
                                          d="M 23.968668407311 216.30075 L 25.566579634465 209.77025000000003 L 27.963446475196 230.59725000000003 L 40.746736292429 219.30125 L 75.10182767624 154.261 L 79.895561357702 145.34775000000002 L 88.684073107049 132.63975000000002 L 163.78590078329 208.137625 L 379.50391644909 43.595500000000015"
                                          class="highcharts-graph" data-z-index="1" stroke-linejoin="round"
                                          stroke-linecap="round"></path>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-2 highcharts-line-series highcharts-color-2 "
                                   transform="translate(10,10) scale(1 1)">
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="23" y="216.30075" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="25" y="209.77025000000003" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="27" y="230.59725000000003" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="40" y="219.30125" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="75" y="154.261" width="13" transform="translate(-6.5,-6.5)" height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="79" y="145.34775000000002" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="88" y="132.63975000000002" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="163" y="208.137625" width="13" transform="translate(-6.5,-6.5)"
                                           height="13"
                                           stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="379" y="43.595500000000015" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-3 highcharts-line-series highcharts-color-3 "
                                   transform="translate(10,10) scale(1 1)"
                                   clip-path="url(#highcharts-u513sl5-770-)"></g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-3 highcharts-line-series highcharts-color-3 "
                                   transform="translate(10,10) scale(1 1)"></g>
                            </g>
                            <g class="highcharts-exporting-group" data-z-index="3">
                                <g class="highcharts-button highcharts-contextbutton" stroke-linecap="round"
                                   transform="translate(626,10)"><title>Chart context menu</title>
                                    <rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24"
                                          height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect>
                                    <path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                          class="highcharts-button-symbol" data-z-index="1" stroke="#666666"
                                          stroke-width="3"></path>
                                    <text x="0" data-z-index="1"
                                          style="font-weight:normal;color:#333333;cursor:pointer;fill:#333333;"
                                          y="12"></text>
                                </g>
                            </g>
                            <text x="330" text-anchor="middle" class="highcharts-title" data-z-index="4"
                                  style="color:#333333;font-size:16px;fill:#333333;" y="22"></text>
                            <text x="330" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                                  style="color:#666666;fill:#666666;" y="24"></text>
                            <text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4"
                                  style="color:#666666;fill:#666666;" y="397"></text>
                            <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7">
                                <text x="65.394255874674"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Jan '17</tspan>
                                </text>
                                <text x="133.83812010444"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>May '17</tspan>
                                </text>
                                <text x="204.94516971279"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Sep '17</tspan>
                                </text>
                                <text x="273.38903394256"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Jan '18</tspan>
                                </text>
                                <text x="341.56657963447"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>May '18</tspan>
                                </text>
                                <text x="410.47650130548"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Sep '18</tspan>
                                </text>
                                <text x="476.59007832898"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Jan '19</tspan>
                                </text>
                                <text x="542.90339425588"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>May '19</tspan>
                                </text>
                                <text x="611.21409921671"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Sep '19</tspan>
                                </text>
                            </g>
                            <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7">
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="361" opacity="1">30
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="317" opacity="1">35
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="273" opacity="1">40
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="229" opacity="1">45
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="185" opacity="1">50
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="140" opacity="1">55
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="96" opacity="1">60
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="52" opacity="1">65
                                </text>
                                <text x="0" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="-9999">70
                                </text>
                            </g>
                            <text x="650" class="highcharts-credits" text-anchor="end" data-z-index="8"
                                  style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">
                                Highcharts.com
                            </text>
                        </svg>
                    </div>
                </div>
                <script>
                    $.getJSON('https://alpha.smartinsider.com/app/bulletintool/chartjson?SignalID=44851&sCompanyID=83127', function (data) {
                        // Create the chart

                        var chart = Highcharts.stockChart('83127', {

                            rangeSelector: {
                                enabled: false
                            },
                            chart: {
                                zoomType: 'x'
                            },
                            legend: {
                                enabled: false,
                                align: 'left',
                                verticalAlign: 'top'
                            },
                            yAxis: {
                                title: {
                                    text: 'Stock Price'
                                }
                            },
                            xAxis: {
                                plotBands: data.plot_bands,
                                type: 'datetime'
                            },
                            navigator: {
                                enabled: false
                            },
                            scrollbar: {
                                enabled: false
                            },
                            series: [
                                {
                                    name: `Energizer Holdings Inc`,
                                    data: data.data_chart,
                                    showInLegend: true,
                                    tooltip: {
                                        valueDecimals: 2
                                    }
                                },
                                {
                                    name: 'Buy',
                                    marker: {
                                        enabled: true,
                                        symbol: "url(data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E)",
                                        width: 13,
                                        height: 13,
                                        //symbol:'url(https://alpha.smartinsider.com/img/highcharts/buy.png)',
                                        fillColor: 'transparent',
                                        lineWidth: 2,
                                        radius: 4,
                                        lineColor: 'red' // inherit from series
                                    },
                                    lineWidth: 0,
                                    data: data.data_flag1,
                                    showInLegend: true,
                                    enableMouseTracking: false,
                                    states: {
                                        hover: {
                                            enabled: false
                                        }
                                    }
                                },
                                {
                                    name: 'Sell',
                                    marker: {
                                        enabled: true,
                                        symbol: "url(data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E)",
                                        width: 13,
                                        height: 13,
                                        //symbol:'url(https://alpha.smartinsider.com/img/highcharts/sell.png)',
                                        fillColor: 'transparent',
                                        lineWidth: 2,
                                        radius: 4,
                                        lineColor: 'red' // inherit from series
                                    },
                                    lineWidth: 0,
                                    data: data.data_flag2,
                                    showInLegend: true,
                                    enableMouseTracking: false,
                                    states: {
                                        hover: {
                                            enabled: false
                                        }
                                    }
                                },
                                {
                                    name: 'Cluster Trade',
                                    marker: {
                                        enabled: true,
                                        symbol: "url(data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-users fa-w-20' aria-hidden='true' data-prefix='fas' data-icon='users' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(120,120,120)' d='M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z'%3E%3C/path%3E%3C/svg%3E)",
                                        width: 13,
                                        height: 13,
                                        //symbol:'url(https://alpha.smartinsider.com/img/members/clustertrade_small.png)',
                                        fillColor: 'transparent',
                                        lineWidth: 2,
                                        radius: 4,
                                        lineColor: 'red' // inherit from series
                                    },
                                    lineWidth: 0,
                                    data: data.data_flag3,
                                    showInLegend: true,
                                    enableMouseTracking: false,
                                    states: {
                                        hover: {
                                            enabled: false
                                        }
                                    }
                                }
                            ]
                        });

                    });
                </script>
            </td>
        </tr>
        <tr>
            <td style="font-size:11px;font-family:Arial;color:#807f7f;padding-bottom:10px;text-align:right;">Three year
                chart showing trades by the Insiders stated above. <a style="text-decoration:none;color:#058dc7;"
                                                                      href="https://alpha.smartinsider.com/app/members/company?c=83127"
                                                                      target="_blank">Click Here for more</a></td>
        </tr>
        <tr>
            <td colspan="2">
                <table style="" width="100%" role="presentation" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr style="background-color:#A7ACAC;">
                        <td style="padding-left:10px;" width="34">
                            <img title="United States" src="https://alpha.smartinsider.com/img/flgs/flgs/us.png"
                                 width="27">
                        </td>
                        <td width="360"><a title="Williams Companies Inc"
                                           href="https://alpha.smartinsider.com/app/members/company?c=26092"
                                           target="_blank"
                                           style="font-family:Arial;   text-align:left; font-size:24px; color:#FFFFFF; text-decoration:none;">Williams
                                Companies..</a></td>
                        <td style="font-family:Arial; font-size:17px; color:#FFFFFF;" width="204"><b>Ranked <span
                                        style="color:#abff2e;">+N</span></b></td>
                        <td style="line-height: 18px; font-family:Arial; font-size:14px; color:#FFFFFF; padding-right:10px;"
                            width="230" align="right"><img
                                    src="https://alpha.smartinsider.com/img/White_Sectors/601010.png"
                                    style="padding-left:5px;" width="36" align="right">
                            <a title="Williams Companies Inc"
                               href="https://alpha.smartinsider.com/app/members/company?c=26092" target="_blank"
                               style="font-family:Arial;color:#FFFFFF; text-decoration:none;">WMB</a> US<br>
                            <span title="Energy">Energy</span><br><span style="font-family:Helvetica; font-size:12px;">Mkt Cap: </span>$29.9
                            Billion
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom:10px;font-family:Arial;">The company reported 2Q earnings on July 31,
                and
                between August 5-7, three large purchases have surfaced around $23.50 per share. John Chandler (CFO,
                2017),
                Alan Armstrong (CEO, 2011) and Stephen Chazen (Director, 2016) each purchased 10,000 shares, spending
                $235,000. The CEO last purchased stock in 2017, and the CFO's last purchase was in November 2018. The
                stock
                has traded in a narrow range over the past two years yet has recently dropped to the lower part of that
                range. This is a solid cluster of buying, however, it does look orchestrated. We are ranking the stock
                +N.
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom:10px;font-family:Arial;">
                <table class="display coco corina"
                       style="border-collapse: collapse !important;font-size: 13px;font-family: Arial, Helvetica, sans-serif;color:#555;border:none;border-collapse:collapse !important;"
                       id="example" width="660" role="presentation" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr id="group-heading">
                        <th colspan="2" style="border-top: 4px solid #00adf1;border-bottom: 2px solid #00adf1;"
                            rowspan="2"
                            id="group-insider"><span>Insider</span></th>
                        <th colspan="5" style="border-top: 4px solid #00adf1;border-bottom: 2px solid #00adf1;"
                            rowspan="2"
                            id="group-tdetails"><span>Transaction Details</span></th>
                        <th colspan="3" style="border-top: 4px solid #00adf1;" id="group-holding"><span>Holding</span>
                        </th>
                    </tr>
                    <tr id="lower-head">
                        <th class="holding visibled holding-header group-holding"
                            style="border-right:none;border-bottom: 2px solid #00adf1;"
                            title="After transactions reported today">Amount
                        </th>
                        <th id="holding_change" class="holding_change visibled group-holding"
                            style="border-right:none;border-bottom: 2px solid #00adf1;" title="After this transaction">
                            <center>Change</center>
                        </th>
                        <th title="% of Shares on Issue held, not displayed below 0.1%"
                            style="border-right:none;border-bottom: 2px solid #00adf1;" id="sii-col"
                            class="sii-col visibled group-holding">%Sii
                        </th>
                    </tr>
                    </thead>
                    <tbody style="text-align:center;">
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=100065"
                                    style="color: #00adf1 !important;" title="Stephen Chazen"
                                    class="persontooltip personname" id="100065">&nbsp;Stephen Chazen</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">N</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">05-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">10,000 @ $23.93</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8232584"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$239,300</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">55,730</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">22%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.00%</td>

                    </tr>
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=108556"
                                    style="color: #00adf1 !important;" title="John Chandler"
                                    class="persontooltip personname" id="108556">&nbsp;John Chandler</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">P:CFO</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">07-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">10,000 @ $23.23</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8232699"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$232,396</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">83,052</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">14%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.01%</td>

                    </tr>
                    <tr class="" style="font-family: Arial, Helvetica, sans-serif">
                        <td class="" style="text-align:left;padding: 3px 2px;height: 36px;"><a
                                    href="https://alpha.smartinsider.com/app/members/person?p=114719"
                                    style="color: #00adf1 !important;" title="Alan Armstrong"
                                    class="persontooltip personname" id="114719">&nbsp;Alan Armstrong</a></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">E:CEO</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">07-Aug-19</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><span class="buysell-span buy_type"><b
                                        title="BUY" style="display:inline;">BUY</b><img
                                        src="https://alpha.smartinsider.com/img/members/arrow_top.png" title="BUY"
                                        style="float:left;position:relative;bottom:1px;"></span></td>
                        <td class="" style="padding: 3px 2px;height: 36px;">10,000 @ $23.46</td>
                        <td class="" style="padding: 3px 2px;height: 36px;"><a target="blank"
                                                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233814"
                                                                               class=""><img
                                        style="width: 16px !important;"
                                        src="https://alpha.smartinsider.com/members/images/download-16.png"></a>
                        </td>
                        <td class="" style="padding: 3px 2px;height: 36px;">$234,652</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">738,461</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">1%</td>
                        <td class="" style="padding: 3px 2px;height: 36px;">0.06%</td>

                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom:10px;font-family:Arial;">
                <div id="26092" data-highcharts-chart="1" style="overflow: hidden;">
                    <div id="highcharts-u513sl5-786"
                         style="position: relative; overflow: hidden; width: 660px; height: 400px; text-align: left; line-height: normal; z-index: 0; left: 0.5px; top: 0px;"
                         dir="ltr" class="highcharts-container ">
                        <svg version="1.1" class="highcharts-root"
                             style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                             xmlns="http://www.w3.org/2000/svg" width="660" height="400" viewBox="0 0 660 400">
                            <desc>Created with Highcharts 7.2.0</desc>
                            <defs>
                                <clipPath id="highcharts-u513sl5-787-">
                                    <rect x="0" y="0" width="612" height="353" fill="none"></rect>
                                </clipPath>
                                <clipPath id="highcharts-u513sl5-1555-">
                                    <rect x="0" y="0" width="612" height="353" fill="none"></rect>
                                </clipPath>
                            </defs>
                            <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="660" height="400"
                                  rx="0"
                                  ry="0"></rect>
                            <rect fill="none" class="highcharts-plot-background" x="10" y="10" width="612"
                                  height="353"></rect>
                            <g class="highcharts-plot-bands-0" data-z-index="0">
                                <path fill="#BECC9F" class="highcharts-plot-band "
                                      d="M 164.5 10 L 164.5 363 277.5 363 277.5 10 z"></path>
                                <path fill="#BECC9F" class="highcharts-plot-band "
                                      d="M 448.5 10 L 448.5 363 561.5 363 561.5 10 z"></path>
                                <path fill="#EBFAC7" class="highcharts-plot-band "
                                      d="M 599.5 10 L 599.5 363 621.5 363 621.5 10 z"></path>
                            </g>
                            <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                                <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 64.5 10 L 64.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 133.5 10 L 133.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 204.5 10 L 204.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 273.5 10 L 273.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 341.5 10 L 341.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 410.5 10 L 410.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 475.5 10 L 475.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 542.5 10 L 542.5 363"
                                      opacity="1"></path>
                                <path fill="none" data-z-index="1" class="highcharts-grid-line"
                                      d="M 610.5 10 L 610.5 363"
                                      opacity="1"></path>
                            </g>
                            <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 363.5 L 622 363.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 313.5 L 622 313.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 262.5 L 622 262.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 212.5 L 622 212.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 161.5 L 622 161.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 111.5 L 622 111.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 60.5 L 622 60.5" opacity="1"></path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1"
                                      class="highcharts-grid-line" d="M 10 9.5 L 622 9.5" opacity="1"></path>
                            </g>
                            <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="10" y="10" width="612"
                                  height="353"></rect>
                            <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 64.5 363 L 64.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 133.5 363 L 133.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 204.5 363 L 204.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 273.5 363 L 273.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 341.5 363 L 341.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 410.5 363 L 410.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 475.5 363 L 475.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 542.5 363 L 542.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1"
                                      d="M 610.5 363 L 610.5 373" opacity="1"></path>
                                <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                      data-z-index="7" d="M 10 363.5 L 622 363.5"></path>
                            </g>
                            <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
                                <text x="634" data-z-index="7" text-anchor="middle"
                                      transform="translate(0,0) rotate(90 634 186.5)" class="highcharts-axis-title"
                                      style="color:#666666;fill:#666666;" y="186.5">
                                    <tspan>Stock Price</tspan>
                                </text>
                                <path fill="none" class="highcharts-axis-line" data-z-index="7"
                                      d="M 622 10 L 622 363"></path>
                            </g>
                            <g class="highcharts-series-group" data-z-index="3">
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-0 highcharts-line-series highcharts-color-0 "
                                   transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-u513sl5-1555-)">
                                    <path fill="none"
                                          d="M 0 93.39371428571428 L 0.80000000000075 87.74571428571431 L 1.5999999999999 80.73614285714291 L 2.4000000000007 93.19200000000001 L 3.1999999999998 82.70285714285717 L 4.0000000000006 88.14914285714286 L 4.7999999999997 96.41942857142863 L 5.6000000000005 89.96457142857145 L 6.3999999999996 90.368 L 7.2000000000004 93.19200000000001 L 7.9999999999995 89.5611428571429 L 8.8000000000003 94.80571428571426 L 9.5999999999994 102.87428571428575 L 10.4 111.95142857142858 L 11.199999999999 118.20457142857143 L 12 119.61657142857143 L 12.799999999999 116.38914285714284 L 13.6 99.64685714285719 L 14.400000000001 97.42799999999997 L 15.2 96.2177142857143 L 16.000000000001 100.05028571428574 L 16.8 117.3977142857143 L 17.600000000001 109.73257142857148 L 18.4 113.96857142857141 L 19.2 107.51371428571426 L 20 116.99428571428572 L 20.8 129.70228571428572 L 21.6 138.77942857142855 L 22.4 132.3245714285714 L 23.199999999999 129.29885714285714 L 24 116.0865714285714 L 24.799999999999 103.88285714285712 L 25.6 86.73714285714289 L 26.399999999999 87.94742857142859 L 27.2 98.83999999999997 L 28.000000000001 98.23485714285718 L 28.8 81.29085714285719 L 29.600000000001 94.80571428571426 L 30.4 97.02457142857142 L 31.200000000001 97.8314285714286 L 32 90.56971428571427 L 32.8 87.94742857142859 L 33.6 88.55257142857147 L 34.4 88.35085714285714 L 35.2 99.24342857142861 L 36 116.38914285714284 L 36.799999999999 122.64228571428569 L 37.6 86.9388571428571 L 38.399999999999 101.05885714285719 L 39.2 84.1148571428572 L 39.999999999999 72.21371428571427 L 40.8 72.012 L 41.600000000001 68.58285714285711 L 42.4 79.47542857142861 L 43.200000000001 97.6297142857143 L 44 102.26914285714287 L 44.800000000001 93.19200000000001 L 45.6 115.9857142857143 L 46.4 118.00285714285718 L 47.2 97.02457142857142 L 48 85.52685714285712 L 48.8 93.79714285714283 L 49.6 87.94742857142859 L 50.399999999999 95.00742857142859 L 51.2 69.79314285714287 L 51.999999999999 69.38971428571432 L 52.8 64.34685714285717 L 53.599999999999 79.87885714285716 L 54.4 80.2822857142857 L 55.200000000001 77.66000000000003 L 56 77.8617142857143 L 56.800000000001 71.60857142857145 L 57.6 73.42400000000004 L 58.400000000001 65.96057142857143 L 59.2 52.0422857142857 L 60 62.53142857142859 L 60.8 130.71085714285715 L 61.6 125.26457142857146 L 62.4 126.67657142857146 L 63.2 129.90400000000002 L 63.999999999999 129.90400000000002 L 64.8 131.7194285714286 L 65.599999999999 138.17428571428576 L 66.4 131.92114285714285 L 67.199999999999 139.38457142857143 L 68 137.36742857142855 L 68.800000000001 131.11428571428573 L 69.6 126.07142857142858 L 70.400000000001 121.83542857142857 L 71.2 131.7194285714286 L 72.000000000001 141.20000000000002 L 72.8 134.3417142857143 L 73.6 133.53485714285716 L 74.4 128.49200000000002 L 75.2 122.64228571428569 L 76 117.80114285714285 L 76.8 121.83542857142857 L 77.599999999999 135.35028571428575 L 78.4 127.28171428571426 L 79.199999999999 132.3245714285714 L 80 127.08000000000001 L 80.799999999999 122.03714285714287 L 81.6 122.03714285714287 L 82.400000000001 136.15714285714287 L 83.2 139.18285714285713 L 84.000000000001 137.1657142857143 L 84.8 122.23885714285711 L 85.600000000001 141.20000000000002 L 86.4 136.56057142857142 L 87.2 142.4102857142857 L 88 137.97257142857143 L 88.8 134.74514285714287 L 89.6 125.26457142857146 L 90.4 120.01999999999998 L 91.199999999999 110.13600000000002 L 92 103.88285714285712 L 92.799999999999 113.16171428571428 L 93.6 130.10571428571427 L 94.399999999999 123.85257142857145 L 95.2 121.43199999999999 L 96.000000000001 126.27314285714289 L 96.8 138.98114285714288 L 97.600000000001 124.256 L 98.4 128.08857142857147 L 99.200000000001 129.70228571428572 L 100 125.06285714285713 L 100.8 133.93828571428574 L 101.6 131.92114285714285 L 102.4 133.13142857142861 L 103.2 127.48342857142859 L 104 128.08857142857147 L 104.8 130.50914285714285 L 105.6 114.37200000000004 L 106.4 119.61657142857143 L 107.2 107.71542857142859 L 108 104.08457142857145 L 108.8 102.87428571428575 L 109.6 107.91714285714289 L 110.4 95.81428571428575 L 111.2 93.99885714285716 L 112 90.26714285714291 L 112.8 93.6962857142857 L 113.6 93.19200000000001 L 114.4 99.84857142857143 L 115.2 99.64685714285719 L 116 97.22628571428572 L 116.8 92.48600000000005 L 117.6 96.2177142857143 L 118.4 95.51171428571428 L 119.2 100.45371428571431 L 120 101.26057142857144 L 120.8 84.51828571428575 L 121.6 85.32514285714285 L 122.4 85.72857142857146 L 123.2 88.55257142857147 L 124 84.71999999999997 L 124.8 93.99885714285716 L 125.6 86.73714285714289 L 126.4 110.13600000000002 L 127.2 95.61257142857141 L 128 88.25 L 128.8 99.64685714285719 L 129.6 85.32514285714285 L 130.4 95.41085714285714 L 131.2 94.50314285714285 L 132 85.32514285714285 L 132.8 88.55257142857147 L 133.6 98.83999999999997 L 134.4 103.076 L 135.2 96.62114285714284 L 136 96.01600000000002 L 136.8 90.7714285714286 L 137.6 95.00742857142859 L 138.4 103.47942857142857 L 139.2 107.31200000000001 L 140 107.11028571428571 L 140.8 127.28171428571426 L 141.6 129.29885714285714 L 142.4 124.86114285714288 L 143.2 123.65085714285712 L 144 121.12942857142855 L 144.8 115.9857142857143 L 145.6 126.47485714285713 L 146.4 122.44057142857145 L 147.2 113.36342857142859 L 148 111.74971428571428 L 148.8 109.53085714285714 L 149.6 125.36542857142857 L 150.4 135.14857142857142 L 151.2 118.40628571428573 L 152 123.24742857142857 L 152.8 132.52628571428573 L 153.6 144.02400000000003 L 154.4 137.77085714285712 L 155.2 126.07142857142858 L 156 121.63371428571432 L 156.8 117.3977142857143 L 157.6 105.6982857142857 L 158.4 104.89142857142858 L 159.2 95.20914285714287 L 160 84.31657142857142 L 160.8 84.1148571428572 L 161.6 93.79714285714283 L 162.4 91.37657142857148 L 163.2 92.58685714285713 L 164 91.78000000000003 L 164.8 91.98171428571425 L 165.6 84.71999999999997 L 166.4 77.4582857142857 L 167.2 71.81028571428567 L 168 71.81028571428567 L 168.8 77.66000000000003 L 169.6 75.64285714285717 L 170.4 71.60857142857145 L 171.2 72.012 L 172 66.96914285714286 L 172.8 68.48200000000003 L 173.6 68.38114285714289 L 174.4 61.119428571428614 L 175.2 60.514285714285734 L 176 64.952 L 176.8 66.36399999999998 L 177.6 69.5914285714286 L 178.4 79.27371428571428 L 179.2 81.49257142857141 L 180 79.9797142857143 L 180.8 90.97314285714288 L 181.6 88.55257142857147 L 182.4 100.25199999999998 L 183.2 99.44514285714286 L 184 98.63828571428573 L 184.8 101.05885714285719 L 185.6 108.52228571428572 L 186.4 119.41485714285719 L 187.2 119.61657142857143 L 188 120.82685714285711 L 188.8 110.94285714285715 L 189.6 111.14457142857148 L 190.4 111.54800000000003 L 191.2 113.16171428571428 L 192 117.90199999999999 L 192.8 117.3977142857143 L 193.6 118.60799999999998 L 194.4 106.50514285714289 L 195.2 99.64685714285719 L 196 99.64685714285719 L 196.8 97.8314285714286 L 197.6 98.73914285714287 L 198.4 104.488 L 199.2 106.90857142857146 L 200 95.81428571428575 L 200.8 96.62114285714284 L 201.6 92.58685714285713 L 202.4 92.38514285714285 L 203.2 95.00742857142859 L 204 89.15771428571435 L 204.8 90.7714285714286 L 205.6 93.19200000000001 L 206.4 100.85714285714286 L 207.2 101.05885714285719 L 208 89.15771428571435 L 208.8 96.01600000000002 L 209.6 101.26057142857144 L 210.4 100.85714285714286 L 211.2 100.85714285714286 L 212 99.84857142857143 L 212.8 95.00742857142859 L 213.6 100.25199999999998 L 214.4 93.99885714285716 L 215.2 98.83999999999997 L 216 99.84857142857143 L 216.8 100.25199999999998 L 217.6 97.73057142857141 L 218.4 97.42799999999997 L 219.2 103.47942857142857 L 220 102.26914285714287 L 220.8 102.47085714285711 L 221.6 107.11028571428571 L 222.4 108.72400000000002 L 223.2 114.37200000000004 L 224 124.256 L 224.8 125.4662857142857 L 225.6 134.3417142857143 L 226.4 132.92971428571428 L 227.2 128.49200000000002 L 228 130.3074285714286 L 228.8 131.11428571428573 L 229.6 125.4662857142857 L 230.4 138.77942857142855 L 231.2 136.15714285714287 L 232 125.06285714285713 L 232.8 125.668 L 233.6 133.53485714285716 L 234.4 127.68514285714284 L 235.2 128.8954285714286 L 236 136.56057142857142 L 236.8 146.84800000000004 L 237.6 151.08399999999997 L 238.4 160.96800000000002 L 239.2 156.14702857142856 L 240 154.71485714285717 L 240.8 156.32857142857142 L 241.6 146.24285714285716 L 242.4 146.24285714285716 L 243.2 139.788 L 244 141.20000000000002 L 244.8 134.14 L 245.6 134.94685714285717 L 246.4 120.01999999999998 L 247.2 115.38057142857141 L 248 120.01999999999998 L 248.8 119.71742857142854 L 249.6 127.18085714285715 L 250.4 131.51771428571428 L 251.2 129.90400000000002 L 252 122.94485714285713 L 252.8 119.60648571428572 L 253.6 119.61657142857143 L 254.4 107.11028571428571 L 255.2 106.50514285714289 L 256 98.03314285714285 L 256.8 99.64685714285719 L 257.6 99.84857142857143 L 258.4 94.40228571428571 L 259.2 94.60400000000004 L 260 94.60400000000004 L 260.8 90.7714285714286 L 261.6 92.99028571428573 L 262.4 90.67057142857146 L 263.2 90.7714285714286 L 264 90.97314285714288 L 264.8 77.8617142857143 L 265.6 60.716000000000065 L 266.4 49.31914285714288 L 267.2 51.43714285714282 L 268 48.81485714285719 L 268.8 45.789142857142906 L 269.6 45.3857142857143 L 270.4 38.32571428571424 L 271.2 36.2077142857143 L 272 36.10685714285711 L 272.8 48.714 L 273.6 50.02514285714278 L 274.4 54.86628571428571 L 275.2 54.26114285714283 L 276 43.368571428571386 L 276.8 37.518857142857144 L 277.6 38.527428571428516 L 278.4 52.4457142857143 L 279.2 50.22685714285717 L 280 60.91771428571428 L 280.8 70.49914285714289 L 281.6 73.02057142857143 L 282.4 67.17085714285713 L 283.2 86.63628571428575 L 284 111.74971428571428 L 284.8 97.6297142857143 L 285.6 100.85714285714286 L 286.4 129.90400000000002 L 287.2 128.8954285714286 L 288 112.5565714285714 L 288.8 106.10171428571434 L 289.6 101.26057142857144 L 290.4 101.05885714285719 L 291.2 122.64228571428569 L 292 122.844 L 292.8 119.01142857142855 L 293.6 128.8954285714286 L 294.4 130.10571428571427 L 295.2 126.47485714285713 L 296 133.13142857142861 L 296.8 133.93828571428574 L 297.6 146.04114285714283 L 298.4 153.60542857142855 L 299.2 159.15257142857143 L 300 156.42942857142856 L 300.8 148.4617142857143 L 301.6 152.0925714285714 L 302.4 158.3457142857143 L 303.2 141.20000000000002 L 304 135.95542857142854 L 304.8 140.79657142857144 L 305.6 138.27514285714287 L 306.4 167.82628571428572 L 307.2 157.33714285714288 L 308 177.50857142857146 L 308.8 177.50857142857146 L 309.6 161.77485714285714 L 310.4 171.86057142857143 L 311.2 189.00628571428575 L 312 192.63714285714286 L 312.8 198.28514285714283 L 313.6 205.95028571428574 L 314.4 204.53828571428573 L 315.2 210.99314285714289 L 316 213.0102857142857 L 316.8 212.80857142857144 L 317.6 205.95028571428574 L 318.4 214.62400000000002 L 319.2 214.22057142857145 L 320 200.30228571428572 L 320.8 194.6542857142857 L 321.6 200.30228571428572 L 322.4 198.68857142857146 L 323.2 189.81314285714288 L 324 186.98914285714287 L 324.8 186.18228571428574 L 325.6 190.62 L 326.4 191.4268571428571 L 327.2 184.5685714285714 L 328 190.62 L 328.8 189.208 L 329.6 190.01485714285718 L 330.4 190.41828571428576 L 331.2 186.98914285714287 L 332 182.34971428571427 L 332.8 178.5171428571429 L 333.6 179.52571428571426 L 334.4 177.7102857142857 L 335.2 176.09657142857145 L 336 179.1222857142857 L 336.8 171.0537142857143 L 337.6 167.62457142857141 L 338.4 158.54742857142855 L 339.2 156.32857142857142 L 340 156.12685714285712 L 340.8 153.908 L 341.6 140.9982857142857 L 342.4 145.2342857142857 L 343.2 148.86514285714284 L 344 146.6462857142857 L 344.8 147.45314285714284 L 345.6 157.53885714285713 L 346.4 161.5731428571429 L 347.2 168.2297142857143 L 348 157.53885714285713 L 348.8 164.19542857142858 L 349.6 167.82628571428572 L 350.4 170.65028571428573 L 351.2 171.45714285714286 L 352 177.7102857142857 L 352.8 173.27257142857144 L 353.6 179.1222857142857 L 354.4 166.4142857142857 L 355.2 166.8177142857143 L 356 169.03657142857142 L 356.8 157.13542857142855 L 357.6 168.02799999999996 L 358.4 159.556 L 359.2 157.33714285714288 L 360 147.0497142857143 L 360.8 147.45314285714284 L 361.6 148.4617142857143 L 362.4 163.18685714285715 L 363.2 157.94228571428567 L 364 160.1611428571429 L 364.8 157.94228571428567 L 365.6 159.15257142857143 L 366.4 167.42285714285717 L 367.2 160.56457142857144 L 368 152.89942857142853 L 368.8 149.67200000000005 L 369.6 149.8737142857143 L 370.4 151.08399999999997 L 371.2 151.4874285714286 L 372 157.94228571428567 L 372.8 154.91657142857142 L 373.6 156.32857142857142 L 374.4 161.97657142857145 L 375.2 146.04114285714283 L 376 127.28171428571426 L 376.8 125.06285714285713 L 377.6 125.06285714285713 L 378.4 117.3977142857143 L 379.2 112.15314285714283 L 380 111.74971428571428 L 380.8 119.01142857142855 L 381.6 109.53085714285714 L 382.4 105.9 L 383.2 99.44514285714286 L 384 81.08914285714286 L 384.8 77.8617142857143 L 385.6 73.82742857142858 L 386.4 69.18799999999999 L 387.2 69.5914285714286 L 388 64.75028571428572 L 388.8 64.75028571428572 L 389.6 86.9388571428571 L 390.4 94.60400000000004 L 391.2 100.85714285714286 L 392 100.65542857142856 L 392.8 91.37657142857148 L 393.6 92.38514285714285 L 394.4 90.368 L 395.2 90.97314285714288 L 396 99.0417142857143 L 396.8 99.24342857142861 L 397.6 94.40228571428571 L 398.4 99.24342857142861 L 399.2 102.67257142857144 L 400 107.31200000000001 L 400.8 109.1274285714286 L 401.6 116.99428571428572 L 402.4 111.54800000000003 L 403.2 131.11428571428573 L 404 129.50057142857148 L 404.8 130.71085714285715 L 405.6 129.70228571428572 L 406.4 133.33314285714286 L 407.2 137.36742857142855 L 408 139.38457142857143 L 408.8 136.35885714285718 L 409.6 139.38457142857143 L 410.4 137.36742857142855 L 411.2 136.15714285714287 L 412 143.62057142857145 L 412.8 150.0754285714286 L 413.6 156.12685714285712 L 414.4 159.35428571428568 L 415.2 156.12685714285712 L 416 157.53885714285713 L 416.8 148.05828571428572 L 417.6 148.26000000000005 L 418.4 141.60342857142857 L 419.2 145.83942857142858 L 420 148.86514285714284 L 420.8 147.45314285714284 L 421.6 148.6634285714286 L 422.4 157.33714285714288 L 423.2 169.6417142857143 L 424 167.82628571428572 L 424.8 166.01085714285716 L 425.6 162.58171428571427 L 426.4 163.79200000000003 L 427.2 168.4314285714286 L 428 166.61600000000004 L 428.8 175.89485714285712 L 429.6 183.56000000000003 L 430.4 196.46971428571425 L 431.2 201.31085714285715 L 432 215.43085714285715 L 432.8 221.28057142857142 L 433.6 217.85142857142858 L 434.4 215.2291428571429 L 435.2 186.5857142857143 L 436 190.01485714285718 L 436.8 187.19085714285717 L 437.6 186.78742857142862 L 438.4 171.86057142857143 L 439.2 190.62 L 440 195.05771428571433 L 440.8 205.14342857142861 L 441.6 215.43085714285715 L 442.4 206.75714285714287 L 443.2 201.71428571428572 L 444 199.092 L 444.8 195.05771428571433 L 445.6 208.77428571428575 L 446.4 201.10914285714284 L 447.2 210.99314285714289 L 448 205.54685714285716 L 448.8 201.91600000000003 L 449.6 194.856 L 450.4 190.41828571428576 L 451.2 195.25942857142857 L 452 187.59428571428575 L 452.8 200.70571428571427 L 453.6 211.19485714285713 L 454.4 212.20342857142856 L 455.2 220.27200000000005 L 456 223.2977142857143 L 456.8 218.05314285714283 L 457.6 224.7097142857143 L 458.4 232.98000000000002 L 459.2 242.46057142857143 L 460 253.7565714285714 L 460.8 255.77371428571428 L 461.6 265.456 L 462.4 266.66628571428566 L 463.2 290.872 L 464 268.8851428571428 L 464.8 273.12114285714284 L 465.6 272.7177142857143 L 466.4 261.21999999999997 L 467.2 253.7565714285714 L 468 249.92400000000004 L 468.8 230.96285714285713 L 469.6 218.86000000000004 L 470.4 204.3365714285714 L 471.2 198.68857142857146 L 472 198.68857142857146 L 472.8 200.9074285714286 L 473.6 195.46114285714287 L 474.4 192.63714285714286 L 475.2 184.36685714285716 L 476 178.31542857142858 L 476.8 173.47428571428574 L 477.6 173.47428571428574 L 478.4 178.31542857142858 L 479.2 171.45714285714286 L 480 168.02799999999996 L 480.8 169.8434285714286 L 481.6 167.82628571428572 L 482.4 160.96800000000002 L 483.2 162.78342857142857 L 484 152.69771428571428 L 484.8 153.908 L 485.6 154.31142857142854 L 486.4 160.1611428571429 L 487.2 167.82628571428572 L 488 163.79200000000003 L 488.8 167.0194285714286 L 489.6 166.8177142857143 L 490.4 160.7662857142857 L 491.2 164.19542857142858 L 492 155.92514285714287 L 492.8 152.89942857142853 L 493.6 154.31142857142854 L 494.4 160.1611428571429 L 495.2 159.15257142857143 L 496 154.31142857142854 L 496.8 161.97657142857145 L 497.6 159.556 L 498.4 167.62457142857141 L 499.2 152.69771428571428 L 500 153.30285714285716 L 500.8 152.49599999999998 L 501.6 154.31142857142854 L 502.4 162.58171428571427 L 503.2 162.78342857142857 L 504 154.1097142857143 L 504.8 150.68057142857143 L 505.6 147.2514285714286 L 506.4 146.6462857142857 L 507.2 150.0754285714286 L 508 145.43600000000004 L 508.8 138.5777142857143 L 509.6 134.14 L 510.4 122.44057142857145 L 511.2 131.7194285714286 L 512 127.08000000000001 L 512.8 128.8954285714286 L 513.6 131.31600000000003 L 514.4 127.88685714285714 L 515.2 126.67657142857146 L 516 115.58228571428572 L 516.8 113.96857142857141 L 517.6 122.844 L 518.4 124.65942857142858 L 519.2 118.8097142857143 L 520 121.02857142857144 L 520.8 126.87828571428571 L 521.6 127.88685714285714 L 522.4 125.86971428571425 L 523.2 122.23885714285711 L 524 130.50914285714285 L 524.8 128.49200000000002 L 525.6 133.33314285714286 L 526.4 134.74514285714287 L 527.2 125.86971428571425 L 528 124.65942857142858 L 528.8 127.48342857142859 L 529.6 131.7194285714286 L 530.4 131.31600000000003 L 531.2 135.35028571428575 L 532 134.54342857142862 L 532.8 141.60342857142857 L 533.6 152.0925714285714 L 534.4 149.47028571428572 L 535.2 153.70628571428574 L 536 150.88228571428573 L 536.8 159.556 L 537.6 162.1782857142857 L 538.4 150.27714285714285 L 539.2 156.53028571428575 L 540 151.68914285714285 L 540.8 147.0497142857143 L 541.6 148.6634285714286 L 542.4 151.28571428571428 L 543.2 152.0925714285714 L 544 143.41885714285715 L 544.8 148.6634285714286 L 545.6 161.16971428571426 L 546.4 161.5731428571429 L 547.2 173.87771428571432 L 548 175.49142857142857 L 548.8 168.83485714285717 L 549.6 173.87771428571432 L 550.4 163.99371428571428 L 551.2 147.45314285714284 L 552 144.22571428571428 L 552.8 150.27714285714285 L 553.6 146.04114285714283 L 554.4 151.68914285714285 L 555.2 148.6634285714286 L 556 157.13542857142855 L 556.8 153.70628571428574 L 557.6 161.5731428571429 L 558.4 160.56457142857144 L 559.2 156.12685714285712 L 560 162.38000000000002 L 560.8 154.71485714285717 L 561.6 147.2514285714286 L 562.4 158.3457142857143 L 563.2 165.60742857142858 L 564 151.28571428571428 L 564.8 150.47885714285718 L 565.6 140.3931428571429 L 566.4 139.9897142857143 L 567.2 137.1657142857143 L 568 133.33314285714286 L 568.8 134.14 L 569.6 132.3245714285714 L 570.4 126.27314285714289 L 571.2 124.65942857142858 L 572 126.87828571428571 L 572.8 124.0542857142857 L 573.6 125.06285714285713 L 574.4 137.1657142857143 L 575.2 146.84800000000004 L 576 150.0754285714286 L 576.8 149.8737142857143 L 577.6 148.86514285714284 L 578.4 155.11828571428575 L 579.2 163.38857142857145 L 580 175.088 L 580.8 199.092 L 581.6 205.95028571428574 L 582.4 201.31085714285715 L 583.2 208.976 L 584 191.22514285714288 L 584.8 201.5125714285714 L 585.6 226.32342857142856 L 586.4 231.3662857142857 L 587.2 229.55085714285713 L 588 221.28057142857142 L 588.8 222.0874285714286 L 589.6 222.0874285714286 L 590.4 224.10457142857143 L 591.2 239.83828571428575 L 592 243.67085714285713 L 592.8 236.40914285714285 L 593.6 230.7611428571429 L 594.4 231.3662857142857 L 595.2 224.30628571428574 L 596 229.95428571428567 L 596.8 244.4777142857143 L 597.6 243.46914285714286 L 598.4 243.67085714285713 L 599.2 235.40057142857148 L 600 227.73542857142854 L 600.8 229.95428571428567 L 601.6 230.96285714285713 L 602.4 227.93714285714287 L 603.2 220.4737142857143 L 604 219.46514285714284 L 604.8 208.16914285714287 L 605.6 204.73999999999998 L 606.4 202.52114285714285 L 607.2 216.03600000000003 L 608 207.7657142857143 L 608.8 201.91600000000003 L 609.6 201.71428571428572 L 610.4 204.94171428571428 L 611.2 205.54685714285716 L 612 207.564"
                                          class="highcharts-graph" data-z-index="1" stroke="#7cb5ec" stroke-width="2"
                                          stroke-linejoin="round" stroke-linecap="round"></path>
                                    <path fill="none"
                                          d="M -10 93.39371428571428 L 0 93.39371428571428 L 0.80000000000075 87.74571428571431 L 1.5999999999999 80.73614285714291 L 2.4000000000007 93.19200000000001 L 3.1999999999998 82.70285714285717 L 4.0000000000006 88.14914285714286 L 4.7999999999997 96.41942857142863 L 5.6000000000005 89.96457142857145 L 6.3999999999996 90.368 L 7.2000000000004 93.19200000000001 L 7.9999999999995 89.5611428571429 L 8.8000000000003 94.80571428571426 L 9.5999999999994 102.87428571428575 L 10.4 111.95142857142858 L 11.199999999999 118.20457142857143 L 12 119.61657142857143 L 12.799999999999 116.38914285714284 L 13.6 99.64685714285719 L 14.400000000001 97.42799999999997 L 15.2 96.2177142857143 L 16.000000000001 100.05028571428574 L 16.8 117.3977142857143 L 17.600000000001 109.73257142857148 L 18.4 113.96857142857141 L 19.2 107.51371428571426 L 20 116.99428571428572 L 20.8 129.70228571428572 L 21.6 138.77942857142855 L 22.4 132.3245714285714 L 23.199999999999 129.29885714285714 L 24 116.0865714285714 L 24.799999999999 103.88285714285712 L 25.6 86.73714285714289 L 26.399999999999 87.94742857142859 L 27.2 98.83999999999997 L 28.000000000001 98.23485714285718 L 28.8 81.29085714285719 L 29.600000000001 94.80571428571426 L 30.4 97.02457142857142 L 31.200000000001 97.8314285714286 L 32 90.56971428571427 L 32.8 87.94742857142859 L 33.6 88.55257142857147 L 34.4 88.35085714285714 L 35.2 99.24342857142861 L 36 116.38914285714284 L 36.799999999999 122.64228571428569 L 37.6 86.9388571428571 L 38.399999999999 101.05885714285719 L 39.2 84.1148571428572 L 39.999999999999 72.21371428571427 L 40.8 72.012 L 41.600000000001 68.58285714285711 L 42.4 79.47542857142861 L 43.200000000001 97.6297142857143 L 44 102.26914285714287 L 44.800000000001 93.19200000000001 L 45.6 115.9857142857143 L 46.4 118.00285714285718 L 47.2 97.02457142857142 L 48 85.52685714285712 L 48.8 93.79714285714283 L 49.6 87.94742857142859 L 50.399999999999 95.00742857142859 L 51.2 69.79314285714287 L 51.999999999999 69.38971428571432 L 52.8 64.34685714285717 L 53.599999999999 79.87885714285716 L 54.4 80.2822857142857 L 55.200000000001 77.66000000000003 L 56 77.8617142857143 L 56.800000000001 71.60857142857145 L 57.6 73.42400000000004 L 58.400000000001 65.96057142857143 L 59.2 52.0422857142857 L 60 62.53142857142859 L 60.8 130.71085714285715 L 61.6 125.26457142857146 L 62.4 126.67657142857146 L 63.2 129.90400000000002 L 63.999999999999 129.90400000000002 L 64.8 131.7194285714286 L 65.599999999999 138.17428571428576 L 66.4 131.92114285714285 L 67.199999999999 139.38457142857143 L 68 137.36742857142855 L 68.800000000001 131.11428571428573 L 69.6 126.07142857142858 L 70.400000000001 121.83542857142857 L 71.2 131.7194285714286 L 72.000000000001 141.20000000000002 L 72.8 134.3417142857143 L 73.6 133.53485714285716 L 74.4 128.49200000000002 L 75.2 122.64228571428569 L 76 117.80114285714285 L 76.8 121.83542857142857 L 77.599999999999 135.35028571428575 L 78.4 127.28171428571426 L 79.199999999999 132.3245714285714 L 80 127.08000000000001 L 80.799999999999 122.03714285714287 L 81.6 122.03714285714287 L 82.400000000001 136.15714285714287 L 83.2 139.18285714285713 L 84.000000000001 137.1657142857143 L 84.8 122.23885714285711 L 85.600000000001 141.20000000000002 L 86.4 136.56057142857142 L 87.2 142.4102857142857 L 88 137.97257142857143 L 88.8 134.74514285714287 L 89.6 125.26457142857146 L 90.4 120.01999999999998 L 91.199999999999 110.13600000000002 L 92 103.88285714285712 L 92.799999999999 113.16171428571428 L 93.6 130.10571428571427 L 94.399999999999 123.85257142857145 L 95.2 121.43199999999999 L 96.000000000001 126.27314285714289 L 96.8 138.98114285714288 L 97.600000000001 124.256 L 98.4 128.08857142857147 L 99.200000000001 129.70228571428572 L 100 125.06285714285713 L 100.8 133.93828571428574 L 101.6 131.92114285714285 L 102.4 133.13142857142861 L 103.2 127.48342857142859 L 104 128.08857142857147 L 104.8 130.50914285714285 L 105.6 114.37200000000004 L 106.4 119.61657142857143 L 107.2 107.71542857142859 L 108 104.08457142857145 L 108.8 102.87428571428575 L 109.6 107.91714285714289 L 110.4 95.81428571428575 L 111.2 93.99885714285716 L 112 90.26714285714291 L 112.8 93.6962857142857 L 113.6 93.19200000000001 L 114.4 99.84857142857143 L 115.2 99.64685714285719 L 116 97.22628571428572 L 116.8 92.48600000000005 L 117.6 96.2177142857143 L 118.4 95.51171428571428 L 119.2 100.45371428571431 L 120 101.26057142857144 L 120.8 84.51828571428575 L 121.6 85.32514285714285 L 122.4 85.72857142857146 L 123.2 88.55257142857147 L 124 84.71999999999997 L 124.8 93.99885714285716 L 125.6 86.73714285714289 L 126.4 110.13600000000002 L 127.2 95.61257142857141 L 128 88.25 L 128.8 99.64685714285719 L 129.6 85.32514285714285 L 130.4 95.41085714285714 L 131.2 94.50314285714285 L 132 85.32514285714285 L 132.8 88.55257142857147 L 133.6 98.83999999999997 L 134.4 103.076 L 135.2 96.62114285714284 L 136 96.01600000000002 L 136.8 90.7714285714286 L 137.6 95.00742857142859 L 138.4 103.47942857142857 L 139.2 107.31200000000001 L 140 107.11028571428571 L 140.8 127.28171428571426 L 141.6 129.29885714285714 L 142.4 124.86114285714288 L 143.2 123.65085714285712 L 144 121.12942857142855 L 144.8 115.9857142857143 L 145.6 126.47485714285713 L 146.4 122.44057142857145 L 147.2 113.36342857142859 L 148 111.74971428571428 L 148.8 109.53085714285714 L 149.6 125.36542857142857 L 150.4 135.14857142857142 L 151.2 118.40628571428573 L 152 123.24742857142857 L 152.8 132.52628571428573 L 153.6 144.02400000000003 L 154.4 137.77085714285712 L 155.2 126.07142857142858 L 156 121.63371428571432 L 156.8 117.3977142857143 L 157.6 105.6982857142857 L 158.4 104.89142857142858 L 159.2 95.20914285714287 L 160 84.31657142857142 L 160.8 84.1148571428572 L 161.6 93.79714285714283 L 162.4 91.37657142857148 L 163.2 92.58685714285713 L 164 91.78000000000003 L 164.8 91.98171428571425 L 165.6 84.71999999999997 L 166.4 77.4582857142857 L 167.2 71.81028571428567 L 168 71.81028571428567 L 168.8 77.66000000000003 L 169.6 75.64285714285717 L 170.4 71.60857142857145 L 171.2 72.012 L 172 66.96914285714286 L 172.8 68.48200000000003 L 173.6 68.38114285714289 L 174.4 61.119428571428614 L 175.2 60.514285714285734 L 176 64.952 L 176.8 66.36399999999998 L 177.6 69.5914285714286 L 178.4 79.27371428571428 L 179.2 81.49257142857141 L 180 79.9797142857143 L 180.8 90.97314285714288 L 181.6 88.55257142857147 L 182.4 100.25199999999998 L 183.2 99.44514285714286 L 184 98.63828571428573 L 184.8 101.05885714285719 L 185.6 108.52228571428572 L 186.4 119.41485714285719 L 187.2 119.61657142857143 L 188 120.82685714285711 L 188.8 110.94285714285715 L 189.6 111.14457142857148 L 190.4 111.54800000000003 L 191.2 113.16171428571428 L 192 117.90199999999999 L 192.8 117.3977142857143 L 193.6 118.60799999999998 L 194.4 106.50514285714289 L 195.2 99.64685714285719 L 196 99.64685714285719 L 196.8 97.8314285714286 L 197.6 98.73914285714287 L 198.4 104.488 L 199.2 106.90857142857146 L 200 95.81428571428575 L 200.8 96.62114285714284 L 201.6 92.58685714285713 L 202.4 92.38514285714285 L 203.2 95.00742857142859 L 204 89.15771428571435 L 204.8 90.7714285714286 L 205.6 93.19200000000001 L 206.4 100.85714285714286 L 207.2 101.05885714285719 L 208 89.15771428571435 L 208.8 96.01600000000002 L 209.6 101.26057142857144 L 210.4 100.85714285714286 L 211.2 100.85714285714286 L 212 99.84857142857143 L 212.8 95.00742857142859 L 213.6 100.25199999999998 L 214.4 93.99885714285716 L 215.2 98.83999999999997 L 216 99.84857142857143 L 216.8 100.25199999999998 L 217.6 97.73057142857141 L 218.4 97.42799999999997 L 219.2 103.47942857142857 L 220 102.26914285714287 L 220.8 102.47085714285711 L 221.6 107.11028571428571 L 222.4 108.72400000000002 L 223.2 114.37200000000004 L 224 124.256 L 224.8 125.4662857142857 L 225.6 134.3417142857143 L 226.4 132.92971428571428 L 227.2 128.49200000000002 L 228 130.3074285714286 L 228.8 131.11428571428573 L 229.6 125.4662857142857 L 230.4 138.77942857142855 L 231.2 136.15714285714287 L 232 125.06285714285713 L 232.8 125.668 L 233.6 133.53485714285716 L 234.4 127.68514285714284 L 235.2 128.8954285714286 L 236 136.56057142857142 L 236.8 146.84800000000004 L 237.6 151.08399999999997 L 238.4 160.96800000000002 L 239.2 156.14702857142856 L 240 154.71485714285717 L 240.8 156.32857142857142 L 241.6 146.24285714285716 L 242.4 146.24285714285716 L 243.2 139.788 L 244 141.20000000000002 L 244.8 134.14 L 245.6 134.94685714285717 L 246.4 120.01999999999998 L 247.2 115.38057142857141 L 248 120.01999999999998 L 248.8 119.71742857142854 L 249.6 127.18085714285715 L 250.4 131.51771428571428 L 251.2 129.90400000000002 L 252 122.94485714285713 L 252.8 119.60648571428572 L 253.6 119.61657142857143 L 254.4 107.11028571428571 L 255.2 106.50514285714289 L 256 98.03314285714285 L 256.8 99.64685714285719 L 257.6 99.84857142857143 L 258.4 94.40228571428571 L 259.2 94.60400000000004 L 260 94.60400000000004 L 260.8 90.7714285714286 L 261.6 92.99028571428573 L 262.4 90.67057142857146 L 263.2 90.7714285714286 L 264 90.97314285714288 L 264.8 77.8617142857143 L 265.6 60.716000000000065 L 266.4 49.31914285714288 L 267.2 51.43714285714282 L 268 48.81485714285719 L 268.8 45.789142857142906 L 269.6 45.3857142857143 L 270.4 38.32571428571424 L 271.2 36.2077142857143 L 272 36.10685714285711 L 272.8 48.714 L 273.6 50.02514285714278 L 274.4 54.86628571428571 L 275.2 54.26114285714283 L 276 43.368571428571386 L 276.8 37.518857142857144 L 277.6 38.527428571428516 L 278.4 52.4457142857143 L 279.2 50.22685714285717 L 280 60.91771428571428 L 280.8 70.49914285714289 L 281.6 73.02057142857143 L 282.4 67.17085714285713 L 283.2 86.63628571428575 L 284 111.74971428571428 L 284.8 97.6297142857143 L 285.6 100.85714285714286 L 286.4 129.90400000000002 L 287.2 128.8954285714286 L 288 112.5565714285714 L 288.8 106.10171428571434 L 289.6 101.26057142857144 L 290.4 101.05885714285719 L 291.2 122.64228571428569 L 292 122.844 L 292.8 119.01142857142855 L 293.6 128.8954285714286 L 294.4 130.10571428571427 L 295.2 126.47485714285713 L 296 133.13142857142861 L 296.8 133.93828571428574 L 297.6 146.04114285714283 L 298.4 153.60542857142855 L 299.2 159.15257142857143 L 300 156.42942857142856 L 300.8 148.4617142857143 L 301.6 152.0925714285714 L 302.4 158.3457142857143 L 303.2 141.20000000000002 L 304 135.95542857142854 L 304.8 140.79657142857144 L 305.6 138.27514285714287 L 306.4 167.82628571428572 L 307.2 157.33714285714288 L 308 177.50857142857146 L 308.8 177.50857142857146 L 309.6 161.77485714285714 L 310.4 171.86057142857143 L 311.2 189.00628571428575 L 312 192.63714285714286 L 312.8 198.28514285714283 L 313.6 205.95028571428574 L 314.4 204.53828571428573 L 315.2 210.99314285714289 L 316 213.0102857142857 L 316.8 212.80857142857144 L 317.6 205.95028571428574 L 318.4 214.62400000000002 L 319.2 214.22057142857145 L 320 200.30228571428572 L 320.8 194.6542857142857 L 321.6 200.30228571428572 L 322.4 198.68857142857146 L 323.2 189.81314285714288 L 324 186.98914285714287 L 324.8 186.18228571428574 L 325.6 190.62 L 326.4 191.4268571428571 L 327.2 184.5685714285714 L 328 190.62 L 328.8 189.208 L 329.6 190.01485714285718 L 330.4 190.41828571428576 L 331.2 186.98914285714287 L 332 182.34971428571427 L 332.8 178.5171428571429 L 333.6 179.52571428571426 L 334.4 177.7102857142857 L 335.2 176.09657142857145 L 336 179.1222857142857 L 336.8 171.0537142857143 L 337.6 167.62457142857141 L 338.4 158.54742857142855 L 339.2 156.32857142857142 L 340 156.12685714285712 L 340.8 153.908 L 341.6 140.9982857142857 L 342.4 145.2342857142857 L 343.2 148.86514285714284 L 344 146.6462857142857 L 344.8 147.45314285714284 L 345.6 157.53885714285713 L 346.4 161.5731428571429 L 347.2 168.2297142857143 L 348 157.53885714285713 L 348.8 164.19542857142858 L 349.6 167.82628571428572 L 350.4 170.65028571428573 L 351.2 171.45714285714286 L 352 177.7102857142857 L 352.8 173.27257142857144 L 353.6 179.1222857142857 L 354.4 166.4142857142857 L 355.2 166.8177142857143 L 356 169.03657142857142 L 356.8 157.13542857142855 L 357.6 168.02799999999996 L 358.4 159.556 L 359.2 157.33714285714288 L 360 147.0497142857143 L 360.8 147.45314285714284 L 361.6 148.4617142857143 L 362.4 163.18685714285715 L 363.2 157.94228571428567 L 364 160.1611428571429 L 364.8 157.94228571428567 L 365.6 159.15257142857143 L 366.4 167.42285714285717 L 367.2 160.56457142857144 L 368 152.89942857142853 L 368.8 149.67200000000005 L 369.6 149.8737142857143 L 370.4 151.08399999999997 L 371.2 151.4874285714286 L 372 157.94228571428567 L 372.8 154.91657142857142 L 373.6 156.32857142857142 L 374.4 161.97657142857145 L 375.2 146.04114285714283 L 376 127.28171428571426 L 376.8 125.06285714285713 L 377.6 125.06285714285713 L 378.4 117.3977142857143 L 379.2 112.15314285714283 L 380 111.74971428571428 L 380.8 119.01142857142855 L 381.6 109.53085714285714 L 382.4 105.9 L 383.2 99.44514285714286 L 384 81.08914285714286 L 384.8 77.8617142857143 L 385.6 73.82742857142858 L 386.4 69.18799999999999 L 387.2 69.5914285714286 L 388 64.75028571428572 L 388.8 64.75028571428572 L 389.6 86.9388571428571 L 390.4 94.60400000000004 L 391.2 100.85714285714286 L 392 100.65542857142856 L 392.8 91.37657142857148 L 393.6 92.38514285714285 L 394.4 90.368 L 395.2 90.97314285714288 L 396 99.0417142857143 L 396.8 99.24342857142861 L 397.6 94.40228571428571 L 398.4 99.24342857142861 L 399.2 102.67257142857144 L 400 107.31200000000001 L 400.8 109.1274285714286 L 401.6 116.99428571428572 L 402.4 111.54800000000003 L 403.2 131.11428571428573 L 404 129.50057142857148 L 404.8 130.71085714285715 L 405.6 129.70228571428572 L 406.4 133.33314285714286 L 407.2 137.36742857142855 L 408 139.38457142857143 L 408.8 136.35885714285718 L 409.6 139.38457142857143 L 410.4 137.36742857142855 L 411.2 136.15714285714287 L 412 143.62057142857145 L 412.8 150.0754285714286 L 413.6 156.12685714285712 L 414.4 159.35428571428568 L 415.2 156.12685714285712 L 416 157.53885714285713 L 416.8 148.05828571428572 L 417.6 148.26000000000005 L 418.4 141.60342857142857 L 419.2 145.83942857142858 L 420 148.86514285714284 L 420.8 147.45314285714284 L 421.6 148.6634285714286 L 422.4 157.33714285714288 L 423.2 169.6417142857143 L 424 167.82628571428572 L 424.8 166.01085714285716 L 425.6 162.58171428571427 L 426.4 163.79200000000003 L 427.2 168.4314285714286 L 428 166.61600000000004 L 428.8 175.89485714285712 L 429.6 183.56000000000003 L 430.4 196.46971428571425 L 431.2 201.31085714285715 L 432 215.43085714285715 L 432.8 221.28057142857142 L 433.6 217.85142857142858 L 434.4 215.2291428571429 L 435.2 186.5857142857143 L 436 190.01485714285718 L 436.8 187.19085714285717 L 437.6 186.78742857142862 L 438.4 171.86057142857143 L 439.2 190.62 L 440 195.05771428571433 L 440.8 205.14342857142861 L 441.6 215.43085714285715 L 442.4 206.75714285714287 L 443.2 201.71428571428572 L 444 199.092 L 444.8 195.05771428571433 L 445.6 208.77428571428575 L 446.4 201.10914285714284 L 447.2 210.99314285714289 L 448 205.54685714285716 L 448.8 201.91600000000003 L 449.6 194.856 L 450.4 190.41828571428576 L 451.2 195.25942857142857 L 452 187.59428571428575 L 452.8 200.70571428571427 L 453.6 211.19485714285713 L 454.4 212.20342857142856 L 455.2 220.27200000000005 L 456 223.2977142857143 L 456.8 218.05314285714283 L 457.6 224.7097142857143 L 458.4 232.98000000000002 L 459.2 242.46057142857143 L 460 253.7565714285714 L 460.8 255.77371428571428 L 461.6 265.456 L 462.4 266.66628571428566 L 463.2 290.872 L 464 268.8851428571428 L 464.8 273.12114285714284 L 465.6 272.7177142857143 L 466.4 261.21999999999997 L 467.2 253.7565714285714 L 468 249.92400000000004 L 468.8 230.96285714285713 L 469.6 218.86000000000004 L 470.4 204.3365714285714 L 471.2 198.68857142857146 L 472 198.68857142857146 L 472.8 200.9074285714286 L 473.6 195.46114285714287 L 474.4 192.63714285714286 L 475.2 184.36685714285716 L 476 178.31542857142858 L 476.8 173.47428571428574 L 477.6 173.47428571428574 L 478.4 178.31542857142858 L 479.2 171.45714285714286 L 480 168.02799999999996 L 480.8 169.8434285714286 L 481.6 167.82628571428572 L 482.4 160.96800000000002 L 483.2 162.78342857142857 L 484 152.69771428571428 L 484.8 153.908 L 485.6 154.31142857142854 L 486.4 160.1611428571429 L 487.2 167.82628571428572 L 488 163.79200000000003 L 488.8 167.0194285714286 L 489.6 166.8177142857143 L 490.4 160.7662857142857 L 491.2 164.19542857142858 L 492 155.92514285714287 L 492.8 152.89942857142853 L 493.6 154.31142857142854 L 494.4 160.1611428571429 L 495.2 159.15257142857143 L 496 154.31142857142854 L 496.8 161.97657142857145 L 497.6 159.556 L 498.4 167.62457142857141 L 499.2 152.69771428571428 L 500 153.30285714285716 L 500.8 152.49599999999998 L 501.6 154.31142857142854 L 502.4 162.58171428571427 L 503.2 162.78342857142857 L 504 154.1097142857143 L 504.8 150.68057142857143 L 505.6 147.2514285714286 L 506.4 146.6462857142857 L 507.2 150.0754285714286 L 508 145.43600000000004 L 508.8 138.5777142857143 L 509.6 134.14 L 510.4 122.44057142857145 L 511.2 131.7194285714286 L 512 127.08000000000001 L 512.8 128.8954285714286 L 513.6 131.31600000000003 L 514.4 127.88685714285714 L 515.2 126.67657142857146 L 516 115.58228571428572 L 516.8 113.96857142857141 L 517.6 122.844 L 518.4 124.65942857142858 L 519.2 118.8097142857143 L 520 121.02857142857144 L 520.8 126.87828571428571 L 521.6 127.88685714285714 L 522.4 125.86971428571425 L 523.2 122.23885714285711 L 524 130.50914285714285 L 524.8 128.49200000000002 L 525.6 133.33314285714286 L 526.4 134.74514285714287 L 527.2 125.86971428571425 L 528 124.65942857142858 L 528.8 127.48342857142859 L 529.6 131.7194285714286 L 530.4 131.31600000000003 L 531.2 135.35028571428575 L 532 134.54342857142862 L 532.8 141.60342857142857 L 533.6 152.0925714285714 L 534.4 149.47028571428572 L 535.2 153.70628571428574 L 536 150.88228571428573 L 536.8 159.556 L 537.6 162.1782857142857 L 538.4 150.27714285714285 L 539.2 156.53028571428575 L 540 151.68914285714285 L 540.8 147.0497142857143 L 541.6 148.6634285714286 L 542.4 151.28571428571428 L 543.2 152.0925714285714 L 544 143.41885714285715 L 544.8 148.6634285714286 L 545.6 161.16971428571426 L 546.4 161.5731428571429 L 547.2 173.87771428571432 L 548 175.49142857142857 L 548.8 168.83485714285717 L 549.6 173.87771428571432 L 550.4 163.99371428571428 L 551.2 147.45314285714284 L 552 144.22571428571428 L 552.8 150.27714285714285 L 553.6 146.04114285714283 L 554.4 151.68914285714285 L 555.2 148.6634285714286 L 556 157.13542857142855 L 556.8 153.70628571428574 L 557.6 161.5731428571429 L 558.4 160.56457142857144 L 559.2 156.12685714285712 L 560 162.38000000000002 L 560.8 154.71485714285717 L 561.6 147.2514285714286 L 562.4 158.3457142857143 L 563.2 165.60742857142858 L 564 151.28571428571428 L 564.8 150.47885714285718 L 565.6 140.3931428571429 L 566.4 139.9897142857143 L 567.2 137.1657142857143 L 568 133.33314285714286 L 568.8 134.14 L 569.6 132.3245714285714 L 570.4 126.27314285714289 L 571.2 124.65942857142858 L 572 126.87828571428571 L 572.8 124.0542857142857 L 573.6 125.06285714285713 L 574.4 137.1657142857143 L 575.2 146.84800000000004 L 576 150.0754285714286 L 576.8 149.8737142857143 L 577.6 148.86514285714284 L 578.4 155.11828571428575 L 579.2 163.38857142857145 L 580 175.088 L 580.8 199.092 L 581.6 205.95028571428574 L 582.4 201.31085714285715 L 583.2 208.976 L 584 191.22514285714288 L 584.8 201.5125714285714 L 585.6 226.32342857142856 L 586.4 231.3662857142857 L 587.2 229.55085714285713 L 588 221.28057142857142 L 588.8 222.0874285714286 L 589.6 222.0874285714286 L 590.4 224.10457142857143 L 591.2 239.83828571428575 L 592 243.67085714285713 L 592.8 236.40914285714285 L 593.6 230.7611428571429 L 594.4 231.3662857142857 L 595.2 224.30628571428574 L 596 229.95428571428567 L 596.8 244.4777142857143 L 597.6 243.46914285714286 L 598.4 243.67085714285713 L 599.2 235.40057142857148 L 600 227.73542857142854 L 600.8 229.95428571428567 L 601.6 230.96285714285713 L 602.4 227.93714285714287 L 603.2 220.4737142857143 L 604 219.46514285714284 L 604.8 208.16914285714287 L 605.6 204.73999999999998 L 606.4 202.52114285714285 L 607.2 216.03600000000003 L 608 207.7657142857143 L 608.8 201.91600000000003 L 609.6 201.71428571428572 L 610.4 204.94171428571428 L 611.2 205.54685714285716 L 612 207.564 L 622 207.564"
                                          visibility="visible" data-z-index="2" class="highcharts-tracker-line"
                                          stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)"
                                          stroke-width="22"></path>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-color-0  highcharts-tracker"
                                   transform="translate(10,10) scale(1 1)"></g>
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-1 highcharts-line-series highcharts-color-1 "
                                   transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-u513sl5-1555-)">
                                    <path fill="none"
                                          d="M 21.6 138.77942857142855 L 150.4 135.14857142857142 L 188 120.82685714285711 L 237.6 151.08399999999997 L 238.4 160.96800000000002 L 346.4 161.5731428571429 L 436 190.01485714285718 L 543.2 152.0925714285714 L 585.6 226.32342857142856 L 587.2 229.55085714285713"
                                          class="highcharts-graph" data-z-index="1" stroke-linejoin="round"
                                          stroke-linecap="round"></path>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-color-1 "
                                   transform="translate(10,10) scale(1 1)">
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="21" y="138.77942857142855" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="150" y="135.14857142857142" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="188" y="120.82685714285711" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="237" y="151.08399999999997" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="238" y="160.96800000000002" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="346" y="161.5731428571429" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="436" y="190.01485714285718" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="543" y="152.0925714285714" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="585" y="226.32342857142856" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E"
                                           x="587" y="229.55085714285713" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-1"></image>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-2 highcharts-line-series highcharts-color-2 "
                                   transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-u513sl5-1555-)">
                                    <path fill="none" d="M 87.2 142.4102857142857" class="highcharts-graph"
                                          data-z-index="1"
                                          stroke-linejoin="round" stroke-linecap="round"></path>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-2 highcharts-line-series highcharts-color-2 "
                                   transform="translate(10,10) scale(1 1)">
                                    <image preserveAspectRatio="none"
                                           xlink:href="data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E"
                                           x="87" y="142.4102857142857" width="13" transform="translate(-6.5,-6.5)"
                                           height="13" stroke="red" stroke-width="2" fill="transparent" opacity="1"
                                           class="highcharts-point highcharts-color-2"></image>
                                </g>
                                <g data-z-index="0.1"
                                   class="highcharts-series highcharts-series-3 highcharts-line-series highcharts-color-3 "
                                   transform="translate(10,10) scale(1 1)"
                                   clip-path="url(#highcharts-u513sl5-1555-)"></g>
                                <g data-z-index="0.1"
                                   class="highcharts-markers highcharts-series-3 highcharts-line-series highcharts-color-3 "
                                   transform="translate(10,10) scale(1 1)"></g>
                            </g>
                            <g class="highcharts-exporting-group" data-z-index="3">
                                <g class="highcharts-button highcharts-contextbutton" stroke-linecap="round"
                                   transform="translate(626,10)"><title>Chart context menu</title>
                                    <rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24"
                                          height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect>
                                    <path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                          class="highcharts-button-symbol" data-z-index="1" stroke="#666666"
                                          stroke-width="3"></path>
                                    <text x="0" data-z-index="1"
                                          style="font-weight:normal;color:#333333;cursor:pointer;fill:#333333;"
                                          y="12"></text>
                                </g>
                            </g>
                            <text x="330" text-anchor="middle" class="highcharts-title" data-z-index="4"
                                  style="color:#333333;font-size:16px;fill:#333333;" y="22"></text>
                            <text x="330" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
                                  style="color:#666666;fill:#666666;" y="24"></text>
                            <text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4"
                                  style="color:#666666;fill:#666666;" y="397"></text>
                            <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7">
                                <text x="65.466666666666"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Jan '17</tspan>
                                </text>
                                <text x="134" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>May '17</tspan>
                                </text>
                                <text x="205.2" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Sep '17</tspan>
                                </text>
                                <text x="273.73333333333"
                                      style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Jan '18</tspan>
                                </text>
                                <text x="342" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>May '18</tspan>
                                </text>
                                <text x="411" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Sep '18</tspan>
                                </text>
                                <text x="476.4" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Jan '19</tspan>
                                </text>
                                <text x="542.8" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>May '19</tspan>
                                </text>
                                <text x="611.2" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="middle" transform="translate(0,0)" y="382" opacity="1">
                                    <tspan>Sep '19</tspan>
                                </text>
                            </g>
                            <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7">
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="361" opacity="1">17.5
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="311" opacity="1">20
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="260" opacity="1">22.5
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="210" opacity="1">25
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="159" opacity="1">27.5
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="109" opacity="1">30
                                </text>
                                <text x="622" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="58" opacity="1">32.5
                                </text>
                                <text x="0" style="color:#666666;cursor:default;font-size:11px;fill:#666666;"
                                      text-anchor="end" transform="translate(0,0)" y="-9999">35
                                </text>
                            </g>
                            <text x="650" class="highcharts-credits" text-anchor="end" data-z-index="8"
                                  style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">
                                Highcharts.com
                            </text>
                        </svg>
                    </div>
                </div>
                <script>
                    $.getJSON('https://alpha.smartinsider.com/app/bulletintool/chartjson?SignalID=44850&sCompanyID=26092', function (data) {
                        // Create the chart

                        var chart = Highcharts.stockChart('26092', {

                            rangeSelector: {
                                enabled: false
                            },
                            chart: {
                                zoomType: 'x'
                            },
                            legend: {
                                enabled: false,
                                align: 'left',
                                verticalAlign: 'top'
                            },
                            yAxis: {
                                title: {
                                    text: 'Stock Price'
                                }
                            },
                            xAxis: {
                                plotBands: data.plot_bands,
                                type: 'datetime'
                            },
                            navigator: {
                                enabled: false
                            },
                            scrollbar: {
                                enabled: false
                            },
                            series: [
                                {
                                    name: `Williams Companies Inc`,
                                    data: data.data_chart,
                                    showInLegend: true,
                                    tooltip: {
                                        valueDecimals: 2
                                    }
                                },
                                {
                                    name: 'Buy',
                                    marker: {
                                        enabled: true,
                                        symbol: "url(data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-square fa-w-14' aria-hidden='true' data-prefix='fas' data-icon='square' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(79, 98, 40)' d='M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z'%3E%3C/path%3E%3C/svg%3E)",
                                        width: 13,
                                        height: 13,
                                        //symbol:'url(https://alpha.smartinsider.com/img/highcharts/buy.png)',
                                        fillColor: 'transparent',
                                        lineWidth: 2,
                                        radius: 4,
                                        lineColor: 'red' // inherit from series
                                    },
                                    lineWidth: 0,
                                    data: data.data_flag1,
                                    showInLegend: true,
                                    enableMouseTracking: false,
                                    states: {
                                        hover: {
                                            enabled: false
                                        }
                                    }
                                },
                                {
                                    name: 'Sell',
                                    marker: {
                                        enabled: true,
                                        symbol: "url(data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(255, 0, 0)' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E)",
                                        width: 13,
                                        height: 13,
                                        //symbol:'url(https://alpha.smartinsider.com/img/highcharts/sell.png)',
                                        fillColor: 'transparent',
                                        lineWidth: 2,
                                        radius: 4,
                                        lineColor: 'red' // inherit from series
                                    },
                                    lineWidth: 0,
                                    data: data.data_flag2,
                                    showInLegend: true,
                                    enableMouseTracking: false,
                                    states: {
                                        hover: {
                                            enabled: false
                                        }
                                    }
                                },
                                {
                                    name: 'Cluster Trade',
                                    marker: {
                                        enabled: true,
                                        symbol: "url(data:image/svg+xml;charset=utf8,%3Csvg class='svg-inline--fa fa-users fa-w-20' aria-hidden='true' data-prefix='fas' data-icon='users' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512' data-fa-i2svg=''%3E%3Cpath fill='rgb(120,120,120)' d='M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z'%3E%3C/path%3E%3C/svg%3E)",
                                        width: 13,
                                        height: 13,
                                        //symbol:'url(https://alpha.smartinsider.com/img/members/clustertrade_small.png)',
                                        fillColor: 'transparent',
                                        lineWidth: 2,
                                        radius: 4,
                                        lineColor: 'red' // inherit from series
                                    },
                                    lineWidth: 0,
                                    data: data.data_flag3,
                                    showInLegend: true,
                                    enableMouseTracking: false,
                                    states: {
                                        hover: {
                                            enabled: false
                                        }
                                    }
                                }
                            ]
                        });

                    });
                </script>
            </td>
        </tr>
        <tr>
            <td style="font-size:11px; font-family: Arial, Helvetica, sans-serif; color:#807f7f; padding-bottom:10px; text-align:right;">
                Three year chart showing trades by the Insiders stated above. <a
                        style="text-decoration:none;color:#058dc7;"
                        href="https://alpha.smartinsider.com/app/members/company?c=26092"
                        target="_blank" title="">Click Here for more</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" id="retired"
                style="padding:15px 0;font-size:20px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;">
                Signals Retired
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding:10px 0;font-size:18px;font-family: Arial, Helvetica, sans-serif;">
                <a href="https://dev3.smartinsider.com/app/members/company?c=85597" style="color: #000;"
                   target="_blank">&nbsp;&nbsp;- Guangdong Failong Crystal Technology Co Ltd <i>(Previously Ranked
                        -N)</i></a>
            </td>
        </tr>
        </tbody>
    </table>
    <table style="padding:40px 0 10px 0; border-bottom:5px solid #676262; font-family: Arial, Helvetica, sans-serif;"
           class="main-display" align="center" role="presentation" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td>
                <a href="https://alpha.smartinsider.com" target="_blank" title=""
                   style="color:#000000; text-decoration:none; text-align:left;">Go to smartinsider.com</a>
            </td>
            <td align="right"></td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>