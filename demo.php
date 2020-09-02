<?php require("includes/header.php"); ?>
<style>
    /*
      make each pie piece a rectangle twice as high as it is wide.
      move the transform origin to the middle of the left side.
      Also ensure that overflow is set to hidden.
    */
    .pie {
        position: absolute;
        width: 100px;
        height: 200px;
        overflow: hidden;
        left: 150px;
        -moz-transform-origin: left center;
        -ms-transform-origin: left center;
        -o-transform-origin: left center;
        -webkit-transform-origin: left center;
        transform-origin: left center;
    }

    /*
      unless the piece represents more than 50% of the whole chart.
      then make it a square, and ensure the transform origin is
      back in the center.

      NOTE: since this is only ever a single piece, you could
      move this to a piece specific rule and remove the extra class
    */
    .pie.big {
        width: 200px;
        height: 200px;
        left: 50px;
        -moz-transform-origin: center center;
        -ms-transform-origin: center center;
        -o-transform-origin: center center;
        -webkit-transform-origin: center center;
        transform-origin: center center;
    }

    /*
      this is the actual visible part of the pie.
      Give it the same dimensions as the regular piece.
      Use border radius make it a half circle.
      move transform origin to the middle of the right side.
      Push it out to the left of the containing box.
    */
    .pie:BEFORE {
        content: "";
        position: absolute;
        width: 100px;
        height: 200px;
        left: -100px;
        border-radius: 100px 0 0 100px;
        -moz-transform-origin: right center;
        -ms-transform-origin: right center;
        -o-transform-origin: right center;
        -webkit-transform-origin: right center;
        transform-origin: right center;

    }

    /* if it's part of a big piece, bring it back into the square */
    .pie.big:BEFORE {
        left: 0px;
    }

    /*
      big pieces will also need a second semicircle, pointed in the
      opposite direction to hide the first part behind.
    */
    .pie.big:AFTER {
        content: "";
        position: absolute;
        width: 100px;
        height: 200px;
        left: 100px;
        border-radius: 0 100px 100px 0;
    }

    /*
      add colour to each piece.
    */
    .pie:nth-of-type(1):BEFORE,
    .pie:nth-of-type(1):AFTER {
        background-color: blue;
    }

    .pie:nth-of-type(2):AFTER,
    .pie:nth-of-type(2):BEFORE {
        background-color: green;
    }

    .pie:nth-of-type(3):AFTER,
    .pie:nth-of-type(3):BEFORE {
        background-color: red;
    }

    .pie:nth-of-type(4):AFTER,
    .pie:nth-of-type(4):BEFORE {
        background-color: orange;
    }

    /*
      now rotate each piece based on their cumulative starting
      position
    */
    .pie[data-start="30"] {
        -moz-transform: rotate(30deg); /* Firefox */
        -ms-transform: rotate(30deg); /* IE */
        -webkit-transform: rotate(30deg); /* Safari and Chrome */
        -o-transform: rotate(30deg); /* Opera */
        transform: rotate(30deg);
    }

    .pie[data-start="60"] {
        -moz-transform: rotate(60deg); /* Firefox */
        -ms-transform: rotate(60deg); /* IE */
        -webkit-transform: rotate(60deg); /* Safari and Chrome */
        -o-transform: rotate(60deg); /* Opera */
        transform: rotate(60deg);
    }

    .pie[data-start="100"] {
        -moz-transform: rotate(100deg); /* Firefox */
        -ms-transform: rotate(100deg); /* IE */
        -webkit-transform: rotate(100deg); /* Safari and Chrome */
        -o-transform: rotate(100deg); /* Opera */
        transform: rotate(100deg);
    }

    /*
      and rotate the amount of the pie that's showing.

      NOTE: add an extra degree to all but the final piece,
      to fill in unsightly gaps.
    */
    .pie.v30:BEFORE {
        -moz-transform: rotate(31deg); /* Firefox */
        -ms-transform: rotate(31deg); /* IE */
        -webkit-transform: rotate(31deg); /* Safari and Chrome */
        -o-transform: rotate(31deg); /* Opera */
        transform: rotate(31deg);
    }

    .pie[data-value="40"]:BEFORE {
        -moz-transform: rotate(41deg); /* Firefox */
        -ms-transform: rotate(41deg); /* IE */
        -webkit-transform: rotate(41deg); /* Safari and Chrome */
        -o-transform: rotate(41deg); /* Opera */
        transform: rotate(41deg);
    }

    .pie[data-value="180"]:BEFORE {
        -moz-transform: rotate(180deg); /* Firefox */
        -ms-transform: rotate(180deg); /* IE */
        -webkit-transform: rotate(180deg); /* Safari and Chrome */
        -o-transform: rotate(180deg); /* Opera */
        transform: rotate(180deg);
    }

    .pie[data-value="260"]:BEFORE {
        -moz-transform: rotate(260deg); /* Firefox */
        -ms-transform: rotate(260deg); /* IE */
        -webkit-transform: rotate(260deg); /* Safari and Chrome */
        -o-transform: rotate(260deg); /* Opera */
        transform: rotate(260deg);
    }

    /*
    NOTE: you could also apply custom classes (i.e. .s0 .v30)
    but if the CSS3 attr() function proposal ever gets implemented,
    then all the above custom piece rules could be replaced with
    the following:

    .pie[data-start] {
       transform:rotate(attr(data-start,deg,0);
    }
    .pie[data-value]:BEFORE {
       transform:rotate(attr(data-value,deg,0);
    }
    */
