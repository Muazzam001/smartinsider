<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white  documentdownload">

    <div class="row mt-2 mb-3">
        <div class="col-12 mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Transaction Types</span>
                </h3>
            </div>
        </div>
    </div>

    <form>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="transactiontypes w-100" cellspacing="0" cellpadding="0" border="0">
                        <thead>
                        <tr>
                            <th style="width: 191px;" class="sorting_disabled" rowspan="1" colspan="1">Transaction
                                Type
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 144px;">Discretionary
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 595px;">Description</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr class="odd">
                            <td class=" sorting_1">Award</td>
                            <td>no</td>
                            <td>Usually acquired below the market price or for nil consideration as part of a Directors
                                remuneration package. Awards are reported when they are given to the Director
                                unconditionally and form part of their beneficial holding.
                            </td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">BUY</td>
                            <td>yes</td>
                            <td>Purchase of shares at the prevailing market price unless otherwise stated in the
                                Notes. </td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">Contract Buy</td>
                            <td>no</td>
                            <td>Director buys shares on the market as part of his contractual agreement. This may be to
                                qualify for a matching award or under a regular purchase plan. These are not considered
                                to be indicative trades.</td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">Div Re</td>
                            <td>no</td>
                            <td>Purchase of further shares with the proceeds of Dividends payable on Directors existing
                                holding. This may take the form of a [scrip] issue of new shares to all shareholders.
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">Exercise</td>
                            <td>no</td>
                            <td>Vesting of options which form part of the Directors beneficial holding after the event.
                                Unless in exceptional circumstances the exercise price is below the market price and may
                                even be nil.</td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">Given Away</td>
                            <td>no</td>
                            <td>Usually a charitable donation. Shares are no longer part of the Directors beneficial
                                holding but are not sold at the prevailing market price.</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">Sale Post-Exercise</td>
                            <td>yes</td>
                            <td>Shares sold at prevailing market price after acquiring them through the exercise of an
                                option. Also be used where shares have been sold after being acquired by Award.</td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">SELL</td>
                            <td>yes</td>
                            <td>Sale of part or all of the Director beneficial Holding at the prevailing market price
                                unless otherwise stated in the Notes</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">Subscribe</td>
                            <td>yes</td>
                            <td>Subscription to new issue. As a Director or as an existing shareholder Directors may be
                                allocated rights to subscribe to new shares which are generally just below the
                                prevailing market price.</td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">Surrender</td>
                            <td>no</td>
                            <td>A mandatory sale of shares usually following an award or exercise of options, often to
                                meet tax liability. Usually this will be carried out by the company on the directors
                                behalf.</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">Transfer</td>
                            <td>no</td>
                            <td>All or part of a Directors holding is transferred between two Institutions but the
                                beneficial interest of the Director remains unchanged. Eg. A Director may sell shares
                                from a company in which he is sole beneficiary to the directors personal ISA</td>
                        </tr>
                        <tr class="even">
                            <td class=" sorting_1">Transfer In</td>
                            <td>no</td>
                            <td>Director acquires shares for reasons other than on market purchase. This can be for a
                                number of reasons and will be described in the Transaction Notes. Some examples:
                                Conversion of preference shares into ordinary shares; Inheritance.</td>
                        </tr>
                        <tr class="odd">
                            <td class=" sorting_1">Transfer Out</td>
                            <td>no</td>
                            <td>Directors holding is reduced after shares have been transferred to a third party. Common
                                occurences are when a Directors minor children come of age for example or as part of a
                                divorce settlement.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="download-info p-2">
                    <span> *Spouses - Transfers between spouses are not reported since Director retains beneficial interest in these shares. Share owned by a Directors Spouse are treated as being owned by the Director themselves. In cases of a Divorce between Director and Spouse the beneficial holding of the two is separated and is reported. </span>
                </div>
            </div>
        </div>
    </form>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
