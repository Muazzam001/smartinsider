<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content bg-white  scoring">
    <div class="row mt-2 mb-3">
        <div class="col mt-2">
            <div class="filter-heading bg-custom py-2 px-3 ">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>Scoring</span>
                </h3>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-12 my-2">
            <span class="heading_legend "> The objective of 'Scoring' is to measure the trading performance of individual company Directors according to how successful their trading decisions have been. As a historic measure 'Scoring' adds context to new transactions by a Director but as with any historical analysis cannot guarantee future performance.</span>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Measuring Transactions</h4>
            <hr class="title-separator">

            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span> Only 'on-market' transactions are measured for scoring purposes since the objective is to measure the efficacy of a Directors trading decision. Transactions which include a remunerative element or are conducted at a price which significantly departs from the prevailing market price are excluded. The performance of a company's share price is measured three times subsequent to each transaction at the following intervals:</span>
                            <span><b>Short term:</b> One month</span>
                            <span><b> Medium term:</b> One year</span>
                            <span><b>Long term:</b> 18 months</span>
                            <span> A positive score is attributed to a transaction if the share price rises following a BUY, or falls following a SELL. Conversely, a negative score will be attributed if the share price falls after a BUY or rises after a SELL. The more the share price changes the higher the score attributed. Share price performance is absolute meaning no adjustment for the performance of the market is made.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                Data Aggregation</h4>
            <hr class="title-separator">

            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes">
                        <div class="info_boxes_wrapper d-flex flex-column">
                            <div id="scoring_img">
                                <img class="img-fluid" src="assets/images/scoretable.png" alt="Scoring Chart">
                            </div>
                            <span>Once a transaction has achieved at least one score, it is added to our scoring database and affects the Short, Medium, and Long score [collectively Term Scores] for each Directors BUYs and SELLs. These Term scores are then aggregated to give overall scores for BUYS and SELLS. These aggregate scores are not simply an average of other scores. Each score is calculated individually and ranked against all other Directors in our database who have transacted shares since 1998. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                How To Read The Numbers</h4>
            <hr class="title-separator">
            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span> All Director scores are a number between 1 and 100, the more successful a Directors trading record, the higher his score. Each score is achieved through ranking raw data against that for all other Directors, this ensures an even distribution of scores even where clusters occur in the raw data.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <h4 class="text-truncate heading criteria d-flex text-dark border-custom font-weight-bold">
                How To Find Scores</h4>
            <hr class="title-separator">
            <div class="row mt-0 mb-1">
                <div class="col align-self-center ">
                    <div class="info_boxes mt-0">
                        <div class="d-flex flex-column info_boxes_wrapper">
                            <span> <span id="find_scores" class="float-right">
                        <img src="assets/images/personsearch.png" alt="Find Scores"></span> Separate scores are calculated for each Directorship which an individual holds or has held since 1998 (as long as the Director has traded in that time). On the top of every page within the members section, there is a person search that navigates to a person's detail page including score.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
