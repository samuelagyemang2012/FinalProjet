<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | Trendy-Gear</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/prettyPhoto.css" rel="stylesheet">
    <link href="./css/price-range.css" rel="stylesheet">
    <link href="./css/animate.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<div class="container text-center">
    <div class="logo-404">
        <a href="index.twig"><img src="./images/home/logo.png" alt=""/></a>
    </div>
    <div class="content-404">
<!--        <img src="./images/errors/404.png" class="img-responsive" alt=""/>-->
        <h1>YOUR ORDER IS BEING PROCESSED.</h1>
        <p>A mail has been sent to <?php isset($_SESSION['email']) ? $_SESSION['email'] : ''?></p>
        <h2><a href="index.php">Bring me back Home</a></h2>
    </div>
</div>


<script src="./js/jquery.js"></script>
<script src="./js/price-range.js"></script>
<script src="./js/jquery.scrollUp.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.prettyPhoto.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
