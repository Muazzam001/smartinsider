<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white buyback filtering">

    <div class="row mt-2 mb-3">
        <div class="col-12 mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex flex-column flex-sm-row justify-content-between align-items-center text-white font-weight-bold">
                    <span>Last Search</span>
                    <span class="transaction-detail text-center"><span> 0 Company </span></span>
                </h3>
            </div>
        </div>
    </div>

    <form>
        <div class="row mt-0 mb-0 mt-lg-4 mb-lg-1 criteria-col click-show">
            <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding">
                <div class="custom-criteria-block transaction-criteria">
                    <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                        Transaction Criteria </h4>
                    <hr class="title-separator">
                    <div class="row mt-0 mb-1 mt-lg-4 mb-lg-2 pt-lg-2">
                        <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="dailyVol"> Daily
                                Vol&nbsp;: </label>
                        </div>
                        <div class="col-lg-8 align-self-center">
                            <div class="row">
                                <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                                    <div class="custom-select-option">
                                        <label class="mr-sm-2 sr-only" for="dailyVol1">Daily Vol - 1</label>
                                        <select onchange="setMinValue(this,'select[name=dvol2]')" name="dvol1"
                                                id="dvol1" title=""
                                                class="min-val mdb-select md-form colorful-select dropdown-primary">
                                            <option value="0">0%</option>
                                            <option selected="selected" value="5">5%</option>
                                            <option value="25">25%</option>
                                            <option value="50">50%</option>
                                            <option value="75">75%</option>
                                            <option value="100">100%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                                    <div class="custom-select-option mt-2 mt-md-0">
                                        <label class="mr-sm-2 sr-only" for="dailyVol2">Daily Vol - 2</label>
                                        <select onchange="setMaxValue(this,'select[name=dvol1]')" name="dvol2"
                                                id="dvol2" title=""
                                                class="max-val mdb-select md-form colorful-select dropdown-primary">
                                            <option value="0">0%</option>
                                            <option value="5">5%</option>
                                            <option value="25">25%</option>
                                            <option value="50">50%</option>
                                            <option value="75">75%</option>
                                            <option value="100">100%</option>
                                            <option selected="" value="100+">100%+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 pt-1 mt-lg-3 pt-lg-1">
                        <div class="col-lg-4 align-self-center mb-1 mb-lg-0"><label for="value">Value&nbsp;: </label>
                        </div>
                        <div class="col-lg-8 align-self-center">
                            <div class="row">
                                <div class="col-md-6 align-self-center" style="margin-top: -2px;">
                                    <div class="custom-select-option">
                                        <label class="mr-sm-2 sr-only" for="value1">Value - 1</label>
                                        <select id="value1" name="value1"
                                                onchange="setMinValue(this,'select[name=value2]')"
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
                                        <select id="value2" name="value2"
                                                onchange="setMaxValue(this,'select[name=value1]')"
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
                    <div class="row mt-1 pt-1 mt-lg-2 pt-lg-1">
                        <div class="col-lg-4 align-self-center"></div>
                        <div class="col-lg-8 align-self-center">
                            <div id="intentionTrade" class="form-group form-check pl-0 pt-1 mb-0">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="showIntTrade">
                                    <label class="custom-control-label" for="showIntTrade"> Show Intentions to
                                        Trade </label>
                                </div>
                                <input type="hidden" id="showIntTradeValue" value="0">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="custom-criteria-block company-criteria mt-2 pt-2 mt-lg-4 pt-lg-2">
                    <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Company Criteria </h4>
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
                                            <label class="d-flex align-items-center "> <span class="switchStateL"> Portfolio </span>
                                                <input type="checkbox" checked>
                                                <span class="lever"></span> <span class="switchStateR font-weight-bold"> Index </span>
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
                                <div class="col align-self-center"><label for="portfolio"> Portfolio&nbsp;: </label>
                                </div>
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
                                <div class="col align-self-center"><label for="holdingType"> Holding
                                        Type&nbsp;: </label>
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
                                <div class="col align-self-center"><label class="mb-1" for="defunc"> Defunct&nbsp;: </label></div>
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 align-self-center">
                            <div class="row">
                                <div class="col align-self-center">
                                    <div class="exclude-defunct custom-switcher switcher-box d-flex justify-content-start align-items-center w-100 mw-100 mt-0 mt-lg-1">
                                        <div class="switch ">
                                            <label class=" d-flex align-items-center "> <span class="switchStateL">Include </span>
                                                <input type="checkbox" checked>
                                                <span class="lever"></span> <span class="switchStateR font-weight-bold"> Exclude</span>
                                            </label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="exclude-defunct" value="0" id="exclude-defunct">
                                </div>
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

            <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding">
                <div class="custom-criteria-block date-criteria">
                    <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Date Criteria </h4>
                    <hr class="title-separator">
                    <div class="row mt-2 pt-2 mb-1 pb-1 mt-lg-4 pt-lg-1 mb-lg-0 pb-lg-0 ">
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
                        <div class="col-12 d-flex flex-wrap justify-content-lg-between">
                            <div class="col-12 d-flex flex-wrap justify-content-lg-start px-0">
                                <div class="form-check form-check-inline w-100 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateToday"
                                               name="dateRadios">
                                        <label class="custom-control-label" for="dateToday"> Today - Monday 8th </label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline w-100 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateYester"
                                               name="dateRadios">
                                        <label class="custom-control-label" for="dateYester"> Yesterday - Friday
                                            5th </label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline w-33 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateWeek"
                                               name="dateRadios">
                                        <label class="custom-control-label" for="dateWeek"> Week </label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline w-33 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateMonth"
                                               name="dateRadios" checked="checked">
                                        <label class="custom-control-label" for="dateMonth"> Month </label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline w-33 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateQuarter"
                                               name="dateRadios">
                                        <label class="custom-control-label" for="dateQuarter"> Quarter </label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline w-33 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateYear"
                                               name="dateRadios">
                                        <label class="custom-control-label" for="dateYear"> Year </label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline w-33 py-1 mx-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dateFYear"
                                               name="dateRadios">
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
                    </div>

                    <div id="exact-date-set" class="row mt-2 mb-2 my-lg-2 dateSet exact-date-set click-hide ">
                        <!--Grid column-->
                        <div class="col-md-6">

                            <div class="md-form my-1 mt-lg-3 mb-lg-1 pt-1">
                                <!--The "from" Date Picker -->
                                <input placeholder="From" type="date" id="exactDateFrom"
                                       class="form-control datepicker my-0">
                                <label class="sr-only" for="startingDate">Start Date</label>
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">

                            <div class="md-form my-1 mt-lg-3 mb-lg-1 pt-1">
                                <!--The "to" Date Picker -->
                                <input placeholder="To" type="date" id="exactDateTo" name="exactDateTo"
                                       class="form-control datepicker my-0">
                                <label class="sr-only" for="endingDate">End Date</label>
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
                <div class="custom-criteria-block sector-criteria mt-2 pt-2 mt-lg-4 pt-lg-2">
                    <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">
                        Sector </h4>
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
        </div>

        <div class="row mt-0 mb-0 mt-lg-3 mb-lg-1 action-col click-show">
            <div class="col-12 col-padding mb-1 pb-2">
                <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Actions </h4>
                <hr class="title-separator">
            </div>

            <div class="col-lg-4 mt-0 mb-3 my-lg-0 col-padding save-search overwrite-default">
                <div id="savesearch" class="action_box pl-0 pl-lg-5 d-flex flex-wrap">
                    <label id="vieweditsave" class="w-100 d-flex align-items-center" data-toggle="modal"
                           data-target="#modalSaveSearch">
                        <span class="fas fa-bookmark mid-icon text-success "></span> <span
                                class="title_b"> Save My Search </span>
                    </label>
                </div>

                <div id="defaultsearch" class="action_box pl-0 pl-lg-5 mt-2">
                    <label id="over-default" class="w-100 d-flex align-items-center" data-toggle="popover"
                           title="Overwrite Default" data-content="Default options overwritten.">
                        <span class="fas fa-edit mid-icon text-success"></span> <span
                                class="title_b">Overwrite Default Settings</span>
                    </label>
                </div>
            </div>

            <div class="col-lg-4 mt-0 mb-3 my-lg-0 col-padding text-center edit-search click-hide">
                <div id="editsearch" class="action_box pl-5 d-flex flex-wrap mt-2">
                    <div class="update-labels">
                        <label id="updaterename1" class="w-100 d-flex align-items-center " data-toggle="modal"
                               data-target="#modalSaveSearch">
                            <span class="fas fa-bookmark mid-icon text-success"></span> <span
                                    class="title_b"> Update / Rename </span>
                        </label>

                        <label id="emailalert1" class="w-100 d-flex  align-items-center pt-2" data-toggle="modal"
                               data-target="#modalCreateAlert">
                            <span class="fas fa-bell mid-icon golden"></span> <span class="title_b"> Create Email Alert </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-2 mb-3 my-lg-0 col-padding text-center sort-default">
                <div id="sorts" class="w-60 w-sm-50 w-lg-75  d-flex align-items-center ml-auto mr-auto">
                    <span class="sort-select custom-select-option">
                        <select class=" mdb-select md-form colorful-select dropdown-primary"
                                id="inlineFormCustomSelect1" title="">
                            <option value="" disabled selected>Choose Order</option>
                            <option code="asc" value="1">Company Name: A-Z</option>
                            <option code="desc" value="1">Company Name: Z-A</option>
                            <option code="asc" value="8">Value: Lowest First</option>
                            <option code="desc" value="8">Value: Highest First</option>
                        </select>
                    </span>
                </div>
            </div>

            <div class="col-lg-4 mt-2 mb-3 my-lg-0 col-padding text-center show-transaction align-self-center">
                <div id="showtransaction" class="action_box w-60 w-sm-50 w-lg-75  mx-auto">
                    <div class="form-group my-0">
                        <button id="trans-show" type="button"
                                class="btn btn-block bg-success text-white mb-2 font-weight-bold button">
                            SHOW TRANSACTIONS
                        </button>
                    </div>
                    <span id="trans-reset" class="set-reset">
                        <span class="fas fa-redo-alt text-success"></span> <span
                                class="title_b"> Clear all Criteria </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="row mt-3 mb-3 conditional-criteria-col click-hide">
            <div class="col-lg-8 col-padding mt-2 mb-2 mt-sm-0 mb-sm-1 selected-criteria">
                <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold"> Selected Criteria </h4>
                <hr class="title-separator">

                <div class="selected-criteria-block d-flex flex-wrap mt-3 pt-1">
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

            <div class="col-lg-4 col-padding mt-2 mb-2 mt-sm-0 mb-sm-1 actions">
                <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold"> Actions </h4>
                <hr class="title-separator">

                <div class="action-block d-flex flex-wrap mt-3 ">
                    <span id="action_save" class="lbl-actions text-left w-50" data-toggle="modal"
                          data-target="#modalSaveSearch">
                        <span class="fas fa-edit text-success"></span> <span class="title_b"> Save Search </span>
                    </span>
                    <span id="action_email_alert" class="lbl-actions text-left w-50 " data-toggle="modal"
                          data-target="#modalCreateAlert">
                        <span class="fas fa-bell golden"></span> <span class="title_b"> Create Email Alert </span>
                    </span>
                    <span id="action_reset" class="lbl-actions text-left w-50">
                        <span class="fas fa-redo-alt text-success "></span> <span class="title_b"> Reset Filter </span>
                    </span>

                    <div class="form-group w-100 my-0">
                        <button id="change-criteria" type="button"
                                class="btn btn-block bg-success text-white w-50 w-lg-75 mx-auto mt-3 mb-0 font-weight-bold button">
                            CHANGE CRITERIA
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade-scale modalCustom" id="modalSaveSearch" tabindex="-1" role="dialog"
             aria-labelledby="modalSaveSearch" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center py-0">
                        <h4 class="modal-title w-100 py-1"> Save Search </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4 align-self-center">
                                <div class="custom-select-option">
                                    <div class="md-form my-1 my-lg-0 d-flex justify-content-center">
                                        <select id="savesearch-select" name="savesearch" size="1" title=""
                                                class="mdb-select md-form colorful-select dropdown-primary"
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
                                    <label id="savenewspan" class="align-items-center">Save&nbsp;as: <input type="text"
                                                                                                            id="savenew"
                                                                                                            name="savenew"
                                                                                                            value=""
                                                                                                            maxlength="100">
                                    </label>
                                    <label id="renamespan" class="align-items-center" style="display: none;">Rename?&nbsp;:
                                        <input type="text" id="rename" name="rename" value="" maxlength="100"></label>
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
                        <div class="alert alert-primary mt-4 mb-0 px-1 py-2" role="alert">
                            <div id="response2" class="response d-flex align-items-center justify-content-between px-1">
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
                    <div class="modal-header text-center py-0">
                        <h4 class="modal-title w-100 py-1"> Create Email Alert </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h5 class="w-100 py-1 font-weight-bold modal-inner-head"> 2portfolio </h5>
                                <div class="modal-wrapper d-flex justify-content-center">
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
                                            <input name="usersearchid2" type="hidden" id="usersearchid2">
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
                                <!-- Material input -->
                                <label for="input_starttime">Time sent (UK Time)</label>
                                <div class="md-form input-group my-0">
                                    <input type="text"
                                           class="pl-2 border border-light form-control timepicker pl-0 rounded-0"
                                           id="input_starttime" placeholder="Selected time">
                                    <div class="input-group-append">
                                        <span class="input-group-text md-addon blue-grey lighten-4"><span
                                                    class="input-group-icon"><span class="fas fa-clock"></span>
                                            </span></span>
                                    </div>
                                </div>
                                <label for="input_starttime" id="lbl-starttime" class="w-100">Current UK Time: <span>10:10 </span></label>
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

