<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white filter filtering">

    <div class="row my-2 mt-lg-2 mb-lg-3">
        <div class="col-12 mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex flex-column flex-sm-row justify-content-between align-items-center text-white font-weight-bold">
                    <span>New Search</span>
                    <div class="transaction-detail text-center"><span> 10,000 Transactions </span> | <span> 2,487 Companies </span>
                        | <span> 6,834 Insiders </span> <span>(Please Refine) </span></div>
                </h3>
            </div>
        </div>
    </div>

    <div class="row mt-0 mb-0 mt-lg-4 mb-lg-1 criteria-col click-show">
        <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding transaction-criteria">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Transaction Criteria </h4>
            <hr class="title-separator">
            <div class="row mt-0 mb-1 pt-1 mb-lg-3 pt-lg-3 pb-lg-1">
                <div class="col-12 pt-lg-1 pb-0 pb-lg-1 d-flex flex-row justify-content-between">
                    <div class="form-check form-check-inline mb-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="transaction_trades"
                                   name="transactionRadios" checked="checked">
                            <label class="custom-control-label" for="transaction_trades"> All Trades </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline mb-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="transaction_discretionary"
                                   name="transactionRadios">
                            <label class="custom-control-label" for="transaction_discretionary">
                                Discretionary </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline mb-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="transaction_advanced"
                                   name="transactionRadios">
                            <label class="custom-control-label" for="transaction_advanced"> Advanced </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="tsi">TSI&nbsp;: </label></div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="tsi1">TSI - 1</label>
                                <select onchange="setMinValue(this,'select[name=tsi2]')" name="tsi1" id="tsi1"
                                        class="min-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="0">0</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option mt-2 mt-md-0">
                                <label class="mr-sm-2 sr-only" for="tsi2">TSI - 2</label>
                                <select onchange="setMaxValue(this,'select[name=tsi1]')" name="tsi2" id="tsi2"
                                        class="max-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1 pt-1 mt-lg-3 pt-lg-1">
                <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="value">Value&nbsp;: </label></div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="value1">Value - 1</label>
                                <select id="value1" name="value1" onchange="setMinValue(this,'select[name=value2]')"
                                        class="min-val mdb-select md-form colorful-select dropdown-primary">
                                    <option selected="" value="0">£0</option>
                                    <option value="10000">£10k</option>
                                    <option value="20000">£20k</option>
                                    <option value="50000">£50k</option>
                                    <option value="100000">£100k</option>
                                    <option value="500000">£500k</option>
                                    <option value="750000">£750k</option>
                                    <option value="1000000">£1m</option>
                                    <option value="10000000">£10m</option>
                                    <option value="50000000">£50m</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center " style="margin-top: -2px;">
                            <div class="custom-select-option mt-2 mt-md-0 ">
                                <label class="mr-sm-2 sr-only" for="value2"> Value - 2 </label>
                                <select id="value2" name="value2" onchange="setMaxValue(this,'select[name=value1]')"
                                        class="max-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="10000">£10k</option>
                                    <option value="20000">£20k</option>
                                    <option value="50000">£50k</option>
                                    <option value="100000">£100k</option>
                                    <option value="500000">£500k</option>
                                    <option value="750000">£750k</option>
                                    <option value="1000000">£1m</option>
                                    <option value="10000000">£10m</option>
                                    <option value="50000000">£50m</option>
                                    <option value="50001000000" selected="selected">£50m+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1 pt-1 mt-lg-3 pt-lg-1">
                <div class="col-lg-8 align-self-center mb-1 mb-lg-0"><label for="holdingChange"> Holding Change
                        Above&nbsp;: </label>
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="custom-select-option">
                        <label class="mr-sm-2 sr-only" for="holdingChange"> Holding Change Above </label>
                        <select id="holdingChange" class="mdb-select md-form colorful-select dropdown-primary">
                            <option value="0">None</option>
                            <option value="1">1%</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="25">25%</option>
                            <option value="50">50%</option>
                            <option value="75">75%</option>
                            <option value="99">99%</option>
                            <option value="200">+ 200%</option>
                            <option value="300">+ 300%</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3 mb-1 my-lg-0 col-padding person-criteria">
            <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">
                Person Criteria </h4>
            <hr class="title-separator">
            <div class="row mt-2 mt-lg-4">
                <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="execStatus"> Exec
                        Status&nbsp;: </label></div>
                <div class="col-lg-8 align-self-center">
                    <div class="custom-select-option">
                        <label class="mr-sm-2 sr-only" for="execStatus">Exec Status</label>
                        <select id="execStatus" class="mdb-select md-form basic-multiple-select"
                                multiple="multiple">
                            <option value="" disabled selected>Choose Exec Status</option>
                            <option value="Executive">Executive</option>
                            <option value="Non-Executive">Non-Executive</option>
                            <option value="Supervisory">Supervisory</option>
                            <option value="Former">Former</option>
                            <option value="Incoming">Incoming</option>
                            <option value="Shareholder">Shareholder</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mt-lg-3 mb-1 pt-1">
                <div class="col-lg-4 align-self-center mb-1 mb-lg-0">
                    <div class="row">
                        <div class="col align-self-center" style="margin-top: -5px;"><label for="Score">
                                Score&nbsp;: </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="score1"> Score - 1 </label>
                                <select id="score1" name="score1" onchange="setMinValue(this,'select[name=score2]')"
                                        class="min-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="0">0</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option mt-2 mt-md-0 ">
                                <label class="mr-sm-2 sr-only" for="score2"> Score - 2 </label>
                                <select id="score2" name="score2" onchange="setMaxValue(this,'select[name=score1]')"
                                        class="max-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="100" selected="selected">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mt-lg-3 mb-2">
                <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="jobTitle"> Job
                        Title&nbsp;: </label></div>
                <div class="col-lg-8 align-self-center">
                    <div class="custom-select-option">
                        <label class="mr-sm-2 sr-only" for="jobTitle"> Job Title </label>
                        <select id="jobTitle" class="mdb-select md-form basic-multiple-select" multiple="multiple">
                            <option value="" disabled selected>Choose Job Title</option>
                            <option value="President">President</option>
                            <option value="Chairman">Chairman</option>
                            <option value="Managing-CEO">Managing / CEO</option>
                            <option value="Finance">Finance</option>
                            <option value="COO">Chief Operating Officer</option>
                            <option value="Sales-Marketing">Sales / Marketing</option>
                            <option value="Investment">Investment</option>
                            <option value="Operations">Operations</option>
                            <option value="Research-Development">Research & Development</option>
                            <option value="Technical">Technical</option>
                            <option value="Land-Property">Land / Property</option>
                            <option value="Governor">Governor</option>
                            <option value="Production">Production</option>
                            <option value="Manager">Manager</option>
                            <option value="Technology">Technology</option>
                            <option value="Human-Resources">Human Resources</option>
                            <option value="Development">Development</option>
                            <option value="Company-Secretary">Company Secretary</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Legal">Legal</option>
                            <option value="Senior-Independent">Senior Independent</option>
                            <option value="Committee-Chairman">Committee Chairman</option>
                            <option value="General-Counsel">General Counsel</option>
                            <option value="Compliance">Compliance</option>
                            <option value="Other-Specialism">Other Specialism</option>
                            <option value="Communications">Communications</option>
                            <option value="Head">Head</option>
                            <option value="Consultant-Adviser">Consultant / Adviser</option>
                            <option value="No-Title">No Title Specified</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding date-criteria">
            <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">Date Criteria</h4>
            <hr class="title-separator">
            <div class="row mt-2 pt-2 mb-1 pb-1 mt-lg-4 pt-lg-2 mb-lg-0 pb-lg-0 ">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="anstrans custom-switcher switcher-box d-flex justify-content-start justify-content-lg-center  align-items-center w-100 mw-100">
                                <div class="switch ">
                                    <label class=" d-flex justify-content-center align-items-center "> <span
                                                class="switchStateL"> Transacted </span>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span> <span class="switchStateR font-weight-bold"> Announced </span>
                                    </label>
                                </div>
                            </div>
                            <input id="anstrans" type="hidden" name="anstrans" value="ans">
                        </div>
                    </div>
                </div>
            </div>

            <div id="variable-date-set" class="row mt-0 mb-2 my-lg-2 dateSet variable-date-set click-show ">
                <div class="col-12 d-flex flex-wrap justify-content-lg-start">
                    <div class="form-check form-check-inline w-100 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateToday" name="dateRadios">
                            <label class="custom-control-label" for="dateToday"> Today - Monday 8th </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-100 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateYester" name="dateRadios">
                            <label class="custom-control-label" for="dateYester"> Yesterday - Friday 5th </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-33 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateWeek" name="dateRadios">
                            <label class="custom-control-label" for="dateWeek"> Week </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-33 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateMonth" name="dateRadios"
                                   checked="checked">
                            <label class="custom-control-label" for="dateMonth"> Month </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-33 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateQuarter" name="dateRadios">
                            <label class="custom-control-label" for="dateQuarter"> Quarter </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-33 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateYear" name="dateRadios">
                            <label class="custom-control-label" for="dateYear"> Year </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-33 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateFYear" name="dateRadios">
                            <label class="custom-control-label" for="dateFYear"> 5 Years </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline w-33 py-1 mx-0">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="dateAll" name="dateRadios">
                            <label class="custom-control-label" for="dateAll"> All Time </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="exact-date-set" class="row mt-2 mb-2 my-lg-2 dateSet exact-date-set click-hide ">
                <!--Grid column-->
                <div class="col-md-6">

                    <div class="md-form my-1 mt-lg-3 mb-lg-1 pt-1">
                        <!--The "from" Date Picker -->
                        <input placeholder="From" type="date" id="exactDateFrom" name="exactDateFrom"
                               class="form-control datepicker my-0">
                        <label class="sr-only" for="exactDateFrom">Start Date</label>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <div class="md-form my-1 mt-lg-3 mb-lg-1 pt-1">
                        <!--The "to" Date Picker -->
                        <input placeholder="To" type="date" id="exactDateTo" name="exactDateTo"
                               class="form-control datepicker my-0">
                        <label class="sr-only" for="exactDateTo">End Date</label>
                    </div>
                </div>
                <!--Grid column-->
            </div>

            <div class="row mt-2 mb-2">
                <div class="col-12 d-flex justify-content-start">
                    <div id="selectExactDate" class="form-group form-check pl-0 mb-0 selectExactDate">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input" id="exactDate">
                            <label class="custom-control-label" for="exactDate"> I want to choose exact
                                dates </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-0 mb-0 mt-lg-3 mb-lg-1 criteria-col click-show">
        <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding company-criteria">
            <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold"> Company Criteria </h4>
            <hr class="title-separator">

            <div class="row mt-0 pt-1 mt-lg-2 pt-lg-3">
                <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="marketCap"> Market
                        Cap&nbsp;: </label></div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="marketcap1">Market Cap - 1</label>
                                <select id="marketcap1"
                                        class="min-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="0" selected="selected">£0</option>
                                    <option value="1000000">£1m</option>
                                    <option value="5000000">£5m</option>
                                    <option value="10000000">£10m</option>
                                    <option value="35000000">£35m</option>
                                    <option value="100000000">£100m</option>
                                    <option value="300000000">£300m</option>
                                    <option value="1000000000">£1bn</option>
                                    <option value="2000000000">£2bn</option>
                                    <option value="4000000000">£4bn</option>
                                    <option value="6000000000">£6bn</option>
                                    <option value="8000000000">£8bn</option>
                                    <option value="10000000000">£10bn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                            <div class="custom-select-option mt-2 mt-md-0">
                                <label class="mr-sm-2 sr-only" for="marketcap2">Market Cap - 2</label>
                                <select id="marketcap2"
                                        class="max-val mdb-select md-form colorful-select dropdown-primary">
                                    <option value="1000000">£1m</option>
                                    <option value="5000000">£5m</option>
                                    <option value="10000000">£10m</option>
                                    <option value="35000000">£35m</option>
                                    <option value="100000000">£100m</option>
                                    <option value="300000000">£300m</option>
                                    <option value="1000000000">£1bn</option>
                                    <option value="2000000000">£2bn</option>
                                    <option value="4000000000">£4bn</option>
                                    <option value="6000000000">£6bn</option>
                                    <option value="8000000000">£8bn</option>
                                    <option value="10000000000">£10bn</option>
                                    <option value="10000000000000" selected="selected">£10bn+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-2 my-lg-3 ">
                <div class="col-lg-4 align-self-center ">
                    <div class="row">
                        <div class="col align-self-center"></div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="index-port custom-switcher switcher-box d-flex justify-content-start justify-content-md-start align-items-center w-100">
                                <div class="switch">
                                    <label class="d-flex align-items-center "> <span
                                                class="switchStateL"> Portfolio </span>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span> <span
                                                class="switchStateR font-weight-bold"> Index </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-1 portfolio-switch click-hide">
                <div class="col-lg-4 align-self-center  mb-1 mb-lg-0">
                    <div class="row">
                        <div class="col align-self-center"><label for="portfolio"> Portfolio&nbsp;: </label></div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="portfolio">Portfolio</label>
                                <select id="portfolio" class="mdb-select md-form basic-multiple-select"
                                        multiple="multiple">
                                    <option value="" disabled selected>Choose Portfolio</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-1 index-switch click-show">
                <div class="col-lg-4 align-self-center  mb-1 mb-lg-0">
                    <div class="row">
                        <div class="col align-self-center"><label for="index"> Index&nbsp;: </label></div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="index">Index</label>
                                <select id="index" class="mdb-select md-form basic-multiple-select"
                                        multiple="multiple">
                                    <option value="" disabled selected>Choose Index</option>
                                    <option value="ASX-200">ASX 200</option>
                                    <option value="FTSE-100">FTSE 100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-1 mt-lg-3 mb-lg-1">
                <div class="col-lg-4 align-self-center  mb-1 mb-lg-0">
                    <div class="row">
                        <div class="col align-self-center"><label for="security"> Security&nbsp;: </label></div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="security">Security</label>
                                <select id="security" class="mdb-select md-form basic-multiple-select"
                                        multiple="multiple">
                                    <option value="" disabled selected>Choose Security</option>
                                    <option value="Common-Ordinary-Stock">Common, Ordinary Stock</option>
                                    <option value="Preferred-Stock">Preferred Stock</option>
                                    <option value="Warrant-Right-Option">Warrant, Right or Option</option>
                                    <option value="Unit" selected>Unit</option>
                                    <option value="A-Shares">A Shares</option>
                                    <option value="B-Shares">B Shares</option>
                                    <option value="C-Shares">C Shares</option>
                                    <option value="D-Shares">D Shares</option>
                                    <option value="E-Shares">E Shares</option>
                                    <option value="G-Shares">G Shares</option>
                                    <option value="F-Shares">F Shares</option>
                                    <option value="M-Shares">M Shares</option>
                                    <option value="L-Shares">L Shares</option>
                                    <option value="J-Shares">J Shares</option>
                                    <option value="X-Shares">X Shares</option>
                                    <option value="K-Shares">K Shares</option>
                                    <option value="R-Shares">R Shares</option>
                                    <option value="W-Shares">W Shares</option>
                                    <option value="V-Shares">V Shares</option>
                                    <option value="I-Shares">I Shares</option>
                                    <option value="General-Derivative">General Derivative</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-1 mt-lg-3 mb-lg-1">
                <div class="col-lg-4 align-self-center  mb-1 mb-lg-0">
                    <div class="row">
                        <div class="col align-self-center"><label for="holdingType"> Holding Type&nbsp;: </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="custom-select-option">
                                <label class="mr-sm-2 sr-only" for="holdingType">Holding Type</label>
                                <select id="holdingType" class="mdb-select md-form basic-multiple-select"
                                        multiple="multiple">
                                    <option value="" disabled selected>Choose Holding Type</option>
                                    <option value="Connected-Company">Connected Company</option>
                                    <option value="Connected-Person">Connected Person</option>
                                    <option value="Direct-Beneficial">Direct Beneficial</option>
                                    <option value="Indirect-Beneficial">Indirect Beneficial</option>
                                    <option value="Non-Beneficial">Non-Beneficial</option>
                                    <option value="Unclassified" selected>Unclassified</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-1 mt-lg-3 mb-lg-1">
                <div class="col-2 col-lg-4 align-self-center">
                    <div class="row">
                        <div class="col align-self-center"><label class="mb-1" for="defunc"> Defunct&nbsp;: </label>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="exclude-defunct custom-switcher switcher-box d-flex justify-content-start align-items-center w-100 mw-100 mt-0 mt-lg-1">
                                <div class="switch ">
                                    <label class=" d-flex align-items-center "> <span
                                                class="switchStateL">Include </span>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span> <span
                                                class="switchStateR font-weight-bold"> Exclude</span>
                                    </label>
                                </div>
                            </div>
                            <input type="hidden" name="exclude-defunct" value="0" id="exclude-defunct">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding region-criteria">
            <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Country or Region </h4>
            <hr class="title-separator">

            <div class="row mt-2 pt-2">
                <div class="col-12">
                    <div id="regionTree" class="tree-checkbox mt-2">
                        <div id="treeview-example" class="treeview">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding sector-criteria">
            <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Sector </h4>
            <hr class="title-separator">

            <div class="row mt-2 pt-2">
                <div class="col-12">
                    <div id="sectorTree" class="tree-checkbox mt-2">
                        <div id="treeview" class="treeview"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-0 mb-0 mt-lg-3 mb-lg-1 action-col click-show">
        <div class="col-12 col-padding mb-1 pb-2">
            <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold">Actions</h4>
            <hr class="title-separator">
        </div>

        <div class="col-6 col-lg-4 mb-1 my-lg-0 align-self-start col-padding text-center  flex-column">
            <div id="savesearch"
                 class="save-search action_box pl-lg-5 mt-0 d-flex flex-wrap  justify-content-center justify-content-lg-start click-show">
                <label id="vieweditsave" class="w-100 d-flex align-items-center" data-toggle="modal"
                       data-target="#modalSaveSearch">
                    <span class="fas fa-bookmark text-success"></span> <span
                            class="title_b"> Save My Search </span>
                </label>
            </div>
            <div id="editsearch"
                 class="edit-search action_box pl-lg-5 mt-0 w-100 d-flex justify-content-center justify-content-lg-start click-hide">
                <div class="update-labels">
                    <label id="updaterename1" class="w-100 d-flex align-items-center " data-toggle="modal"
                           data-target="#modalSaveSearch">
                        <span class="fas fa-bookmark text-success"></span> <span
                                class="title_b"> Update / Rename </span>
                    </label>

                    <label id="emailalert1" class="w-100 d-flex  align-items-center pt-2" data-toggle="modal"
                           data-target="#modalCreateAlert">
                        <span class="fas fa-bell golden"></span> <span
                                class="title_b"> Create Email Alert </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-4 mb-1 my-lg-0 align-self-start col-padding text-center overwrite-default">
            <div id="defaultsearch" class="action_box">
                <label id="over-default"
                       class="w-100  d-flex align-items-center justify-content-start justify-content-lg-center"
                       data-toggle="popover" title="Overwrite Default" data-content="Default options overwritten.">
                    <span class="fas fa-edit text-success "></span> <span
                            class="title_b">Overwrite Default Settings</span>
                </label>
            </div>
        </div>

        <div class="col-12 col-lg-4 my-3 my-lg-0 align-self-center col-padding text-center show-transaction">
            <div id="showtransaction" class="action_box w-60 w-sm-50 w-lg-75 mx-auto">
                <div class="form-group my-0">
                    <button class="btn btn-block bg-success text-white mb-2 font-weight-bold button" id="trans-show"
                            type="button"> SHOW TRANSACTIONS
                    </button>
                </div>
                <span id="trans-reset" class="set-reset">
                        <span class="fas fa-redo-alt text-success"></span> <span
                            class="title_b"> Clear All Criteria </span>
                    </span>
            </div>
        </div>
    </div>

    <div class="row mt-0 mb-0 mt-lg-3 mb-lg-1 conditional-criteria-col click-hide">
        <div class="col-lg-8 col-padding mt-2 mb-2 mt-lg-0 mb-lg-1 selected-criteria">
            <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">
                Selected Criteria </h4>
            <hr class="title-separator">

            <div class="selected-criteria-block d-flex flex-wrap mt-3">
                <div class="selected-list-wrapper">
                    <ul id="filterlist" class="selected-list d-flex flex-wrap">
                        <li>Score: 0 - 100</li>
                        <li>TSI: 0 - 100</li>
                        <li>29 Job Titles</li>
                        <li>7 Exec Status</li>
                        <li>21 Security Group</li>
                        <li>6 Holding Types</li>
                        <li>Date: past week</li>
                        <li>Value: $0 - $50m+</li>
                        <li>Mcap: $0 - $10bn+</li>
                        <li>45 Sectors</li>
                        <li>61 Countries</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-padding mt-2 mb-2 mt-lg-0 mb-lg-1 actions">
            <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">
                Actions </h4>
            <hr class="title-separator">

            <div class="action-block d-flex flex-wrap mt-2 ">
                    <span id="action_save" class="lbl-actions text-left d-flex align-items-center w-50"
                          data-toggle="modal"
                          data-target="#modalSaveSearch">
                        <span class="fas fa-edit text-success"></span> <span class="title_b">Save Search </span>
                    </span>
                <span id="action_export" class="lbl-actions text-left d-flex align-items-center w-50">
                        <span class="fas fa-file-excel text-success "></span> <span
                            class="title_b"> Export Result </span>
                    </span>
                <span id="action_reset" class="lbl-actions text-left d-flex align-items-center w-50">
                        <span class="fas fa-redo-alt text-success "></span> <span class="title_b">Reset Filter </span>
                    </span>
                <span id="action_email_alert" class="lbl-actions text-left d-flex align-items-center w-50 "
                      data-toggle="modal"
                      data-target="#modalCreateAlert">
                        <span class="fas fa-bell golden"></span><span class="title_b"> Create Email Alert </span>
                    </span>

                <div class="form-group w-100 my-0">
                    <button id="change-criteria" type="button"
                            class="btn btn-block bg-success text-white w-60 w-sm-50 w-lg-75 mx-auto mt-3 mb-0 font-weight-bold button">
                        CHANGE CRITERIA
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-0 mb-0 mt-lg-3 mb-lg-1 dataTable-col click-hide">
        <div class="col-12 col-padding ">
            <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">
                Search Results </h4>
            <hr class="title-separator">

            <div class="trade-history-filters flex-wrap d-flex flex-sm-row align-items-sm-center justify-content-sm-between w-100 ">
                <div class="trade-filter d-flex w-50">
                    <div id="sorts" class="trade-history-filter w-50 d-flex align-items-center pr-2">
                        <span class="filter-label mr-3" title="">Sort: </span>
                        <span class="sort-select custom-select-option">
                                <select class=" mdb-select md-form colorful-select dropdown-primary"
                                        id="inlineFormCustomSelect1">
                                    <option value="" disabled selected>Choose Order</option>
                                    <option code="asc" value="1">Company Name: A-Z</option>
                                    <option code="desc" value="1">Company Name: Z-A</option>
                                    <option code="asc" value="2">Director Name: A-Z</option>
                                    <option code="desc" value="2">Director Name: Z-A</option>
                                    <option code="desc" value="4"
                                            selected="selected">Transaction Date: New - Old</option>
                                    <option code="asc" value="4">Transaction Date: Old - New</option>
                                    <option code="asc" value="5">Trade Type: A-Z</option>
                                    <option code="desc" value="5">Trade Type: Z-A</option>
                                    <option code="asc" value="6">Amount of Transaction: Low - High</option>
                                    <option code="desc" value="6">Amount of Transaction: High - Low</option>
                                    <option code="asc" value="7">Price of Transaction: Low - High</option>
                                    <option code="desc" value="7">Price of Transaction: High - Low</option>
                                    <option code="asc" value="8">Value of Transaction: Low - High</option>
                                    <option code="desc" value="8">Value of Transaction: High - Low</option>
                                    <!-- <option code='asc' value='9'>Change&nbsp;: Low - High</option>
                                     <option code='desc' value='9'>Change: High - Low</option>-->
                                    <option code="asc" value="24">Change in Holding: Low - High</option>
                                    <option code="desc" value="24">Change in Holding: High - Low</option>

                                    <!-- <option code='asc' value='28'>TSI: Low - High</option>
                                    <option code='desc' value='28'>TSI: High - Low</option>-->
                                </select>
                            </span>
                    </div>
                    <div id="filter" class="trade-history-filter w-50 pl-0 pl-lg-3 d-flex align-items-center">
                        <span class="filter-label">Filter: </span>
                        <span class="filter-select custom-select-option">
                                <label class="mr-sm-2 sr-only" for="execStatus">Filter Select</label>
                                <select id="inlineFormCustomSelect2" title=""
                                        class="mdb-select md-form basic-multiple-select" multiple="multiple">
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
                </div>
                <div class="w-100 w-md-50 filter-search-switch mt-2 mt-lg-0 mx-auto">
                    <div class="switcher-box d-flex justify-content-center justify-content-lg-end align-items-center w-100">
                        <div class="switch ">
                            <label class=" d-flex justify-content-center align-items-center text-right"> <span
                                        class="switchStateL font-weight-bold"> Transaction View </span>
                                <input type="checkbox">
                                <span class="lever"></span> <span class="switchStateR"> Summary View </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-padding ">
            <div class="filter-search-result scroll-wrapper2 Container Flipped scrollbar mt-1">
                <table id="example" class="display filter-search-result-table w-100">
                    <thead>
                    <tr id="group-heading">
                        <th id="group-company" class="ui-state-default position-relative" rowspan="1" colspan="1"
                            title="">
                            <span class="position-absolute ">Company</span>
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
                        <th id="company-header"
                            class="company group-company sorting_disabled ui-state-default sorting_asc dt-border-lr"
                            rowspan="1" colspan="1" title="">
                            <div class="DataTables_sort_wrapper"></div>
                        </th>
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
                        <th class="1-mo visibled group-post-trade sorting_disabled ui-state-default ">
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
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839711" id="458795">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 01-May-19<br/> Transacted: 01-May-19 ">01-May-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                            class="fas fa-arrow-alt-circle-down" title="Sell"
                                            style="vertical-align:middle"></span>
                                </span>
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
                            <a href="" target="blank" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                        <td class=" holding">
                            <span title=" Holding changed 0%<br>Holds 59.23% of <BR>Shares on Issue ">16,802,697</span>
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
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839788" id="458788">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
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
                            <span class="amount_down" title="Ordinary Shares ">25,000</span>
                        </td>
                        <td class=" at"><span class="at"> @</span></td>
                        <td class=" price">£<span
                                    title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.13<br/>Latest Close Price: GBP 5.08</span> ">5.13</span>
                        </td>
                        <td class="note visibled"></td>
                        <td class="source visibled">
                            <a href="" target="blank" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839799" id="458799">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="546998" id="16527">David Harris</a>
                        </td>
                        <td class="title visibled">
                            <span title="Non-Executive:Chairman<br/>(Chairman) ">N:Chair</span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 24-Apr-19<br/> Transacted: 18-Apr-19 ">18-Apr-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span buy_type">
                                    <b title=" Buy ">Buy</b> <span
                                            class="fas fa-arrow-alt-circle-up" title="Buy"
                                            style="vertical-align:middle"></span>
                                </span>
                        </td>
                        <td class="amount visibled">
                            <span class="amount_up" title="Ordinary Shares ">2,000</span>
                        </td>
                        <td class=" at"><span class="at"> @</span></td>
                        <td class=" price">£<span
                                    title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.06<br/>Latest Close Price: GBP 5.08</span> ">5.06</span>
                        </td>
                        <td class="note visibled"></td>
                        <td class="source visibled">
                            <a target="blank" class="" href="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 41 out of 100" class="fa fa-star star1 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839791" id="458791">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a class="persontooltip  personname" dir="839764" id="458750" href="">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 15-Apr-19<br/> Transacted: 15-Apr-19 ">15-Apr-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type">
                                    <b title=" Sell ">Sell</b> <span
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
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839711" id="458711">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 12-Apr-19<br/> Transacted: 12-Apr-19 ">12-Apr-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type">
                                    <b title=" Sell ">Sell</b> <span class="fas fa-arrow-alt-circle-down" title="Sell"
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
                            <a href="" target="blank" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                                    <span title="Significance 48 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 48 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 48 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 48 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 48 out of 100" class="fa fa-star star1 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839779" id="458779">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 05-Apr-19<br/> Transacted: 04-Apr-19 ">04-Apr-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type">
                                    <b title=" Sell ">Sell</b> <span
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
                            <a target="blank" href="" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                                    <span title="Significance 39 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 39 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 39 out of 100" class="fa fa-star star1 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839777" id="458777">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled"><span
                                    title="Announced: 02-Apr-19<br/> Transacted: 02-Apr-19 ">02-Apr-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type">
                                    <b title=" Sell ">Sell</b> <span class="fas fa-arrow-alt-circle-down" title="Sell"
                                                                     style="vertical-align:middle"></span>
                                </span>
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
                            <a target="blank" href="" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                                    <span title="Significance 36 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 36 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 36 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 36 out of 100" class="fa fa-star star1 starm"></span>
                                    <span title="Significance 36 out of 100" class="fa fa-star star1 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839761" id="458712">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">
                                <span>Mark Sheppard</span>
                            </a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) "> P:Inv'ment Mgr </span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 12-Feb-19<br/> Transacted: 12-Feb-19 ">12-Feb-19</span>
                        </td>
                        <td class=" type"><b title=" Subscribe to new<br>issue ">Subs</b></td>
                        <td class="amount visibled">
                            <span class="amount_up" title="Ordinary Shares ">762,363</span>
                        </td>
                        <td class=" at">
                            <span class="at"> @</span>
                        </td>
                        <td class=" price">£<span
                                    title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.00<br/>Latest Close Price: GBP 5.08</span> ">5.00</span>
                        </td>
                        <td class="note visibled"></td>
                        <td class="source visibled">
                            <a target="blank" class="" href="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
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
                        <td class=" holding">
                            <span title=" Holding changed 5%<br>Holds 59.77% of <BR>Shares on Issue ">16,957,697</span>
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
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839733" id="458733">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
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
                            <span title="By M&amp;M Investment Company Plc - A Company Controlled By Director">By M&amp;M Investment Compa...</span>
                        </td>
                        <td class="source visibled">
                            <a target="blank" class="" href="">
                                    <span title="Show Source Announcement<br>Shares traded were held beneficially but held Indirectly"
                                          class="far fa-file-alt rotateY txt-orange"></span>
                            </a>
                        </td>
                        <td class="tblTransaction-isCluster visibled"></td>
                        <td class="tblsignal-SignalReason visibled"></td>
                        <td class="value visibled">
                                <span class="value_up"
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
                        <td class=" holding">
                            <span title=" Holding changed 5%<br>Holds 58.66% of <BR>Shares on Issue ">16,195,334</span>
                        </td>
                        <td class="holding_change visibled">5%</td>
                        <td class="sii-col visibled">58.66%</td>
                        <td class="rating visibled">
                                <span class="bars">
                                    <span title="Significance 52 out of 100" class="fa fa-star star2 starm"></span>
                                    <span title="Significance 52 out of 100" class="fa fa-star star2 starm"></span>
                                    <span title="Significance 52 out of 100" class="fa fa-star star2 starm"></span>
                                    <span title="Significance 52 out of 100" class="fa fa-star star2 starm"></span>
                                    <span title="Significance 52 out of 100" class="fa fa-star star2 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839766" id="458766">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href=""
                               class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled">
                            <span title="Announced: 28-Jan-19<br/> Transacted: 28-Jan-19 ">28-Jan-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type">
                                    <b title=" Sell ">Sell</b> <span class="fas fa-arrow-alt-circle-down" title="Sell"
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
                        <td class="source visibled">
                            <a target="blank" href="" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
                            </a>
                        </td>
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
                                    <span title="Significance 67 out of 100" class="fa fa-star star3 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839755" id="458755">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
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
                                </span>
                        </td>
                        <td class="amount visibled">
                            <span class="amount_down" title="Ordinary Shares ">220,000</span>
                        </td>
                        <td class=" at"><span class="at"> @</span></td>
                        <td class=" price">£<span
                                    title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.39<br/>Latest Close Price: GBP 5.08</span> ">4.39</span>
                        </td>
                        <td class="note visibled"></td>
                        <td class="source visibled">
                            <a target="blank" href="" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
                            </a>
                        </td>
                        <td class="tblTransaction-isCluster visibled"></td>
                        <td class="tblsignal-SignalReason visibled"></td>
                        <td class="value visibled">
                                <span class="value_down"
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
                        <td class="rating visibled">
                                <span class="bars">
                                    <span title="Significance 67 out of 100"
                                          class="fa fa-star star3 starm active"></span>
                                    <span title="Significance 67 out of 100"
                                          class="fa fa-star star3 starm active"></span>
                                    <span title="Significance 67 out of 100" class="fa fa-star star3 starm "></span>
                                    <span title="Significance 67 out of 100" class="fa fa-star star3 starm"></span>
                                    <span title="Significance 67 out of 100" class="fa fa-star star3 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="company sorting_1">
                            <a href="" class="companytooltip  companyname" dir="839722" id="458722">
                                <span>Orsted As</span>
                            </a>
                        </td>
                        <td class=" persons">
                            <a href="" class="persontooltip  personname" dir="839764" id="458750">Mark Sheppard</a>
                        </td>
                        <td class="title visibled">
                            <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                        </td>
                        <td class="tdate visibled"><span
                                    title="Announced: 23-Jan-19<br/> Transacted: 23-Jan-19 ">23-Jan-19</span>
                        </td>
                        <td class=" type">
                                <span class="buysell-span sell_type">
                                    <b title=" Sell ">Sell</b> <span class="fas fa-arrow-alt-circle-down" title="Sell"
                                                                     style="vertical-align:middle"></span>
                                </span>
                        </td>
                        <td class="amount visibled">
                            <span class="amount_down" title="Ordinary Shares ">204,000</span>
                        </td>
                        <td class=" at"><span class="at"> @</span></td>
                        <td class=" price">£<span
                                    title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.46<br/>Latest Close Price: GBP 5.08</span> ">4.46</span>
                        </td>
                        <td class="note visibled"></td>
                        <td class="source visibled">
                            <a target="blank" href="" class="">
                                <span title="Show Source Announcement" class="far fa-file-alt rotateY"></span>
                            </a>
                        </td>
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
                        <td class="rating visibled">
                                <span class="bars">
                                    <span title="Significance 67 out of 100"
                                          class="fa fa-star star3 starm active"></span>
                                    <span title="Significance 67 out of 100"
                                          class="fa fa-star star3 starm active"></span>
                                    <span title="Significance 67 out of 100"
                                          class="fa fa-star star3 starm active"></span>
                                    <span title="Significance 67 out of 100" class="fa fa-star star3 starm"></span>
                                    <span title="Significance 67 out of 100" class="fa fa-star star3 starm"></span>
                                </span>
                        </td>
                        <td class="salary-data visibled"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="pb-2"></div>

    <div class="modals">
        <div class="modal fade-scale modalCustom" id="modalTransactionAdvanced" tabindex="-1" role="dialog"
             aria-labelledby="modalTransactionAdvanced" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center py-0 position-relative">
                        <h4 class="modal-title w-100 py-1"> Advanced Transaction Criteria </h4>
                        <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                        </button>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="col-left ttypes-cols">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="3" value="3"
                                                   name="- Award" type="checkbox">
                                            <label for="3" id="label_3" class="left-ttypes custom-control-label "> -
                                                Award
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="4" value="4"
                                                   name="- BUY" type="checkbox">
                                            <label for="4" id="label_4"
                                                   class="left-ttypes custom-control-label special"> -
                                                BUY
                                            </label>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="5" value="5"
                                                   name="- Div Re" type="checkbox">
                                            <label for="5" id="label_5" class="left-ttypes custom-control-label"> -
                                                Div Re
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="6" value="6"
                                                   name="- Exercise" type="checkbox">
                                            <label for="6" id="label_6" class="left-ttypes custom-control-label"> -
                                                Exercise
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="8" value="8"
                                                   name="- Subscribe" type="checkbox">
                                            <label for="8" id="label_8" class="left-ttypes custom-control-label"> -
                                                Subscribe
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="9" value="9"
                                                   name="- Transfer In" type="checkbox">
                                            <label for="9" id="label_9" class="left-ttypes custom-control-label"> -
                                                Transfer In
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" id="16" value="16"
                                                   name="- Contract Buy" type="checkbox">
                                            <label for="16" id="label_16" class="left-ttypes custom-control-label">
                                                - Contract Buy
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="col-right ttypes-cols">
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" value="11" id="11"
                                                   name="- SELL" type="checkbox">
                                            <label class="right-ttypes custom-control-label special" for="11"
                                                   id="label_11"> - SELL
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" value="12" id="12"
                                                   name="- Sale Post-Exercise" type="checkbox">
                                            <label class="right-ttypes custom-control-label " for="12"
                                                   id="label_12"> - Sale Post-Exercise
                                            </label>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" value="13" id="13"
                                                   name="- Transfer Out" type="checkbox">
                                            <label class="right-ttypes custom-control-label" for="13" id="label_13">
                                                - Transfer Out
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" value="14" id="14"
                                                   name="- Given Away" type="checkbox">
                                            <label class="right-ttypes custom-control-label" for="14" id="label_14">
                                                - Given Away
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input" value="15" id="15"
                                                   name="- Transfer" type="checkbox">
                                            <label class="right-ttypes custom-control-label" for="15" id="label_15">
                                                - Transfer
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <ul class="cluster-maiden">
                                    <li id="Exclude_Program_Buys">
                                        <div class="custom-control custom-checkbox">
                                            <input class=" custom-control-input" id="ex_p_b" value="ex_p_b"
                                                   name="- Exclude Program Buys" type="checkbox">
                                            <label for="ex_p_b" class="custom-control-label ">Exclude Program
                                                Buys</label>
                                        </div>
                                    </li>
                                    <li id="maiden-trades">
                                        <div class="custom-control custom-checkbox">
                                            <input class=" custom-control-input" id="maiden" value="maiden"
                                                   name="- Exclude Maiden Buys" type="checkbox">
                                            <label for="maiden" class=" custom-control-label special">Exclude Maiden
                                                Buys</label>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="cluster-maiden">
                                    <li id="Exclude_Program_Sells">
                                        <div class="custom-control custom-checkbox">
                                            <input class=" custom-control-input" value="ex_p_s" id="ex_p_s"
                                                   name="- Exclude Program Sells" type="checkbox">
                                            <label class=" custom-control-label" for="ex_p_s">Exclude Program
                                                Sells</label>
                                        </div>
                                    </li>
                                    <li id="Exclude_Surrenders">
                                        <div class="custom-control custom-checkbox">
                                            <input class="more-ttypes-data custom-control-input"
                                                   value="exclude_surrenders" id="exclude_surrenders"
                                                   name="-  Exclude Surrenders" type="checkbox">
                                            <label class="right-ttypes custom-control-label special"
                                                   for="exclude_surrenders">Exclude Surrenders
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <ul class=" cluster-maiden ">
                                    <li>
                                        <div class="custom-control custom-checkbox d-flex justify-content-center">
                                            <input class="more-ttypes-data custom-control-input"
                                                   id="exclude_margin_calls" value="exclude_margin_calls"
                                                   onchange="update_cluster_maiden(this)"
                                                   name="- Exclude Margin Calls" type="checkbox">
                                            <label for="exclude_margin_calls" class="custom-control-label ">Exclude
                                                Margin Calls</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0 d-flex justify-content-center">
                        <div class="form-group my-1 my-lg-0 d-flex justify-content-center">
                            <button type="button"
                                    class="px-3 my-0 btn btn-block bg-success text-white font-weight-bold button">
                                SET AS FILTERS
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade-scale modalCustom" id="modalSaveSearch" tabindex="-1" role="dialog"
             aria-labelledby="modalSaveSearch" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center py-0 position-relative">
                        <h4 class="modal-title w-100 py-1"> Save Search </h4>
                        <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4 align-self-center">
                                <div class="custom-select-option">
                                    <div class="md-form my-1 my-lg-0 d-flex justify-content-center">
                                        <select id="savesearch-select" name="savesearch" title=""
                                                class="mdb-select md-form colorful-select dropdown-primary" size="1"
                                                onchange="onSelectChange();">
                                            <option value="save">Save new search</option>
                                            <option id="45611" value="2 index">2 index</option>
                                            <option id="45627" value="2portfolio">2portfolio</option>
                                            <option id="45633" value="aaa">aaa</option>
                                            <option id="45620" value="AAAA">AAAA</option>
                                            <option id="44980" value="asd">asd</option>
                                            <option id="45001" value="old search">old search</option>
                                            <option id="45622" value="SSS">SSS</option>
                                            <option id="44978" value="testing wali">testing wali</option>
                                            <option id="45621" value="XYZ">XYZ</option>
                                        </select>
                                        <input name="usersearchid1" type="hidden" id="usersearchid1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 align-self-center">
                                <div class="md-form my-1 my-lg-0 d-flex justify-content-center">
                                    <label id="savenewspan" class="align-items-center">Save&nbsp;as: <input
                                                type="text" id="savenew" name="savenew" value="" maxlength="100"
                                                class="px-1">
                                    </label>
                                    <label id="renamespan" class="align-items-center" style="display: none;">Rename?&nbsp;:
                                        <input type="text" id="rename" name="rename" value=""
                                               maxlength="100" class="px-1"></label>
                                </div>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <div class="form-group my-1 my-lg-0 d-flex justify-content-center">
                                    <button type="button"
                                            class="px-2 mb-0 btn btn-block bg-success text-white font-weight-bold button">
                                        SAVE
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-primary mt-3 mb-0 px-1 py-2" role="alert">
                            <div id="response2"
                                 class="response d-flex align-items-center justify-content-between px-1">
                                <i class="fas fa-exclamation-triangle" aria-hidden="true"></i> <span
                                        class="ml-2 text-center text-lg-left"> Save a new search or overwrite an existing one.
                                        Duplicate names will overwrite existing saved searches. </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade-scale modalCustom" id="modalCreateAlert" tabindex="-1" role="dialog"
             aria-labelledby="modalCreateAlert" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center py-0 position-relative">
                        <h4 class="modal-title w-100 py-1"> Create Email Alert </h4>
                        <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h5 class="w-100 py-1 font-weight-bold modal-inner-head"> 2portfolio </h5>
                                <div class="modal-wrapper d-flex justify-content-center align-items-center">
                                    <label for="currencyID"> Reported&nbsp;Currency&nbsp;:&nbsp;</label> &nbsp;
                                    <div class="custom-select-option">
                                        <div class="md-form my-1 my-lg-0 d-flex justify-content-center">
                                            <select id="currencyID" name="currencyID" size="1"
                                                    class="my-1 my-lg-0 mdb-select md-form colorful-select dropdown-primary">
                                                <option value="">--Select Currency--</option>
                                                <option value="52"> Display in GBP (£)</option>
                                                <option value="49"> Display in Euros (€)</option>
                                                <option selected="" value="161"> Display in Dollars ($)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12 align-self-center">
                                <div class="alert-frequency d-flex flex-wrap">
                                    <div class="form-check form-check-inline w-50 mr-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="alert_daily"
                                                   name="alertRadios" checked="checked">
                                            <label class="custom-control-label" for="alert_daily"> Daily
                                                (Mon-Fri)</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline w-50 mr-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="alert_weekly"
                                                   name="alertRadios">
                                            <label class="custom-control-label" for="alert_weekly"> Weekly </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12 align-self-center">
                                <div class="date-adjust d-flex flex-wrap">
                                    <div class="w-50 sentTime">
                                        <!-- Material input -->
                                        <label for="input_starttime">Time sent (UK Time)</label>
                                        <div class="md-form input-group my-0">
                                            <input type="text"
                                                   class="pl-2 border border-light form-control timepicker pl-0 rounded-0"
                                                   id="input_starttime" placeholder="Selected time">
                                            <div class="input-group-append">
                                            <span class="input-group-text md-addon blue-grey lighten-4"><span
                                                        class="input-group-icon"><span class="fa fa-clock"></span>
                                                </span></span>
                                            </div>
                                        </div>
                                        <label for="input_starttime" id="lbl-starttime" class="w-100"> Current UK
                                            Time:
                                            <span>10:10 </span></label>
                                    </div>
                                    <div class="w-50 sentday" style="display: none;">
                                        <div class="d-flex justify-content-center flex-column mt-1">
                                            <label for="sentDay"> Day sent&nbsp;:&nbsp;</label>
                                            <div class="custom-select-option mt-1">
                                                <div class="md-form my-1 my-lg-0 d-flex justify-content-center">
                                                    <select id="sentDay" name="sentDay"
                                                            class="w-100 my-1 my-lg-0 mdb-select md-form colorful-select dropdown-primary ">
                                                        <option value="">--Select Day--</option>
                                                        <option value="1"> Monday</option>
                                                        <option value="2"> Tuesday</option>
                                                        <option value="3"> Wednesday</option>
                                                        <option value="4"> Thursday</option>
                                                        <option value="5"> Friday</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row my-2">
                            <div class="col-9 align-self-center">
                                <span class="alert-text"> You are creating an email alert for Insider Trades </span>
                            </div>
                            <div class="col-3 align-self-center">
                                <div class="form-group my-1 my-lg-0 d-flex justify-content-center">
                                    <button type="button"
                                            class="px-1 my-0 btn btn-block bg-success text-white font-weight-bold button">
                                        Done
                                    </button>
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
