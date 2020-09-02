<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white  buybackterms">


    <div class="row mt-2 mb-3">
        <div class="col-12 mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Buyback Terms</span>
                </h3>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Buyback Type</h4>
            <hr class="title-separator">

            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span>We have three definitions of a buyback which cover the life time of a corporate buyback decision:</span>
                            <table class="w-100" cellspacing="0" cellpadding="3">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd">
                                    <td class="sorting_1">Authorisation</td>
                                    <td>The boards authority to repurchase</td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">Intention</td>
                                    <td>Notification of the board that shares will be repurchased</td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">Transaction</td>
                                    <td>Repurchase transactions that have been actioned</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Buyback By</h4>
            <hr class="title-separator">

            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span><b>Buyback By </b> describes which entity carried out the transaction: </span>
                            <table class="w-100" cellspacing="0" cellpadding="3">
                                <thead>
                                <tr>
                                    <th class="sorting_1">Type</th>
                                    <th>Icon</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd">
                                    <td class="sorting_1">On Market</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #5b9423;" class="icon fas fa-chart-line"></span>
                                    </td>
                                    <td>Took place via the open market place</td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">Tender Offer</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color:#ffd000" class="icon fas fa-chart-line "></span>
                                    </td>
                                    <td>Via a companywide tender offer to all shareholders</td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">Off Market Agreement</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #787474" class="icon fas fa-chart-line "></span>
                                    </td>
                                    <td>Under a specific agreement between the issuer and a shareholder or group of
                                        shareholders.
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">Buyback Holding
                Type</h4>
            <hr class="title-separator">
            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span><b>Buyback Holding Type </b> describes what will be done with those shares following repurchase: </span>
                            <table class="w-100" cellspacing="0" cellpadding="3">
                                <thead>
                                <tr>
                                    <th class="sorting_1">Type</th>
                                    <th>Icon</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd">
                                    <td class="sorting_1">In Treasury</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #787474" class="icon fas fa-university  "></span>
                                    </td>
                                    <td>Held in treasury until they are sold back to the market</td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">Tender Offer</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #787474" class="icon fas fa-trash  "></span>
                                    </td>
                                    <td>Immediately cancelled.</td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">In Trust</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #2bb827" class="icon fas fa-university "></span>
                                    </td>
                                    <td>Held in trust, generally to cover employee remunerative plans.</td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">Not Reported</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color:#ffd000" class="icon fas fa-times-circle "></span>
                                    </td>
                                    <td>Information not provided by issuer.</td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">To Satisfy Employee Tax</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #ffd000" class="icon fas fa-university "></span>
                                    </td>
                                    <td>Shares have been used to pay the tax of the employee.</td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">To Satisfy Vesting of Stock</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color:#787878" class="icon fas fa-university "></span>
                                    </td>
                                    <td>Shares are being held prior to delivery to employees on vesting of incentive
                                        schemes.
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold"> Conviction
                Rating On The Website</h4>
            <hr class="title-separator">
            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0 ratingstars">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span><b>Buyback Via </b> describes how the transaction was executed: </span>
                            <table class="w-100" cellspacing="0" cellpadding="3">
                                <thead>
                                <tr>
                                    <th class="sorting_1">Type</th>
                                    <th>Icon</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd">
                                    <td class="sorting_1">Issuer</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #5b9423;" class="icon fas fa-handshake "></span>
                                    </td>
                                    <td>The Issuer themselves</td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">Subsidiary</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color:#ffd000" class="icon fas fa-handshake "></span>
                                    </td>
                                    <td>A subsidiary of the issuer makes the transcation</td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">Broker</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color: #787474" class="icon fas fa-handshake "></span>
                                    </td>
                                    <td>Brokers are commonly used to repurchase shares under mandate to avoid insider
                                        information rules and to allow repurchases to carry on through close periods.
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">Employee Benefit Trust</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color:#91d94e" class="icon fas fa-handshake "></span>
                                    </td>
                                    <td>To cater for shares which will need to be transferred to employees as part of
                                        remunerative plans.
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">Independent 3rd Party</td>
                                    <td style="width: 40px; text-align: center;">
                                        <span style="color:#bfbfbf" class="icon fas fa-handshake "></span>
                                    </td>
                                    <td>An undisclosed 3rd party, although this is likely to be a broker.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
