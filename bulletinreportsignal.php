<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/custom/bulletin.css?t=<?= time() ?>"/>

</head>

<body>
<div class="sidenav d-none d-lg-block">
    <ul id="sideNav" class="float-nav list-unstyled">
        <li>
            <a class="active" href="#new" title="">NEW SIGNALS</a>
        </li>
        <li>
            <a href="#changed" title="">CHANGED SIGNALS</a>
        </li>
        <li>
            <a href="#retired" title="">SIGNALS RETIRED</a>
        </li>
    </ul>
</div>

<main role="main" class="container content bg-white main">
    <div class="row">
        <div class="col">
            <div class="content_container">
                <div class="row my-4">
                    <div class="col-md-5 order-md-last">
                        <span>
                            <img class="img-fluid" src="assets/images/logo.png" alt="Logo">
                        </span>
                    </div>
                    <div class="col-md-7 order-md-first ">
                        <h2 class="d-flex align-items-center justify-content-center justify-content-md-start h-100 mb-0 ">
                            <span class="">Daily US Stock Rankings</span></h2>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <div id="new" class="w-100 bulletin-section">
                            <div class="table-responsive w-100">
                                <div class="signal-title my-4">
                                    <h5 class="font-weight-bold">New Signals</h5>
                                </div>
                                <div class="signal-detail-box">
                                    <div class="signal-header d-flex align-items-center">
                                        <div class="company-identity d-flex align-items-center ">
                                            <img class="mx-2" title="United States" alt=""
                                                 src="https://alpha.smartinsider.com/img/flgs/flgs/us.png">
                                            <h3 class="mb-0 text-truncate">
                                                <a title="Energizer Holdings Inc"
                                                   href="https://alpha.smartinsider.com/app/members/company?c=83127"
                                                   target="_blank">Energizer Holdings Inc</a>
                                            </h3>
                                        </div>
                                        <div class="signal-rank">
                                            <span class="font-weight-bold">
                                                Ranked <span style="color:#abff2e;">+N</span>
                                            </span>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                    <div class="signal-details">
                                        <span class="d-inline-block w-100">
                                            Four insiders purchased stock on August 8 at prices ranging from $34.65-36.43, two days after the company reported 3Q earnings. Alan Hoskins (CEO) purchased 10,000 shares, Robert Vitale (Director) purchased 5,000 shares, Mark Lavigne (COO) purchased 3,563 shares and Gregory Kinder (EVP) purchased 6,000 shares. The purchases total about $900,000. Lavigne and Kinder are reversing and making their first purchases despite being with the company for several years. Vitale has been timely in the past, but not perfect. We are ranking the stock +N.
                                        </span>
                                    </div>
                                </div>
                                <table class="display bulleting-table new-signal-table w-100"
                                       id="" cellspacing="0" cellpadding="0" border="0">
                                    <thead>
                                    <tr id="group-heading">
                                        <th colspan="2" rowspan="2" id="group-insider">
                                            <span>Insider</span>
                                        </th>
                                        <th colspan="5" rowspan="2" id="group-tdetails">
                                            <span>Transaction Details</span>
                                        </th>
                                        <th colspan="3" style="border-bottom: none;" id="group-holding">
                                            <span>Holding</span>
                                        </th>
                                    </tr>
                                    <tr id="lower-head">
                                        <th class="holding visibled holding-header group-holding"
                                            title="After transactions reported today">
                                            <span>Amount</span>
                                        </th>
                                        <th id="holding_change" class="holding_change visibled group-holding"
                                            title="After this transaction">
                                            <span>Change</span>
                                        </th>
                                        <th title="% of Shares on Issue held, not displayed below 0.1%" id="sii-col"
                                            class="sii-col visibled group-holding">
                                            <span>%Sii</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="">
                                        <td class="">
                                            <a href="https://alpha.smartinsider.com/app/members/person?p=367722"
                                               title="Robert Vitale"
                                               class="persontooltip personname" id="367722">&nbsp;Robert Vitale</a>
                                        </td>
                                        <td class="">N</td>
                                        <td class="">08-Aug-19</td>
                                        <td class="">
                                            <span class="buysell-span buy_type">
                                                <b title="BUY">BUY</b>
                                                <img src="https://alpha.smartinsider.com/img/members/arrow_top.png"
                                                     title="BUY" alt="">
                                            </span>
                                        </td>
                                        <td class="">5,000 @ $34.64</td>
                                        <td class="">
                                            <a href="https://alpha.smartinsider.com/app/members/link?tid=8233690"
                                               target="blank" class="">
                                                <img src="https://alpha.smartinsider.com/members/images/download-16.png"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td class="">$173,229</td>
                                        <td class="">18,225</td>
                                        <td class="">38%</td>
                                        <td class="">0.03%</td>

                                    </tr>
                                    <tr class="">
                                        <td class="">
                                            <a href="https://alpha.smartinsider.com/app/members/person?p=573263"
                                               title="Alan Hoskins" class="persontooltip personname" id="573263">&nbsp;Alan
                                                Hoskins</a>
                                        </td>
                                        <td class="">E:CEO</td>
                                        <td class="">08-Aug-19</td>
                                        <td class="">
                                            <span class="buysell-span buy_type">
                                                <b title="BUY"
                                                >BUY</b>
                                                <img src="https://alpha.smartinsider.com/img/members/arrow_top.png"
                                                     title="BUY" alt="">
                                            </span>
                                        </td>
                                        <td class="">10,000 @ $34.99</td>
                                        <td class="">
                                            <a target="blank" class=""
                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233746">
                                                <img src="https://alpha.smartinsider.com/members/images/download-16.png"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td class="">$349,957</td>
                                        <td class="">260,337</td>
                                        <td class="">4%</td>
                                        <td class="">0.37%</td>

                                    </tr>
                                    <tr class="">
                                        <td class="">
                                            <a href="https://alpha.smartinsider.com/app/members/person?p=361726"
                                               title="Mark Lavigne"
                                               class="persontooltip personname" id="361726">&nbsp;Mark Lavigne</a>
                                        </td>
                                        <td class="">P:COO</td>
                                        <td class="">08-Aug-19</td>
                                        <td class="">
                                            <span class="buysell-span buy_type">
                                                <b title="BUY">BUY</b>
                                                <img src="https://alpha.smartinsider.com/img/members/arrow_top.png"
                                                     alt="" title="BUY">
                                            </span>
                                        </td>
                                        <td class="">3,563 @ $35.08</td>
                                        <td class="">
                                            <a target="blank" class=""
                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233782">
                                                <img alt=""
                                                     src="https://alpha.smartinsider.com/members/images/download-16.png">
                                            </a>
                                        </td>
                                        <td class="">$124,992</td>
                                        <td class="">70,272</td>
                                        <td class="">5%</td>
                                        <td class="">0.10%</td>

                                    </tr>
                                    <tr class="">
                                        <td class="">
                                            <a href="https://alpha.smartinsider.com/app/members/person?p=572859"
                                               title="Gregory Kinder"
                                               class="persontooltip personname" id="572859">&nbsp;Gregory
                                                Kinder</a>
                                        </td>
                                        <td class="">P:Div. EVP</td>
                                        <td class="">08-Aug-19</td>
                                        <td class="">
                                            <span class="buysell-span buy_type">
                                                <b title="BUY">BUY</b>
                                                <img src="https://alpha.smartinsider.com/img/members/arrow_top.png"
                                                     alt="" title="BUY">
                                            </span>
                                        </td>
                                        <td class="">6,000 @ $36.43</td>
                                        <td class="">
                                            <a target="blank" class=""
                                               href="https://alpha.smartinsider.com/app/members/link?tid=8233843">
                                                <img src="https://alpha.smartinsider.com/members/images/download-16.png"
                                                     alt="">
                                            </a>
                                        </td>
                                        <td class="">$218,590</td>
                                        <td class="">37,767</td>
                                        <td class="">19%</td>
                                        <td class="">0.05%</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bulletin-chart">
                                <img class="img-fluid" src="assets/images/bulletin-chart1.png" alt="Bulletin Chart">
                            </div>
                            <span class="chart-bottom w-100 d-inline-block">Three year chart showing trades by the Insiders stated above. <a
                                        href="" class="" target="">Click Here for more</a></span>
                            <table style="font-family: Arial, Helvetica, sans-serif;"
                                   role="presentation" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td colspan="2" id="retired"
                                        style="padding:15px 0;font-size:20px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;">
                                        Signals Retired
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"
                                        style="padding:10px 0;font-size:18px;font-family: Arial, Helvetica, sans-serif;">
                                        <a href="https://dev3.smartinsider.com/app/members/company?c=85597"
                                           style="color: #000;"
                                           target="_blank">&nbsp;&nbsp;- Guangdong Failong Crystal Technology Co Ltd <i>(Previously
                                                Ranked
                                                -N)</i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <div id="changed"></div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <div id="changed"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


</body>
</html>