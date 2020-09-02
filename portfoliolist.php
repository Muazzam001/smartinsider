<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white portfoliolist">

    <div class="row mt-2 mb-3">
        <div class="col mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Select A Portfolio</span>
                </h3>
            </div>
        </div>
    </div>

    <form>

        <div class="row mt-2  mb-2  ">
            <div class="col">
                <div id="portfolio" class="mb-3 ">
                    <table class="portfoliotable" id="lsi" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                        <tr id="13106" class="odd">
                            <td width="25%">
                                <a pid="13106" href="">Current Signals</a>
                                <span style="display:none" class="">
                                    <input type="text" class="portfoliorename" name="" value="Current Signals">
                                    <input class="butn rename" value="save" id="13106" type="button" name="rename">
                                </span>
                            </td>
                            <td width="25%">Intra-day bulletin email alerts turned <a href=""><span
                                            style="color:#D32929" class="font-weight-bold">off</span></a>.
                            </td>
                            <td width="30%">End of day email alerts turned <a href=""><span
                                            style="color:#D32929" class="font-weight-bold">off</span></a>.
                            </td>
                            <td width="10%">
                                <span class="renameportfolio" id="13106" title="Rename Portfolio"
                                      style="color:#5b9423"> Rename</span>
                            </td>
                            <td width="10%">
                                <span class="deleteportfolio" id="13106" title="Delete Portfolio"
                                      style="color:#eb1c24">Delete</span>
                            </td>
                        </tr>
                        <tr id="13107" class="even">
                            <td width="25%">
                                <a pid="13107" href="">Test Portfolio</a>
                                <span style="display:none" class="rename13107">
                                    <input type="text" class="portfoliorename" name="port_13107" value="Test Portfolio">
                                    <input class="butn rename" value="save" id="13107" type="button" name="rename">
                                </span>
                            </td>
                            <td width="25%">Intra-day bulletin email alerts turned <a href=""><span
                                            style="color:#D32929" class="font-weight-bold">off</span></a>.
                            </td>
                            <td width="30%">End of day email alerts turned <a href=""><span
                                            style="color:#D32929" class="font-weight-bold">off</span></a>.
                            </td>
                            <td width="10%"><span class="renameportfolio" id="13107" title="Rename Portfolio"
                                                  style="color:#5b9423"> Rename</span></td>
                            <td width="10%"><span class="deleteportfolio" id="13107" title="Delete Portfolio"
                                                  style="color:#eb1c24">Delete</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="download-info p-2   ">
                    <span> Click a portfolio above to view trades and company pages. Visit your
                        <a href="#" target="_blank" title="" style="color: #00adf1 !important;">
                            <span class="font-weight-bold">settings</span></a> page to rename or delete a portfolio. Click
                        <a href="#" target="_blank" title="" style="color: #00adf1 !important;">
                            <span class="font-weight-bold">here</span></a> to create a new portfolio. To add companies to a portfolio, view a company via the issuer search above. </span>
                </div>

                <div class="download-info p-2   ">
                    <span> Visit your <a href="#"
                                         target="_blank"
                                         title="" style="color: #00adf1 !important;"><span
                                    class="font-weight-bold">settings</span></a> page to rename or delete a portfolio.
                        <span class="font-weight-bold">To add companies to a portfolio, view a company via the issuer search above.</span></span>
                </div>
            </div>
        </div>
    </form>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
