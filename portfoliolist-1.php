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

    <div class="row mt-4 mb-2 ">
        <div class="col-6 align-self-center">

            <a class="btn bg-success text-white button px-4 py-2 font-weight-bold" href="#"
               id="portfolio_trade">VIEW TRADES</a>
            <a class="btn bg-success text-white button px-4 py-2 font-weight-bold" data-toggle="modal"
               data-target="#modalUploadPortfolio" id="portfolio_upload">UPLOAD</a>
            <a class="btn bg-success text-white button px-4 py-2 font-weight-bold" href="#"
               id="portfolio_export">EXPORT</a>

        </div>
        <div class="col-3 align-self-center">
            <div class="border py-1">
                <h4 class="heading criteria d-flex justify-content-center text-dark font-weight-bold mb-1"> Email
                    Alerts </h4>
                <div class="custom-switcher switcher-box d-flex justify-content-center align-items-center w-100">
                    <div class="switch ">
                        <label class=" d-flex justify-content-center align-items-center "><span class="">OFF</span>
                            <input type="checkbox" checked>
                            <span class="lever"></span> <span class=" font-weight-bold">ON</span>
                        </label>
                    </div>
                </div>
                <h6 class=" d-flex justify-content-center my-0"> Intra-Day Bulletin </h6>
            </div>
        </div>
        <div class="col-3 align-self-center">
            <div class="border py-1">
                <h4 class="heading criteria d-flex justify-content-center text-dark font-weight-bold mb-1"> Email
                    Alerts </h4>
                <div class="custom-switcher switcher-box d-flex justify-content-center align-items-center w-100">
                    <div class="switch ">
                        <label class=" d-flex justify-content-center align-items-center "> <span
                                    class="">OFF</span>
                            <input type="checkbox" checked>
                            <span class="lever"></span> <span class=" font-weight-bold">ON</span>
                        </label>
                    </div>
                </div>
                <h6 class=" d-flex justify-content-center my-0"> End of day trade </h6>
            </div>
        </div>
    </div>

    <div class="response alert alert-primary my-2 my-lg-4 py-1 px-2 border border-info" role="alert">
        <span class="fas fa-exclamation-triangle mr-1"></span> <span class="alert-content">End of day email Alerts are now turned <span
                    class="font-weight-bold success">on</span>. You will receive alerts daily if companies trade in the
            portfolio Test Portfolio.</span>
    </div>

    <div class="row mt-2 mb-2 mt-lg-4 ">
        <div class="col">
            <div class="portfoliolist_sec pb-2">
                <table class="portfoliolist_table" id="example" border="0" title="">
                    <thead>
                    <tr>
                        <th class="left sorting_asc" rowspan="1" colspan="1">Company</th>
                        <th class="sorting_disabled text-center" rowspan="1" colspan="1">
                            Last Trade Date
                        </th>
                        <th class="sorting_disabled text-center" rowspan="1" colspan="1">Trade Count</th>
                        <th class="sorting_disabled  text-center" rowspan="1" colspan="1">
                            Snapshot (Bulletin)
                        </th>
                        <th class="sorting_disabled text-center" rowspan="1" colspan="1">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd">
                        <td class="left sorting_1">
                            <a href="https://dev3.smartinsider.com/app/members/company?c=14651 "
                               class="companytooltip" id="14651">Ab Volvo</a>
                        </td>
                        <td class="left">
                            <a href="https://dev3.smartinsider.com/app/members/company?c=14651"><span
                                        class="fa fa-list-alt" title="View trades in Ab Volvo" cid="14651"></span>
                                (23-May-19)</a>
                        </td>
                        <td class="left">
                            <b><a href="https://dev3.smartinsider.com/app/members/company?c=14651"
                                  title="Total from all countries">1339</a></b> since 12-Dec-06
                        </td>
                        <td class="hiden"><a href="https://dev3.smartinsider.com/app/members/snapshot?id=25035"
                                             target="blank"><span class="fa fa-download" alt="download"
                                                                  title="Download Snapshot (12-Feb-19)"></span>
                                12-Feb-19</a></td>
                        <td class="center"><a href="javascript:void(0)" onclick="deleteButton(14651);"
                                              class="deletebutton"><span class="fa fa-times-circle"
                                                                         title="Remove Ab Volvo" cid="14651"></span></a>
                        </td>
                    </tr>
                    <tr class="even">
                        <td class="left sorting_1"><a
                                    href="https://dev3.smartinsider.com/app/members/company?c=72185 "
                                    class="companytooltip" id="72185" title="">Abbvie Inc</a></td>
                        <td class="left"><a href="https://dev3.smartinsider.com/app/members/company?c=72185"><span
                                        class="fa fa-list-alt" title="View trades in Abbvie Inc" cid="72185"></span>
                                (26-Jun-19)</a></td>
                        <td class="left"><b><a href="https://dev3.smartinsider.com/app/members/company?c=72185"
                                               title="Total from all countries">365</a></b> since 04-Feb-13
                        </td>
                        <td class="hiden"><a href="https://dev3.smartinsider.com/app/members/snapshot?id=22391"
                                             target="blank"><span class="fa fa-download" alt="download"
                                                                  title="Download Snapshot (15-Mar-19)"></span>
                                15-Mar-19</a></td>
                        <td class="center"><a href="javascript:void(0)" onclick="deleteButton(72185);"
                                              class="deletebutton"><span class="fa fa-times-circle"
                                                                         title="Remove Abbvie Inc"
                                                                         cid="72185"></span></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modals">

        <div class="modal fade-scale modalCustom" id="modalUploadPortfolio" tabindex="-1" role="dialog"
             aria-labelledby="modalUploadPortfolio" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center py-0 position-relative">
                        <h4 class="modal-title w-100 py-1">Upload Bulk Portfolio</h4>
                        <button type="button" class="custom-close close grey darken-1 m-1 p-0 position-absolute"
                                data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="font-weight-lighter">[close]</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12 align-self-center">
                                <div class="modal-wrapper d-flex justify-content-center align-items-center">
                                    <div class="custom-switcher switcher-box d-flex justify-content-center align-items-center w-100">
                                        <div class="switch ">
                                            <label class=" d-flex justify-content-center align-items-center ">
                                                <span class="text-success">Append</span>
                                                <input type="checkbox" checked>
                                                <span class="lever"></span>
                                                <span class="text-danger font-weight-bold">Overwrite</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-9 align-self-center">
                                <form>
                                    <div class="form-group d-flex mb-0 align-items-center">
                                        <label for="exampleFormControlFile1">Browse: </label>
                                        <input type="file" class="form-control-file ml-1" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                            <div class="col-3 align-self-center">
                                <div class="form-group my-1 my-lg-0 d-flex justify-content-center">
                                    <button class="p-2 my-0 btn btn-block bg-success text-white font-weight-bold button"
                                            type="button">Upload
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="response alert alert-primary my-2 mt-lg-4 mb-lg-0 py-1 px-2 border border-info"
                             role="alert">
                            <span class="fas fa-exclamation-triangle mr-1"></span> <span class="alert-content">The upload will accept .xls, .xlsx, .csv, .txt & .ttx file. The tool will accept ISINs or Bloomberg Codes, with each identifier on it's own row. The upload will only accept files with <span
                                        class="font-weight-bold">200</span> or less codes</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