</style>
<!-- .container -->
<main role="main" class="container content">



    <div class="row">
        <div class="col-12">
            <div class="chart-container">
                <div class="pie v30" data-start="0" data-value="30"></div>
                <div class="pie highlight" data-start="30" data-value="30"></div>
                <div class="pie" data-start="60" data-value="40"></div>
                <div class="pie big" data-start="100" data-value="260"></div>
                <div class="pie big" data-start="100" data-value="260"></div>
            </div>
            <div class="chart-container mt-5 pt-5">
                <div class="pie big" data-start="100" data-value="180"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>
    </div>


    <div class="row ">
        <div class="col-xl-2">
        </div>
        <div class="col-xl-2">
        </div>
        <div class="col-xl-2">
        </div>
        <div class="col-xl-2">
        </div>
        <div class="col-xl-2">
        </div>
        <div class="col-xl-2">
        </div>
    </div>

    <div class="row trading-detail bg-white">
        <div class="col-12">
            <div class="trading-detail-block w-100">
                <div class="scrolling-tabs">
                    <div class="wrapper">
                        <div class="pn-ProductNav_Wrapper">
                            <nav id="pnProductNav" class="pn-ProductNav">
                                <div id="pnProductNavContents" class="w-100 pn-ProductNav_Contents custom-tab">
                                    <ul class="w-100">
                                        <li class="clickme">
                                            <a href="javascript:void(0)" data-id="one"
                                               class="pn-ProductNav_Link activelink" aria-selected="true">
                                                <span class="d-flex flex-column text-center">
                                                    <span class="font-weight-bold">Ilson</span><span
                                                            class="font-weight-light">Ilson</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="clickme">
                                            <a href="javascript:void(0)" data-id="two" class="pn-ProductNav_Link">
                                                <span class="d-flex flex-column text-center">
                                                    <span class="font-weight-bold">Ilson</span><span
                                                            class="font-weight-light">Ilson</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="clickme">
                                            <a href="javascript:void(0)" data-id="three" class="pn-ProductNav_Link">
                                                <span class="d-flex flex-column text-center">
                                                    <span class="font-weight-bold">Ilson</span><span
                                                            class="font-weight-light">Ilson</span>
                                                </span>
                                            </a>
                                        </li>
                                        <span id="pnIndicator" class="pn-ProductNav_Indicator"></span>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="list" id="one">
                                            <div class="tab-data">
                                                <div class="link-text text-center">
                                                    <span><strong>Non-Executive</strong> since Nov 18</span><span>Formerly CFO since Sep </span>
                                                    <i class="fas fa-chevron-right text-white" aria-hidden="true"></i>
                                                </div>

                                                <hr class="w-75">

                                                <div class="analysis-detail d-flex justify-content-center align-items-end flex-column flex-sm-column flex-md-column flex-lg-row">
                                                    <div class="return-analysis-block return-analysis-left">
                                                        <table class="table table-bordered text-center">
                                                            <thead>
                                                            <tr>
                                                                <th>BANKED</th>
                                                                <th>INVESTED</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><i class="fas fa-pound-sign" aria-hidden="true"></i>
                                                                    51,000
                                                                </td>
                                                                <td><i class="fas fa-pound-sign" aria-hidden="true"></i>
                                                                    105,000
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="return-analysis-block return-analysis-center">
                                                        <div class="return-analysis-header d-flex justify-content-between">
                                                            <span class="heading font-weight-light">Returns Analysis</span>
                                                            <span class="checkboxes  d-flex flex-wrap justify-content-around">
                                                                <span class="custom-control custom-checkbox form-check ">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="adjusted" name="adjusted">
                                                                    <label class="custom-control-label" for="adjusted"> Show Adjusted </label>
                                                                </span>
                                                                <span class="custom-control custom-checkbox form-check">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="weighted" name="weighted">
                                                                    <label class="custom-control-label" for="weighted"> Show Weighted </label>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="return-analysis-purchase d-flex align-items-center justify-content-between flex-column flex-md-row">
                                                            <div class="return-analysis-box return-analysis-buys">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-center">
                                                                        <tr>
                                                                            <th rowspan="2" class="font-weight-bold">
                                                                                BUYS <i class="fas fa-arrow-up"
                                                                                        aria-hidden="true"></i></th>
                                                                            <th class="sm-heading"> 6 MONTH ABSOLUTE
                                                                                RETURN
                                                                            </th>
                                                                            <th class="sm-heading"> TRADES</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="abs-return text-success font-weight-light">
                                                                                15.6% <i class="fas fa-thumbs-up"
                                                                                         aria-hidden="true"></i>
                                                                            </td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="return-analysis-box return-analysis-sells">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-center">
                                                                        <tr>
                                                                            <th rowspan="2" class="font-weight-bold">
                                                                                SELLS <i class="fas fa-arrow-down"
                                                                                         aria-hidden="true"></i>
                                                                            </th>
                                                                            <th class="sm-heading"> 6 MONTH ABSOLUTE
                                                                                RETURN
                                                                            </th>
                                                                            <th class="sm-heading"> TRADES</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="abs-return text-danger font-weight-light">
                                                                                -1.2% <i class="fas fa-thumbs-down"
                                                                                         aria-hidden="true"></i>
                                                                            </td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="return-analysis-block return-analysis-right">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-center">
                                                                <thead>
                                                                <tr>
                                                                    <th>HOLDING</th>
                                                                    <th>VALUE</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>50,000</td>
                                                                    <td>61,048</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list hide" id="two">
                                            <div class="tab-data">
                                                <div class="link-text text-center">
                                                    <span><strong>Non-Executive</strong> since Nov 18</span><span>Formerly CFO since Sep </span>
                                                    <i class="fas fa-chevron-right text-white" aria-hidden="true"></i>
                                                </div>

                                                <hr class="w-75">

                                                <div class="analysis-detail d-flex justify-content-center align-items-end flex-column flex-sm-column flex-md-column flex-lg-row">
                                                    <div class="return-analysis-block return-analysis-left">
                                                        <table class="table table-bordered text-center">
                                                            <thead>
                                                            <tr>
                                                                <th>BANKED</th>
                                                                <th>INVESTED</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><i class="fas fa-pound-sign" aria-hidden="true"></i>
                                                                    51,000
                                                                </td>
                                                                <td><i class="fas fa-pound-sign" aria-hidden="true"></i>
                                                                    105,000
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="return-analysis-block return-analysis-center">
                                                        <div class="return-analysis-header d-flex justify-content-between">
                                                            <span class="heading font-weight-light">Returns Analysis</span>
                                                            <span class="checkboxes d-flex flex-wrap justify-content-around">
                                                                <span class="custom-control custom-checkbox form-check">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="adjusted1" name="adjusted">
                                                                    <label class="custom-control-label" for="adjusted1"> Show Adjusted </label>
                                                                </span>
                                                                <span class="custom-control custom-checkbox form-check">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="weighted1" name="weighted">
                                                                    <label class="custom-control-label" for="weighted1"> Show Weighted </label>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="return-analysis-purchase d-flex align-items-center justify-content-between w-100 flex-column flex-md-row">
                                                            <div class="return-analysis-box return-analysis-buys">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-center">
                                                                        <tr>
                                                                            <th rowspan="2" class="font-weight-bold">
                                                                                BUYS <i class="fas fa-arrow-up"
                                                                                        aria-hidden="true"></i></th>
                                                                            <th class="sm-heading">6 MONTH ABSOLUTE
                                                                                RETURN
                                                                            </th>
                                                                            <th class="sm-heading">TRADES</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="abs-return text-success font-weight-light">
                                                                                15.6% <i class="fas fa-thumbs-up"
                                                                                         aria-hidden="true"></i>
                                                                            </td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="return-analysis-box return-analysis-sells">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-center">
                                                                        <tr>
                                                                            <th rowspan="2" class="font-weight-bold">
                                                                                SELLS <i class="fas fa-arrow-down"
                                                                                         aria-hidden="true"></i>
                                                                            </th>
                                                                            <th class="sm-heading">6 MONTH ABSOLUTE
                                                                                RETURN
                                                                            </th>
                                                                            <th class="sm-heading">TRADES</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="abs-return text-danger font-weight-light">
                                                                                -1.2% <i class="fas fa-thumbs-down"
                                                                                         aria-hidden="true"></i>
                                                                            </td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="return-analysis-block return-analysis-right">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-center">
                                                                <thead>
                                                                <tr>
                                                                    <th>HOLDING</th>
                                                                    <th>VALUE</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>50,000</td>
                                                                    <td>61,048</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list hide" id="three">
                                            <div class="tab-data">
                                                <div class="link-text text-center">
                                                    <span><strong>Non-Executive</strong> since Nov 18</span><span>Formerly CFO since Sep </span>
                                                    <i class="fas fa-chevron-right text-white" aria-hidden="true"></i>
                                                </div>

                                                <hr class="w-75">

                                                <div class="analysis-detail d-flex justify-content-center align-items-end flex-column flex-sm-column flex-md-column flex-lg-row">
                                                    <div class="return-analysis-block return-analysis-left">
                                                        <table class="table table-bordered text-center">
                                                            <thead>
                                                            <tr>
                                                                <th>BANKED</th>
                                                                <th>INVESTED</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><i class="fas fa-pound-sign" aria-hidden="true"></i>
                                                                    51,000
                                                                </td>
                                                                <td><i class="fas fa-pound-sign" aria-hidden="true"></i>
                                                                    105,000
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="return-analysis-block return-analysis-center">
                                                        <div class="return-analysis-header d-flex justify-content-between">
                                                            <span class="heading font-weight-light">Returns Analysis</span>
                                                            <span class="checkboxes d-flex flex-wrap justify-content-around">
                                                                <span class="custom-control custom-checkbox form-check ">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="adjusted2" name="adjusted">
                                                                    <label class="custom-control-label" for="adjusted2"> Show Adjusted </label>
                                                                </span>
                                                                <span class="custom-control custom-checkbox form-check ">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="weighted2" name="weighted">
                                                                    <label class="custom-control-label" for="weighted2"> Show Weighted </label>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="return-analysis-purchase d-flex align-items-center justify-content-between flex-column flex-md-row">
                                                            <div class="return-analysis-box return-analysis-buys">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-center">
                                                                        <tr>
                                                                            <th rowspan="2" class="font-weight-bold">
                                                                                BUYS <i class="fas fa-arrow-up"
                                                                                        aria-hidden="true"></i></th>
                                                                            <th class="sm-heading">6 MONTH ABSOLUTE
                                                                                RETURN
                                                                            </th>
                                                                            <th class="sm-heading">TRADES</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="abs-return text-success font-weight-light">
                                                                                15.6% <i class="fas fa-thumbs-up"
                                                                                         aria-hidden="true"></i>
                                                                            </td>
                                                                            <td>2</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="return-analysis-box return-analysis-sells">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-center">
                                                                        <tr>
                                                                            <th rowspan="2" class="font-weight-bold">
                                                                                SELLS <i class="fas fa-arrow-down"
                                                                                         aria-hidden="true"></i>
                                                                            </th>
                                                                            <th class="sm-heading">6 MONTH ABSOLUTE
                                                                                RETURN
                                                                            </th>
                                                                            <th class="sm-heading">TRADES</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="abs-return text-danger font-weight-light">
                                                                                -1.2% <i class="fas fa-thumbs-down"
                                                                                         aria-hidden="true"></i>
                                                                            </td>
                                                                            <td>4</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="return-analysis-block return-analysis-right">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-center">
                                                                <thead>
                                                                <tr>
                                                                    <th>HOLDING</th>
                                                                    <th>VALUE</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>50,000</td>
                                                                    <td>61,048</td>
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
                            </nav>
                            <button id="pnAdvancerLeft" class="pn-Advancer pn-Advancer_Left" type="button">
                                <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 551 1024">
                                    <path d="M445.44 38.183L-2.53 512l447.97 473.817 85.857-81.173-409.6-433.23v81.172l409.6-433.23L445.44 38.18z"></path>
                                </svg>
                            </button>
                            <button id="pnAdvancerRight" class="pn-Advancer pn-Advancer_Right" type="button">
                                <svg class="pn-Advancer_Icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 551 1024">
                                    <path d="M105.56 985.817L553.53 512 105.56 38.183l-85.857 81.173 409.6 433.23v-81.172l-409.6 433.23 85.856 81.174z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row trading-section bg-white">
        <div class="col-md-6">
            <div class="trading-block trading-summary">
                <h4 class="sum-header heading font-weight-light">Trading Summary</h4>
                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">
                    <table class="table table-hover overflow-auto bg-white">
                        <thead>
                        <tr>
                            <th class="font-weight-bold">PERIOD</th>
                            <th>&nbsp;</th>
                            <th class="font-weight-bold">AMOUNTS &amp; PROCEEDS</th>
                            <th class="font-weight-bold">HOLDINGS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Feb-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-success font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mar-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-danger font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Feb-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-success font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mar-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-danger font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Feb-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-success font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mar-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-danger font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Feb-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-success font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mar-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-danger font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Feb-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-success font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mar-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-danger font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Feb-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-up bg-success buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-success font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mar-18</td>
                            <td><span class="font-weight-bold">BUY</span> <i
                                        class="fas fa-arrow-down bg-danger buy text-white rounded-circle"
                                        aria-hidden="true"></i></td>
                            <td>10,000 @ 360 &nbsp; &nbsp;<i class="fas fa-pound-sign" aria-hidden="true"></i>35,200
                            </td>
                            <td>40,300 &nbsp; &nbsp;<span class="trend text-danger font-weight-bold">+40%</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sum-footer d-flex flex-column">
                    <span class="sum-note font-italic">Discretionary Trades Summarised by Month</span>
                    <span class="sum-link">See all Katy Carlson trades in Balfour Beatty</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="trading-block advance-chart d-flex flex-column">
                <div class="chart-header d-flex align-items-center justify-content-between">
                    <h4 class="heading font-weight-light">Advance Chart</h4>
                    <span class="latest font-weight-light">LATEST PRICE: USD 3.82 <img src="assets/images/flag-uk.png"
                                                                                       alt="Country Flag"></span>
                </div>
                <div id="advance-chart" class="chart-table">
                </div>
            </div>
        </div>
    </div>
    <div class="row chart-section">
        <div class="offset-md-1"></div>
        <div class="col-md-10">
            <div class="row director-holding">
                <div class="col-md-7 director-score">
                    <div class="chart-block bg-white ">
                        <h4 class="heading font-weight-light">Director Score</h4>
                        <div class="chart-box d-flex flex-column justify-content-center h-100">
                            <div class="scoring-percent d-flex flex-column justify-content-center h-100">
                                <div class="holding-score score-buy d-flex ">
                                    <span>BUYS</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:80%;">80%</div>
                                    </div>
                                </div>
                                <div class="holding-score score-sell d-flex align-items-center">
                                    <span>SELLS</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:45%;">40%</div>
                                    </div>

                                </div>
                                <div class="score-rate">
                                    <h4 class="font-weight-bold d-flex flex-row align-items-center justify-content-between">
                                        <span>POOR</span><span>AVERAGE</span><span>SMART</span></h4>
                                </div>
                                <div class="sum-footer d-flex flex-column">
                                    <span class="sum-note font-italic">* Score based on 18 trades across 4 companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 holdings-value">
                    <div class="chart-block bg-white">
                        <div class="chart-box">
                            <h4 class="heading font-weight-light">Value of Holdings</h4>
                            <div id="holdings-chart" class="pie-table">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row investment-timeline">
                <div class="col-12">
                    <div class="chart-block-com investment-block">
                        <div class="chart-box">
                            <div class="chart-header d-flex justify-content-between align-items-center flex-column flex-sm-row">
                                <h4 class="heading font-weight-light">Investment Timeline</h4>
                                <div class="switcher-block">
                                    <div class="investment-switch switcher-box d-flex justify-content-sm-end justify-content-between align-items-center ">
                                        <div class="switch">
                                            <label class="mb-0 d-flex justify-content-center align-items-center"> <span
                                                        class="switchStateL font-weight-bold">Discretionary </span>
                                                <input type="checkbox">
                                                <span class="lever"></span> <span
                                                        class="switchStateR"> All Trades</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="investment-chart-table" class="investment-timeline-table"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row trade-history">
                <div class="col-12">
                    <div class="chart-block-com trade-block">
                        <div class="chart-box">
                            <div class="chart-header d-flex justify-content-center align-items-center flex-column flex-sm-row">
                                <h4 class="heading font-weight-light">Trade History</h4>
                                <div class="switcher-block d-flex flex-row justify-content-sm-end justify-content-between align-items-center ml-auto w-100">
                                    <div class="w-100 text-center">
                                        <span class="font-weight-bold head">TRADES</span>
                                        <div class="disall-switch switcher-box d-flex justify-content-center align-items-center w-100">
                                            <div class="switch">
                                                <label class="mb-0"> <span
                                                            class="switchStateL font-weight-bold">Discretionary </span>
                                                    <input type="checkbox">
                                                    <span class="lever"></span> <span class="switchStateR "> All</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-center">
                                        <span class="font-weight-bold head">VIEW</span>
                                        <div class="sumtrans-switch switcher-box d-flex justify-content-center align-items-center w-100">
                                            <div class="switch">
                                                <label class="mb-0"> <span class="switchStateL font-weight-bold">Transaction</span>
                                                    <input type="checkbox">
                                                    <span class="lever"></span> <span
                                                            class="switchStateR"> Summary</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rotate-img rounded-bottom align-self-end"><i class="fas fa-file-excel"
                                                                                             aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="trade-history-filters flex-wrap d-flex flex-sm-row align-items-sm-center .justify-content-sm-between w-100">
                                <div class="trade-filter d-flex w-100">

                                    <div id="sorts" class="trade-history-filter w-25 d-flex align-items-center">
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

                                    <div id="filter" class="trade-history-filter w-25 d-flex align-items-center">
                                        <span class="filter-label">Filter: </span>
                                        <span class="filter-select custom-select-option">
                                            <select id="inlineFormCustomSelect2" title=""
                                                    class="mdb-select md-form basic-multiple-select"
                                                    multiple="multiple">
                                                <option value="" disabled selected>Choose Filter</option>
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
                                        </span>
                                    </div>
                                    <div id="scroll-wrapper1"
                                         class="scroll-wrapper1 dtTableScroller w-50 d-flex justify-content-center align-items-center pl-2">
                                        <div class="scroller w-100"></div>
                                    </div>

                                </div>
                                <div id="trades-meta" class="w-50">
                                    <span class="total-trades-all hidden-summary pt-1 h-100 w-100 flex-wrap d-flex text-wrap align-items-center"
                                          title="">
                                        <span class="trade-selected-count-all"
                                              title="Aggregates Selected Trades using Tick boxes.">11 Trades - <span
                                                    id="all_trades">all selected</span>: </span>

                                        <span class="trade-selected-amount-all" style="" title="">
                                            <span class="shares-all" title="">
                                                <span class="net_sum"
                                                      title="<span style=&quot;&quot;>Acquired: 273,142 [+$1,467,127]</span><br><span style=&quot;&quot;>Disposed: 187,142 [+$1,321,961]</span>">Net 86,000 shares acquired <span
                                                            title="">[+$145,166]</span></span>
                                                <span style="display:none" class="chart_data_points">[[1478649600000,4.05]]comp6622825-489739,||series[[1485734400000,3.14],[1485475200000,3.18],[1485216000000,3.22],[1484784000000,3.18]]comp6688879-489739,||6686912-489739,||6683802-489739,||6680637-489739,||series[[1513296000000,7.81]]comp6972054-111259,||series[]compseries[]compseries[[1512432000000,7.9]]comp6961735,6961733,6961734||series[[1516060800000,12.93]]comp7001792,7001793||series[]compseries[]comp</span></span>
                                            <span class="total-selected-trades" title="" style="display:none">
                                                <span class="trade-selected-count" title="">11 Trades Selected: </span>
                                                <span class="trade-selected-amount buy-color" title="">Net 86,000 shares acquired <span
                                                            class="buycolor">[+$145,166]</span>
                                                </span>
                                                <span class="notrades" style="display:none;">No Trades Selected</span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div id="scroll-wrapper2"
                                     class="trade-history-table w-100 mt-3 scroll-wrapper2 Container Flipped scrollbar">
                                    <table id="example" class="display trade-table w-100">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
