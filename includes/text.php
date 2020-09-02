<?php
$x = filemtime('mix-manifest.json');

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/dist/app.css?i=<?= $x ?>">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <title>SmartInsider</title>
</head>
<body>
<div id="app">
    <router-view/>
</div>
<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
        crossorigin="anonymous"></script>
<script src="/dist/app.js?i=<?= $x ?>"></script>

</body>
</html>
