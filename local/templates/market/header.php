<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?php

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $APPLICATION->ShowHead(); ?>

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php

        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/vendor/bootstrap/css/bootstrap.min.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/fontawesome.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/templatemo-sixteen.css");
        Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/owl.css");
        Asset::getInstance()->addString('<meta charset="utf-8">');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
        Asset::getInstance()->addString('<meta name="description" content="">');
        Asset::getInstance()->addString('<meta name="author" content="">');
        Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">');

    ?>

</head>

<body>

<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>