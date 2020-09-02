<?php require("includes/header.php"); ?>

<!-- .container -->
<main role="main" class="container content admincompany bg-white">

    <div class="row my-2 ">
        <div class="col mt-2">
            <div class="filter-heading bg-custom py-2 px-3 d-inline-flex justify-content-between w-100">
                <h3 class="heading search-filter d-flex align-items-center text-white font-weight-bold">
                    <span>User Details - Mark Lacey <span style="color:#F44236;">(Inactive)</span> </span>
                </h3>
                <div class="backLink">
                    <a class="font-weight-bold" href="" style="color: #fff;">&lt;&lt; Back to adminbox</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div id="activityTabs">
                <ul class="nav nav-tabs" id="activityTabList" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="user_activity_tab" data-toggle="tab" href="#user_activity"
                           role="tab" aria-controls="user_activity" aria-selected="true" title="User Activity">
                            User Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="reports_tab" data-toggle="tab" href="#report_activity" role="tab"
                           aria-controls="report_activity" aria-selected="false" title="Reports">Reports</a>
                    </li>
                </ul>
                <div class="tab-content pt-3 pb-2" id="activityTabContent">
                    <div class="tab-pane fade show active" id="user_activity" role="tabpanel"
                         aria-labelledby="user_activity_tab">
                        <div class="table-responsive">
                            <table class="display user_activity_table1" id="user_activity1" width="100%"
                                   style="margin: 0;"
                                   cellspacing="0" cellpadding="0" border="0">
                                <thead>
                                <tr style="text-align:center">
                                    <th>Company</th>
                                    <th>Name</th>
                                    <th>Last Active</th>
                                    <th>Total Hits</th>
                                    <th>Hits (28 days)</th>
                                    <th>Portfolios</th>
                                    <th>Main/Support</th>
                                    <th>Active?</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr style="text-align:center" class="odd">
                                    <td width="15%">
                                        <a href="">Schroders</a>
                                    </td>
                                    <td width="30%">
                                        <a href="">Mark Lacey <span style="color:#f54b4b;">(Inactive)</span></a>
                                    </td>
                                    <td width="15%">
                                        <abbr class="timeago" style="
                                        text-decoration:none;
                                        border:none;
                                        font-family: Arial,Helvetica,sans-serif;
                                        font-size: 12px;
                                        font-size-adjust: none;
                                        font-style: normal;
                                        font-variant: normal;
                                        font-weight: 400;
                                        line-height: 1.3;"
                                              title="1970-01-01T01:00:00+01:00">Jan 1st</abbr>
                                    </td>
                                    <td width="15%">0</td>
                                    <td width="15%">0</td>
                                    <td width="20%">none</td>
                                    <td width="20%"></td>
                                    <td width="5%">No</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="bottominfo">
                            <span>Last 100 activity logs</span>
                        </div>

                        <div class="table-responsive">
                            <table class="display user_activity_table2" id="user_activity2" style="margin: 0;"
                                   width="100%" cellspacing="0"
                                   cellpadding="0" border="0">
                                <thead>
                                <tr style="text-align:center">
                                    <th>Name</th>
                                    <th>Last Active</th>
                                    <th>IP</th>
                                    <th>Page</th>
                                </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="backLink">
                            <a class="font-weight-bold" href="">&lt;&lt; Back to adminbox</a>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="report_activity" role="tabpanel" aria-labelledby="reports_tab">
                        <div class="table-responsive">
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="reports_table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Reports Name</th>
                                    <th>Latest Actvity</th>
                                    <th>Frequency</th>
                                    <th>See Report</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>Company</td>
                                    <td>Reports Name</td>
                                    <td>Latest Actvity</td>
                                    <td>Frequency</td>
                                    <td>See Report</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="backLink">
                            <a class="font-weight-bold" href="">&lt;&lt; Back to adminbox</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- /.container -->

<?php require("includes/footer.php"); ?>
