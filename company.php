<?php require("includes/header.php"); ?>

<!-- .container -->
<div class="sidenav">
    <ul id="sideNav" class="float-nav p-0">
        <li>
            <a class="" href="#header">Home</a>
        </li>
        <li class="item-rankhistory">
            <a href="#stock_history" title="" class="accordion-toggle toggler" data-toggle="collapse"
               data-target="#togSignalHistory">Signal History (N)</a>
        </li>
        <li>
            <a href="#page_filter_chart">Advanced Chart</a>
        </li>
        <!--        <li>-->
        <!--            <a href="#directors_cards">Directors</a>-->
        <!--        </li>-->
        <li class="item-tradehistory">
            <a href="#trade_history">Trade History <span class="trans_num"> (982)</span></a>
        </li>
        <!--<li class="item-tradesummary"><a title="" href="#trade-summary-button1">Trade Summary </a></li>-->
        <li class="item-buyback">
            <a href="#company_buyback" title="">Buybacks <span class="bbcount">(114)</span></a>
        </li>
    </ul>
</div>

<main role="main" class="container content bg-white company filtering main">
    <div class="loading" style="display:none;"><img src="" alt=""></div>

    <div class="row ">
        <div class="col-12 ">
            <div class="noBuybackTooltip text-center text-lg-left mt-md-1 ">
                <span>Associated British Foods has not made any buyback announcements since we initiated coverage on 01 Jan 2014</span>
            </div>
            <div class="insiderStartInfo text-center text-lg-left mt-1">
                <time datetime="1999-01-17 20:00">00:01 17 Jan 1999</time>
            </div>
            <div class="rankInfo text-center text-lg-left mb-1">0:3</div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 ">
            <div id="ranking-editor" class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="rank-action-wrapper left-rank-editor w-100 w-lg-30 ranks-border">
                    <div class="rank-editor-heading d-flex justify-content-between align-items-center px-2"> <span>Selected
                        Trades </span> <a href="#"
                                          class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Draft</a>
                    </div>
                    <div class="trade-directors ">
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                    <input type="checkbox" class="custom-control-input trade-checkbox" id="8152818"
                                           name="8152818" value="" checked="checked">
                                    <label class="custom-control-label" for="8152818"> </label>
                                </span>
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">08-May-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                    <input type="checkbox" class="custom-control-input trade-checkbox" id="8143643"
                                           name="8143643" value="" checked="checked">
                                    <label class="custom-control-label" for="8143643"> </label>
                                </span>
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">01-May-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                    <input type="checkbox" class="custom-control-input trade-checkbox" id="8143661"
                                           name="8143661" value="" checked="checked">
                                    <label class="custom-control-label" for="8143661"> </label>
                                </span>
                            </div>
                            <div class="trd-col2 w-40">Fischer, David</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#FF8080">Sp-x</div>
                            <div class="trd-col4 w-30 ml-auto text-right">30-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                    <input type="checkbox" class="custom-control-input trade-checkbox" id="8138723"
                                           name="8138723" value="" checked="checked">
                                    <label class="custom-control-label" for="8138723"> </label>
                                </span>
                            </div>
                            <div class="trd-col2 w-40">Wehner, David</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">25-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                    <input type="checkbox" class="custom-control-input trade-checkbox" id="8138722"
                                           name="8138722" value="" checked="checked">
                                    <label class="custom-control-label" for="8138722"> </label>
                                </span>
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">24-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <span class="custom-control custom-checkbox custom-checkbox1  ">
                                    <input type="checkbox" class="custom-control-input trade-checkbox" id="8133620"
                                           name="8133620" value="" checked="checked">
                                    <label class="custom-control-label" for="8133620"> </label>
                                </span>
                            </div>
                            <div class="trd-col2 w-40">Zuckerberg, Mark</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">18-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8133605" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">17-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8133615" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Sandberg, Sheryl</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right" title="">16-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8130460" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Zuckerberg, Mark</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right" title="">15-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8132386" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Fischer, David</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#FF8080" title="">Sp-x</div>
                            <div class="trd-col4 w-30 ml-auto text-right">15-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8127552" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Zuckerberg, Mark</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">10-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8129253" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">10-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8124429" class="trade-checkbox"
                                       title=""></div>
                            <div class="trd-col2 w-40">Zuckerberg, Mark</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">05-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8124424" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Sandberg, Sheryl</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#FF8080" title="">Sp-x</div>
                            <div class="trd-col4 w-30 ml-auto text-right">04-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8111748" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Cox, Christopher</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">03-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8124413" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right" title="">03-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8124414" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Fischer, David</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right" title="">03-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8121878" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Cox, Christopher</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444" title="">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">01-Apr-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8114381" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Stretch, Colin</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#d04444">SELL</div>
                            <div class="trd-col4 w-30 ml-auto text-right">27-Mar-19</div>
                        </div>
                        <div class="trd-row d-flex justify-content-start align-items-center pl-2 pr-3">
                            <div class="trd-col1 w-10">
                                <input type="checkbox" id="8111748" class="trade-checkbox"
                                       title="">
                            </div>
                            <div class="trd-col2 w-40">Sandberg, Sheryl</div>
                            <div class="trd-col3 w-20 ml-auto text-right" style="color:#FF8080">Sp-x</div>
                            <div class="trd-col4 w-30 ml-auto text-right" title="">25-Mar-19</div>
                        </div>
                    </div>
                </div>
                <div class="rank-action-wrapper right-rank-editor w-100 w-lg-70 pl-lg-2 pt-lg-0 pt-1">
                    <div class="right-top-rank">
                        <div class="right-top-row1 d-flex justify-content-between align-items-center my-1 mt-md-0">
                            <div class="trs-row w-15 d-flex align-items-center">
                                <div class="mr-2">Rank</div>
                                <div class="custom-select-option" title="">
                                    <label for="rank-select" class="mr-sm-2 sr-only">Rank Select</label>
                                    <select id="rank-select" title=""
                                            class=" mdb-select md-form colorful-select dropdown-primary">
                                        <option value="2">+1</option>
                                        <option value="3">+N</option>
                                        <option value="4" selected="selected">N</option>
                                        <option value="5">-N</option>
                                        <option value="6">-1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="trs-row d-flex align-items-center">
                                <div class="text-nowrap mx-2" title="">Reason Code</div>
                                <div class="multiSelectOptions custom-select-option">
                                    <label class="mr-sm-2 sr-only" for="jobTitle"> Job Title </label>
                                    <select id="jobTitle" class="mdb-select md-form basic-multiple-select"
                                            multiple="multiple">
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
                            <div class="trs-row d-flex align-items-center">
                                <div id="selectExpiryDate" class="form-group form-check pl-0 ml-2 mb-0 expiry-checkbox">
                                    <div class="custom-control custom-checkbox pl-0 pr-4">
                                        <input type="checkbox" class="custom-control-input" id="expiryDate">
                                        <label class="custom-control-label pt-0 " for="expiryDate"> Expiry Date </label>
                                    </div>
                                </div>
                                <div class="expiryField ml-2">
                                    <div class="form-group mb-0">
                                        <input id="expiry-date" type="text" class="form-control hasDatepicker"
                                               placeholder="Enter expiry">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="right-top-left-rank ranks-border">
                                <div class="rank-editor-heading px-2 py-2" title=""> Draft Trade Commentary</div>
                                <label class="w-100">
                                    <textarea class="commentary-editor w-100 h-100 border-0 " rows="6"
                                              title=""></textarea>
                                </label>
                            </div>

                            <div class="action-buttons d-flex justify-content-center align-items-center justify-content-lg-between flex-column flex-lg-row">
                                <div class="info-text d-flex flex-column font-weight-bold">
                                    <span>You have this draft signal Locked for editing.</span>
                                    <span title=""> Cusip : 30303M102</span>
                                </div>
                                <div class="trd-row " style="margin-top:2px">
                                    <a href="" title="" data-toggle="modal"
                                       data-target="#modalPortfolioList"
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Portfolio
                                        List</a>
                                    <a href="" id="save-signal" title=""
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Save</a>
                                    <a href="" id="save-and-exit" title=""
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Save
                                        &amp; Exit</a>
                                    <a href="" id="discard-changes" title=""
                                       class="rank-action btn btn-blue-grey text-white button py-1 px-2 m-1 text-capitalize">Discard
                                        Changes</a>
                                    <a href="" id="delete-signal"
                                       class="rank-action btn bg-danger text-white button py-1 px-2 m-1 text-capitalize">Delete</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="rank-action-wrapper right-bottom-rank w-100 mt-2 ">
                    <a href="#" id="add-new-rank"
                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize ">Add a new
                        Rank</a>
                    <a data-toggle="modal" data-target="#modalPortfolioList"
                       class="rank-action btn  bg-success text-white button py-1 px-2 m-1 text-capitalize">Portfolio
                        List</a>
                    <div class="rank-details ranks-border">
                        <div class="rank-editor-heading bg-custom-1 d-flex justify-content-between align-items-center px-2"
                             title=""><span>Internal Blog (Times Displayed EST)</span> <a href="" data-toggle="modal"
                                                                                          data-target="#modalInternalBlog"
                                                                                          class="open-litebox rank-action btn bg-success text-white button py-1 px-3 m-1 text-capitalize">Add</a>
                        </div>

                        <div class="blog-editor py-1">
                            <div class="bl-row d-flex justify-content-start align-items-center px-2 flex-wrap flex-md-nowrap">
                                <span class="bl-col1 w-20 text-wrap text-break">William Lattimer</span>
                                <span class="bl-col2 w-20 text-wrap text-break">11 Apr</span>
                                <span class="bl-col3 w-100">Zuckerberg first sale since aug 2018; appears he doesn't want to sell below 175?</span>
                            </div>
                            <div class="bl-row d-flex justify-content-start align-items-center px-2 flex-wrap flex-md-nowrap">
                                <span class="bl-col1 w-20 text-wrap text-break">Farhan Hanif</span>
                                <span class="bl-col2 w-20 text-wrap text-break">06 Nov 18</span>
                                <span class="bl-col3 w-100">-N? continuous programmed selling from two executives</span>
                            </div>
                        </div>

                    </div>
                    <div id="selectPermDel" class="form-group form-check pt-1 pt-md-0 pl-0 mb-0 selectPermDel">
                        <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input" id="permDel">
                            <label class="custom-control-label" for="permDel"> Delete Permanently </label>
                        </div>
                        <div id="confirm-dialog" style="/*! display:none; */">
                            <div class="confirm-del">
                                <h4 class="heading mb-0">Are you sure you want to delete this Ranking permanently?</h4>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="row mt-2 mb-3" id="header">
        <div class="col-12 mt-2">
            <div class="filter-heading bg-custom py-1 px-2 ">
                <div class="company-intro heading d-flex flex-wrap">
                    <div class="intro-sec intro-left d-flex flex-column align-items-center align-items-lg-start w-100 w-lg-50">
                        <div class="d-flex align-items-center">
                            <a href="" title="">
                                <img id="228" class=" countrytooltip" title="" src="assets/images/gb.png" alt="">
                            </a>
                            <h1 class="intro-heading tooltip-area"
                                title="Listed: 13-Mar-2017<br>  Default Listing: Ord NPV" id="company-short">
                                <span id="company-name">Ocean Outdoor Limited </span>
                            </h1>
                        </div>

                        <div class="d-flex mt-auto">
                            <div class="url">
                                <a href="" target="_blank" title="">www.ocelotpartnerslimited...</a>
                            </div>
                        </div>
                    </div>
                    <div class="intro-sec intro-right d-flex flex-column align-items-center  align-items-lg-end w-100 w-lg-50">
                        <div class="company-info d-flex justify-content-center ">
                            <div class="sector d-flex flex-column align-items-center align-items-lg-end">
                                <span id="88001" class="company-sector companytooltip sectortooltip" onclick=""
                                      title=""> Media </span>
                                <span class="company-identity" title=""> <span class="company-identity-tag">ISIN: VGG6702A1084</span> OOUT.GB</span>
                            </div>
                            <img class="sector-img companytooltip sectortooltip" id="88002"
                                 src="assets/images/403010.png" onclick="" title="" alt="">
                        </div>
                        <span class="m-cap" title="Market Cap with 54.0 Million Shares on Issue">$416 Million</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <form>
        <div class="row my-2 my-lg-2 page-section" id="stock_history">
            <div class="col-12  mb-1 my-lg-0 ">
                <div class="tabbed-tables">
                    <table class="table table-condensed " style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th>
                                <div class="table-top w-100">
                                    <div
                                            class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
                                        <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                                            <span data-toggle="collapse" data-target="#togSignalHistory"
                                                  class="accordion-toggle toggler">
                                                <span id="signalHistory" class="far fa-plus-square clickable"></span>
                                            </span><span>Signal History (Neutral)</span>
                                            <span id="38770" title="" class="ml-2 rankingtooltip noteyes">
                                                <span style="font-weight:bold; color:#6EBE01" title=""> +N <i
                                                            class="fa fa-folder-open infopN"></i>
                                                </span>
                                            </span>
                                        </h4>
                                        <div class="issuer-actions d-flex mt-2 mt-md-0 w-100 w-md-auto justify-content-between">
                                            <div class="fc-action-button" id="fc-dnld">
                                                <span class="fc-action-tooltip"
                                                      title="Printable report at time of latest significant trade<br>Report Date: 4th Mar 2019 ">
                                                    <a target="blank" onclick="" href="" title=""> Download Report <i
                                                                class="fas fa-arrow-circle-down"></i> </a>
                                                </span>
                                            </div>
                                            <div class="fc-action-button" id="fc-settings">
                                                <a target="blank" href=""> Page Settings <i class="fa fa-cog"></i> </a>
                                            </div>
                                            <div class="fc-action-button" id="fc-request">
                                                <span class="fc-action-tooltip"
                                                      title="Tell us if you see a data issue or something not working right">
                                                    <a onclick="" href="javascript:void(0)" title="">
                                                        <span class="r-span" title="">Request More Info </span> <i
                                                                class="fas fa-hand-pointer"></i>
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="fc-action-button" id="fc-add">
                                                <a title="Add To Portfolio" onclick="">
                                                    <input type="hidden" class="addtoportfoliobutton" alt="add"
                                                           value="Add To Portfolio">
                                                    <span class="portfolio-span" title="">Add To Portfolio</span>
                                                    <i class="fas fa-plus-circle" title=""></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="title-separator">
                                </div>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="hiddenRow py-0 px-1">
                                <div class="accordian-body tab-padding collapse" id="togSignalHistory">
                                    <div class="stock-history d-flex flex-wrap">
                                        <div class="stock-info d-flex w-100 w-md-50 justify-content-center justify-content-lg-start">
                                            <div class="pie-img w-50 d-block text-center mx-auto mw-100">
                                                <img src="assets/images/N_pie.png" alt="" class="pie img-fluid w-75">
                                            </div>
                                            <div class="commentry-box w-50"> Aryeh Bourkoff (Director; CEO and founder
                                                of LionTree) purchased 32,000 shares on April 23 at US$ 7.90, spending
                                                US $225,000. While not new to the company, this appears to be Bourkoff's
                                                first open market purchase. The company announced on March 21 that it
                                                would begin buying back stock, up to 5 million shares. We are ranking
                                                the stock +N.
                                            </div>
                                        </div>
                                        <div class="stock-rows d-flex w-100 w-md-50 flex-column mt-3 mt-lg-0">
                                            <div class="rank-row rank-row-head rank-inactive d-flex flex-wrap justify-content-center text-center">
                                                <div class="rank-col rank-col1 w-25">Signal History</div>
                                                <div class="rank-col rank-col2 w-25">Start</div>
                                                <div class="rank-col rank-col3 w-25">End</div>
                                                <div class="rank-col rank-col4 w-25 rank-tooltipsy"
                                                     title="<span style='color:#74b620'>Green is Good</span><br>Where Negative signals are assigned Returns are calculated as if sold short">
                                                    Performance
                                                </div>
                                            </div>
                                            <div class="rank-row rank-row-body activeRank-0 iteration-0 d-flex flex-wrap justify-content-center text-center">
                                                <div class="rank-col rank-col1 w-25" id="rank-38770">
                                                    <span id="38771" class="rankingtooltip noteyes" title="">
                                                        <span style="font-weight:bold; color:#6EBE01"
                                                              title=""> +N <i
                                                                    class="fa fa-folder-open infopN"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="rank-col rank-col2 w-25">14-Jul-16</div>
                                                <div class="rank-col rank-col3 w-25">31-Oct-16</div>
                                                <div class="rank-col rank-col4 w-25" style="color:#d04545">-11.2%</div>
                                                <div class="click-hide hidden-commentry w-100 text-center text-lg-right"
                                                     id="commentry-38771">
                                                    Richard Reid (Non-Executive Director since April 2016) purchased
                                                    3,347 shares on July 13 at GBP 28.20, spending GBP 95,000. This is
                                                    Reid's first purchase in the stock, having joined three months ago.
                                                    At that time, the stock was above 3,300.
                                                    Wolfhart Hauser (Non-Executive, joined January 2015) purchased 2,635
                                                    shares on July 7 at GBP 26.60, spending GBP 70,000. Hauser's only
                                                    other purchase was in April 2015 at GBP 27.41. That last purchase
                                                    was timely, and now he is spending almost double what he spent last
                                                    year. The stock has retreated about 20% from it's recent March high,
                                                    and these two directors appear to see an opportunity in this
                                                    pullback. We are ranking the stock +N.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-2 my-lg-2 page-section" id="page_filter_chart">
            <div class="col-12  mb-1 my-lg-0 ">
                <div class="tabbed-tables">
                    <table class="table table-condensed " style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th>
                                <div class="table-top ">
                                    <div class="page-filters w-100 d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row flex-md-wrap">
                                        <div class="page-left-filter w-100 w-md-30 d-flex justify-content-between flex-column">
                                            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                                            <span data-toggle="collapse" data-target="#togPageFilters"
                                                  class="accordion-toggle toggler">
                                                <span id="pageFilters" class="far fa-plus-square clickable"></span>
                                            </span>
                                                <span class="w-100 d-flex justify-content-between align-items-center">
                                                    <span class="w-100 multiple-header font-weight-normal ">
                                                        <span class="header-title d-inline-flex justify-content-between w-100 ">
                                                            <a href="javascript:void(0)"
                                                               class="main-title font-weight-bold">
                                                                <span id="boardroom" class=""
                                                                      data-type="boardroom">Boardroom </span>
                                                            </a>&nbsp;|&nbsp;
                                                            <a href="javascript:void(0)"
                                                               class=" sub-title text-success text-wrap"
                                                               title="">
                                                                <span id="best-buyer" class="inner-title"
                                                                      data-type="best-buyer">Best Buyers</span>
                                                            </a> &nbsp;|&nbsp;
                                                            <a class=" sub-title text-success text-wrap"
                                                               href="javascript:void(0)"
                                                               title="">
                                                                    <span id="holdings" class="inner-title"
                                                                          data-type="holdings">Holdings</span>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </h4>
                                            <hr class="title-separator">
                                        </div>
                                        <div class="page-right-filter w-100 w-md-70 d-flex justify-content-between">
                                            <div class="d-flex flex-column mx-0 ml-md-2 w-100">
                                                <div class="adChart-heading d-flex align-items-end w-100">
                                                    <h4 class="heading criteria text-nowrap d-flex text-dark border-custom font-weight-bold pl-1">
                                                        <span> Chart </span>
                                                    </h4>
                                                    <div class="adChart-info d-flex w-100 flex-column flex-md-row justify-content-end align-items-center pl-1 pl-md-2">
                                                        <div class="switcher-block ml-auto">
                                                            <div class="adchart-signal-switch switcher-box d-flex justify-content-center align-items-center">
                                                                <div class="switch">
                                                                    <label class="mb-0 d-inline-flex align-items-center">
                                                                        <span class="switchStateL font-weight-bold"> Close Periods </span>
                                                                        <input type="checkbox">
                                                                        <span class="lever"></span>
                                                                        <span class="switchStateR"> Signal History </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="title-separator">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="hiddenRow py-0 px-1">
                                <div class="accordian-body tab-padding collapse" id="togPageFilters">
                                    <div class="stock-history d-flex flex-wrap">
                                        <div class="stock-info d-flex w-100 w-md-30 justify-content-center justify-content-lg-start">
                                            <div class="w-100 ml-0 ml-md-n3">
                                                <div id="multiheader_boardroom"
                                                     class="multiheader boardroom directors-list" style="">
                                                    <div class="designatary">
                                                        <div class="row director-title director-title-2">
                                                            <div class="cols-2 col title-col Executive" title="">
                                                            <span class="title-text" title="">
                                                                <i id="button_2"
                                                                   class="collapse-icon far fa-minus-square"></i>
                                                                <input checked="checked" class="section-checkbox"
                                                                       id="Executive" type="checkbox"><b title="">Executive</b></span>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_2 " style="">
                                                        <span id="director-level_1053937" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person" title="">
                                                                <a id="644767" dir="1053937"
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=644767&amp;c=360"
                                                                   title="" class="persontooltip">Marco Gobbetti</a> <b
                                                                        title="Chief Executive Officer">CEO</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_2 " style="">
                                                            <span id="director-level_1053810" #alt="newfiltericon"
                                                                  class="newfilter fa fa-filter filter-blue"
                                                                  title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person" title="">
                                                                <a id="644652" dir="1053810"
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=644652&amp;c=360"
                                                                   title="" class="persontooltip">Julie Brown</a> <b
                                                                        title="Chief Operating Officer &amp; Chief Financial Officer">COO
                                                                    &amp; CFO</b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="designatary">
                                                        <div class="row director-title director-title-3">
                                                            <div class="cols-2 col title-col Non-Executive" title="">
                                                            <span class="title-text" title="">
                                                                <i id="button_3"
                                                                   class="collapse-icon far fa-plus-square"></i>
                                                                <input checked="checked" class="section-checkbox"
                                                                       id="Non-Executive" type="checkbox"><b title="">Non-Executive</b></span>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_1116122" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="23195" dir="1116122" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=23195&amp;c=360"
                                                                   class="persontooltip">Gerard Murphy</a> <b
                                                                        title="Chairman">Chair</b></div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_881611"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="495439" dir="881611" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=495439&amp;c=360"
                                                                   class="persontooltip">Jeremy Darroch</a> <b
                                                                        title="Senior Independent Director">Sr.
                                                                    Ind.</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_939365" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="10366" dir="939365" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=10366&amp;c=360"
                                                                   class="persontooltip">Fabiola Arredondo</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_387802" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="25697" dir="387802" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=25697&amp;c=360"
                                                                   class="persontooltip">Ian Carter</a> <b title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_1111311" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="109624" dir="1111311" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=109624&amp;c=360"
                                                                   class="persontooltip">Ronald Frasch</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5151"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="31790" dir="5151" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=31790&amp;c=360"
                                                                   class="persontooltip">Stephanie George</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_822467"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="444189" dir="822467" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=444189&amp;c=360"
                                                                   class="persontooltip">Matthew Key</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_879400" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="18766" dir="879400" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=18766&amp;c=360"
                                                                   class="persontooltip">Carolyn McCall</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_3 display_none "
                                                             style="display:none">
                                                        <span id="director-level_1104118" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="684032" dir="1104118" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=684032&amp;c=360"
                                                                   class="persontooltip">Orna Nichionna</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="designatary">
                                                        <div class="row director-title director-title-4">
                                                            <div class="cols-2 col title-col Senior_Officer" title="">
                                                            <span class="title-text" title="">
                                                                <i id="button_4"
                                                                   class="collapse-icon far fa-plus-square"></i> <input
                                                                        checked="checked" class="section-checkbox"
                                                                        id="Senior_Officer" type="checkbox"><b title="">Senior Officer</b>
                                                            </span>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_1044842"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="637234" dir="1044842" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=637234&amp;c=360"
                                                                   class="persontooltip">Marco Gentile</a> <b
                                                                        title="Divisional President">Div. Pres.</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_816474" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="439088" dir="816474" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=439088&amp;c=360"
                                                                   class="persontooltip">Jan Heppe</a> <b
                                                                        title="Divisional President">Div. Pres.</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_621721"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="275054" dir="621721" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=275054&amp;c=360"
                                                                   class="persontooltip">Andrew Maag</a> <b
                                                                        title="Regional President">Reg. CEO</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_396701" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="487492" dir="396701" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=487492&amp;c=360"
                                                                   class="persontooltip">Eugenia Ulasewi...</a> <b
                                                                        title="Country President">Cntry
                                                                    Pres</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_394655" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="50135" dir="394655" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=50135&amp;c=360"
                                                                   class="persontooltip">Pascal Perrier</a> <b
                                                                        title="Regional Chief Executive Officer">Reg.
                                                                    CEO</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_685878"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="325723" dir="685878" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=325723&amp;c=360"
                                                                   class="persontooltip">Catherine Sukmo...</a> <b
                                                                        title="Company Secretary">Co Sec</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_685881"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="325724" dir="685881" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=325724&amp;c=360"
                                                                   class="persontooltip">Michael Mahoney</a> <b
                                                                        title="General Counsel">Gen Cou</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_1111051"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="689270" dir="1111051" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=689270&amp;c=360"
                                                                   class="persontooltip">Riccardo Tisci</a> <b
                                                                        title="Chief Creative Officer">Chf Creative
                                                                    Of...</b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_1047224" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="639151" dir="1047224" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=639151&amp;c=360"
                                                                   class="persontooltip">Donald Kohler</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_4 display_none "
                                                             style="display:none">
                                                        <span id="director-level_590886"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="21259" dir="590886" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=21259&amp;c=360"
                                                                   class="persontooltip">John Smith</a> <b title=""></b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="designatary">
                                                        <div class="row director-title director-title-5">
                                                            <div class="cols-2 col title-col Former" title="">
                                                            <span class="title-text" title="">
                                                                <i id="button_5"
                                                                   class="collapse-icon far fa-plus-square"></i><input
                                                                        checked="checked" class="section-checkbox"
                                                                        id="Former" type="checkbox"><b
                                                                        title="States Holding at last reported trade.<br> Trades after departure may not be reported.">Former</b></span>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5150" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="28967" dir="5150" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=28967&amp;c=360"
                                                                   class="persontooltip">Angela Ahrendts</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_881612" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="495440" dir="881612" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=495440&amp;c=360"
                                                                   class="persontooltip">Christopher Bailey</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5149"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="25490" dir="5149" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=25490&amp;c=360"
                                                                   class="persontooltip">Brian Blake</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5143" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="11235" dir="5143" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=11235&amp;c=360"
                                                                   class="persontooltip">Philip Bowman</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5139"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="13632" dir="5139" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=13632&amp;c=360"
                                                                   class="persontooltip">Rose Bravo</a> <b title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5147" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="11561" dir="5147" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=11561&amp;c=360"
                                                                   class="persontooltip">Stacey Cartwright</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5148"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="15088" dir="5148" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=15088&amp;c=360"
                                                                   class="persontooltip">Terence Duddy</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_823029" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="444677" dir="823029" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=444677&amp;c=360"
                                                                   class="persontooltip">Carol Fairweather</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_474911"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="147294" dir="474911" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=147294&amp;c=360"
                                                                   class="persontooltip">Joy Frommer</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5146"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="12743" dir="5146" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=12743&amp;c=360"
                                                                   class="persontooltip">Caroline Marland</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5140"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="19047" dir="5140" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=19047&amp;c=360"
                                                                   class="persontooltip">Michael Metcalf</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5141"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="19609" dir="5141" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=19609&amp;c=360"
                                                                   class="persontooltip">Thomas O'Neill</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5142"
                                                              #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="12947" dir="5142" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=12947&amp;c=360"
                                                                   class="persontooltip">John Peace</a> <b title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5144"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              #alt="newfiltericon"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="19926" dir="5144" title="" class="persontooltip"
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=19926&amp;c=360">
                                                                    Guy Peyrelongue</a> <b title=""></b>
                                                            </div>
                                                        </div>
                                                        <div class="row director-data row_5 display_none "
                                                             style="display:none">
                                                        <span id="director-level_5145" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                            <div class="cols-2 col data-col dir-person">
                                                                <a id="13404" dir="5145" title=""
                                                                   href="https://dev3.smartinsider.com/app/members/person?p=13404&amp;c=360"
                                                                   class="persontooltip">David Tyler</a> <b
                                                                        title=""></b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="multiheader_best-buyer" class="multiheader best-buyers"
                                                     style="display: none;">
                                                    <div class="row director-data " style="">
                                                        <span id="buyer-level_1050017" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Buyer for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Daniel Huttenlocher</a>
                                                        </div>
                                                        <span class="buyer-return font-weight-normal"
                                                              title="Best Buyer for this Director"> <span>+62</span><span>%</span></span>
                                                        <span class="buyer-hold font-weight-normal ml-2"
                                                              title="Best Buyer for this Director"> <span>33</span></span>
                                                    </div>
                                                    <div class="row director-data " style="">
                                                        <span id="buyer-level_1050010" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Buyer for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Judith Mcgarth</a>
                                                        </div>
                                                        <span class="buyer-return font-weight-normal"
                                                              title="Best Buyer for this Director"> <span>+42</span><span>%</span></span>
                                                        <span class="buyer-hold font-weight-normal ml-2"
                                                              title="Best Buyer for this Director"> <span>33</span></span>
                                                    </div>
                                                    <div class="row director-data " style="">
                                                        <span id="buyer-level_1050000" #alt="newfiltericon"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Buyer for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Indra Nooyi</a>
                                                        </div>
                                                        <span class="buyer-return font-weight-normal"
                                                              title="Best Buyer for this Director"> <span>+32</span><span>%</span></span>
                                                        <span class="buyer-hold font-weight-normal ml-2"
                                                              title="Best Buyer for this Director"> <span>33</span></span>
                                                    </div>
                                                </div>

                                                <div id="multiheader_holdings" class="multiheader holdings"
                                                     style="display: none;">
                                                    <div class="row director-data " style="">
                                                        <span id="holding-level_11231234"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Holding for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Jeffrey Bezos</a>
                                                        </div>
                                                        <span class="holding-price font-weight-normal"
                                                              title="Holding Price for this Director"> <span>57,610,339</span></span>
                                                        <span class="holding-percent font-weight-normal ml-2 text-right"
                                                              title="Holding Percent for this Director"> [<span>11.6</span><span>%</span>]</span>
                                                    </div>
                                                    <div class="row director-data " style="">
                                                        <span id="holding-level_11231554"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Holding for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Jonathan Rubins</a>
                                                        </div>
                                                        <span class="holding-price font-weight-normal"
                                                              title="Holding Price for this Director"> <span>7,893</span></span>
                                                        <span class="holding-percent font-weight-normal ml-2 text-right"
                                                              title="Holding Percent for this Director"> [<span>100</span><span>%</span>]</span>
                                                    </div>
                                                    <div class="row director-data " style="">
                                                        <span id="holding-level_11231514"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Holding for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Rosaland Brewer</a>
                                                        </div>
                                                        <span class="holding-price font-weight-normal"
                                                              title="Holding Price for this Director"> <span>7,893</span></span>
                                                        <span class="holding-percent font-weight-normal ml-2 text-right"
                                                              title="Holding Percent for this Director"> [<span>100</span><span>%</span>]</span>
                                                    </div>
                                                    <div class="row director-data " style="">
                                                        <span id="holding-level_11231574"
                                                              class="newfilter fa fa-filter filter-blue"
                                                              title="Holding for this Director"></span>
                                                        <div class="cols-2 col data-col holding-person mr-auto text-truncate"
                                                             title="">
                                                            <a id="" dir="" title="" class="persontooltip"
                                                               href="">Jamie Gorelick</a>
                                                        </div>
                                                        <span class="holding-price font-weight-normal"
                                                              title="Holding Price for this Director"> <span>7,893</span></span>
                                                        <span class="holding-percent font-weight-normal ml-2 text-right"
                                                              title="Holding Percent for this Director"> [<span>100</span><span>%</span>]</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" w-100 w-md-70 mt-3 mt-md-0 pl-md-2">
                                            <div class="w-100 d-flex justify-content-between align-items-md-end justify-content-center flex-column flex-md-row">
                                                <div class="adChart-msg text-md-left text-center mb-md-0 mb-2">Latest
                                                    Close (01-Apr-2019): GBP <span
                                                            title="1-Apr-19">24.27</span>
                                                </div>
                                                <div class="filters-wrap">
                                                    <div class=" filter-wrapper">
                                                        <div class="filter-section3 filter-sections">
                                                            <div id="time-selections">
                                                                <ul id="time-options" class="mb-0">
                                                                    <li id="one-m" class="non-selected-range"><a
                                                                                href="javascript:void(0)"
                                                                                title="">1m</a>
                                                                    </li>
                                                                    <!--<li id="two-m" class="non-selected-range"><a href="javascript:void(0)">2m</a></li>-->
                                                                    <li id="three-m" class="non-selected-range"><a
                                                                                href="javascript:void(0)">3m</a></li>
                                                                    <!--<li id="ytd" class="non-selected-range"><a href="javascript:void(0)">YTD</a></li>-->
                                                                    <li id="one-y"
                                                                        class="active_date non-selected-range"><a
                                                                                href="javascript:void(0)"
                                                                                title="">1y</a>
                                                                    </li>
                                                                    <li id="three-y" class="non-selected-range"><a
                                                                                href="javascript:void(0)"
                                                                                title="">3y</a>
                                                                    </li>
                                                                    <li id="five-y" class="non-selected-range"><a
                                                                                href="javascript:void(0)">5y</a></li>
                                                                    <li id="all" class="non-selected-range"><a
                                                                                href="javascript:void(0)">all</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <img class="w-100 img-fluid " src="assets/images/director-chart.jpg"
                                                     alt="Director Chart">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="stock-card"></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--        <div class="row my-2 my-lg-2 page-section" id="directors_cards">-->
        <!--            <div class="col-12  mb-1 my-lg-0 ">-->
        <!--                <div class="tabbed-tables">-->
        <!--                    <table class="table table-condensed " style="border-collapse:collapse;">-->
        <!--                        <thead>-->
        <!--                        <tr>-->
        <!--                            <th>-->
        <!--                                <div class="table-top ">-->
        <!--                                    <div class="director-card w-100 d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row flex-md-wrap">-->
        <!--                                        <div class="page-left-filter w-100 w-md-30 d-flex justify-content-between flex-column">-->
        <!--                                            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">-->
        <!--                                            <span data-toggle="collapse" data-target="#togDirectors"-->
        <!--                                                  class="accordion-toggle toggler">-->
        <!--                                                <span id="directorsTOG" class="far fa-plus-square clickable"></span>-->
        <!--                                            </span><span> Directors </span>-->
        <!--                                            </h4>-->
        <!--                                            <hr class="title-separator">-->
        <!--                                        </div>-->
        <!--                                        <div class="page-right-filter w-100 w-md-70 d-flex justify-content-between">-->
        <!--                                            <div class="d-flex flex-column mx-0 ml-md-2 w-100">-->
        <!--                                                <div class="d-flex flex-wrap align-items-end">-->
        <!--                                                    <h4 class="adChart-heading heading criteria d-flex text-dark border-custom font-weight-bold pl-1">-->
        <!--                                                        <span> Data Cards </span>-->
        <!--                                                    </h4>-->
        <!--                                                </div>-->
        <!--                                                <hr class="title-separator">-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </th>-->
        <!--                        </tr>-->
        <!--                        </thead>-->
        <!---->
        <!--                        <tbody>-->
        <!--                        <tr>-->
        <!--                            <td class="hiddenRow py-0 px-1">-->
        <!--                                <div class="data-cards-wrapper accordian-body tab-padding collapse " id="togDirectors">-->
        <!--                                    <div id="directors" class='directrs-tree'>-->
        <!---->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </td>-->
        <!--                        </tr>-->
        <!--                        </tbody>-->
        <!--                    </table>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

        <div class="row my-2 my-lg-2 page-section" id="trade_history">
            <div class="col-12  mb-1 my-lg-0 ">
                <div class="tabbed-tables">
                    <table class="table table-condensed " style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th>
                                <div class="table-top w-100">
                                    <div class="d-flex align-items-start align-items-md-center justify-content-between flex-row ">
                                        <h4 class=" heading criteria d-flex align-items-center text-dark border-custom font-weight-bold">
                                            <span data-toggle="collapse" data-target="#togTradeHistory"
                                                  class="accordion-toggle toggler">
                                                <span id="tradeHistory" class="far fa-plus-square clickable"></span>
                                            </span>
                                            <span> Trade History </span>
                                        </h4>
                                        <div class=" switcher-block d-flex flex-row justify-content-sm-end justify-content-between align-items-center ml-0 ml-md-auto">
                                            <div class="w-100 text-center">
                                                <div class="sumtrans-switch switcher-box d-flex justify-content-center align-items-center w-100">
                                                    <div class="switch">
                                                        <label class="mb-0 d-flex align-items-center"> <span
                                                                    class="switchStateL font-weight-bold"> Transaction View </span>
                                                            <input type="checkbox">
                                                            <span class="lever"></span> <span class="switchStateR"> Summary View </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="align-self-end">
                                                    <a href="" title=""><i class="fas fa-print fa-2x"
                                                                           aria-hidden="true"></i></a>
                                                </span>
                                            <span class="align-self-end ml-2">
                                                    <a href="" title=""><i class="fas fa-file-excel fa-2x"
                                                                           aria-hidden="true"></i></a>
                                                </span>
                                        </div>
                                    </div>
                                    <hr class="title-separator">
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="hiddenRow py-0 px-1">
                                <div class="accordian-body tab-padding collapse togTradeHistory" id="togTradeHistory">
                                        <span class="trade-selected-amount-all" style="" title="">
                                            <span class="shares-all" title="">
                                                <span class="net_sum"
                                                      title="<span style=&quot;&quot;>Acquired: 273,142 [+$1,467,127]</span><br><span style=&quot;&quot;>Disposed: 187,142 [+$1,321,961]</span>">Net 86,000 shares acquired <span
                                                            title="">[+$145,166]</span>
                                                </span>
                                                <span style="display:none" class="chart_data_points">[[1478649600000,4.05]]comp6622825-489739,||series[[1485734400000,3.14],[1485475200000,3.18],[1485216000000,3.22],[1484784000000,3.18]]comp6688879-489739,||6686912-489739,||6683802-489739,||6680637-489739,||series[[1513296000000,7.81]]comp6972054-111259,||series[]compseries[]compseries[[1512432000000,7.9]]comp6961735,6961733,6961734||series[[1516060800000,12.93]]comp7001792,7001793||series[]compseries[]comp</span></span>
                                            <span class="total-selected-trades" title="" style="display:none">
                                                <span class="trade-selected-count" title=""> 11 Trades Selected: </span>
                                                <span class="trade-selected-amount buy-color" title="">Net 86,000 shares acquired <span
                                                            class="buycolor">[+$145,166]</span>
                                                </span>
                                                <span class="notrades" style="display:none;">No Trades Selected</span>
                                            </span>
                                        </span>
                                    <div class="trade-history-filters flex-wrap d-flex flex-sm-row align-items-sm-center justify-content-sm-between w-100">
                                        <div class="trade-filter w-100 d-flex flex-wrap align-items-center ">
                                            <div id="sorts"
                                                 class="trade-history-filter  w-33 w-lg-25 d-flex align-items-center pr-2">
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
                                                            <option code="asc"
                                                                    value="4">Transaction Date: Old - New</option>
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
                                                            <option code="asc"
                                                                    value="24">Change in Holding: Low - High</option>
                                                            <option code="desc"
                                                                    value="24">Change in Holding: High - Low</option>

                                                            <!-- <option code='asc' value='28'>TSI: Low - High</option>
                                                <option code='desc' value='28'>TSI: High - Low</option>-->
                                                        </select>
                                                    </span>
                                            </div>

                                            <div id="filter"
                                                 class="trade-history-filter  w-33 w-lg-25 d-flex align-items-center pr-2">
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
                                                 class="scroll-wrapper1 dtTableScroller w-33 w-lg-50 d-flex justify-content-center align-items-center pl-2">
                                                <div class="scroller w-100"></div>
                                            </div>

                                            <div id="trades-meta" class="w-55 mt-1">
                                                <span class="total-trades-all hidden-summary h-100 w-100 flex-wrap d-flex text-wrap align-items-center"
                                                      title="">
                                                    <span class="trade-selected-count-all"
                                                          title="Aggregates Selected Trades using Tick boxes.">11 Trades - <span
                                                                id="all_trades">all selected</span>: </span>
                                                </span>
                                            </div>
                                        </div>

                                        <div id="scroll-wrapper2"
                                             class="company-trade-table w-100 mt-2 scroll-wrapper2 Container Flipped scrollbar">
                                            <table id="example" class="display company-trade-table w-100">
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
                                                    <th id="group-holding" class="ui-state-default" rowspan="1"
                                                        colspan="3"
                                                        title=""><span>Holding</span>
                                                    </th>
                                                    <th id="group-analysis" class="ui-state-default" colspan="2"
                                                        rowspan="1"
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
                                                    <th class="1-mo visibled group-post-trade sorting_disabled ui-state-default">
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
                                                        title="After this transaction" rowspan="1" colspan="1"
                                                        aria-label="Amount">
                                                        <div class="DataTables_sort_wrapper">
                                                            <span>Amount</span><span
                                                                    class="DataTables_sort_icon"></span>
                                                        </div>
                                                    </th>
                                                    <th class="holding_change group-holding sorting_disabled ui-state-default"
                                                        id="holding_change" title="After this transaction" rowspan="1"
                                                        colspan="1" aria-label="Change">
                                                        <div class="DataTables_sort_wrapper">
                                                            <span>Change</span><span
                                                                    class="DataTables_sort_icon"></span>
                                                        </div>
                                                    </th>
                                                    <th title="% of Shares on Issue held, not displayed below 0.1%"
                                                        class="sii-col group-holding sorting_disabled ui-state-default dt-border-lr"
                                                        id="sii-col" rowspan="1" colspan="1" aria-label="%Sii">
                                                        <div class="DataTables_sort_wrapper">
                                                            <span>%Sii</span><span class="DataTables_sort_icon"></span>
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
                                                            <input type="checkbox" id="8152818" name="8152818" value=""
                                                                   class="custom-control-input trade-checkbox"
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled">
                                                        <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                                                    </td>
                                                    <td class="tdate visibled">
                                                        <span title="Announced: 01-May-19<br/> Transacted: 01-May-19 ">01-May-19</span>
                                                    </td>
                                                    <td class=" type">
                                                        <span class="buysell-span sell_type">
                                                            <b title=" Sell ">Sell</b> <span
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
                                                    <td class="checkbox_list sorting_1">
                                                        <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                            <input type="checkbox" id="8152818" name="8152818" value=""
                                                                   class="custom-control-input trade-checkbox"
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled">
                                                        <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                                                    </td>
                                                    <td class="tdate visibled">
                                                        <span title="Announced: 26-Apr-19<br/> Transacted: 26-Apr-19 ">26-Apr-19</span>
                                                    </td>
                                                    <td class=" type">
                                                        <span class="buysell-span sell_type">
                                                            <b title=" Sell ">Sell</b> <span
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
                                                    <td class=" holding">
                                                        <span title=" Holding changed 0%<br>Holds 59.32% of <BR>Shares on Issue ">16,827,697</span>
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
                                                            <input type="checkbox" id="8152818" name="8152818" value=""
                                                                   class="custom-control-input trade-checkbox"
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a href=""
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
                                                        <span class="amount_up" title="Ordinary Shares ">2,000</span>
                                                    </td>
                                                    <td class=" at"><span class="at"> @</span></td>
                                                    <td class=" price">£<span
                                                                title="<span style='text-align:left; display: block;'>Traded Price: GBP 5.06<br/>Latest Close Price: GBP 5.08</span> ">5.06</span>
                                                    </td>
                                                    <td class="note visibled"></td>
                                                    <td class="source visibled">
                                                        <a target="blank" class=""
                                                           href="">
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
                                                            <input type="checkbox" id="8152818" name="8152818" value=""
                                                                   class="custom-control-input trade-checkbox"
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a class="persontooltip  personname" dir="839764" id="458750"
                                                           href="">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled">
                                                        <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
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
                                                          class="far fa-file-alt rotateY" "></span>
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
                                                            <input type="checkbox"
                                                                   class="custom-control-input trade-checkbox"
                                                                   id="8152818" name="8152818" value=""
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
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
                                                        <a href="" target="blank" class="">
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
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled">
                                                        <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
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
                                                        <a target="blank" href="" class="">
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
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled">
                                                        <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span>
                                                    </td>
                                                    <td class="tdate visibled">
                                                        <span title="Announced: 02-Apr-19<br/> Transacted: 02-Apr-19 ">02-Apr-19</span>
                                                    </td>
                                                    <td class=" type">
                                                        <span class="buysell-span sell_type"><b title=" Sell ">Sell</b> <span
                                                                    class="fas fa-arrow-alt-circle-down" title="Sell"
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
                                                        <a href=""
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
                                                    <td class=" type"><b title=" Subscribe to new<br>issue ">Subs</b>
                                                    </td>
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
                                                        <a target="blank" class="" href="">
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
                                                    <td class="1-mo c-1-mo visibled">
                                                        <span style="color:#F44236">-5%</span>
                                                    </td>
                                                    <td class="adj-1-mo hiddem"><span style="color:#F44236">-5%</span>
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
                                                    <td class="checkbox_list sorting_1">
                                                        <span class="custom-control custom-checkbox custom-checkbox1  ">
                                                            <input type="checkbox"
                                                                   class="custom-control-input trade-checkbox"
                                                                   id="8152818" name="8152818" value=""
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
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
                                                <span title="By M&amp;M Investment Company Plc - A Company Controlled By Director">By
                                                    M&amp;M Investment Compa...</span>
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
                                                    <td class="1-mo c-1-mo visibled"><span
                                                                style="color:#F44236">-5%</span>
                                                    </td>
                                                    <td class="adj-1-mo hiddem"><span style="color:#F44236">-5%</span>
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
                                                        <span title=" Holding changed 5%<br>Holds 58.66% of <BR>Shares on Issue ">16,195,334</span>
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
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled">
                                                        <span title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment Mgr</span>
                                                    </td>
                                                    <td class="tdate visibled">
                                                        <span title="Announced: 28-Jan-19<br/> Transacted: 28-Jan-19 ">28-Jan-19</span>
                                                    </td>
                                                    <td class=" type">
                                                        <span class="buysell-span sell_type">
                                                            <b title=" Sell ">Sell</b> <span
                                                                    class="fas fa-arrow-alt-circle-down" title="Sell"
                                                                    style="vertical-align:middle"></span>
                                                        </span>
                                                    </td>
                                                    <td class="amount visibled">
                                                        <span class="amount_down"
                                                              title="Ordinary Shares ">200,000</span>
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
                                                                    class="far fa-file-alt rotateY" "></span></a></td>
                                                    <td class="tblTransaction-isCluster visibled"></td>
                                                    <td class="tblsignal-SignalReason visibled"></td>
                                                    <td class="value visibled">
                                                        <span class="value_down"
                                                              title="<b>£882,000</b><br><b>$1,164,998</b><BR><b>€1,021,404 </b><br/>Display currency can be changed in Account Settings ">$1,164,998</span>
                                                    </td>
                                                    <td class="1-mo c-1-mo visibled"><span
                                                                style="color:#F44236">-10%</span>
                                                    </td>
                                                    <td class="adj-1-mo hiddem"><span style="color:#F44236">-4%</span>
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
                                                            <input type="checkbox"
                                                                   class="custom-control-input trade-checkbox"
                                                                   id="8152818" name="8152818" value=""
                                                                   checked="checked">
                                                            <label class="custom-control-label" for="8152818"> </label>
                                                        </span>
                                                    </td>
                                                    <td class=" persons">
                                                        <span class="newfilter fa fa-filter filter-blue"
                                                              title="Filter page for this Director"></span>
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
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
                                                        <span class="amount_down"
                                                              title="Ordinary Shares ">220,000</span>
                                                    </td>
                                                    <td class=" at"><span class="at"> @</span></td>
                                                    <td class=" price">£<span
                                                                title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.39<br/>Latest Close Price: GBP 5.08</span> ">4.39</span>
                                                    </td>
                                                    <td class="note visibled"></td>
                                                    <td class="source visibled">
                                                        <a target="blank" href="" class="">
                                                            <span title="Show Source Announcement"
                                                                  class="far fa-file-alt rotateY"></span>
                                                        </a>
                                                    </td>
                                                    <td class="tblTransaction-isCluster visibled"></td>
                                                    <td class="tblsignal-SignalReason visibled"></td>
                                                    <td class="value visibled">
                                                        <span class="value_down"
                                                              title="<b>£965,225</b><br><b>$1,256,918</b><BR><b>€1,108,064 </b><br/>Display currency can be changed in Account Settings ">$1,256,918</span>
                                                    </td>
                                                    <td class="1-mo c-1-mo visibled">
                                                        <span style="color:#ff0000">-11%</span>
                                                    </td>
                                                    <td class="adj-1-mo hiddem"><span style="color:#ff0000">-7%</span>
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
                                                        <span title=" Holding changed -1%<br>Holds 58.99% of <BR>Shares on Issue ">16,284,678</span>
                                                    </td>
                                                    <td class="holding_change visibled">-1%</td>
                                                    <td class="sii-col visibled">58.99%</td>
                                                    <td class="rating visibled">
                                                        <span class="bars">
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm active"></span>
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm active"></span>
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm "></span>
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm"></span>
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm"></span>
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
                                                        <a href="" class="persontooltip  personname" dir="839764"
                                                           id="458750">Mark Sheppard</a>
                                                    </td>
                                                    <td class="title visibled"><span
                                                                title="Senior Officer:Investment Manager<br/>(Investment) ">P:Inv'ment
                                                    Mgr</span></td>
                                                    <td class="tdate visibled"><span
                                                                title="Announced: 23-Jan-19<br/> Transacted: 23-Jan-19 ">23-Jan-19</span>
                                                    </td>
                                                    <td class=" type">
                                                        <span class="buysell-span sell_type">
                                                            <b title=" Sell ">Sell</b> <span
                                                                    class="fas fa-arrow-alt-circle-down" title="Sell"
                                                                    style="vertical-align:middle"></span>
                                                        </span>
                                                    </td>
                                                    <td class="amount visibled">
                                                        <span class="amount_down"
                                                              title="Ordinary Shares ">204,000</span>
                                                    </td>
                                                    <td class=" at"><span class="at"> @</span></td>
                                                    <td class=" price">£<span
                                                                title="<span style='text-align:left; display: block;'>Traded Price: GBP 4.46<br/>Latest Close Price: GBP 5.08</span> ">4.46</span>
                                                    </td>
                                                    <td class="note visibled"></td>
                                                    <td class="source visibled">
                                                        <a target="blank" href="" class="">
                                                            <span title="Show Source Announcement"
                                                                  class="far fa-file-alt rotateY"></span>
                                                        </a>
                                                    </td>
                                                    <td class="tblTransaction-isCluster visibled"></td>
                                                    <td class="tblsignal-SignalReason visibled"></td>
                                                    <td class="value visibled">
                                                        <span class="value_down"
                                                              title="<b>£909,620</b><br><b>$1,185,435</b><BR><b>€1,043,159 </b><br/>Display currency can be changed in Account Settings ">$1,185,435</span>
                                                    </td>
                                                    <td class="1-mo c-1-mo visibled">
                                                        <span style="color:#ff0000">-10%</span>
                                                    </td>
                                                    <td class="adj-1-mo hiddem"><span style="color:#ff0000">-5%</span>
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
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm"></span>
                                                            <span title="Significance 67 out of 100"
                                                                  class="fa fa-star star3 starm"></span>
                                                        </span>
                                                    </td>
                                                    <td class="salary-data visibled"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-2 my-lg-2 dataTable-col page-section" id="company_buyback">
            <div class="col-12  mb-1 my-lg-0 ">
                <div class="tabbed-tables">
                    <table class="table table-condensed " style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th>
                                <div class="table-top w-100">
                                    <div class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
                                        <h4 class="text-truncate heading criteria d-flex align-items-center text-dark border-custom font-weight-bold">
                                            <span data-toggle="collapse" data-target="#togCompanyBuyback"
                                                  class="accordion-toggle toggler">
                                                <span id="companyBuyback" class="far fa-plus-square clickable"></span>
                                            </span>
                                            <span> Company Buyback </span>
                                        </h4>
                                    </div>
                                    <hr class="title-separator">
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="hiddenRow p-0 ">
                                <div class="accordian-body tab-padding collapse px-0" id="togCompanyBuyback">
                                    <div class="search-result mt-1">
                                        <div class="dataTables_wrapper nested-tables bg-first px-2">
                                            <table class="table table-condensed buyback_table "
                                                   style="border-collapse:collapse;">
                                                <thead>
                                                <tr>
                                                    <th class="company" title="">
                                                        <div data-toggle="collapse" data-target="#demo1"
                                                             class="accordion-toggle expand-yearly_th">
                                                            <span id="dt1" class="far fa-plus-square clickable"></span>
                                                        </div>
                                                        <span>
                                                            <a href="https://alpha.smartinsider.com/app/members/company?c=13846"
                                                               id="13846" class="companytooltip"
                                                               title=""> SP Group As </a>
                                                        </span>
                                                    </th>
                                                    <th class="shares"
                                                        title="Shares repurchased for All Selected Dates">
                                                        <span> 6.23 K Shares </span>
                                                    </th>
                                                    <th class="top_level_intention intention" title=""><span
                                                                class="icon  fas fa-info-circle"></span> <span>1 intention</span>
                                                    </th>
                                                    <th class="value value_feild GBP"
                                                        title="Total Value Repurchased for All Selected Dates">
                                                        <span>£144 K</span>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td colspan="6" class="hiddenRow py-0 px-1">
                                                        <div class="accordian-body collapse mx-3 bg-second px-2"
                                                             id="demo1">
                                                            <table class="table table-condensed yearly_table"
                                                                   style="border-collapse:collapse;">
                                                                <thead class="yearly_head">
                                                                <tr>
                                                                    <th class="date_feild" title="">
                                                                        <div data-toggle="collapse"
                                                                             data-target="#demo12"
                                                                             class="accordion-toggle expand_th">
                                                                            <span id="dt2"
                                                                                  class="far fa-plus-square clickable"></span>
                                                                        </div>
                                                                        <span> 2019</span>
                                                                    </th>
                                                                    <th class="year_amount" title="">
                                                                        <span>6.23 K</span>
                                                                    </th>
                                                                    <th id="trade_count_2019" title="">
                                                                        <!--                        <span>Currency+Price</span>  -->
                                                                    </th>
                                                                    <th class="year_value"
                                                                        title="Total Value Repurchased in Year">
                                                                        <span class="value_feild">£144 K</span>
                                                                    </th>
                                                                    <!--                    <th title='Percentage of Daily Volume'>
                                                                        <span>Volume</span>
                                                                    </th>-->
                                                                    <th style="visibility:hidden"
                                                                        class="icons monthly_intention intention">
                                                                        <span style="display: none;">1 intention Announcement</span>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td colspan="6" class="hiddenRow py-0 px-1">
                                                                        <div class="accordian-body collapse"
                                                                             id="demo12">
                                                                            <table class="intention_table">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td colspan="7" title="">
                                                                                        <div class="intention_wrapper">
                                                                                            <span class="intention_close">
                                                                                                <span class="icon fas fa-times-circle"></span>
                                                                                            </span>
                                                                                            <div class="intention_detail">
                                                                                                <p class="intention_head_text">
                                                                                                    Buyback
                                                                                                    Intention
                                                                                                    Announcement </p>
                                                                                                <span class="intention month_level_intention">
                                                                                                    <span class="intention_period"><b> 1st Apr 2019 : </b></span> SP Group As intends to invest a maximum of DKK 40,000,000 to repurchase shares. To take place starting from 11th April 2019 and to be completed by 31st December 2019.
                                                                                                </span>
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
                                                                                        <div data-toggle="collapse"
                                                                                             data-target="#demo13"
                                                                                             class="accordion-toggle expand_th">
                                                                                            <span id="dt3"
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
                                                                                        <span></span> <span
                                                                                                class="monthly_trade_count"
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
                                                                                    <td colspan="7"
                                                                                        class="hiddenRow py-0 px-1">
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
                                                                                                    <td class="week_price"
                                                                                                        title="">
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
                                                                                                    <td colspan="7"
                                                                                                        class="hiddenRow py-0 px-1">
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
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modals">
            <div class="modal fade-scale modalCustom" id="modalInternalBlog" tabindex="-1" role="dialog"
                 aria-labelledby="modalInternalBlog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center p-0 bg-transparent">
                            <h4 class="modal-title w-100 py-1 text-dark font-weight-bold rank-editor-heading"> Add
                                Internal Blog </h4>
                            <!--                            <button type="button" class="close custom-close" data-dismiss="modal" aria-label="Close">-->
                            <!--                                <span aria-hidden="true">&times;</span>-->
                            <!--                            </button>-->
                        </div>
                        <div class="modal-body p-0">
                            <div class="blog-form py-4 d-flex ">
                                <div class="md-form w-100 px-2">
                                    <label class="position-static" for="messageText">Message</label>
                                    <textarea name="messageText" title="" type="text" id="messageText" rows="3"
                                              class="styled-textarea txtstuff md-textarea form-control rounded border border-light py-2 w-100"></textarea>
                                    <a href="" id="add-internal-blog"
                                       class=" rank-action btn bg-success text-white button py-1 px-3 m-1 text-capitalize ">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-0 d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>

            <div class="modal fade-scale modalCustom" id="modalExpireBlog" tabindex="-1" role="dialog"
                 aria-labelledby="modalExpireBlog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center p-0 bg-transparent position-relative">
                            <h4 class="modal-title w-100 py-2 text-white rank-editor-heading grey darken-1 border-bottom-0 ">
                                Expire Signal Early </h4>
                            <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                            </button>
                        </div>

                        <div class="modal-body p-0">
                            <div class="blog-form py-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="" id="re-rank"
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Re-Rank</a>
                                    <a href="" id="decrease-rank"
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Decrease
                                        Rank</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="" id="take-to-neutral"
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Take
                                        to Neutral</a>
                                    <a href="" id="increase-rank"
                                       class="rank-action btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Increase
                                        Rank</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-0 d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade-scale modalCustom" id="modalPortfolioList" tabindex="-1" role="dialog"
                 aria-labelledby="modalPortfolioList" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content ">
                        <div class="modal-header text-center p-0 bg-transparent position-relative">
                            <h4 class="modal-title w-100 py-2 text-white rank-editor-heading grey darken-1 border-bottom-0 ">
                                Portfolio List</h4>
                            <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                            </button>
                        </div>

                        <div class="modal-body p-0">
                            <div class="blog-form p-3">
                                <div class="overflow-">
                                    <table class=" blueTable  text-center border"
                                           cellspacing="0" cellpadding="0" border="1">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="checkAllModalPL" title="">
                                                    <label class="custom-control-label" for="checkAllModalPL"></label>
                                                </div>
                                            </th>
                                            <th><span>Client</span></th>
                                            <th><span>Client Status</span></th>
                                            <th><span>User</span></th>
                                            <th><span>User Status</span></th>
                                            <th><span>WatchList</span></th>
                                            <th><span>Email</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" title="" id="checkItem1"
                                                           class="custom-control-input checkItem"
                                                           value="kelly.cardwell@csquarecapital.com">
                                                    <label class="custom-control-label" for="checkItem1"></label>
                                                </div>
                                            </td>
                                            <td><span>Central Square Capital</span></td>
                                            <td><span>MICS Client</span></td>
                                            <td><span>Kelly Cardwell</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>BBerg</span></td>
                                            <td><span>kelly.cardwell@csquarecapital.com</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" title=""
                                                           class="custom-control-input checkItem"
                                                           id="checkItem2" value="B.Samuel@egercap.co.uk">
                                                    <label class="custom-control-label" for="checkItem2"></label>
                                                </div>
                                            </td>
                                            <td><span>Egerton Capital, LTD</span></td>
                                            <td><span>MICS Client</span></td>
                                            <td><span>Ben Samuel</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>My Portfolio</span></td>
                                            <td><span>B.Samuel@egercap.co.uk</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" title=""
                                                           class="custom-control-input checkItem"
                                                           id="checkItem3" value="B.Samuel@egercap.co.uk">
                                                    <label class="custom-control-label" for="checkItem3"></label>
                                                </div>
                                            </td>
                                            <td><span>Egerton Capital, LTD</span></td>
                                            <td><span>MICS Client</span></td>
                                            <td><span>Brad Snyder</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>Egerton Snyder Brad</span></td>
                                            <td><span>b.snyder@egercap.co.uk</span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" title=""
                                                           class="custom-control-input checkItem"
                                                           id="checkItem4" value="nathan@fpa.com">
                                                    <label class="custom-control-label" for="checkItem4"></label>
                                                </div>
                                            </td>
                                            <td><span>First Pacific Advisors, LLC</span></td>
                                            <td><span>MICS Client</span></td>
                                            <td><span>Greg Nathan</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>FPPFX</span></td>
                                            <td><span>nathan@fpa.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="mmonson@deccanvalue.com" type="checkbox" title=""
                                                       class="checkItem"></td>
                                            <td><span>Deccan Value Investors</span></td>
                                            <td><span>Dead Trial</span></td>
                                            <td><span>Matthew Monson</span></td>
                                            <td><span>Inactive</span></td>
                                            <td><span>Monson Portfolio 2018</span></td>
                                            <td><span>mmonson@deccanvalue.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="anthony@findlaypark.com" type="checkbox" title=""
                                                       class="checkItem"></td>
                                            <td><span>Findlay Park</span></td>
                                            <td><span>Dead Trial</span></td>
                                            <td><span>Anthony Kingsley</span></td>
                                            <td><span>Inactive</span></td>
                                            <td><span>FP America</span></td>
                                            <td><span>anthony@findlaypark.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="Louise.Henderson@dsampartners.com" type="checkbox"
                                                       title=""
                                                       class="checkItem"></td>
                                            <td><span>DSAM Partners</span></td>
                                            <td><span>Client</span></td>
                                            <td><span>Louise Henderson</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>DSAM Portfolio</span></td>
                                            <td><span>Louise.Henderson@dsampartners.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="Seth.Kirkham@dsampartners.com" type="checkbox" title=""
                                                       class="checkItem"></td>
                                            <td><span>DSAM Partners</span></td>
                                            <td><span>Client</span></td>
                                            <td><span>Seth Kirkham</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>DSAM Portfolio</span></td>
                                            <td><span>Seth.Kirkham@dsampartners.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="Natasha.Mazaheri@dsampartners.com" type="checkbox"
                                                       title=""
                                                       class="checkItem"></td>
                                            <td><span>DSAM Partners</span></td>
                                            <td><span>Client</span></td>
                                            <td><span>Natasha Mazaheri</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>DSAM Portfolio</span></td>
                                            <td><span>Natasha.Mazaheri@dsampartners.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="tom@dsampartners.com" type="checkbox" class="checkItem"
                                                       title="">
                                            </td>
                                            <td><span>DSAM Partners</span></td>
                                            <td><span>Client</span></td>
                                            <td><span>Tom OConnor</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>DSAM Portfolio</span></td>
                                            <td><span>tom@dsampartners.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="guy.shahar@dsampartners.com" type="checkbox" title=""
                                                       class="checkItem"></td>
                                            <td><span>DSAM Partners</span></td>
                                            <td><span>Client</span></td>
                                            <td><span>Guy Shahar</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>DSAM Portfolio</span></td>
                                            <td><span>guy.shahar@dsampartners.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="Trevor.Meeks@fil.com" type="checkbox" class="checkItem"
                                                       title="">
                                            </td>
                                            <td><span>Fidelity</span></td>
                                            <td><span>Client</span></td>
                                            <td><span>Trevor Meeks</span></td>
                                            <td><span>Active</span></td>
                                            <td><span>Trevor's Portfolio</span></td>
                                            <td><span>Trevor.Meeks@fil.com</span></td>
                                        </tr>

                                        <tr>
                                            <td><input value="stuart@curvaturehedge.com" type="checkbox" title=""
                                                       class="checkItem"></td>
                                            <td><span>CHS Asset Management</span></td>
                                            <td><span>Cancelled</span></td>
                                            <td><span>Stuart Pulkinen</span></td>
                                            <td><span>Inactive</span></td>
                                            <td><span>CHS AM US</span></td>
                                            <td><span>stuart@curvaturehedge.com</span></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-0 d-flex justify-content-end">
                            <button type="button"
                                    class=" btn bg-success text-white button py-1 px-2 m-1 text-capitalize">Copy Emails
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-2"></div>
    </form>

    <div>
        <span class="position-relative d-inline-block">
            <span class="tooltip tooltip-click" data-tooltip-content="#tooltip_content"
                  title="Mark Zuckerberg">Mark Zuckerberg</span>
        </span>

        <br>

        <div class="tooltip_templates">
            <span id="tooltip_content" class="tooltip_content">
                <span class="d-flex flex-column flex-md-row w-100">
                    <span class="person-img mx-auto">
                         <img class="img-fluid" title="Mark Zuckerberg" alt=""
                              src="assets/images/mark.jpg">
                    </span>
                    <span class="person-details d-flex flex-column justify-content-between ml-md-2 mt-md-0 mt-1">
                        <span class="d-flex flex-column flex-md-row justify-content-between w-100 mt-md-0 mt-1">
                            <span class="d-flex flex-column person-info">
                                <span class="tooltip-heading"><b>Mark Zuckerberg</b></span>
                                <span class="tooltip-heading mt-md-0 mt-1"><b>Executive :</b> COO &amp; CFO</span>
                            </span>
                            <span class="d-flex flex-column mt-md-0 mt-1 business-detail">
                                <span><b>Directorships:</b> 1</span>
                                <span class="mt-md-0 mt-1"><b>Transactions:</b> 11</span>
                            </span>
                        </span>
                        <span class="d-flex flex-column flex-md-row justify-content-between w-100 mt-md-0 mt-1 company-inform">
                            <span><b>Age:</b> 35</span>
                            <span class="mt-md-0 mt-1"><b>Started with company: </b>01 Jan 2004 </span>
                        </span>
                        <span class="d-flex justify-content-between w-100 mt-md-0 mt-1 company-inform">
                            <span class="w-100 text-md-right"><b>In Current Position Since: </b>01 Jan 2009 </span>
                        </span>
                        <span class="d-flex flex-column flex-md-row w-100 mt-md-0 mt-1 person-stocks">
                            <span>
                                <span class="fas fa-arrow-alt-circle-down text-danger"></span>
                                <span>No qualifying transactions to calculate a Score</span>
                            </span> |
                            <span class="mt-md-0 mt-1">
                                <span class="fas fa-arrow-alt-circle-up text-success"></span>
                                <span>Score: 65</span>
                            </span>
                        </span>
                    </span>
                </span>
            </span>
        </div>
    </div>
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>

