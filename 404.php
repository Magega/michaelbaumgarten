<?php
header('HTTP/1.1 404 Not Found');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../../../css/main.css">
    <link rel="stylesheet" href="./../../../css/media.css">
    <link rel="stylesheet" href="./../../../css/scroll.css">
    <link rel="stylesheet" href="./../../../css/home.css">
    <link rel="stylesheet" href="./../../../css/404.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@700&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="./img/favicon_mb.png">

    <title>404 page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/newsletter.php'; ?>

<section class="error-page">
    <div class="error-container">
        <h1>404</h1>
        <p>Page Not Found</p>
        <a href="index.php">To Home Page</a>
    </div>
</section>
<script src="./../../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./../../../js/hamburger.js"></script>
    <script src="./../../../js/newsletter.js"></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>