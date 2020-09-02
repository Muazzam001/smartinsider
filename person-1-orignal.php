<?php require("includes/header.php"); ?>
    <style type="text/css">
        .prof-img {
            max-height: 110px;
            max-width: 110px;
            min-width: 110px;
            width: 100%;
            margin-top: 0;
        }

        .prof-img img {
            width: 100%;
        }

        .header-intro .prof-desc {
            max-width: unset !important;
        }

        .prof-desc-title .heading {
            font-size: 1.15rem;
        }

        .prof-desc-misc {
            font-size: 0.75rem;
            color: #6F737A;
        }

        .pie-wrapper {
            margin: unset !important;
        }

        .pie-wrapper.mr-2, .pie-wrapper.mx-2 {
            margin-right: .5rem !important;
        }

        .s-block {
            width: auto;
        }

        .highcharts-root, .highcharts-container {
            width: unset !important;
        }
    </style>
    <!-- .container -->
    <main role="main" class="container content person">
        <div class="row header-intro">
            <div class="col-12 col-lg-8">
                <section id="introduction"
                         class="introduction-section d-flex align-items-center flex-column flex-sm-row">
                    <div class="prof-img align-self-sm-start mb-2 mb-sm-0">
                        <img class="img-fluid" src="assets/images/user-image.png" alt="User Image">
                    </div>
                    <div class="prof-desc d-flex flex-column justify-content-between h-100 mh-100">
                        <div class="prof-desc-title d-flex align-items-center flex-column flex-md-row">
                            <div class="mr-sm-1">
                                <h3 class="heading font-weight-bold d-flex text-nowrap ">William Frairs</h3>
                                <div class="prof-desc-misc d-inline-flex align-items-center justify-content-center w-100 justify-content-sm-start">
                                    <span class="d-inline-flex align-items-center mr-sm-3">
                                        <span class="font-weight-bold mr-sm-1">Age:</span> 49</span> &nbsp; <span
                                            class="d-inline-flex align-items-center ">
                                        <img src="assets/images/flag-uk.png" alt="Country Flag" class="img-fluid mr-1"> British</span>
                                </div>
                            </div>
                            <!--                            <div id="trans-amount"-->
                            <!--                                     class="trans-amount-section d-flex justify-content-center align-items-center h-100">-->
                            <div id="trans-amount"
                                 class="trans-amount-misc d-flex justify-content-around flex-row w-100 mt-1 mt-sm-0">
                                <div class="d-flex flex-column justify-content-between align-items-center">
                                    <span class="font-weight-bold">HOLDINGS</span>
                                    <span class=" s-block text-center font-weight-normal"><span>&pound;</span>1,880,993</span>
                                </div>
                                <div class="d-flex flex-column justify-content-between align-items-center">
                                    <span class="font-weight-bold">DIRECTORSHIPS</span>
                                    <span class=" s-block text-center font-weight-normal">36</span>
                                </div>
                                <div class="d-flex flex-column justify-content-between align-items-center ">
                                    <span class="font-weight-bold">TRANSACTIONS</span>
                                    <span class=" s-block text-center font-weight-normal">3</span>
                                </div>
                            </div>
                            <!--                            </div>-->
                        </div>
                        <div class="prof-desc-detail mt-2">
                            <div class="prof-desc-det text-left ">
                                <time datetime="2016-03-09">[09/03/2016]</time>
                                <span>Mr. William holds a BA (Hons) in French Studies from Manchester University and is an associate member of the Chartered Institute of Management Accountants.</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-6 col-lg-2">
                <div id="score-chart" class="score-chart "></div>
                <!--                <div class="d-flex flex-column align-items-center justify-content-around w-100 h-100">-->
                <!--                    <div class="pie-wrapper c-buy" title="Score for trades in this stock only">-->
                <!--                        <div class="arc"-->
                <!--                             data-value="23"></div>-->
                <!--                        <span class="score">23</span>-->
                <!--                    </div>-->
                <!--                    <div class="pie-wrapper c-sell" title="Score for trades in this stock only">-->
                <!--                        <div class="arc"-->
                <!--                             data-value="40"></div>-->
                <!--                        <span class="score">40</span>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
            <div class="col-6 col-lg-2 ">
                <div id="donut-chart" class="donut-chart "></div>
            </div>

        </div>

        <div class="row my-2 my-lg-2 bg-white py-2 border brd-custom">
            <div class="col-12 my-lg-0 ">

                <div class="collapsible-block">
                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion" id="accordionCompanyName" role="tablist"
                         aria-multiselectable="true">

                        <!-- Accordion card -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header px-2 py-0" role="tab"
                                 id="headingCompanyName">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="toggle-section d-inline-flex">
                                            <a class="director-toggler position-relative" data-toggle="collapse"
                                               data-parent="#accordionCompanyName"
                                               href="#collapseCompanyName" aria-expanded="false"
                                               aria-controls="collapseCompanyName">
                                                <i class="fas fa-plus-square mr-2"></i>
                                            </a>
                                            <h5 class="mb-0 heading border-bottom brd-custom text-truncate d-inline-block">
                                                <span class="heading-title font-weight-bold ">Fidelity National Information Services Incorporation </span>
                                            </h5>
                                            <div class="link-text d-flex align-items-center justify-content-center justify-content-sm-between flex-column flex-sm-row ml-2">
                                                <div class="d-flex text-nowrap text-md-nowrap">
                                                    <div class="company-info">
                                                        <strong>Chairman & CEO </strong> since Nov 18
                                                    </div>
                                                    <div id="moreCompanyName" class="more-company ml-2">
                                                        <span data-toggle="modal"
                                                              data-target="#modalMoreExpanded">more</span>
                                                    </div>
                                                    <div class="click-hide more-desc ml-2 company-info"> Formerly CFO
                                                        since Sep
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 text-center">
                                        <div class="show-more-wrapper ml-2">
                                            <div class="link-text d-flex align-items-center justify-content-between flex-column flex-md-row">
                                                <div class="more-wrapper w-100">
                                                    <div class="more-info w-100 mt-1">
                                                        <div class="d-flex align-items-center justify-content-center justify-content-lg-end ">
                                                            <span class="trade-count">4</span>&nbsp;
                                                            <span class="text-display">Trades</span>&nbsp;|&nbsp;
                                                            <span class="text-display">Latest:</span>&nbsp;
                                                            <span class="latest-date">Feb 13</span>
                                                        </div>
                                                    </div>
                                                    <div class="show-more-block mt-1">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <span class="score-card-wrapper" style="display: none">
                                                                <span class="score-card"><span>Scores:</span>
                                                                    <span class="score-card-item score-card-buy">
                                                                        <span class="font-weight-bold"> Buy - 23 </span> / 100 </span>
                                                                    <span class="score-card-item score-card-sell">
                                                                        <span class="font-weight-bold"> Sell - 40 </span> / 100 </span>
                                                                </span>
                                                            </span>
                                                            <span class="show-more more ml-auto" style="display: none">
                                                                <span class="d-flex align-items-center">
                                                                    <span>Show</span>&nbsp;
                                                                    <span class="txt-change">More</span>&nbsp;<i
                                                                            class="icon-change fas fa-expand-arrows-alt"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Card body -->
                            <div id="collapseCompanyName" class="collapse" role="tabpanel"
                                 aria-labelledby="headingCompanyName"
                                 data-parent="#accordionCompanyName">
                                <div class="card-body py-2">
                                    <div class="row trading-detail bg-white " style="display: none">
                                        <div class="col-12">
                                            <div class="trading-detail-block w-100">
                                                <div class="tab-content px-2 pt-1 pb-2">
                                                    <div class="list">
                                                        <div class="tab-data">
                                                            <div class="analysis-detail d-flex justify-content-between align-items-center flex-column flex-lg-row">
                                                                <div class="return-analysis-block return-analysis-left w-100 w-lg-15 "
                                                                     style="margin-top: 20px;">
                                                                    <table class="table table-bordered text-center my-0">
                                                                        <thead>
                                                                        <tr class="font-weight-bold">
                                                                            <th class="font-weight-bold">BANKED</th>
                                                                            <th class="font-weight-bold">INVESTED</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>&#163;<span>51,000</span></td>
                                                                            <td>&#163;<span>105,000</span></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="return-analysis-block return-analysis-center w-100 w-lg-70 mx-3 px-2 pt-1 pb-2 my-2 my-lg-0 border brd-custom">
                                                                    <div class="return-analysis-header d-flex justify-content-between align-items-center">
                                                                        <span class="heading font-weight-light">Trade Performance Analysis</span>
                                                                        <span class="checkboxes  d-flex flex-wrap justify-content-end">
                                                                        <span class="custom-control custom-checkbox form-check ">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input adjusted"
                                                                                   id="adjusted" data-name="adjusted"
                                                                                   name="adjusted">
                                                                            <label class="custom-control-label"
                                                                                   for="adjusted"> Show Adjusted </label>
                                                                        </span>
                                                                        <span class="custom-control custom-checkbox form-check ml-2">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input weighted"
                                                                                   id="weighted" data-name="weighted"
                                                                                   name="weighted">
                                                                            <label class="custom-control-label"
                                                                                   for="weighted"> Show Weighted </label>
                                                                        </span>
                                                                    </span>
                                                                    </div>
                                                                    <div class="return-analysis-purchase d-flex align-items-center justify-content-between flex-column flex-md-row">
                                                                        <div class="return-analysis-box return-analysis-buys w-lg-50 mr-lg-2 mb-sm-0 mb-0">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered text-center my-0">
                                                                                    <tr class="bg-white ">
                                                                                        <th rowspan="2"
                                                                                            class="font-weight-bold"
                                                                                            style="background-color: #E1E9F0;"
                                                                                            title="Average Return Across all Discretionary Buys">
                                                                                            <div class="label-text">
                                                                                                <span class="return-buy">BUYS</span>
                                                                                            </div>
                                                                                            <div class="pie-wrapper c-buy">
                                                                                                <div class="arc"
                                                                                                     data-value="23"></div>
                                                                                                <span class="score">23</span>
                                                                                            </div>

                                                                                        </th>
                                                                                        <th class="sm-heading font-weight-bold"> <span> 6 MONTH
                                                                                            <span class="val-abs val-abs-buy">ABSOLUTE </span>RETURN </span>
                                                                                        </th>
                                                                                        <th class="sm-heading font-weight-bold">
                                                                                            <span> TRADES </span></th>
                                                                                    </tr>
                                                                                    <tr class="bg-white">
                                                                                        <td class="abs-return text-success font-weight-light">
                                                                                            <span>15.6%</span> <i
                                                                                                    class="fas fa-thumbs-up"
                                                                                                    aria-hidden="true"></i>
                                                                                        </td>
                                                                                        <td>2</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="return-analysis-box return-analysis-sells w-lg-50">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered text-center mb-0">
                                                                                    <tr class="bg-white ">
                                                                                        <th rowspan="2"
                                                                                            class="font-weight-bold"
                                                                                            style="background-color: #E1E9F0;"
                                                                                            title="Average Return Across all Discretionary Sells as if Stock Sold short, Shown in Green where stock has fallen following sale">
                                                                                            <div class="label-text">
                                                                                                <span class="return-sell">
                                                                                               SELLS<!-- &nbsp;<i-->
                                                                                                    <!--                                                                                                            class="fas fa-arrow-down"-->
                                                                                                    <!--                                                                                                            aria-hidden="true"></i>-->
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="pie-wrapper c-sell">
                                                                                                <div class="arc"
                                                                                                     data-value="40"></div>
                                                                                                <span class="score">40</span>
                                                                                            </div>
                                                                                        </th>
                                                                                        <th class="sm-heading font-weight-bold">
                                                                                            6 MONTH
                                                                                            <span class="val-abs val-abs-sell">ABSOLUTE </span>
                                                                                            RETURN
                                                                                        </th>
                                                                                        <th class="sm-heading font-weight-bold">
                                                                                            TRADES
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr class="bg-white">
                                                                                        <td class="abs-return text-danger font-weight-light">
                                                                                            -1.2% <i
                                                                                                    class="fas fa-thumbs-down"
                                                                                                    aria-hidden="true"></i>
                                                                                        </td>
                                                                                        <td>4</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="return-analysis-block return-analysis-right w-100 w-lg-15 "
                                                                     style="margin-top: 20px;">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered text-center mb-0">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="font-weight-bold">HOLDING
                                                                                </th>
                                                                                <th class="font-weight-bold">VALUE</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>50,000</td>
                                                                                <td>&#163;51,048</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row trading-section bg-white">
                                        <div class="col-lg-6">
                                            <div class="trading-block trading-summary d-flex flex-column h-100">
                                                <div class="heading-sec" style="display: none">
                                                    <div class="d-inline-flex align-items-center justify-content-between  w-100 ">
                                                        <h4 class="sum-header heading font-weight-light pb-1">Trade
                                                            Summary</h4>
                                                    </div>
                                                </div>
                                                <div id="trade-summary"
                                                     class="table-responsive summary-wrapper"
                                                     style="max-height: 200px; overflow: hidden;">
                                                    <table class="table table-hover bg-white mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th class="font-weight-bold text-center">Period</th>
                                                            <th>&nbsp;</th>
                                                            <th class="font-weight-bold text-center pl-4">Amounts &amp;
                                                                Proceeds
                                                            </th>
                                                            <th class="font-weight-bold text-center pl-4">Holdings</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Aug-19</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">25,000 @ 221</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>829,620</span>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">382,970</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+28%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>May-18</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">67,952 @ 330</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>452,600</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">25,586</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-19%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Feb-17</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">15,150,000 @ $24.49</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>22,701,000</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">3,371,111</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+36%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Sep-16</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">45,000 @ 434</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>1,484,999</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">95,331</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-49%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Aug-19</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">25,000 @ 221</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>829,620</span>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">382,970</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+28%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>May-18</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">67,952 @ 330</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>452,600</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">25,586</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-19%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Feb-17</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">1,150,000 @ 197</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>22,701,000</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">3,371,111</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+36%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Sep-16</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">45,000 @ 434</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>1,484,999</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">95,331</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-49%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Aug-19</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">25,000 @ 221</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>829,620</span>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">382,970</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+28%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>May-18</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">67,952 @ 330</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>452,600</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">25,586</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-19%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Feb-17</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">15,150,000 @ $24.49</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>22,701,000</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">3,371,111</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+36%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Sep-16</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">45,000 @ 434</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>1,484,999</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">95,331</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-49%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Aug-19</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">25,000 @ 221</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>829,620</span>
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">382,970</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+28%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>May-18</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">67,952 @ 330</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>452,600</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">25,586</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-19%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Feb-17</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">BUY</span> <i
                                                                            class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">1,150,000 @ 197</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>22,701,000</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">3,371,111</span>&nbsp;<span
                                                                            class="trend text-success text-left w-100 ml-2 ">+36%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span>Sep-16</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="font-weight-bold mr-1">SELL</span> <i
                                                                            class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                                                            aria-hidden="true"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="trdsum text-right w-100 ">45,000 @ 434</span>&nbsp;<span
                                                                            class="w-100 text-left ml-3"><span
                                                                                class="currency-sign">&#163;</span>1,484,999</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <span class="w-100 text-right trdsum2">95,331</span>&nbsp;<span
                                                                            class="trend text-danger text-left w-100 ml-2 ">-49%</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="sum-footer pt-1 mt-auto" style="display: none">
                                                    <div class="sum-note font-italic">Discretionary Trades Summarised by
                                                        Month
                                                    </div>
                                                    <div class="sum-link">
                                                        <a class="linkHistory"
                                                           href="#trade_history" title="Trade History">See all William
                                                            Frairs trades in Balfour Beatty</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="trading-block advance-chart d-flex flex-column h-100">
                                                <div class="chart-header d-inline-flex align-items-center justify-content-between">
                                                    <div class="heading-sec w-100" style="display: none">
                                                        <div class="d-inline-flex align-items-center justify-content-between w-100 ">
                                                            <!--                                                            <h4 class="heading font-weight-light pb-1 pr-2 align-items-center text-nowrap">-->
                                                            <!--                                                                Advance Chart</h4>-->
                                                            <div class="ac-pricing font-weight-light d-inline-flex align-items-center justify-content-between w-100 ">
                                                                <div id="time-selections" class=" align-items-end "
                                                                     style="margin-top: -3px; ">
                                                                    <ul id="time-options"
                                                                        class="chart-duration d-inline-flex align-items-center justify-content-center">
                                                                        <li class="active non-selected-range">1yr</li>
                                                                        <li class="non-selected-range">3yr</li>
                                                                        <li class="non-selected-range">5yr</li>
                                                                        <li class="non-selected-range">all</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="d-flex acl-pricing justify-content-end align-items-center mb-1">
                                                                    <h4 class="heading font-weight-light align-items-center pr-1">
                                                                        Latest Price: USD 3.82 </h4>
                                                                    <img src="assets/images/flag-uk.png"
                                                                         alt="Country Flag">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="summary-chart-advance" class="summary-wrapper w-100 h-100"
                                                     style="max-height: 200px;">
                                                    <div id="advance-chart" class="pie-table"
                                                         style="max-height: 200px;"></div>
                                                    <div id="advance-chart-sec" class="pie-table advance-chart-sec mt-2"
                                                         style="display: none;"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Accordion card -->

                    </div>
                    <!-- Accordion wrapper -->
                </div>

            </div>
        </div>

        <div class="row chart-section mt-2">
            <!--        <div class="offset-md-1"></div>-->
            <!--        <div class="col-md-10">-->
            <div class="col-12">

                <div class="my-3">
                    <div class="collapsible-block my-3 py-2">
                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionInvestmentTimeline" role="tablist"
                             aria-multiselectable="true">

                            <!-- Accordion card -->
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header px-2 py-0" role="tab"
                                     id="headingInvestmentTimeline">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="toggle-section d-inline-flex">
                                                <a class="director-toggler position-relative" data-toggle="collapse"
                                                   data-parent="#accordionInvestmentTimeline"
                                                   href="#collapseInvestmentTimeline" aria-expanded="false"
                                                   aria-controls="collapseInvestmentTimeline">
                                                    <i class="fas fa-plus-square mr-2"></i>
                                                </a>
                                                </a>
                                                <h5 class="mb-0 heading border-bottom brd-custom text-truncate d-inline-block">
                                                    <span class="heading-title font-weight-bold ">Investment Timeline</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                        </div>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div id="collapseInvestmentTimeline" class="collapse" role="tabpanel"
                                     aria-labelledby="headingInvestmentTimeline"
                                     data-parent="#accordionInvestmentTimeline">
                                    <div class="card-body py-2">

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="collapsible-block my-3 py-2">
                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionTradeHistory" role="tablist"
                             aria-multiselectable="true">

                            <!-- Accordion card -->
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header px-2 py-0" role="tab"
                                     id="headingTradeHistory">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="toggle-section d-inline-flex">
                                                <a class="director-toggler position-relative" data-toggle="collapse"
                                                   data-parent="#accordionTradeHistory"
                                                   href="#collapseTradeHistory" aria-expanded="false"
                                                   aria-controls="collapseTradeHistory">
                                                    <i class="fas fa-plus-square mr-2"></i>
                                                </a>
                                                </a>
                                                <h5 class="mb-0 heading border-bottom brd-custom text-truncate d-inline-block">
                                                    <span class="heading-title font-weight-bold ">Trade History <span>(All stocks)</span></span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                        </div>
                                    </div>
                                </div>

                                <!-- Card body -->
                                <div id="collapseTradeHistory" class="collapse" role="tabpanel"
                                     aria-labelledby="headingTradeHistory"
                                     data-parent="#accordionTradeHistory">
                                    <div class="card-body py-2">

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="row investment-timeline my-3">
                    <div class="col-12">
                        <div class="chart-block-com investment-block p-3 mt-0">
                            <div class="chart-box">
                                <div class="chart-header d-flex justify-content-between align-items-start align-items-sm-center flex-column flex-sm-row">
                                    <h4 class="heading font-weight-light">Investment Timeline</h4>
                                    <div class="switcher-block ml-auto mr-auto ml-sm-0 mr-sm-0">
                                        <div class="investment-switch switcher-box d-flex justify-content-sm-end justify-content-between align-items-center ">
                                            <div class="switch">
                                                <label class="mb-0 d-flex justify-content-between align-items-center"> <span
                                                            class="switchStateL font-weight-bold">Discretionary</span>
                                                    <input type="checkbox"> <span class="lever"></span> <span
                                                            class="switchStateR">All Trades</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative mt-4 mt-md-0">
                                    <div class="position-absolute index-element d-flex align-items-center justify-content-center flex-wrap flex-md-row flex-md-nowrap">
                                        <div id="share-price"
                                             class="trade-history-filter w-100 w-md-50 d-flex align-items-center pr-2">
                                            <span class="share-filter-label pr-1 text-nowrap"
                                                  title="">Share Price: </span>
                                            <span class="share-select custom-select-option">
                                                <select class=" mdb-select md-form colorful-select dropdown-primary"
                                                        id="share-price-select" title="">
                                                    <option value="" disabled selected>Choose Order</option>
                                                    <option code="asc" value="1">Company Name: A-Z</option>
                                                    <option code="desc" value="1">Company Name: Z-A</option>
                                                    <option code="asc" value="2">Director Name: A-Z</option>
                                                    <option code="desc" value="2">Director Name: Z-A</option>
                                                    <option code="desc" value="4" selected="selected">Transaction Date: New - Old</option>
                                                    <option code="asc" value="4">Transaction Date: Old - New</option>
                                                    <option code="asc" value="5">Trade Type: A-Z</option>
                                                    <option code="desc" value="5">Trade Type: Z-A</option>
                                                    <option code="asc"
                                                            value="6">Amount of Transaction: Low - High</option>
                                                    <option code="desc"
                                                            value="6">Amount of Transaction: High - Low</option>
                                                    <option code="asc"
                                                            value="7">Price of Transaction: Low - High</option>
                                                    <option code="desc"
                                                            value="7">Price of Transaction: High - Low</option>
                                                    <option code="asc"
                                                            value="8">Value of Transaction: Low - High</option>
                                                    <option code="desc"
                                                            value="8">Value of Transaction: High - Low</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="w-50 w-md-25 text-center text-md-left">
                                            <div class="md-form my-0 ">
                                                <!--The "from" Date Picker -->
                                                <input placeholder="From" type="date" id="fromDate" name="fromDate"
                                                       class="form-control datepicker my-0 border-bottom-0">
                                                <label class="sr-only" for="fromDate">From</label>
                                            </div>
                                        </div>
                                        <div class="w-50 w-md-25 text-center text-md-left">
                                            <div class="md-form my-0 ">
                                                <!--The "from" Date Picker -->
                                                <input placeholder="From" type="date" id="toDate"
                                                       class="form-control datepicker my-0 border-bottom-0">
                                                <label class="sr-only" for="toDate">Start Date</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="investment-chart-table" class="investment-timeline-table mt-2"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="trade_history" class="row trade-history mb-3">
                    <div class="col-12">
                        <div class="chart-block-com trade-block mt-0 p-3">
                            <div class="chart-box">
                                <div class="chart-header d-flex justify-content-between align-items-center flex-column flex-lg-row">
                                    <h4 class="heading font-weight-light w-100 w-lg-50 text-left">Trade History <span>(All stocks)</span>
                                    </h4>
                                    <div class="switcher-block d-flex flex-row justify-content-sm-end justify-content-between align-items-center w-100 w-lg-50">
                                        <div class="w-100 text-center">
                                            <span class="font-weight-bold head">TRADES</span>
                                            <div class="disall-switch switcher-box d-flex justify-content-center align-items-center w-100">
                                                <div class="switch w-100">
                                                    <label class="mb-0 w-100 d-flex justify-content-between align-items-center">
                                                        <span class="switchStateL text-right font-weight-bold">Discretionary</span>
                                                        <input type="checkbox"> <span class="lever"></span> <span
                                                                class="switchStateR text-left">All</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100 text-center">
                                            <span class="font-weight-bold head">VIEW</span>
                                            <div class="sumtrans-switch switcher-box d-flex justify-content-center align-items-center w-100">
                                                <div class="switch w-100">
                                                    <label class="mb-0 w-100 d-flex justify-content-between align-items-center">
                                                        <span class="switchStateL font-weight-bold">Transaction</span>
                                                        <input type="checkbox"> <span class="lever"></span> <span
                                                                class="switchStateR">Summary</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rotate-img rounded-bottom align-self-end">
                                            <i class="far fa-file-excel fa-2x infop1" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="trade-history-filters flex-wrap d-flex flex-sm-row align-items-sm-center justify-content-sm-between w-100">
                                    <div class="trade-filter w-100 d-flex flex-wrap align-items-center">
                                        <div class="w-100 mb-1 d-flex align-items-center flex-wrap ">
                                            <div id="sorts"
                                                 class="trade-history-filter w-50 w-lg-25 d-flex align-items-center pr-2">
                                                <span class="filter-label" title="">Sort: </span>
                                                <span class="sort-select custom-select-option">
                                            <select class=" mdb-select md-form colorful-select dropdown-primary"
                                                    id="inlineFormCustomSelect1" title="">
                                                <option value="" disabled selected>Choose Order</option>
                                                <option code="asc" value="1">Company Name: A-Z</option>
                                                <option code="desc" value="1">Company Name: Z-A</option>
                                                <option code="asc" value="2">Director Name: A-Z</option>
                                                <option code="desc" value="2">Director Name: Z-A</option>
                                                <option code="desc" value="4" selected="selected">Transaction Date: New - Old</option>
                                                <option code="asc" value="4">Transaction Date: Old - New</option>
                                                <option code="asc" value="5">Trade Type: A-Z</option>
                                                <option code="desc" value="5">Trade Type: Z-A</option>
                                                <option code="asc" value="6">Amount of Transaction: Low - High</option>
                                                <option code="desc" value="6">Amount of Transaction: High - Low</option>
                                                <option code="asc" value="7">Price of Transaction: Low - High</option>
                                                <option code="desc" value="7">Price of Transaction: High - Low</option>
                                                <option code="asc" value="8">Value of Transaction: Low - High</option>
                                                <option code="desc" value="8">Value of Transaction: High - Low</option>
                                                <!-- <option code='asc' value='9'>Change : Low - High</option>
                                                     <option code='desc' value='9'>Change: High - Low</option>-->
                                                <option code="asc" value="24">Change in Holding: Low - High</option>
                                                <option code="desc" value="24">Change in Holding: High - Low</option>
                                                <!-- <option code='asc' value='28'>TSI: Low - High</option>
                                                <option code='desc' value='28'>TSI: High - Low</option>-->
                                            </select>
                                        </span>
                                            </div>
                                            <div id="filter"
                                                 class="trade-history-filter w-50 w-lg-25 d-flex align-items-center pr-2">
                                                <span class="filter-label">Display: </span>
                                                <div class="filter-select custom-select-option">
                                                    <label class="sr-only" for="filter-select">Filter</label>
                                                    <select id="filter-select" multiple="multiple" title=""
                                                            class="mdb-select md-form basic-multiple-select">
                                                        <option value="" disabled selected>Choose Fields to Display
                                                        </option>
                                                        <option value="Title">Title</option>
                                                        <option value="Transaction Date">Transaction Date</option>
                                                        <option value="Transaction Amount">Transaction Amount</option>
                                                        <option value="Value">Value</option>
                                                        <option value="Note">Note</option>
                                                        <option value="Source">Source</option>
                                                        <option value="Cluster Trade">Cluster Trade</option>
                                                        <option value="Signal Note">Signal Note</option>
                                                        <option value="1 Mon">1 Mon</option>
                                                        <option value="Adj 1 Mon">Adj 1 Mon</option>
                                                        <option value="6 Mon">6 Mon</option>
                                                        <option value="Adj 6 Mon">Adj 6 Mon</option>
                                                        <option value="9 Mon">9 Mon</option>
                                                        <option value="Adj 9 Mon">Adj 9 Mon</option>
                                                        <option value="1 Year">1 Year</option>
                                                        <option value="Adj 1 Year">Adj 1 Year</option>
                                                        <option value="18 Mon">18 Mon</option>
                                                        <option value="Adj 18 Mon">Adj 18 Mon</option>
                                                        <option value="2 Year">2 Year</option>
                                                        <option value="Adj 2 Year">Adj 2 Year</option>
                                                        <option value="Holding Change">Holding Change</option>
                                                        <option value="Holding Sii">Holding Sii</option>
                                                        <option value="Conviction Rating">Conviction Rating</option>
                                                        <option value="Salary">Salary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="scroll-wrapper1"
                                                 class="scroll-wrapper1 dtTableScroller mt-2 mb-1 mt-lg-0 mb-lg-0 w-100 w-lg-50 d-flex justify-content-center align-items-center pl-2">
                                                <div class="scroller w-100"></div>
                                            </div>
                                        </div>
                                        <div id="trades-meta" class="w-55">
                                    <span class="total-trades-all hidden-summary h-100 w-100 flex-wrap d-flex text-wrap align-items-center"
                                          title="">
                                        <span class="trade-selected-count-all"
                                              title="Aggregates Selected Trades using Tick boxes.">11 Trades - <span
                                                    id="all_trades">all selected</span><b>:</b> </span>
                                        <span class="trade-selected-amount-all" style="" title="">
                                            <span class="shares-all" title="">
                                                <span class="net_sum"
                                                      title="<span style=&quot;&quot;>Acquired: 273,142 [+$1,467,127]</span><br><span style=&quot;&quot;>Disposed: 187,142 [+$1,321,961]</span>"> Net 86,000 shares acquired <span
                                                            title="">[+$145,166]</span>
                                                </span>
                                                <span style="display:none"
                                                      class="chart_data_points">[[1478649600000,4.05]]comp6622825-489739,||series[[1485734400000,3.14],[1485475200000,3.18],[1485216000000,3.22],[1484784000000,3.18]]comp6688879-489739,||6686912-489739,||6683802-489739,||6680637-489739,||series[[1513296000000,7.81]]comp6972054-111259,||series[]compseries[]compseries[[1512432000000,7.9]]comp6961735,6961733,6961734||series[[1516060800000,12.93]]comp7001792,7001793||series[]compseries[]comp</span>
                                            </span>
                                            <span class="total-selected-trades" title="" style="display:none">
                                                <span class="trade-selected-count" title="">11 Trades Selected: </span>
                                                <span class="trade-selected-amount buy-color" title=""> &nbsp;Net 86,000 shares acquired <span
                                                            class="buycolor">[+$145,166]</span>
                                                </span>
                                                <span class="notrades" style="display:none;">No Trades Selected</span>
                                            </span>
                                        </span>
                                    </span>
                                        </div>

                                    </div>
                                    <div id="scroll-wrapper2"
                                         class="trade-history-table w-100 mt-2 scroll-wrapper2 Flipped scrollbar">
                                        <table id="example"
                                               class="display trade-table w-100">
                                            <thead>
                                            <tr id="group-heading">
                                                <th class="ui-state-default" rowspan="2" colspan="1" title="">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </th>
                                                <th id="group-insider" class="ui-state-default position-relative"
                                                    rowspan="1" colspan="2" title="">
                                                    <span class="position-absolute ">Insider</span>
                                                </th>
                                                <th id="group-tdetails" class="ui-state-default position-relative"
                                                    rowspan="1" colspan="10" title="">
                                                    <span class="position-absolute">Transaction&nbsp;Details</span>
                                                </th>
                                                <th id="group-post-trade" class="ui-state-default" rowspan="1"
                                                    colspan="12" title=""><span>Returns</span>
                                                </th>
                                                <th id="group-holding" class="ui-state-default" rowspan="1" colspan="3"
                                                    title=""><span>Holding</span>
                                                </th>
                                                <th id="group-analysis" class="ui-state-default" colspan="2" rowspan="1"
                                                    title=""><span>Analysis</span>
                                                </th>
                                            </tr>
                                            <tr id="lower-head">
                                                <!--                                            <th class="checkbox_list sorting_disabled ui-state-default sorting_asc dt-border-lr"-->
                                                <!--                                                rowspan="1" colspan="1" title="">-->
                                                <!--                                                <div class="DataTables_sort_wrapper"></div>-->
                                                <!--                                            </th>-->
                                                <th id="director-header"
                                                    class="persons group-insider sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1" aria-label="Director">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Director</span><span
                                                                class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th id="title-header"
                                                    class="title group-insider sorting_disabled ui-state-default  dt-border-lr"
                                                    rowspan="1" colspan="1" aria-label="Title">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Title</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="tdate group-tdetails sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1"
                                                    aria-label="Transaction Date">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible" title="Transaction Date">Transaction&nbsp;Date</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="type group-tdetails sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1" aria-label="Type">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible" title="Transaction type">Type</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="amount amount-header group-tdetails sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1" aria-label="Amount">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Amount</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="at at-header group-tdetails sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1" aria-label="">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible"></span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="price group-tdetails sorting_disabled ui-state-default"
                                                    title="Price of Trade" rowspan="1"
                                                    colspan="1" aria-label="Price">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Price</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="note group-tdetails sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1" aria-label="Note">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Note</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="source group-tdetails sorting_disabled ui-state-default "
                                                    rowspan="1" colspan="1" aria-label="Source">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Source</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="tblTransaction-isCluster group-tdetails sorting_disabled ui-state-default"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Cluster Trade">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible">Cluster&nbsp;Trade</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="tblsignal-SignalReason group-tdetails sorting_disabled ui-state-default  "
                                                    rowspan="1" colspan="1" aria-label="">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span class="invisible"></span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th title="numeric-comma" rowspan="1"
                                                    colspan="1"
                                                    class="value value-header visibled group-tdetails sorting_disabled ui-state-default dt-border-lr"
                                                    aria-label="Currency can be changedin settings&quot;>Value £">
                                                    <div class="DataTables_sort_wrapper">
                                                    <span class="invisible"
                                                          title="Value of Transaction.<BR>Currency can be changed<br>in settings">Value&nbsp;£</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="1-mo visibled group-post-trade">
                                                    <span>1&nbsp;Mo</span>
                                                </th>
                                                <th class="adj-1-mo group-post-trade sorting_disabled ui-state-default"
                                                    title="">
                                                    <span>Adj&nbsp;1&nbsp;Mo</span>
                                                </th>
                                                <th class="6-mo visibled group-post-trade sorting_disabled ui-state-default"
                                                    title="">
                                                    <span>6&nbsp;Mo</span>
                                                </th>
                                                <th class="adj-6-mo group-post-trade sorting_disabled ui-state-default">
                                                    <span>Adj&nbsp;6&nbsp;Mo</span>
                                                </th>
                                                <th class="9-mo group-post-trade sorting_disabled ui-state-default">
                                                    <span>9&nbsp;Mo</span>
                                                </th>
                                                <th class="adj-9-mo group-post-trade sorting_disabled ui-state-default">
                                                    <span>Adj&nbsp;9&nbsp;Mo</span>
                                                </th>
                                                <th class="1-year group-post-trade sorting_disabled ui-state-default">
                                                    <span>1&nbsp;Year</span>
                                                </th>
                                                <th class="adj-1-year group-post-trade sorting_disabled ui-state-default"
                                                    title="">
                                                    <span>Adj&nbsp;1&nbsp;Year</span>
                                                </th>
                                                <th class="18-mo group-post-trade sorting_disabled ui-state-default"
                                                    title="">
                                                    <span>18&nbsp;Mo</span>
                                                </th>
                                                <th class="adj-18-mo group-post-trade sorting_disabled ui-state-default"
                                                    title="">
                                                    <span>Adj&nbsp;18&nbsp;Mo</span>
                                                </th>
                                                <th class="2-year group-post-trade sorting_disabled ui-state-default"
                                                    title="">
                                                    <span>2&nbsp;Years</span>
                                                </th>
                                                <th class="adj-2-year group-post-trade sorting_disabled ui-state-default dt-border-lr"
                                                    title="">
                                                    <span>Adj&nbsp;2&nbsp;Years</span>
                                                </th>
                                                <th class="holding holding-header group-holding sorting_disabled ui-state-default"
                                                    title="After this transaction" rowspan="1"
                                                    colspan="1" aria-label="Amount">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span>Amount</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="holding_change group-holding sorting_disabled ui-state-default"
                                                    id="holding_change" title="After this transaction" rowspan="1"
                                                    colspan="1" aria-label="Change">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span>Change</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th title="% of Shares on Issue held, not displayed below 0.1%"
                                                    class="sii-col group-holding sorting_disabled ui-state-default dt-border-lr"
                                                    id="sii-col" rowspan="1" colspan="1" aria-label="%Sii">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span>%Sii</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="rating group-analysis sorting_disabled ui-state-default"
                                                    title="Based on Trade Type, change in holding, and value."
                                                    rowspan="1" colspan="1" aria-label="Conviction">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span>Conviction</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                                <th class="salary-data group-analysis sorting_disabled ui-state-default"
                                                    title="Transaction Value as % of latest annual salary"
                                                    id="salary-header" rowspan="1" colspan="1" aria-label="%Salary">
                                                    <div class="DataTables_sort_wrapper">
                                                        <span>%Salary</span>
                                                        <span class="DataTables_sort_icon"></span>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 01-May-19<br/> Transacted: 01-May-19 ">01-May-19</span>
                                                </td>
                                                <td class=" type"><span class="buysell-span sell_type"><b
                                                                title=" Sell ">Sell</b> <span
                                                                class="fas fa-arrow-alt-circle-down" title="Sell"
                                                                style="vertical-align:middle"></span></span>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_down" title="Ordinary Shares ">25,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.15<br/>Latest Close Price: GBP 5.08</span> ">5.15</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a href="http://dev3.smartinsider.com/app/members/link?tid=8141500"
                                                       target="blank" class="">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_down"
                                                      title="<b>£128,750</b><br><b>$167,412</b><BR><b>€149,311 </b><br/>Display currency can be changed in Account Settings ">$167,412</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"></td>
                                                <td class="adj-1-mo hiddem"></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding"><span
                                                            title=" Holding changed 0%<br>Holds 59.23% of <BR>Shares on Issue ">16,802,697</span>
                                                </td>
                                                <td class="holding_change visibled">0%</td>
                                                <td class="sii-col visibled">59.23%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 26-Apr-19<br/> Transacted: 26-Apr-19 ">26-Apr-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle"></span>
                                                </span>
                                                </td>
                                                <td class="amount visibled">
                                                <span class="amount_down"
                                                      title="Ordinary Shares ">25,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.13<br/>Latest Close Price: GBP 5.08</span> ">5.13</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a href="http://dev3.smartinsider.com/app/members/link?tid=8138202"
                                                       target="blank" class="">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_down"
                                                      title="<b>£128,125</b><br><b>$164,993</b><BR><b>€148,196 </b><br/>Display currency can be changed in Account Settings ">$164,993</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"></td>
                                                <td class="adj-1-mo hiddem"></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding"><span
                                                            title=" Holding changed 0%<br>Holds 59.32% of <BR>Shares on Issue ">16,827,697</span>
                                                </td>
                                                <td class="holding_change visibled">0%</td>
                                                <td class="sii-col visibled">59.32%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=16527&amp;c=10002"
                                                       class="persontooltip  personname" dir="546998" id="16527">David
                                                        Harris</a>
                                                </td>
                                                <td class="title visibled">
                                                    <span title="Non-Executive:Chairman<br/>(Chairman) ">N:Chair</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 24-Apr-19<br/> Transacted: 18-Apr-19 ">18-Apr-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span buy_type"><b
                                                            title=" Buy ">Buy</b> <span
                                                            class="fas fa-arrow-alt-circle-up" title="Buy"
                                                            style="vertical-align:middle"></span>
                                                </span>
                                                </td>
                                                <td class="amount visibled">
                                                <span class="amount_up"
                                                      title="Ordinary Shares ">2,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.06<br/>Latest Close Price: GBP 5.08</span> ">5.06</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a target="blank" class=""
                                                       href="http://dev3.smartinsider.com/app/members/link?tid=8136082">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_up"
                                                      title="<b>£10,120</b><br><b>$13,167</b><BR><b>€11,700 </b><br/>Display currency can be changed in Account Settings ">$13,167</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"></td>
                                                <td class="adj-1-mo hiddem"></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding">
                                                    <span title=" Holding changed 20%<br>Holds 0.04% of <BR>Shares on Issue ">12,000</span>
                                                </td>
                                                <td class="holding_change visibled">20%</td>
                                                <td class="sii-col visibled">0.04%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a class="persontooltip  personname" dir="839764" id="458750"
                                                       href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                    <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'mentMgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 15-Apr-19<br/> Transacted: 15-Apr-19 ">15-Apr-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle;"></span>
                                                </span>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_down" title="Ordinary Shares ">25,000</span>
                                                </td>
                                                <td class=" at">
                                                    <span class="at"> @</span>
                                                </td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.00<br/>Latest Close Price: GBP 5.08</span> ">5.00</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a href="" target="blank" class="">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_down"
                                                      title="<b>£125,000</b><br><b>$163,511</b><BR><b>€144,546 </b><br/>Display currency can be changed in Account Settings ">$163,511</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"></td>
                                                <td class="adj-1-mo hiddem"></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding">
                                                    <span title=" Holding changed 0%<br>Holds 59.4% of <BR>Shares on Issue ">16,852,697</span>
                                                </td>
                                                <td class="holding_change visibled">0%</td>
                                                <td class="sii-col visibled">59.4%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 41 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 12-Apr-19<br/> Transacted: 12-Apr-19 ">12-Apr-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle;"></span>
                                                </span>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_down" title="Ordinary Shares ">50,000</span>
                                                </td>
                                                <td class=" at">
                                                    <span class="at"> @</span>
                                                </td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.94<br/>Latest Close Price: GBP 5.08</span> ">4.94</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a href="http://dev3.smartinsider.com/app/members/link?tid=8128877"
                                                       target="blank" class="">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled">
                                                <span class="fa fa-users" id="8141491"
                                                      title="Transaction Detail - Cluster Trade"></span>
                                                </td>
                                                <td class="tblsignal-SignalReason visibled">
                                                    <span class="fas fa-folder-open infop1" title=""></span>
                                                </td>
                                                <td class="value visibled">
                                                <span class="value_down"
                                                      title="<b>£246,875</b><br><b>$322,854</b><BR><b>€285,437 </b><br/>Display currency can be changed in Account Settings ">$322,854</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"></td>
                                                <td class="adj-1-mo hiddem"></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding">
                                                    <span title=" Holding changed 0%<br>Holds 59.49% of <BR>Shares on Issue ">16,877,697</span>
                                                </td>
                                                <td class="holding_change visibled">0%</td>
                                                <td class="sii-col visibled">59.49%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 48 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 48 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 48 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 48 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 48 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span
                                                        title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 05-Apr-19<br/> Transacted: 04-Apr-19 ">04-Apr-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle"></span>
                                                </span>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_down" title="Ordinary Shares ">20,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.85<br/>Latest Close Price: GBP 5.08</span> ">4.85</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a target="blank"
                                                       href="http://dev3.smartinsider.com/app/members/link?tid=8123919"
                                                       class="">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled "></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_down"
                                                      title="<b>£97,000</b><br><b>$127,558</b><BR><b>€113,598 </b><br/>Display currency can be changed in Account Settings ">$127,558</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"></td>
                                                <td class="adj-1-mo hiddem"></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding">
                                                    <span title=" Holding changed 0%<br>Holds 59.67% of <BR>Shares on Issue ">16,927,697</span>
                                                </td>
                                                <td class="holding_change visibled">0%</td>
                                                <td class="sii-col visibled">59.67%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 39 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 39 out of 100"
                                                          class="fa fa-star star1 starm active"></span>
                                                    <span title="Significance 39 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 39 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 39 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled"><span
                                                            title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span></td>
                                                <td class="tdate visibled"><span
                                                            title="Announced: 02-Apr-19<br/> Transacted: 02-Apr-19 ">02-Apr-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle"></span></span>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_down" title="Ordinary Shares ">10,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.91<br/>Latest Close Price: GBP 5.08</span> ">4.91</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a target="blank"
                                                       href="http://dev3.smartinsider.com/app/members/link?tid=8117322"
                                                       class="">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_down"
                                                      title="<b>£49,100</b><br><b>$64,324</b><BR><b>€57,263 </b><br/>Display currency can be changed in Account Settings ">$64,324</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled">
                                                    <span style="color:#6EBE01">+6%</span>
                                                </td>
                                                <td class="adj-1-mo hiddem">
                                                    <span style="color:#6EBE01">+5%</span>
                                                </td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding">
                                                    <span title=" Holding changed 0%<br>Holds 59.74% of <BR>Shares on Issue ">16,947,697</span>
                                                </td>
                                                <td class="holding_change visibled">0%</td>
                                                <td class="sii-col visibled">59.74%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 36 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 36 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 36 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 36 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                    <span title="Significance 36 out of 100"
                                                          class="fa fa-star star1 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled"><span
                                                            title="Announced: 12-Feb-19<br/> Transacted: 12-Feb-19 ">12-Feb-19</span>
                                                </td>
                                                <td class=" type"><b title=" Subscribe to new<br>issue ">Subs</b></td>
                                                <td class="amount visibled">
                                                <span class="amount_up"
                                                      title="Ordinary Shares ">762,363</span>
                                                </td>
                                                <td class=" at">
                                                    <span class="at"> @</span>
                                                </td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.00<br/>Latest Close Price: GBP 5.08</span> ">5.00</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled">
                                                    <a target="blank" class=""
                                                       href="http://dev3.smartinsider.com/app/members/link?tid=8046696">
                                                    <span title="Show Source Announcement"
                                                          class="far fa-file-alt rotateY"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled">
                                                <span class="value_up"
                                                      title="<b>£3,811,053</b><br><b>$4,923,452</b><BR><b>€4,351,807 </b><br/>Display currency can be changed in Account Settings ">$4,923,452</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"><span style="color:#F44236">-5%</span>
                                                </td>
                                                <td class="adj-1-mo hiddem"><span style="color:#F44236">-5%</span></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding"><span
                                                            title=" Holding changed 5%<br>Holds 59.77% of <BR>Shares on Issue ">16,957,697</span>
                                                </td>
                                                <td class="holding_change visibled">5%</td>
                                                <td class="sii-col visibled">59.77%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm active"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm active"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm active"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm active"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm active"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 06-Feb-19<br/> Transacted: 06-Feb-19 ">06-Feb-19</span>
                                                </td>
                                                <td class=" type">
                                                    <b title=" Subscribe to new<br>issue ">Subs</b>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_up" title="Ordinary Shares ">762,363</span>
                                                </td>
                                                <td class=" at">
                                                    <span class="at"> @</span>
                                                </td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.00<br/>Latest Close Price: GBP 5.08</span> ">5.00</span>
                                                </td>
                                                <td class="note visibled">
                                                <span title="By M&amp;M Investment Company Plc - A Company Controlled By Director">By
                                                    M&amp;M Investment Compa...</span>
                                                </td>
                                                <td class="source visibled">
                                                    <a target="blank" class=""
                                                       href="http://dev3.smartinsider.com/app/members/link?tid=8040501">
                                                    <span title="Show Source Announcement<br>Shares traded were held beneficially but held Indirectly"
                                                          class="far fa-file-alt rotateY txt-orange"></span>
                                                    </a>
                                                </td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled"><span class="value_up"
                                                                                 title="<b>£3,811,053</b><br><b>$4,958,846</b><BR><b>€4,341,813 </b><br/>Display currency can be changed in Account Settings ">$4,958,846</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"><span style="color:#F44236">-5%</span>
                                                </td>
                                                <td class="adj-1-mo hiddem"><span style="color:#F44236">-5%</span></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding"><span
                                                            title=" Holding changed 5%<br>Holds 58.66% of <BR>Shares on Issue ">16,195,334</span>
                                                </td>
                                                <td class="holding_change visibled">5%</td>
                                                <td class="sii-col visibled">58.66%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm"></span>
                                                    <span title="Significance 52 out of 100"
                                                          class="fa fa-star star2 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 28-Jan-19<br/> Transacted: 28-Jan-19 ">28-Jan-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle"></span>
                                                </span>
                                                </td>
                                                <td class="amount visibled">
                                                    <span class="amount_down" title="Ordinary Shares ">200,000</span>
                                                </td>
                                                <td class=" at">
                                                    <span class="at"> @</span>
                                                </td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.41<br/>Latest Close Price: GBP 5.08</span> ">4.41</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled"><a target="blank"
                                                                               href="http://dev3.smartinsider.com/app/members/link?tid=8030350"
                                                                               class=""><span
                                                                title="Show Source Announcement"
                                                                class="far fa-file-alt rotateY"></span></a></td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled"><span class="value_down"
                                                                                 title="<b>£882,000</b><br><b>$1,164,998</b><BR><b>€1,021,404 </b><br/>Display currency can be changed in Account Settings ">$1,164,998</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"><span style="color:#F44236">-10%</span>
                                                </td>
                                                <td class="adj-1-mo hiddem"><span style="color:#F44236">-4%</span></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding">
                                                    <span title=" Holding changed -1%<br>Holds 58.26% of <BR>Shares on Issue ">16,084,678</span>
                                                </td>
                                                <td class="holding_change visibled">-1%</td>
                                                <td class="sii-col visibled">58.26%</td>
                                                <td class="rating visibled">
                                                <span class="bars">
                                                    <span title="Significance 67 out of 100"
                                                          class="fa fa-star star3 starm active"></span>
                                                    <span title="Significance 67 out of 100"
                                                          class="fa fa-star star3 starm active"></span>
                                                    <span title="Significance 67 out of 100"
                                                          class="fa fa-star star3 starm active"></span>
                                                    <span title="Significance 67 out of 100"
                                                          class="fa fa-star star3 starm active"></span>
                                                    <span title="Significance 67 out of 100"
                                                          class="fa fa-star star3 starm"></span>
                                                </span>
                                                </td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons">
                                                <span class="newfilter fa fa-filter filter-blue"
                                                      title="Filter page for this Director"></span>
                                                    <a href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                       class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a>
                                                </td>
                                                <td class="title visibled">
                                                <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                </td>
                                                <td class="tdate visibled">
                                                    <span title="Announced: 25-Jan-19<br/> Transacted: 24-Jan-19 ">24-Jan-19</span>
                                                </td>
                                                <td class=" type">
                                                <span class="buysell-span sell_type">
                                                    <b title=" Sell ">Sell</b> <span
                                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                                            style="vertical-align:middle">
                                                    </span>
                                                </span></td>
                                                <td class="amount visibled"><span class="amount_down"
                                                                                  title="Ordinary Shares ">220,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.39<br/>Latest Close Price: GBP 5.08</span> ">4.39</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled"><a target="blank"
                                                                               href="http://dev3.smartinsider.com/app/members/link?tid=8029179"
                                                                               class=""><span
                                                                title="Show Source Announcement"
                                                                class="far fa-file-alt rotateY"></span></a></td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled"><span class="value_down"
                                                                                 title="<b>£965,225</b><br><b>$1,256,918</b><BR><b>€1,108,064 </b><br/>Display currency can be changed in Account Settings ">$1,256,918</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"><span style="color:#ff0000">-11%</span>
                                                </td>
                                                <td class="adj-1-mo hiddem"><span style="color:#ff0000">-7%</span></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding"><span
                                                            title=" Holding changed -1%<br>Holds 58.99% of <BR>Shares on Issue ">16,284,678</span>
                                                </td>
                                                <td class="holding_change visibled">-1%</td>
                                                <td class="sii-col visibled">58.99%</td>
                                                <td class="rating visibled"><span class="bars"><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm active"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm active"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm "></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm"></span></span></td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="checkbox_list sorting_1">
                                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                    <input type="checkbox" class="custom-control-input trade-checkbox"
                                                           id="8152818" name="8152818" value="" checked="checked">
                                                    <label class="custom-control-label" for="8152818"> </label>
                                                </span>
                                                </td>
                                                <td class=" persons"><span class="newfilter fa fa-filter filter-blue"
                                                                           title="Filter page for this Director"></span>
                                                    <a
                                                            href="https://dev3.smartinsider.com/app/members/person?p=458750&amp;c=10002"
                                                            class="persontooltip  personname" dir="839764" id="458750">Mark
                                                        Sheppard</a></td>
                                                <td class="title visibled"><span
                                                            title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span></td>
                                                <td class="tdate visibled"><span
                                                            title="Announced: 23-Jan-19<br/> Transacted: 23-Jan-19 ">23-Jan-19</span>
                                                </td>
                                                <td class=" type"><span class="buysell-span sell_type"><b
                                                                title=" Sell ">Sell</b> <span
                                                                class="fas fa-arrow-alt-circle-down" title="Sell"
                                                                style="vertical-align:middle"></span></span></td>
                                                <td class="amount visibled"><span class="amount_down"
                                                                                  title="Ordinary Shares ">204,000</span>
                                                </td>
                                                <td class=" at"><span class="at"> @</span></td>
                                                <td class=" price">£<span
                                                            title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.46<br/>Latest Close Price: GBP 5.08</span> ">4.46</span>
                                                </td>
                                                <td class="note visibled"></td>
                                                <td class="source visibled"><a target="blank"
                                                                               href="http://dev3.smartinsider.com/app/members/link?tid=8026731"
                                                                               class=""><span
                                                                title="Show Source Announcement"
                                                                class="far fa-file-alt rotateY"></span></a></td>
                                                <td class="tblTransaction-isCluster visibled"></td>
                                                <td class="tblsignal-SignalReason visibled"></td>
                                                <td class="value visibled"><span class="value_down"
                                                                                 title="<b>£909,620</b><br><b>$1,185,435</b><BR><b>€1,043,159 </b><br/>Display currency can be changed in Account Settings ">$1,185,435</span>
                                                </td>
                                                <td class="1-mo c-1-mo visibled"><span style="color:#ff0000">-10%</span>
                                                </td>
                                                <td class="adj-1-mo hiddem"><span style="color:#ff0000">-5%</span></td>
                                                <td class="6-mo  c-6-mo visibled"></td>
                                                <td class="adj-6-mo hiddem"></td>
                                                <td class="9-mo c-9-mo hiddem"></td>
                                                <td class="adj-9-mo hiddem"></td>
                                                <td class="1-year c-1-year hiddem"></td>
                                                <td class="adj-1-year hiddem"></td>
                                                <td class="18-mo c-18-mo hiddem"></td>
                                                <td class="adj-18-mo hiddem"></td>
                                                <td class="2-year c-2-year hiddem"></td>
                                                <td class="adj-2-year hiddem"></td>
                                                <td class=" holding"><span
                                                            title=" Holding changed -1%<br>Holds 59.78% of <BR>Shares on Issue ">16,504,678</span>
                                                </td>
                                                <td class="holding_change visibled">-1%</td>
                                                <td class="sii-col visibled">59.78%</td>
                                                <td class="rating visibled"><span class="bars"><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm active"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm active"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm active"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm"></span><span
                                                                title="Significance 67 out of 100"
                                                                class="fa fa-star star3 starm"></span></span></td>
                                                <td class="salary-data visibled"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modals">
            <div class="modal fade-scale modalCustom" id="modalMoreExpanded" tabindex="-1" role="dialog"
                 aria-labelledby="modalMoreExpanded" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content expanded">
                        <div class="modal-header text-center p-0 bg-transparent position-relative">
                            <h4 class="modal-title w-100 py-2 text-white rank-editor-heading grey darken-1 border-bottom-0 ">
                                Directorship Details</h4>
                            <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                            </button>
                        </div>
                        <div class="modal-body py-1">
                            <div class="blog-form py-2">
                                <div class="company-info px-2">Chairman &amp; Chief Executive Officer [Executive] since
                                    Nov 18
                                </div>
                                <div class="company-info px-2">Chairman &amp; Chief Executive Officer [Executive] since
                                    Nov 18
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-0 d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.container -->

    <link rel="stylesheet" type="text/css" href="./assets/css/custom/progress.css?t=<?= time() ?>"/>

<?php require("includes/footer.php"); ?>