<!--        <div class="row my-1 my-lg-3">-->
<!--            <div class="col-12 mt-2">-->
<!--                <div class="filter-heading empty_area py-1 px-3 mx-3 ">-->
<!--                    <h3 class="heading search-filter d-flex justify-content-center align-items-center">-->
<!--                        <span>Last Search</span>-->
<!--                    </h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row mt-3 mb-1 mt-lg-3 mb-lg-1  dataTable-col click-hide">
            <div class="col-12 col-padding mt-1">
                <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold"> Search Results </h4>
                <hr class="title-separator">
                <div class="trade-history-filters w-50 d-flex justify-content-between">
                    <div class="trade-filter w-100 d-flex justify-content-between">
                        <div id="sorts2"
                             class=" d-flex justify-content-between align-items-center trade-history-filter w-100 w-md-50">
                            <span class="filter-label mr-3" title="">Sort: </span>
                            <span class="sort-select custom-select-option">
                                <select class=" mdb-select md-form colorful-select dropdown-primary"
                                        id="inlineFormCustomSelect2">
                                    <option value="" disabled selected>Choose Order</option>
                                    <option code="asc" value="1">Company Name: A-Z</option>
                                    <option code="desc" value="1">Company Name: Z-A</option>
                                    <option code="asc" value="8">Value: Lowest First</option>
                                    <option code="desc" value="8">Value: Highest First</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-padding mt-1">
                <div class="search-result mt-1">
                    <div class="dataTables_wrapper nested-tables">
                        <table class="table table-condensed bg-first buyback_table" style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th class="company" title="">
                                    <div data-toggle="collapse" data-target="#demo1"
                                         class="accordion-toggle expand-yearly_th">
                                        <span id="dt1" class="far fa-plus-square clickable"></span>
                                    </div>
                                    <span><a href="https://alpha.smartinsider.com/app/members/company?c=13846"
                                             id="13846" class="companytooltip" title=""> SP Group As </a></span>
                                </th>
                                <th class="shares" title="Shares repurchased for All Selected Dates">
                                    <span> 6.23 K Shares </span>
                                </th>
                                <th class="top_level_intention intention" title=""><span
                                            class="icon  fas fa-info-circle"></span> <span>1 intention</span></th>
                                <th class="value value_feild GBP"
                                    title="Total Value Repurchased for All Selected Dates">
                                    <span>£144 K</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="6" class="hiddenRow">
                                    <div class="accordian-body collapse mx-3" id="demo1">
                                        <table class="table table-condensed bg-second yearly_table"
                                               style="border-collapse:collapse;">
                                            <thead class="yearly_head">
                                            <tr>

                                                <th class="date_feild" title="">
                                                    <div data-toggle="collapse" data-target="#demo12"
                                                         class="accordion-toggle expand_th">
                                                        <span id="dt2" class="far fa-plus-square clickable"></span>
                                                    </div>
                                                    <span> 2019</span>
                                                </th>
                                                <th class="year_amount" title="">
                                                    <span>6.23 K</span>
                                                </th>
                                                <th id="trade_count_2019" title="">
                                                    <!--                        <span>Currency+Price</span>  -->
                                                </th>
                                                <th class="year_value" title="Total Value Repurchased in Year">
                                                    <span class="value_feild">£144 K</span>
                                                </th>
                                                <!--                    <th title='Percentage of Daily Volume'>
                                                        <span>Volume</span>
                                                    </th>-->
                                                <th style="visibility:hidden" class="icons monthly_intention intention">
                                                    <span style="display: none;">1 intention Announcement</span></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td colspan="6" class="hiddenRow">
                                                    <div class="accordian-body collapse mx-3" id="demo12">
                                                        <table class="intention_table">
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7" title="">
                                                                    <div class="intention_wrapper">
                                                                        <span class="intention_close">
                                                                            <span class="icon fas fa-times-circle"></span>
                                                                        </span>
                                                                        <div class="intention_detail">
                                                                            <p class="intention_head_text">Buyback
                                                                                Intention Announcement </p>
                                                                            <span class="intention month_level_intention">
                                                                                            <span class="intention_period"><b> 1st Apr 2019 : </b></span> SP Group As intends to invest a maximum of DKK 40,000,000 to repurchase shares. To take place starting from 11th April 2019 and to be completed by 31st December 2019.</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <table class="table table-condensed bg-third monthly_table"
                                                               style="border-collapse:collapse;">
                                                            <thead class="monthly_thead">
                                                            <tr>
                                                                <td class="date_field">
                                                                    <div data-toggle="collapse" data-target="#demo13"
                                                                         class="accordion-toggle expand_th"><span
                                                                                id="dt3"
                                                                                class="far fa-plus-square clickable"></span>
                                                                    </div>
                                                                    <span id="month_WeeklyData1"
                                                                          title="Mar 2019">March</span>
                                                                </td>
                                                                <td class="month_amount"
                                                                    title="Total Repurchased in Month">
                                                                    <span data="6225">6.23 K</span>
                                                                </td>
                                                                <td class="month_price" title="">
                                                                    <span></span> <span class="monthly_trade_count"
                                                                                        style="display: none;">5 Trades</span>
                                                                </td>
                                                                <td class="month_value"
                                                                    title="Total Value Repurchased in Month">
                                                                    <span class="value_field GBP"
                                                                          data="144,380">£144 K</span>
                                                                </td>
                                                                <td class="month_volume">
                                                                    <span></span>
                                                                </td>
                                                                <td class="icons" title="">
                                                                    <span class="icon-wrapper">
                                                                        <span class="icon-img">
                                                                            <span title="Effect By: Issuer"
                                                                                  class="icon  fas fa-handshake IS"></span>
                                                                        </span>
                                                                        <span class="icon-img">
                                                                            <span class="icon fas fa-university TR"
                                                                                  title="Reason: To be held in treasury; which holds 277,772 shares"></span>
                                                                        </span>
                                                                        <span class="icon-img">
                                                                            <span title="By Way Of: On Market"
                                                                                  class="icon  fas fa-chart-line OM"></span>
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7" class="hiddenRow">
                                                                    <div class="accordian-body collapse mx-3"
                                                                         id="demo13">
                                                                        <table class="table table-condensed bg-fourth weekly_table"
                                                                               style="border-collapse: collapse; ">
                                                                            <thead class="weekly_thead">
                                                                            <tr>
                                                                                <td class="date_field">
                                                                                    <div data-toggle="collapse"
                                                                                         data-target="#demo14"
                                                                                         class="accordion-toggle expand_th">
                                                                                        <span id="dt4"
                                                                                              class="far fa-plus-square clickable"></span>
                                                                                    </div>
                                                                                    <span title="22 Mar - 28 Mar  2019"> Week 4 </span>
                                                                                </td>
                                                                                <td class="week_amount"
                                                                                    title="Total Repurchased in Week">
                                                                                    <span>6.23 K</span>
                                                                                </td>
                                                                                <td class="week_price" title="">
                                                                                    <span> </span>
                                                                                    <span class="weekly_trade_count">5 Trades</span>
                                                                                </td>
                                                                                <td class="week_value"
                                                                                    title="Total Value Repurchased in Week">
                                                                                    <span class="value_feild">£144 K</span>
                                                                                </td>
                                                                                <td class="week_volume">
                                                                                    <span></span>
                                                                                </td>
                                                                                <td class="icons">
                                                                                    <span class="icon-wrapper">
                                                                                        <span class="icon-img">
                                                                                            <span title="Effect By: Issuer"
                                                                                                  class="icon  fas fa-handshake IS"></span>
                                                                                        </span>
                                                                                        <span class="icon-img">
                                                                                            <span class="icon fas fa-university TR"
                                                                                                  title="Reason: To be held in treasury; which holds 277,772 shares"></span>
                                                                                        </span>
                                                                                        <span class="icon-img">
                                                                                            <span title="By Way Of: On Market"
                                                                                                  class="icon  fas fa-chart-line OM"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td colspan="7" class="hiddenRow">
                                                                                    <div class="accordian-body collapse mx-3"
                                                                                         id="demo14">
                                                                                        <table class="table table-condensed bg-fifth daily_table"
                                                                                               style="border-collapse:collapse;">
                                                                                            <tbody>
                                                                                            <tr class="">
                                                                                                <td class="date_field">
                                                                                                    <span title="22 Mar 2019">22 Mar</span>
                                                                                                </td>
                                                                                                <td class="d-flex justify-content-between"
                                                                                                    title="Amount of Trade">
                                                                                                    <span>999</span>
                                                                                                    <span class="at_sign">@</span>
                                                                                                </td>
                                                                                                <td class=""
                                                                                                    title="Price per Share">
                                                                                                    <span>DKK 203</span>
                                                                                                </td>
                                                                                                <td class="daily_value"
                                                                                                    title="Value of Repurchase">
                                                                                                    <span class="value_field">£23.4 K</span>
                                                                                                </td>
                                                                                                <td title="Percentage of Daily Volume">
                                                                                                    <span>16.5%</span>
                                                                                                </td>
                                                                                                <td class="icons">
                                                                                                    <span class="icon-wrapper">
                                                                                                        <span class="icon-img">
                                                                                                            <span title="Effect By: Issuer"
                                                                                                                  class="icon  fas fa-handshake IS"></span>
                                                                                                            </span>
                                                                                                            <span class="icon-img">
                                                                                                                <span class="icon fas fa-university TR"
                                                                                                                      title="Reason: To be held in treasury; which holds 277,772 shares"></span>
                                                                                                            </span>
                                                                                                            <span class="icon-img">
                                                                                                                <span title="By Way Of: On Market"
                                                                                                                      class="icon  fas fa-chart-line OM"></span>
                                                                                                            </span>
                                                                                                    </span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="pb-2"></div>
    </form>
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
