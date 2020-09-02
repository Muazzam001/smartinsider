<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white  settings">
    <div class="row mt-2 mb-3">
        <div class="col mt-2">
            <div class="filter-heading bg-custom py-1 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Settings</span>
                </h3>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Email & Password</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="form-group my-1 my-lg-0 d-flex">
                        <button type="button"
                                class="px-4 my-0  btn btn-lg bg-success text-white font-weight-bold button">
                            CHANGE EMAIL
                        </button>
                        <button type="button"
                                class="px-4 my-0  btn btn-lg bg-success text-white font-weight-bold button">
                            CHANGE PASSWORD
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Portfolios & Saved Searches </h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="form-group my-1 my-lg-0 d-flex">
                        <button type="button"
                                class="px-4 my-0  btn btn-lg bg-success text-white font-weight-bold button">
                            EDIT SEARCHES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold"> Site
                Preferences</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span>Set the default currency used for values on Smart Insider below. <br> These values will be displayed across the website. </span>
                            <div class="rand mx-auto w-100 w-lg-75">

                                <div id="sampleportfolio" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>Default Currency: Dollars</option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg"
                                                class="rounded-circle" value=""> Display In GBP
                                        </option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg"
                                                class="rounded-circle" value=""> Display In Euros
                                        </option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg"
                                                class="rounded-circle" value=""> Display In Dollars
                                        </option>
                                    </select>
                                </div>

                                <div id="industryclassification" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>Industry Classification Level: SuperSector
                                        </option>
                                        <option value=""> Industry</option>
                                        <option value=""> SuperSector</option>
                                        <option value=""> Sector</option>
                                    </select>
                                </div>

                                <div id="tradehistory" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>Trade History: Transaction View
                                        </option>
                                        <option value=""> Transaction View</option>
                                        <option value=""> Summary View</option>
                                    </select>
                                </div>

                                <div id="usebloombergCode" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>Use Bloomberg Code: Yes
                                        </option>
                                        <option value="">Use Bloomberg Code</option>
                                        <option value="">Use Market Ticker</option>
                                    </select>
                                </div>

                                <div id="tickerdropdown" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>Ticker Search Country: United States</option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg"
                                                class="rounded-circle" value=""> Australia
                                        </option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg"
                                                class="rounded-circle" value=""> Canada
                                        </option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg"
                                                class="rounded-circle" value=""> USA
                                        </option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Entitlements </h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span>You are currently subscribed to the following countries. To gain access to more of our international content, please contact our <a
                                        href="" target="_blank" title="">Sales Team</a>. </span>

                            <div class="rand mx-auto w-100 w-lg-75">
                                <div id="countrydropdown" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>61/62 Countries Subscribed To</option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg"
                                                class="rounded-circle" value=""> Australia
                                        </option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg"
                                                class="rounded-circle" value=""> Canada
                                        </option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg"
                                                class="rounded-circle" value=""> USA
                                        </option>
                                    </select>
                                </div>
                                <div id="nocountrydropdown" class="custom-select-option dropdown-primary mb-3">
                                    <select class="mdb-select md-form " title="">
                                        <option value="" disabled selected>1/62 Countries Not Subscribed To</option>
                                        <option data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg"
                                                class="rounded-circle" value=""> Mexico
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Trade History
                Preferences</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span>Set Quick view of trades to default to discretionary trades only, or all trades. </span>
                            <div class="switcher-block d-flex flex-row justify-content-between align-items-center w-100 w-lg-50 mx-auto">
                                <div class="w-100 text-center ">
                                    <div class="disall-switch switcher-box d-flex justify-content-center align-items-center w-100">
                                        <div class="switch w-100">
                                            <label class="mb-0 w-100">
                                                <span class="switchStateL font-weight-bold">Discretionary </span>
                                                <input type="checkbox"> <span class="lever"></span> <span
                                                        class="switchStateR "> All Trades</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="mt-3">Choose the default selection of data fields to be displayed in trade history sections. </span>
                            <div class="rand mx-auto w-100 w-lg-75">
                                <div class="trade-history-pref-drop custom-select-option">
                                    <label class="sr-only" for="trade-history-pref">Filter</label>
                                    <select id="trade-history-pref" multiple="multiple" title=""
                                            class="mdb-select md-form basic-multiple-select">
                                        <option value="" disabled selected>Column Select</option>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold"> Company Section
                Display</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span><b>Company Page:</b> Set which sections you want expanded by default (on page load). </span>
                            <div class="rand mx-auto w-100 w-lg-75">
                                <div class="trade-history-pref-drop custom-select-option">
                                    <label class="sr-only" for="trade-history-pref">Filter</label>
                                    <select id="trade-history-pref" multiple="multiple" title=""
                                            class="mdb-select md-form basic-multiple-select">
                                        <option value="" disabled selected>Column Select</option>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Indices</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span> Select the indices you want to appear in the Search Menu.  </span>

                            <div class="rand mx-auto w-100 w-lg-75 mt-2">
                                <div class="trade-history-pref-drop custom-select-option">
                                    <label class="sr-only" for="trade-history-pref">Filter</label>
                                    <select id="trade-history-pref" multiple="multiple" title=""
                                            class="mdb-select md-form basic-multiple-select">
                                        <option value="" disabled selected>Column Select</option>
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
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="d-flex indices justify-content-between">
                        <div class="indices_wrapper  unselected-indices border border-light w-35 d-flex flex-column px-2 py-1 h-100 overflow-y-auto">
                            <span class="index-link active" id="12406"><label>AEX (NL)</label></span>
                            <span class="index-link" id="12556"><label>AIM All Share (GB)</label></span>
                            <span class="index-link" id="12401"><label>BEL 20 (BE)</label></span>
                            <span class="index-link" id="12404"><label>CAC40 (FR)</label></span>
                            <span class="index-link" id="12405"><label>DAX (DE)</label></span>
                            <span class="index-link" id="12394"><label>FTSE 250 (GB)</label></span>
                            <span class="index-link" id="12397"><label>FTSE 350 (GB)</label></span>
                            <span class="index-link" id="12398"><label>FTSE All Share (GB)</label></span>
                            <span class="index-link" id="12395"><label>FTSE Fledgling (GB)</label></span>
                            <span class="index-link" id="12407"><label>FTSE Mib (IT)</label></span>
                            <span class="index-link" id="12396"><label>FTSE Small-Cap (GB)</label></span>
                            <span class="index-link" id="12409"><label>IBEX 35 (ES)</label></span>
                            <span class="index-link" id="12408"><label>Italia All-Share (IT)</label></span>
                            <span class="index-link" id="12414"><label>NZSE 50 (NZ)</label></span>
                            <span class="index-link" id="12410"><label>PSI 20 (PT)</label></span>
                            <span class="index-link" id="12411"><label>S&amp;P 500 (US)</label></span>
                            <span class="index-link" id="12412"><label>TSX Vent Comp (CA)</label></span>
                        </div>
                        <div class="indices-buttons w-25 d-flex flex-column justify-content-center h-100">
                            <a id="btn-add-index" class="btn bg-success text-white button px-3 py-2 mx-0 font-weight-bold btn-add-index ">Add &gt;&gt;</a>
                            <a id="btn-remove-index" class="btn bg-success text-white button px-3 py-2 mx-0 font-weight-bold btn-remove-index ">&lt;&lt; Remove</a>
                        </div>
                        <div class="indices_wrapper selected-indices border border-light  w-35 d-flex flex-column px-2 py-1 h-100 overflow-y-auto">
                            <span class="index-link" id="12413"><label>ASX 200 (AU) </label></span>
                            <span class="index-link" id="12229"><label>FTSE 100 (GB) </label></span>
                        </div>
                    </div>
                    <div class="unselect-text">CTRL + click to multi-select</div>
                </div>
            </div>

        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold"> Person Section
                Display</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span><b>Person Page:</b> Set which sections you want expanded by default (on page load). </span>
                            <div class="rand mx-auto w-100 w-lg-75 mt-1">
                                <div class="trade-history-pref-drop custom-select-option">
                                    <label class="sr-only" for="trade-history-pref">Filter</label>
                                    <select id="trade-history-pref" multiple="multiple" title=""
                                            class="mdb-select md-form basic-multiple-select">
                                        <option value="" disabled selected>Column Select</option>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row my-2">
        <div class="col my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Delete Saved
                Search</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">

                    <div class="response alert alert-primary mt-3 mb-1 py-1 px-2 border border-info" role="alert">
                        <span class="fas fa-exclamation-triangle mr-1"></span> <span class="alert-content">Removed search Insider Trades - 144 71
                        110. To add more searches, please visit the <a href="" target="" title=""><b>trade
                                    search</b></a> page.</span>
                    </div>

                    <div class="delete_boxes py-2 px-2 rounded border border-info mt-3">
                        <div class="delete_boxes_wrapper d-flex flex-column">
                            <span class="mb-0">  Click the red cross beside your saved search to delete. Visit the <a
                                        href=""
                                        target=""
                                        title=""><b>advanced search</b></a> to create one. Searches which generate a bulletin email or other report cannot be deleted. Please <b><a
                                            href="" target="" title="">contact us</a></b> if you want to delete or amend these bulletins.  </span>
                            <div class="my-2 ">
                                <span class="mb-0 searchbox border border-dark bg-white px-2 py-1 w-auto d-inline-flex align-items-center mb-2"
                                      id="48017" name="4 1">
                                    <span class="sname mb-0 mr-2"
                                          id="">Company Signals amend these bulletins - 4 1</span> <i
                                            class="mb-0 fas fa-times text-danger"></i>
                                </span>
                                <br>
                                <span class="mb-0 searchbox border border-dark bg-white px-2 py-1  w-auto d-inline-flex align-items-center mb-2"
                                      id="48017" name="4 1">
                                    <span class="sname mb-0 mr-2"
                                          id="">Company Signals amend these bulletins - 4 1</span> <i
                                            class="mb-0 fas fa-times text-danger"></i>
                                </span>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row my-2">
        <div class="col my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Response Box</h4>
            <hr class="title-separator">

            <div class="row mt-0 my-lg-3 mb-1">
                <div class="col align-self-center ">

                    <div class="response alert alert-primary mt-3 mb-1 py-1 px-2 border border-info" role="alert">
                        <span class="fas fa-exclamation-triangle mr-1"></span> <span class="alert-content">Removed search Insider Trades - 144 71
                        110. To add more searches, please visit the <a href="" target="" title=""><b>trade
                                search</b></a> page.</span>
                    </div>

                    <div class="delete_boxes py-2 px-3 rounded border border-info mt-3">
                        <div class="delete_boxes_wrapper d-flex flex-column">
                            <span class="mb-0">  Click the red cross beside your saved search to delete. Visit the <a
                                        href=""
                                        target=""
                                        title=""><b>advanced search</b></a> to create one. Searches which generate a bulletin email or other report cannot be deleted. Please <b><a
                                            href="" target="" title="">contact us</a></b> if you want to delete or amend these bulletins.  </span>
                            <div class="my-2 ">
                                <span class="mb-0 searchbox border border-dark bg-white px-2 py-1 w-auto d-inline-flex align-items-center mb-2">
                                    <span class="sname mb-0 mr-2"
                                          id="">Company Signals amend these bulletins - 4 1</span> <i
                                            class="mb-0 fas fa-times text-danger"></i>
                                </span>
                                <br>
                                <span class="mb-0 searchbox border border-dark bg-white px-2 py-1  w-auto d-inline-flex align-items-center mb-2">
                                    <span class="sname mb-0 mr-2"
                                          id="">Company Signals amend these bulletins - 4 1</span> <i
                                            class="mb-0 fas fa-times text-danger"></i>
                                </span>
                                <br>
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
