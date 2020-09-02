<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white  conviction">


    <div class="row mt-2 mb-3">
        <div class="col-12 mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Conviction Rating (Formerly TSI)</span>
                </h3>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-12 my-2">
            <span class="heading_legend "> The Conviction Rating is a Smart Insider proprietary number assigned to each individual director's transaction in the Smart Insider database. The number indicates, for each transaction, how significant it may be as a market-moving deal.</span>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Conviction Rating Calculation</h4>
            <hr class="title-separator">

            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span>The Conviction Rating is calculated for each transaction using an algorithm which combines, with equal weighting, the three factors described above at the time of Announcement. The result is an overall score of between 0 and 100. Where a director's holding is not available at the time of the announcement of the deal, the Conviction Rating is calculated using just the Transaction Type and Value scores. If a transaction cannot be scored it is assigned a zero Conviction Rating.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold"> Conviction
                Rating Components</h4>
            <hr class="title-separator">

            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <span>The Conviction Rating is an aggregate of three factors: </span>
                            <ul>
                                <li><span><b>Transaction Type:</b> <br> A Buy will be considered more significant than a transaction which has some remunerative element such as an Award or Exercise of Options. Each Transaction type is weighted (scale 1-100) based on a rank order determined by Smart Insider analysis, according to how indicative it may be of the Directors perceived future share price performance.</span>
                                </li>
                                <li><span><b>Transaction Value:</b>  The historic distribution of deal values for each transaction type in the Smart Insider database (Buy, Sell etc.) is determined. A standard score based on the median and quartiles of the relevant transaction type's distribution is assigned to each deal. This score is rescaled to give a number between 0 and 100, with a cap at 100. This scores the transactions importance relative to the history of the values of that type of transaction across all directors for the years covered in the database.</span>
                                </li>
                                <li><span><b>Change in Holding:</b>  As directors have different means (ie £5,000 may be a lot of money to some directors, small change to others) the percentage change in holding caused by the transaction is also calculated as a score of the deal's significance to the director. Larger changes are considered to be more significant. Deals increasing a director's holding have their score capped at 100 for consistency with the maximum available to deals which reduce holdings.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                How To Read The Conviction Rating</h4>
            <hr class="title-separator">
            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span>As an index, Conviction Rating is a number between 1 and 100 which puts the most significant transactions at 100 and the least at 0. Visually a Conviction Rating is displayed as a set of stars as shown above. Typically, to get a high Conviction Rating, a transaction is seen as significant when: </span>
                            <ul>
                                <li><span>It is of the type more likely to reflect a director's view of future share price movement.</span>
                                </li>
                                <li><span>The value of the deal is large relative to the value of such types of director transaction in the past.</span>
                                </li>
                                <li><span>The number of shares dealt is large relative to the director's pre-deal holding, indicating a significant change in interest in the company.</span>
                                </li>
                            </ul>
                            <span>Conversely a low Conviction Rating would occur when:</span>
                            <ul>
                                <li><span>The transaction type has a remunerative element such as Options exercise or Award.</span>
                                </li>
                                <li><span>The value of the deal is small relative to the value of such types of director transaction in the past.</span>
                                </li>
                                <li><span>The number of shares dealt is small relative to the director's pre-deal holding, indicating a minor change in interest in the company.</span>
                                </li>
                            </ul>

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
                            <span>Look for the stars; we put these against transactions in the results tables, and in the trade details. They relate to the following scores:</span>
                            <table class="stars" title="" cellspacing="0" cellpadding="0">
                                <thead>
                                <tr>
                                    <th>Conviction Rating</th>
                                    <th>Stars</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd">
                                    <td> &lt; 50</td>
                                    <td>
                                        <span title="Significance: 49 out of 100" class="fas fa-star starm"></span>
                                        <span title="Significance: 49 out of 100" class="fas fa-star starm"></span>
                                        <span title="Significance: 49 out of 100" class="fas fa-star starm"></span>
                                        <span title="Significance: 49 out of 100" class="fas fa-star starm"></span>
                                        <span title="Significance: 49 out of 100" class="fas fa-star starm"></span>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>51-60</td>
                                    <td>
                                        <span title="Significance: 59 out of 100"
                                              class="fas fa-star starm star2"></span>
                                        <span title="Significance: 59 out of 100"
                                              class="fas fa-star starm star2"></span>
                                        <span title="Significance: 59 out of 100"
                                              class="fas fa-star starm star2"></span>
                                        <span title="Significance: 59 out of 100"
                                              class="fas fa-star starm star2"></span>
                                        <span title="Significance: 59 out of 100"
                                              class="fas fa-star starm star2"></span>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>61-70</td>
                                    <td>
                                        <span title="Significance: 69 out of 100"
                                              class="fas fa-star starm star3"></span>
                                        <span title="Significance: 69 out of 100"
                                              class="fas fa-star starm star3"></span>
                                        <span title="Significance: 69 out of 100"
                                              class="fas fa-star starm star3"></span>
                                        <span title="Significance: 69 out of 100"
                                              class="fas fa-star starm star3"></span>
                                        <span title="Significance: 69 out of 100"
                                              class="fas fa-star starm star3"></span>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>71-80</td>
                                    <td>
                                        <span title="Significance: 79 out of 100"
                                              class="fas fa-star starm star4"></span>
                                        <span title="Significance: 79 out of 100"
                                              class="fas fa-star starm star4"></span>
                                        <span title="Significance: 79 out of 100"
                                              class="fas fa-star starm star4"></span>
                                        <span title="Significance: 79 out of 100"
                                              class="fas fa-star starm star4"></span>
                                        <span title="Significance: 79 out of 100"
                                              class="fas fa-star starm star4"></span>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td>81-90</td>
                                    <td>
                                        <span title="Significance: 89 out of 100"
                                              class="fas fa-star starm star5"></span>
                                        <span title="Significance: 89 out of 100"
                                              class="fas fa-star starm star5"></span>
                                        <span title="Significance: 89 out of 100"
                                              class="fas fa-star starm star5"></span>
                                        <span title="Significance: 89 out of 100"
                                              class="fas fa-star starm star5"></span>
                                        <span title="Significance: 89 out of 100"
                                              class="fas fa-star starm star5"></span>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>91-100</td>
                                    <td>
                                        <span title="Significance: 99 out of 100"
                                              class="fas fa-star starm star6"></span>
                                        <span title="Significance: 99 out of 100"
                                              class="fas fa-star starm star6"></span>
                                        <span title="Significance: 99 out of 100"
                                              class="fas fa-star starm star6"></span>
                                        <span title="Significance: 99 out of 100"
                                              class="fas fa-star starm star6"></span>
                                        <span title="Significance: 99 out of 100"
                                              class="fas fa-star starm star6"></span>
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
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
