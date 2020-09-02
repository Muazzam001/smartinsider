<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white filtering ranking">

    <form>
        <div class="row mt-0 mb-0 pt-lg-3 mt-lg-4 mb-lg-1 criteria-col click-show">
            <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding rank-criteria">
                <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold"> Rank </h4>
                <hr class="title-separator">
                <div class="row mt-0 pt-1 pt-lg-2 pb-lg-1">
                    <div class="col-12 pt-lg-2 pb-0 pb-lg-1 d-flex justify-content-center">
                        <div class="w-100 chart-area d-flex align-items-center justify-content-center flex-wrap flex-column">
                            <img class="img-fluid" src="assets/images/pie.png" title="Rank Chart" alt="Rank Chart">

                            <div class="custom-control custom-checkbox custom-checkbox1 d-flex align-items-center justify-content-center ">
                                <input type="checkbox" class="custom-control-input rank1 rank-checkbox" id="rank1"
                                       name="rank1" value="6" checked="checked">
                                <label class="custom-control-label" for="rank1"> </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox2 d-flex align-items-center justify-content-center ">
                                <input type="checkbox" class="custom-control-input rank1 rank-checkbox" id="rank2"
                                       name="rank2" value="5" checked="checked">
                                <label class="custom-control-label" for="rank2"> </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox3 d-flex align-items-center justify-content-center ">
                                <input type="checkbox" class="custom-control-input rank3 rank-checkbox" id="rank3"
                                       name="rank3" value="3" checked="checked">
                                <label class="custom-control-label" for="rank3"> </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-checkbox4 d-flex align-items-center justify-content-center ">
                                <input type="checkbox" class="custom-control-input rank4 rank-checkbox" id="rank4"
                                       name="rank4" value="2" checked="checked">
                                <label class="custom-control-label" for="rank4"> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding signal-criteria">
                <h4 class="heading criteria d-flex text-dark  border-custom font-weight-bold"> Signal Type </h4>
                <hr class="title-separator">
                <div class="row pt-2 mb-3">
                    <div class="col-12 pt-1 pb-1 d-flex flex-column justify-content-lg-between">
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="current_signals"
                                       name="signalRadios" checked="checked">
                                <label class="custom-control-label" for="current_signals"> Current Signals Only </label>
                            </div>
                        </div>
                        <div class="form-check form-check-inline pt-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="all_signals" name="signalRadios">
                                <label class="custom-control-label" for="all_signals"> All Historic Signals </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding date-criteria">
                <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Date Criteria </h4>
                <hr class="title-separator">
                <div id="variable-date-set" class="row mt-0 mb-2 my-lg-3 dateSet variable-date-set click-show ">
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
                        <div id="moreYear" class="form-check form-check-inline w-33 py-1 mx-0">
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

                <div id="exact-date-set" class="row mt-2 mb-2 my-lg-3 dateSet exact-date-set click-hide ">
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
        </div>

        <div class="row mt-3 mb-1 criteria-col click-show">
            <div class="col-lg-4 mt-2 mb-1 my-lg-0 col-padding company-criteria">
                <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold">
                    Company Criteria </h4>
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
                <div class="row mt-3 mb-1 mt-lg-3 mb-lg-1">
                    <div class="col-2 col-lg-4 align-self-center">
                        <div class="row">
                            <div class="col align-self-center"><label for="defunc"> Defunct&nbsp;: </label></div>
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
                <h4 class="heading criteria d-flex text-dark   border-custom font-weight-bold"> Sector </h4>
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
                <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Actions </h4>
                <hr class="title-separator">
            </div>

            <div class="col-lg-8 mb-1 my-lg-0 align-self-start col-padding text-center">
                <div id="savesearch"
                     class="save-search action_box pl-lg-5 d-flex flex-wrap mt-0  justify-content-center justify-content-lg-start click-show">
                    <label id="vieweditsave" class=" d-flex align-items-center" data-toggle="modal"
                           data-target="#modalSaveSearch">
                        <span class="fas fa-bookmark text-success "></span> <span
                                class="title_b"> Save My Search </span>
                    </label>
                </div>
                <div id="editsearch"
                     class="edit-search action_box pl-lg-5 d-flex w-100 mt-0  justify-content-center justify-content-lg-start click-hide">
                    <div class="update-labels">
                        <label id="updaterename1" class=" d-flex align-items-center " data-toggle="modal"
                               data-target="#modalSaveSearch">
                            <span class="fas fa-bookmark text-success"></span> <span
                                    class="title_b"> Update / Rename </span>
                        </label>

                        <label id="emailalert1" class="d-flex  align-items-center pt-2" data-toggle="modal"
                               data-target="#modalCreateAlert">
                            <span class="fas fa-bell golden"></span> <span
                                    class="title_b"> Create Email Alert </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-2 mb-3 my-lg-0 col-padding text-center show-transaction align-self-center">
                <div id="showFilter" class="action_box w-60 w-sm-50 w-lg-75 mx-auto">
                    <div class="form-group my-0">
                        <button id="filter-show" type="button"
                                class="btn btn-block bg-success text-white mb-2 font-weight-bold button">
                            RUN FILTER
                        </button>
                    </div>
                </div>
                <span id="filter-reset" class=" action_box set-reset">
                    <span class="fas fa-redo-alt text-success"></span> <span class="title_b"> Clear all Criteria </span>
                </span>
            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col-12 col-padding mt-2">
                <div class="filter-heading bg-custom py-2 px-3 ">
                    <h3 class="heading search-filter d-flex flex-column flex-sm-row flex-sm-row justify-content-between align-items-center text-white font-weight-bold">
                        <span>Last Search</span>
                        <span class="transaction-detail text-center"><span> 5 Positive & 4 Negative </span></span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="row mt-3 mb-1 pt-1 dataTable-col click-hide">
<!--            <div class="col-12 col-padding">-->
<!--                <h4 class="heading criteria d-flex text-dark border-custom font-weight-bold"> Search Results </h4>-->
<!--                <hr class="title-separator">-->
<!--            </div>-->

            <div class="col-12 col-padding">
                <div class="ranking-filter-search-result">
                    <table id="example" class="display ranking-search-result-table w-100">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="company_name">Company Name</th>
                            <th class="bloomberg">Bloomberg</th>
                            <th class="country">Country</th>
                            <th class="super_sector">Super Sector</th>
                            <th class="market_cap">Mkt Cap ($)</th>
                            <th class="rank">Rank</th>
                            <th class="start">Start</th>
                            <th class="end">End</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td >
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>ABC Tiger Nixon</td>
                            <td>System Architect</td>
                            <td><img src="assets/images/flag-uk.png" alt="country-flag"></td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>

                        <tr class="even">
                            <td>
                                <span class="none toggler">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr class="even">
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="toggler" data-value="">
                                    <span class="far fa-plus-square clickable "></span>
                                </span>
                            </td>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>Boron</td>
                            <td>$320,800</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>2012/04/25</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="pb-2"></div>

        <div class="modals">
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
                                                    type="text"
                                                    id="savenew"
                                                    name="savenew"
                                                    value=""
                                                    maxlength="100">
                                        </label>
                                        <label id="renamespan" class="align-items-center" style="display: none;">Rename?&nbsp;:
                                            <input type="text" id="rename" name="rename" value=""
                                                   maxlength="100"></label>
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
                                                    class="input-group-icon"><span class="fa fa-clock"></span>
                                            </span></span>
                                        </div>
                                    </div>
                                    <label for="input_starttime" id="lbl-starttime" class="w-100">Current UK Time:
                                        <span>10:10 </span></label>
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
    </form>
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
