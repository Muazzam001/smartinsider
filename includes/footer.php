<!-- footer -->
<div class="container">
    <footer>
        <div class="left-footer">
            <div class="copyright">
                <a href="#" class="copyright text-white">Copyright &copy; <span id="foot-year"></span> Smart Insider Ltd</a>
            </div>
        </div>
    </footer>
</div>
<!-- /footer -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!--<script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>-->
<!--<script type="text/javascript" src="./assets/js/jquery-ui.min.js"></script>-->


<script type="text/javascript" src="./assets/js/datatables.min.js"></script>

<script type="text/javascript" src="./assets/js/popper.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-treeview.min.js"></script>

<script type="text/javascript" src="./assets/js/custombox.min.js"></script>
<script type="text/javascript" src="./assets/js/custombox.legacy.min.js"></script>

<script type="text/javascript" src="./assets/js/mdb.min.js"></script>

<script type="text/javascript" src="./assets/js/scrollBar.js"></script>

<?php if (basename($_SERVER['PHP_SELF']) == "person.php" || basename($_SERVER['PHP_SELF']) == "person-1.php" || basename($_SERVER['PHP_SELF']) == "company.php") { ?>

    <!-- High Charts -->
    <script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/highcharts-more.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/data.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/series-label.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/export-data.js"></script>

    <!-- Additional files for the Highslide popup effect -->
    <script type="text/javascript" src="https://www.highcharts.com/media/com_demo/js/highslide-full.min.js"></script>
    <script type="text/javascript" src="https://www.highcharts.com/media/com_demo/js/highslide.config.js"
            charset="utf-8"></script>

    <link rel="stylesheet" type="text/css" href="https://www.highcharts.com/media/com_demo/css/highslide.css"/>
    <!-- /High Charts -->

    <script type="text/javascript" src="./assets/js/custom/highchart-custom.js?t=<?= time() ?>"></script>

<?php } ?>

<script type="text/javascript" src="./assets/js/tooltipster.bundle.min.js"></script>

<script type="text/javascript" src="./assets/js/custom/jq-script.js?t=<?= time() ?>"></script>
<script type="text/javascript" src="./assets/js/custom/script.js?t=<?= time() ?>"></script>

</body>

</html>
